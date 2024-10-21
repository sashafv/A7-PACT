<?php

use app\core\Application;

class m0015_create_table_show_offer
{
    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE show_offer (
            offer_id INT NOT NULL PRIMARY KEY,
            
            duration FLOAT NOT NULL,
            capacity INT NOT NULL,
            
            period_id INT,
            
            FOREIGN KEY (offer_id) REFERENCES offer(id),
            FOREIGN KEY (period_id) REFERENCES offer_period(id)
        );";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $sql = "DROP TABLE show_offer CASCADE;";
        Application::$app->db->pdo->exec($sql);
    }
}