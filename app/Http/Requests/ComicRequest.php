<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
        return
        [
            'title'=>'required|max:100|min:2',
            'thumb'=>'required|max:255|min:10',
            'price'=>'required|decimal:2|max:999.99|min:1.00',
            'series'=>'required|max:80|min:2',
            'sale_date'=>'required|max:10|min:10',
            'type'=>'required|max:50|min:2'
        ];
    }

    public function message()
    {
        return
        [
            'title.required'=>'Il Titolo è un campo obbligatorio',
            'title.max'=>'Il Titolo deve essere lungo al massimo 100 caratteri',
            'title.min'=>'Il Titolo deve essere lungo almeno 2 caratteri',
            'thumb.required'=>'URL dell\'immagine è un campo obbligatorio',
            'thumb.max'=>'URL dell\'immagine deve essere lungo al massimo 255 caratteri',
            'thumb.min'=>'URL dell\'immagine deve essere lungo almeno 10 caratteri',
            'price.required'=>'Il Prezzo è un campo obbligatorio',
            'price.decimal'=>'Il Prezzo deve avere due numeri decimali',
            'price.max'=>'Il Prezzo può avere un massimo di € 999.99 ',
            'price.min'=>'Il Prezzo deve avere un minimo di € 1.00',
            'series.required'=>'La Serie è un campo obbligatorio',
            'series.max'=>'La Serie può essere lunga al massimo 80 caratteri',
            'series.min'=>'La Serie deve essere almeno di 2 caratteri',
            'sale_date.required'=>'La Data è un campo obbligatorio',
            'sale_date.max'=>'La Data deve essere lunga 10 caratteri es: 2022-10-05',
            'sale_date.min'=>'La Data deve essere lunga 10 caratteri es: 2022-10-05',
            'type.required'=>'Il Tipo è un campo obbligatorio',
            'type.max'=>'Il Tipo può essere lungo al massimo 50 caratteri',
            'type.min'=>'Il Tipo deve essere lungo almeno 2 caratteri'
        ];
    }
}
