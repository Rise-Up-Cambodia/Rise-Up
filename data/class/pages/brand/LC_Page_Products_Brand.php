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

/**
 * 商品一覧 のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Products_List.php 22897 2013-06-25 07:26:42Z michael_nelson $
 */
class LC_Page_Products_Brand extends LC_Page_Ex {

    // {{{ properties



    function init() {
        parent::init();

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
                $arr[$i]['name'] = $row->name;
                $arr[$i]['image_path'] = $row->image_path;
                $arr[$i]['description'] = $row->description;
                $i++;
            }
            $this->arrResults=$arr;

    }
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


    function action() {

//

    }


    function destroy() {
        parent::destroy();
    }





    /* 商品一覧の表示 */














}
