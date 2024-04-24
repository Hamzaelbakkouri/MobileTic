<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseApiController;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Services\Specs\CategoryService;

class CategoryController extends BaseApiController
{
    public function __construct(
        protected CategoryService $service
    ) {
    }

    public function index()
    {
        return $this->service->all();
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = $this->service->create($request->createDTO());
        return $this->sendResponse(
            message: "Category created successfully",
            result: $category,
            code: 201
        );
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->service->update($category, $request->createDTO());
        return $this->sendResponse(
            message: "Category updated successfully",
            result: new CategoryResource($category),
            code: 200
        );
    }

    public function show(Category $category)
    {
        $category = $this->service->show($category);
        return $this->sendResponse(
            message: "success",
            result: $category,
            code: 201
        );
    }

    public function destroy(Category $category)
    {
        $this->service->delete($category);
        return $this->sendResponse(message: "category deleted", result: true);
    }
}