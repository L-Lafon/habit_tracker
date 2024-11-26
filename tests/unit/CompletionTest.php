<?php

use App\Entity\Completion;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

final class CompletionTest extends TestCase
{
    public function testCompletionCreate(): void
    {
        $date = new DateTime();

        $completion = new Completion();
        $completion->setDate($date);
        $completion->setStatus(true);

        assertSame($date, $completion->getDate());
        assertSame(true, $completion->getStatus());
    }
}
