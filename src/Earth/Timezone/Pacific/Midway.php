<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Pacific;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Midway extends Timezone
{
    public function __construct()
    {
        parent::__construct('Pacific/Midway');
    }
}
