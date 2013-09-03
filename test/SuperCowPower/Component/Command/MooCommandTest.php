<?php

namespace SuperCowPowerTests\Component\Command;

use SuperCowPower\Bundle\SuperCowBundle\Command\MooCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Tester\CommandTester;

class MooCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testMoo()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo'));

        $this->assertRegExp('/^There are no Easter Eggs in this program\\./', $tester->getDisplay());
    }

    public function testMooV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo'), array('verbosity' => OutputInterface::VERBOSITY_VERBOSE));

        $this->assertRegExp('/^There really are no Easter Eggs in this program\\./', $tester->getDisplay());
    }

    public function testMooVV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo'), array('verbosity' => OutputInterface::VERBOSITY_VERY_VERBOSE));

        $this->assertRegExp("/^Didn't I already tell you that there are no Easter Eggs in this program\\?/", $tester->getDisplay());
    }

    public function testMooVVV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo'), array('verbosity' => OutputInterface::VERBOSITY_DEBUG));

        $this->assertRegExp("/^Stop it!/", $tester->getDisplay());
    }

    public function testMooVVVV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo', '-vvvv'));

        $this->assertRegExp("/^Okay, okay, if I give you an Easter Egg, will you go away\\?/", $tester->getDisplay());
    }

    public function testMooVVVVV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo', '-vvvvv'));

        $this->assertRegExp("/^All right, you win\\./", $tester->getDisplay());
    }

    public function testMooVVVVVV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo', '-vvvvvv'));

        $this->assertRegExp("/^What is it\\?  It's an elephant being eaten by a snake, of course\\./", $tester->getDisplay());
    }

    public function testMooVVVVVVV()
    {
        $tester = $this->getCommandTester();
        $tester->execute(array('command' => 'moo', '-vvvvvvv'));

        $this->assertRegExp("/^What is it\\?  It's an elephant being eaten by a snake, of course\\./", $tester->getDisplay());
    }

    /**
     * @return CommandTester
     */
    protected function getCommandTester()
    {
        $app = new Application();
        $app->add(new MooCommand());
        $command = $app->find('moo');

        return new CommandTester($command);
    }

}