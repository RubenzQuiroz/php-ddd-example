<?php

namespace CodelyTv\Mooc\VideoCourse\Domain;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;

interface VideoCourseRepository
{
    public function searchById(VideoId $videoId): VideoAllCourses;
}