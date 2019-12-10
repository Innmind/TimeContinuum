<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Tijuana,
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
