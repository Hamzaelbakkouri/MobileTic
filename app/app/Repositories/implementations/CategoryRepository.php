<?php

namespace App\Repositories\implementations;

use App\DTO\CategoryDTO;
use App\Models\Category;
use App\Repositories\interfaces\CategoryRepoInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepoInterface
{
    public function all(): Collection|array
    {
        return Category::all();
    }

    public function create(CategoryDTO $DTO): Category
    {
        return Category::create([
            "nom" => $DTO->nom,
            "parent_id" => $DTO->parent_id
        ]);
    }

    public function update(Category $category, CategoryDTO $DTO): bool
    {
        return $category->update([
            "nom" => $DTO->nom,
            "parent_id" => $DTO->parent_id
        ]);
    }

    public function delete(Category $category): bool
    {
        return $category->delete();
    }

    public function show(Category $category): Category
    {
        return Category::find($category->id);
    }
}