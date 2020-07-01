<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username) -> firstOrFail();
        return view('profile.show', compact('user'));
    }

    public function edit($username)
    {
        $user = User::where('username', $username) -> firstOrFail();
        return view('profile.edit', compact('user'));
    }

    public function update($username)
    {
        $user = User::where('username', $username) -> firstOrFail();
        $data = request()->validate([
            'title' => 'required',
            'description' => 'max:50',
            'url' => 'url',
            'image' => ''
        ]);

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }

        else {
            $imagePath = $user->profile->image;
        }

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath],
        ));

        return redirect("/{$username}");
    }
}
