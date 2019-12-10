<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Gaza,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class GazaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Gaza;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
