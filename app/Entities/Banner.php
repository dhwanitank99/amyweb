<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 02/03/20
 * Time: 10:59 AM
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Banner
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="banners")
 */
class Banner{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="BannerDetail", mappedBy="banner", cascade="all", fetch="EAGER")
     */
    private $bannerDetail;

    public function __construct(){
        $this->bannerDetail = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getBannerDetail()
    {
        return $this->bannerDetail;
    }

    /**
     * @param mixed $bannerDetail
     */
    public function setBannerDetail($bannerDetail)
    {
        $this->bannerDetail = $bannerDetail;
    }

    public function addBannerDetail(BannerDetail $bannerDetail){
        if(!$this->bannerDetail->contains($bannerDetail)){
            $bannerDetail->setBanner($this);
            $this->bannerDetail->add($bannerDetail);
        }
    }




}