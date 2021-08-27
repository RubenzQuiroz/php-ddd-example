<?php

namespace CodelyTv\Mooc\Videos\Infrastructure\Videos;

use CodelyTv\Mooc\Videos\Application\Create\CreateVideoCommand;
use CodelyTv\Shared\Domain\ValueObject\Uuid;
use http\Env\Request;

class VideoPostController extends \CodelyTv\Shared\Infrastructure\Symfony\ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request){
        $command = new CreateVideoCommand(
            new Uuid($request->get('request_id')),
            $request->get('id'),
            $request->get('title'),
            $request->get('courde_id')
        );
        $this->dispatch($command);
        return new ApiHttpCreatedResponse();
    }
}