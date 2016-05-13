<?php

namespace Model;
use Db\baza;

class StudentsDb
{
    public $name = 'name';
    public $data_all;
    public $gpa_all;
    public $serch;

    public function __construct()
    {
        $dd = new baza();

        $data_all = "SELECT * FROM $this->name n JOIN h1 h1 ON n.id_name = h1.id_h1_name JOIN h2 h2 ON h1.id_h1 = h2.id_h2_h1 JOIN h3 h3 ON h3.id_h3_h2 = h2.id_h2 JOIN h4 h4 ON h4.id_h4_h3 = h3.id_h3 JOIN h5 h5 ON h5.id_h5_h4 = h4.id_h4 JOIN GPA g ON g.id = h5.id_h5";
        $this->data_all = mysqli_query($dd->getMysqli(), $data_all);

    }

    public function addDB2()
    {
        $dd = new baza();

        if(!isset($_GET['id'])) {
            $i = "SELECT * FROM $this->name WHERE id_name='{$_POST['id']}'";
            $i1 = mysqli_query($dd->getMysqli(), $i);
            $i2 = $i1->fetch_array();
            if ($i2['id_name'] != null) {
                header("Location: add?no=no");
                die;
            }
        }

        $i1 = '<strong>Оцінка по шкалі ECTS</strong><br>';
        $i2 = '<strong>Національна оцінка</strong><br>';
        $i3 = '<strong>Рейтингова оцінка</strong><br>';
        $k = '<strong>Дата</strong><br>';
        $l = '<strong>Прізвище викладача</strong><br>';
        $br = '<br>';
        $data = '<b>'.$_POST['i'].'</b>'.$br.$i1.$_POST['j'].$br.$i2.$_POST['j2'].$br.$i3.$_POST['j3'].$br.$k.$_POST['k'].$br.$l.$_POST['l'];

        if($_POST['h'] == 'h1'){
            $p1 = $_POST['j3'];
            $h = $_POST['h'];
            $gh = 'gh1';
            $h_id = 'id_h1_name';
            $j_all_h = $data;
        }elseif($_POST['h'] == 'h2'){
            $p2 = $_POST['j3'];
            $h = $_POST['h'];
            $gh = 'gh2';
            $h_id = 'id_h2_h1';
            $j_all_h = $data;
        }elseif($_POST['h'] == 'h3'){
            $p3 = $_POST['j3'];
            $h = $_POST['h'];
            $gh = 'gh3';
            $h_id = 'id_h3_h2';
            $j_all_h = $data;
        }elseif($_POST['h'] == 'h4'){
            $p4 = $_POST['j3'];
            $h = $_POST['h'];
            $gh = 'gh4';
            $h_id = 'id_h4_h3';
            $j_all_h = $data;
        }elseif($_POST['h'] == 'h5'){
            $p5 = $_POST['j3'];
            $h = $_POST['h'];
            $gh = 'gh5';
            $h_id = 'id_h5_h4';
            $j_all_h = $data;
        }


        //name
        $name = "INSERT INTO $this->name VALUES('{$_POST['a']}', '{$_POST['id']}')";
        mysqli_query($dd->getMysqli(), $name);
        //h1
        $h1 = "INSERT INTO h1 VALUES('{$_POST['id']}', '{$j_all_h}', '{$_POST['id']}')";
        mysqli_query($dd->getMysqli(), $h1);
        //h2
        $h2 = "INSERT INTO h2 VALUES('{$_POST['id']}', '{$j_all_h}', '{$_POST['id']}')";
        mysqli_query($dd->getMysqli(), $h2);
        //h3
        $h3 = "INSERT INTO h3 VALUES('{$_POST['id']}', '{$j_all_h}', '{$_POST['id']}')";
        mysqli_query($dd->getMysqli(), $h3);
        //h4
        $h4 = "INSERT INTO h4 VALUES('{$_POST['id']}', '{$j_all_h}', '{$_POST['id']}')";
        mysqli_query($dd->getMysqli(), $h4);
        //h5
        $h5 = "INSERT INTO h5 VALUES('{$_POST['id']}', '{$j_all_h}', '{$_POST['id']}')";
        mysqli_query($dd->getMysqli(), $h5);

        //добавление в ведомость
        $gpa1 = "INSERT INTO GPA VALUES('{$_POST['id']}', '{$p1}', '{$p2}', '{$p3}', '{$p4}', '{$p5}')";
        mysqli_query($dd->getMysqli(), $gpa1);

        $query = "UPDATE $h SET $h ='{$j_all_h}' WHERE $h_id='{$_POST['id']}'";
        mysqli_query($dd->getMysqli(), $query);


        $gpa2 = "UPDATE GPA SET $gh='{$_POST['j3']}' WHERE id='{$_POST['id']}'";
        mysqli_query($dd->getMysqli(), $gpa2);


        header("Location: add");
        die;
    }

    public function clear_all()
    {
        $dd = new baza();

        $delete1 = "DELETE FROM GPA";
        mysqli_query($dd->getMysqli(), $delete1);

        $delete2 = "DELETE FROM h5";
        mysqli_query($dd->getMysqli(), $delete2);

        $delete3 = "DELETE FROM h4";
        mysqli_query($dd->getMysqli(), $delete3);

        $delete4 = "DELETE FROM h3";
        mysqli_query($dd->getMysqli(), $delete4);

        $delete5 = "DELETE FROM h2";
        mysqli_query($dd->getMysqli(), $delete5);

        $delete6 = "DELETE FROM h1";
        mysqli_query($dd->getMysqli(), $delete6);

        $delete7 = "DELETE FROM $this->name";
        mysqli_query($dd->getMysqli(), $delete7);

        header("Location: data_all");
        die;
    }

    public function serch1()
    {
        $dd = new baza();

        $serch = "SELECT * FROM $this->name n JOIN h1 h1 ON n.id_name = h1.id_h1_name JOIN h2 h2 ON h1.id_h1 = h2.id_h2_h1 JOIN h3 h3 ON h3.id_h3_h2 = h2.id_h2 JOIN h4 h4 ON h4.id_h4_h3 = h3.id_h3 JOIN h5 h5 ON h5.id_h5_h4 = h4.id_h4 JOIN GPA g ON g.id = h5.id_h5 WHERE n.name='{$_POST['serch']}'";
        return $this->serch = mysqli_query($dd->getMysqli(), $serch);

    }

}