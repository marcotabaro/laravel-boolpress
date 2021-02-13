<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|string|min:5',
            'text'=>'required|string|min:5',
            'backdate'=>'nullable|date',
            'image'=>'mimetypes: image/jpeg, image/png|max:1024',
            'category'=>'string|min:3',
            'tags'=>'string|max:256'
        ];
    }
}
