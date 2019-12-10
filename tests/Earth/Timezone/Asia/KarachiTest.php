<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Karachi,
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
