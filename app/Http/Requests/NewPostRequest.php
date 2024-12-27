<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class NewPostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required',
            'img' => ['required', 'string', 'regex:/\.(jpeg|png|jpg|gif)$/i'],  // Định dạng ảnh và kích thước
            'category_id' => 'required|exists:category_posts,id',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required.',
            'title.string' => 'Title must be a string.',
            'title.max' => 'Title cannot exceed 255 characters.',

            'content.required' => 'Content is required.',

            'img.required' => 'An image URL is required.',
            'img.string' => 'The image URL must be a valid string.',
            'img.regex' => 'The image URL must be a valid image file type (jpeg, png, jpg, gif).',

            'category_id.required' => 'Category is required.',
            'category_id.exists' => 'The selected category is invalid.',
        ];
    }
}
