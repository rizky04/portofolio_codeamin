<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:2000',
            'honeypot' => 'prohibited',
        ]);

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Pesan berhasil dikirim! Saya akan segera menghubungi Anda.');
    }
}
