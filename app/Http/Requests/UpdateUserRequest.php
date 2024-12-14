<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email,' . $this->id . '|max:191',
            'fullname' => 'required|string',
            'role_id' => 'required|integer|gt:0',
            'password' => 'nullable|string|min:8', // Trường password có thể để trống, nếu có thì phải là chuỗi và tối thiểu 8 ký tự
            're_password' => 'nullable|string|same:password|required_with:password',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Email đã được sử dụng.',
            'email.string' => 'Email phải là chuỗi ký tự.',
            'email.max' => 'Email không được vượt quá 191 ký tự.',
            'fullname.required' => 'Vui lòng nhập tên đầy đủ.',
            'fullname.string' => 'Tên đầy đủ phải là chuỗi ký tự.',
            'role_id.required' => 'Vui lòng chọn một danh mục người dùng.',
            'role_id.integer' => 'Danh mục người dùng phải là một số nguyên.',
            'role_id.gt' => 'Danh mục người dùng phải lớn hơn 0.',
            'password.string' => 'Password phải là một chuỗi',
            'password.min' => 'Password phải lớn hơn 8 kí tụ',
            're_password.required_with' => 'Vui lòng nhập lại mật khẩu.',
            're_password.same' => 'Mật khẩu nhập lại không khớp.',
            're_password.string' => 'Mật khẩu nhập lại phải là chuỗi ký tự.',
        ];
    }
}
