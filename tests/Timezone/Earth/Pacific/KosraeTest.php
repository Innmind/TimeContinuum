<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Pacific;

use Innmind\TimeContinuum\{
    Timezone\Earth\Pacific\Kosrae,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KosraeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kosrae;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
