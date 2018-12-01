<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Araguaina,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AraguainaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Araguaina;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
