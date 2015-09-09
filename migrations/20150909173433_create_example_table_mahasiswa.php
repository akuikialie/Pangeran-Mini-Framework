<?php

use Phinx\Migration\AbstractMigration;

class CreateExampleTableMahasiswa extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $table = $this->table('mahasiswa', array('id' => 'id'));
        $table->addColumn('nama', 'string', array('null' => true));
        $table->addColumn('alamat', 'string', array('null' => true));
        $table->addColumn('email', 'string', array('null' => true));
        $table->addColumn('phone', 'string', array('null' => true));
        $table->addIndex(array('id'));
        $table->save();
    }
}
