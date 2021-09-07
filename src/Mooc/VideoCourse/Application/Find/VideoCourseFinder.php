<?php

namespace CodelyTv\Mooc\VideoCourse\Application\Find;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;
use CodelyTv\Mooc\VideoCourse\Domain\VideoAllCourses;
use CodelyTv\Mooc\VideoCourse\Domain\VideoCourseRepository;

class VideoCourseFinder
{
    private VideoCourseRepository $videoCourseRepository;

    public function __construct(VideoCourseRepository $videoCourseRepository)
    {
        $this->videoCourseRepository = $videoCourseRepository;
    }

    public function __invoke(VideoId $videoId): VideoAllCourses
    {
        return $this->videoCourseRepository->searchById($videoId);
    }


}