<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;
use App\Post;
use App\Lead;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_post = Post::all();
        $data = [
            'posts' => $data_post
        ];
        return view('guest.welcome', $data);
    }

    public function contact()
    {
        return view('guest.contact');
    }
    public function contactSent(Request $request)
    {
        $data = $request->all();

        $newLead = new Lead();
        $newLead->fill($data);

        $newLead->save();

        Mail::to('info@boolpress.com')->send(new SendNewMail());

        return redirect()->route('guest.contact')->with('status', 'confirmed');
    }
}
