<?php
namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;
use App\Models\Compras;

class ComprasIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $compras = Compras::where('proveedor', 'LIKE', '%'. $this->search .'%')->paginate();

        return view('livewire.admin.compras-index', compact('compras'));
    }
}
