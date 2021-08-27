<?php

namespace CodelyTv\Mooc\VideoLike\Application\Create;

use CodelyTv\Shared\Domain\Bus\Command\Command;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

final class CreateVideoLikeCommand implements Command
{
    private Uuid $commandId;
    private string $videoLikeId;
    private string $videoId;
    private string $userId;

    public function __construct(Uuid $commandId, string $videoLikeId, string $videoId, string $userId)
    {
        parent::__construct($commandId);
        $this->videoLikeId = $videoLikeId;
        $this->commandId = $commandId;
        $this->userId = $userId;
        $this->videoId = $videoId;
    }

    /**
     * @return Uuid
     */
    public function getCommandId(): Uuid
    {
        return $this->commandId;
    }

    /**
     * @return string
     */
    public function getVideoLikeId(): string
    {
        return $this->videoLikeId;
    }

    /**
     * @return string
     */
    public function getVideoId(): string
    {
        return $this->videoId;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }


}