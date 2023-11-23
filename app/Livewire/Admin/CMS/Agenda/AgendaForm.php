<?php

namespace App\Livewire\Admin\CMS\Agenda;

use App\Models\CMS\CmsAgenda;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class AgendaForm extends Component
{
    public string $activity = "";
    public string $date = "";
    public string $startDate = "";
    public string $finishDate = "";
    public string $title = "";
    public string $note = "";

    public ?CmsAgenda $agenda = null;

    public function render()
    {
        return view('livewire.admin.cms.agenda.agenda-form');
    }

    public function mount(mixed $agendaId = null)
    {
        if (!is_null($agendaId)) {
            $this->agenda = CmsAgenda::findOrFail($agendaId);
            $this->activity  = $this->agenda->activity;
            $this->date  = $this->agenda->date;
            $this->startDate  = $this->agenda->start_date;
            $this->finishDate  = $this->agenda->finish_date;
            $this->title  = $this->agenda->title;
            $this->note  = $this->agenda->note;
        }
    }

    public function save()
    {
        $model = $agenda ?? new CmsAgenda();
        $model->activity = $this->activity;
        $model->date = now();
        $model->start_date = $this->startDate;
        $model->finish_date = $this->finishDate;
        $model->title = $this->title;
        $model->note = $this->note;
        $model->save();

        return redirect(route('cms.agenda.index'));
    }
}
