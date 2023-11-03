<?php


namespace App\Livewire\Landing;

use App\Models\CMS\CmsContactInformation;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.landing.dashboard')->layout('layouts.landing.app');
    }
}
