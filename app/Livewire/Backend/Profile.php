<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $tab = null;
    public $tabname = 'profile_profile';
    protected $queryString = ['tab'];
    public $id, $name, $bio, $email, $artist_name, $image, $phone, $dob, $genderOptions, $selectedGender, $address, $created_on;

    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

    // Form validation rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'bio' => 'nullable|string',
        'artist_name' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'dob' => 'nullable|date',
        'selectedGender' => 'nullable|string|max:10',
        'address' => 'nullable|string|max:255',
    ];
    
    public function mount()
    {
        $this->tab = request()->tab ? request()->tab : $this->tabname;

        $profile = Auth::user();

        // Assign basic profile data
        $this->id = $profile->id;
        $this->name = $profile->name;
        $this->email = $profile->email;
        $this->phone = $profile->phone;
        $this->dob = $profile->dob;
        $this->genderOptions = ['male', 'female', 'other'];
        $this->selectedGender = $profile->gender;
        $this->address = $profile->address;
        $this->created_on = $profile->created_at;

        // Check if the artist relationship exists
        if ($profile->artist) {
            $this->bio = $profile->artist->bio;
            $this->image = $profile->artist->image;
            $this->artist_name = $profile->artist->artist_name;
        } else {
            // Handle the case when the artist relation is null (optional)
            $this->bio = null;
            $this->image = null;
            $this->artist_name = null;
        }
    }

    public function render()
    {
        return view('livewire.backend.profile');
    }

    public function update()
    {
        // Validate the data
        $validatedData = $this->validate();

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's profile
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->dob = $this->dob;
        $user->gender = $this->selectedGender;
        $user->address = $this->address;
        $user->save(); // Save the changes to the user table

        // Check if the user has an artist profile and update it
        if ($user->artist) {
            $user->artist->bio = $this->bio;
            $user->artist->artist_name = $this->artist_name;
            $user->artist->save(); // Save the changes to the artist table
        }

        // Optionally show a success message
        session()->flash('message', 'Profile updated successfully!');
    }
}
