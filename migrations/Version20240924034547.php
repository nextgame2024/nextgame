<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240924034547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games ADD division_id INT DEFAULT NULL, ADD location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B3141859289 FOREIGN KEY (division_id) REFERENCES divisions (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B3164D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_FF232B3141859289 ON games (division_id)');
        $this->addSql('CREATE INDEX IDX_FF232B3164D218E ON games (location_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B3141859289');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B3164D218E');
        $this->addSql('DROP INDEX IDX_FF232B3141859289 ON games');
        $this->addSql('DROP INDEX IDX_FF232B3164D218E ON games');
        $this->addSql('ALTER TABLE games DROP division_id, DROP location_id');
    }
}
