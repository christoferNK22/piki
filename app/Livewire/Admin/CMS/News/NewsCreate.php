<?php

namespace App\Livewire\Admin\CMS\News;

use App\Models\CMS\CmsNews;
use Livewire\Component;

class NewsCreate extends Component
{
    public string $title = "";
    public string $content = "";
    public string $imageNews = "";

    public function save()
    {
        CmsNews::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        return redirect(route('cms.berita.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.news.news-form')->title('Tambah Berita');
    }
}
