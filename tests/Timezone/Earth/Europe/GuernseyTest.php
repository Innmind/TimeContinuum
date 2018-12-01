<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Guernsey,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GuernseyTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Guernsey;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
