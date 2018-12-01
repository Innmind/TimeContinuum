<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\Eucla,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EuclaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Eucla;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
