<?php

namespace App\Services\Specs;

use App\DTO\CategoryDTO;
use App\Models\Category;

interface CategoryService
{
    public function all();

    public function show(Category $category);

    public function create(CategoryDTO $DTO);

    public function update(Category $category, CategoryDTO $DTO);

    public function delete(Category $category);

}