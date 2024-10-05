<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241004121414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teams ADD team_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C22258296CD8AE FOREIGN KEY (team_id) REFERENCES teams_names (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_96C22258296CD8AE ON teams (team_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C22258296CD8AE');
        $this->addSql('DROP INDEX UNIQ_96C22258296CD8AE ON teams');
        $this->addSql('ALTER TABLE teams DROP team_id');
    }
}
