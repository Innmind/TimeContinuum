<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Dushanbe,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DushanbeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dushanbe;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
