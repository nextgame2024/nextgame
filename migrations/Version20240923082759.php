<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240923082759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP player_one_set_6, DROP player_two_set_6, DROP player_three_set_1, DROP player_three_set_2, DROP player_three_set_3, DROP player_three_set_4, DROP player_three_set_5, DROP player_three_set_6, DROP player_four_set_1, DROP player_four_set_2, DROP player_four_set_3, DROP player_four_set_4, DROP player_four_set_5, DROP player_four_set_6, DROP first_player_points, DROP second_player_points');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games ADD player_one_set_6 VARCHAR(10) DEFAULT NULL, ADD player_two_set_6 VARCHAR(10) DEFAULT NULL, ADD player_three_set_1 VARCHAR(10) DEFAULT NULL, ADD player_three_set_2 VARCHAR(10) DEFAULT NULL, ADD player_three_set_3 VARCHAR(10) DEFAULT NULL, ADD player_three_set_4 VARCHAR(10) DEFAULT NULL, ADD player_three_set_5 VARCHAR(10) DEFAULT NULL, ADD player_three_set_6 VARCHAR(10) DEFAULT NULL, ADD player_four_set_1 VARCHAR(10) DEFAULT NULL, ADD player_four_set_2 VARCHAR(10) DEFAULT NULL, ADD player_four_set_3 VARCHAR(10) DEFAULT NULL, ADD player_four_set_4 VARCHAR(10) DEFAULT NULL, ADD player_four_set_5 VARCHAR(10) DEFAULT NULL, ADD player_four_set_6 VARCHAR(10) DEFAULT NULL, ADD first_player_points VARCHAR(10) DEFAULT NULL, ADD second_player_points VARCHAR(10) DEFAULT NULL');
    }
}
