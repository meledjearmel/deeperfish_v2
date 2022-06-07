<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUser extends Component
{
    public function render()
    {
        $guests = User::all();
        return view('livewire.list-user', compact('guests'));
    }
}
