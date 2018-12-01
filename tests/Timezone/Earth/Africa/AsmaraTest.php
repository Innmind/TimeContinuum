<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Asmara,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AsmaraTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Asmara;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
