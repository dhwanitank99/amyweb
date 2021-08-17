<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 26/02/20
 * Time: 12:34 PM
 */

namespace App\Service\impl;


use App\Entities\CustomPostType;
use App\Entities\CustomPostTypeAdditionalFields;
use App\Repository\CustomPostTypeRepository;
use App\Service\CustomPostTypeService;
use Carbon\Carbon;

class CustomPostTypeServiceImpl implements CustomPostTypeService{

    private $customPostTypeRepository;

    public function __construct(CustomPostTypeRepository $customPostTypeRepository){
        $this->customPostTypeRepository = $customPostTypeRepository;
    }

    public function getAllCustomPostTypes(){
        return $this->customPostTypeRepository->findAllCustomPostType();
    }

    public function getActiveCustomPostTypes(){
        return $this->customPostTypeRepository->findAllCustomPostTypeBy(['status'=>1]);
    }

    public function getCustomPostType($id){
        return $this->customPostTypeRepository->findCustomPostType($id);
    }

    public function updateCustomPostType($id, $data){
        $customPostType = $this->customPostTypeRepository->findCustomPostType($id);
        $customPostType->setName($data->get('name'));
        $customPostType->setSlug($data->get('slug'));
        $customPostType->setStatus(1);
        $customPostType->setUpdatedAt(Carbon::now());
        if($data->get('label')!=null){
            for($i=0;$i<count($data->get('label'));$i++){
                $customPostTypeAdditionalFields = new CustomPostTypeAdditionalFields();
                $customPostTypeAdditionalFields->setIsRequired($data->get('isRequired')[$i]=='on'?1:0);
                $customPostTypeAdditionalFields->setFieldName(str_replace(' ','-',strtolower($data->get('label')[$i])));
                $customPostTypeAdditionalFields->setLabel($data->get('label')[$i]);
                $customPostTypeAdditionalFields->setType($data->get('type')[$i]);
                $customPostTypeAdditionalFields->setFieldValue($data->get('value')[$i]!=null?$data->get('value')[$i]:"");
                $customPostType->addAdditionalFields($customPostTypeAdditionalFields);
            }
        }
        return $this->customPostTypeRepository->saveOrUpdate($customPostType);
    }

    public function saveCustomPostType($data){
        $customPostType = new CustomPostType();
        $customPostType->setName($data->get('name'));
        $customPostType->setSlug($data->get('slug'));
        $customPostType->setStatus(1);
        $customPostType->setCreatedAt(Carbon::now());
        $customPostType->setUpdatedAt(Carbon::now());
        if($data->get('label')!=null){
            for($i=0;$i<count($data->get('label'));$i++){
                $customPostTypeAdditionalFields = new CustomPostTypeAdditionalFields();
                $customPostTypeAdditionalFields->setIsRequired($data->get('isRequired')[$i]=='on'?1:0);
                $customPostTypeAdditionalFields->setFieldName(str_replace(' ','-',strtolower($data->get('label')[$i])));
                $customPostTypeAdditionalFields->setLabel($data->get('label')[$i]);
                $customPostTypeAdditionalFields->setType($data->get('type')[$i]);
                $customPostTypeAdditionalFields->setFieldValue($data->get('value')[$i]!=null?$data->get('value')[$i]:"");
                $customPostType->addAdditionalFields($customPostTypeAdditionalFields);
            }
        }
//        dd($customPostType);
        return $this->customPostTypeRepository->saveOrUpdate($customPostType);
    }

    public function getCustomPostTypeBy($criteria){
        return $this->customPostTypeRepository->findCustomPostTypeBy($criteria);
    }
}