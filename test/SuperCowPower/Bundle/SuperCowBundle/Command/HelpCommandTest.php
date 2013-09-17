<?php

namespace SuperCowPowerTests\Bundle\SuperCowBundle\Command;

use SuperCowPower\Bundle\SuperCowBundle\Command\HelpCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\ApplicationTester;

class HelpCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testHelp()
    {
        $app = new Application();
        $app->setAutoExit(false);
        $app->add(new HelpCommand());

        $tester = new ApplicationTester($app);
        $tester->run(array(
            'command' => 'help'
        ));

        $this->assertContains('This framework does not have Super Cow Powers.', $tester->getDisplay());
    }

}