<?php

namespace App\Http\Livewire;

use App\Models\Shorturl;
use App\Models\User;
use App\Models\Website;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateShortLink extends Component
{
    public $shortkey;
    public $platform;
    public $user;
    public $expire_at;

    public function create_link()
    {
        $this->validate([
            'shortkey' => 'required',
            'expire_at' => 'required',
            'platform' => 'required',
            'user' => 'required',
        ]);

        $dateTime = $this->expire_at .' '. date('hh:ii:ss');

        $shortUrl = Shorturl::create([
            'key' => $this->shortkey,
            'expire_at' => Carbon::make($dateTime)
        ]);

        $user = User::find($this->user);
        $website = Website::find($this->platform);

        $shortUrl->website()->associate($website);
        $shortUrl->user()->associate($user);

        $shortUrl->save();

        $this->platform = '';
        $this->shortkey = '';
        $this->user = '';
        $this->expire_at = '';
    }

    public function generate_key()
    {
        $is_not_valid = true;
        while ($is_not_valid) {
            $key = Str::random(rand(6, 8));
            $shorturl = Shorturl::findByKey($key);
            if(!is_null($shorturl)) {
                $this->shortkey = $key;
                $is_not_valid = false;
            }
        }

    }

    public function render()
    {
        $websites = Website::all();
        $guests = User::all();
        return view('livewire.create-short-link', compact('websites', 'guests'));
    }
}
