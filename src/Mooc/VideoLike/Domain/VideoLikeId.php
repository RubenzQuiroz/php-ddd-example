<?php

namespace CodelyTv\Mooc\VideoLike\Domain;

class VideoLikeId
{
    private string $videoLikeId;

    public function __construct(string $videoLikeId)
    {
        $this->videoLikeId = $videoLikeId;
    }

    /**
     * @return string
     */
    public function getVideoLikeId(): string
    {
        return $this->videoLikeId;
    }


}