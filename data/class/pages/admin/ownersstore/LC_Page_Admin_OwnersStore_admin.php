<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2012 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

// {{{ requires
require_once CLASS_EX_REALDIR . 'page_extends/admin/LC_Page_Admin_Ex.php';

/**
 * オーナーズストア：認証キー設定 のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Admin_OwnersStore_Settings.php 22500 2013-02-05 03:51:23Z m_uehara $
 */
class LC_Page_Admin_OwnersStore_admin extends LC_Page_Admin_Ex {

    /** SC_FormParamのインスタンス */
    var $objForm;

    /** リクエストパラメーターを格納する連想配列 */
    var $arrForm;

    /** バリデーションエラー情報を格納する連想配列 */
    var $arrErr;

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();

        $this->tpl_mainpage = 'ownersstore/admin.tpl';
        $this->tpl_mainno   = 'ownersstore';
        $this->tpl_subno    = 'admin';
        $this->tpl_maintitle = t('c_Owners Store_01');
        $this->tpl_subtitle = t('c_Authentication key settings_01');
        $this->httpCacheControl('nocache');

        $this->tpl_page_category = 'abouts';
        $this->tpl_title = t('c_About this site_01');
        $masterData = new SC_DB_MasterData_Ex();
        $this->arrPref = $masterData->getMasterData('mtb_pref');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {

        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "eccube_vanda";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if($conn){


            $sql="SELECT * FROM dtb_brand";
            $result = mysqli_query($conn,$sql);
            $arr = [];
            $i = 0;
            while($row = mysqli_fetch_object($result)){
                $arr[$i]['brand_id'] = $row->brand_id;
                $arr[$i]['name'] = $row->name;
                $arr[$i]['image_path'] = $row->image_path;
                $arr[$i]['description'] = $row->description;
                $arr[$i]['email'] = $row->email;
                $arr[$i]['address'] = $row->address;
                $arr[$i]['website'] = $row->website;
                $i++;
            }
            $this->arrResults=$arr;

        }

        switch ($this->getMode()) {
            // 入力内容をDBへ登録する
            case 'register':
                $this->execRegisterMode();
                break;
            // 初回表示
            default:
                $this->execDefaultMode();
        }

    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }

    /**
     * registerアクションの実行.
     * 入力内容をDBへ登録する.
     *
     * @param void
     * @return void
     */
    function execRegisterMode() {
        // パラメーターオブジェクトの初期化
        $this->initRegisterMode();
        // POSTされたパラメーターの検証
        $arrErr = $this->validateRegistermode();

        // エラー時の処理
        if (!empty($arrErr)) {
            $this->arrErr  = $arrErr;
            $this->arrForm = $this->objForm->getHashArray();
            return;
        }

        // エラーがなければDBへ登録
        $arrForm = $this->objForm->getHashArray();
        $this->registerOwnersStoreSettings($arrForm);

        $this->arrForm = $arrForm;

        $this->tpl_onload = "alert('" . t('c_Registration is complete._01') . "')";
    }

    /**
     * registerアクションの初期化.
     * SC_FormParamを初期化しメンバ変数にセットする.
     *
     * @param void
     * @return void
     */
    function initRegisterMode() {
        // 前後の空白を削除
        if (isset($_POST['note'])) {
            $_POST['note'] = trim($_POST['note']);
        }

        $objForm = new SC_FormParam_Ex();
        $objForm->addParam(t('c_Authentication key_01'), 'note', LTEXT_LEN, '', array('EXIST_CHECK', 'ALNUM_CHECK', 'MAX_LENGTH_CHECK'));
        $objForm->setParam($_POST);

        $this->objForm = $objForm;
    }

    /**
     * registerアクションのパラメーターを検証する.
     *
     * @param void
     * @return array エラー情報を格納した連想配列
     */
    function validateRegistermode() {
        return $this->objForm->checkError();
    }

    /**
     * defaultアクションの実行.
     * DBから登録内容を取得し表示する.
     *
     * @param void
     * @return void
     */
    function execDefaultMode() {
        $this->arrForm = $this->getOwnersStoreSettings();
    }

    /**
     * DBへ入力内容を登録する.
     *
     * @param array $arrSettingsData ｵｰﾅｰｽﾞｽﾄｱ設定の連想配列
     * @return void
     */
    function registerOwnersStoreSettings($arrSettingsData) {
        $table = 'dtb_ownersstore_note';
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $exists = $objQuery->exists($table);

        if ($exists) {
            $objQuery->update($table, $arrSettingsData);
        } else {
            $objQuery->insert($table, $arrSettingsData);
        }
    }

    /**
     * DBから登録内容を取得する.
     *
     * @param void
     * @return array
     */
    function getOwnersStoreSettings() {
        $table   = 'dtb_ownersstore_note';
        $colmuns = '*';

        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $arrRet = $objQuery->select($colmuns, $table);

        if (isset($arrRet[1])) return $arrRet[1 ];

        return array();
    }
}
