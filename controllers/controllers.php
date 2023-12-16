<?php
    function pageName(){
        $current_page = basename($_SERVER['PHP_SELF']);
        $page_name = explode('.', $current_page);
        $page_name = $page_name[0];
        return $page_name;
    }