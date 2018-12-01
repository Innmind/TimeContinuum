<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Adak,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AdakTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Adak;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
