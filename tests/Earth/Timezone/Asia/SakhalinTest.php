<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Sakhalin,
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
