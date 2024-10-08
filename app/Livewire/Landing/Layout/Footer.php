<?php

namespace App\Livewire\Landing\Layout;

use App\Models\CMS\CmsContactInformation;
use Livewire\Component;

class Footer extends Component
{
    public CmsContactInformation $contactInformation;

    public function mount()
    {
        $this->contactInformation = CmsContactInformation::first();
    }

    public function render()
    {
        return view('layouts.landing.partials.footer');
    }
}
