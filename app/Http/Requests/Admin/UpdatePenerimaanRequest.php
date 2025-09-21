<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenerimaanRequest extends FormRequest
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
        $id = $this->route('penerimaan') ? $this->route('penerimaan')->id : $this->id;
        return [
            'qty'  => ['required', 'integer'],
            'exp_date'  => ['required', 'date'],
            'in_date'  => ['required', 'date'],
            'harga_satuan'  => ['required', 'integer'],
            'nama_pbf'  => ['required', 'string', 'max:255'],
            'no_beli'  => ['required', 'string', 'max:255'],
            'sbbk_prov'  => ['required', 'string', 'max:255'],
            'total_harga'  => ['required', 'integer'],
            'jenis_dana'  => ['required', 'string', 'max:255'],
            'kode_rek'  => ['required', 'string', 'max:255'],
            'kode_prog'  => ['string', 'max:255'],
            'kemas'  => ['required', 'string', 'max:255'],
            'no_batch'  => ['required', 'string', 'max:255'],
            'obat_id'  => ['required', 'integer'],
            'lokasi'  => ['required', 'string', 'max:255'],
        ];
    }
}
