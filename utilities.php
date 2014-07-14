<?php
    function copyemz($file1,$file2){
          $contentx =@file_get_contents($file1);
                   $openedfile = fopen($file2, "w");
                   fwrite($openedfile, $contentx);
                   fclose($openedfile);
                    if ($contentx === FALSE) {
                    $status=false;
                    }else $status=true;
                   
                    return $status;
    }

/******************************************************************************
 * Extraire l'extension d'un fichier
 * @copyright Fobec 2011
 ******************************************************************************/
class FileGetExtension {

    /**
     * rechercher la position du dernier point dans l'url
     * @return string
     */
    static public function method_substr($filename) {
        $p= strrpos($filename, '.');
        if ($p!==false) {
            return substr($filename, $p + 1);
        }
        return null;
    }

    /**
     * dernier élément d'un tableau de chaine
     * @return string
     */
    static public function method_explode($filename) {
        $split=explode('.',$filename);
        if (count($split)>1) {
            return $split[count($split)-1];
        }
        return null;
    }

    /**
     * fonction PHP pathinfo()
     * @return string
     */
    static public function method_pathinfo($filename) {
        return pathinfo($filename, PATHINFO_EXTENSION);
    }
}
?>