<?php

namespace CodelyTv\Mooc\VideoComment\Application\FindAll;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;

class VideoCommentsFinder
{
    private VideoCommentRepository $videoCommentRepository;

    public function __construct(VideoCommentRepository $videoCommentRepository)
    {
        $this->videoCommentRepository = $videoCommentRepository;
    }

    public function __invoke(VideoId $videoId) : VideoComments
    {
        return $this->videoCommentRepository->searchAll($videoId);
    }
}