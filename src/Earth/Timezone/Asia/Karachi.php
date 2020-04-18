<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Karachi extends Timezone
{
    public function __construct()
    {
        parent::__construct('Asia/Karachi');
    }
}
