<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Qyzylorda,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class QyzylordaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Qyzylorda;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
