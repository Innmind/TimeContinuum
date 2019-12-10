<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\CapeVerde,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CapeVerdeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CapeVerde;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
