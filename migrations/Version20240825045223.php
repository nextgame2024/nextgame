<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240825045223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Remove bio, website_url, twitter_username, company, and location fields from user_profile table';
    }

    public function up(Schema $schema): void
    {
        // Removing columns from the user_profile table
        $this->addSql('ALTER TABLE user_profile DROP COLUMN bio');
        $this->addSql('ALTER TABLE user_profile DROP COLUMN website_url');
        $this->addSql('ALTER TABLE user_profile DROP COLUMN twitter_username');
        $this->addSql('ALTER TABLE user_profile DROP COLUMN company');
        $this->addSql('ALTER TABLE user_profile DROP COLUMN location');
    }

    public function down(Schema $schema): void
    {
        // Re-adding columns to the user_profile table in case of rollback
        $this->addSql('ALTER TABLE user_profile ADD bio VARCHAR(1024) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ADD website_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ADD twitter_username VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ADD company VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ADD location VARCHAR(255) DEFAULT NULL');
    }
}
