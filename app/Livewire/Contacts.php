<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;

    public string $searchTerm = '';
    private int $contactsPerPage = 5;
  
    #[on('contactAdded')]
    public function updateContactList()
    {
    }

    public function render()
    {
        $contacts = null;
        if ($this->searchTerm) {
            $contacts = Contact::where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('email', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('phone', 'like', '%' . $this->searchTerm . '%')
                ->paginate($this->contactsPerPage);
            return view('livewire.contacts')->with('contacts', $contacts);
        }
        return view('livewire.contacts')->with('contacts', Contact::paginate($this->contactsPerPage));
    }
}
