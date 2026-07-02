<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficeRequest extends FormRequest
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
        $officeId = $this->route('office_id');
        return [
            'name' => [
                'required',
                'string',
                'max:50',
            ],
            'address'=> [
                'required',
                'string',
                'max:255',
                'unique:offices,address,' . $officeId . ',id',
            ],
            'post_code'=> [
                'nullable',
                'string',
                'size:7',
            ],
            'stair'=> [
                'required',
                'integer'
            ],
            'comment'=> [
                'required',
                'string',
            ],

            
        ];
    }
}
