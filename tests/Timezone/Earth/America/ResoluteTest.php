<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Resolute,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ResoluteTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Resolute;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
