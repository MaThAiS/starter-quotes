<?php
/**
 * Created by PhpStorm.
 * User: Monet
 * Date: 1/27/2016
 * Time: 11:43 AM
 */

class First extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->first();
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

    function zzz()
    {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get(1);
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

    function gimme($id)
    {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown
        // build the list of authors, to pass on to our view
        $record = $this->quotes->get($id);
        $this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        $this->data['where'] = $record['where'];
        $this->data['what'] = $record['what'];

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */