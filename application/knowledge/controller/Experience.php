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
		

        $EducationBackground = db('experience_answer');
        $theData = $EducationBackground->select();

        $result['err_code'] = 0;
        $result['err_msg'] = 'ok';
        $result['data'] = $theData;

        return json_encode($result);
	}
	//回答经验
	public function answer()
	{
		$access_token = input('post.access_token');
        $exp_user_id = get_user_id_by_access_token($access_token);
		$experience_answer = input('post.experience_answer');
		$experience_id = input('post.experience_id');

		$EA = db('experience_answer');
		$emap['experience_id'] = $experience_id;
		$emap['answer_content'] = $experience_answer;
		$emap['user_id'] = $exp_user_id;
		$emap['create_date'] = date('Y-m-d G:i:s');
		$EA->insert($emap);

		$result['err_code'] = 0;
        $result['err_msg'] = 'ok';
        return json_encode($result);
	}
	//添加经验
	public function add()
	{
		$access_token = input('post.access_token');
        $exp_user_id = get_user_id_by_access_token($access_token);

		$title = input('post.title');
        $answer = input('post.answer');
        $type = input('post.type');

        $Experience = db('experience');
        $emap['experience_title'] = $title;
		$emap['user_id'] = $exp_user_id;
		$emap['type'] = $type;
        $emap['create_date'] = date('Y-m-d G:i:s');
		$emap['answer'] = $answer;
        $Experience->insert($emap);
		
        $result['err_code'] = 0;
        $result['err_msg'] = 'ok';
        return json_encode($result);
	}
    //删除经验
	public function delete()
	{
	
	}
}