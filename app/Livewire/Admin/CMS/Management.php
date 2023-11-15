<?php

namespace App\Livewire\Admin\CMS;

use App\Models\CMS\CmsManagement;
use Livewire\Component;

class Management extends Component
{
    public string $dewan = "";
    public string $position = "";
    public string $name = "";
    public string $origin = "";
    public string $image = "";

    public function render()
    {
        return view('livewire.admin.cms.management');
    }

    public function save()
    {
        $model = new CmsManagement();
        $model->dewan = $this->dewan;
        $model->position = $this->position;
        $model->name = $this->name;
        $model->origin = $this->origin;
        $model->image = $this->image;
        $model->save();

        return redirect(route('cms.management.index'));
    }
}
