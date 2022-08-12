<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ContactCOntroller extends Controller
{
    public function save(Request $request){
        $data = $request->only('contact-name','contact-phone','contact-email' , 'subject' , 'contact-message');
        $test['token'] = time();
        $fileName = $test['token']. '_datafile.json';
        $test['data'] = json_encode($data);
        Storage::disk('public')->put($fileName , $test['data']);
        Session::flash('message', "Message Has Been Saved Successfully.");
        return back();
    }
}
