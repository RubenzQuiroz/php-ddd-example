<?php

namespace CodelyTv\Mooc\VideoLike\Domain;

use CodelyTv\Shared\Domain\Bus\Event\DomainEvent;

class VideoLikeCreatedDomainEvent extends \CodelyTv\Shared\Domain\Bus\Event\DomainEvent
{
    public function __construct(
        string         $id,
        private string $videoLikeId,
        private string $userId,
        private string $videoId,
        string         $eventId = null,
        string         $occurredOn = null
    )
    {
        parent::__construct($id, $eventId, $occurredOn);
    }

    public static function fromPrimitives(string $aggregateId, array $body, string $eventId, string $occurredOn): DomainEvent
    {
        return new self($aggregateId, $body['videoLikeId'], $body['userId'], $body['videoId'], $eventId, $occurredOn);
    }

    public static function eventName(): string
    {
        return 'videoLike.created';
    }

    public function toPrimitives(): array
    {
        return [
            'videoLikeId'     => $this->videoLikeId,
            'userId' => $this->userId,
            'videoId' => $this->videoId,
        ];
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
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getVideoId(): string
    {
        return $this->videoId;
    }


}