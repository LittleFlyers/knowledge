<?php
namespace app\knowledge\controller;

class Dictionary{
	//获取词典中全部的信息
	public function all()
	{
	   $Meeting = db('dictionary');
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
	//获取词典中的单个词条
	public function one()
	{
		
	}
	//向词典中添加词条
	public function add()
	{
		$word = input('post.word');
		$type = input('post.type');
		$explain = input('post.explain');

		$Dw = db('dictionary');
		$emap['word'] = $word;
		$emap['word_explain'] = $explain;
		$emap['type'] = $type;
		$Dw->insert($emap);
		$result['err_code'] = 0;
        $result['err_msg'] = 'ok';
        return json_encode($result);
		
	}
	//接收词条图片
	public function load()
	{
         
	}
	//更新词条
	public function update()
	{
		
	}
    //删除词条
	public function delete()
	{
		
	}
}