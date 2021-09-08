<?php

namespace CodelyTv\Mooc\VideoComment\Domain {

    use CodelyTv\Mooc\VideoComment\Domain\VideoComment;

    class VideoCommentResponseConverter
    {

        public function __invoke(VideoComment $videoComment) : VideoCommentResponse
        {
            return new VideoCommentResponse(
                $videoComment->getVideoId(),
                $videoComment->getComment(),
                $videoComment->getVideoCommenId()
            );
        }

    }
}