<?php

namespace App\Livewire\Admin\CMS\News;

use App\Models\CMS\CmsNews;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsCreate extends Component
{
    use WithFileUploads;

    public string $title = "";
    public string $content = "";
    public $images;

    public function updated()
    {
        $this->dispatch('summernote-reinit');
    }
    public function save()
    {
        $imageNews = null;
        if (!empty($this->images)) {
            $imageNews = $this->images->store('news');
        }

        CmsNews::create([
            'title' => $this->title,
            'content' => $this->content,
            'image_news' => $imageNews,
        ]);
        return redirect(route('cms.berita.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.news.news-form')->title('Tambah Berita');
    }
}
