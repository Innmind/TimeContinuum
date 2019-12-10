<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Eucla,
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
