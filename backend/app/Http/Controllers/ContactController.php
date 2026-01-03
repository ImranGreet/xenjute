<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return response()->json(['message' => 'Message sent successfully', 'contact' => $contact]);
    }
}
