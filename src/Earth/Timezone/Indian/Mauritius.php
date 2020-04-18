<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Mauritius extends Timezone
{
    public function __construct()
    {
        parent::__construct('Indian/Mauritius');
    }
}
