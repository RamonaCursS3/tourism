<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FindTourCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('find:tour')
            ->setDescription('Find a tour by specifying the country')
            ->addArgument(
                'country_name',
                InputArgument::OPTIONAL,
                'What country do you want to visit?'
            )
           
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $country_name = $input->getArgument('country_name');
              
        $tours_found = '';
        
        $tours_found = $this->getContainer()->get('find_tour')->findTourIn($country_name); 
        
        if ($tours_found){
           
            echo $tours_found; 
        }  

    }
}