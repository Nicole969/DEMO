<?php
namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;
use App\Models\Citas;

class CitasIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $citas = Citas::where('descripcion', 'LIKE', '%'. $this->search .'%')->paginate();

        return view('livewire.admin.citas-index', compact('citas'));
    }
}
