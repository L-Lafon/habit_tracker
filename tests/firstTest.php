<?php

use PHPUnit\Framework\TestCase;

final class TrueTest extends TestCase
{
    public function testSuccess(): void
    {
        $this->assertTrue(true);
    }
}
