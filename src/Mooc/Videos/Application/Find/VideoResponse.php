<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Videos\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Response;

final class VideoResponse implements Response
{
    public function __construct(
        private string $id,
        private string $type,
        private string $title,
        private string $url,
        private string $courseId
    ) {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getCourseId(): string
    {
        return $this->courseId;
    }
}
