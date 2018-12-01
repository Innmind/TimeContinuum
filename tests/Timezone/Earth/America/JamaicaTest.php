<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Jamaica,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JamaicaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Jamaica;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
