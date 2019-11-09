<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
        switch ($this->method())
         {
            case "GET":
            case "DELETE":
                    return [];

                break;
            case "POST":
                return [
                    'title' =>'required|min:4',
                    'description' =>'required|min:10'
                ];
                break;

            case "PUT":
                return [
                    'title'=>'required|min:4',
                    'description' =>'required|min:10'
                ];
                break;
        }
    }
}
