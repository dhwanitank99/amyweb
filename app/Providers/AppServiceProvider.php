<?php

namespace App\Providers;

use App\Entities\CustomPostType;
use App\Entities\Job;
use App\Entities\CustomPost;
use App\Repository\CustomPostTypeRepository;
use App\Repository\impl\CustomPostTypeRepositoryImpl;
use App\Repository\CustomPostRepository;
use App\Repository\impl\CustomPostRepositoryImpl;
use App\Repository\impl\JobRepositoryImpl;
use App\Repository\JobRepository;
use App\Service\CustomPostTypeService;
use App\Service\CustomPostService;
use App\Service\impl\CustomPostTypeServiceImpl;
use App\Service\impl\JobServiceImpl;
use App\Service\impl\CustomPostServiceImpl;
use App\Service\JobService;
use Illuminate\Support\ServiceProvider;
use App\Service\BlockService;
use App\Service\impl\BlockServiceImpl;
use App\Repository\BlockRepository;
use App\Repository\impl\BlockRepositoryImpl;
use App\Entities\Block;
use App\Service\GeneralService;
use App\Service\impl\GeneralServiceImpl;
use App\Repository\GeneralRepository;
use App\Repository\impl\GeneralRepositoryImpl;
use App\Entities\General;
use App\Entities\Category;
use App\Service\CategoryService;
use App\Service\impl\CategoryServiceImpl;
use App\Repository\CategoryRepository;
use App\Repository\impl\CategoryRepositoryImpl;
use App\Entities\CustomPostAdditionalFields;
use App\Repository\CPAdditionalFieldsRepository;
use App\Repository\impl\CPAdditionalFieldsRepositoryImpl;
use App\Entities\Banner;
use App\Service\BannerService;
use App\Service\impl\BannerServiceImpl;
use App\Repository\BannerRepository;
use App\Repository\impl\BannerRepositoryImpl;
use App\Entities\BannerDetail;
use App\Repository\BannerDetailRepository;
use App\Repository\impl\BannerDetailRepositoryImpl;
use App\Entities\Page;
use App\Service\PageService;
use App\Service\impl\PageServiceImpl;
use App\Repository\PageRepository;
use App\Repository\impl\PageRepositoryImpl;
use App\Entities\Post;
use App\Service\PostService;
use App\Service\impl\PostServiceImpl;
use App\Repository\PostRepository;
use App\Repository\impl\PostRepositoryImpl;
use App\Entities\Applications;
use App\Service\JobApplicationService;
use App\Service\impl\JobApplicationServiceImpl;
use App\Repository\JobApplicationRepository;
use App\Repository\impl\JobApplicationRepositoryImpl;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        view()->composer('layout.layout', function($view){
            $view->with('general', App\Facade\GeneralFacade::getContactSettingDetails());
        });

        view()->composer('admin.layout.layout', function ($view){
            $view->with('customPosts', App\Facade\CustomPostFacade::lists());
        });
        view()->composer('admin.login', function($view){
            $view->with('general', App\Facade\GeneralFacade::getContactSettingDetails());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //Binding Interfaces with their implementation
        //Services
        $this->app->bind(JobService::class, JobServiceImpl::class);
        $this->app->bind(CustomPostTypeService::class, CustomPostTypeServiceImpl::class);
        $this->app->bind(CustomPostService::class, CustomPostServiceImpl::class);
        $this->app->bind(BlockService::class, BlockServiceImpl::class);
        $this->app->bind(GeneralService::class, GeneralServiceImpl::class);
        $this->app->bind(CategoryService::class, CategoryServiceImpl::class);
        $this->app->bind(BannerService::class, BannerServiceImpl::class);
        $this->app->bind(PageService::class, PageServiceImpl::class);
        $this->app->bind(PostService::class, PostServiceImpl::class);
        $this->app->bind(JobApplicationService::class, JobApplicationServiceImpl::class);

        //Repository
        $this->app->bind(JobRepository::class, function($app){
            return new JobRepositoryImpl($app['em'], $app['em']->getClassMetaData(Job::class));
        });
        $this->app->bind(CustomPostTypeRepository::class, function($app){
            return new CustomPostTypeRepositoryImpl($app['em'], $app['em']->getClassMetaData(CustomPostType::class));
        });
        $this->app->bind(CustomPostRepository::class, function($app){
            return new CustomPostRepositoryImpl($app['em'], $app['em']->getClassMetaData(CustomPost::class));
        });
        $this->app->bind(BlockRepository::class, function($app){
            return new BlockRepositoryImpl($app['em'], $app['em']->getClassMetaData(Block::class));
        });
        $this->app->bind(GeneralRepository::class, function ($app){
            return new GeneralRepositoryImpl($app['em'], $app['em']->getClassMetaData(General::class));
        });
        $this->app->bind(CategoryRepository::class, function ($app){
            return new CategoryRepositoryImpl($app['em'], $app['em']->getClassMetaData(Category::class));
        });
        $this->app->bind(CPAdditionalFieldsRepository::class, function ($app){
            return new CPAdditionalFieldsRepositoryImpl($app['em'], $app['em']->getClassMetaData(CustomPostAdditionalFields::class));
        });
        $this->app->bind(BannerRepository::class, function($app){
            return new BannerRepositoryImpl($app['em'], $app['em']->getClassMetaData(Banner::class));
        });
        $this->app->bind(BannerDetailRepository::class, function ($app){
            return new BannerDetailRepositoryImpl($app['em'], $app['em']->getClassMetaData(BannerDetail::class));
        });
        $this->app->bind(PageRepository::class, function ($app){
            return new PageRepositoryImpl($app['em'], $app['em']->getClassMetaData(Page::class));
        });
        $this->app->bind(PostRepository::class, function($app){
            return new PostRepositoryImpl($app['em'], $app['em']->getClassMetaData(Post::class));
        });
        $this->app->bind(JobApplicationRepository::class, function($app){
            return new JobApplicationRepositoryImpl($app['em'],$app['em']->getClassMetaData(Applications::class));
        });
        //Facades
        App::bind('custom-post', function ($app){
            return new App\Http\Controllers\Admin\CustomPostController();
        });
        $this->app->bind('general', function ($app){
            return new App\Http\Controllers\GeneralController();
        });
    }
}
