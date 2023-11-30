<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Church;
use App\Models\Member;
use App\Models\Interest;
use App\Models\Education;


class ViewLaporan extends Component
{
    public function viewLaporan()
    {
        
    }

    public function render()
    {
        return view('livewire.admin.view-laporan')->title('View Laporan');
    }
}
