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

    public function save()
    {
        $model = new CmsVisiMisi();
        $model->visi1 = $this->visi1;
        $model->visi1 = $this->visi1;
        $model->visi1 = $this->visi1;
        $model->visi1 = $this->visi1;
        $model->visi1 = $this->visi1;
        $model->save();

        return redirect(route('cms.visi-misi.index'));
    }
}
