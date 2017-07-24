<?php
namespace app\knowledge\controller;

class Consult{
	//获取咨询中的全部信息
	public function all()
	{
        $Consult = db('consult');
        $consult_list = $Consult->select();
        {
            $result['err_code'] = 0;
            $result['err_msg'] = 'ok';
            $result['data'] = $consult_list;
        }
        else
        {
            $result['err_code'] = 1;
            $result['err_msg'] = '暂无';
        }

        return json_encode($result);

	}
	//获取咨询中详细信息
	public function one()
	{
		
	}
    //添加咨询
	public function add()
	{
		
	}
	//回答咨询
	public function answer()
	{
		
	}
    //删除咨询
	public function delete()
	{
		
	}
}