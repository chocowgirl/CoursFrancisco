<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240919140206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activity ADD shoepair_used_id INT NOT NULL');
        $this->addSql('ALTER TABLE activity ADD CONSTRAINT FK_AC74095ADBF67E6F FOREIGN KEY (shoepair_used_id) REFERENCES shoepair (id)');
        $this->addSql('CREATE INDEX IDX_AC74095ADBF67E6F ON activity (shoepair_used_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activity DROP FOREIGN KEY FK_AC74095ADBF67E6F');
        $this->addSql('DROP INDEX IDX_AC74095ADBF67E6F ON activity');
        $this->addSql('ALTER TABLE activity DROP shoepair_used_id');
    }
}
