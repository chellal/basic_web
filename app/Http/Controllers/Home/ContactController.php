<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function contactMe()
    {
        return view('frontend.contact');
    } // End Function

    public function storeMessage(Request $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Your Message Submitted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Function



    public function contactMessage()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact', compact('contacts'));
    } // End Function

    public function deleteMessage(Request $request)
    {
        $id = $request->id;
        $message = Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
