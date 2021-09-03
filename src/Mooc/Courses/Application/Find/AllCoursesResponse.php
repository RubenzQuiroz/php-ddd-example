<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Response;

final class AllCoursesResponse implements Response
{
    private array $allCoursesResponse;

    public function __construct(CourseResponse ...$courseResponse)
    {
        $this->allCoursesResponse = $courseResponse;
    }

    /**
     * @return CourseResponse[]
     */
    public function getAllCoursesResponse(): array
    {
        return $this->allCoursesResponse;
    }


}