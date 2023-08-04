<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TanamanRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'saran_tanaman' => 'required',
            'dataran' => 'required',
            'lahan' => 'required',
        ];
    }

    public function messages(){
        return [
            'saran_tanaman.required' => 'Saran Tanaman Tidak Boleh Kosong',
            'dataran.required' => 'Dataran Harus Dipilih',
            'lahan' => 'Jenis Lahan Tidak Boleh Kosong'
        ];
    }
}
