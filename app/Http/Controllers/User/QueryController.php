<?php

namespace App\Http\Controllers\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\ParameterBag;
class QueryController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $contact = new Contact();
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->question = $request->question;
        $contact->save();
        return redirect()->back();
    }
}
