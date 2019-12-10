<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Miquelon,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MiquelonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Miquelon;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
