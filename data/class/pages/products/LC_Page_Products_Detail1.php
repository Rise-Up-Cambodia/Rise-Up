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
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

if (file_exists(MODULE_REALDIR . 'mdl_gmopg/inc/function.php')) {
    require_once MODULE_REALDIR . 'mdl_gmopg/inc/function.php';
}
/**
 * 商品詳細 のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id:LC_Page_Products_Detail1.php 15532 2007-08-31 14:39:46Z nanasess $
 */
class LC_Page_Products_Detail extends LC_Page_Ex {

    /** 商品ステータス */
    var $arrSTATUS;

    /** 商品ステータス画像 */
    var $arrSTATUS_IMAGE;

    /** 発送予定日 */
    var $arrDELIVERYDATE;

    /** おすすめレベル */
    var $arrRECOMMEND;

    /** フォームパラメーター */
    var $objFormParam;

    /** アップロードファイル */
    var $objUpFile;

    /** モード */
    var $mode;

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $masterData = new SC_DB_MasterData_Ex();

    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のAction.
     *
     * @return void
     */
    function action() {
        // 会員クラス
        $objCustomer = new SC_Customer_Ex();

        // パラメーター管理クラス
        $this->objFormParam = new SC_FormParam_Ex();
        // パラメーター情報の初期化
        $this->arrForm = $this->lfInitParam($this->objFormParam);
        // ファイル管理クラス
        $this->objUpFile = new SC_UploadFile_Ex(IMAGE_TEMP_REALDIR, IMAGE_SAVE_REALDIR);
        // ファイル情報の初期化
        $this->objUpFile = $this->lfInitFile($this->objUpFile);

        // プロダクトIDの正当性チェック
        $product_id = $this->lfCheckProductId($this->objFormParam->getValue('admin'),$this->objFormParam->getValue('brand_id'));
        $this->mode = $this->getMode();

        $objProduct = new SC_Product_Ex();
        $objProduct->setProductsClassByProductIds(array($product_id));

        // 規格1クラス名
        $this->tpl_class_name1 = $objProduct->className1[$product_id];

        // 規格2クラス名
        $this->tpl_class_name2 = $objProduct->className2[$product_id];

        // 規格1
        $this->arrClassCat1 = $objProduct->classCats1[$product_id];

        // 規格1が設定されている
        $this->tpl_classcat_find1 = $objProduct->classCat1_find[$product_id];
        // 規格2が設定されている
        $this->tpl_classcat_find2 = $objProduct->classCat2_find[$product_id];

        $this->tpl_stock_find = $objProduct->stock_find[$product_id];
        $this->tpl_product_class_id = $objProduct->classCategories[$product_id]['__unselected']['__unselected']['product_class_id'];
        $this->tpl_product_type = $objProduct->classCategories[$product_id]['__unselected']['__unselected']['product_type'];

        // 在庫が無い場合は、OnLoadしない。(javascriptエラー防止)
        if ($this->tpl_stock_find) {
            // 規格選択セレクトボックスの作成
            $this->js_lnOnload .= $this->lfMakeSelect();
        }

        $this->tpl_javascript .= 'classCategories = ' . SC_Utils_Ex::jsonEncode($objProduct->classCategories[$product_id]) . ';';
        $this->tpl_javascript .= 'function lnOnLoad(){' . $this->js_lnOnload . '}';
        $this->tpl_onload .= 'lnOnLoad();';

        // モバイル用 規格選択セレクトボックスの作成
        if (SC_Display_Ex::detectDevice() == DEVICE_TYPE_MOBILE) {
            $this->lfMakeSelectMobile($this, $product_id,$this->objFormParam->getValue('classcategory_id1'));
        }

        // 商品IDをFORM内に保持する
        $this->tpl_product_id = $product_id;

        switch ($this->mode) {
            case 'cart':
                $this->doCart();
                break;

            case 'add_favorite':
                $this->doAddFavorite($objCustomer);
                break;

            case 'add_favorite_sphone':
                $this->doAddFavoriteSphone($objCustomer);
                break;

            case 'select':
            case 'select2':
            case 'selectItem':
                /**
                 * モバイルの数量指定・規格選択の際に、
                 * $_SESSION['cart_referer_url'] を上書きさせないために、
                 * 何もせずbreakする。
                 */
                break;

            default:
                $this->doDefault();
                break;
        }

        // モバイル用 ポストバック処理
        if (SC_Display_Ex::detectDevice() == DEVICE_TYPE_MOBILE) {
            switch ($this->mode) {
                case 'select':
                    $this->doMobileSelect();
                    break;

                case 'select2':
                    $this->doMobileSelect2();
                    break;

                case 'selectItem':
                    $this->doMobileSelectItem();
                    break;

                case 'cart':
                    $this->doMobileCart();
                    break;

                default:
                    $this->doMobileDefault();
                    break;
            }
        }

        // 商品詳細を取得
        $this->arrProduct = $objProduct->getDetail($product_id);

        // サブタイトルを取得
        $this->tpl_subtitle = $this->arrProduct['name'];

        // 関連カテゴリを取得
        $this->arrRelativeCat = SC_Helper_DB_Ex::sfGetMultiCatTree($product_id);

        // 商品ステータスを取得
        $this->productStatus = $objProduct->getProductStatus($product_id);

        // 画像ファイル指定がない場合の置換処理
        $this->arrProduct['image_path']
            = SC_Utils_Ex::sfNoImageMain($this->arrProduct['image_path']);

        $this->subImageFlag = $this->lfSetFile($this->objUpFile,$this->arrProduct,$this->arrFile);
        //レビュー情報の取得
        $this->arrReview = $this->lfGetReviewData($product_id);

        //関連商品情報表示
        $this->arrRecommend = $this->lfPreGetRecommendProducts($product_id);

        // ログイン判定
        if ($objCustomer->isLoginSuccess() === true) {
            //お気に入りボタン表示
            $this->tpl_login = true;
            $this->is_favorite = SC_Helper_DB_Ex::sfDataExists('dtb_customer_favorite_products', 'customer_id = ? AND product_id = ?', array($objCustomer->getValue('customer_id'), $product_id));
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

    /* プロダクトIDの正当性チェック */
    function lfCheckProductId($admin_mode,$product_id) {
        // 管理機能からの確認の場合は、非公開の商品も表示する。
        if (isset($admin_mode) && $admin_mode == 'on') {
            SC_Utils_Ex::sfIsSuccess(new SC_Session_Ex());
            $status = true;
            $where = 'del_flg = 0';
        } else {
            $status = false;
            $where = 'del_flg = 0 AND status = 1';
        }

        if (!SC_Utils_Ex::sfIsInt($product_id)
            || SC_Utils_Ex::sfIsZeroFilling($product_id)
            || !SC_Helper_DB_Ex::sfIsRecord('dtb_products', 'product_id', (array)$product_id, $where)
        ) {
            SC_Utils_Ex::sfDispSiteError(PRODUCT_NOT_FOUND);
        }
        return $product_id;
    }

    /* ファイル情報の初期化 */
    function lfInitFile($objUpFile) {
        $objUpFile->addFile(t('c_Details - Main image_01'), 'main_image', array('jpg'), IMAGE_SIZE);
        for ($cnt = 1; $cnt <= PRODUCTSUB_MAX; $cnt++) {
            $objUpFile->addFile(t('c_Details - Sub image T_ARG1_01', array('T_ARG1' => $cnt)), "sub_image$cnt", array('jpg'), IMAGE_SIZE);
        }
        return $objUpFile;
    }

    /* 規格選択セレクトボックスの作成 */
    function lfMakeSelect() {
        return 'fnSetClassCategories('
        . 'document.form1, '
        . SC_Utils_Ex::jsonEncode($this->objFormParam->getValue('classcategory_id2'))
        . '); ';
    }

    /* 規格選択セレクトボックスの作成(モバイル) */
    function lfMakeSelectMobile(&$objPage, $product_id,$request_classcategory_id1) {

        $classcat_find1 = false;
        $classcat_find2 = false;

        // 規格名一覧
        $arrClassName = SC_Helper_DB_Ex::sfGetIDValueList('dtb_class', 'class_id', 'name');
        // 規格分類名一覧
        $arrClassCatName = SC_Helper_DB_Ex::sfGetIDValueList('dtb_classcategory', 'classcategory_id', 'name');
        // 商品規格情報の取得
        $arrProductsClass = $this->lfGetProductsClass($product_id);

        // 規格1クラス名の取得
        $objPage->tpl_class_name1 = $arrClassName[$arrProductsClass[0]['class_id1']];
        // 規格2クラス名の取得
        $objPage->tpl_class_name2 = $arrClassName[$arrProductsClass[0]['class_id2']];

        // すべての組み合わせ数
        $count = count($arrProductsClass);

        $classcat_id1 = '';

        $arrSele1 = array();
        $arrSele2 = array();

        for ($i = 0; $i < $count; $i++) {
            // 在庫のチェック
            if ($arrProductsClass[$i]['stock'] <= 0 && $arrProductsClass[$i]['stock_unlimited'] != '1') {
                continue;
            }

            // 規格1のセレクトボックス用
            if ($classcat_id1 != $arrProductsClass[$i]['classcategory_id1']) {
                $classcat_id1 = $arrProductsClass[$i]['classcategory_id1'];
                $arrSele1[$classcat_id1] = $arrClassCatName[$classcat_id1];
            }

            // 規格2のセレクトボックス用
            if ($arrProductsClass[$i]['classcategory_id1'] == $request_classcategory_id1 and $classcat_id2 != $arrProductsClass[$i]['classcategory_id2']) {
                $classcat_id2 = $arrProductsClass[$i]['classcategory_id2'];
                $arrSele2[$classcat_id2] = $arrClassCatName[$classcat_id2];
            }
        }

        // 規格1
        $objPage->arrClassCat1 = $arrSele1;
        $objPage->arrClassCat2 = $arrSele2;

        // 規格1が設定されている
        if (isset($arrProductsClass[0]['classcategory_id1']) && $arrProductsClass[0]['classcategory_id1'] != '0') {
            $classcat_find1 = true;
        }

        // 規格2が設定されている
        if (isset($arrProductsClass[0]['classcategory_id2']) && $arrProductsClass[0]['classcategory_id2'] != '0') {
            $classcat_find2 = true;
        }

        $objPage->tpl_classcat_find1 = $classcat_find1;
        $objPage->tpl_classcat_find2 = $classcat_find2;
    }

    /* パラメーター情報の初期化 */
    function lfInitParam(&$objFormParam) {
        $objFormParam->addParam(t('c_Standard 1_01'), 'classcategory_id1', INT_LEN, 'n', array('NUM_CHECK', 'MAX_LENGTH_CHECK'));
        $objFormParam->addParam(t('c_Standard 2_01'), 'classcategory_id2', INT_LEN, 'n', array('NUM_CHECK', 'MAX_LENGTH_CHECK'));
        $objFormParam->addParam(t('c_Quantity_01'), 'quantity', INT_LEN, 'n', array('EXIST_CHECK', 'ZERO_CHECK', 'NUM_CHECK', 'MAX_LENGTH_CHECK'));
        $objFormParam->addParam(t('c_Administrator login_01'), 'admin', INT_LEN, 'a', array('ALNUM_CHECK','MAX_LENGTH_CHECK'));
        $objFormParam->addParam(t('c_Product ID_01'), 'product_id', INT_LEN, 'n', array('EXIST_CHECK', 'ZERO_CHECK', 'NUM_CHECK', 'MAX_LENGTH_CHECK'));
        $objFormParam->addParam(t('c_Favorite product ID_01'), 'favorite_product_id', INT_LEN, 'n', array('ZERO_CHECK', 'NUM_CHECK', 'MAX_LENGTH_CHECK'));
        $objFormParam->addParam(t('c_Product specification ID_01'), 'product_class_id', INT_LEN, 'n', array('EXIST_CHECK', 'NUM_CHECK', 'MAX_LENGTH_CHECK'));
        // 値の取得
        $objFormParam->setParam($_REQUEST);
        // 入力値の変換
        $objFormParam->convParam();
        // 入力情報を渡す
        return $objFormParam->getFormParamList();
    }

    /* 商品規格情報の取得 */


    /* 登録済み関連商品の読み込み */
    function lfPreGetRecommendProducts($product_id) {
        $objProduct = new SC_Product_Ex();
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        $objQuery->setOrder('rank DESC');
        $arrRecommendData = $objQuery->select('recommend_product_id, comment', 'dtb_recommend_products as t1 left join dtb_products as t2 on t1.recommend_product_id = t2.product_id', 't1.product_id = ? and t2.del_flg = 0 and t2.status = 1', array($product_id));

        $arrRecommendProductId = array();
        foreach ($arrRecommendData as $recommend) {
            $arrRecommendProductId[] = $recommend['recommend_product_id'];
        }

        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $arrProducts = $objProduct->getListByProductIds($objQuery, $arrRecommendProductId);

        $arrRecommend = array();
        foreach ($arrRecommendData as $key => $arrRow) {
            $arrRecommendData[$key] = array_merge($arrRow, $arrProducts[$arrRow['recommend_product_id']]);
        }

        return $arrRecommendData;
    }

    /* 入力内容のチェック */


    //商品ごとのレビュー情報を取得する
    function lfGetReviewData($id) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        //商品ごとのレビュー情報を取得する
        $col = 'create_date, reviewer_url, reviewer_name, recommend_level, title, comment';
        $from = 'dtb_review';
        $where = 'del_flg = 0 AND status = 1 AND product_id = ?';
        $objQuery->setOrder('create_date DESC');
        $objQuery->setLimit(REVIEW_REGIST_MAX);
        $arrWhereVal = array($id);
        $arrReview = $objQuery->select($col, $from, $where, $arrWhereVal);
        return $arrReview;
    }

    /*
     * ファイルの情報をセットする
     * @return $subImageFlag
     */
    function lfSetFile($objUpFile,$arrProduct,&$arrFile) {
        // DBからのデータを引き継ぐ
        $objUpFile->setDBFileList($arrProduct);
        // ファイル表示用配列を渡す
        $arrFile = $objUpFile->getFormFileList(IMAGE_TEMP_URLPATH, IMAGE_SAVE_URLPATH, true);

        // サブ画像の有無を判定
        $subImageFlag = false;
        for ($i = 1; $i <= PRODUCTSUB_MAX; $i++) {
            if ($arrFile['sub_image' . $i]['filepath'] != '') {
                $subImageFlag = true;
            }
        }
        return $subImageFlag;
    }


    function doDefault() {
        // カート「戻るボタン」用に保持
        $netURL = new Net_URL();
        $_SESSION['cart_referer_url'] = $netURL->getURL();
    }



}