<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240920232032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournament_registration ADD team_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tournament_registration ADD CONSTRAINT FK_F42ADBF1296CD8AE FOREIGN KEY (team_id) REFERENCES teams (id)');
        $this->addSql('CREATE INDEX IDX_F42ADBF1296CD8AE ON tournament_registration (team_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournament_registration DROP FOREIGN KEY FK_F42ADBF1296CD8AE');
        $this->addSql('DROP INDEX IDX_F42ADBF1296CD8AE ON tournament_registration');
        $this->addSql('ALTER TABLE tournament_registration DROP team_id');
    }
}
