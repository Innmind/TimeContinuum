<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Timbuktu,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TimbuktuTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Timbuktu;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
