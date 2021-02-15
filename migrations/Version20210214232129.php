<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210214232129 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE  user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, fist_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, birthday DATE NOT NULL, country VARCHAR(50) NOT NULL, town VARCHAR(100) NOT NULL, street INT NOT NULL, num_street INT NOT NULL, zip_code INT NOT NULL, phone_num VARCHAR(10) NOT NULL, user_name VARCHAR(100) NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_AB34D14CE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `admin` (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, journalist_id_id INT DEFAULT NULL, genre_id_id INT DEFAULT NULL, publication_date DATE NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, picture VARCHAR(255) NOT NULL, emergency TINYINT(1) NOT NULL, INDEX IDX_23A0E6696FF7AAB (journalist_id_id), INDEX IDX_23A0E66C2428192 (genre_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, articl_id_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, text LONGTEXT NOT NULL, INDEX IDX_9474526C37C24D86 (articl_id_id), INDEX IDX_9474526C9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, contry VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenent (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, location VARCHAR(255) NOT NULL, date DATE NOT NULL, space_available VARCHAR(255) NOT NULL, INDEX IDX_F1B8D02AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenent_user (evenent_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_BB79573A1719F856 (evenent_id), INDEX IDX_BB79573AA76ED395 (user_id), PRIMARY KEY(evenent_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE journalist (id INT NOT NULL, independant TINYINT(1) NOT NULL, redacteur_chef TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(50) NOT NULL, fist_name VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, date DATE NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_B6BD307FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `admin` ADD CONSTRAINT FK_880E0D76BF396750 FOREIGN KEY (id) REFERENCES  user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6696FF7AAB FOREIGN KEY (journalist_id_id) REFERENCES journalist (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C2428192 FOREIGN KEY (genre_id_id) REFERENCES genre (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C37C24D86 FOREIGN KEY (articl_id_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C9D86650F FOREIGN KEY (user_id_id) REFERENCES  user (id)');
        $this->addSql('ALTER TABLE evenent ADD CONSTRAINT FK_F1B8D02AA76ED395 FOREIGN KEY (user_id) REFERENCES  user (id)');
        $this->addSql('ALTER TABLE evenent_user ADD CONSTRAINT FK_BB79573A1719F856 FOREIGN KEY (evenent_id) REFERENCES evenent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenent_user ADD CONSTRAINT FK_BB79573AA76ED395 FOREIGN KEY (user_id) REFERENCES  user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE journalist ADD CONSTRAINT FK_CAF2FB9FBF396750 FOREIGN KEY (id) REFERENCES  user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FA76ED395 FOREIGN KEY (user_id) REFERENCES  user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `admin` DROP FOREIGN KEY FK_880E0D76BF396750');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C9D86650F');
        $this->addSql('ALTER TABLE evenent DROP FOREIGN KEY FK_F1B8D02AA76ED395');
        $this->addSql('ALTER TABLE evenent_user DROP FOREIGN KEY FK_BB79573AA76ED395');
        $this->addSql('ALTER TABLE journalist DROP FOREIGN KEY FK_CAF2FB9FBF396750');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FA76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C37C24D86');
        $this->addSql('ALTER TABLE evenent_user DROP FOREIGN KEY FK_BB79573A1719F856');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C2428192');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6696FF7AAB');
        $this->addSql('DROP TABLE  user');
        $this->addSql('DROP TABLE `admin`');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE evenent');
        $this->addSql('DROP TABLE evenent_user');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE journalist');
        $this->addSql('DROP TABLE message');
    }
}
