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
            'date' => 'required|after:yesterday',
            'name' => 'required|string',
        ];
    }

    protected function prepareForValidation()
    {
        $this->date = date('d-m-Y', strtotime($this->date));
    }
}
