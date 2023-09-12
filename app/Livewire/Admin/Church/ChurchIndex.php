<?php

namespace App\Livewire\Admin\Church;

use App\Models\Church;
use Livewire\Component;

class ChurchIndex extends Component
{

    public $datas;

    public function mount()
    {
        $this->datas = Church::all();
    }
    public function delete($id)
    {
        Church::findOrFail($id)->delete();
        return redirect(route('master.church.index'));
    }
    public function render()
    {
        return view('livewire.admin.church.church-index')->title('Master Gereja');
    }
}
