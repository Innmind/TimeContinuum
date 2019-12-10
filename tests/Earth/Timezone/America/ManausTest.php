<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Manaus,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ManausTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Manaus;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
