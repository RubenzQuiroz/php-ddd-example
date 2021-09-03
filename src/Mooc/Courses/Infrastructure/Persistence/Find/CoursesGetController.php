<?php

namespace CodelyTv\Mooc\Courses\Infrastructure\Persistence\Find;

class CoursesGetController extends \CodelyTv\Shared\Infrastructure\Symfony\ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(){
        return $this->ask(new FindAllCoursesQuery());
    }

}