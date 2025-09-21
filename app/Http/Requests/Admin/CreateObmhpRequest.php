<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateObmhpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama'  => ['required', 'string', 'max:255'],
            'satuan'  => ['required', 'string', 'max:255'],
            'isi_kemasan'  => ['required', 'integer'],
            'golongan'  => ['required', 'string', 'max:255'],
        ];
    }
}
