<?php

namespace App\Http\Requests;

use App\DTO\CategoryDTO;

class UpdateCategoryRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            "name" => "required",
            "image" => "required"
        ];
    }

    public function createDTO(): CategoryDTO
    {
        return CategoryDTO::fromRequest($this);
    }
}