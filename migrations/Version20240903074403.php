<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240903074403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divisions ADD location_id INT DEFAULT NULL, CHANGE active active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE divisions ADD CONSTRAINT FK_1C40C3164D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_1C40C3164D218E ON divisions (location_id)');
        $this->addSql('ALTER TABLE `table` ADD location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F4664D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_F6298F4664D218E ON `table` (location_id)');
        $this->addSql('ALTER TABLE tournament_type CHANGE active active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divisions DROP FOREIGN KEY FK_1C40C3164D218E');
        $this->addSql('DROP INDEX IDX_1C40C3164D218E ON divisions');
        $this->addSql('ALTER TABLE divisions DROP location_id, CHANGE active active VARCHAR(5) DEFAULT \'Y\' NOT NULL');
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F4664D218E');
        $this->addSql('DROP INDEX IDX_F6298F4664D218E ON `table`');
        $this->addSql('ALTER TABLE `table` DROP location_id');
        $this->addSql('ALTER TABLE tournament_type CHANGE active active VARCHAR(5) DEFAULT \'Y\' NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\' NOT NULL');
    }
}
