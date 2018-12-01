<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Antigua,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AntiguaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Antigua;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
