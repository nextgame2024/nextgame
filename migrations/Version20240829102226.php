<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240829102226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE games (id INT AUTO_INCREMENT NOT NULL, tournament_id INT DEFAULT NULL, team_id INT DEFAULT NULL, table_number_id INT DEFAULT NULL, player_one_id INT NOT NULL, game_type VARCHAR(50) DEFAULT NULL, player_one_set_1 VARCHAR(10) DEFAULT \'0\', player_one_set_2 VARCHAR(10) DEFAULT \'0\', player_one_set_3 VARCHAR(10) DEFAULT \'0\', player_one_set_4 VARCHAR(10) DEFAULT \'0\', player_one_set_5 VARCHAR(10) DEFAULT \'0\', player_one_set_6 VARCHAR(10) DEFAULT \'0\', player_two_set_1 VARCHAR(10) DEFAULT \'0\', player_two_set_2 VARCHAR(10) DEFAULT \'0\', player_two_set_3 VARCHAR(10) DEFAULT \'0\', player_two_set_4 VARCHAR(10) DEFAULT \'0\', player_two_set_5 VARCHAR(10) DEFAULT \'0\', player_two_set_6 VARCHAR(10) DEFAULT \'0\', player_three_set_1 VARCHAR(10) DEFAULT \'0\', player_three_set_2 VARCHAR(10) DEFAULT \'0\', player_three_set_3 VARCHAR(10) DEFAULT \'0\', player_three_set_4 VARCHAR(10) DEFAULT \'0\', player_three_set_5 VARCHAR(10) DEFAULT \'0\', player_three_set_6 VARCHAR(10) DEFAULT \'0\', player_four_set_1 VARCHAR(10) DEFAULT \'0\', player_four_set_2 VARCHAR(10) DEFAULT \'0\', player_four_set_3 VARCHAR(10) DEFAULT \'0\', player_four_set_4 VARCHAR(10) DEFAULT \'0\', player_four_set_5 VARCHAR(10) DEFAULT \'0\', player_four_set_6 VARCHAR(10) DEFAULT \'0\', first_player_points VARCHAR(10) DEFAULT \'0\', second_player_points VARCHAR(10) DEFAULT \'0\', games_team_one VARCHAR(5) DEFAULT \'0\', games_team_two VARCHAR(5) DEFAULT \'0\', sets_team_one VARCHAR(10) DEFAULT \'0\', sets_team_two VARCHAR(10) DEFAULT \'0\', game_date DATETIME NOT NULL, status VARCHAR(50) NOT NULL, INDEX IDX_FF232B3133D1A3E7 (tournament_id), INDEX IDX_FF232B31296CD8AE (team_id), INDEX IDX_FF232B31B6E2B1EA (table_number_id), INDEX IDX_FF232B31649A58CD (player_one_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `table` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, active VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teams (id INT AUTO_INCREMENT NOT NULL, torneo_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, number_of_players VARCHAR(10) NOT NULL DEFAULT \'0\', points VARCHAR(10) DEFAULT \'0\', percentage VARCHAR(5) DEFAULT \'0\', INDEX IDX_96C22258A0139802 (torneo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournament (id INT AUTO_INCREMENT NOT NULL, tournament_type_id INT NOT NULL, start_day DATETIME DEFAULT NULL, end_day DATETIME DEFAULT NULL, number_of_tables VARCHAR(10) DEFAULT NULL, status VARCHAR(50) NOT NULL DEFAULT \'0\', INDEX IDX_BD5FB8D9AE437799 (tournament_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournament_registration (id INT AUTO_INCREMENT NOT NULL, torneo_id INT NOT NULL, user_profile_id INT NOT NULL, INDEX IDX_F42ADBF1A0139802 (torneo_id), INDEX IDX_F42ADBF16B9DD454 (user_profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournament_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, active VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B3133D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournament (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31296CD8AE FOREIGN KEY (team_id) REFERENCES teams (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31B6E2B1EA FOREIGN KEY (table_number_id) REFERENCES `table` (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31649A58CD FOREIGN KEY (player_one_id) REFERENCES user_profile (id)');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C22258A0139802 FOREIGN KEY (torneo_id) REFERENCES tournament (id)');
        $this->addSql('ALTER TABLE tournament ADD CONSTRAINT FK_BD5FB8D9AE437799 FOREIGN KEY (tournament_type_id) REFERENCES tournament_type (id)');
        $this->addSql('ALTER TABLE tournament_registration ADD CONSTRAINT FK_F42ADBF1A0139802 FOREIGN KEY (torneo_id) REFERENCES tournament (id)');
        $this->addSql('ALTER TABLE tournament_registration ADD CONSTRAINT FK_F42ADBF16B9DD454 FOREIGN KEY (user_profile_id) REFERENCES user_profile (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B3133D1A3E7');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31296CD8AE');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31B6E2B1EA');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31649A58CD');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C22258A0139802');
        $this->addSql('ALTER TABLE tournament DROP FOREIGN KEY FK_BD5FB8D9AE437799');
        $this->addSql('ALTER TABLE tournament_registration DROP FOREIGN KEY FK_F42ADBF1A0139802');
        $this->addSql('ALTER TABLE tournament_registration DROP FOREIGN KEY FK_F42ADBF16B9DD454');
        $this->addSql('DROP TABLE games');
        $this->addSql('DROP TABLE `table`');
        $this->addSql('DROP TABLE teams');
        $this->addSql('DROP TABLE tournament');
        $this->addSql('DROP TABLE tournament_registration');
        $this->addSql('DROP TABLE tournament_type');
    }
}
