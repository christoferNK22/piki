<?php

namespace App\Livewire\Admin\Interest;

use App\Models\Interest;
use Livewire\Component;

class InterestCreate extends Component
{
    public string $name = "";
    public string $code = "";

    public function save()
    {
        Interest::create([
            'name' => $this->name,
            'code' => $this->code
        ]);
        return redirect(route('master.interest.index'));
    }

    public function render()
    {
        return view('livewire.admin.interest.interest-form')->title('Tambah Bidang Minat');
    }
}
