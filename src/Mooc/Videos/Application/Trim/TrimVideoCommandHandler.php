<?php

declare (strict_types=1);

namespace CodelyTv\Mooc\Videos\Application\Trim;

use CodelyTv\Mooc\Videos\Domain\VideoIdDel;
use CodelyTv\Shared\Domain\SecondsInterval;

final class TrimVideoCommandHandler
{
    public function __construct(private VideoTrimmer $trimmer)
    {
    }

    public function __invoke(TrimVideoCommand $command)
    {
        $id       = new VideoIdDel($command->videoId());
        $interval = SecondsInterval::fromValues($command->keepFromSecond(), $command->keepToSecond());

        $this->trimmer->trim($id, $interval);
    }
}
