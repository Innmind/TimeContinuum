<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America\Indiana;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Indiana\Petersburg,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PetersburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Petersburg;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
