<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Bangui,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BanguiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bangui;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
