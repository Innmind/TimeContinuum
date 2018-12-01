<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Banjul,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BanjulTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Banjul;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
