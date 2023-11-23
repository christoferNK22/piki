<?php

namespace App\Livewire\Admin\CMS;

use App\Models\CMS\CmsVisiMisi;
use Livewire\Component;

class VisiMisi extends Component
{
    public string $visi1 = "";
    public string $visi2 = "";
    public string $visi3 = "";
    public string $visi4 = "";
    public string $visi5 = "";

    public function render()
    {
        return view('livewire.admin.cms.visi-misi');
    }

    public function mount()
    {
        $visiMisi = CmsVisiMisi::first();
        if (!empty($visiMisi)) {
            $this->visi1 = $visiMisi->visi1 ?? "";
            $this->visi2 = $visiMisi->visi2 ?? "";
            $this->visi3 = $visiMisi->visi3 ?? "";
            $this->visi4 = $visiMisi->visi4 ?? "";
            $this->visi5 = $visiMisi->visi5 ?? "";
        }
    }

    public function save()
    {
        $model = new CmsVisiMisi();
        $model->visi1 = $this->visi1;
        $model->visi2 = $this->visi2;
        $model->visi3 = $this->visi3;
        $model->visi4 = $this->visi4;
        $model->visi5 = $this->visi5;
        $model->save();

        return redirect(route('cms.visi-misi.index'));
    }
}
