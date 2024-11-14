<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241028112735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE directors (id INT AUTO_INCREMENT NOT NULL, location_id INT NOT NULL, title VARCHAR(15) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, province VARCHAR(255) DEFAULT NULL, postal_code VARCHAR(15) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, sport VARCHAR(255) DEFAULT NULL, club VARCHAR(255) DEFAULT NULL, authorized VARCHAR(15) DEFAULT NULL, director_id VARCHAR(15) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, enrolled DATE DEFAULT NULL, INDEX IDX_A6ADADC464D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE directors ADD CONSTRAINT FK_A6ADADC464D218E FOREIGN KEY (location_id) REFERENCES location (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE directors DROP FOREIGN KEY FK_A6ADADC464D218E');
        $this->addSql('DROP TABLE directors');
    }
}
