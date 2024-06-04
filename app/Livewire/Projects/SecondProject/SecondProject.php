<?php

namespace App\Livewire\Projects\SecondProject;

use App\Models\Datatable;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class SecondProject extends Component
{
    use WithPagination;
    public $open = true;
    public $datatables;
    #[On('render')]

    public function mount(){
        $this->datatables = Datatable::all();
    }

    public function destroy($datatableId){
        $datatable = Datatable::find($datatableId);
        $datatable -> delete();
        $this->datatables = Datatable::all();

    }

    public function updatingSearch()
    {
        $this->resetPage(); // Restablece la página de paginación cuando se actualiza la búsqueda
    }

    public function render()
    {
        return view('livewire.projects.second-project.second-project');
    }
}
