<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241017091306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Set default value of 1 for division_id in user_profile table';
    }

    public function up(Schema $schema): void
    {
        // Adding a default value of 1 to division_id
        $this->addSql('ALTER TABLE user_profile CHANGE division_id division_id INT DEFAULT 1');
    }

    public function down(Schema $schema): void
    {
        // Reverting the default value change, no default value for division_id
        $this->addSql('ALTER TABLE user_profile CHANGE division_id division_id INT NOT NULL');
    }
}
