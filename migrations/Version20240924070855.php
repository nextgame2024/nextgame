<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240924070855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // This migration changes varchar fields to int and sets default values to 0
        $this->addSql('ALTER TABLE games 
            CHANGE player_one_set_1 player_one_set_1 INT DEFAULT 0,
            CHANGE player_one_set_2 player_one_set_2 INT DEFAULT 0,
            CHANGE player_one_set_3 player_one_set_3 INT DEFAULT 0,
            CHANGE player_one_set_4 player_one_set_4 INT DEFAULT 0,
            CHANGE player_one_set_5 player_one_set_5 INT DEFAULT 0,
            CHANGE player_two_set_1 player_two_set_1 INT DEFAULT 0,
            CHANGE player_two_set_2 player_two_set_2 INT DEFAULT 0,
            CHANGE player_two_set_3 player_two_set_3 INT DEFAULT 0,
            CHANGE player_two_set_4 player_two_set_4 INT DEFAULT 0,
            CHANGE player_two_set_5 player_two_set_5 INT DEFAULT 0,
            CHANGE games_team_one games_team_one INT DEFAULT 0,
            CHANGE games_team_two games_team_two INT DEFAULT 0,
            CHANGE sets_team_one sets_team_one INT DEFAULT 0,
            CHANGE sets_team_two sets_team_two INT DEFAULT 0
        ');
    }

    public function down(Schema $schema): void
    {
        // This will revert the changes made in the up() method
        $this->addSql('ALTER TABLE games 
            CHANGE player_one_set_1 player_one_set_1 VARCHAR(10) DEFAULT NULL,
            CHANGE player_one_set_2 player_one_set_2 VARCHAR(10) DEFAULT NULL,
            CHANGE player_one_set_3 player_one_set_3 VARCHAR(10) DEFAULT NULL,
            CHANGE player_one_set_4 player_one_set_4 VARCHAR(10) DEFAULT NULL,
            CHANGE player_one_set_5 player_one_set_5 VARCHAR(10) DEFAULT NULL,
            CHANGE player_two_set_1 player_two_set_1 VARCHAR(10) DEFAULT NULL,
            CHANGE player_two_set_2 player_two_set_2 VARCHAR(10) DEFAULT NULL,
            CHANGE player_two_set_3 player_two_set_3 VARCHAR(10) DEFAULT NULL,
            CHANGE player_two_set_4 player_two_set_4 VARCHAR(10) DEFAULT NULL,
            CHANGE player_two_set_5 player_two_set_5 VARCHAR(10) DEFAULT NULL,
            CHANGE games_team_one games_team_one VARCHAR(5) DEFAULT NULL,
            CHANGE games_team_two games_team_two VARCHAR(5) DEFAULT NULL,
            CHANGE sets_team_one sets_team_one VARCHAR(10) DEFAULT NULL,
            CHANGE sets_team_two sets_team_two VARCHAR(10) DEFAULT NULL
        ');
    }
}
