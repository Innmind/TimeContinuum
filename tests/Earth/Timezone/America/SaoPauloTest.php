<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\SaoPaulo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaoPauloTest extends TestCase
{
    public function testInterface()
    {
        $zone = new SaoPaulo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
