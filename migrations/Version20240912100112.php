<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240912100112 extends AbstractMigration
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
        $this->addSql('ALTER TABLE tournament ADD location_id INT NOT NULL, ADD hour TIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tournament ADD CONSTRAINT FK_BD5FB8D964D218E FOREIGN KEY (location_id) REFERENCES location (id)');
        $this->addSql('CREATE INDEX IDX_BD5FB8D964D218E ON tournament (location_id)');
        $this->addSql('ALTER TABLE tournament_type CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divisions CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE location CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE `table` CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE tournament DROP FOREIGN KEY FK_BD5FB8D964D218E');
        $this->addSql('DROP INDEX IDX_BD5FB8D964D218E ON tournament');
        $this->addSql('ALTER TABLE tournament DROP location_id, DROP hour');
        $this->addSql('ALTER TABLE tournament_type CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
        $this->addSql('ALTER TABLE user CHANGE active active VARCHAR(5) DEFAULT \'Y\'');
    }
}
