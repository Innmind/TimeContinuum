<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Australia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Australia\NewSouthWales,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NewSouthWalesTest extends TestCase
{
    public function testInterface()
    {
        $zone = new NewSouthWales;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
