<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Tbilisi,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TbilisiTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tbilisi;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
