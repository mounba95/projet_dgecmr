<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210701131349 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visiteur ADD agents_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE visiteur ADD CONSTRAINT FK_4EA587B8709770DC FOREIGN KEY (agents_id) REFERENCES agent (id)');
        $this->addSql('CREATE INDEX IDX_4EA587B8709770DC ON visiteur (agents_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visiteur DROP FOREIGN KEY FK_4EA587B8709770DC');
        $this->addSql('DROP INDEX IDX_4EA587B8709770DC ON visiteur');
        $this->addSql('ALTER TABLE visiteur DROP agents_id');
    }
}
