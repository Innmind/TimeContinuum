<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Karachi,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KarachiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Karachi;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
