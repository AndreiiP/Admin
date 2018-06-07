<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class CreateHotelRequest extends FormRequest
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
        $a = $this->request->all();
        $rooms = $a['roomss'] + 1;
        for ($i = 0; $i < $rooms; $i++) {
            $c[] = "room.$i";
        }

        $rules = [
            'name' => 'required|min:3',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|min:3',
            'description' => 'required|min:8',
            'price.*' => 'required|min:1'
        ];
        for ($y = 0; $y < $rooms; $y++) {
            $rules += ["room.$y" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
        }

        return $rules;

    }
}
