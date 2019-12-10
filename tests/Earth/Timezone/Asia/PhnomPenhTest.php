<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\PhnomPenh,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PhnomPenhTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PhnomPenh;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
