<?php

namespace CodelyTv\Mooc\VideoLike\Domain;

use CodelyTv\Mooc\Shared\Domain\Users\UserId;
use CodelyTv\Mooc\Shared\Domain\Videos\VideoId;
use CodelyTv\Shared\Domain\Aggregate\AggregateRoot;

class VideoLike extends AggregateRoot
{
    public function __construct(private VideoLikeId $id, private UserId $userId, private VideoId $videoId)
    {
    }

    public static function like(VideoLikeId $id, UserId $userId, VideoId $videoId): self
    {
        $videoLike = new self($id, $userId, $videoId);
        $videoLike->record(new VideoLikeCreatedDomainEvent($id->getVideoLikeId(), $userId->getUserId(), $videoId->value()));
        return $videoLike;
    }

    /**
     * @return VideoLikeId
     */
    public function getId(): VideoLikeId
    {
        return $this->id;
    }

    /**
     * @return UserId
     */
    public function getUserId(): UserId
    {
        return $this->userId;
    }

    /**
     * @return VideoId
     */
    public function getVideoId(): VideoId
    {
        return $this->videoId;
    }


}