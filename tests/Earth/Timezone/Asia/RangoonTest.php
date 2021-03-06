<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Rangoon,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class RangoonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Rangoon;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
