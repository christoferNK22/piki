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

    public function save()
    {
        $model = new CmsContactInformation();
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

        return redirect(route('cms.contact-information.index'));
    }
}
