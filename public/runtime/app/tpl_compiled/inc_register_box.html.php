<div class="register_box clearfix">
	
	<?php if (app_conf ( "SMS_ON" ) == 1): ?>
	<div class="register-tab" rel="<?php echo $this->_var['form_prefix']; ?>">
		<a class="current" href="javascript:void(0);" rel="other" lk="<?php echo $this->_var['form_prefix']; ?>"><span class="iconfont">&#xe617;</span>&nbsp;普通注册</a>
		<a href="javascript:void(0);" rel="ph" lk="<?php echo $this->_var['form_prefix']; ?>"><span class="iconfont">&#xe61a;</span>&nbsp;手机注册</a>
	</div>
	<div class="blank"></div>
	<div class="blank"></div>
	<?php endif; ?>
	
	<div class="register-panel form_panel" rel="<?php echo $this->_var['form_prefix']; ?>">
		<div class="panel" rel="other" style="display:block;">
		<form name="<?php echo $this->_var['form_prefix']; ?>_register_form" class="register" method="post" action="<?php
echo parse_url_tag("u:index|user#doregister|"."".""); 
?>">
			<input type="hidden" name="form_prefix" value="<?php echo $this->_var['form_prefix']; ?>" />
			<dl>
				<dt>邮箱</dt>
				<dd>
					<input class="ui-textbox" name="email" holder="请输入邮箱" />
					<span class="form_tip"></span>
				</dd>
			</dl>
			<dl>
				<dt>用户名</dt>
				<dd>
					<input class="ui-textbox" name="user_name" holder="请输入用户名" />
					<span class="form_tip"></span>
				</dd>
			</dl>
			<dl>
				<dt>密码</dt>
				<dd>
					<input type="password" name="user_pwd" class="ui-textbox" holder="请输入密码" rel="other" />
					<span class="form_tip"></span>
				</dd>
			</dl>
			<dl class="pwd_chk_line" rel="other">
				<dt></dt>
				<dd>
					<ul>
						<li rel="0">弱</li>
						<li rel="1">中</li>
						<li rel="2" class="no_margin">强</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>确认密码</dt>
				<dd>
					<input type="password" name="user_pwd_confirm" class="ui-textbox" holder="请再次输入密码" rel="other" />
					<span class="form_tip"></span>
				</dd>
			</dl>
			<dl>
				<dt>图片验证码</dt>
				<dd>
					<input type="text" name="verify_code" class="ui-textbox img_verify" holder="请输入图片文字" />
					<img src="<?php echo $this->_var['APP_ROOT']; ?>/verify.php" class="verify" rel="<?php echo $this->_var['APP_ROOT']; ?>/verify.php" />
					<a href="javascript:void(0);" class="refresh_verify">看不清楚？换一张！</a>
					<span class="form_tip"></span>
				</dd>
			</dl>
			<dl>
				<dt></dt>
				<dd>
					<button class="ui-button orange f_l" rel="orange" type="submit">立即注册</button>
					
				</dd>
			</dl>
		</form>
		</div>
		
		<div class="panel" rel="ph">
		<form name="<?php echo $this->_var['form_prefix']; ?>_ph_register_form" class="ph_register" method="post" action="<?php
echo parse_url_tag("u:index|user#dophregister|"."".""); 
?>">
			<input type="hidden" name="form_prefix" value="<?php echo $this->_var['form_prefix']; ?>" />
			<dl>
				<dt>手机号</dt>
				<dd>
					<input class="ui-textbox" name="user_mobile" value="" holder="请输入手机号" />
					<span class="form_tip"></span>
				</dd>
			</dl>
			
			<dl class="ph_img_verify" <?php if ($this->_var['sms_ipcount'] > 1): ?>style="display:block"<?php endif; ?>>
				<dt>图片验证码</dt>
				<dd>
					<input type="text" name="verify_code" class="ui-textbox img_verify" holder="请输入图片文字" />
					<img src="<?php echo $this->_var['APP_ROOT']; ?>/verify.php" class="verify" rel="<?php echo $this->_var['APP_ROOT']; ?>/verify.php" />
					<a href="javascript:void(0);" class="refresh_verify">看不清楚？换一张！</a>
					<span class="form_tip"></span>
				</dd>
			</dl>	
					
			<dl>
				<dt>验证码</dt>
				<dd>
					<input class="ui-textbox ph_verify" name="sms_verify" holder="请输入验证码" />
					<button class="ui-button f_l light ph_verify_btn" rel="light" form_prefix="<?php echo $this->_var['form_prefix']; ?>" lesstime="<?php echo $this->_var['sms_lesstime']; ?>" type="button">发送验证码</button>
					
					<span class="form_tip"></span>
				</dd>
			</dl>
			
			<dl>
				<dt>密码</dt>
				<dd>
					<input type="password" name="user_pwd" class="ui-textbox" holder="请输入密码"  rel="ph"/>
					<span class="form_tip"></span>
				</dd>
			</dl>
			<dl class="pwd_chk_line" rel="ph">
				<dt></dt>
				<dd>
					<ul>
						<li rel="0">弱</li>
						<li rel="1">中</li>
						<li rel="2" class="no_margin">强</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>确认密码</dt>
				<dd>
					<input type="password" name="user_pwd_confirm" class="ui-textbox" holder="请再次输入密码" rel="ph" />
					<span class="form_tip"></span>
				</dd>
			</dl>

			<dl>
				<dt></dt>
				<dd>
					<button class="ui-button f_l orange" rel="orange" type="submit">立即注册</button>
					
				</dd>
			</dl>
		</form>
		</div>
	</div>

	
</div>
