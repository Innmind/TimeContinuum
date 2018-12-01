<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Kinshasa,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KinshasaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kinshasa;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
