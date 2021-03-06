<?php

namespace Amp\Parallel\Test\Worker;

use Amp\Parallel\Worker\Environment;
use Amp\Parallel\Worker\Task;

class NonAutoloadableResultTask implements Task
{
    public function run(Environment $environment)
    {
        require __DIR__ . "/non-autoloadable-class.php";
        return new NonAutoloadableClass;
    }
}
