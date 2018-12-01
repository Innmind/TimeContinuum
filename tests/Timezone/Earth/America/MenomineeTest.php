<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Menominee,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MenomineeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Menominee;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
