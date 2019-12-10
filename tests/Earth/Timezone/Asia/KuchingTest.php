<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kuching,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class KuchingTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kuching;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
