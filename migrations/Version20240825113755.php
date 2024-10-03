<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240825113755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, manager VARCHAR(255) DEFAULT NULL, active VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\' NOT NULL');
        $this->addSql('ALTER TABLE user_profile ADD location_id INT NOT NULL DEFAULT 1');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB40564D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_D95AB40564D218E ON user_profile (location_id)');
        $this->addSql('ALTER TABLE user_profile RENAME INDEX uniq_d95ab40556007a49 TO UNIQ_D95AB40541859289');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_profile DROP FOREIGN KEY FK_D95AB40564D218E');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP INDEX IDX_D95AB40564D218E ON user_profile');
        $this->addSql('ALTER TABLE user_profile DROP location_id');
        $this->addSql('ALTER TABLE user_profile RENAME INDEX uniq_d95ab40541859289 TO UNIQ_D95AB40556007A49');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\' NOT NULL');
    }
}
