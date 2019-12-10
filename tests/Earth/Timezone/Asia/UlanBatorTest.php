<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\UlanBator,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class UlanBatorTest extends TestCase
{
    public function testInterface()
    {
        $zone = new UlanBator;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
