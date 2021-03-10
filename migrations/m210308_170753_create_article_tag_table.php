<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_tag}}`.
 */
class m210308_170753_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_tag}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article_tag}}');
    }
}
