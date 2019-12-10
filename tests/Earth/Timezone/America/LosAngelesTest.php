<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\LosAngeles,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LosAngelesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new LosAngeles;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
