<?php
// PukiWiki - Yet another WikiWikiWeb clone.
// tw.lng.php
// Copyright
//   2002-2022 PukiWiki Development Team
// License: GPL v2 or (at your option) any later version
//
// PukiWiki message file (Traditional Chinese)

// Encoding hint
$_LANG['encode_hint']['tw'] = '繁';

// Page titles
$_title_cannotedit = '無法編輯 $1';
$_title_edit = '編輯 $1';
$_title_preview = '預覽 $1';
$_title_collided = '在更新 $1 時發生衝突。';
$_title_updated = '$1 已更新';
$_title_deleted = '$1 已刪除';
$_title_help = '求助';
$_title_invalidwn = '無效的 WikiName';
$_title_backuplist = '備份清單';

// Messages
$_msg_unfreeze = '解封';
$_msg_preview = '若底下的預覽無誤，請按本頁下方的 "更新" 鈕進行更新。';
$_msg_preview_delete = '（頁面內容為空。更新將刪除此頁面。）';
$_msg_collided = '在您編輯此頁面時，其他人已更新了相同的頁面。<br />
新增的行以 + 開頭。<br />
以 ! 開頭的行可能已被更改。<br />
請修正以 ! 或 + 開頭的行，然後再次更新頁面。<br />';
$_msg_collided_auto = '在您編輯此頁面時，其他人已更新了相同的頁面。<br />
衝突已自動解決，但可能仍有問題。<br />
請檢查後按 [更新]。<br />';
$_msg_invalidiwn = '$1 不是有效的 $2。';
$_msg_invalidpass = '無效的密碼。';
$_msg_notfound = '找不到指定的頁面。';
$_msg_addline = '新增的行是 <span class="diff_added">這個顏色</span>。';
$_msg_delline = '刪除的行是 <span class="diff_removed">這個顏色</span>。';
$_msg_goto = '前往 $1 。';
$_msg_andresult = '在全部的 <strong>$3</strong> 頁中共發現有 <strong>$2</strong> 頁包含 $1 。';
$_msg_orresult = '在全部的 <strong>$3</strong> 頁中共發現有 <strong>$2</strong> 頁包含 $1 。';
$_msg_notfoundresult = '在 <strong>$3</strong> 頁中找不到包含 $1 的頁面。';
$_msg_prev_results = '&lt;&lt; 前 $1 頁';
$_msg_more_results = '後 $1 頁 &gt;&gt;';
$_msg_symbol = '符號';
$_msg_other = '其他';
$_msg_help = '顯示文字格式化規則';
$_msg_week = array('日', '一', '二', '三', '四', '五', '六');
$_msg_content_back_to_top = '<div class="jumpmenu"><a href="#navigator">▲</a></div>';
$_msg_word = '以下關鍵字已被高亮顯示：';
$_msg_unsupported_webbrowser = '此功能不支援您的瀏覽器。';
$_msg_use_alternative_link = '請使用以下功能連結：$1';
$_msg_general_error = '處理過程中發生錯誤。';

$_msg_edit_cancel_confirm = '編輯中的文字將被丟棄。確定嗎？';
$_msg_edit_unloadbefore_message = '您輸入的資料可能不會被儲存。';

// Symbols
$_symbol_anchor = '&dagger;';
$_symbol_noexists = '';

// Form buttons
$_btn_preview = '預覽';
$_btn_repreview = '再預覽';
$_btn_update = '更新';
$_btn_cancel = '取消';
$_btn_notchangetimestamp = '不變更時間戳記';
$_btn_addtop = '新增至本頁頂端';
$_btn_template = '使用樣板頁面';
$_btn_load = '載入';
$_btn_edit = '編輯';
$_btn_delete = '刪除';

// Authentication
$_title_cannotread = '您沒有權限存取 $1';
$_msg_auth = 'PukiWiki 認證';

// Page name
$rule_page = '寫作語法';
$help_page = '求助';

// No subject
$_no_subject = '無主題';

// No name
$_no_name = '無名氏';

// Skin
$_LANG['skin']['add'] = '新增';
$_LANG['skin']['backup'] = '備份';
$_LANG['skin']['copy'] = '複製';
$_LANG['skin']['diff'] = '差異';
$_LANG['skin']['edit'] = '編輯';
$_LANG['skin']['filelist'] = '檔案列表';
$_LANG['skin']['freeze'] = '凍結';
$_LANG['skin']['help'] = '求助';
$_LANG['skin']['list'] = '列表';
$_LANG['skin']['new'] = '新增';
$_LANG['skin']['rdf'] = '最新更新的 RDF';
$_LANG['skin']['recent'] = '最新更新';
$_LANG['skin']['reload'] = '重新載入';
$_LANG['skin']['rename'] = '重新命名';
$_LANG['skin']['rss'] = '最新更新的 RSS';
$_LANG['skin']['rss10']     = & $_LANG['skin']['rss'];
$_LANG['skin']['rss20']     = & $_LANG['skin']['rss'];
$_LANG['skin']['search'] = '搜尋';
$_LANG['skin']['top'] = '首頁';
$_LANG['skin']['unfreeze'] = '解封';
$_LANG['skin']['upload'] = '上傳';
$_LANG['skin']['login'] = '登入';
$_LANG['skin']['logout'] = '登出';

///////////////////////////////////////
// Plug-in message
///////////////////////////////////////
// add.inc.php
$_title_add = '新增至 $1';
$_msg_add = '新增的內容將插入目前頁面內容的末尾，並以兩個換行符號分隔。';

///////////////////////////////////////
// article.inc.php
$_btn_name    = '姓名：';
$_btn_article = '送出文章';
$_btn_subject = '主題：';
$_msg_article_mail_sender = '寄件人：';
$_msg_article_mail_page   = '頁面：';


///////////////////////////////////////
// attach.inc.php
$_attach_messages = array(
    'msg_uploaded' => '已上傳檔案到 $1',
    'msg_deleted'  => '刪除在 $1 中的檔案',
    'msg_freezed'  => '檔案已被封鎖',
    'msg_unfreezed'=> '檔案已被解封',
    'msg_renamed'  => '已重新命名附件。',
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
    'msg_rename'   => '重新命名此檔案。',
    'msg_newname'  => '新名稱',
    'msg_require'  => '(需要管理員密碼)',
    'msg_filesize' => '大小',
    'msg_date'     => '日期',
    'msg_dlcount'  => '存取數',
    'msg_md5hash'  => 'MD5',
    'msg_page'     => '頁面',
    'msg_filename' => '儲存的檔名',
    'err_noparm'   => '不能上傳或刪除檔案於 $1',
    'err_exceed'   => '檔案大小超過 $1',
    'err_exists'   => '$1 中已存在同名檔案',
    'err_notfound' => '在 $1 中找不到該檔案',
    'err_noexist'  => '沒有附加檔案。',
    'err_delete'   => '無法從 $1 刪除檔案',
    'err_rename'   => '無法重新命名檔案',
    'err_password' => '密碼不符。',
    'err_adminpass'=> '管理員密碼不符。',
    'btn_upload'   => '上傳',
    'btn_info'     => '詳細資訊',
    'btn_submit'   => '執行'
);

///////////////////////////////////////
// back.inc.php
$_msg_back_word = '返回';

///////////////////////////////////////
// backup.inc.php
$_title_backup_delete = '刪除 $1 的備份';
$_title_backupdiff = '$1 (No.$2) 的備份差異';
$_title_backupnowdiff = '$1 (No.$2) 的備份和目前版本的差異';
$_title_backupsource = '$1 (No.$2) 的備份原始碼';
$_title_backup = '$1 (No.$2) 的備份';
$_title_backuprestore = '$1 (No.$2) 的復原';
$_title_pagebackuplist = '$1 的備份清單';
$_msg_backup_deleted = '$1 的備份已經刪除。';
$_msg_backup_adminpass = '請輸入管理員的密碼。';
$_msg_backuplist = '備份清單列表';
$_msg_nobackup = '沒有 $1 的備份。';
$_msg_diff = '差異';
$_msg_nowdiff = '和目前版本的差異';
$_msg_source = '原始碼';
$_msg_backup = '備份';
$_msg_view = '檢視 $1 。';
$_msg_deleted = '$1 已經刪除。';

///////////////////////////////////////
// calendar_viewer.inc.php
$_err_calendar_viewer_param  = '需要參數。';
$_err_calendar_viewer_param2 = '第二個參數錯誤。';
$_msg_calendar_viewer_right  = '下一個 %d&gt;&gt;';
$_msg_calendar_viewer_left   = '&lt;&lt; 上一個 %d';
$_msg_calendar_viewer_restrict = '由於 $1 已啟用瀏覽限制，無法透過 calendar_viewer 進行參考。';

///////////////////////////////////////
// calendar2.inc.php
$_calendar2_plugin_edit = '[編輯]';
$_calendar2_plugin_empty = '您要不要寫一下 [%s]';

///////////////////////////////////////
// comment.inc.php
$_btn_name = '姓名：';
$_btn_comment = '送出';
$_msg_comment = '評論：';
$_title_comment_collided = '在 $1 發現衝突。';
$_msg_comment_collided = '看起來在您編輯此頁面時，其他使用者已更新了相同的頁面。<br />
雖然評論已新增，但可能插入在不同的位置。<br />';
$_comment_plugin_fail_msg = '看起來在您編輯此頁面時，其他使用者已更新了相同的頁面。<br />
新增評論失敗。<br />';

///////////////////////////////////////
// deleted.inc.php
$_deleted_plugin_title = '已刪除頁面列表';
$_deleted_plugin_title_withfilename = '已刪除頁面檔案列表';

///////////////////////////////////////
// diff.inc.php
$_title_diff = '$1 的差異';
$_title_diff_delete  = '刪除 $1 的差異';
$_msg_diff_deleted   = '已刪除 $1 的差異。';
$_msg_diff_adminpass = '請輸入管理員密碼以刪除差異。';

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
// insert.inc.php
$_btn_insert = '插入';

///////////////////////////////////////
// include.inc.php
$_msg_include_restrict = '由於已啟用瀏覽限制，$1 無法被包含。';

///////////////////////////////////////
// interwiki.inc.php
$_title_invalidiwn = '這不是有效的 InterWiki 名稱';

///////////////////////////////////////
// list.inc.php
$_title_list = '頁面列表';

///////////////////////////////////////
// ls2.inc.php
$_ls2_err_nopages = '<p>\'$1\' 目前尚未有子頁面</p>';
$_ls2_msg_title = '列出以 \'$1\' 開頭的頁面';

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
    'btn_submit'    => '繪圖',
    'msg_max'       => '(最大 %d x %d)',
    'msg_title'     => '繪圖並附加到 $1',
    'msg_title_collided' => '$1 發生更新衝突。',
    'msg_collided'  => '在您編輯此頁面時，其他人已更新了相同的頁面。<br />
新增圖片和評論到頁面，但可能發生問題。<br />'
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
    'title_collided' => '$1 發生更新衝突。',
    'msg_collided' => '在您編輯此頁面時，其他人已更新了相同的頁面。<br />
新增評論至頁面，但可能發生問題。<br />',
    'err_pagename' => '[[%s]] : 無效的頁面名稱。',
);
$_msg_pcomment_restrict = '由於已開始瀏覽限制，因此無法從 $1 讀取評論。';

///////////////////////////////////////
// popular.inc.php
$_popular_plugin_frame = '<h5><center>熱門話題(%d)</center></h5><div>%s</div>';
$_popular_plugin_today_frame = '<h5><center>今日熱門(%d)</center></h5><div>%s</div>';

///////////////////////////////////////
// recent.inc.php
$_recent_plugin_frame = '<h5><center>近期更動(%d)</center></h5><div>%s</div>';


///////////////////////////////////////
// rename.inc.php
$_rename_messages  = array(
    'err' => '<p>錯誤：%s</p>',
    'err_nomatch' => '沒有匹配的頁面',
    'err_notvalid' => '重新命名後的頁面名稱無效。',
    'err_adminpass' => '管理員密碼不匹配。',
    'err_notpage' => '%s 不是頁面名稱。',
    'err_norename' => '無法重新命名 %s。',
    'err_already' => '已經存在：%s',
    'err_already_below' => '以下檔案已經存在。',
    'msg_title' => '頁面更名',
    'msg_page' => '指定來源頁面名稱',
    'msg_regex' => '使用正則表達式更名。',
    'msg_related' => '相關頁面',
    'msg_do_related' => '相關頁面也被重新命名。',
    'msg_rename' => '%s 更名',
    'msg_oldname' => '現在的名稱',
    'msg_newname' => '新的名稱',
    'msg_adminpass' => '管理員密碼',
    'msg_arrow' => '->',
    'msg_exist_none' => '當頁面已經存在時不處理。',
    'msg_exist_overwrite' => '當頁面已經存在時覆蓋。',
    'msg_confirm' => '以下檔案將被重新命名。',
    'msg_result' => '以下檔案已被覆蓋。',
    'btn_submit' => '送出',
    'btn_next' => '下一個'
);

///////////////////////////////////////
// search.inc.php
$_title_search = '搜尋';
$_title_result = '$1 的搜尋結果';
$_msg_searching = '將從所有頁面搜尋文字（不區分大小寫）。';
$_btn_search = '搜尋';
$_btn_and = 'AND 搜尋';
$_btn_or = 'OR 搜尋';
$_search_pages  = '搜尋以 $1 開頭的頁面';
$_search_all    = '搜尋所有頁面';
$_search_searching = '搜尋中...';
$_search_showing_result = '顯示搜尋結果';
$_search_detail = '詳細顯示';

///////////////////////////////////////
// source.inc.php
$_source_messages = array(
    'msg_title' => '$1 的原始碼',
    'msg_notfound' => '找不到 $1',
    'err_notfound' => '無法顯示頁面原始碼。'
);

///////////////////////////////////////
// template.inc.php
$_msg_template_start   = '開始行：<br />';
$_msg_template_end     = '結束行：<br />';
$_msg_template_page    = '$1/複製';
$_msg_template_refer   = '頁面名稱：';
$_msg_template_force   = '使用現有頁面名稱編輯';
$_err_template_already = '$1 已經存在。';
$_err_template_invalid = '$1 不是有效的頁面名稱。';
$_btn_template_create  = '建立';
$_title_template       = '使用 $1 作為範本建立新頁面。';

///////////////////////////////////////
// tracker.inc.php
$_tracker_messages = array(
    'msg_list' => '$1 的項目列表',
    'msg_back' => '<p>$1</p>',
    'msg_limit' => '顯示 $1 個項目中的前 $2 個。',
    'btn_page' => '頁面',
    'btn_name' => '名稱',
    'btn_real' => '真實名稱',
    'btn_submit' => '新增',
    'btn_date' => '日期',
    'btn_refer' => '參考頁面',
    'btn_base' => '基礎頁面',
    'btn_update' => '更新',
    'btn_past' => '經過時間',
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
$_title_versionlist = '構成檔案的版本一覽';

///////////////////////////////////////
// vote.inc.php
$_vote_plugin_choice = '選項';
$_vote_plugin_votes = '投票';

///////////////////////////////////////
// yetlist.inc.php
$_title_yetlist = '未建立的頁面列表';
$_err_notexist = '沒有未建立的頁面。';

///////////////////////////////////////
// loginform.inc.php
$_loginform_messages = array(
    'username' => '使用者名稱：',
    'password' => '密碼：',
    'login' => '登入',
    'invalid_username_or_password' => '使用者名稱或密碼錯誤'
);

///////////////////////////////////////
// external_link.inc.php
$_external_link_messages = array(
    'page_title' => '外部連結：%s',
    'desc' => '選取的 URL 不是本網站的內容。',
    'wait_n_seconds' => '%s 秒後自動前往。',
);
