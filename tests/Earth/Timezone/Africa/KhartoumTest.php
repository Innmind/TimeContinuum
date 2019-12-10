<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Khartoum,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KhartoumTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Khartoum;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
