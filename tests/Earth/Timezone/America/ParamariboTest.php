<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Paramaribo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ParamariboTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Paramaribo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
