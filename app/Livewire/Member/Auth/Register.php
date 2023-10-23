<?php

namespace App\Livewire\Member\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use Livewire\Attributes\Layout;
use App\Models\Church;
use App\Models\Education;
use App\Models\Interest;
use Illuminate\Support\Facades\Validator;

class Register extends Component
{
    public $name;
    public $email;
    public $bod;
    public $password;
    public $passwordConfirm;
    public $address;
    public $contact;
    public $gender = "";
    public $yearIn;
    public $churchId = "";
    public $educationId = "";
    public $interestId = "";


    public function register()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'bod' => date('Y-m-d', strtotime($this->bod)),
            'password' => $this->password,
            'password_confirmation' => $this->passwordConfirm,
            'contact' => $this->contact,
            'address' => $this->address,
            'gender' => $this->gender,
            'year_in' => $this->yearIn,
            'church_id' => $this->churchId,
            'interest_id' => $this->interestId,
            'education_id' => $this->educationId,
        ];

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members',
            'bod' => 'required|date',
            'password' => 'required|string|confirmed',
            'contact' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'year_in' => 'required|numeric',
            'church_id' => 'required|exists:churches,id',
            'interest_id' => 'required|exists:interests,id',
            'education_id' => 'required|exists:educations,id',
        ]);

        if ($validator->fails()) {
            $this->dispatch('showError', json_encode($validator->errors()));
            return;
        }
        Member::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'bod' => $this->bod,
            'address' => $this->address,
            'contact' => $this->contact,
            'gender' => $this->gender,
            'yearIn' => $this->yearIn,
            'church_id' => $this->churchId,
            'education_id' => $this->educationId,
            'interest_id' => $this->interestId,
        ]);

        return redirect(route('member.login'))->with('status', 'Registrasi Berhasil');
    }

    #[Layout("layouts.admin.base")]
    public function render()
    {
        $churches = Church::all();
        $educations = Education::all();
        $interests = Interest::all();
        return view('livewire.member.auth.register', compact('churches', 'educations', 'interests'))->title("Register");
    }
}
