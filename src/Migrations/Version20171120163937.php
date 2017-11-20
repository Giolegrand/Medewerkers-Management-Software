<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171120163937 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE gebruikers ADD medewerker_id INT DEFAULT NULL, CHANGE role role LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE gebruikers ADD CONSTRAINT FK_968F1E253D707F64 FOREIGN KEY (medewerker_id) REFERENCES medewerkers (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_968F1E253D707F64 ON gebruikers (medewerker_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE gebruikers DROP FOREIGN KEY FK_968F1E253D707F64');
        $this->addSql('DROP INDEX UNIQ_968F1E253D707F64 ON gebruikers');
        $this->addSql('ALTER TABLE gebruikers CHANGE role role VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
