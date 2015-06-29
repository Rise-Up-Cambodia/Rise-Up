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
class LC_Page_Admin_Brand_brand extends LC_Page_Admin_Ex {

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

        $this->tpl_mainpage = 'brand/brand.tpl';
        $this->tpl_mainno   = 'brand';
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
        $dbname = "rise_up_shop";
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

        $objDb = new SC_Helper_DB_Ex();

        $objDate = new SC_Date_Ex();
        $this->arrMonth = $objDate->getMonth();
        $this->arrDay = $objDate->getDay();

        $mode = $this->getMode();


        if (!empty($_POST)) {

            $objFormParam = new SC_FormParam_Ex();
            $objFormParam->setParam($_POST);
            $objFormParam->convParam();
            $brand_id = $objFormParam->getValue('brand_id');

            if (!empty($this->arrErr['brand_id'])) {
                trigger_error('', E_USER_ERROR);
                return;
            }

            $post = $objFormParam->getHashArray();
        }
        // 要求判定
        switch ($mode) {
            // 編集処理
            case 'edit':
                // POST値の引き継ぎ
                $this->arrForm = $this->arrForm = $_POST;

                if (count($this->arrErr) <= 0) {
                    // 新規作成
                    if ($post['brand_id'] == '') {
                        $this->lfInsertClass($this->arrForm, $_SESSION['member_id']);
                    }
                    // 既存編集
                    else {
                        $this->lfUpdateClass($this->arrForm, $post['brand_id']);
                    }

                    // 再表示
                    $this->objDisplay->reload();
                } else {
                    // POSTデータを引き継ぐ
                    $this->tpl_brand_id = $post['brand_id'];
                }
                break;

            case 'down':
                $objDb->sfRankDown('dtb_brand', 'brand_id', $post['brand_id']);

                // 再表示
                $this->objDisplay->reload();
                break;
            case 'up':
                $objDb->sfRankUp('dtb_brand', 'brand_id', $post['brand_id']);

                // 再表示
                $this->objDisplay->reload();
                break;
            default:
                break;
        }


        $this->tpl_brand_id = $brand_id;


    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }

    function lfGetHolidayDataByHolidayID($brand_id) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $where = 'brand_id = ?';
        return $objQuery->select('name, description, address,email,website,image_path', 'dtb_brand', $where, array($brand_id));
    }


    /* DBへの挿入 */
    function lfInsertClass($arrData, $member_id) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        // INSERTする値を作成する。
        $sqlval['name'] = $arrData['name'];
        $sqlval['description'] = $arrData['description'];
        $sqlval['address'] = $arrData['address'];
        $sqlval['email'] = $arrData['email'];
        $sqlval['website'] = $arrData['website'];


        move_uploaded_file($_FILES['image_path']['tmp_name'], '../../upload/brand/' . $_FILES['image_path']['name']);

        $sqlval['image_path'] = $_FILES['image_path']['name'];

        $ret = $objQuery->insert('dtb_brand', $sqlval);
        return $ret;
    }






    function lfInitParam($mode, &$objFormParam, $brand_id) {
        switch ($mode) {
            case 'edit':
                $objFormParam->addParam(t('c_Title_01'), 'name', STEXT_LEN, 'KVa', array('EXIST_CHECK','SPTAB_CHECK','MAX_LENGTH_CHECK'));
                $objFormParam->addParam(t('c_Month_01'), 'description', INT_LEN, 'n', array('SELECT_CHECK','SPTAB_CHECK','MAX_LENGTH_CHECK'));
                $objFormParam->addParam(t('c_Day_01'), 'email', INT_LEN, 'n', array('SELECT_CHECK','SPTAB_CHECK','MAX_LENGTH_CHECK'));
            // breakしない
            case 'delete':
            case 'pre_edit':
            case 'down':
            case 'up':
                $objFormParam->addParam(t('c_Regular holiday ID_01'), 'brand_id', INT_LEN, 'n', array('NUM_CHECK', 'MAX_LENGTH_CHECK'));
                break;
            default:
                break;
        }

        function lfCheckError($mode, &$objFormParam) {
            $objFormParam->convParam();
            $arrErr = $objFormParam->checkError();
            $post = $objFormParam->getHashArray();


        }


    }
}