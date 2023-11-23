<?php

namespace App\Livewire\Admin\CMS\Management;

use App\Models\CMS\CmsManagement;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManagementEdit extends Component
{
    use WithFileUploads;

    public $data;
    public string $dewan = "";
    public string $position = "";
    public string $name = "";
    public string $origin = "";
    public $images;
    public $currentImage;

    public function mount($id)
    {
        $this->data = CmsManagement::findOrFail($id);
        $this->name = $this->data->name;
        $this->dewan = $this->data->dewan;
        $this->position = $this->data->position;
        $this->origin = $this->data->origin;
        $this->currentImage = $this->data->image;
    }

    public function save()
    {
        $image = null;

        $data = ([
            'name' => $this->name,
            'dewan' => $this->dewan,
            'position' => $this->position,
            'origin' => $this->origin,
        ]);

        if (!empty($this->images)) {
            $image = $this->images->store('management');
            $data['image'] = $image;
        }

        $this->data->update($data);
        return redirect(route('cms.pengurus.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.management.management-form')->title("Edit Pengurus {$this->data->name}");
    }
}
