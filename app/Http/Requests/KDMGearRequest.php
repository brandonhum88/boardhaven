<?php

namespace App\Http\Requests;

use App\KDMGear;
use Illuminate\Foundation\Http\FormRequest;

class KDMGearRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'type'
        ];
    }

    public function persist()
    {
        KDMGear::create(
            $this->only(['name', 'type'])
        );
    }
}
