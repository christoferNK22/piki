<?php

namespace App\Livewire\Member\Auth;

use App\Models\Member;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public string $email = "";
    public string $password = "";

    public function auth()
    {
        if (Member::where('email', $this->email)->get()->count() == 0)
            return redirect(route('member.login'))->with('error', "Member tdk ada");
        if (auth('member')->attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) return redirect(route('member.dashboard'));
        return redirect(route('member.login'))->with('error', "Gagal Login");
    }

    #[Layout("layouts.admin.base")]
    public function render()
    {
        return view('livewire.member.auth.login')->title("Login");
    }
}
