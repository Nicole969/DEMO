<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;

class ClientesIndex extends Component
{
   
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $clientes = Clientes::where('nombre', 'LIKE', '%'. $this->search .'%')->paginate();

        return view('livewire.admin.clientes-index', compact('clientes'));
    }

}
