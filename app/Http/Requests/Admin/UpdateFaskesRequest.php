<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaskesRequest extends FormRequest
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
        $id = $this->route('faskes') ? $this->route('faskes')->id : $this->id;
        return [
            'nama' => ['required', 'string','max:255'],
            'kepala' => ['required', 'string', 'max:255'],
            'farmasi'=>['required', 'string', 'max:255'],
            'telepon'=>['required', 'string', 'max:255'],
            'alamat'=>['required', 'string', 'max:255'],
        ];
    }
}
