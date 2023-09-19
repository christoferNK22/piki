<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use App\Models\Church;
use App\Models\Interest;
use App\Models\Education;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class MemberCreate extends Component
{
    use WithFileUploads;

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
    public $image;

    public function save()
    {
        $imagePath = null;
        if (!empty($this->image)) {
            $imagePath = $this->image->store('member');
        }

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
            'image_path' => $imagePath,
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
