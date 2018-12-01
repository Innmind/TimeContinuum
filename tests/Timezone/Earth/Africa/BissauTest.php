<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Bissau,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BissauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bissau;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
