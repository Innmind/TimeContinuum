<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\PhnomPenh,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PhnomPenhTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PhnomPenh;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
