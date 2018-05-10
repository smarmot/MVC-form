<?php

class Model
{
    protected $db;
    //private $dataResult;
    //protected $table;

    public function __construct($select = false)
    {
        global $dbObject;
        $this->db = $dbObject;
    }

    public function get_data($table)
    {
        $sql = "select * from `$table`";

        $result = $this->exec_query($sql);

        return $result;
    }

    /**
     * @param $table
     * @param $limit
     * @param $offset
     * @return array
     */
    public function get_by_limit($table, $limit, $offset)
    {
        try {
            $db = $this->db;

            $sql = "SELECT * FROM `$table` ORDER BY id DESC LIMIT :limit OFFSET :offset";

            $result = $db->prepare($sql);
            //$result->bindParam(':table', $table, PDO::PARAM_STR);
            $result->bindParam(':limit', $limit, PDO::PARAM_INT);
            $result->bindParam(':offset', $offset, PDO::PARAM_INT);
            $result->execute();

            $rows = $result->fetchAll();

            return $rows;

        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function exec_query($sql)
    {
        try {
            $db = $this->db;
            $stmt = $db->query($sql);
            $rows = $stmt->fetchAll();
            //$this->dataResult = $rows;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }

        return $rows;
    }

}