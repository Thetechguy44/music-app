<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $tab = null;
    public $tabname = 'profile_profile';
    protected $queryString = ['tab'];
    public $id, $name, $bio, $email, $artist_name, $image, $phone, $dob, $gender, $address, $created_on;

    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

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
        $this->gender = $profile->gender;
        $this->address = $profile->address;
        $this->created_on = $profile->created_on;

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

    
}
