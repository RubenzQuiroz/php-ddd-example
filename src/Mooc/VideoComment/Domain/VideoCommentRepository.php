<?php

namespace CodelyTv\Mooc\VideoComment\Domain;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;

interface VideoCommentRepository
{

    public function searchAll(VideoId $videoId) : VideoComments;

}