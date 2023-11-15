<?php

namespace App\Livewire\Admin\CMS;

use App\Models\CMS\CmsNews;
use Livewire\Component;

class News extends Component
{
    public string $title= "";
    public string $content= "";
    public string $imageNews= "";

    public function render()
    {
        return view('livewire.admin.cms.news');
    }

    public function save()
    {
        $model = new CmsNews();
        $model->title = $this->title;
        $model->content = $this->content;
        $model->image_news = $this->imageNews;
        $model->save();

        return redirect(route('cms.news.index'));
    }
}
