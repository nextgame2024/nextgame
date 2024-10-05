<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241004123659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teams ADD team_names_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C2225830F20126 FOREIGN KEY (team_names_id) REFERENCES teams_names (id)');
        $this->addSql('CREATE INDEX IDX_96C2225830F20126 ON teams (team_names_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C2225830F20126');
        $this->addSql('DROP INDEX IDX_96C2225830F20126 ON teams');
        $this->addSql('ALTER TABLE teams DROP team_names_id');
    }
}