<?php

namespace App\Http\Controllers;


use App\Models\Author;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
   
    public function index()
    {
        $authors = DB::table('authors')->get();
        return view('authors.home', ['authors'=>$authors]);
    }

    
    public function create(Request $request)
    {
        DB::table('authors')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
        ]);
    
       return redirect(route('index'))->with('status', 'Author Added Successfully!!');
    }

    public function edit($id)
    {
        $author = DB::table('authors')->find($id);
        return view('authors.editform', ['author'=>$author]);
    }

    public function update(Request $request, $id)
    {
        DB::table('authors')->where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
        ]);
        return redirect(route('index'))->with('status', 'Author Updated Successfully!!'); 
    }

    public function destroy($id)
    {
        DB::table('authors')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Author Deleted Successfully!!'); 
    }
}
