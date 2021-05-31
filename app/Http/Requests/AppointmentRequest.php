<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
            'tel' => 'required|digits_between:10,13',
            'body' => 'required',
            'name' => 'required|string',
            'date' => 'after:yesterday|nullable',
            'email' => 'email|nullable'
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->date) {
            $this->date = date('d-m-Y', strtotime($this->date));
        }
    }
}
