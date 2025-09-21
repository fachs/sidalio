<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMutasiRequest extends FormRequest
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
        $id = $this->route('mutasi') ? $this->route('mutasi')->id : $this->id;
        return [
            'jenis'  => ['required', 'string', 'max:255'],
            'bulan'  => ['required', 'string', 'max:255'],
            'dbmb'  => ['required', 'string', 'max:255'],
            'jumlah'  => ['required', 'integer'],
            'keterangan'  => ['required', 'string', 'max:255'],
            'total_harga'  => ['required', 'integer'],
            'obat_id'  => ['required', 'integer'],
            'faskes_id'  => ['required', 'integer'],
        ];
    }
}
