<?php

namespace CodelyTv\Mooc\VideoComment\Domain;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;

class VideoComment
{
    private VideoCommenId $videoCommenId;
    private VideoId $videoId;
    private Comment $comment;

    public function __construct(VideoCommenId $videoCommenId, VideoId $videoId, Comment $comment)
    {
        $this->videoCommenId = $videoCommenId;
        $this->videoId = $videoId;
        $this->comment = $comment;
    }

    public function getVideoCommenId(): VideoCommenId
    {
        return $this->videoCommenId;
    }

    public function getVideoId(): VideoId
    {
        return $this->videoId;
    }

    public function getComment(): Comment
    {
        return $this->comment;
    }


}