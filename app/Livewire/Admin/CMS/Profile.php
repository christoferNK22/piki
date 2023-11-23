<?php

namespace App\Livewire\Admin\CMS;

use App\Models\CMS\CmsProfile;
use Livewire\Component;

class Profile extends Component
{
    public string $sejarah = "";
    public string $foundation = "";

    public function render()
    {
        return view('livewire.admin.cms.profile');
    }

    public function mount()
    {
        $profile = CmsProfile::first();
        if (!empty($profile)) {
            $this->sejarah = $profile->sejarah ?? "";
            $this->foundation = $profile->foundation ?? "";
        }
    }

    public function updated()
    {
        $this->dispatch('summernote-reinit');
    }

    public function save()
    {
        $model = CmsProfile::first() ?? (new CmsProfile());
        $model->sejarah = $this->sejarah;
        $model->foundation = $this->foundation;
        $model->save();

        return redirect(route('cms.profile.index'));
    }
}

