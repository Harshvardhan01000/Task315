<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormControlRequest;
use App\Models\books;
use App\Models\language;
use App\Models\publisher;
// use Illuminate\Http\Request;


class manageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $books = books::with(['languageData','publisherData'])->orderBy('created_at','desc')->get();
    // dd($books);
    //     $data = array();
    //     $publish = array();
    //    foreach($book as $item){
    //     $data[$item->language_id] = books::where('language_id',$item->language_id)->first()->languageData->language_name;
    //     $publish[$item->publisher_id] = books::where('publisher_id',$item->publisher_id)->first()->publisherData->publisher_name;
    //    }
       return view("homeTable",compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $language = language::all();
        $publisher = publisher::all();
        return view('addDataForm')->with('language',$language)->with('publisher',$publisher);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormControlRequest $request)
    {
     books::create([
        'language_id'=>$request->language_id,
        'publisher_id'=>$request->publisher_id,
        'title'=>$request->title,
        'num_pages'=>$request->num_pages,
        'published_date'=>$request->published_date,
        'price'=>$request->price
     ]);
     return redirect()->route('todo.index');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = books::find($id)->first();
        $language = books::find($data->book_id)->languageData->language_name;
        $publisher = books::find($data->book_id)->publisherData->publisher_name;
        return view('viewPage',compact('data','language','publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =  books::where('book_id',$id)->first();
        // $date = Carbon::createFromFormat('d/m/Y', $data->published_date);
        $language = language::all();
        $publisher = publisher::all();
        return view('editForm',compact('data','language','publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormControlRequest $request, string $id)
    {
        books::where('book_id',$id)->update([
            'language_id' => $request->language_id,
            'publisher_id' => $request->publisher_id,
            'title' => $request->title,
            'num_pages' => $request->num_pages,
            'published_date' => $request->published_date,
            'price' => $request->price,
        ]);
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
      books::where('book_id',$id)->delete();
      return redirect()->route('todo.index');
        
    }
}
