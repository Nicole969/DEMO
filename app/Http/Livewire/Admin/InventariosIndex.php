<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;
use App\Models\Inventarios;


class InventariosIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $inventarios = Inventarios::where('nombre', 'LIKE', '%'. $this->search .'%')->paginate();

        return view('livewire.admin.inventarios-index', compact('inventarios'));
    }
}
