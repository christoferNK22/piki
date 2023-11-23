<?php

namespace App\Livewire\Admin\CMS\News;

use App\Models\CMS\CmsNews;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsEdit extends Component
{
    use WithFileUploads;

    public $data;
    public string $title = "";
    public string $content = "";
    public $images;
    public $currentImageNews;

    public function mount($id)
    {
        $this->data = CmsNews::findOrFail($id);
        $this->title = $this->data->title;
        $this->content = $this->data->content;
        $this->currentImageNews = $this->data->image_news;
    }

    public function save()
    {
        $imageNews = null;

        if (!empty($this->images)) {
            $imageNews = $this->images->store('news');
        }

        $this->data->update([
            'title' => $this->title,
            'content' => $this->content,
            'image_news' => $imageNews ?? ''
        ]);

        return redirect(route('cms.berita.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.news.news-form')->title("Edit Berita {$this->data->title}");
    }
}
