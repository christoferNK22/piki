<?php

namespace App\Livewire\Admin\CMS\News;

use App\Models\CMS\CmsNews;
use Livewire\Component;

class NewsIndex extends Component
{

    public $datas;

    public function mount()
    {
        $this->datas = CmsNews::all();
    }
    public function delete($id)
    {
        CmsNews::findOrFail($id)->delete();
        return redirect(route('cms.berita.index'));
    }
    public function render()
    {
        return view('livewire.admin.cms.news.news-index')->title('Berita');
    }
}
