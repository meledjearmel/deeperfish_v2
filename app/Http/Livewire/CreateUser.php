<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateUser extends Component
{
    public $email;
    public $lastname;
    public $firstname;
    public $role_id;
    public $password;
    public $create_link = false;

    public function create_user()
    {
        $this->validate([
            'email' => 'required|email',
            'role_id' => 'required'
        ]);

        $user = User::create([
            'lastname' => $this->lastname??null,
            'firstname' => $this->firstname??null,
            'password' => Hash::make($this->password),
            'password_without_hash' => $this->password,
            'email' => $this->email,
        ]);

        $role = Role::find($this->role_id);

        $user->role()->associate($role);

        $user->save();

        $this->email = '';
        $this->firstname = '';
        $this->lastname = '';
        $this->role_id = '';
        $this->password = '';

        if ($this->create_link) {
            redirect()->route('shortlink.index');
        }
    }

    public function generate_pass()
    {
        $this->password = Str::random(8);
    }

    public function render()
    {
        $roles = Role::all();
        return view('livewire.create-user', compact('roles'));
    }
}
