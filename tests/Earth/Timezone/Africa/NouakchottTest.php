<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Nouakchott,
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
