<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum;

interface Period
{
    public function years(): int;
    public function months(): int;
    public function days(): int;
    public function hours(): int;
    public function minutes(): int;
    public function seconds(): int;
    public function milliseconds(): int;
    public function equals(self $period): bool;
    public function add(self $period): self;
}
