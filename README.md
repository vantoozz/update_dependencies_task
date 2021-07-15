###### 1

Install `vantoozz/hello` package.

###### 2

Update the `SayHelloCommand` to be using that package instead of simple string, e.g.:


```diff
<?php declare(strict_types=1);

namespace Vantoozz\UpdateDependenciesTask;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
+use Vantoozz\Hello\Hello;

/**
 * Class SayHelloCommand
 * @package Vantoozz\UpdateDependenciesTask
 */
final class SayHelloCommand extends Command
{   
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
-        $output->writeln('Hello!');
+        $output->writeln(new Hello('Ivan'));
    }
}
```
###### 3

Run the application

```shell
php app.php say-hello
```
