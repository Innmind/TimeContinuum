<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Yellowknife,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YellowknifeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yellowknife;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
