<?php

namespace App\Services\implementations;

use App\DTO\CategoryDTO;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Repositories\interfaces\CategoryRepoInterface;
use App\Services\Specs\CategoryService;

class CategoryServiceImpl implements CategoryService
{
    public function __construct(
        public CategoryRepoInterface $repository,
    ){}

    public function all()
    {
        return CategoryResource::collection($this->repository->all());
    }

    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($this->repository->show($category));
    }

    public function create(CategoryDTO $DTO): CategoryResource
    {
        $category = $this->repository->create(DTO: $DTO);

        return new CategoryResource($category);
    }

    public function update(Category $category, CategoryDTO $DTO)
    {
        $this->repository->update(category: $category, DTO: $DTO);

    }

    public function delete(Category $category): bool
    {
        return $this->repository->delete($category);
    }
}