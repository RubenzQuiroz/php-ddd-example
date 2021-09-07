<?php

namespace CodelyTv\Mooc\VideoCourse\Domain;

use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;
use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;

class VideoCourse
{
    private VideoId $videoId;
    private CourseId $courseId;
    private VideoCurseName $videoCurseName;

    public function __construct(VideoId $videoId, CourseId $courseId, VideoCurseName $videoCurseName)
    {
        $this->videoId = $videoId;
        $this->courseId = $courseId;
        $this->videoCurseName = $videoCurseName;
    }

    public function getVideoId(): VideoId
    {
        return $this->videoId;
    }

    public function getCourseId(): CourseId
    {
        return $this->courseId;
    }

    public function getVideoCurseName(): VideoCurseName
    {
        return $this->videoCurseName;
    }


}