<?php

namespace SuperCowPower\Component\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * There are no Easter Eggs in this framework
 *
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class MooCommand extends Command
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('moo')
            ->setDescription('There are no Easter Eggs in this program.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($input->hasParameterOption('-vvvv')) {
            $output->writeln('Okay, okay, if I give you an Easter Egg, will you go away?');
        } elseif ($input->hasParameterOption('-vvvvv')) {
            $output->writeln('All right, you win.');
            $output->writeln('');
            $output->writeln('                               /----\\');
            $output->writeln('                       -------/      \\');
            $output->writeln('                      /               \\');
            $output->writeln('                     /                |');
            $output->writeln('   -----------------/                  --------\\');
            $output->writeln('   ----------------------------------------------');
        } elseif ($input->hasParameterOption(array('-vvvvvv', '-vvvvvvv', '-vvvvvvv'))) {
            $output->writeln("What is it?  It's an elephant being eaten by a snake, of course.");
        } else {
            switch ($output->getVerbosity()) {
                case OutputInterface::VERBOSITY_NORMAL:
                    $output->writeln('There are no Easter Eggs in this program.');
                    break;
                case OutputInterface::VERBOSITY_VERBOSE:
                    $output->writeln('There really are no Easter Eggs in this program.');
                    break;
                case OutputInterface::VERBOSITY_VERY_VERBOSE:
                    $output->writeln("Didn't I already tell you that there are no Easter Eggs in this program?");
                    break;
                case OutputInterface::VERBOSITY_DEBUG:
                    $output->writeln('Stop it!');
                    break;
            }
        }

        return 0;
    }

}