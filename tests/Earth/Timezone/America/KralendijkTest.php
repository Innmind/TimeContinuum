<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Kralendijk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KralendijkTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kralendijk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
