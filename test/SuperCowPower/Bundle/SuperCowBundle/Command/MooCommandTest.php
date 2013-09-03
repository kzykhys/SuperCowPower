<?php

namespace SuperCowPowerTests\Bundle\SuperCowBundle\Command;

use SuperCowPower\Bundle\SuperCowBundle\Command\MooCommand;

class MooCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testCommand()
    {
        $command = new MooCommand();

        $this->assertInstanceOf('SuperCowPower\\Component\\Command\\MooCommand', $command);
    }

}