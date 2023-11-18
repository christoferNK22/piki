<?php

namespace App\Livewire\Admin;

use App\Models\Church;
use App\Models\Education;
use App\Models\Interest;
use App\Models\Member;
use Livewire\Component;
use Barryvdh\DomPDF\Facade as exportPdf;

class ViewLaporan extends Component
{
    public $data;
    public $filter;

    public function render()
    {
        $query = Church::query();
        $query = Education::query();
        $query = Interest::query();
        $query = Member::query();

        if ($this->filter) {
            $query->where('kolom', 'like', '%' . $this->filter . '%');
        }

        if ($this->selectedOption) {
            $query->where('kolom_select', $this->selectedOption);
        }

        $this->data = $query->get();
        
        return view('livewire.admin.view_laporan');
    }

    public function exportPdf()
    {
        $pdf = exportPdf::loadView('livewire.pdf-view', ['data' => $this->data]);

        return $pdf->download('nama_file.pdf');
    }
}
