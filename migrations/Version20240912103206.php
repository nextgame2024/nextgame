<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240912103206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divisions CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE location CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE `table` CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE tournament_registration ADD location_id INT NOT NULL');
        $this->addSql('ALTER TABLE tournament_registration ADD CONSTRAINT FK_F42ADBF164D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_F42ADBF164D218E ON tournament_registration (location_id)');
        $this->addSql('ALTER TABLE tournament_type ADD location_id INT NOT NULL, CHANGE active active VARCHAR(5) NOT NULL');
        $this->addSql('ALTER TABLE tournament_type ADD CONSTRAINT FK_BB53E51764D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_BB53E51764D218E ON tournament_type (location_id)');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divisions CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE location CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE `table` CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE tournament_registration DROP FOREIGN KEY FK_F42ADBF164D218E');
        $this->addSql('DROP INDEX IDX_F42ADBF164D218E ON tournament_registration');
        $this->addSql('ALTER TABLE tournament_registration DROP location_id');
        $this->addSql('ALTER TABLE tournament_type DROP FOREIGN KEY FK_BB53E51764D218E');
        $this->addSql('DROP INDEX IDX_BB53E51764D218E ON tournament_type');
        $this->addSql('ALTER TABLE tournament_type DROP location_id, CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
    }
}
