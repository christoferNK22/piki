<?php

namespace App\Livewire\Interest;

use App\Models\Interest;
use Livewire\Component;

class InterestCreate extends Component
{
    public string $name = "";
    public string $address = "";

    public function save()
    {
        Interest::create([
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
