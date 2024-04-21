<?php

namespace App\Http\Requests;

use App\DTO\CategoryDTO;

class StoreCategoryRequest extends BaseFormRequest
{

    public function rules(): array
    {
        return [
            "name" => "required | min:3 | max:30 | unique:categories",
            "image" => "required | file"
        ];
    }

    public function createDTO(): CategoryDTO
    {
        return CategoryDTO::fromRequest($this);
    }
}