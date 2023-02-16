<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function rules(){
        return [
            [
                'title'=>'required|min:3|max:120',
                'description'=>'required|min:30|max:2000',
                'thumb'=>'required|max:3000', //maxvalue 11525
                'price'=>'required|numeric|max:999.99',
                'series'=>'required|min:3|max:100',
                'sale_date'=>'required|date',
                'type'=>'required|max:100'
            ],
            [
                //required alert
                'title.required'=>'è obbligatoria la compilazione del campo title',
                'description.required'=>'è obbligatoria la compilazione del campo description',
                'thumb.required'=>'è obbligatoria la compilazione del campo thumb',
                'price.required'=>'è obbligatoria la compilazione del campo price',
                'series.required'=>'è obbligatoria la compilazione del campo series',
                'sale_date.required'=>'è obbligatoria la compilazione del campo sale_date',
                'type.required'=>'è obbligatoria la compilazione del campo type',

                //min
                'title.min'=>'il title deve essere lungo almeno 3 caratteri',
                'description.min'=>'la description deve essere lunga almeno 30 caratteri',
                'series.min'=>'series deve essere lungo almeno 3 caratteri',

                //max
                'title.max'=>'la lunghezza del title non può superare i 120 caratteri',
                'description.max'=>'la lunghezza della description non può superare i 2.000 caratteri',
                'thumb.max'=>'la lunghezza del thumb non può superare i 3.000 caratteri',
                'price.max'=>'il price non può avere un valore superiore ai 999.99$',
                'series.max'=>'la lunghezza della series non può superare i 100 caratteri',
                'type.max'=>'la lunghezza del type non può superare i 100 caratteri',

                //numeric
                'price.numeric'=>'il valore inserito in price deve essere un valore numerico compreso tra 0.00 e 999.99',

                //decimal
                'price.decimal'=>'il valore dopo la virgola deve essere composto di un massimo di due cifre',

                //date
                'sale_date.date'=>'il valore inserito in sale_date deve essere di tipo date'
            ]
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createComic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $request->validate(ComicController::rules());

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.createComic', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modelData = $request->all();
        $comic = Comic::findOrfail($id);

        $request->validate(ComicController::rules());

        $comic->update($modelData);

        return redirect()->route('admin.comics.show', $comic->id);
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
        return redirect()->route('admin.comics.index');
    }
}
