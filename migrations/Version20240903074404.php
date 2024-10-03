<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240903074404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE divisions MODIFY active VARCHAR(5) DEFAULT \'Y\' NULL');
        $this->addSql('ALTER TABLE `location` MODIFY active VARCHAR(5) DEFAULT \'Y\' NULL');
        $this->addSql('ALTER TABLE `table` MODIFY active VARCHAR(5) DEFAULT \'Y\' NULL');
        $this->addSql('ALTER TABLE tournament_type MODIFY active VARCHAR(5) DEFAULT \'Y\' NULL');
        $this->addSql('ALTER TABLE `user` MODIFY active VARCHAR(5) DEFAULT \'Y\' NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE divisions MODIFY active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE `location` MODIFY active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE `table` MODIFY active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE tournament_type MODIFY active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE `user` MODIFY active VARCHAR(5) NOT NULL');
    }
}
