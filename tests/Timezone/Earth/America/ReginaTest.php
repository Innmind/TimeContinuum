<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Regina,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ReginaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Regina;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
