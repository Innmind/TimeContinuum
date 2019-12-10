<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Lindeman,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class LindemanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lindeman;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
