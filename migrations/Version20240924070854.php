<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240924070854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days_off ADD location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE days_off ADD CONSTRAINT FK_C98E6BCA64D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_C98E6BCA64D218E ON days_off (location_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE days_off DROP FOREIGN KEY FK_C98E6BCA64D218E');
        $this->addSql('DROP INDEX IDX_C98E6BCA64D218E ON days_off');
        $this->addSql('ALTER TABLE days_off DROP location_id');
    }
}
