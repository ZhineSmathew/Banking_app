<?php

namespace App\Http\Controllers;
use App\Models\register;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
   
    public function dashboard()
    {
        $registers=register::all();
        return view('dashboard',compact('registers'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
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
