<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Tashkent,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TashkentTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tashkent;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
