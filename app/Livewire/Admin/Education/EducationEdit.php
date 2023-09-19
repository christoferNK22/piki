<?php

namespace App\Livewire\Admin\Education;

use App\Models\Education;
use Livewire\Component;

class EducationEdit extends Component
{
    public $data;
    public string $name = "";

    public function mount($id)
    {
        $this->data = Education::findOrFail($id);
        $this->name = $this->data->name;
    }

    public function save()
    {
        $this->data->update([
            'name' => $this->name,
        ]);
        return redirect(route('master.education.index'));
    }

    public function render()
    {
        return view('livewire.admin.education.education-form')->title("Edit Edukasi {$this->data->name}");
    }
}
