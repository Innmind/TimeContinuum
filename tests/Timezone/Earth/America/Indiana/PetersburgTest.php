<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Indiana;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Indiana\Petersburg,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PetersburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Petersburg;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
