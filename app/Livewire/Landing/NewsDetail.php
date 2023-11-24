<?php

namespace App\Livewire\Landing;

use App\Models\CMS\CmsNews;
use Livewire\Attributes\Layout;
use Livewire\Component;

class NewsDetail extends Component
{
    public $news = null;
    public $recentNews;

    public function mount($newsId)
    {
        $this->news = CmsNews::findOrFail($newsId);
        $this->recentNews = CmsNews::latest()->limit(2)->get();
    }

    #[Layout('layouts.landing.app')]
    public function render()
    {
        return view('livewire.landing.news-detail');
    }
}
