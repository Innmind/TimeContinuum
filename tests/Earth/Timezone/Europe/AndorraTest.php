<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\Andorra,
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
