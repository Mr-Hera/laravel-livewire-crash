<?php

namespace App\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $quote = 'The Livewire Bandit...';
    public $isCheck = false;
    public $talk = [''];

    public function resetQuote($text)
    {
        $this->quote = $text;
    }

    public function render()
    {
        return view('livewire.helloworld');
    }
}
