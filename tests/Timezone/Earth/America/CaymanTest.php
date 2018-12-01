<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Cayman,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CaymanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Cayman;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
