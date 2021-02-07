<?php
/**
 *
 * @package SQL Parser
 * @script install/db_update.php
 * @copyright (c) 2005 phpBB Group
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License
 *
 *
 * - WARNINGS:
 *   *** This script contains SQL/DLL statements that will modify your database!!!
 *   *** The SQL/DDL statements contained in this script are optimized for MySQL only!
 *
 * - Installation:
 *   1) Make backups of your database before proceeding!
 *   2) Create a subdirectory named "install" (without quotes) in your phpBB installation.
 *   3) Save this file as "db_update.php" and upload to your newly created install directory.
 *   4) Now, open the script using your browser of choice as in the following example:
 *      http://www.example.com/forums/install/db_update.php
 *      ...and follow instructions.
 *   5) Once, your DB has been updated, remove the install directory and this file.
 *
 * - Notes:
 *   - This script can only be run by board administrators.
 *   - First, a confirmation panel will show all SQL statements.
 *   - Your database will only be updated once the confirmation panel has been confirmed.
 *
 */

define('IN_PHPBB', true);
$phpbb_root_path = '../';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);
$gen_simple_header = true;

//
// Language entries used in this script.
//
$lang += array(
	'Update_confirm'			=> 'This panel will update your database with the SQL statements detailed below.<br /><br />Remember to make backups of your database before proceeding!<hr /><table><tr><td><pre>%s</pre></td></tr></table><hr />Click <i>Yes</i> to proceed or <i>No</i> to return to your board index.',
	'Updating_database'			=> 'Updating the Database',
	'Installation_complete'		=> 'Installation Complete',
	'Delete_this_file'			=> 'Please, be sure to delete your install directory and this file from your phpBB installation now.',
	'Successful'				=> 'Successful'
);

//
// Session Management.
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);

//
// Only administrators here, please
//
if( !$userdata['session_logged_in'] )
{
	redirect(append_sid("login.$phpEx?redirect=".basename(__FILE__), true));
}
if( $userdata['user_level'] != ADMIN )
{
	if ( @file_exists($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin.' . $phpEx) )
	{
		include($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_admin.' . $phpEx);
	}
	else
	{
		include($phpbb_root_path . 'language/lang_english/lang_admin.' . $phpEx);
	}
	message_die(GENERAL_MESSAGE, $lang['Not_admin']);
}

//
// Build Array of SQL Statements.
//
$sql = array();
$sql[] = 'ALTER TABLE ' . $table_prefix . 'users ADD user_from_flag VARCHAR(25) NULL';
$sql[] = 'CREATE TABLE ' . $table_prefix . 'flags (
    flag_id INTEGER(10) NOT NULL AUTO_INCREMENT,
    flag_name VARCHAR(50),
    flag_image VARCHAR(25),
    PRIMARY KEY (flag_id)
)';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'af.gif\',\'���I��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ax.gif\',\'���Jù���Q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'al.gif\',\'�����ڥ���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ag.gif\',\'�����ΧQ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'aq.gif\',\'�����ļ���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'an.gif\',\'�w�D��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ao.gif\',\'�w����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'av.gif\',\'�w�c��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ac.gif\',\'�w�a�d\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ar.gif\',\'���ڧ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'am.gif\',\'�Ȭ�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'aa.gif\',\'���|��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'at.gif\',\'���h���d�����s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'as.gif\',\'�D�j�Q��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'au.gif\',\'���a�Q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'aj.gif\',\'�ȶ���M\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bf.gif\',\'�ګ���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ba.gif\',\'�ڪL\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fq.gif\',\'���J�s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bg.gif\',\'�s�[��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bb.gif\',\'�ڨ��h\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bs.gif\',\'�L���G\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bo.gif\',\'�իXù��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'be.gif\',\'��Q��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bh.gif\',\'������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bn.gif\',\'���n\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bd.gif\',\'�ʼ}�F\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bt.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bl.gif\',\'���Q����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bk.gif\',\'�i�h���Ȼ��������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bc.gif\',\'�i����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bv.gif\',\'�i���S�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'br.gif\',\'�ڦ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'io.gif\',\'�^�ݦL�׬v�a��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'vi.gif\',\'�^�ݺ����ʸs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bx.gif\',\'�Z��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bu.gif\',\'�O�[�Q��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'uv.gif\',\'���N�Ǫk��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bm.gif\',\'�q�l\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'by.gif\',\'�Z���a\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cb.gif\',\'�Z�H��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cm.gif\',\'�س���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ca.gif\',\'�[���j\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cv.gif\',\'���w��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cj.gif\',\'�}�Ҹs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ct.gif\',\'���D\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cd.gif\',\'�d�w\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ci.gif\',\'���Q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ch.gif\',\'China\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'kt.gif\',\'�t�Ϯq\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ip.gif\',\'�J�Q�Ĺy�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ck.gif\',\'�i�i���s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'co.gif\',\'���ۤ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cn.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cg.gif\',\'��G���D�@�M��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cf.gif\',\'��G\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cw.gif\',\'�w�J�s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cr.gif\',\'������s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cs.gif\',\'�����j���[\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'iv.gif\',\'�H������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'hr.gif\',\'�Jù�J���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cu.gif\',\'�j��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cy.gif\',\'�ɴ��Ǵ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ez.gif\',\'���J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'da.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'dx.gif\',\'�w�ͧQ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'dj.gif\',\'�N���a\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'do.gif\',\'�h�̥��J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'dr.gif\',\'�h�����[\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tt.gif\',\'�F�ҨZ\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ec.gif\',\'�̥ʦh\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'eg.gif\',\'�J�Ϊ��ԧB\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'es.gif\',\'�ĺ��˦h\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ek.gif\',\'���D�X����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'er.gif\',\'�̧Q����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'en.gif\',\'�R�F����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'et.gif\',\'�������p�����D�@�M��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'eu.gif\',\'��ù���q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fk.gif\',\'�֧J���s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fo.gif\',\'�kù�s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fj.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fi.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fr.gif\',\'�k����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fg.gif\',\'�k�ݦc�Ȩ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fp.gif\',\'�k�ݬ��������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fs.gif\',\'�k�ݫn�b�y�M�n���a��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gb.gif\',\'�[�^\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ga.gif\',\'�̤��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gg.gif\',\'��v��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gm.gif\',\'�w�N��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gh.gif\',\'�{��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gi.gif\',\'����ù��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'go.gif\',\'�欥�ؤ̴��s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gr.gif\',\'��þ\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gl.gif\',\'�泮��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gj.gif\',\'��稺�F\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gp.gif\',\'�ʼw�|���q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gq.gif\',\'���q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gt.gif\',\'�ʦa����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gk.gif\',\'�^�ݮڮ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gv.gif\',\'�X����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pu.gif\',\'�X���Ȥ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'gy.gif\',\'�\�Ȩ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ha.gif\',\'���a\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'hm.gif\',\'���w�γ���Ҹs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'vt.gif\',\'�Ч�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ho.gif\',\'�����Դ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'hk.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'hq.gif\',\'�����q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'hu.gif\',\'�I���Q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ic.gif\',\'�B�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'in.gif\',\'�L��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'id.gif\',\'�L�ץ����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ir.gif\',\'���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'iz.gif\',\'��ԧJ\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ei.gif\',\'�R����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'im.gif\',\'�^�ݰ����q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'is.gif\',\'�H��C\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'it.gif\',\'�q�j�Q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'jm.gif\',\'���R�[\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'jn.gif\',\'���֮q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ja.gif\',\'�饻\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'dq.gif\',\'�[�����q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'je.gif\',\'�^�ݿA��q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'jq.gif\',\'�ⴵ�y�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'jo.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ju.gif\',\'�U�եˮq\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'kz.gif\',\'���ħJ\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ke.gif\',\'�֨�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'kq.gif\',\'�ʰҮq\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'kr.gif\',\'�N���ڴ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'kn.gif\',\'�_��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ks.gif\',\'�j������(�n��)\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ku.gif\',\'��¯S\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'kg.gif\',\'�N���N��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'la.gif\',\'�d��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'lg.gif\',\'�Բ����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'le.gif\',\'���ڹ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'lt.gif\',\'�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'li.gif\',\'�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ly.gif\',\'�Q���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ls.gif\',\'�C�䴰���n\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'lh.gif\',\'�߳��{\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'lu.gif\',\'�c�˳�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mc.gif\',\'�D��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mk.gif\',\'����y\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ma.gif\',\'���F�[���[\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mi.gif\',\'���ԫ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'my.gif\',\'���Ӧ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mv.gif\',\'�����a��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ml.gif\',\'���Q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mt.gif\',\'�����L\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'rm.gif\',\'���к��s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mb.gif\',\'�k�ݰ��B���J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mr.gif\',\'�T�Q�𥧨�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mp.gif\',\'�Ҩ��贵\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mf.gif\',\'�����S\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mx.gif\',\'�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'fm.gif\',\'�K�Jù�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mq.gif\',\'���~�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'md.gif\',\'�����h��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mn.gif\',\'���ǭ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mg.gif\',\'�X�j\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mh.gif\',\'�X��ԯS�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mo.gif\',\'������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mz.gif\',\'���T��J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'wa.gif\',\'�Ǧ̤��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nr.gif\',\'�վ|\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bq.gif\',\'�����Įq\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'np.gif\',\'���y��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nl.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nt.gif\',\'���ݦw�a�C��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nc.gif\',\'�s�ب��h���Ȯq\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nz.gif\',\'�æ���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nu.gif\',\'���[�ԥ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ng.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ni.gif\',\'�`�ΧQ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ne.gif\',\'�îJ\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nf.gif\',\'�պ֧J�s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'cq.gif\',\'�_�����ȯǸs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'no.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'mu.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pk.gif\',\'�ڰ򴵩Z\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ps.gif\',\'���[\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'lq.gif\',\'���کԮq\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pm.gif\',\'�ڮ���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pp.gif\',\'�ڥ��ȯôX����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pa.gif\',\'�کԦc\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pe.gif\',\'���|\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'rp.gif\',\'��߻�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pc.gif\',\'�֯S�d�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'pl.gif\',\'�i��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'po.gif\',\'�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'rq.gif\',\'�i�h���U\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'qa.gif\',\'�d�F\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'re.gif\',\'�d����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ro.gif\',\'ù������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'rs.gif\',\'�Xù��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'rw.gif\',\'�c�w�F\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sh.gif\',\'�t���Ǯ��q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sc.gif\',\'�t�J�����h��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'st.gif\',\'�t�S���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sb.gif\',\'�t�ǤαK�ҭ۸s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'vc.gif\',\'�t���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ws.gif\',\'�ļ���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sm.gif\',\'�t���Q��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tp.gif\',\'�t�h�����L���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sa.gif\',\'�F�Q�a���ԧB\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sg.gif\',\'�뤺�[��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'yi.gif\',\'�뺸���ȻP�X�S����ù\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'se.gif\',\'��u��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sl.gif\',\'��l�s�@�M��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sn.gif\',\'�s�[�Y\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'lo.gif\',\'������J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'si.gif\',\'����������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'bp.gif\',\'��ù���s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'so.gif\',\'�����Q��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sf.gif\',\'�n�D\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sx.gif\',\'�n��v�ȤΫn��©_�s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sp.gif\',\'��Z��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ce.gif\',\'�������d\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'su.gif\',\'Ĭ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ns.gif\',\'Ĭ�Q�n\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sv.gif\',\'���˺��ڸs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'wz.gif\',\'�v������\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sw.gif\',\'���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sz.gif\',\'��h\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'sy.gif\',\'�ԧQ��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ti.gif\',\'��N�J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tz.gif\',\'�Z�|����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'th.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'to.gif\',\'�h��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tl.gif\',\'��J�Ҹs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tn.gif\',\'�F�[\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'td.gif\',\'�d���F\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'te.gif\',\'�Sù�i���q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ts.gif\',\'�𥧦��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tu.gif\',\'�g�ը�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tx.gif\',\'�g�w��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tk.gif\',\'�g�J���ζ}�촵�s�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tv.gif\',\'�R�˾|\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ug.gif\',\'�Q�z�F\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'up.gif\',\'�Q�J��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ae.gif\',\'���ԧB�p�X�j����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'uk.gif\',\'�^��\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'us.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'um.gif\',\'United States Pacific Island Wildlife Refuges\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'uy.gif\',\'�Q�Ԧc\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'uz.gif\',\'�Q���O�J\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'nh.gif\',\'�U����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ve.gif\',\'�e�����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'vm.gif\',\'�V�n\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'vq.gif\',\'�����ʸs�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'wq.gif\',\'�§J�q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'wf.gif\',\'�U�����P��𨺮q\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ym.gif\',\'����\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'za.gif\',\'�|���\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'zi.gif\',\'���ګ�\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'tw.gif\',\'���ئW��(�x�W)\')';
$sql[] = 'INSERT INTO ' . $table_prefix . 'flags(flag_id,flag_image,flag_name) VALUES(\'\',\'ee.gif\',\'�ڷ�\')';
$sql_count = count($sql);

//
// Output confirmation page?
//
$cancel = isset($HTTP_POST_VARS['cancel']) ? true : false;
$confirm = isset($HTTP_POST_VARS['confirm']) ? true : false;
$mode = isset($HTTP_POST_VARS['mode']) ? trim(htmlspecialchars($HTTP_POST_VARS['mode'])) : '';

if( $cancel )
{
	redirect(append_sid("index.$phpEx", true));
}

if( !$confirm || $mode != 'db_update' )
{
	include($phpbb_root_path . 'includes/page_header.'.$phpEx);

	$template->set_filenames(array(
		'confirm_body' => 'confirm_body.tpl')
	);

	$message = sprintf($lang['Update_confirm'], implode(";\n\n", $sql));

	$s_hidden_fields = '<input type="hidden" name="mode" value="db_update" />';

	$template->assign_vars(array(
		'L_INDEX'			=> '',
		'MESSAGE_TITLE'		=> $lang['Information'],
		'MESSAGE_TEXT'		=> $message,
		'L_YES'				=> $lang['Yes'],
		'L_NO'				=> $lang['No'],
		'S_CONFIRM_ACTION'	=> append_sid(basename(__FILE__)),
		'S_HIDDEN_FIELDS'	=> $s_hidden_fields)
	);

	$template->pparse('confirm_body');

	include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
}

//
// Send Page Header.
//
$page_title = $lang['Updating_database'];
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

//
// Execute SQL and get Results.
//
$sql_rows = '';
for( $i = 0; $i < $sql_count; $i++ )
{
	if( !($result = $db->sql_query($sql[$i])) )
	{
		$error = $db->sql_error();
		$color = '#FF0000';
		$success = $lang['Error'] . ':';
		$errmsg = ' ' . $error['message'];
	}
	else
	{
		$color = '#00AA00';
		$success = $lang['Successful'];
		$errmsg = '';
	}
	$class = ($i%2) == 0 ? 'row1' : 'row2';
	$sql_rows .= '<tr><td class="'.$class.'"><div class="genmed">' . $sql[$i] . ';<br /><br /><b style="color:' . $color . ';">' . $success . '</b>' . $errmsg . '</div></td></tr>';
}

//
// Build the Report.
//
$click_return_index = sprintf($lang['Click_return_index'], '<a class="genmed" href="' . append_sid($phpbb_root_path . "index.$phpEx") . '">', '</a>');

$html = <<<EOT
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="forumline">
	<tr>
		<th>{$page_title}</th>
	</tr>
	<tr>
		<td>
			<table cellpadding="8" cellspacing="1" border="0" align="center">
				{$sql_rows}
			</table>
		</td>
	</tr>
	<tr>
		<td class="row3"><img src="{$phpbb_root_path}images/spacer.gif" border="0" height="4" alt="" /></td>
	</tr>
	<tr>
		<th>{$lang['Installation_complete']}</th>
	</tr>
	<tr>
		<td align="center">
			<table cellpadding="8" cellspacing="0" border="0" align="center">
				<tr>
					<td>
						<b class="gen" style="color:#EE0000;">{$lang['Delete_this_file']}</b>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="catBottom" align="center">
			<span class="genmed">{$click_return_index}</span>
		</td>
	</tr>
</table>
EOT;
echo $html;

//
// Send Page Footer.
//
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>