<?php

/*
 * This file is part of the weison project.
 *
 * (c) niuniu-module-projects <http://github.com/weison-tech/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace api\migrations;

/**
 * @author hbma <xiaomalover@gmail.com>
 */
class Migration extends \yii\db\Migration
{
    /**
     * @var string
     */
    protected $tableOptions;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        switch (\Yii::$app->db->driverName) {
            case 'mysql':
                $this->tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=MyISAM';
                break;
            case 'pgsql':
                $this->tableOptions = null;
                break;
            default:
                throw new \RuntimeException('Your database is not supported!');
        }
    }
}