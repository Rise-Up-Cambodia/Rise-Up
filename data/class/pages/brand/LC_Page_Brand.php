<?php

// {{{ requires
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * サイト概要のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id:LC_Page_Abouts.php 15532 2007-08-31 14:39:46Z nanasess $
 */
class LC_Page_Brand extends LC_Page_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->tpl_page_category = 'brand';
        $this->tpl_title = "Our Brand";
        $masterData = new SC_DB_MasterData_Ex();
        $this->arrPref = $masterData->getMasterData('mtb_pref');
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
     * Page のアクション.
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
           $arr[$i]['image_path'] = $row->image_path;
           $arr[$i]['name'] = $row->name;
           $arr[$i]['description'] = $row->description;
            $i++;
        }
        $this->tpl_subtitle = "Our Brands";
        $this->arrResults=$arr;
    }
    //return void
    function destroy() {
        parent::destroy();
    }
}
