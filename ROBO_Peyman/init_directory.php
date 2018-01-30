<?php
/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 1/29/18 AD
 * Time: 20:16
 */

function init_dir($root_name)
{
    $creator = array();
    echo "<br>";
    //_________________ create root dir
    $result = filing::create_dir("../" . $root_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$root_name]=true;
    }else{
        echo"&#10074";
        $creator[$root_name]=false;
    }

    //________________ create app dir
    $dir_name="app";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create bin dir
    $dir_name="bin";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src dir
    $dir_name="src";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/AppBundle dir
    $dir_name="src/AppBundle";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Controller dir
    $dir_name="src/AppBundle/Controller";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/DataFixtures dir
    $dir_name="src/AppBundle/DataFixtures";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/DBAL dir
    $dir_name="src/AppBundle/DBAL";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Entity dir
    $dir_name="src/AppBundle/Entity";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Form dir
    $dir_name="src/AppBundle/Form";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Lib dir
    $dir_name="src/AppBundle/Lib";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }


    //________________ create src/Ripository dir
    $dir_name="src/AppBundle/Ripository";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Resources dir
    $dir_name="src/AppBundle/Resources";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Security dir
    $dir_name="src/AppBundle/Security";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Services dir
    $dir_name="src/AppBundle/Services";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create src/Traits dir
    $dir_name="src/AppBundle/Traits";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create tests dir
    $dir_name="tests";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create var dir
    $dir_name="var";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

    //________________ create web dir
    $dir_name="web";
    $result = filing::create_dir("../" . $root_name."/".$dir_name);
    if($result!=-1) {
        echo"&#10097;";
        $creator[$dir_name]=true;
    }else{
        echo"&#10074";
        $creator[$dir_name]=false;
    }

   return $creator;

}
