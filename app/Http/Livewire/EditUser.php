<?php

namespace App\Http\Livewire;

use App\Models\Users;
use Facade\Ignition\Support\FakeComposer;
use Livewire\Component;

// Todo: Edit User
class EditUser extends Component
{
    public $name;
    public $weight;
    public $height;
    public $avatar = 'https://picsum.photos/200';
    public $email; 
    public $message; 

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email'
    ];

    protected $messages = [
        'name.required' => 'İsim boş bırakılmamalı.',
        'email.required' => 'E-posta boş olamaz.',
        'email.email' => 'Uygun bir eposta adresi yazın.',
    ];

    public function __construct()
    {
        
    }
    
    public function submit()
    {
        
    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
