<?php

namespace App\Livewire\Landing;

use App\Models\CMS\CmsProfile;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Profile extends Component
{
    #[Layout('layouts.landing.app')]
    public function render(): View
    {
        return view('livewire.landing.profile', ['profile' => CmsProfile::first()]);
    }
}
