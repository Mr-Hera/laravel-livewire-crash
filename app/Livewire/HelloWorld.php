<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $quote = 'Live your best life mi amigo';

    public function render()
    {
        return view('livewire.hello-world');
    }
}
