<?php
// {{{ requires
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

if (file_exists(MODULE_REALDIR . 'mdl_gmopg/inc/function.php')) {
    require_once MODULE_REALDIR . 'mdl_gmopg/inc/function.php';
}

class LC_Page_Brand_Detail extends LC_Page_Ex {

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
        $this->arrSTATUS = $masterData->getMasterData('mtb_status');
        $this->arrSTATUS_IMAGE = $masterData->getMasterData('mtb_status_image');
        $this->arrDELIVERYDATE = $masterData->getMasterData('mtb_delivery_date');
        $this->arrRECOMMEND = $masterData->getMasterData('mtb_recommend');
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

        /*My own query*/
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $dbname = "rise_up_shop";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection

        $sql="SELECT * FROM dtb_brand";
        $result = mysqli_query($conn,$sql);
        $arr = [];
        $i = 0;
        while($row = mysqli_fetch_object($result)){
            $arr[$i]['brand_id'] = $row->brand_id;
            $arr[$i]['name'] = $row->name;
            $arr[$i]['address'] = $row->address;
            $arr[$i]['email'] = $row->email;
            $arr[$i]['image_path'] = $row->image_path;
            $arr[$i]['website'] = $row->website;
            $arr[$i]['description'] = $row->description;
            $i++;
        }
        $this->tpl_subtitle = "Brand Detail";
        $this->arrResults=$arr;
    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }




}
