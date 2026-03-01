<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\returnValue;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $annonces = Annonce::all();
        return view('annonces.index', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titre' => 'required | string | max :1000',
            'description' => 'required | string | max:10000',
            'type' => 'required',
            'ville' => 'required | string | max:10',
            'superficie' => 'required | integer | min:80 | max:1000',
            'neuf' => 'required', 
            'prix' => 'required | numeric | min:1',
            'img' => 'nullable | image | mimes:jpg,jpeg,png,gif | max:2048' //2048 octec
         ]);

         if ($request->hasFile('img'))
         {
            $file = $request->file('img'); // hna kjib iimage b request ou kat requperiha l $file
            $filename = Str::slug($request->titre . '-' . time() . '.' . $file->getClientOriginalExtension() ); //hna katsami l'image

            $path = $file->storeAs('annonces', $filename, 'public');
         }
        
        $annonce = new Annonce;

        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');
        $annonce->type = $request->input('type');
        $annonce->ville = $request->input('ville');
        $annonce->superficie = $request->input('superficie');
        $annonce->neuf = $request->input('neuf');
        $annonce->prix = $request->input('prix');
        $annonce->img = $path ?? null;
        
        $annonce->save();

        return redirect()->back()->with('success', 'Ajouter avec success !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { 
        //
        $annonce = Annonce::find($id);
        return view('annonces.show', compact('annonce'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $annonce = Annonce :: findOrFail($id);
        return view('annonces.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'titre' => 'required | string | max :1000',
            'description' => 'required | string | max:10000',
            'type' => 'required',
            'ville' => 'required | string | max:10',
            'superficie' => 'required | integer | min:80 | max:1000',
            'neuf' => 'required', 
            'prix' => 'required | numeric | min:1'
        ]);
        
        Annonce::findOrFail($id)->update($request->all());
        return redirect()->route('annonces.index')->with('success', 'modifier avec success');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();
        return redirect()->route('annonces.index')->with('success', 'supprimer avec success');
    }
    
}
