<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Curacao,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CuracaoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Curacao;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
