<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $name;
    public function addRoles() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
        ]);
        $roles = Role::create([
            'name'                  =>      $this->name,
        ]);
        return redirect('/admin/roles')->with('message', ' New role added');
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.admin.roles.index', compact('roles'));
    }
}
