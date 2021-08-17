<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 02/03/20
 * Time: 11:04 AM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class BannerDetail
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="banner_detail")
 */
class BannerDetail{

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string", nullable=true)
     */
    private $buttonName;

    /**
     * @var
     * @ORM\Column(type="string", nullable=true)
     */
    private $buttonLink;

    /**
     * @var
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $content;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    private $featuredImage;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Banner", inversedBy="bannerDetail")
     * @ORM\JoinColumn(name="banner_id", referencedColumnName="id")
     */
    private $banner;

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
    public function getButtonName()
    {
        return $this->buttonName;
    }

    /**
     * @param mixed $buttonUrl
     */
    public function setButtonName($buttonName)
    {
        $this->buttonName = $buttonName;
    }

    /**
     * @return mixed
     */
    public function getButtonLink()
    {
        return $this->buttonLink;
    }

    /**
     * @param mixed $buttonLink
     */
    public function setButtonLink($buttonLink)
    {
        $this->buttonLink = $buttonLink;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }

    /**
     * @param mixed $featuredImage
     */
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;
    }

    /**
     * @return mixed
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * @param mixed $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }



}