<?php

namespace CodelyTv\Mooc\VideoCourse\Application\Find;

use CodelyTv\Mooc\VideoCourse\Domain\VideoAllCourses;
use const Lambdish\Phunctional\map;

class VideoCoursesResponseConverter
{
    public function __construct()
    {
    }

    public function __invoke(VideoAllCourses $videoAllCourses){

        return new VideoAllCoursesResponse(map(new VideoCourseResponseConverter(),$videoAllCourses));
    }
}