<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\BahiaBanderas,
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
