<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'title' => 'required|string|max:255',           // Bắt buộc, dạng chuỗi, tối đa 255 ký tự
            'price' => 'required|numeric|min:0',           // Bắt buộc, dạng số, tối thiểu là 0
            'description' => 'nullable|string',            // Không bắt buộc, dạng chuỗi
            'meta_title' => 'nullable|string|max:255',     // Không bắt buộc, dạng chuỗi, tối đa 255 ký tự
            'meta_description' => 'nullable|string',       // Không bắt buộc, dạng chuỗi
            'meta_keywords' => 'nullable|string',          // Không bắt buộc, dạng chuỗi
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề của tour.',
            'title.string' => 'Tiêu đề phải là một chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'price.required' => 'Vui lòng nhập giá của tour.',
            'price.numeric' => 'Giá phải là một số hợp lệ.',
            'price.min' => 'Giá phải lớn hơn hoặc bằng 0.',
            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'meta_title.string' => 'Meta Tag Title phải là một chuỗi ký tự.',
            'meta_title.max' => 'Meta Tag Title không được vượt quá 255 ký tự.',
            'meta_description.string' => 'Meta Tag Description phải là một chuỗi ký tự.',
            'meta_keywords.string' => 'Meta Tag Keywords phải là một chuỗi ký tự.',
        ];
    }
}
