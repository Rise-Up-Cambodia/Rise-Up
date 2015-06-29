<?php
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';


class LC_Page_Popular extends LC_Page_Ex {
    function init() {
        parent::init();
        $this->tpl_page_category = 'popular product';
        $this->tpl_title = "popular product";
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

        $sql="SELECT * FROM dtb_products order by view_count desc limit 8";
        $result = mysqli_query($conn,$sql);
        $arr = [];
        $i = 0;
        while($row = mysqli_fetch_object($result)){
          $arr[$i]['name'] = $row->name;
          $arr[$i]['main_list_image'] = $row->main_list_image;
          $arr[$i]['product_id'] = $row->product_id;
            /*  $arr[$i]['description'] = $row->description;*/
            $i++;
        }
        $this->tpl_subtitle = "Popular Products";
        $this->arrResults=$arr;
    }
    //return void
    function destroy() {
        parent::destroy();
    }
}
