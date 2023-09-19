<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use Livewire\Component;

class MemberIndex extends Component
{

    public $datas;

    public function mount()
    {
        $this->datas = Member::all();
    }
    public function delete($id)
    {
        Member::findOrFail($id)->delete();
        return redirect(route('master.member.index'))->with('status', 'OK');
    }
    public function toggleVerifiedMember($id)
    {
        $member = Member::findOrFail($id);
        $member->is_verified = $member->is_verified ? 0 : 1;
        $member->save();
        return redirect(route('master.member.index'))->with('status', 'OK');
    }
    public function render()
    {
        return view('livewire.admin.member.member-index')->title('Master Member');
    }
}
