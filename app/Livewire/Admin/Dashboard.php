<?php

namespace App\Livewire\Admin;

use App\Models\Church;
use App\Models\CMS\CmsManagement;
use App\Models\Member;
use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public int $newMember = 0;
    public int $oldMember = 0;
    public int $sumPengurus = 0;
    public int $sumChurch = 0;

    public string $churchId  = "";

    public function mount()
    {
        $this->newMember = Member::where('is_verified', false)->get()->count();
        $this->oldMember = Member::where('is_verified', true)->get()->count();
        $this->sumPengurus = CmsManagement::all()->count();
        $this->sumChurch = Church::all()->count();
    }

    public function calculateSumMember()
    {
        $member = Member::query();
        if (!empty($this->churchId)) {
            $member->where('church_id', $this->churchId);
        }
        $this->newMember = $member->where('is_verified', false)->get()->count();

        $member  = Member::query();
        if (!empty($this->churchId)) {
            $member->where('church_id', $this->churchId);
        }
        $this->oldMember = $member->where('is_verified', true)->get()->count();
    }

    public function render(): View
    {
        return view('livewire.admin.dashboard', ['churches' => Church::all()]);
    }
}
