<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230529224123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD delivery_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993986F4F78C5 FOREIGN KEY (delivery_id_id) REFERENCES delivery (id)');
        $this->addSql('CREATE INDEX IDX_F52993986F4F78C5 ON `order` (delivery_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993986F4F78C5');
        $this->addSql('DROP INDEX IDX_F52993986F4F78C5 ON `order`');
        $this->addSql('ALTER TABLE `order` DROP delivery_id_id');
    }
}
