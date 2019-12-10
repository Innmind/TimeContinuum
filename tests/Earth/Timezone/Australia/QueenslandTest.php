<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Queensland,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class QueenslandTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Queensland;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
