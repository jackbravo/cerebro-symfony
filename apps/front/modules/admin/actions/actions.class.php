<?php

/**
 * admin actions.
 *
 * @package    cerebro
 * @subpackage admin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class adminActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   $q = Doctrine_Query::create()
     ->from('Producto p');
//     ->where('p.activa=true');
     $this->producto_list = $q->execute();
   $q = Doctrine_Query::create()
     ->from('Plaza p');
//     ->where('p.activa=true');
     $this->plaza_list = $q->execute();
   $q = Doctrine_Query::create()
     ->from('Specialty s');
//     ->where('s.activa=true');
     $this->specialty_list = $q->execute();
   $q = Doctrine_Query::create()
     ->from('Impresor i');
//     ->where('i.activa=true');
     $this->impresor_list = $q->execute();
   $q = Doctrine_Query::create()
     ->from('Mensajeria m');
//     ->where('t.activa=true');
     $this->mensajeria_list = $q->execute();
   $q = Doctrine_Query::create()
     ->from('Tipo t');
//     ->where('t.activa=true');
     $this->tipo_list = $q->execute();
   $q = Doctrine_Query::create()
     ->from('sfGuardUser usr');
//     ->where('t.activa=true');
     $this->usr_list = $q->execute();
  }
}
