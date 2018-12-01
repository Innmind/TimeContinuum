<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Hebron,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HebronTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Hebron;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
