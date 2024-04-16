<?php

namespace App\Livewire\About;

use Livewire\Component;

class Aboutme extends Component
{
    public $open = true;
    public function render()
    {
        return view('livewire.about.aboutme');
    }
}
