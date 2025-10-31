<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\On;
class Contacts extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    #[on('contactAdded')]
    public function updateContactList()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
