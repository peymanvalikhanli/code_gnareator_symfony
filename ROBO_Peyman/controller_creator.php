<?php
/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 1/30/18 AD
 * Time: 15:20
 */

require_once 'database/data.php';

function controller_creator($root_path,$entity_name){

    $file_payload ="<?php
    namespace $root_path;

    ".'
    use AppBundle\Controller\BaseController;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    class '.$entity_name.'Controller extends BaseController
    {
        /**
         * @Route("/all-'.$entity_name.'")
         *
         * @Method("GET")
         *
         * @return Response
         */
        public function showAll'.$entity_name.'()
        {
                $'.$entity_name.'s = $this->getDoctrine()
                          ->getRepository('."'AppBundle:$entity_name'".')
                          ->findAllStartUp();
                //$'.$entity_name.'s=$this->paginate($)
                return $this->createApiResponse($'.$entity_name.'s,200);
        }


    ';

    /*
        Field: "ID",
        Type: "int(11)",
        Null: "NO",
        Key: "PRI",
        Default: "",
        Extra: "auto_increment"
     */

/*
    $table_stc = data::get_structure_table($entity_name);
    print_r($table_stc);
    for($table_index=0 ; $table_index<count($table_stc);$table_index++){

        echo $table_stc[$table_index]["table_name"];
        echo "<br>";
    }
i
*/
    $file_payload.="
    }";
    filing::remove_file("../".$root_path."/".$entity_name."Controller.php");
    filing::create_file("../".$root_path."/".$entity_name."Controller.php",$file_payload);

    echo"&#10097;";

}