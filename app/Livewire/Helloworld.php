<?php

namespace App\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $quote = 'The Livewire Bandit...';

    public function mount($text) {
        $this->quote = $text;
    }

    public function updated() {
        $this->quote = 'Soy Updated!';
    }

    public function render()
    {
        return view('livewire.helloworld');
    }
}
