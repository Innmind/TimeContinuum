<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\NorthDakota\Beulah,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BeulahTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Beulah;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
