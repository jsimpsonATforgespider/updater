<?php

/**
 * Plugin Name:   Test Plugin
 * Version:       1.0
 */

 if(!defined('ABSPATH')) exit;

 class testPlugin{

   function __construct(){
     require_once plugin_dir_path(__FILE__) . 'updater.php';
     updaterCall();
   }

   function updaterCall(){
     $updater = new FS_Updater();
     $updater->set_username('jsimpsonATforgespider'); // add github username here
     $updater->set_repository('updater'); // add plugin repo here
     $updater->authorize('6fffe3ea2180823a321b4177c0e906b31c9615fb'); //entre api key here for plugin
     $updater->initialize();
   }

 }

 if(class_exists('testPlugin')){
   $tester = new testPlugin();
 }
