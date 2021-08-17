<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 03/03/20
 * Time: 11:00 AM
 */

namespace App\Service\impl;


use App\Entities\Category;
use App\Repository\CategoryRepository;
use App\Service\CategoryService;
use Carbon\Carbon;

class CategoryServiceImpl implements CategoryService {

    private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->findAllCategories();
    }

    public function getActiveCategories()
    {
        return $this->categoryRepository->findCategoryBy(['status'=>1]);
    }

    public function getCategory($id)
    {
        return $this->categoryRepository->findCategory($id);
    }

    public function saveCategory($data)
    {
        $category = new Category();
        $category->setName($data->get('name'));
        $category->setSlug($data->get('slug'));
        $category->setStatus(1);
        $category->setCreatedAt(Carbon::now());
        $category->setUpdatedAt(Carbon::now());
        return $this->categoryRepository->saveOrUpdate($category);
    }

    public function updateCategory($data, $id)
    {
        $category = $this->categoryRepository->findCategory($id);
        $category->setName($data->get('name'));
        $category->setSlug($data->get('slug'));
        $category->setStatus(1);
        $category->setUpdatedAt(Carbon::now());
        return $this->categoryRepository->saveOrUpdate($category);
    }
}