<?php

use yii\db\Schema;
use api\migrations\Migration;

class m150208_085343_channel extends Migration
{
    public function up()
    {
    	$this->createTable('{{%channel}}', [
		'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
		0 => 'PRIMARY KEY (`id`)',
		'name' => 'VARCHAR(128) NOT NULL COMMENT "栏目名" ',
		'sort' => 'INT(11) NOT NULL COMMENT "权重" ',
		'description' => 'TEXT NOT NULL COMMENT "描述" ',
		'parent_id' => 'INT(11) NOT NULL COMMENT "父栏目" ',
		'is_leaf' => 'INT(11) NOT NULL COMMENT "叶子栏目" ',
		'status' => 'INT(11) NOT NULL COMMENT "状态" ',
  	], $this->tableOptions);

    	$this->execute("INSERT INTO `channel` (`id`, `name`, `sort`, `description`, `parent_id`, `is_leaf`, `status`) VALUES
	(1, '新闻', 99, '新闻栏目的根栏目', 0, 0, 1),
	(2, '英超', 12, '英超', 1, 0, 1),
	(3, '意甲', 11, '意甲', 1, 0, 1),
	(4, '西甲', 10, '西甲', 1, 0, 1),
	(5, '德甲', 9, '德甲', 1, 0, 1),
	(6, '法甲', 7, '法甲', 1, 0, 1),
	(7, '国内', 4, '国内', 1, 0, 1),
	(8, '环球', 2, '环球', 1, 0, -1),
	(9, '首页', 100, '首页', 1, 0, 1),
	(10, '阿森纳', 6, '阿森纳', 2, 0, 1),
	(11, '切尔西', 5, '切尔西', 2, 0, 1),
	(12, '曼联', 4, '曼联', 2, 0, 1),
	(13, '曼城', 3, '曼城', 2, 0, 1),
	(14, '利物浦', 2, '利物浦', 2, 0, 1),
	(15, '热刺', 1, '热刺', 2, 0, 1),
	(16, 'AC米兰', 6, 'AC米兰', 3, 0, 1),
	(17, '国际米兰', 5, '国际米兰', 3, 0, 1),
	(18, '尤文图斯', 4, '尤文图斯', 3, 0, 1),
	(19, '罗马', 3, '罗马', 3, 0, 1),
	(20, '那不勒斯', 2, '那不勒斯', 3, 0, 1),
	(21, '佛罗伦萨', 1, '佛罗伦萨', 3, 0, 1),
	(22, '皇家马德里', 3, '皇家马德里', 4, 0, 1),
	(23, '巴塞罗那', 2, '巴塞罗那', 4, 0, 1),
	(24, '马德里竞技', 1, '马德里竞技', 4, 0, 1),
	(25, '拜仁慕尼黑', 1, '拜仁慕尼黑', 5, 0, 1),
	(26, '多特蒙德', 2, '多特蒙德', 5, 0, 1),
	(27, '勒沃库森', 3, '勒沃库森', 5, 0, 1),
	(28, '巴黎圣日耳曼', 1, '巴黎圣日耳曼', 6, 0, 1),
	(29, '摩纳哥', 2, '摩纳哥', 6, 0, 1),
	(30, '国足', 6, '国足', 7, 0, 1),
	(31, '广州恒大', 5, '广州恒大', 7, 0, 1),
	(32, '北京国安', 4, '北京国安', 7, 0, 1),
	(33, '上海申花', 3, '上海申花', 7, 0, 1),
	(34, '山东鲁能', 2, '山东鲁能', 7, 0, 1)");
    }
    
    public function down()
    {
        	$this->dropTable('{{%channel}}');
    }
}