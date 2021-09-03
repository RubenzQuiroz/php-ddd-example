<?php

namespace CodelyTv\Mooc\Courses\Domain;

final class NoCoursesFound extends \CodelyTv\Shared\Domain\DomainError
{

    public function errorCode(): string
    {
        return 'no_courses_found';
    }

    protected function errorMessage(): string
    {
        return sprintf('There are zero courses on our system');
    }
}