<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Macquarie,
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
