<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Malabo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MalaboTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Malabo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
