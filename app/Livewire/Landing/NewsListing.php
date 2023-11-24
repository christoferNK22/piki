<?php

namespace App\Livewire\Landing;

use App\Models\CMS\CmsNews;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class NewsListing extends Component
{
    public $news = null;
    public $recentNews;
    public bool $isSearchMode = false;

    public  function mount()
    {
        $querySearch = request()->query('s');
        $this->isSearchMode = !empty($querySearch);
        $this->news = $this->isSearchMode ? CmsNews::latest()->whereLike('title', $querySearch)->get() : CmsNews::latest()->get();
        $this->recentNews = CmsNews::latest()->limit(2)->get();
    }

    #[Layout('layouts.landing.app')]
    public function render(): View
    {
        return view('livewire.landing.news-listing');
    }
}
