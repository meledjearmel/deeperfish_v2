<?php

namespace App\Http\Livewire;

use App\Models\Shorturl;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LinkGenerate extends Component
{
    public function render()
    {
        $links = Auth::user()->get_shorturl_by_role();
        return view('livewire.link-generate', compact('links'));
    }
}
