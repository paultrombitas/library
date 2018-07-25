<?php
namespace App\Command;

use App\Entity\Book;
use App\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class LibraryCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('library:list')
            ->setDescription('List books or authors');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln('Books');

        $bookRepository = $this->getContainer()->get('doctrine')->getRepository(Book::class);
        $books = $bookRepository->findAll();
        foreach ($books as $book) {
            $output->writeln($book->getTitle());
        }

        $output->writeln(PHP_EOL);


        $output->writeln('Authors');

        $authorRepository = $this->getContainer()->get('doctrine')->getRepository(Author::class);
        $authors = $authorRepository->findAll();
        foreach ($authors as $author) {
            $output->writeln($author->getLastName());
        }
    }
}