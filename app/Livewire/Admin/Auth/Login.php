<?php

namespace App\Livewire\Admin\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public string $username = "";
    public string $password = "";

    public function auth()
    {
        if (User::where('username', $this->username)->get()->count() == 0)
            return redirect(route('login'))->with('error', "User tdk ada");
        if (auth()->attempt([
            'username' => $this->username,
            'password' => $this->password
        ])) return redirect(route('dashboard'))->with('status', "Berhasil login");
        return redirect(route('login'))->with('error', "Gagal Login");
    }

    #[Layout("layouts.admin.base")]
    public function render()
    {
        return view('livewire.admin.auth.login')->title("Login");
    }
}
