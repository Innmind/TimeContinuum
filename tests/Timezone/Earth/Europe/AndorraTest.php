<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Andorra,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AndorraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Andorra;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
