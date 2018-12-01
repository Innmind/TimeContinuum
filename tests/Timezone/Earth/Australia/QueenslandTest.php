<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Queensland,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class QueenslandTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Queensland;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
