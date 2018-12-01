<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Nome,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class NomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nome;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
