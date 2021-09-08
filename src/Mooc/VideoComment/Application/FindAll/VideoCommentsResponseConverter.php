<?php

namespace CodelyTv\Mooc\VideoComment\Application\FindAll;

use CodelyTv\Mooc\VideoComment\Domain\VideoCommentResponseConverter;
use CodelyTv\Mooc\VideoComment\Domain\VideoComments;


class VideoCommentsResponseConverter
{

    public function __construct()
    {
    }

    public function __invoke(VideoComments $videoComments){
        return new VideoCommentsResponse(
            map(new VideoCommentResponseConverter(),$videoComments)
        );
    }
}