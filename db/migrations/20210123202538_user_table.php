<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {

        // create the table
        $table = $this->table('user');
        $table->addColumn('name', 'string', ['limit' => 60]);
        $table->addColumn('username', 'string', ['limit' => 20]);
        $table->addColumn('password', 'string', ['limit' => 20]);
        $table->addColumn('updated_at', 'datetime');
        $table->addColumn('created_at', 'datetime');
        $table->create();


        if ($this->isMigratingUp()) {
            $table->insert([
                ['name' => 'Adm', 'username' => 'adm', 'password' => '@#$RF@!718', 'updated_at' => date('Y-m-d H:m:s'), 'created_at' => date('Y-m-d H:m:s')],
                ['name' => 'Fulano', 'username' => 'fulano', 'password' => '123456', 'updated_at' => date('Y-m-d H:m:s'), 'created_at' => date('Y-m-d H:m:s')]
            ])->save();
        }
    }
}
