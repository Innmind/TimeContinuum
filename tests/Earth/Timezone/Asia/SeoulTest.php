<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Seoul,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SeoulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Seoul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
