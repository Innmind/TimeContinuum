<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Minsk,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MinskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Minsk;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
