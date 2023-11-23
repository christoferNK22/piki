<?php

namespace App\Livewire\Admin\CMS;

use App\Models\CMS\CmsContactInformation;
use Livewire\Component;

class ContactInformation extends Component
{
    public string $phoneNumber = "";
    public string $email = "";
    public string $address = "";
    public string $mapUrl = "";
    public string $whatsappUrl = "";
    public string $facebookUrl = "";
    public string $instagramUrl = "";
    public string $twitterUrl = "";
    public string $youtubeUrl = "";

    public function render()
    {
        return view('livewire.admin.cms.contact-information');
    }

    public function mount()
    {
        $contactInformation = CmsContactInformation::first();
        if (!empty($contactInformation)) {
            $this->phoneNumber = $contactInformation->phone_number ?? "";
            $this->email = $contactInformation->email ?? "";
            $this->address = $contactInformation->address ?? "";
            $this->mapUrl = $contactInformation->map_url ?? "";
            $this->whatsappUrl = $contactInformation->whatsapp_url ?? "";
            $this->facebookUrl = $contactInformation->facebook_url ?? "";
            $this->instagramUrl = $contactInformation->instagram_url ?? "";
            $this->twitterUrl = $contactInformation->twitter_url ?? "";
            $this->youtubeUrl = $contactInformation->youtube_url ?? "";
        }
    }

    public function save()
    {
        $model = CmsContactInformation::first() ?? (new CmsContactInformation());
        $model->phone_number = $this->phoneNumber;
        $model->email = $this->email;
        $model->address = $this->address;
        $model->map_url = $this->mapUrl;
        $model->whatsapp_url = $this->whatsappUrl;
        $model->facebook_url = $this->facebookUrl;
        $model->instagram_url = $this->instagramUrl;
        $model->twitter_url = $this->twitterUrl;
        $model->youtube_url = $this->youtubeUrl;
        $model->save();

        return redirect(route('cms.contact_information.index'));
    }
}
