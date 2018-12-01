<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Panama,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class PanamaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Panama;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
