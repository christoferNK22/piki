<?php

namespace App\Livewire\Admin\CMS\News;

use App\Models\CMS\CmsNews;
use Livewire\Component;

class NewsEdit extends Component
{
    public $data;
    public string $title= "";
    public string $content= "";
    public string $imageNews= "";

    public function mount($id)
    {
        $this->data = CmsNews::findOrFail($id);
        $this->title = $this->data->title;
        $this->content = $this->data->content;
        $this->imageNews = $this->data->image_news;
    }

    public function save()
    {
        $this->data->update([
            'title' => $this->title,
            'content' => $this->content
        ]);
        return redirect(route('cms.berita.index'));
    }

    public function render()
    {
        return view('livewire.admin.cms.news.news-form')->title("Edit Berita {$this->data->name}");
    }
}
