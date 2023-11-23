<?php

namespace App\Livewire\Admin\CMS\Management;

use App\Models\CMS\CmsManagement;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManagementCreate extends Component
{
    use WithFileUploads;

    public string $name = "";
    public string $dewan = "";
    public string $position = "";
    public string $origin = "";
    public $images;

    public function save()
    {
        $image = null;
        if (!empty($this->images)) {
            $image = $this->images->store('management');
        }

        CmsManagement::create([
            'name' => $this->name,
            'dewan' => $this->dewan,
            'position' => $this->position,
            'origin' => $this->origin,
            'image' => $image ?? ''
        ]);
        return redirect(route('cms.pengurus.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.management.management-form')->title('Tambah Pengurus');
    }
}
