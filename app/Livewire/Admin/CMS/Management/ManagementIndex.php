<?php

namespace App\Livewire\Admin\CMS\Management;

use App\Models\CMS\CmsManagement;
use Livewire\Component;

class ManagementIndex extends Component
{

    public $datas;

    public function mount()
    {
        $this->datas = CmsManagement::all();
    }
    public function delete($id)
    {
        CmsManagement::findOrFail($id)->delete();
        return redirect(route('cms.pengurus.index'));
    }
    public function render()
    {
        return view('livewire.admin.cms.management.management-index')->title('Master Pengurus');
    }
}
