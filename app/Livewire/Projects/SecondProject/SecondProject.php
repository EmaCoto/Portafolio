<?php

namespace App\Livewire\Projects\SecondProject;

use App\Models\Datatable;
use Livewire\Component;

class SecondProject extends Component
{
    public $open = true;
    public $datatables;

    public function mount(){
        $this->dispatch('render');
        $this->datatables = Datatable::all();

    }
    // // one section-
    // public $count = 0;
    // // two section--
    // public $paises = [
    //     'Peru',
    //     'Colombia',
    //     'Chile',
    //     'Argentina',
    //     'Inglaterra'
    //  ];
    // public $pais;
    // public $active;
    // three section---

    // //  one section-
    // public function decrement(){
    //     $this->count--;
    // }

    // public function increment(){
    //     $this->count++;
    // }
    // // two section--
    // public function save(){
    //     array_push($this->paises, $this->pais);
    //     $this->reset('pais');
    // }
    // public function delete($index){
    //     unset($this->paises[$index]);
    // }
    // public function changeActive($pais){
    //     $this->active = $pais;
    // }

    public function render()
    {
        return view('livewire.projects.second-project.second-project');
    }
}
