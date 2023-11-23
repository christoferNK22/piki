<?php

namespace App\Livewire\Admin\CMS\Agenda;

use App\Models\CMS\CmsAgenda;
use Livewire\Component;

class AgendaIndex extends Component
{
    public $data;
    public string $activity = "";
    public string $date = "";
    public string $startDate = "";
    public string $finishDate = "";
    public string $title = "";
    public string $note = "";

    public function render()
    {
        return view('livewire.admin.cms.agenda');
    }

    public function save()
    {
        $model = new CmsAgenda();
        $model->activity = $this->activity;
        $model->date = $this->date;
        $model->start_date = $this->startDate;
        $model->finish_date = $this->finishDate;
        $model->title = $this->title;
        $model->note = $this->note;
        $model->save();

        return redirect(route('cms.agenda.index'));
    }
}
