<?php

namespace CodelyTv\Mooc\VideoLike\Application\Create;

use CodelyTv\Mooc\Shared\Domain\Users\UserId;
use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;
use CodelyTv\Mooc\VideoLike\Domain\VideoLike;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeId;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeRepository;

class VideoLikeCreator
{
   private VideoLikeRepository $videoLikeRepository;

    public function __construct(VideoLikeRepository $videoLikeRepository)
    {
       $this->videoLikeRepository = $videoLikeRepository;
    }

    public function create(VideoLikeId $id,UserId $userId,VideoId $videoId){
        $videoLike = VideoLike::like($id,$userId,$videoId);
        $this->save($videoLike);
        $videoLike->pullDomainEvents();
    }
}