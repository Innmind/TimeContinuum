<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\UstNera,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class UstNeraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UstNera;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
