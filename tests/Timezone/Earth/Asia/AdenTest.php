<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Aden,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AdenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Aden;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
