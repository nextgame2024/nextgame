<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240923084512 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games ADD player_two_id INT NOT NULL, ADD player_three_id INT NOT NULL, ADD player_four_id INT NOT NULL');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31FC6BF02 FOREIGN KEY (player_two_id) REFERENCES user_profile (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B3171764C85 FOREIGN KEY (player_three_id) REFERENCES user_profile (id)');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B318458FFE1 FOREIGN KEY (player_four_id) REFERENCES user_profile (id)');
        $this->addSql('CREATE INDEX IDX_FF232B31FC6BF02 ON games (player_two_id)');
        $this->addSql('CREATE INDEX IDX_FF232B3171764C85 ON games (player_three_id)');
        $this->addSql('CREATE INDEX IDX_FF232B318458FFE1 ON games (player_four_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31FC6BF02');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B3171764C85');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B318458FFE1');
        $this->addSql('DROP INDEX IDX_FF232B31FC6BF02 ON games');
        $this->addSql('DROP INDEX IDX_FF232B3171764C85 ON games');
        $this->addSql('DROP INDEX IDX_FF232B318458FFE1 ON games');
        $this->addSql('ALTER TABLE games DROP player_two_id, DROP player_three_id, DROP player_four_id');
    }
}
