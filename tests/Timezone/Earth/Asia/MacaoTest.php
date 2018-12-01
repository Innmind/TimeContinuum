<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Macao,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MacaoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macao;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
