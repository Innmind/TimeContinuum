<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Inuvik,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class InuvikTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Inuvik;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
