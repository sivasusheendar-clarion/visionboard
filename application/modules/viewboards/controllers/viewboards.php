<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * FusionInvoice
 * 
 * A free and open source web based invoicing system
 *
 * @package		FusionInvoice
 * @author		Jesse Terry
 * @copyright	Copyright (c) 2012 - 2013, Jesse Terry
 * @license		http://www.fusioninvoice.com/support/page/license-agreement
 * @link		http://www.fusioninvoice.com
 * 
 */

class Viewboards extends Base_Controller {

    public function index()
    {    
        $this->layout->buffer('content', 'viewboards/step1');
        $this->layout->render();
    }
    
    public function step2()
    {    
        $this->layout->buffer('content', 'viewboards/step2');
        $this->layout->render();
    }
    public function step3()
    {    
        $this->layout->buffer('content', 'viewboards/step3');
        $this->layout->render();
    }
    public function step4()
    {    
        $this->layout->buffer('content', 'viewboards/step4');
        $this->layout->render();
    }
    public function step5()
    {    
        $this->layout->buffer('content', 'viewboards/step5');
        $this->layout->render();
    }
    public function step6()
    {    
        $this->layout->buffer('content', 'viewboards/step6');
        $this->layout->render();
    }
    public function step7()
    {    
        $this->layout->buffer('content', 'viewboards/step7');
        $this->layout->render();
    }
    public function step8()
    {    
        $this->layout->buffer('content', 'viewboards/step8');
        $this->layout->render();
    }
}

?>