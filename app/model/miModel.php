<?php

namespace app\model;
use core\lib\model;
class miModel extends model
{
    //给一个表名
    public $table = 'mi';

    //查询表中所有信息
    public function lists()
    {
        $ret = $this->select($this->table, '*');
        return $ret;
    }

    //查询一条语句
    public function getOne($id)
    {
        $ret = $this->get($this->table, '*', array(
            'id' => $id
        ));
        return $ret;
    }

    //修改一条数据
    public  function  setOne($id , $data)
    {
        return $this->update($this->table,$data,array(
            'id' => $id
        ));
    }

    //删除一条数据
    public  function  delOne($id){
        $ret = $this->delete($this->table, array(
            'id' => $id
        ));
        return $ret;
    }
}