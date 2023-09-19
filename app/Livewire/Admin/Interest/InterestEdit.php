<?php

namespace App\Livewire\Admin\Interest;

use App\Models\Interest;
use Livewire\Component;

class InterestEdit extends Component
{
    public $data;
    public string $name = "";
    public string $code = "";

    public function mount($id)
    {
        $this->data = Interest::findOrFail($id);
        $this->name = $this->data->name;
        $this->code = $this->data->code;
    }

    public function save()
    {
        $this->data->update([
            'name' => $this->name,
            'code' => $this->code
        ]);
        return redirect(route('master.interest.index'));
    }

    public function render()
    {
        return view('livewire.admin.interest.interest-form')->title("Edit Bidang Minat {$this->data->name}");
    }
}
