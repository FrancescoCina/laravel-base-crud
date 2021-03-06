<?php

namespace App\Http\Controllers;


use App\Models\Comic;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // VALIDATION

        $request->validate([
            'title' => 'required | string',
            'link_img' => 'required|url',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'required|date',
            'type' => 'string',
            'description' => 'string'
        ]);


        $data = $request->all();
        $comic = new Comic;
        $comic->title = $data['title'];
        $comic->link_img = $data['link_img'];
        $comic->price = $data['price'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->description = $data['description'];
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        // VALIDATION

        $request->validate([
            'title' => 'required | string',
            'link_img' => 'required|url',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'required|date',
            'type' => 'string',
            'description' => 'string'
        ]);

        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('success', $comic->title);
    }

    public function trash()
    {
        $comics = Comic::onlyTrashed()->get();
        return view('comics.trash', compact('comics'));
    }

    public function restore($id)
    {

        $comic = Comic::withTrashed()->find($id);
        $comic->restore();
        return redirect()->route('comics.index', $comic->title);
    }
}


// ->with('success', $comic->title)