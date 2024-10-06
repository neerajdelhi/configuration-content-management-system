<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Role;

class CreateRole extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|unique:roles,name',
    ];

    public function createRole()
    {
        $this->validate();

        Role::create(['name' => $this->name]);

        session()->flash('message', 'Role created successfully.');

        $this->reset('name');
    }

    public function render()
    {
        return view('livewire.admin.create-role');
    }

    public function __invoke()
    {
        // Your logic here
    }
}
