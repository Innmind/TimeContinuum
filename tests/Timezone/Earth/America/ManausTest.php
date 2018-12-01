<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Manaus,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ManausTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Manaus;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
