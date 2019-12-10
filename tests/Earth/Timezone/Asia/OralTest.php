<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Oral,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class OralTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Oral;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
