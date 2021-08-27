<?php

namespace CodelyTv\Mooc\VideoLike\Application\Create;

use CodelyTv\Mooc\Shared\Domain\Users\UserId;
use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;
use CodelyTv\Mooc\VideoLike\Domain\VideoLikeId;
use CodelyTv\Mooc\Videos\Application\Create\CreateVideoCommand;



class CreateVideoLikeCommandHandler
{
    private VideoLikeCreator $videoLikeCreator;

    public function __construct(VideoLikeCreator $videoLikeCreator)
    {
        $this->videoLikeCreator = $videoLikeCreator;
    }

    public function __invoke(CreateVideoLikeCommand $command):void{
        $id = new VideoLikeId($command->getVideoLikeId());
        $userId = new UserId($command->getUserId());
        $videoId = new VideoId($command->getVideoId());

        $this ->videoLikeCreator->create($id,$userId,$videoId);
    }
}