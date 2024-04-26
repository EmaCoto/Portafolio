<?php

namespace App\Livewire\Projects;

use Livewire\Component;

class FirstProject extends Component
{
    public $open = true;
    public function render()
    {
        return view('livewire.projects.first-project');
    }
}
