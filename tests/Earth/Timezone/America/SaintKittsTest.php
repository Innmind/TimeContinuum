<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SaintKitts,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SaintKittsTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaintKitts;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
