<?php

namespace CodelyTv\Mooc\Shared\Domain\Users;

class UserId
{
    private string $userId;

    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }


}