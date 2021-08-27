<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Videos\Infrastructure\Persistence\Doctrine;

use CodelyTv\Mooc\Videos\Domain\VideoIdDel;
use CodelyTv\Shared\Infrastructure\Persistence\Doctrine\UuidType;

final class VideoIdType extends UuidType
{
    protected function typeClassName(): string
    {
        return VideoIdDel::class;
    }
}

