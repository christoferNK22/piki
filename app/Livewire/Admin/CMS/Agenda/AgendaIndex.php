<?php

namespace App\Livewire\Admin\CMS\Agenda;

use App\Models\CMS\CmsAgenda;
use Livewire\Component;

class AgendaIndex extends Component
{
    public $datas;
    public function render()
    {
        return view('livewire.admin.cms.agenda.agenda-index')->title('Agenda Kegiatan');
    }

    public function mount()
    {
        $this->datas = CmsAgenda::all();
    }

    public function delete($id)
    {
        CmsAgenda::findOrFail($id)->delete();
        return redirect(route('cms.agenda.index'))->with('status', 'Berhasil Hapus Agenda');
    }
}
