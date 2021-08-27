<?php

namespace CodelyTv\Mooc\Videos\Infrastructure\Videos\Like;

use CodelyTv\Mooc\VideoLike\Application\Create\CreateVideoLikeCommand;

class VideoLikePostController extends \CodelyTv\Shared\Infrastructure\Symfony\ApiController
{

    protected function exceptions(): array
    {
        return [];
    }

    public function __invoke(Request $request){
        $command = new CreateVideoLikeCommand(
            new Uuid($request->get('request_id')),
            $request->get('$videoLikeId'),
            $request->get('$videoId'),

        );
        $this->dispatch($command);
    }
}