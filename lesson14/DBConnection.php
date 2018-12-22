<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 22.12.2018
 * Time: 11:39
 */

class DBConnection
{

    public function execute($sql_string, array $params) {
        $statement = $connection->prepare($sql_string);
        return $statement->execute($params);
    }

}
// методы в моделях
//$db = new DBConnection();
//$sql = 'SELECT * FROM Tbl WHEWRE id:id';
//$params = ['id'=>3];
//if (!$db->execute($sql, $params)){
//    return "Not ok";
//}
//return "Ok";

