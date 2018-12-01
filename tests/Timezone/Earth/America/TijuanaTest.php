<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Tijuana,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TijuanaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tijuana;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
