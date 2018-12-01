<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Cayenne,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CayenneTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cayenne;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
