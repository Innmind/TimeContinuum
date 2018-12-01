<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Ashgabat,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AshgabatTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ashgabat;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
