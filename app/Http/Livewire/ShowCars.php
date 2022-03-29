<?php

namespace App\Http\Livewire;

use App\Models\Cars;
use Livewire\Component;

class ShowCars extends Component
{
    public $cars;
    public $readyToLoad;
    public $sortType = 'all';
    public $sortBy = 'ASC';

    public function __construct()
    {
        $this->readyToLoad = false; // Lazy Load...
        $this->cars = [];
    }


    public function render()
    {
        return view('livewire.show-cars');
    }

    public function loadCars($type = 'all', $sortBy = 'ASC')
    {
        $this->sortType = $type;
        $this->sortBy = $sortBy;

        if($type == 'all') $this->cars = Cars::orderBy('id', $sortBy)->get();
        if($type == 'price') $this->cars = Cars::orderBy('price', $sortBy)->get();
        if($type == 'date') $this->cars = Cars::orderBy('year', $sortBy)->get();
    }
}
