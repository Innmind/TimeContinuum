<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Aqtobe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AqtobeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Aqtobe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
