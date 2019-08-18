<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//ایا کاربر اجازه داره درخاست بکنه
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//قانونات برای این درخاست چیه
    {
        return [
            'strite' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'state' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];
    }
}
