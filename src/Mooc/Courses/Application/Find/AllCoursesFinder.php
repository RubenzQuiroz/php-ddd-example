<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Mooc\Courses\Domain\Courses;
use CodelyTv\Mooc\Courses\Domain\NoCoursesFound;

class AllCoursesFinder
{
    public function __construct(private CourseRepository $courseRepository)
    {
    }

    public function __invoke():Courses{
        $allCourses = $this->courseRepository->findAll();
        if(null===$allCourses){
            throw new NoCoursesFound();
        }
        return $allCourses;
    }
}