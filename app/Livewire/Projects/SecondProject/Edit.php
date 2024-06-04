<?php

namespace App\Livewire\Projects\SecondProject;

use App\Models\Datatable;
use Livewire\Component;

class Edit extends Component
{
    public $open = false;
    public $name, $age, $document, $email;
    public $datatable;

    public function mount($datatableId)
    {
        $this->datatable = Datatable::find($datatableId);
        if ($this->datatable) {
            $this->name = $this->datatable->name;
            $this->age = $this->datatable->age;
            $this->document = $this->datatable->document;
            $this->email = $this->datatable->email;
        }
    }

    public function edit()
    {
        if ($this->datatable) {
            $this->datatable->update([
                'name' => $this->name,
                'age' => $this->age,
                'document' => $this->document,
                'email' => $this->email,
            ]);
            $this->reset('open');
            $this->dispatch('render');
        }
    }


    public function render()
    {
        return view('livewire.projects.second-project.edit');
    }
}

