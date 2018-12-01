<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Vladivostok,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class VladivostokTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Vladivostok;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
