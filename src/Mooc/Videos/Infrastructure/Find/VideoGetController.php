<?php

namespace CodelyTv\Mooc\Videos\Infrastructure\Videos\Find;

use CodelyTv\Mooc\Videos\Application\Find\FindVideoQuery;
use CodelyTv\Mooc\Videos\Domain\VideoNotFound;
use Symfony\Component\HttpFoundation\Response;

final class VideoGetController extends \CodelyTv\Shared\Infrastructure\Symfony\ApiController
{

    protected function exceptions(): array
    {
       return [VideoNotFound::class=>Response::HTTP_NOT_FOUND,];
    }

    public function __invoke(String $id){
        return $this ->ask(new FindVideoQuery($id));
    }
}