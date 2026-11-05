<?php

namespace App\Http\Requests;

use App\Models\FileItem;
use Illuminate\Foundation\Http\FormRequest;

class StoreFileItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',

            'parent_id' => [
                'nullable',
                'exists:file_items,id',
                function ($attribute, $value, $fail) {
                    if (
                        $value &&
                        FileItem::where('id', $value)
                            ->where('type', '!=', 'folder')
                            ->exists()
                    ) {
                        $fail('Parent hanya boleh berupa folder.');
                    }
                },
            ],
        ];
    }
}
