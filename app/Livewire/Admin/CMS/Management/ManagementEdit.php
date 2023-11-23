<?php

namespace App\Livewire\Admin\CMS\Management;

use App\Models\CMS\CmsManagement;
use Livewire\Component;

class ManagementEdit extends Component
{
    public $data;
    public string $dewan = "";
    public string $position = "";
    public string $name = "";
    public string $origin = "";
    public string $image;   

    public function mount($id)
    {
        $this->data = CmsManagement::findOrFail($id);
        $this->name = $this->data->name;
        $this->dewan = $this->data->dewan;
        $this->position = $this->data->position;
        $this->origin = $this->data->origin;
        $this->image = $this->data->image;
    }

    public function save()
    {
        $this->data->update([
            'name' => $this->name,
            'dewan' => $this->dewan,
            'position' => $this->position,
            'origin' => $this->origin,
            'image' => $this->image
        ]);
        return redirect(route('cms.pengurus.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.management.management-form')->title("Edit Pengurus {$this->data->name}");
    }
}
