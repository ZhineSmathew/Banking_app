<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\register;

class registercontroller extends Controller
{
   
    public function registration()
    {
        return view('auth.registration');
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'max:255',
            'password' => 'max:255',
        ]);
        $registers=register::create($storeData);
        
        return redirect('login')->with('completed', 'Employee has been saved!');
    }
    
    
    public function postregistration()
    {
        return view('auth.postregistration');
    }


    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
