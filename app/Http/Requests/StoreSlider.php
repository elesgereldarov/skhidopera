<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

class StoreSlider extends FormRequest
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
            'title_ru' => 'required|max:255',
            'title_en' => 'nullable|max:255',
            'title_ua' => 'required|max:255',
            'poster' => 'image|mimes:jpg,jpeg,png',
            'page_url' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title_ru.required' => Lang::get('errors.titleRuRequired'),
            'title_en.required' => Lang::get('errors.titleEnRequired'),
            'title_ua.required' => Lang::get('errors.titleUaRequired'),
            "poster.*.image|mimes:jpg,jpeg,png" => Lang::get('errors.poster'),
        ];
    }
}
