<?php
    /**
     * 
     * 
     * This PHP file is made to simply test the database queries.
     * Please ensure that this is deleted when pushing to the git repository. 
     * 
     * Working on dev0: 192.168.122.181
     * MySQL username: root
     * MySQL password: dev1234567890
     */


     require_once("org-api.php");

     $connection = new fetchARWAPI("ACCESS","localhost", "root", "dev1234567890", "arw", 3306);

        print_r($connection->get_org_slides("AdCreate")); 
?>