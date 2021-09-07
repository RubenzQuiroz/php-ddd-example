<?php

namespace CodelyTv\Mooc\VideoCourse\Application\Find;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;
use CodelyTv\Shared\Domain\Bus\Query\QueryHandler;
use function Lambdish\Phunctional\pipe;

final class FindVideoQueryHandler implements QueryHandler
{
    private $finder;

    public function __construct(VideoCourseFinder $videoCourseFinder)
    {
        $this->finder = pipe($videoCourseFinder, new VideoCourseResponseConverter());
    }

    public function __invoke(FindVideoCourseQuery $findVideoCourseQuery)
    {
        $id = new VideoId($findVideoCourseQuery->getVideoId());
        return apply($this->finder,[$id]);
    }
}