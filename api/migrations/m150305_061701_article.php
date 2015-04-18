<?php

use yii\db\Schema;
use weison\cms\migrations\Migration;

class m150305_061701_article extends Migration
{
    public function up()
    {
    	$this->createTable('{{%article}}', [
		'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
		0 => 'PRIMARY KEY (`id`)',
		'title' => 'VARCHAR(128) NOT NULL COMMENT "标题" ',
		'thumb' => 'VARCHAR(128) NOT NULL COMMENT "缩略图" ',
		'source_url' => 'VARCHAR(128) NOT NULL COMMENT "源网址" ',
		'sub_title' => 'VARCHAR(128) NOT NULL COMMENT "副标题" ',
		'from' => 'VARCHAR(128) NOT NULL COMMENT "来源" ',
		'short_title' => 'VARCHAR(64) NOT NULL COMMENT "3G短标题" ',
		'editor' => 'VARCHAR(32) NOT NULL COMMENT "编辑" ',
		'keyword' => 'VARCHAR(128) NOT NULL COMMENT "关键字" ',
		'channel_id' => 'INT(11) NOT NULL COMMENT "频道ID" ',
		'sort' => 'INT(11) NOT NULL COMMENT "权重" ',
		'content' => 'TEXT NOT NULL COMMENT "内容" ',
		'summary' => 'TEXT NOT NULL COMMENT "概要" ',
		'status' => 'INT(11) NOT NULL COMMENT "状态" ',
		'view_times' => 'INT(11) NOT NULL COMMENT "浏览次数" ',
		'create_at' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT "创建时间" ',
		'update_at' => 'DATETIME NOT NULL COMMENT "修改时间" ',
  	], $this->tableOptions);
    }

    public function down()
    {
        	$this->dropTable('{{%article}}');
    }
}
