<?php

namespace App\Http\Controllers;

use App\Models\StoreBook;
use Illuminate\Http\Request;
use PDO;

class StoreBookController extends Controller
{
    public function create(){
        return view('create');
    }
    // This is book store function
    public function bookAdd(Request $request){

        // This is validation code
        $validated = $request->validate([
            'Title' => 'required',
            'Author' => 'required',
            'Publisher' => 'required',
            'YearPublished' => 'required',
        ]);

        // This is data store in database code
        $bookStore = new StoreBook;
        $bookStore->Title = $request->Title;
        $bookStore->Author = $request->Author;
        $bookStore->Publisher = $request->Publisher;
        $bookStore->YearPublished = $request->YearPublished;
        $bookStore->save();
        return redirect()->route('home');
    }

    // This is edit data function
    public function editData($id){
        $bookStore = StoreBook::findOrFail($id);
        return view('edit',['bookStore' => $bookStore]);
    }
    // This is data update function
    public function updateData($id, Request $request){
        
        // This is validation code
        $validated = $request->validate([
            'Title' => 'required',
            'Author' => 'required',
            'Publisher' => 'required',
            'YearPublished' => 'required',
        ]);

        // This is data store in database code
        $bookStore = StoreBook::findOrFail($id);
        $bookStore->Title = $request->Title;
        $bookStore->Author = $request->Author;
        $bookStore->Publisher = $request->Publisher;
        $bookStore->YearPublished = $request->YearPublished;
        $bookStore->save();
        return redirect()->route('home');
    }

    // This is delete function
    public function deleteData($id){
        $bookStore = StoreBook::findOrFail($id);
        $bookStore->delete();
        return redirect()->route('home');
    }
}
