<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241102214724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE followers DROP FOREIGN KEY FK_8408FDA7233D34C1');
        $this->addSql('ALTER TABLE followers DROP FOREIGN KEY FK_8408FDA73AD8644E');
        $this->addSql('DROP TABLE followers');
        $this->addSql('ALTER TABLE user_profile ADD rating_central_id VARCHAR(10) DEFAULT 0, ADD deviation VARCHAR(6) DEFAULT 0, ADD primary_club VARCHAR(5) DEFAULT NULL, ADD city VARCHAR(255) DEFAULT NULL, ADD state VARCHAR(255) DEFAULT NULL, ADD province VARCHAR(255) DEFAULT NULL, ADD postal_code VARCHAR(10) DEFAULT NULL, ADD country VARCHAR(255) DEFAULT NULL, ADD deceased VARCHAR(255) DEFAULT NULL, ADD gender VARCHAR(10) DEFAULT NULL, ADD sport VARCHAR(5) DEFAULT 1, ADD usatt_id VARCHAR(10) DEFAULT 0, ADD tta_id VARCHAR(10) DEFAULT 0, ADD ittf VARCHAR(10) DEFAULT \'N\', ADD ittf_id VARCHAR(10) DEFAULT 0, ADD player_new_info VARCHAR(5) DEFAULT \'N\', ADD address_1 VARCHAR(255) DEFAULT NULL, ADD address_2 VARCHAR(255) DEFAULT NULL, ADD mobile VARCHAR(20) DEFAULT NULL, ADD registered VARCHAR(5) DEFAULT \'N\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE followers (user_source INT NOT NULL, user_target INT NOT NULL, INDEX IDX_8408FDA73AD8644E (user_source), INDEX IDX_8408FDA7233D34C1 (user_target), PRIMARY KEY(user_source, user_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE followers ADD CONSTRAINT FK_8408FDA7233D34C1 FOREIGN KEY (user_target) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE followers ADD CONSTRAINT FK_8408FDA73AD8644E FOREIGN KEY (user_source) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_profile DROP rating_central_id, DROP deviation, DROP primary_club, DROP city, DROP state, DROP province, DROP postal_code, DROP country, DROP deceased, DROP gender, DROP sport, DROP usatt_id, DROP tta_id, DROP ittf, DROP ittf_id, DROP player_new_info, DROP address_1, DROP address_2, DROP mobile, DROP registered');
    }
}
