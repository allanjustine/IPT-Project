<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class Index extends Component
{

    public function loadContacts() {
        $contacts = Contact::orderBy('name')->get();

        return compact('contacts');
    }

    public function render()
    {
        return view('livewire.contacts.index', $this->loadContacts());
    }
}
