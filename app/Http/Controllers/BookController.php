<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
   
    public function index()
    {
        $books = DB::table('books')->get();
        return view('books.home', ['books'=>$books]);
        
    }

    
    public function create(Request $request)
    {
        DB::table('books')->insert([
            'title' => $request->title,
            'image' => $request->image,
            'sdescription' => $request->sdescription,
            'description' => $request->description,
        ]);
        return redirect(route('index'))->with('status', 'Book Added Successfully!!');
        }

    public function store(Request $request)
    {
        $request->validate([
            'tile' => 'required',
        ]);

        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' 
            ]);

           
            $request->file->store('bookimg', 'public');

          
            $bookimg = new Book([
                "title" => $request->get('title'),
                "image" => $request->file->hashName()
            ]);
            $bookimg->save(); 
            
        return view('books.create');

        }
    }

    public function edit($id)
    {
        $book = DB::table('books')->find($id);
        return view('books.editform', ['book'=>$book]);
    }

   
    public function update(Request $request, $id)
    {
        DB::table('books')->where('id', $id)->update([
            'title' => $request->title,
            'image' => $request->image,
            'sdescription' => $request->sdescription,
            'description' => $request->description,
        ]);
        return redirect(route('index'))->with('status', 'Book Updated Successfully!!'); 
    }


    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Book Deleted Successfully!!'); 
    }
}
