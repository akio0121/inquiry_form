<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel01', 'tel02', 'tel03', 'address', 'building', 'confirm', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email','tel01', 'tel02', 'tel03', 'address', 'building', 'confirm', 'detail']);
        Contacts::create($contact);
        return view('thanks');
    }
}
