<?php if (!defined('IN_PHPBB')) exit; ?></div>

<div id="page-footer">

	<div class="navbar">
		<div class="inner"><span class="corners-top"><span></span></span>

		<ul class="linklist">
			<li class="icon-home"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_WATCH_FORUM_LINK']) {  ?><li <?php if ($this->_rootref['S_WATCHING_FORUM']) {  ?>class="icon-unsubscribe"<?php } else { ?>class="icon-subscribe"<?php } ?>><a href="<?php echo (isset($this->_rootref['S_WATCH_FORUM_LINK'])) ? $this->_rootref['S_WATCH_FORUM_LINK'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?>"><?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?></a></li><?php } if ($this->_rootref['U_WATCH_TOPIC']) {  ?><li <?php if ($this->_rootref['S_WATCHING_TOPIC']) {  ?>class="icon-unsubscribe"<?php } else { ?>class="icon-subscribe"<?php } ?>><a href="<?php echo (isset($this->_rootref['U_WATCH_TOPIC'])) ? $this->_rootref['U_WATCH_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_BOOKMARK_TOPIC']) {  ?><li class="icon-bookmark"><a href="<?php echo (isset($this->_rootref['U_BOOKMARK_TOPIC'])) ? $this->_rootref['U_BOOKMARK_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_BUMP_TOPIC']) {  ?><li class="icon-bump"><a href="<?php echo (isset($this->_rootref['U_BUMP_TOPIC'])) ? $this->_rootref['U_BUMP_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?></a></li><?php } } ?>

			<li class="rightside"><?php if ($this->_rootref['U_TEAM']) {  ?><a href="<?php echo (isset($this->_rootref['U_TEAM'])) ? $this->_rootref['U_TEAM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></a> &bull; <?php } if (! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_DELETE_COOKIES'])) ? $this->_rootref['U_DELETE_COOKIES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DELETE_COOKIES'])) ? $this->_rootref['L_DELETE_COOKIES'] : ((isset($user->lang['DELETE_COOKIES'])) ? $user->lang['DELETE_COOKIES'] : '{ DELETE_COOKIES }')); ?></a> &bull; <a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;delete_cookies=true">Delete style cookies</a>  &bull; <?php } echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?></li>
		</ul>

		<span class="corners-bottom"><span></span></span></div>
	</div>
	

</div>

</div>

<div>
	<a id="bottom_" name="bottom" accesskey="z"></a>
	<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

</div>
</div>
		                														                    										</div>
		                    										</div>
		                    										<div class="clr"></div>
		                        																									</div></div></div></div>
																<div id="maincontent-bm" class="png"><div id="maincontent-bl" class="png"><div id="maincontent-br" class="png"></div></div></div>
	                    									</div>
	                    								</div>    
	                    							</div>
	            						        </div>
	            						    </div>
	            						    <!--End col1wrap -->
								    <?php if ($this->_rootref['REF_MENUPOSITION'] == (left)) {  ?>

	           						        <!--Begin col2 -->
	           						        	            						    <div class="col2">
	                							<div id="leftcol">
	                                                <div id="leftcol-padding">
	                										                										<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>

																									<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
					<div id="searchmod-surround">
<form action="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" method="post" id="search">
<div class="rokajaxsearch">
	<div class="input-field-l png"><div class="input-field-r png">	<input name="keywords" id="keywords" maxlength="20" alt="search" class="inputbox" type="text" size="20" value="Search..."  onblur="if(this.value=='') this.value='Search...';" onfocus="if(this.value=='Search...') this.value='';" /></div></div>
			<div class="search_options">
			<label style="float: left; margin-right: 8px">
					<a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?></a> <?php echo (isset($this->_rootref['S_SEARCH_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_HIDDEN_FIELDS'] : ''; ?></label>
		</div>
	
	
</div>

</form>
</div>				</div>
			</div></div></div>
		</div>
	</div>
																									<?php } ?>

																									
																									<div class="_menu">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title">Main Menu</h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
				<?php if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>

	<ul class="menu">
	<?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></span></a></li><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></span></a></li><?php } ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></span></a></li>
	<?php } ?>

	<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></span></a></li>
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></span></a></li><?php } ?>

	</ul>	
<?php } ?>

			</div>
			</div></div></div>
		</div>
	</div>
		<?php if ($this->_rootref['S_SHOW_REFUSER']) {  ?>

		<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title">User Menu</h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
				<ul class="menu">
	<?php if ($this->_rootref['U_MCP']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></span></a></li><?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>


				<li ><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="u" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></span></a></li>
						<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?><li ><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>" class="mainlevel"><span><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></span></a></li><?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?>

					<li ><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></span></a></li>
					<?php } } ?>

				<li ><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></span></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li ><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></span></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?><li ><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></span></a></li><?php } ?>

					<li ><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="l" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></span></a></li>
				<?php } ?>

	</ul>	
			</div>
			</div></div></div>
		</div>
	</div>
		<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

		<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title"><?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?></h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
					
<div class="main-login-form">
	<form action="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>ucp.php?mode=login" method="post"  name="login" class="form-login">
				<div class="username-block">
			<div class="input-field-l png"><input name="username" id="mod_login_username" type="text" alt="username" size="10" class="inputbox" value="Username" onfocus="if (this.value=='Username') this.value=''" onblur="if(this.value=='') { this.value='Username'; return false; }" /></div>
		</div>
		<div class="password-block">
			<div class="input-field-l png"><input type="password" id="mod_login_password" name="password" size="10" alt="password" value="Password" class="inputbox" onfocus="if (this.value=='Password') this.value=''" onblur="if(this.value=='') { this.value='Password'; return false; }" /></div>
		</div>
		<div class="login-extras">
			<div class="remember-me">
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><label for="autologin" class="remember">
		Remember Me	</label>
			<?php } ?>

			<input type="checkbox" name="autologin" id="autologin" class="checkbox" value="yes" alt="Remember Me" />
			<input name="redirect" value="<?php echo (isset($this->_rootref['LOGIN_REDIRECT'])) ? $this->_rootref['LOGIN_REDIRECT'] : ''; ?>" type="hidden" />
			</div>
			<div class="readon-wrap1"><div class="readon1-l png"></div><a class="readon-main"><span class="readon1-m png"><span class="readon1-r png"><input type="submit" name="login" class="button" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" /></span></span></a></div><div class="clr"></div>
			
								</div>
	</form>
</div>
				</div>
			</div></div></div>
		</div>
	</div>
	<?php } if ($this->_rootref['ALLOW_REF_COLORSWITCHER']) {  ?>


		<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title">Preset Styles</h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
						
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style1">Style1</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style2">Style2</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style3">Style3</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style4">Style4</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style5">Style5</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style6">Style6</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style7">Style7</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style8">Style8</a> |
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style9">Style9</a> |
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style10">Style10</a> | 
				</div>
			</div></div></div>
		</div>
	</div>
<?php } ?>

	
	                										                                                </div>
	                							</div>
	            						    </div>
	            						     <?php } ?>

	            						    <!---End col2 -->
	            						    <!--Begin col3 -->
								    <?php if ($this->_rootref['REF_MENUPOSITION'] == (right)) {  ?>

	            						     <div class="col3">
	                							<div id="rightcol">
	                                                <div id="rightcol-padding">
	                										                										<?php if ($this->_rootref['S_DISPLAY_SEARCH'] && ! $this->_rootref['S_IN_SEARCH']) {  ?>

																									<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title"><?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?></h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
					<div id="searchmod-surround">
<form action="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" method="post" id="search">
<div class="rokajaxsearch">
	<div class="input-field-l png"><div class="input-field-r png">	<input name="keywords" id="keywords" maxlength="20" alt="search" class="inputbox" type="text" size="20" value="Search..."  onblur="if(this.value=='') this.value='Search...';" onfocus="if(this.value=='Search...') this.value='';" /></div></div>
			<div class="search_options">
			<label style="float: left; margin-right: 8px">
					<a href="<?php echo (isset($this->_rootref['U_SEARCH'])) ? $this->_rootref['U_SEARCH'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_SEARCH_ADV_EXPLAIN'])) ? $this->_rootref['L_SEARCH_ADV_EXPLAIN'] : ((isset($user->lang['SEARCH_ADV_EXPLAIN'])) ? $user->lang['SEARCH_ADV_EXPLAIN'] : '{ SEARCH_ADV_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_SEARCH_ADV'])) ? $this->_rootref['L_SEARCH_ADV'] : ((isset($user->lang['SEARCH_ADV'])) ? $user->lang['SEARCH_ADV'] : '{ SEARCH_ADV }')); ?></a> <?php echo (isset($this->_rootref['S_SEARCH_HIDDEN_FIELDS'])) ? $this->_rootref['S_SEARCH_HIDDEN_FIELDS'] : ''; ?></label>
		</div>
	
	
</div>

</form>
</div>				</div>
			</div></div></div>
		</div>
	</div>
																									<?php } ?>

																									
																									<div class="_menu">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title">Main Menu</h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
				<?php if ($this->_rootref['S_DISPLAY_SEARCH'] || ( $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT'] )) {  ?>

	<ul class="menu">
	<?php if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_UNANSWERED'])) ? $this->_rootref['U_SEARCH_UNANSWERED'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_UNANSWERED'])) ? $this->_rootref['L_SEARCH_UNANSWERED'] : ((isset($user->lang['SEARCH_UNANSWERED'])) ? $user->lang['SEARCH_UNANSWERED'] : '{ SEARCH_UNANSWERED }')); ?></span></a></li><?php if ($this->_rootref['S_USER_LOGGED_IN']) {  ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_NEW'])) ? $this->_rootref['U_SEARCH_NEW'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_NEW'])) ? $this->_rootref['L_SEARCH_NEW'] : ((isset($user->lang['SEARCH_NEW'])) ? $user->lang['SEARCH_NEW'] : '{ SEARCH_NEW }')); ?></span></a></li><?php } ?>

		<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['U_SEARCH_ACTIVE_TOPICS'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_ACTIVE_TOPICS'])) ? $this->_rootref['L_SEARCH_ACTIVE_TOPICS'] : ((isset($user->lang['SEARCH_ACTIVE_TOPICS'])) ? $user->lang['SEARCH_ACTIVE_TOPICS'] : '{ SEARCH_ACTIVE_TOPICS }')); ?></span></a></li>
	<?php } ?>

	<li><a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></span></a></li>
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['U_MARK_FORUMS']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MARK_FORUMS'])) ? $this->_rootref['U_MARK_FORUMS'] : ''; ?>" accesskey="m" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_MARK_FORUMS_READ'])) ? $this->_rootref['L_MARK_FORUMS_READ'] : ((isset($user->lang['MARK_FORUMS_READ'])) ? $user->lang['MARK_FORUMS_READ'] : '{ MARK_FORUMS_READ }')); ?></span></a></li><?php } ?>

	</ul>	
<?php } ?>

			</div>
			</div></div></div>
		</div>
	</div>
		<?php if ($this->_rootref['S_SHOW_REFUSER']) {  ?>

		<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title">User Menu</h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
				<ul class="menu">
	<?php if ($this->_rootref['U_MCP']) {  ?><li><a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></span></a></li><?php } if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>


				<li ><a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="u" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></span></a></li>
						<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?><li ><a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>" class="mainlevel"><span><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></span></a></li><?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?>

					<li ><a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></span></a></li>
					<?php } } ?>

				<li ><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></span></a></li>
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li ><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></span></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN']) {  ?><li ><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></span></a></li><?php } ?>

					<li ><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="l" class="mainlevel"><span><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></span></a></li>
				<?php } ?>

	</ul>	
			</div>
			</div></div></div>
		</div>
	</div>
		<?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

		<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title"><?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?></h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
					
<div class="main-login-form">
	<form action="<?php echo (isset($this->_rootref['ROOT_PATH'])) ? $this->_rootref['ROOT_PATH'] : ''; ?>ucp.php?mode=login" method="post"  name="login" class="form-login">
				<div class="username-block">
			<div class="input-field-l png"><input name="username" id="mod_login_username" type="text" alt="username" size="10" class="inputbox" value="Username" onfocus="if (this.value=='Username') this.value=''" onblur="if(this.value=='') { this.value='Username'; return false; }" /></div>
		</div>
		<div class="password-block">
			<div class="input-field-l png"><input type="password" id="mod_login_password" name="password" size="10" alt="password" value="Password" class="inputbox" onfocus="if (this.value=='Password') this.value=''" onblur="if(this.value=='') { this.value='Password'; return false; }" /></div>
		</div>
		<div class="login-extras">
			<div class="remember-me">
			<?php if ($this->_rootref['S_AUTOLOGIN_ENABLED']) {  ?><label for="autologin" class="remember">
		Remember Me	</label>
			<?php } ?>

			<input type="checkbox" name="autologin" id="autologin" class="checkbox" value="yes" alt="Remember Me" />
			<input name="redirect" value="<?php echo (isset($this->_rootref['LOGIN_REDIRECT'])) ? $this->_rootref['LOGIN_REDIRECT'] : ''; ?>" type="hidden" />
			</div>
			<div class="readon-wrap1"><div class="readon1-l png"></div><a class="readon-main"><span class="readon1-m png"><span class="readon1-r png"><input type="submit" name="login" class="button" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" /></span></span></a></div><div class="clr"></div>
			
								</div>
	</form>
</div>
				</div>
			</div></div></div>
		</div>
	</div>
	<?php } if ($this->_rootref['ALLOW_REF_COLORSWITCHER']) {  ?>


		<div class="">
		<div class="side-mod">
						<div class="module-header png"><div class="module-header2 png"><div class="module-header3 png"><h3 class="module-title">Preset Styles</h3></div></div></div>
						<div class="module-tm png"><div class="module-tl png"><div class="module-tr png">
				<div class="module png">
						
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style1">Style1</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style2">Style2</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style3">Style3</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style4">Style4</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style5">Style5</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style6">Style6</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style7">Style7</a> | 
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style8">Style8</a> |
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style9">Style9</a> |
<a href="index.php<?php echo (isset($this->_rootref['SID'])) ? $this->_rootref['SID'] : ''; ?>&amp;ntheme=style10">Style10</a> | 
				</div>
			</div></div></div>
		</div>
	</div>
<?php } ?>

	
	                										                                                </div>
	                							</div>
	            						    </div>
	            						     
	            						 <?php } ?>

	            						    <!--End col3-->
	        							</div>
	    							</div>
								</div>
							</div>
							<!--End Main Content Block-->
						</div>
					</div>
				</div>
				<!--Begin Bottom Main Modules-->
								<!--End Bottom Main Modules-->
			</div></div>
		</div>
		
		
		<!--End Main Body-->
		<?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST'] || $this->_rootref['NEWEST_USER']) {  ?>

		<!--Begin Bottom Section-->
				<div class="wrapper">
			<div id="bottom-border-top" class="png"></div>
			<div id="bottom" class="png"><div id="bottom2" class="png"><div id="bottom3" class="png"><div id="bottom4" class="png">
				<div id="mainmodules4" class="spacer w99">
										<div class="block full">
							<div class="">
		<div class="moduletable">
						<?php if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>

						<div class="fpb-large">
<span class="highlight-bold"><?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?></span>
<?php echo (isset($this->_rootref['TOTAL_USERS_ONLINE'])) ? $this->_rootref['TOTAL_USERS_ONLINE'] : ''; ?> (<?php echo ((isset($this->_rootref['L_ONLINE_EXPLAIN'])) ? $this->_rootref['L_ONLINE_EXPLAIN'] : ((isset($user->lang['ONLINE_EXPLAIN'])) ? $user->lang['ONLINE_EXPLAIN'] : '{ ONLINE_EXPLAIN }')); ?>)<br /><?php echo (isset($this->_rootref['RECORD_USERS'])) ? $this->_rootref['RECORD_USERS'] : ''; ?><br /> <br /><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?>

	<?php if ($this->_rootref['LEGEND']) {  ?><br /><em><?php echo ((isset($this->_rootref['L_LEGEND'])) ? $this->_rootref['L_LEGEND'] : ((isset($user->lang['LEGEND'])) ? $user->lang['LEGEND'] : '{ LEGEND }')); ?>: <?php echo (isset($this->_rootref['LEGEND'])) ? $this->_rootref['LEGEND'] : ''; ?></em><?php } if ($this->_rootref['S_DISPLAY_BIRTHDAY_LIST'] && $this->_rootref['BIRTHDAY_LIST']) {  ?>

	<br /><?php echo ((isset($this->_rootref['L_BIRTHDAYS'])) ? $this->_rootref['L_BIRTHDAYS'] : ((isset($user->lang['BIRTHDAYS'])) ? $user->lang['BIRTHDAYS'] : '{ BIRTHDAYS }')); ?>

	<?php if ($this->_rootref['BIRTHDAY_LIST']) {  echo ((isset($this->_rootref['L_CONGRATULATIONS'])) ? $this->_rootref['L_CONGRATULATIONS'] : ((isset($user->lang['CONGRATULATIONS'])) ? $user->lang['CONGRATULATIONS'] : '{ CONGRATULATIONS }')); ?>: <strong><?php echo (isset($this->_rootref['BIRTHDAY_LIST'])) ? $this->_rootref['BIRTHDAY_LIST'] : ''; ?></strong><?php } else { echo ((isset($this->_rootref['L_NO_BIRTHDAYS'])) ? $this->_rootref['L_NO_BIRTHDAYS'] : ((isset($user->lang['NO_BIRTHDAYS'])) ? $user->lang['NO_BIRTHDAYS'] : '{ NO_BIRTHDAYS }')); } } ?>

						</div><?php } if ($this->_rootref['NEWEST_USER']) {  ?>

<div class="fpb-large">
<span class="highlight-bold"><?php echo ((isset($this->_rootref['L_STATISTICS'])) ? $this->_rootref['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ STATISTICS }')); ?></span>
<?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_TOPICS'])) ? $this->_rootref['TOTAL_TOPICS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['TOTAL_USERS'])) ? $this->_rootref['TOTAL_USERS'] : ''; ?> &bull; <?php echo (isset($this->_rootref['NEWEST_USER'])) ? $this->_rootref['NEWEST_USER'] : ''; ?>

</div>
<?php } ?>


<div class="clr"></div>		</div>
	</div>
	
					</div>
																			</div>
			</div></div></div></div>
			<div id="bottom-border-bottom" class="png"></div>
		</div>
				<!--End Bottom Section-->
				<?php } ?>

		<!--Begin Footer-->
		<div id="footer">
			<div class="wrapper">
								<?php if ($this->_rootref['SHOW_REF_COPYRIGHT']) {  ?><div class="copyright-block">
					<a href="http://www.rockettheme.com/" title="RocketTheme Joomla Templates Club" id="rocket" class="png"></a>
					<div id="copyright">
						&copy; Copyright 2009, All Rights Reserved					</div>
				</div><?php } ?>

												<div id="top-button"><a href="#" id="top-scroll" class="top-button-desc">Back to Top</a></div>
							</div>
		</div>
		<!--End Footer-->
		<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

	<div class="copyright">Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; } if ($this->_rootref['U_ACP']) {  ?><br /><strong><a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a></strong><?php } ?>

	</div>

</body>
</html>