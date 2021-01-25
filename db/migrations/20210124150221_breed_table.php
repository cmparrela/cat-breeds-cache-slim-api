<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class BreedTable extends AbstractMigration
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
        $table = $this->table('breed', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'string', ['limit' => 20]);
        $table->addColumn('name', 'string', ['limit' => 80, 'null' => true]);
        $table->addColumn('temperament', 'string', ['limit' => 100, 'null' => true]);
        $table->addColumn('life_span', 'string', ['limit' => 20, 'null' => true]);
        $table->addColumn('alt_names', 'string', ['limit' => 150, 'null' => true]);
        $table->addColumn('wikipedia_url', 'string', ['limit' => 80, 'null' => true]);
        $table->addColumn('origin', 'string', ['limit' => 80, 'null' => true]);
        $table->addColumn('weight_imperial', 'string', ['limit' => 20, 'null' => true]);
        $table->addColumn('experimental', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('hairless', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('natural', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('rare', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('rex', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('suppressed_tail', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('short_legs', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('hypoallergenic', 'integer', ['limit' => 1, 'null' => true]);
        $table->addColumn('adaptability', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('affection_level', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('country_code', 'string', ['limit' => 10, 'null' => true]);
        $table->addColumn('child_friendly', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('dog_friendly', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('energy_level', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('grooming', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('health_issues', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('intelligence', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('shedding_level', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('social_needs', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('stranger_friendly', 'integer', ['limit' => 5, 'null' => true]);
        $table->addColumn('vocalisation', 'integer', ['limit' => 5, 'null' => true]);
        $table->create();
    }
}
