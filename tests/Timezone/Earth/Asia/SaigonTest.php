<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Saigon,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaigonTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Saigon;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
