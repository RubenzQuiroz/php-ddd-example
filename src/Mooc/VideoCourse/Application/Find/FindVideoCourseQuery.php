<?php

namespace CodelyTv\Mooc\VideoCourse\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Query;

class FindVideoCourseQuery implements Query
{
    private $videoId;

    public function __construct( String $videoId)
    {
        $this->videoId = $videoId;
    }

    public function getVideoId(): string
    {
        return $this->videoId;
    }

}