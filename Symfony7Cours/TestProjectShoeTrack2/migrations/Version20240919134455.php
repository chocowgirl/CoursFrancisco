<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240919134455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activity ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE activity ADD CONSTRAINT FK_AC74095AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_AC74095AA76ED395 ON activity (user_id)');
        $this->addSql('ALTER TABLE shoepair ADD user_owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE shoepair ADD CONSTRAINT FK_7FCACF5F9EB185F9 FOREIGN KEY (user_owner_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_7FCACF5F9EB185F9 ON shoepair (user_owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activity DROP FOREIGN KEY FK_AC74095AA76ED395');
        $this->addSql('DROP INDEX IDX_AC74095AA76ED395 ON activity');
        $this->addSql('ALTER TABLE activity DROP user_id');
        $this->addSql('ALTER TABLE shoepair DROP FOREIGN KEY FK_7FCACF5F9EB185F9');
        $this->addSql('DROP INDEX IDX_7FCACF5F9EB185F9 ON shoepair');
        $this->addSql('ALTER TABLE shoepair DROP user_owner_id');
    }
}
