<?php
/**
 * Created by PhpStorm.
 * User: mojtaba
 * Date: 03/07/2024
 * Time: 11:09 PM
 */

class Cards
{
    const  TABLE_NAME = "cards";
    private $db_var;
    public function __construct()
    {
        $ds = DIRECTORY_SEPARATOR;
        $base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;
        require_once("{$base_dir}core{$ds}db_class.php");
        $this->db_var = new db_class();
    }

    public function select($query = "select * from " . self::TABLE_NAME)
    {
        return $this->db_var->query($query);
    }
}