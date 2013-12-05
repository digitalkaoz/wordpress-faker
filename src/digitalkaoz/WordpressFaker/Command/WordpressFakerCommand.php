<?php


namespace digitalkaoz\WordpressFaker\Command;

use Nelmio\Alice\Loader\Yaml;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * WordpressFakerCommand
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 */
class WordpressFakerCommand extends Command
{

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->setDefinition(array(
                new InputArgument('faker-file', InputArgument::REQUIRED,'the path to the alice-faker file'),
                new InputArgument('wp-config', InputArgument::REQUIRED,'the path to the wp-config file')
            ))
            ->setDescription('generate random posts')
            ->setHelp(<<<EOT
EOT
            )
            ->setName('fake');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!file_exists($input->getArgument('wp-config'))) {
            throw new \InvalidArgumentException($input->getArgument('wp-config'). 'could not be loaded');
        }

        require($input->getArgument('wp-config'));

        $loader = new Yaml();
        $objects = $loader->load($input->getArgument('faker-file'));

        foreach ($objects as $object) {
            \wp_insert_post(get_object_vars($object));
        }
    }
} 