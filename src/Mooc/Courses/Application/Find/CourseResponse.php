<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Response;

class CourseResponse implements Response
{
    public function __construct(private String $id,private String $name,private String $duration)
    {
    }

    /**
     * @return String
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return String
     */
    public function getDuration(): string
    {
        return $this->duration;
    }


}