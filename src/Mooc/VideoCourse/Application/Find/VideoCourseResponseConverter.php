<?php

namespace CodelyTv\Mooc\VideoCourse\Application\Find;

use CodelyTv\Mooc\VideoCourse\Domain\VideoCourse;

class VideoCourseResponseConverter
{

    public function __invoke(VideoCourse $videoCourse)
    {
        return new VideoCourseResponse(
            $videoCourse->getVideoId(),
            $videoCourse->getCourseId(),
            $videoCourse->getVideoCurseName()
        );
    }

}