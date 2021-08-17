<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 06/03/20
 * Time: 12:57 PM
 */

namespace App\Service\impl;


use App\Entities\Post;
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use App\Service\PostService;
use App\Traits\FileUpload;
use Carbon\Carbon;

class PostServiceImpl implements PostService
{
    use FileUpload;
    private $postRepository;
    private $categoryRepository;

    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getPost($id)
    {
        return $this->postRepository->findPost($id);
    }

    public function getPostBy($criteria)
    {
        // TODO: Implement getPostBy() method.
    }

    public function getPosts()
    {
        return $this->postRepository->findPosts();
    }

    public function getActivePosts()
    {
        return $this->postRepository->findPostsBy(['status'=>1]);
    }

    public function savePost($data)
    {
        $post = new Post();
        $post->setTitle($data->get('title'));
        $post->setSlug($data->get('slug'));
        $post->setCategory($this->categoryRepository->findCategory($data->get('category_id')));
        $post->setContent($data->get('content'));
        if($data->hasFile('file')){
            $path = $this->uploadFile($data, '', 'file');
            $post->setFeaturedImage($path);
        }
        $post->setStatus(1);
        $post->setCreatedAt(Carbon::now());
        $post->setUpdatedAt(Carbon::now());
        return $this->postRepository->saveOrUpdate($post);
    }

    public function updatePost($data, $id)
    {
        $post = $this->postRepository->findPost($id);
        $post->setTitle($data->get('title'));
        $post->setSlug($data->get('slug'));
        $post->setCategory($this->categoryRepository->findCategory($data->get('category_id')));
        $post->setContent($data->get('content'));
        if($data->hasFile('file')){
            $path = $this->uploadFile($data, '', 'file');
            $post->setFeaturedImage($path);
        }
        $post->setStatus(1);
        $post->setUpdatedAt(Carbon::now());
        return $this->postRepository->saveOrUpdate($post);
    }
}