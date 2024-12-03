<?php

use App\Entity\Completion;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertInstanceOf;

final class CompletionTest extends TestCase
{
    public function testCompletionCreate(): void
    {
        $values = [
            "date" => new DateTime(),
            "status" => true
        ];

        $completion = new Completion();
        $completion->setDate($values["date"]);
        $completion->setStatus($values["status"]);

        assertInstanceOf(Completion::class, $completion);
        assertSame($values["date"], $completion->getDate());
        assertSame($values["status"], $completion->getStatus());
    }
}
