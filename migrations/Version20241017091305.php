<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241017091305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games ADD player_one_set_6 INT DEFAULT 0, ADD player_one_set_7 INT DEFAULT 0, ADD player_two_set_6 INT DEFAULT 0, ADD player_two_set_7 INT DEFAULT 0');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games DROP player_one_set_6, DROP player_one_set_7, DROP player_two_set_6, DROP player_two_set_7');
    }
}
