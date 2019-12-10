<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Curacao,
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
