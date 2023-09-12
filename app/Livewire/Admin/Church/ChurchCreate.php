<?php

namespace App\Livewire\Admin\Church;

use App\Models\Church;
use Livewire\Component;

class ChurchCreate extends Component
{
    public string $name = "";
    public string $address = "";

    public function save()
    {
        Church::create([
            'name' => $this->name,
            'address' => $this->address
        ]);
        return redirect(route('master.church.index'));
    }

    public function render()
    {
        return view('livewire.admin.church.church-form');
    }
}
