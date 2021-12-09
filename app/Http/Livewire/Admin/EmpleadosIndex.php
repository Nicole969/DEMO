<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;
use App\Models\Empleados;
class EmpleadosIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $empleados = Empleados::where('nombres', 'LIKE', '%'. $this->search .'%')->paginate();

        return view('livewire.admin.empleados-index', compact('empleados'));
    }
}
