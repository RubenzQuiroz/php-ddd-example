<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\QueryHandler;

final class FindAllCoursesQueryHandler implements QueryHandler
{
    private AllCoursesFinder $finder;

    public function __construct(AllCoursesFinder $finder)
    {
        $this->finder = $finder;
    }

    public function __invoke(FindAllCoursesQuery $findAllCoursesQuery): AllCoursesResponse{
        return new AllCoursesResponse($this->finder->__invoke());
    }



}