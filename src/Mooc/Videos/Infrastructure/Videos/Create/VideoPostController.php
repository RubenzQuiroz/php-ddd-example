<?php

namespace CodelyTv\Mooc\Videos\Infrastructure\Videos;

use CodelyTv\Mooc\Videos\Application\Create\CreateVideoCommand;
use http\Env\Request;

class VideoPostController extends \CodelyTv\Shared\Infrastructure\Symfony\ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request){
        $command = new CreateVideoCommand(
            $request->get('request_id'),
            $request->get('request_type'),
            $request->get('request_title'),
            $request->get('request_courde_id')
        );
        $this->dispatch($command);
    }
}