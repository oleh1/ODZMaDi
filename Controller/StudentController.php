<?php

namespace Controller;

use Model\studentsDb;


class StudentController extends StudentsDb
{

    public function add()
    {
        $data = [
            'data_all'=>$this->data_all,
        ];
        return $this->requireToVar('View/add.php', $data);
    }

    public function addDb1()
    {
        return $this->addDB2();
    }

    public function data_all()
    {
        $data = [
            'data_all'=>$this->data_all,
        ];
        return $this->requireToVar('View/data_all.php', $data);
    }

    public function clear()
    {
        return $this->clear_all();
    }

    private function requireToVar($file, $data = []){
        ob_start();
        extract($data);
        require($file);
        return ob_get_clean();
    }

}
