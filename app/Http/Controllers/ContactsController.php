<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    function ContactsPage()
    {
        return view('Contacts');
    }
}
