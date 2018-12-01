<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Creston,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CrestonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Creston;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
