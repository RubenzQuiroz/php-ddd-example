<?php

namespace CodelyTv\Mooc\VideoComment\Infrastructure;

use CodelyTv\Mooc\VideoComment\Application\FindAll\FindVideoCommentsQuery;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;

class VideoCommentsGetController extends ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(string $videoId)
    {
        return $this->ask(new FindVideoCommentsQuery($videoId));
    }
}