<?php

use App\Entity\User;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

final class UserTest extends TestCase
{
    public function testUserCreate(): void
    {
        $values = [];

        $user = new User();
        assertInstanceOf(User::class, $user);
    }
}
