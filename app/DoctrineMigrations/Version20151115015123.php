<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151115015123 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql("INSERT INTO prices (price_type_id, goods_id, price) VALUES (1,1,10), (1,2,20), (1,3,30), (2,1,40), (2,2,50)");
        $this->addSql("INSERT INTO goods (title, description) VALUES ('goods 1','Description of goods 1'), ('goods 2','Description of goods 2'), ('goods 3','Description of goods 3')");
        $this->addSql("INSERT INTO photos (goods_id, basename) VALUES (1,'images/goods_1.jpeg'), (2,'images/goods_2.jpeg'), (3,'images/goods_3.jpeg')");

        return true;

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
