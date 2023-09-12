<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public string $email = "";
    public string $password = "";

    #[Layout("layouts.base")]
    public function render()
    {
        return view('livewire.auth.login')->title("Login");
    }
}
