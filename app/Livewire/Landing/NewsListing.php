<?php

namespace App\Livewire\Landing;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class NewsListing extends Component
{
    #[Layout('layouts.landing.app')]
    public function render(): View
    {
        return view('livewire.landing.news-listing');
    }
}
