<?PHP 
/**
     * Démarre ou reprend une session
     */
    function startSession() {
        session_start();
    }


/**
     * On clot la session et le programme.
     * L'objet de la classe Membre contenant les informations de 
     * la session courante ($membre) est sauvé.
     */
    function endSession() {    
        //if (isset($membre)) {
        //    $_SESSION['membre'] = serialize($membre);
        //    session_write_close();
        //}
        //else {  // si $membre n'a pas été initialisé, on détruit
                // la session
            session_destroy();
        //}
        exit(0);
    }
?>