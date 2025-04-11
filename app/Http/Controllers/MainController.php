<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function main()
    {
        $messages = Message::all();
        return view("main",compact('messages'));
    }


    public function submitMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return redirect('/#message')->with('success', 'Message sent!');
    }
}
