<?php

namespace CodelyTv\Mooc\VideoComment\Application\FindAll;

use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;
use function Lambdish\Phunctional\pipe;
use const Lambdish\Phunctional\apply;

class FindVideoCommentsQueryHandler
{
    private $finder;

    public function __construct(VideoCommentsFinder $finder){
        $this->finder = pipe(new VideoCommentsResponseConverter(),$finder);
    }

    public function __invoke(FindVideoCommentsQuery $findVideoCommentsQuery) : VideoCommentsResponse
    {
        $videoId = new VideoId($findVideoCommentsQuery->getId());
        return apply($this->finder,[$videoId]);

    }

}