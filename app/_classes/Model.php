<?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 27/11/2018
 * Time: 16:14
 */

class Model
{

    public static $quiz_table = QUIZ_LIST;
    public static $question_table = QUIZ_QUESTION;
    public static $reponse_table = QUIZ_REPONSE;

    public static $composition_table = QUIZ_COMPOSITION;

    public static $user_table = QUIZ_USER_NAN;

    public static $category_table = QUIZ_CATEGOTY;


    /**
     * Fonction findCondition
     * @param $select
     * @param $tables
     * @param $where
     * @param $condition
     * @return mixed
     */
    public static function find($select, $tables){
        global $db;
        $sql = 'SELECT '.$select.' FROM '.$tables;
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute([]);
        return $reqquiz->fetchAll();
    }
    /**
     * Fonction findCondition
     * @param $select
     * @param $tables
     * @param $where
     * @param $condition
     * @return mixed
     */
    public static function findCond($select, $tables, $where, $condition , $all = false){
        global $db;
        $id = str_secur($condition);
        $sql = 'SELECT '.$select.' FROM '.$tables.' WHERE '.$where.' ';
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute([$id]);
        if (isset($all)){
            if ($all){
                return $reqquiz->fetchAll();
            }else{
                return $reqquiz->fetch();
            }
        }else{
            return $reqquiz->fetch();
        }

    }


    public static function findCondarray($select, $tables, $where, $condition = array(), $all = false){
        global $db;

        $sql = 'SELECT '.$select.' FROM '.$tables.' WHERE '.$where.' ';
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute($condition);
        if (isset($all)){
            if ($all){
                return $reqquiz->fetchAll();
            }else{
                return $reqquiz->fetch();
            }
        }else{
            return $reqquiz->fetch();
        }

    }


    public static function findCountCond($select, $tables, $where, $condition){
        global $db;
        $id = str_secur($condition);
        $sql = 'SELECT '.$select.' FROM '.$tables.' WHERE '.$where.' ';
        $reqquiz = $db->prepare($sql);
        $reqquiz->execute([$id]);
        return $reqquiz->rowCount();
    }


    public static function saveData($table, $value, $dataq, $data = array()){
        global $db;

        $statement = $db->prepare('INSERT INTO '.$table.' ('.$value.')
            VALUES ('.$dataq.');');
        $statement->execute($data);
    }



    public static function updateData($table, $set, $where, $data = array()){
        global $db;
        $statementnuser = $db->prepare('UPDATE '.$table.' SET '.$set.' WHERE '.$where.';');
        $statementnuser->execute($data);
    }
}

//86617205