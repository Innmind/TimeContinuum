<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Metlakatla,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MetlakatlaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Metlakatla;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
