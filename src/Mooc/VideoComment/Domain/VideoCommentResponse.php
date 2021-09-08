<?php

namespace CodelyTv\Mooc\VideoComment\Domain;

class VideoCommentResponse
{
    private string $videoCommentId;
    private string $videoId;
    private String $comment;

    public function __construct(string $videoCommentId, string $videoId, string $comment)
    {
        $this->videoCommentId = $videoCommentId;
        $this->videoId = $videoId;
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getVideoCommentId(): string
    {
        return $this->videoCommentId;
    }

    /**
     * @return string
     */
    public function getVideoId(): string
    {
        return $this->videoId;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }


}