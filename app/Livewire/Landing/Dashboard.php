<?php


namespace App\Livewire\Landing;

use App\Models\CMS\CmsAgenda;
use App\Models\CMS\CmsNews;
use App\Models\CMS\CmsVisiMisi;
use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public $news;
    public $visiMisi = [];
    public $events = [];

    public function mount(): void
    {
        $this->news = CmsNews::latest()->limit(2)->get();
        $visiMisi = CmsVisiMisi::first();
        $this->visiMisi[] = $visiMisi->visi1;
        $this->visiMisi[] = $visiMisi->visi2;
        $this->visiMisi[] = $visiMisi->visi3;
        $this->visiMisi[] = $visiMisi->visi4;
        $this->visiMisi[] = $visiMisi->visi5;

        $this->events = CmsAgenda::get()->map(function ($val) {
            return [
                'title' => $val->title,
                'start' => $val->start_date,
                'end' => $val->finish_date,
                'description' => $val->note
            ];
        });
    }

    public function render(): View
    {
        return view('livewire.landing.dashboard')->layout('layouts.landing.app');
    }
}
