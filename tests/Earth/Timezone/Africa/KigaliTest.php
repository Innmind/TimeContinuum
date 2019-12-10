<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Kigali,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KigaliTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kigali;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
