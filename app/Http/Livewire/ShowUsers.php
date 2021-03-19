<?php

namespace App\Http\Livewire;

use App\Models\Users;
use Livewire\Component;


class ShowUsers extends Component
{
    public $users;
    public $readyToLoad;

    public function __construct()
    {
        $this->readyToLoad = false; // Lazy Load...
        $this->users = [];
    }

    public function loadUsers()
    {
        $this->users = Users::all()->sortDesc(); 
        $this->readyToLoad = true;
    }

    public function delete($user){
        $user = Users::find($user);
        session()->flash('message', "[$user->id] {$user->name} silindi.");
        $user->delete();
        return redirect()->to('/user/list');
    }
    
    public function render()
    {
        return view('livewire.show-users');
    }
}
