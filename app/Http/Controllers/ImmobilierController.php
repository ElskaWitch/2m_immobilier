<?php

namespace App\Http\Controllers;

use App\Models\Immobilier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;
use App\Models\House;

class ImmobilierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::orderBy('updated_at', 'desc')->paginate(8);
        return view('pages.immobilier', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHouseRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,jfif|max:2000',
            'title' => 'required|min:5|max:400|string',
            'description' => 'required|min:10|max:2000|string',
            'location' => 'required|min:5|max:300|string',
            'price' => 'required|min:2|max:15|string',
            'ref' => 'required|min:1|max:10|string'
        ]);

        $validateImg = $request->file('image')->store('houses');


        Immobilier::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $validateImg,
            'location' => $request->location,
            'price' => $request->price,
            'ref' => $request->ref,
            'created_at' => now()
        ]);
        return redirect()
            ->route('home')
            ->with('status', 'Le bien immobilier a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Immobilier $house)
    {
        return view('pages.immobilier', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Immobilier $house)
    {
        return view('pages.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseRequest $request, Immobilier $house)
    {
        if ($request->hasFile('image')) {
            Storage::delete($house->image);
            $house->image = $request->file('image')->store('houses');
        }

        $request->validate([
            'title' => 'required|min:5|max:400|string',
            'description' => 'required|min:10|max:2000|string',
            'image' => 'required|image|sometimes|mimes:png,jpg,jpeg,jfif|max:2000',
            'location' => 'required|min:5|max:300|string',
            'price' => 'required|min:2|max:15|string',
            'ref' => 'required|min:1|max:10|string'
        ]);

        $house->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $house->image,
            'location' => $request->location,
            'price' => $request->price,
            'ref' => $request->ref,
            'updated_at' => now()
        ]);

        return redirect()
            ->route('immobiliers.show', $house->id)
            ->with('status', 'Le bien immobilier a été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immobilier $house)
    {
        $house->delete();
        return redirect()
            ->route('home')
            ->with('status', "Le bien immobilier a été supprimé");
    }
}
