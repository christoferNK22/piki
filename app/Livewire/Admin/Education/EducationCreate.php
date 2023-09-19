<?php

namespace App\Livewire\Admin\Education;

use App\Models\Education;
use Livewire\Component;

class EducationCreate extends Component
{
    public string $name = "";

    public function save()
    {
        Education::create([
            'name' => $this->name,
        ]);
        return redirect(route('master.education.index'));
    }

    public function render()
    {
        return view('livewire.admin.education.education-form')->title('Tambah Edukasi');
    }
}
