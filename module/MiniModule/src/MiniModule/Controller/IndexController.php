<?php
<<<<<<< HEAD
=======
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
namespace MiniModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
<<<<<<< HEAD

/**
 * Class IndexController
 *
 * @package MiniModule
 */
=======
use Zend\Form\Factory;

>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
<<<<<<< HEAD
        return array();
    }

    public function formAction()
    {
        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\Authentification');
        if ( $this->getRequest()->isPost() ) {
            $form->setData( $this->getRequest()->getPost());
            if ($form->isValid()) {
                $adapter = $services->get('MiniModule\Form\DbAdapter');
                $sql = 'Select * from Auth where login = ? and pass = ?';
                $sqlResult = $adapter->createStatement($sql, array($form->get('login')->getValue(), $form->get('pwd')->getValue()))->execute();
                if ($sqlResult->count() > 0){
                    $services->get('session')->user = $form->get('login')->getValue();
                    $vm = new ViewModel();
                    $vm->setVariables( $form->getData() );
                    $vm->setTemplate('mini-module/index/index');
                    return $vm;
                }
            }
        }
        return array( );
    }
    public function deconnectAction()
    {
        $services = $this->getServiceLocator();
        unset($services->get('session')->user);
        return $this->redirect()->toRoute('home');

    }

    public function inscriptionAction()
    {
        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\NewUser');
        if ( $this->getRequest()->isPost() ) {
            $form->setData( $this->getRequest()->getPost());
            if ($form->isValid()) {
                $adapter = $services->get('MiniModule\Form\DbAdapter');
                $sql ='insert into Auth(login, pass) VALUES (?, ?)';
                $sqlResult = $adapter->createStatement($sql, array($form->get('login')->getValue(), $form->get('pwd')->getValue()))->execute();
                $services->get('session')->user = $form->get('login')->getValue();
                return $this->redirect()->toRoute('default', array('action'=>'index'))->setStatusCode(205);
            }
        }
        $viewModel = new ViewModel();
        $viewModel->setVariables(array('formAuth' => $form ))
                  ->setTerminal(true);
        return $viewModel;
    }
}
=======
        $view = new ViewModel(array('nom' => 'tintin',));
        $view->setTemplate("minimodule/index/index.phtml");
		return $view;
    }

    public function formAction() {
    	/*$view = new ViewModel(array());
        $view->setTemplate("minimodule/index/form.phtml");
    	return $view;*/
            $configForm = array(
            'elements' => array(
                // la saisie du login (type text)
                array(
                    'spec' => array(
                        'type' => 'Zend\Form\Element\Text',
                        'name' => 'log',
                        'attributes' => array(
                            'size' => '20',
                        ),
                        'options' => array(
                          'label' => 'Login : ',
                          ),
                        
                    ),
                ),
                array(
                    'spec' => array(
                        'type' => 'Zend\Form\Element\Text',
                        'name' => 'pwd',
                        'attributes' => array(
                            'size' => '20',
                        ),
                        'options' => array(
                          'label' => 'Password : ',
                          ),
                        
                    ),
                ),
                // le boutton de validation
                array(
                    'spec' => array(
                        'type' => 'Zend\Form\Element\Submit',
                        'name' => 'submit',
                        'attributes' => array(
                            'value' => 'Suite',
                        ),
                    ),
                ),

            ),
        );

        $factory = new Factory();
        $form = $factory->createForm( $configForm );
        $view = new ViewModel(array('form' => $form));
        $view->setTemplate("minimodule/index/form.phtml");
        return $view;
    }

    public function traiteAction() {
    	$view = new ViewModel(array('login' => $_POST['log'], 'pass' => $_POST['pwd'],));
        $view->setTemplate("minimodule/index/traite.phtml");
		return $view;
    }

    public function gmapsAction()
    {
        $markers = array(
        'Mozzat Web Team' => '17.516684,79.961589',
        'Home Town' => '16.916684,80.683594'
    );  //markers location with latitude and longitude

    $config = array(
        'sensor' => 'true',         //true or false
        'div_id' => 'map',          //div id of the google map
        'div_class' => 'grid_6',    //div class of the google map
        'zoom' => 5,                //zoom level
        'width' => "600px",         //width of the div
        'height' => "300px",        //height of the div
        'lat' => 16.916684,         //lattitude
        'lon' => 80.683594,         //longitude 
        'animation' => 'none',      //animation of the marker
        'markers' => $markers       //loading the array of markers
    );

    $map = $this->getServiceLocator()->get('GMaps\Service\GoogleMap'); //getting the google map object using service manager
    $map->initialize($config);                                         //loading the config   
    $html = $map->generate();                                          //genrating the html map content  
    //passing it to the view
    $view = new ViewModel(array('map_html' => $html));
    $view->setTemplate("minimodule/index/gmaps.phtml");
       return $view;
    }
}
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
