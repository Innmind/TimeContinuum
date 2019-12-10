<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Samarkand,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class SamarkandTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Samarkand;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
