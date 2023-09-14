<?php

namespace App\Livewire\Member;

use App\Models\Member;
use Livewire\Component;

class Dashboard extends Component
{
    public $data;
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

    public function mount()
    {
        $id = auth('member')->user()->id;
        $this->data = Member::findOrFail($id);
        $this->name = $this->data->name;
        $this->email = $this->data->email;
        $this->bod = $this->data->bod;
        $this->address = $this->data->address;
        $this->contact = $this->data->contact;
        $this->gender = $this->data->gender;
        $this->yearIn = $this->data->year_in;
        $this->churchId = $this->data->church_id;
        $this->educationId = $this->data->education_id;
        $this->interestId = $this->data->interest_id;
    }

    public function save()
    {
        $this->data->update([
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
        return redirect(route('member.dashboard'));
    }

    public function render()
    {
        return view('livewire.admin.member.member-form');
    }
}
