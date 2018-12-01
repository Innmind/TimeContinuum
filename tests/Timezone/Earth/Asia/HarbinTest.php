<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Harbin,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class HarbinTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Harbin;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
