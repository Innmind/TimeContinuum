<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\{
    Earth\Timezone\Pacific\Chuuk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChuukTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chuuk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
