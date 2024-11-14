<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241103034938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE location ADD club_id VARCHAR(20) DEFAULT NULL, ADD state VARCHAR(100) DEFAULT NULL, ADD province VARCHAR(100) DEFAULT NULL, ADD country VARCHAR(100) DEFAULT NULL, ADD sport VARCHAR(5) DEFAULT 1, ADD unrated_mean VARCHAR(10) DEFAULT NULL, ADD unrated_st_dev VARCHAR(10) DEFAULT NULL, ADD processed_url VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE location DROP club_id, DROP state, DROP province, DROP country, DROP sport, DROP unrated_mean, DROP unrated_st_dev, DROP processed_url');
    }
}
