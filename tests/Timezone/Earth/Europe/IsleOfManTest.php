<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\IsleOfMan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class IsleOfManTest extends TestCase
{
    public function testInterface()
    {
        $zone = new IsleOfMan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
