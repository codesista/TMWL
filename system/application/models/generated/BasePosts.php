<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Posts', 'default');

/**
 * BasePosts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $post_id
 * @property timestamp $post_date
 * @property string $post_content
 * @property integer $post_author
 * @property string $post_status
 * @property string $post_title
 * @property Users $Users
 * @property Doctrine_Collection $PostDonationRel
 * @property Doctrine_Collection $PostMedia
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePosts extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('posts');
        $this->hasColumn('post_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('post_date', 'timestamp', null, array(
             'type' => 'timestamp',
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('post_content', 'string', null, array(
             'type' => 'string',
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('post_author', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('post_status', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('post_title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Users', array(
             'local' => 'post_author',
             'foreign' => 'user_id'));

        $this->hasMany('PostDonationRel', array(
             'local' => 'post_id',
             'foreign' => 'post_id'));

        $this->hasMany('PostMedia', array(
             'local' => 'post_id',
             'foreign' => 'post_id'));
    }
}