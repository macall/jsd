<?php
class my_edit_pwd{
	public function index()
	{

		$new_pwd = strim($GLOBALS['request']['new_pwd']);//新密码
		
		//检查用户,用户密码
		$user =  $GLOBALS['user_info'];
		$user_id  = intval($user['id']);			
			
		$root = array();
				
		if($user_id>0)
		{
			$root['user_login_status'] = 0;	
				
			if (strlen($GLOBALS['request']['new_pwd']) < 4){
				$root['return'] = 0;
				$root['info'] = "注册密码不能少于4位";
				output($root);
			}
			if($new_pwd!=$pwd)
			{
				$sql = "update ".DB_PREFIX."user set user_pwd = '".md5($new_pwd)."' where id = {$user_id}";
				$GLOBALS['db']->query($sql);
				$rs = $GLOBALS['db']->affected_rows();
			}
			else
			{
				$rs = 1;
			}
			
			if ($rs > 0){
				$root['return'] = 1;
				$root['info'] = "密码更新成功!";
			}else{
				$root['return'] = 0;
				$root['info'] = "密码更新失败!";
			}
			
		}
		else
		{
			$root['return'] = 0;
			$root['user_login_status'] = 1;		
			$root['info'] = "原始密码不正确";
		}		
	
		output($root);
	}
}
?>