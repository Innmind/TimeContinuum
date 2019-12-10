<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\BahiaBanderas,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class BahiaBanderasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BahiaBanderas;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
