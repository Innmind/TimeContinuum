<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Chungking,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ChungkingTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Chungking;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
