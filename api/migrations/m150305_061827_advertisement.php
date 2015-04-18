<?php

use yii\db\Schema;
use weison\cms\migrations\Migration;

class m150305_061827_advertisement extends Migration
{
    public function up()
    {
    	$this->createTable('{{%advertisement}}', [
		'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
		0 => 'PRIMARY KEY (`id`)',
		'pic' => 'VARCHAR(128) NOT NULL COMMENT "图片" ',
		'title' => 'VARCHAR(128) NOT NULL COMMENT "标题" ',
		'url' => 'VARCHAR(128) NOT NULL COMMENT "链接地址" ',
		'channel_id' => 'INT(11) NOT NULL COMMENT "所属频道" ',
		'sort' => 'INT(11) NOT NULL COMMENT "权重" ',
		'type' => 'INT(11) NOT NULL COMMENT "类型" ',
		'status' => 'INT(11) NOT NULL COMMENT "状态" ',
  	], $this->tableOptions);
    }

    public function down()
    {
        	$this->dropTable('{{%advertisement}}');
    }
}
