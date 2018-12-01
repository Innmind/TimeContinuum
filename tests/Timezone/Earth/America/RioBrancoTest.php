<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\RioBranco,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RioBrancoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new RioBranco;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
