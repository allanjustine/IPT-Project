<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;

class Create extends Component
{
    public $name, $email, $contact_number, $address, $sim_card;

    public function addContact() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
            'email'                     =>          ['required', 'email', 'unique:contacts'],
            'contact_number'            =>          ['required', 'numeric', 'digits:11'],
            'address'                   =>          ['required', 'string', 'max:255'],
            'sim_card'                  =>          ['required', 'string', 'max:255']
        ]);

        Contact::create([
            'name'                  =>      $this->name,
            'email'                 =>      $this->email,
            'contact_number'        =>      $this->contact_number,
            'address'               =>      $this->address,
            'sim_card'              =>      $this->sim_card
        ]);

        return redirect('/contact')->with('message', 'Added Successfully');
    }

    public function updated($propertyEmail) {
        $this->validateOnly($propertyEmail, [
            'email'         =>      ['required', 'email', 'unique:contacts']
        ]);
    }


    public function render()
    {
        return view('livewire.contacts.create');
    }
}
