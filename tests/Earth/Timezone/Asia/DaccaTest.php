<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Dacca,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DaccaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dacca;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
