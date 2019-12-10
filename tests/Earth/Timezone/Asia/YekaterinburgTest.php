<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Yekaterinburg,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class YekaterinburgTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yekaterinburg;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
