<?php

namespace App\Livewire\Admin\Education;

use App\Models\Education;
use Livewire\Component;

class EducationIndex extends Component
{

    public $datas;

    public function mount()
    {
        $this->datas = Education::all();
    }
    public function delete($id)
    {
        Education::findOrFail($id)->delete();
        return redirect(route('master.education.index'));
    }
    public function render()
    {
        return view('livewire.admin.education.education-index')->title('Master Edukasi');
    }
}
