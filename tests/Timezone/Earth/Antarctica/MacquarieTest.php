<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Antarctica;

use Innmind\TimeContinuum\{
    Timezone\Earth\Antarctica\Macquarie,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MacquarieTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macquarie;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
