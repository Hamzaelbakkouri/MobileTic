<?php

namespace App\DTO;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

readonly class CategoryDTO
{
    public function __construct(
        public string $name,
        public object $image
    ){}

    public static function fromRequest(StoreCategoryRequest|UpdateCategoryRequest $request)
    {
        // "nom",
        // "parent_id",
        $validatedData = $request->validated();
        return new self(
            name: $validatedData["name"],
            image: $validatedData["image"]
        );

    }

}