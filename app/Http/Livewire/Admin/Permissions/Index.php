<?php

namespace App\Http\Livewire\Admin\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public $name;
    public function addPermissions() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255'],
        ]);
        $roles = Permission::create([
            'name'                  =>      $this->name,
        ]);
        return redirect('/admin/permissions')->with('message', ' New permissions added');
    }
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.admin.permissions.index', compact('permissions'));
    }
}
