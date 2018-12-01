<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Nouakchott,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NouakchottTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nouakchott;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
