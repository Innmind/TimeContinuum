<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\PortAuPrince,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PortAuPrinceTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortAuPrince;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
