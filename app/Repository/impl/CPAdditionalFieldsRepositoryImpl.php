<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 04/03/20
 * Time: 12:21 PM
 */

namespace App\Repository\impl;


use App\Repository\CPAdditionalFieldsRepository;
use Doctrine\ORM\EntityRepository;

class CPAdditionalFieldsRepositoryImpl extends EntityRepository implements CPAdditionalFieldsRepository
{

    public function delete($additionalFields)
    {
        foreach ($additionalFields as $additionalField){
            $this->_em->remove($additionalField);
            $this->_em->flush();
        }
        return true;
    }
}