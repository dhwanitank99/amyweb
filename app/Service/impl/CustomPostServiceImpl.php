<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 4:18 PM
 */

namespace App\Service\impl;


use App\Entities\CustomPost;
use App\Entities\CustomPostAdditionalFields;
use App\Repository\CPAdditionalFieldsRepository;
use App\Repository\CustomPostRepository;
use App\Service\CustomPostService;
use Carbon\Carbon;
use App\Traits\FileUpload;

class CustomPostServiceImpl implements CustomPostService {
    use FileUpload;

    private $customPostRepository;
    private $additionalFieldsRepository;

    public function __construct(CustomPostRepository $customPostRepository, CPAdditionalFieldsRepository $additionalFieldsRepository){
        $this->customPostRepository = $customPostRepository;
        $this->additionalFieldsRepository = $additionalFieldsRepository;
    }

    public function saveCustomPost($customPostType, $data){
        $customPost = new CustomPost();
        $customPost->setTitle($data->get('title'));
        $customPost->setStatus(1);
        $customPost->setContent($data->get('content'));
        $customPost->setCustomPostType($customPostType);
        $customPost->setCreatedAt(Carbon::now());
        $customPost->setUpdatedAt(Carbon::now());
        if($data->hasFile('file')){
            $path = $this->uploadFile($data,str_replace(' ','-',$customPostType->getName()), 'file');
            if($path){
                $customPost->setFeaturedImage($path);
            }
        }
        foreach ($customPostType->getAdditionalFields() as $additionalField){
            if($additionalField->isRequired()){
                $customPostAdditionalFields = new CustomPostAdditionalFields();
                $customPostAdditionalFields->setFieldKey($additionalField->getFieldName());
                $customPostAdditionalFields->setFieldValue($data->get($additionalField->getFieldName()));
                $customPostAdditionalFields->setLabel($additionalField->getLabel());
                $customPost->addAdditionalFields($customPostAdditionalFields);
            }
        }
        return $this->customPostRepository->saveOrUpdate($customPost);
    }

    public function getCustomPost($id){
        return $this->customPostRepository->findPost($id);
    }

    public function getAllCustomPosts($customPostType){
        return $this->customPostRepository->findAllPosts($customPostType);
    }

    public function updateCustomPost($data, $customPostType, $id){
        $customPost = $this->customPostRepository->findPost($id);
        $customPost->setTitle($data->get('title'));
        $customPost->setStatus(1);
        $customPost->setContent($data->get('content'));
        $customPost->setCustomPostType($customPostType);
        $customPost->setCreatedAt(Carbon::now());
        $customPost->setUpdatedAt(Carbon::now());
        if($data->hasFile('file')){
            $path = $this->uploadFile($data,str_replace(' ','-',$customPostType->getName()), 'file');
            if($path){
                $customPost->setFeaturedImage($path);
            }
        }
        if(!empty($customPost->getAdditionalFields())){
            $this->additionalFieldsRepository->delete($customPost->getAdditionalFields());
        }
        foreach ($customPostType->getAdditionalFields() as $additionalField){
            $customPostAdditionalFields = new CustomPostAdditionalFields();
            $customPostAdditionalFields->setFieldKey($additionalField->getFieldName());
            $customPostAdditionalFields->setFieldValue($data->get($additionalField->getFieldName()));
            $customPostAdditionalFields->setLabel($additionalField->getLabel());
            $customPost->addAdditionalFields($customPostAdditionalFields);
        }
        return $this->customPostRepository->saveOrUpdate($customPost);
    }

    public function getActiveCustomPost($id, $limit){
        return $this->customPostRepository->findActiveCustomPost(['customPostType'=>$id,'status'=>1],$limit);
    }
}