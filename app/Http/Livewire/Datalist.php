<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Datalist extends Component
{
    public function render()
    {
        $guest = Auth::user();
        $notebooks = $guest->get_notebooks_by_role();
        return view('livewire.datalist', compact('notebooks'));
    }
}
