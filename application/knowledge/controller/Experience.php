<?php
namespace app\knowledge\controller;

class Experience{
	//获取经验的全部信息
	public function all()
	{
		$Meeting = db('experience');
        $meeting_list = $Meeting->select();
        if($meeting_list)
        {
            $result['err_code'] = 0;
            $result['err_msg'] = 'ok';
            $result['data'] = $meeting_list;
        }
        else
        {
            $result['err_code'] = 1;
            $result['err_msg'] = '暂无';
        }

        return json_encode($result);
	}
	//获取单个经验
	public function one()
	{
		
	}
	//回答经验
	public function answer()
	{
		
	}
	//添加经验
	public function add()
	{
		
	}
    //删除经验
	public function delete()
	{
		
	}
}