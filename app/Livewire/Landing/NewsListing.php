<?php

namespace App\Livewire\Landing;

use App\Models\CMS\CmsNews;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class NewsListing extends Component
{
    public $news;
    public $recentNews;

    public  function mount()
    {
        $this->news = CmsNews::latest()->get();
        $this->recentNews = CmsNews::latest()->limit(2)->get();
    }

    #[Layout('layouts.landing.app')]
    public function render(): View
    {
        return view('livewire.landing.news-listing');
    }
}
