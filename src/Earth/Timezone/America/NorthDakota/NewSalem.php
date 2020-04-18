<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\America\NorthDakota;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class NewSalem extends Timezone
{
    public function __construct()
    {
        parent::__construct('America/North_Dakota/New_Salem');
    }
}
