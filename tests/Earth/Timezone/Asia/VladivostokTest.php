<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Vladivostok,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class VladivostokTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vladivostok;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
