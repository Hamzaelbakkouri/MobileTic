<?php

namespace App\Http\Requests;

use App\DTO\CategoryDTO;

class StoreCategoryRequest extends BaseFormRequest
{

    public function rules(): array
    {
        return [
            "nom" => "required ",
            "parent_id" => "required "
        ];
    }

    public function createDTO(): CategoryDTO
    {
        return CategoryDTO::fromRequest($this);
    }
}