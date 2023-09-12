<?php

namespace App\Livewire\Interest;

use App\Models\Interest;
use Livewire\Component;

class InterestEdit extends Component
{
    public $data;
    public string $name = "";
    public string $address = "";

    public function mount($id)
    {
        $this->data = Interest::findOrFail($id);
        $this->name = $this->data->name;
        $this->address = $this->data->address;
    }

    public function save()
    {
        $this->data->update([
            'name' => $this->name,
            'address' => $this->address
        ]);
        return redirect(route('master.interest.index'));
    }

    public function render()
    {
        return view('livewire.interest.interest-form');
    }
}
