<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Bangui,
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
