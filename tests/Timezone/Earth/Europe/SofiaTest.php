<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Sofia,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SofiaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Sofia;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
