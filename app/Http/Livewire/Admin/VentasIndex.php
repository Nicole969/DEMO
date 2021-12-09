<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;
use App\Models\Ventas;

class VentasIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $ventas = Ventas::where('nombre', 'LIKE', '%'. $this->search .'%')->paginate();

        return view('livewire.admin.ventas-index', compact('ventas'));
    }
}
