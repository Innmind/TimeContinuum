<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Inuvik,
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
