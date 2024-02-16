<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216224500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add data to the category table';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('INSERT INTO category VALUES (1, \'doctrine\'), (2, \'security\'), (3, \'events\')');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM categy WHERE id IN (1, 2, 3)');
    }
}
