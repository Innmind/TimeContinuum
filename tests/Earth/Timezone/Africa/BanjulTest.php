<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Banjul,
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
