<?php

namespace App\Livewire\Home;

use Livewire\Component;

class InstagramAccount extends Component
{
    public $igUsername = 'piki_sleman';

    public function render()
    {
        return view('livewire.instagram-account', [
            'igUsername' => $this->igUsername,
        ]);
    }
}
