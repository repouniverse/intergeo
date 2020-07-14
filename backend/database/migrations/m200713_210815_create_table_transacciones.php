<?php
namespace backend\database\migrations;
use console\migrations\baseMigration;

/**
 * Class m200713_210815_create_table_transacciones
 */
class m200713_210815_create_table_transacciones extends baseMigration 
{
const NAME_TABLE='{{%transacciones}}';
const NAME_TABLE_RBAC_ITEMS='{{%auth_item}}';
    //const NAME_TABLE_SOCIEDADES='{{%sociedades}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

$table=static::NAME_TABLE;
if(!$this->existsTable($table)){
        $this->createTable($table, [
             'codigo'=>$this->string(7)->notNull()->append($this->collateColumn()),
            'descripcion' => $this->string(6)->notNull()->append($this->collateColumn()),
            'item' => $this->string(64)->notNull()->append($this->collateColumn()), 
             'deterministico' => $this->char(1)->append($this->collateColumn()), 
            'grupo' => $this->char(3)->append($this->collateColumn()), 
            
            ], $this->collateTable());
      $this->addPrimaryKey('pk_transac',$table, 'codigo');
         $this->addForeignKey($this->generateNameFk($table), $table,
              'item', static::NAME_TABLE_RBAC_ITEMS,'name');
  } 
    
    }
	

    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        if ($this->db->schema->getTableSchema(static::NAME_TABLE, true) !== null) {
            $this->dropTable(static::NAME_TABLE);
        }
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190106_063220_create_table_centros cannot be reverted.\n";

        return false;
    }
    */
}
