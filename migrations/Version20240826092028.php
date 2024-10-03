<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240826092028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_profile ADD division_id INT DEFAULT NULL, CHANGE location_id location_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB40541859289 FOREIGN KEY (division_id) REFERENCES divisions (id)');
        $this->addSql('CREATE INDEX IDX_D95AB40541859289 ON user_profile (division_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_profile DROP FOREIGN KEY FK_D95AB40541859289');
        $this->addSql('DROP INDEX IDX_D95AB40541859289 ON user_profile');
        $this->addSql('ALTER TABLE user_profile DROP division_id, CHANGE location_id location_id INT DEFAULT 1 NOT NULL');
    }
}
