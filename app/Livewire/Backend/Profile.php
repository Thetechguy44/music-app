<?php

namespace App\Livewire\Backend;

use Livewire\Component;

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
    }

    public function render()
    {
        return view('livewire.backend.profile');
    }
}
