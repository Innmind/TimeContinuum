<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\BahiaBanderas,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BahiaBanderasTest extends TestCase
{
    public function testInterface()
    {
        $zone = new BahiaBanderas;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
