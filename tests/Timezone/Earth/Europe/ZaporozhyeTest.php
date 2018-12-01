<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Europe;

use Innmind\TimeContinuum\{
    Timezone\Earth\Europe\Zaporozhye,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ZaporozhyeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Zaporozhye;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
