<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function insertform()
    {
        return view('register');
    }

    public function insert(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('Assets'), $imageName);
        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->image = 'Assets/'.$imageName;
        $register->save();
    
        return redirect()->route('showtable');
    }

    public function index()
    {
        $register = Register::all();

        return view('showtable', compact('register'));
    }

    public function edit($id)
    {
        $register = Register::find($id);
        return view('edit', compact('register'));
    }


    public function update(Request $request, $id)
    {
        $register = Register::find($id);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('Assets'), $imageName);
        $register->name = $request->name;
        $register->email = $request->email;
        $register->image = $imageName;
        $register->save();
        exit;
    
        return redirect()->route('showtable');
    }

    public function destroy($id)
    {
   
        $register = Register::find($id);
        $register->delete();

        return redirect()->route('showtable');
    }


}
