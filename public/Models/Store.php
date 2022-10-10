<?php


class Store{

   
    public function save($store_info)
    {
        global $wpdb;

        $table_name = $wpdb->prefix . "stores";
    
        $wpdb->insert($table_name, $store_info);
        $response = $wpdb;
        $wpdb->close();
        return $response;

    }

}