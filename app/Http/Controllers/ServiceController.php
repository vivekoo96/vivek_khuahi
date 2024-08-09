<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function desktop(){
        return view('desktop');
    }

    public  function laptop()
    {
        return view('laptop');
    }

    public  function mac_system(){
        return view('mac-system');
    }

    public  function workstation(){
        return view('workstation');
    }

    public  function support(){
        return view('support');
    }

    public function store_enquery(Request $request){
        $validatedData = $request->validate([
            'name' =>'required|string|max:255',
            'phone' =>'required',
           'quantity' =>'required|string|max:1000',
        ]);

        Enquiry::create($validatedData);

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully.');
    }
}
