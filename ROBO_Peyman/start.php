<?php
/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 1/29/18 AD
 * Time: 19:56
 */
//______________using php files
require_once 'filing.php';
require_once 'project.php';
require_once 'init_directory.php';
require_once 'database/data.php';
require_once 'controller_creator.php';
//_______________________________________________________

echo "hi peyman <br>";
echo "my name is navira <br>";
echo "thank you to design navira <br>";
echo "I love you peyman :-D <br> <hr>";

echo "<h1>introduction:</h1>";

echo "<ul>";

echo"<li>use <spn style='color: blue'>name=[name] </spn> for set project name if don't set this name set default name [symfony_project]</li>";
echo"<li>use <spn style='color: blue'>init_dir=1 </spn> for the create directories if init_dir=2 then show report of the action</li>";

echo "</ul><br><hr>";



//________________________________________________________
//__________ initialize project name

if(isset($_REQUEST["name"])){
    project::$name=$_REQUEST["name"];
}else{
    project::$name="symfony_project";
}

//__________ initialize directories project
if (isset($_REQUEST["init_dir"])) {
    echo "start initialize directories ...";
    $result=init_dir(project::$name);
    if($_REQUEST[""]==2){
        print_r($result);
    }
    echo"<br>";
    echo "finish initialize directoies";

}

//____________ create entities model
if (isset($_REQUEST["create_entities"])){
    echo "<br>statr Entity creator ... <br>";
//TODO: peyman
    echo"<br>";
    echo "finish Entity creator";
}

//______________ create controllers

if(isset($_REQUEST["create_controller"])){
    echo "<br>start controllers creator";
    echo "<br>";

    $Entities = data::get_tables();
    for($entity_index = 0 ; $entity_index<count($Entities);$entity_index++) {
        controller_creator(project::$name."/src/AppBundle/Controller", $Entities[$entity_index]["table_name"]);
    }
    echo "<br>";
    echo"finish controllers creator";

}
