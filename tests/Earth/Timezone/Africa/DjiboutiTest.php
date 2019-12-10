<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Djibouti,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DjiboutiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Djibouti;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
