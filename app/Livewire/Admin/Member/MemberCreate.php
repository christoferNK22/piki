<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use App\Models\Church;
use App\Models\Interest;
use App\Models\Education;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class MemberCreate extends Component
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

    public function save()
    {
        Member::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'bod' => $this->bod,
            'address' => $this->address,
            'contact' => $this->contact,
            'gender' => $this->gender,
            'yearIn' => $this->yearIn,
            'church_id' => $this->churchId,
            'education_id' => $this->educationId,
            'interest_id' => $this->interestId,
        ]);
        return redirect(route('master.member.index'));
    }

    public function render()
    {
        $churches = Church::all();
        $educations = Education::all();
        $interests = Interest::all();
        return view('livewire.admin.member.member-form', compact('churches', 'educations', 'interests'))->title("Tambah Member");
    }
}
