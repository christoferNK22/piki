<?php

namespace App\Livewire\Church;

use App\Models\Church;
use Livewire\Component;

class ChurchEdit extends Component
{
    public $data;
    public string $name = "";
    public string $address = "";

    public function mount($id)
    {
        $this->data = Church::findOrFail($id);
        $this->name = $this->data->name;
        $this->address = $this->data->address;
    }

    public function save()
    {
        $this->data->update([
            'name' => $this->name,
            'address' => $this->address
        ]);
        return redirect(route('master.church.index'));
    }

    public function render()
    {
        return view('livewire.church.church-form');
    }
}
