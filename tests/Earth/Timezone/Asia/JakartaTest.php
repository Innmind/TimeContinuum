<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Jakarta,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class JakartaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jakarta;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
