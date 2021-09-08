<?php

namespace CodelyTv\Mooc\VideoComment\Application\FindAll;

use CodelyTv\Shared\Domain\Bus\Query\Query;

class FindVideoCommentsQuery implements Query
{
    private string $id;

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


}