<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171128142133 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX uniq_b00c6620bb026060 ON departments');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_16AEB8D4BB026060 ON departments (frontName)');
        $this->addSql('ALTER TABLE employees ADD department INT NOT NULL, ADD firstname VARCHAR(255) NOT NULL, ADD surname VARCHAR(255) NOT NULL, ADD abbriviation VARCHAR(255) NOT NULL, ADD adress VARCHAR(255) NOT NULL, ADD livingArea VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL, ADD mobile VARCHAR(255) NOT NULL, ADD additional LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD reanimation TINYINT(1) NOT NULL, DROP afdeling, DROP voornaam, DROP achternaam, DROP tussenvoegsel, DROP adres, DROP woonplaats, DROP telefoonPrive, DROP telefoonMobiel, DROP eigenBoot, DROP eten, DROP dieet, DROP dieetWens, DROP keuzeDagen, DROP slaapDagen, DROP eetDagen, DROP kledingmaat, DROP kenteken, DROP stuurman, DROP kamergenoot, DROP foto, DROP accomodatie_id, DROP kamernummer, DROP sectorkeuze, DROP sectorOmschrijving, DROP rond, DROP gekeurd, DROP reanimatie, CHANGE geboortedatum dateOfBirth DATE NOT NULL, CHANGE postcode postalCode VARCHAR(10) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_BFE8D6081E2C4699 ON tasks');
        $this->addSql('ALTER TABLE tasks CHANGE benaming naming VARCHAR(255) NOT NULL, CHANGE omschrijving description LONGTEXT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_50586597818CFCD7 ON tasks (naming)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_968F1E253D707F64');
        $this->addSql('DROP INDEX FK_968F1E253D707F64 ON users');
        $this->addSql('ALTER TABLE users ADD employee_id INT DEFAULT NULL, DROP medewerker_id');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98C03F15C FOREIGN KEY (employee_id) REFERENCES employees (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E98C03F15C ON users (employee_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX uniq_16aeb8d4bb026060 ON departments');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B00C6620BB026060 ON departments (frontName)');
        $this->addSql('ALTER TABLE employees ADD voornaam VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD achternaam VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD tussenvoegsel VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD adres VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD woonplaats VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD telefoonPrive VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD telefoonMobiel VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD eten VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD dieet TINYINT(1) NOT NULL, ADD dieetWens VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD keuzeDagen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD slaapDagen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD eetDagen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD kledingmaat VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD kenteken VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD stuurman VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD kamergenoot INT DEFAULT NULL, ADD foto VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD accomodatie_id INT NOT NULL, ADD kamernummer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD sectorkeuze VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD sectorOmschrijving VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD rond TINYINT(1) NOT NULL, ADD gekeurd TINYINT(1) NOT NULL, ADD reanimatie TINYINT(1) NOT NULL, DROP firstname, DROP surname, DROP abbriviation, DROP adress, DROP livingArea, DROP telephone, DROP mobile, DROP additional, CHANGE department afdeling INT NOT NULL, CHANGE dateofbirth geboortedatum DATE NOT NULL, CHANGE postalcode postcode VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci, CHANGE reanimation eigenBoot TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_50586597818CFCD7 ON tasks');
        $this->addSql('ALTER TABLE tasks CHANGE naming benaming VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE description omschrijving LONGTEXT NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BFE8D6081E2C4699 ON tasks (benaming)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98C03F15C');
        $this->addSql('DROP INDEX UNIQ_1483A5E98C03F15C ON users');
        $this->addSql('ALTER TABLE users ADD medewerker_id INT NOT NULL, DROP employee_id');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_968F1E253D707F64 FOREIGN KEY (medewerker_id) REFERENCES employees (id)');
        $this->addSql('CREATE INDEX FK_968F1E253D707F64 ON users (medewerker_id)');
    }
}
