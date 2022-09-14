<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
class Delete extends Component
{

    public $contactId;
    public function getContactProperty() {
        return Contact::select('id', 'name', 'contact_number', 'sim_card')
            ->find($this->contactId);
    }

    public function delete() {
        $this->contact->delete();

        return redirect('/contact')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/contact');
    }
    public function render()
    {
        return view('livewire.contacts.delete');
    }
}
