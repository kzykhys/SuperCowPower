<?php

namespace SuperCowPower\Bundle\SuperCowBundle\Command;

use Symfony\Component\Console\Command\HelpCommand as BaseHelpCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * There are no Easter Eggs in this framework
 *
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class HelpCommand extends BaseHelpCommand
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        $this->setHelp(
            $this->getHelp() . "\n\n This framework does not have Super Cow Powers."
        );
    }

}