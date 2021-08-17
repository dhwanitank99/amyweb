<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 02/03/20
 * Time: 2:36 PM
 */

namespace App\Service\impl;


use App\Entities\General;
use App\Repository\GeneralRepository;
use App\Service\GeneralService;
use App\Traits\FileUpload;

class GeneralServiceImpl implements GeneralService {
    use FileUpload;
    private $generalRepository;
    public function __construct(GeneralRepository $generalRepository){
        $this->generalRepository = $generalRepository;
    }

    public function getContactSettings()
    {
        return $this->generalRepository->findContactSettings();
    }

    public function saveContactSettings($data){
        if($data->get('id')!=null){
            $contact = $this->generalRepository->findContactSettings();
        }else{
            $contact = new General();
        }
        $contact->setName($data->get('name'));
        $contact->setEmail($data->get('email'));
        $contact->setAddress($data->get('address'));
        $contact->setStatus(1);
        $contact->setCity($data->get('city'));
        $contact->setState($data->get('state'));
        $contact->setDetails($data->get('details'));
        $contact->setMobile($data->get('mobile'));
        $contact->setPhone($data->get('phone'));
        $contact->setPinCode($data->get('pin-code'));
        $contact->setWebsite($data->get('website'));
        if($data->hasFile('file')){
            $path = $this->uploadFile($data, '','file');
            if($path){
                $contact->setLogo($path);
            }
        }
        return $this->generalRepository->saveOrUpdateContactSettings($contact);
    }
}