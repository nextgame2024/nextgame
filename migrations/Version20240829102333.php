<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240901000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Update default value of the active column in divisions, tournament_type, and user tables.';
    }

    public function up(Schema $schema): void
    {
        // Set default value for 'active' in the 'divisions' table
        $this->addSql('ALTER TABLE divisions CHANGE active active VARCHAR(5) NOT NULL DEFAULT \'Y\'');

        // Set default value for 'active' in the 'tournament_type' table
        $this->addSql('ALTER TABLE tournament_type CHANGE active active VARCHAR(5) NOT NULL DEFAULT \'Y\'');

        // Set default value for 'active' in the 'user' table
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) NOT NULL DEFAULT \'Y\'');
    }

    public function down(Schema $schema): void
    {
        // Revert the default value to NULL for 'active' in the 'divisions' table
        $this->addSql('ALTER TABLE divisions CHANGE active active VARCHAR(5) DEFAULT NULL');

        // Revert the default value to NULL for 'active' in the 'tournament_type' table
        $this->addSql('ALTER TABLE tournament_type CHANGE active active VARCHAR(5) DEFAULT NULL');

        // Revert the default value to NULL for 'active' in the 'user' table
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT NULL');
    }
}
