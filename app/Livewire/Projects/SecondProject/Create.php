<?php

namespace App\Livewire\Projects\SecondProject;

use App\Models\Datatable;
use Livewire\Component;

class Create extends Component
{
    public $open = false;
    public $datatable, $name, $age, $document, $email;

    public function save(){

        Datatable::create($this->only('name', 'age', 'document', 'email'));
        $this->reset('name', 'age', 'document', 'email', 'open');
        $this->dispatch('render');

    }
    public function render()
    {
        return view('livewire.projects.second-project.create');

    }
}
