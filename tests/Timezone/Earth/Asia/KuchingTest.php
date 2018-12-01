<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kuching,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KuchingTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kuching;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
