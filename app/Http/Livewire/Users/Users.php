<?php

namespace App\Http\Livewire\Users;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function show()
    {
        $users = User::orderBy('created_at', 'desc')->get();
            return compact('users');
    }
    public function render()
    {
        return view('livewire.users.users', $this->show());
    }
}
