<?php

namespace App\DTO;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

readonly class CategoryDTO
{
    public function __construct(
        public string $nom,
        public object $parent_id
    ){}

    public static function fromRequest(StoreCategoryRequest|UpdateCategoryRequest $request)
    {
        // "nom",
        // "parent_id",
        $validatedData = $request->validated();
        return new self(
            nom: $validatedData["nom"],
            parent_id: $validatedData["parent_id"]
        );

    }

}