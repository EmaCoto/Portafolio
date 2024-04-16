<?php

namespace App\Livewire\Projects;

use Livewire\Component;

class FirstProject extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.projects.first-project');
    }
}
