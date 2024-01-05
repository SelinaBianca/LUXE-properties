<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 100;

    public function increase(){
        $this->count = $this->count + 1;
    }
    
    public function decrease(){
        $this->count = $this->count - 1;

    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
