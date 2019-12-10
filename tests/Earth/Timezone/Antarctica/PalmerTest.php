<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\Palmer,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PalmerTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Palmer;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
