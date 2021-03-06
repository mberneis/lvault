<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cache;

class VaultController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function expired()
    {
        return view('expired');
    }

    public function store(Request $request)
    {
        $max 		= config('vault.max_size');
        $minutes 	= implode(',', array_keys(config('vault.minutes')));

        $rules = [
            'text' 	=> "required|max:{$max}",
            'expire' 	=> "required|in:{$minutes}",
        ];

        $messages = [
            'textb.required' => 'Enter some text to encrypt',
            'expire.required' => 'Set a'
        ];

        // Validation
        $this->validate($request, $rules, $messages);

        // We're going to encrypt again as a second line of defence should
        // there be a vulnerability with the JS encryption lib.
        $text = Crypt::encrypt($request->get('text'));

        // Create a key for the text.
        $key = md5($text);

        // Save the text using Laravel's cache.
        Cache::put($key, $text, $request->get('expire'));

        // Return the generated URL
        return response(url("view/{$key}"), 200);
    }

    public function show($key)
    {
        if (Cache::has($key)) {
            // Get text and decrypt our encryption
            $text = Crypt::decrypt(Cache::get($key));

            return view('view')->with('encrypted_text', $text);
        }

        return redirect('/expired');
    }
}
