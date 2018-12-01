<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Ojinaga,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class OjinagaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ojinaga;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
