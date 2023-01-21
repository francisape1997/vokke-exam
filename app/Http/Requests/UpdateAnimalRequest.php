<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use App\Enums\GenderEnum;
use App\Enums\FriendlinessEnum;

class UpdateAnimalRequest extends FormRequest
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
            'name'          => ['required', Rule::unique('animals')->ignore($this->animal)],
            'nickname'      => 'nullable',
            'weight'        => 'required|numeric',
            'height'        => 'required|numeric',
            'date_of_birth' => 'required|date',
            'color'         => 'nullable',

            'gender'        => ['required', Rule::in(GenderEnum::toArrayNames())],
            'friendliness'  => ['nullable', Rule::in(FriendlinessEnum::toArrayNames())],
        ];
    }
}
