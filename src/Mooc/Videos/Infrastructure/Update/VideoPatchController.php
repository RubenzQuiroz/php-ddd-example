<?php

namespace CodelyTv\Mooc\Videos\Infrastructure\Update;

use CodelyTv\Mooc\Videos\Application\Create\CreateVideoCommand;
use CodelyTv\Shared\Domain\ValueObject\Uuid;
use http\Env\Request;

class VideoPatchController extends \CodelyTv\Shared\Infrastructure\Symfony\ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request){
        $command = new UpdateVideoCommand(
            $request->get('id'),
            $request->get('title')
        );
        $this->dispatch($command);
        return new ApiHttpCreatedResponse();
    }
}