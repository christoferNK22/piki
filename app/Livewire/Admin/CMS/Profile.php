<?php

namespace App\Livewire\Admin\CMS;

use App\Models\CMS\CmsProfile;
use Livewire\Component;

class Profile extends Component
{
    public string $sejarah= "";
    public string $foundation= "";
    public string $visiMisi= "";

    public function render()
    {
        return view('livewire.admin.cms.profile');
    }

    public function save()
    {
        $model = new CmsProfile();
        $model->sejarah = $this->sejarah;
        $model->foundation = $this->foundation;
        $model->visi_misi = $this->visiMisi;
        $model->save();

        return redirect(route('cms.profile.index'));
    }
}