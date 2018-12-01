<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Choibalsan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChoibalsanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Choibalsan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
