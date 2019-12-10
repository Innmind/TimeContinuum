<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Juneau,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class JuneauTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Juneau;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
