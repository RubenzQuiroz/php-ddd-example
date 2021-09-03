<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Domain\Course;

class AllCourseResponseConverter
{
    public function __construct(private CourseResponse $courseResponse,private CourseResponseConverter $courseResponseConverter)
    {
    }

    public function __invoke(Course ...$course):AllCoursesResponse{
        return new AllCoursesResponse();
    }

}