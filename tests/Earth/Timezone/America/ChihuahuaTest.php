<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Chihuahua,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ChihuahuaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chihuahua;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
