---
hide:
    - navigation
    - toc
---

# Welcome to TimeContinnum

TimeContinuum is a time abstraction library.

The goal is to provide a safe way to manipulate time in your programs.

It achieves this via:

- an expressive object oriented API to avoid _magic strings_
- a clear separation between what's mutable and immutable

??? example "Sneak peek"
    ```php
    use Innmind\TimeContinuum\{
        Clock,
        Format,
    };

    $clock = Clock::live();
    $start = $clock->now();
    // do some stuff
    $end = $clock->now();
    $took = $end
        ->elapsedSince($start)
        ->asPeriod();

    \printf(
        'The script ended at %s and it took %s second(s), %s millisecond(s) %s microsecond(s).',
        $end->format(Format::iso8601()),
        $took->seconds(),
        $took->milliseconds(),
        $took->microseconds(),
    );
    ```
