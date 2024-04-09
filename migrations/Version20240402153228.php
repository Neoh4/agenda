<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240402153228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE users ADD classe_id_id INT NOT NULL, CHANGE status status VARCHAR(1) NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E93633CA6F FOREIGN KEY (classe_id_id) REFERENCES classe (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E93633CA6F ON users (classe_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE classe');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E93633CA6F');
        $this->addSql('DROP INDEX IDX_1483A5E93633CA6F ON users');
        $this->addSql('ALTER TABLE users DROP classe_id_id, CHANGE status status VARCHAR(255) NOT NULL');
    }
}
