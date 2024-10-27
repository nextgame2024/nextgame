<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241026105516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31B6E2B1EA');
        $this->addSql('CREATE TABLE `table_type` (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, active VARCHAR(5) NOT NULL, INDEX IDX_C60817E264D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `table_type` ADD CONSTRAINT FK_C60817E264D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F4664D218E');
        $this->addSql('DROP TABLE `table`');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31B6E2B1EA');
        $this->addSql('ALTER TABLE games CHANGE player_one_set_1 player_one_set_1 VARCHAR(10) DEFAULT NULL, CHANGE player_one_set_2 player_one_set_2 VARCHAR(10) DEFAULT NULL, CHANGE player_one_set_3 player_one_set_3 VARCHAR(10) DEFAULT NULL, CHANGE player_one_set_4 player_one_set_4 VARCHAR(10) DEFAULT NULL, CHANGE player_one_set_5 player_one_set_5 VARCHAR(10) DEFAULT NULL, CHANGE player_two_set_1 player_two_set_1 VARCHAR(10) DEFAULT NULL, CHANGE player_two_set_2 player_two_set_2 VARCHAR(10) DEFAULT NULL, CHANGE player_two_set_3 player_two_set_3 VARCHAR(10) DEFAULT NULL, CHANGE player_two_set_4 player_two_set_4 VARCHAR(10) DEFAULT NULL, CHANGE player_two_set_5 player_two_set_5 VARCHAR(10) DEFAULT NULL, CHANGE games_team_one games_team_one VARCHAR(5) DEFAULT NULL, CHANGE games_team_two games_team_two VARCHAR(5) DEFAULT NULL, CHANGE sets_team_one sets_team_one VARCHAR(10) DEFAULT NULL, CHANGE sets_team_two sets_team_two VARCHAR(10) DEFAULT NULL, CHANGE is_paid is_paid VARCHAR(5) DEFAULT NULL, CHANGE current_set current_set VARCHAR(5) DEFAULT NULL, CHANGE display display INT DEFAULT NULL, CHANGE player_one_set_6 player_one_set_6 INT NOT NULL, CHANGE player_one_set_7 player_one_set_7 INT NOT NULL, CHANGE player_two_set_6 player_two_set_6 INT NOT NULL, CHANGE player_two_set_7 player_two_set_7 INT NOT NULL');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31B6E2B1EA FOREIGN KEY (table_number_id) REFERENCES `table_type` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31B6E2B1EA');
        $this->addSql('CREATE TABLE `table` (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, active VARCHAR(5) CHARACTER SET utf8mb4 DEFAULT \'Y\' COLLATE `utf8mb4_unicode_ci`, INDEX IDX_F6298F4664D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F4664D218E FOREIGN KEY (location_id) REFERENCES location (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE `table_type` DROP FOREIGN KEY FK_C60817E264D218E');
        $this->addSql('DROP TABLE `table_type`');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31B6E2B1EA');
        $this->addSql('ALTER TABLE games CHANGE player_one_set_1 player_one_set_1 INT DEFAULT 0, CHANGE player_one_set_2 player_one_set_2 INT DEFAULT 0, CHANGE player_one_set_3 player_one_set_3 INT DEFAULT 0, CHANGE player_one_set_4 player_one_set_4 INT DEFAULT 0, CHANGE player_one_set_5 player_one_set_5 INT DEFAULT 0, CHANGE player_two_set_1 player_two_set_1 INT DEFAULT 0, CHANGE player_two_set_2 player_two_set_2 INT DEFAULT 0, CHANGE player_two_set_3 player_two_set_3 INT DEFAULT 0, CHANGE player_two_set_4 player_two_set_4 INT DEFAULT 0, CHANGE player_two_set_5 player_two_set_5 INT DEFAULT 0, CHANGE games_team_one games_team_one INT DEFAULT 0, CHANGE games_team_two games_team_two INT DEFAULT 0, CHANGE sets_team_one sets_team_one INT DEFAULT 0, CHANGE sets_team_two sets_team_two INT DEFAULT 0, CHANGE is_paid is_paid VARCHAR(5) DEFAULT \'No\', CHANGE current_set current_set INT DEFAULT 1, CHANGE display display INT DEFAULT 0, CHANGE player_one_set_6 player_one_set_6 INT DEFAULT 0, CHANGE player_one_set_7 player_one_set_7 INT DEFAULT 0, CHANGE player_two_set_6 player_two_set_6 INT DEFAULT 0, CHANGE player_two_set_7 player_two_set_7 INT DEFAULT 0');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31B6E2B1EA FOREIGN KEY (table_number_id) REFERENCES `table` (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
