<?php

namespace App\Http\Controllers\Home;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    public function footerSetup()
    {
        $footer = Footer::findOrFail(1);
        return view('admin.footer.footer_all', compact('footer'));
    } // End Function

    public function updateFooter(Request $request)
    {

        Footer::findOrFail($request->id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'copyright' => $request->copyright,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Footer page Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
