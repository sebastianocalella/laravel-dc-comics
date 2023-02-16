<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicControllerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
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
}
