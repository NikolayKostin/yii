<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170517_144440_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'text' => $this->text(1000)->notNull(),
            'picture_path' => $this->string(255),
            'date' => $this->timestamp(),
            'flag' => $this->integer(5),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
