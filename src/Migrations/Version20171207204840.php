<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171207204840 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE departments (id INT AUTO_INCREMENT NOT NULL, frontName VARCHAR(255) NOT NULL, form LONGTEXT NOT NULL, manager INT NOT NULL, active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_16AEB8D4BB026060 (frontName), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employees (id INT AUTO_INCREMENT NOT NULL, department INT NOT NULL, firstname VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, abbriviation VARCHAR(255) NOT NULL, dateOfBirth DATE NOT NULL, adress VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, postalCode VARCHAR(10) NOT NULL, livingArea VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, mobile VARCHAR(255) NOT NULL, taak INT NOT NULL, additional LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', role VARCHAR(255) NOT NULL, ehbo TINYINT(1) NOT NULL, bhv TINYINT(1) NOT NULL, reanimation TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tasks (id INT AUTO_INCREMENT NOT NULL, naming VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_50586597818CFCD7 (naming), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, employee_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', UNIQUE INDEX UNIQ_1483A5E98C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98C03F15C FOREIGN KEY (employee_id) REFERENCES employees (id)');
        $this->addSql('DROP TABLE afdelingen');
        $this->addSql('DROP TABLE gebruikers');
        $this->addSql('DROP TABLE medewerkers');
        $this->addSql('DROP TABLE taken');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98C03F15C');
        $this->addSql('CREATE TABLE afdelingen (id INT AUTO_INCREMENT NOT NULL, frontName VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, form LONGTEXT NOT NULL COLLATE utf8_unicode_ci, manager INT NOT NULL, active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_B00C6620BB026060 (frontName), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gebruikers (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, role VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, medewerkerId INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medewerkers (id INT AUTO_INCREMENT NOT NULL, afdeling INT NOT NULL, voornaam VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, achternaam VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, tussenvoegsel VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, geboortedatum DATE NOT NULL, adres VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, postcode VARCHAR(10) NOT NULL COLLATE utf8_unicode_ci, woonplaats VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, telefoonPrive VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, telefoonMobiel VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, taak INT NOT NULL, eigenBoot TINYINT(1) NOT NULL, eten VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, dieet TINYINT(1) NOT NULL, dieetWens VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, keuzeDagen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, slaapDagen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, eetDagen VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, kledingmaat VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, kenteken VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, stuurman VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, kamergenoot INT DEFAULT NULL, foto VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, role VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, accomodatie_id INT NOT NULL, kamernummer VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, sectorkeuze VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, sectorOmschrijving VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, rond TINYINT(1) NOT NULL, gekeurd TINYINT(1) NOT NULL, ehbo TINYINT(1) NOT NULL, bhv TINYINT(1) NOT NULL, reanimatie TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taken (id INT AUTO_INCREMENT NOT NULL, benaming VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, omschrijving LONGTEXT NOT NULL COLLATE utf8_unicode_ci, UNIQUE INDEX UNIQ_BFE8D6081E2C4699 (benaming), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE departments');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE tasks');
        $this->addSql('DROP TABLE users');
    }
}
