<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $siteLogo = "FurkanSahin 😆";
    public $headerMenu = [
        [ "key" => "user", "val" => "User Home" ],
        [ "key" => "user/list", "val" => "User List" ],
        [ "key" => "cars", "val" => "Cars" ]
    ];

    public function __construct()
    {
        $this->headerMenu = ($this->headerMenu);
    }
    
    public function render()
    {
        return view('livewire.header');
    }
}
