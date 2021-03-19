<?php

namespace App\Http\Livewire;

use App\Models\Users;
use Facade\Ignition\Support\FakeComposer;
use Livewire\Component;

class AddUser extends Component
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
        $faker = \Faker\Factory::create("tr_TR");
        $this->name = $faker->name;
        $this->email = $faker->email;
        $this->height = rand(150,202) . " cm";
        $this->weight = rand(60,95) . " kg";
    }
    
    public function submit()
    {
        $this->validate();

        Users::create([
            'name' => $this->name,
            'avatar' => $this->avatar,
            'weight' => $this->weight,
            'height' => $this->height,
            'email' => $this->email
        ]);

        session()->flash('message', 'Başarıyla kaydedildi.');
        return redirect()->to('/user/list');
    }

    public function render()
    {
        return view('livewire.add-user');
    }
}
