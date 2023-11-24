<?php


namespace App\Livewire\Landing;

use App\Models\CMS\CmsAgenda;
use App\Models\CMS\CmsManagement;
use App\Models\CMS\CmsNews;
use App\Models\CMS\CmsVisiMisi;
use Carbon\Carbon;
use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public $news;
    public $visiMisi = [];
    public $events = [];
    public $managements;

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
                'end' => Carbon::parse($val->finish_date)->addDay(1)->toDateString(),
                'description' => $val->note
            ];
        });


        $this->managements = CmsManagement::all();
    }

    public function render(): View
    {
        return view('livewire.landing.dashboard', [
            'titleCase' => fn (string $val) => ucwords(str_replace('_', ' ', $val))
        ])->layout('layouts.landing.app');
    }
}
