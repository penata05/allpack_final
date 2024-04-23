<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contacts');
    }

    public function messageSent(Request $request)
    {
        
        $contact = new ContactInfo;
        $contact->name = $request->name;
        $contact->email = $request->email != NULL ? $request->email : "";
        $contact->message = $request->message;
        $contact->save();

        return view('contacts');
    }
   
}
