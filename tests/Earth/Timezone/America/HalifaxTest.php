<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Halifax,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HalifaxTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Halifax;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
