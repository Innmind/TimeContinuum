<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Baghdad,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BaghdadTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Baghdad;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
