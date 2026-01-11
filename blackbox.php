<?php
declare(strict_types = 1);

require 'vendor/autoload.php';

use Innmind\BlackBox\{
    Application,
    Runner\Load,
    Runner\CodeCoverage,
    PHPUnit,
};

Application::new($argv)
    ->when(
        \getenv('BLACKBOX_SET_SIZE') !== false,
        static fn(Application $app) => $app->scenariiPerProof((int) \getenv('BLACKBOX_SET_SIZE')),
    )
    ->when(
        \getenv('ENABLE_COVERAGE') !== false,
        static fn(Application $app) => $app
            ->codeCoverage(
                CodeCoverage::of(
                    __DIR__.'/src/',
                    __DIR__.'/proofs/',
                    __DIR__.'/fixtures/',
                )
                    ->dumpTo('coverage.clover')
                    ->enableWhen(true),
            )
            ->scenariiPerProof(1_000),
    )
    ->tryToProve(static function() {
        yield from Load::everythingIn(__DIR__.'/proofs/')();
        yield from PHPUnit\Load::testsAt(__DIR__.'/tests/');
    })
    ->exit();
