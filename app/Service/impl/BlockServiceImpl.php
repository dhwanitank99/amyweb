<?php
/**
 * Created by PhpStorm.
 * User: TechnopleSolutions
 * Date: 28/02/20
 * Time: 6:03 PM
 */

namespace App\Service\impl;


use App\Entities\Block;
use App\Repository\BlockRepository;
use App\Service\BlockService;
use App\Traits\FileUpload;
use Carbon\Carbon;

class BlockServiceImpl implements BlockService {
    use FileUpload;
    private $blockRepository;

    public function __construct(BlockRepository $blockRepository){
        $this->blockRepository = $blockRepository;
    }

    public function saveBlock($data){
        $block = new Block();
        $block->setTitle($data->get('title'));
        $block->setContent($data->get('content'));
        $block->setStatus(1);
        $block->setCreatedAt(Carbon::now());
        $block->setUpdatedAt(Carbon::now());
        if($data->has('file')){
            $path = $this->uploadFile($data, '', 'file');
            if($path){
                $block->setFeaturedImage($path);
            }
        }
        return $this->blockRepository->saveOrUpdate($block);
    }

    public function getBlocks(){
        return $this->blockRepository->findBlocks();
    }

    public function getBlock($id){
        return $this->blockRepository->findBlock($id);
    }

    public function updateBlock($data, $id){
        $block = $this->blockRepository->findBlock($id);
        $block->setTitle($data->get('title'));
        $block->setContent($data->get('content'));
        $block->setStatus(1);
        $block->setUpdatedAt(Carbon::now());
        if($data->has('file')){
            $path = $this->uploadFile($data, '', 'file');
            if($path){
                $block->setFeaturedImage($path);
            }
        }
        return $this->blockRepository->saveOrUpdate($block);
    }
}