<?php

namespace App\Livewire\Admin\Interest;

use App\Models\Interest;
use Livewire\Component;
use Ramsey\Uuid\Type\Integer;

class InterestIndex extends Component
{

    public $datas;

    public function mount()
    {
        $this->datas = Interest::all();
    }
    public function delete($id)
    {
        Interest::findOrFail($id)->delete();
        return redirect(route('master.interest.index'));
    }
    public function render()
    {
        return view('livewire.admin.interest.interest-index')->title('Bidang Minat');
    }
}
