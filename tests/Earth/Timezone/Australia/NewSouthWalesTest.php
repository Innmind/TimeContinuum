<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\NewSouthWales,
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
