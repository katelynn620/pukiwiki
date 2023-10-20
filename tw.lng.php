<?php
/////////////////////////////////////////////////
// PukiWiki - Yet another WikiWikiWeb clone.
//
// $Id: tw.lng,v 1.4 2003/11/19 13:26:13 candyz Exp $
//
// PukiWiki message file (Traditional Chinese) -- UTF-8

///////////////////////////////////////
// page titles
$_title_cannotedit = '無法編輯 $1';
$_title_edit = '編輯 $1';
$_title_preview = '預覽 $1';
$_title_collided = '在更新 $1 時發生衝突。';
$_title_updated = '$1 已更新';
$_title_deleted = '$1 已刪除';
$_title_help = '求助';
$_title_invalidwn = '無效的 WikiName';
$_title_backuplist = '備份清單';

///////////////////////////////////////
// messages
$_msg_unfreeze = '解封';
$_msg_preview = '若底下的預覽無誤，請按本頁下方的 "更新" 鈕進行更新。';
$_msg_preview_delete = '(The contents of a page are empty.Updating deletes this page.)';
$_msg_collided = 'It seems that other user have updated the same page while you are editing this page.<br />
Since there is a text which you edited into below, please copy & paste to<br />
an editor so that your contents of edit are not lost.<br />
Please reedit again from the contents newest after that.';
$_msg_collided_auto = 'It seems that other user have updated the same page while you are editing this page.<br />
collision was corrected automatically, but there may be a problem.<br />
Press [Update] after checking.<br />';
$_msg_invalidiwn = '$1 is not an effective $2.';
$_msg_invalidpass = '無效的密碼。';
$_msg_notfound = 'The page is not found.';
$_msg_addline = '新增的行是 <span class="diff_added">這個顏色</span>。';
$_msg_delline = '刪除的行是 <span class="diff_removed">這個顏色</span>。';
$_msg_goto = '前往 $1 。';
$_msg_andresult = '在全部的 <strong>$3</strong> 頁中共發現有 <strong>$2</strong> 頁包含 $1 。';
$_msg_orresult = '在全部的 <strong>$3</strong> 頁中共發現有 <strong>$2</strong> 頁包含 $1 。';
$_msg_notfoundresult = 'Not found word of $1 in pages.';
$_msg_symbol = 'Symbols';
$_msg_other = 'Others';
$_msg_help = '檢視寫作語法';
$_msg_week = array('日','一','二','三','四','五','六');
$_msg_content_back_to_top = '<div class="jumpmenu"><a href="#navigator">▲</a></div>';
$_msg_word = '這些搜尋的條件將會被特別標示出來:';

///////////////////////////////////////
// symbols
$_symbol_anchor = '&dagger;';
$_symbol_noexists = '?';

///////////////////////////////////////
// form buttons
$_btn_preview = '預覽';
$_btn_repreview = '再預覽';
$_btn_update = '更新';
$_btn_notchangetimestamp = '不變更時間戳記';
$_btn_addtop = '新增至本頁頂端';
$_btn_template = '可供使用的樣板頁面';
$_btn_load = '載入';
$_btn_edit = '編輯';
$_btn_delete = '刪除';

///////////////////////////////////////
// authentication
$_title_cannotread = '您沒有權限存取 $1';
$_msg_auth = 'PukiWiki Authentication';

///////////////////////////////////////
// help 'wiki format rule'.
$rule_page = '寫作語法';
$help_page = '求助';

///////////////////////////////////////
// TrackBack
$_tb_title = '引用: 在 %s 繼續討論';
$_tb_header = '繼續討論...';
$_tb_entry = '本文的引用網址:';
$_tb_refer = ' Listed below are links to weblogs that reference %s from %s.';
$_tb_header_Excerpt = 'Excerpt:';
$_tb_header_Weblog = 'Weblog:';
$_tb_header_Tracked = 'Tracked:';
$_tb_date = 'F j, Y, g:i A';

/////////////////////////////////////////////////
// no subject (article)
$_no_subject = '無主題';
/////////////////////////////////////////////////
// no name (article,comment,pcomment)
$_no_name = '無名氏';

///////////////////////////////////////
// plug-in message

///////////////////////////////////////
// add.inc.php
$_title_add = 'Add to $1';
$_msg_add = 'Two and the contents of an input are added for a new-line to the contents of a page of present addition.';

///////////////////////////////////////
// weblog.inc.php
$_weblog_btn_name = '發表人：';
$_weblog_btn_password = '密碼：';
$_weblog_category = '類別：';
$_btn_weblog = '張貼文章';
$_weblog_btn_subject = '發表主題：';
$_weblog_comment_title = '迴響';
$_send_trackback_ping = '送出通告：';
$_allow_comment = '允許迴響：';
$_btn_yes = '是';
$_btn_no = '否';
$_btn_at = '在';
$_btn_post = '發表：';
$_weblog_err_msg = '您無權發表文章。';

///////////////////////////////////////
// article.inc.php
$_btn_name = '姓名：';
$_btn_article = '送出';
$_btn_subject = '主題：';
$_msg_article_mail_sender = '寄信人：';
$_msg_article_mail_page = '頁面：';

///////////////////////////////////////
// attach.inc.php
$_attach_messages = array(
	'msg_uploaded' => '已上傳檔案到 $1',
	'msg_deleted'  => '刪除在 $1 中的檔案',
	'msg_freezed'  => '檔案已被封鎖',
	'msg_unfreezed'=> '檔案已被解封',
	'msg_upload'   => '上傳檔案到 $1',
	'msg_info'     => '檔案資訊',
	'msg_confirm'  => '<p>刪除 %s。</p>',
	'msg_list'     => '附加檔案列表',
	'msg_listpage' => '檔案已存在於 $1',
	'msg_listall'  => '所有頁面的附加檔案列表',
	'msg_file'     => '附加檔案',
	'msg_maxsize'  => '檔案的最大的容量為 %s。',
	'msg_count'    => ' <span class="small">%s 下載</span>',
	'msg_password' => '密碼',
	'msg_adminpass'=> '管理員密碼',
	'msg_delete'   => '刪除檔案。',
	'msg_freeze'   => '封鎖檔案。',
	'msg_unfreeze' => '解封檔案。',
	'msg_isfreeze' => '檔案已封鎖。',
	'msg_require'  => '(需要管理員密碼)',
	'msg_filesize' => '大小',
	'msg_date'     => '日期',
	'msg_dlcount'  => '存取數',
	'msg_md5hash'  => 'MD5',
	'msg_page'     => '頁面',
	'msg_filename' => '儲存的檔名',
	'err_noparm'   => '不能上傳或刪除檔案於 $1',
	'err_exceed'   => '檔案大小超過 $1',
	'err_exists'   => '檔案已存在於 $1',
	'err_notfound' => '無法找到檔案於 $1',
	'err_noexist'  => '檔案不存在。',
	'err_delete'   => '無法刪除檔案於 $1',
	'err_password' => '密碼錯誤。',
	'err_adminpass'=> '錯誤的管理員密碼',
	'btn_upload'   => '上傳',
	'btn_info'     => '資訊',
	'btn_submit'   => '送出'
);

///////////////////////////////////////
// back.inc.php
$_msg_back_word = 'Back';

///////////////////////////////////////
// backup.inc.php
$_title_backup_delete = '刪除 $1 的備份';
$_title_backupdiff = '$1 (No.$2) 的備份差異';
$_title_backupnowdiff = '$1 (No.$2) 的備份和目前版本的差異';
$_title_backupsource = '$1 (No.$2) 的備份原始碼';
$_title_backup = '$1 (No.$2) 的備份';
$_title_backuprestore = '$1 (No.$2) 的復原';
$_title_pagebackuplist = '$1 的備份清單';
$_title_backuplist = '備份清單';
$_msg_backup_deleted = '$1 的備份已經刪除。';
$_msg_backup_adminpass = '請輸入管理員的密碼。';
$_msg_backuplist = '備份清單列表';
$_msg_nobackup = '沒有 $1 的備份。';
$_msg_diff = '差異';
$_msg_nowdiff = '和目前版本的差異';
$_msg_source = '原始碼';
$_msg_backup = '備份';
$_msg_restore = '復原';
$_msg_restore_success = '復原成功。';
$_msg_restore_return = '回到 ';
$_msg_exec = '執行 $1 。';
$_msg_view = '檢視 $1 。';
$_msg_deleted = '$1 已經刪除。';

///////////////////////////////////////
// calendar_viewer.inc.php
$_err_calendar_viewer_param  = 'Parametere require.';
$_err_calendar_viewer_param2 = 'Wrong 2nd parameter.';
$_msg_calendar_viewer_right  = 'Next %d&gt;&gt;';
$_msg_calendar_viewer_left   = '&lt;&lt; Prev %d';
$_msg_calendar_viewer_restrict = 'Since $1 has required perusal restrictions, the reference by calendar_viewer cannot be performed.';

///////////////////////////////////////
// calendar2.inc.php
$_calendar2_plugin_edit = '[編輯]';
$_calendar2_plugin_empty = '您要不要寫一下 [%s]';

///////////////////////////////////////
// chmod.inc.php
$_chmod_messages = array(
	'title_chmod' => 'Change Permit',
	'msg_chmod' => 'change permission of all files (exlude dot file) in checked directory.',
	'msg_execute' => 'Execute',
	'msg_complete' => 'Processing was completed.',
	'msg_adminpass' => 'Administrator Password.',
	'err_invalid_pass' => '密碼錯誤。',
	'err_cannot_opendir' => 'Can not Open dir $1.<br />',
	'err_cannot_change_permit' => 'Can not Change Permit $1.<br />'
);

///////////////////////////////////////
// comment.inc.php
$_btn_name = '姓名：';
$_btn_comment = '送出';
$_msg_comment = 'Comment: ';
$_title_comment_collided = 'collision detected at $1.';
$_msg_comment_collided = 'It seems that other user have updated the same page while you are editing this page.<br />
It may be inserted in the different position although the comment was added.<br />';

///////////////////////////////////////
// deleted.inc.php
$_deleted_plugin_title = 'deleted pages';
$_deleted_plugin_title_withfilename = 'deleted pages (with filename)';

///////////////////////////////////////
// diff.inc.php
$_title_diff = 'Diff of $1';

///////////////////////////////////////
// filelist.inc.php (list.inc.php)
$_title_filelist = '所有頁面的檔案列表';

///////////////////////////////////////
// freeze.inc.php
$_title_isfreezed = '$1 已經被封鎖';
$_title_freezed = '$1 已經封鎖。';
$_title_freeze = '封鎖 $1';
$_msg_freezing = '請輸入封鎖密碼。';
$_btn_freeze = '封鎖';

///////////////////////////////////////
// include.inc.php
$_msg_include_restrict = 'Since perusal restrictions have started, $1 cannot be include(d).';

///////////////////////////////////////
// insert.inc.php
$_btn_insert = 'add';

///////////////////////////////////////
// interwiki.inc.php
$_title_invalidiwn = 'It is not an effective InterWikiName';

///////////////////////////////////////
// list.inc.php
$_title_list = 'List of pages';

///////////////////////////////////////
// ls2.inc.php
$_ls2_err_nopages = '<p>\'$1\' 目前尚未有子頁面</p>';
$_ls2_msg_title = 'List of pages which begin from \'$1\'';

///////////////////////////////////////
// memo.inc.php
$_btn_memo_update = '更新';

///////////////////////////////////////
// navi.inc.php
$_navi_prev = '上一頁';
$_navi_next = '下一頁';
$_navi_up   = '上一層';
$_navi_home = '首頁';

///////////////////////////////////////
// newpage.inc.php
$_msg_newpage = '新增頁面';

///////////////////////////////////////
// paint.inc.php
$_paint_messages = array(
	'field_name'    => '姓名',
	'field_filename'=> '檔名',
	'field_comment' => 'Comment',
	'btn_submit'    => 'paint',
	'msg_max'       => '(Max %d x %d)',
	'msg_title'     => 'Paint and Attach to $1',
	'msg_title_collided' => 'The collision of updating broke out in the $1.',
	'msg_collided'  => 'It seems that other user have updated the same page while you are editing this page.<br />
add picture and comment to page, but there may be a problem.<br />'
);

///////////////////////////////////////
// pcomment.inc.php
$_pcmt_messages = array(
	'btn_name' => '姓名：',
	'btn_comment' => '張貼',
	'msg_comment' => '迴響：',
	'msg_recent' => '顯示最近 %d 則迴響：',
	'msg_all' => '前往迴響頁面',
	'msg_none' => '目前沒有迴響：',
	'title_collided' => 'The collision of updating broke out in the $1.',
	'msg_collided' => 'It seems that other user have updated the same page while you are editing this page.<br />
add comment to page, but there may be a problem.<br />',
	'err_pagename' => '[[%s]] : invalid page name.',
);
$_msg_pcomment_restrict = 'Since perusal restrictions have started, a comment cannot be read from $1.';

///////////////////////////////////////
// popular.inc.php
$_popular_plugin_frame = '<h5><center>熱門話題(%d)</center></h5><div>%s</div>';
$_popular_plugin_today_frame = '<h5><center>今日熱門(%d)</center></h5><div>%s</div>';

///////////////////////////////////////
// recent.inc.php
$_recent_plugin_frame = '<h5><center>近期更動(%d)</center></h5><div>%s</div>';

///////////////////////////////////////
// referer.inc.php
$_referer_msg = array(
	'msg_H0_Refer'       => 'Referer',
	'msg_Hed_LastUpdate' => 'LastUpdate',
	'msg_Hed_1stDate'    => '1st Register',
	'msg_Hed_RefCounter' => 'RefCounter',
	'msg_Hed_Referer'    => 'Referer',
	'msg_Fmt_Date'       => 'F j, Y, g:i A',
	'msg_Chr_uarr'       => '&uArr;',
	'msg_Chr_darr'       => '&dArr;',
);

///////////////////////////////////////
// rename.inc.php
$_rename_messages  = array(
	'err' => '<p>error:%s</p>',
	'err_nomatch' => 'no match page(s)',
	'err_notvalid' => 'wrong page name after renaming.',
	'err_adminpass' => 'Administrator password mismatch.',
	'err_notpage' => '%s is not pagename.',
	'err_norename' => 'cannot rename %s.',
	'err_already' => 'already exists. :%s',
	'err_already_below' => 'The following files already exist.',
	'msg_title' => '頁面更名',
	'msg_page' => 'specify source pagename',
	'msg_regex' => '更名 with regexp.',
	'msg_related' => '相關頁面',
	'msg_do_related' => 'A related page is also renamed.',
	'msg_rename' => '%s 更名',
	'msg_oldname' => '現在的名稱',
	'msg_newname' => '新的名稱',
	'msg_adminpass' => '管理員密碼',
	'msg_arrow' => '->',
	'msg_exist_none' => 'page is not processed when it already exists.',
	'msg_exist_overwrite' => 'page is overwrite when it already exists.',
	'msg_confirm' => 'The following files are renamed.',
	'msg_result' => 'The following files were overwritten.',
	'btn_submit' => '送出',
	'btn_next' => '下一個'
);

///////////////////////////////////////
// search.inc.php
$_title_search = '搜尋';
$_title_result = '$1 的搜尋結果';
$_msg_searching = '某些字將會從所有的頁面中被搜尋。(不分大小寫)';
$_btn_search = '搜尋';
$_btn_and = 'AND';
$_btn_or = 'OR';

///////////////////////////////////////
// source.inc.php
$_source_messages = array(
	'msg_title' => 'Source of $1',
	'msg_notfound' => '$1 is not found.',
	'err_notfound' => 'page not found.'
);

///////////////////////////////////////
// template.inc.php
$_msg_template_start = '開始:<br />';
$_msg_template_end = '結束:<br />';
$_msg_template_page = '$1/複製';
$_msg_template_refer = '頁面:';
$_msg_template_force = 'Edit by already existing page name';
$_err_template_already = '$1 is already exists.';
$_err_template_invalid = '$1 is not an effective page name.';
$_btn_template_create = '建立';
$_title_template = 'create new page, using $1 as template.';

///////////////////////////////////////
// tracker.inc.php
$_tracker_messages = array(
	'msg_list' => 'List items of $1',
	'msg_back' => '<p>$1</p>',
	'msg_limit' => 'top $2 results out of $1.',
	'btn_page' => 'Page',
	'btn_name' => 'Name',
	'btn_real' => 'Realname',
	'btn_submit' => 'Add',
	'btn_date' => 'Date',
	'btn_refer' => 'Refer page',
	'btn_base' => 'Base page',
	'btn_update' => 'Update',
	'btn_past' => 'Past',
);

///////////////////////////////////////
// unfreeze.inc.php
$_title_isunfreezed = '$1 並未封鎖';
$_title_unfreezed = '$1 已經解封。';
$_title_unfreeze = '解封 $1';
$_msg_unfreezing = '請輸入解封密碼。';
$_btn_unfreeze = '解封';

///////////////////////////////////////
// versionlist.inc.php
$_title_versionlist = '版本一覽表';

///////////////////////////////////////
// vote.inc.php
$_vote_plugin_choice = '選項';
$_vote_plugin_votes = '投票';

///////////////////////////////////////
// yetlist.inc.php
$_title_yetlist = '尚未存在的頁面';
$_err_notexist = '所有的頁面都已建立。';
?>
