<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Macao,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class MacaoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Macao;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
