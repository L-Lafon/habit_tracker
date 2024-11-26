<?php

use App\Entity\Habit;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

final class HabitTest extends TestCase
{
    public function testHabitCreate(): void
    {
        $values = [
            "name" => "Sport",
            "frequency" => "1x/sem",
            "color" => "#000000",
            "scoreChartPeriod" => "w",
            "historyChartPeriod" => "w",
        ];

        $habit = new Habit();
        $habit->setName($values["name"]);
        $habit->setFrequency($values["frequency"]);
        $habit->setColor($values["color"]);
        $habit->setScoreChartPeriod($values["scoreChartPeriod"]);
        $habit->setHistoryChartPeriod($values["historyChartPeriod"]);

        assertSame($values["name"], $habit->getName());
        assertSame($values["frequency"], $habit->getFrequency());
        assertSame($values["color"], $habit->getColor());
        assertSame($values["scoreChartPeriod"], $habit->getScoreChartPeriod());
        assertSame($values["historyChartPeriod"], $habit->getHistoryChartPeriod());
    }
}
