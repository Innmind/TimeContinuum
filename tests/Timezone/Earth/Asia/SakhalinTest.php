<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Sakhalin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SakhalinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Sakhalin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
