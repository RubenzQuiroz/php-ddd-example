<?php

namespace CodelyTv\Mooc\VideoCourse\Infraestructure\Find;

use CodelyTv\Mooc\VideoCourse\Application\Find\FindVideoCourseQuery;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;

class VideoCourseGetController extends ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(string $videoComentId)
    {
        return $this->ask(new FindVideoCourseQuery($videoComentId));
    }
}