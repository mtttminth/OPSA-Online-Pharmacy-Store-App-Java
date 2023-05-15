<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        'name'=>'required',
        'image'=>'required|image|mimes:jpg,png,jpeg,gif|max:8192',
        'price'=>'required',
        'category_id'=>'required',
        'quantity'=>'required',
        'description'=>'required',
           
        ];
    }
    
}
