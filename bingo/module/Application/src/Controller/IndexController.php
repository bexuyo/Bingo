<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Http\Request;
use Zend\Session\Container;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Application\Model\IndexModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
         if(isset($container->message))
            $message = $container->message;
        else
            $message = null;

        $view = new ViewModel(array(
            'message' => $message,
        ));
        $view->setTemplate('application/index/index');

        return $view;
    }

    public function playAction()
    {
        $view = new ViewModel();
        $view->setTemplate('application/index/play');

        return $view;
    }

    public function loginAction()
    {
        $username = $this->params()->fromPost('username', '');
        $password = $this->params()->fromPost('password', '');

    	$model = new IndexModel();
    	$result = $model->login($username, $password);

        if($result['status'] == 'ok'){
            setcookie('userID', $result['userID'], time() + 3600, '/');
            setcookie('username', $result['username'], time() + 3600, '/');

            return $this->redirect()->toUrl('/application/play');
        }
        else{
            $container = new Container('message');
            $container->message = $result['Error message']; 

            return $this->redirect()->toUrl('/');
        }
    }

     public function registerAction()
    {
        $username = $this->params()->fromPost('username', '');
        $password = $this->params()->fromPost('password', '');

        $model = new IndexModel();
        $model->register($username, $password);
    }

     public function changePasswordAction()
    {   
        document.getElementById("setPassword").submit();


        $userID = $this->params()->fromPost('userID', '');
        $oldPassword =  $this->params()->fromPost('oldPassword', '');
        $newPassword =  $this->params()->fromPost('newPassword', '');

        $model = new IndexModel();
        $model->changePassword($userID, $oldPassword, $newPassword);
    }

     public function getHistoryAction()
    {
        $userID = $this->params()->fromPost('userID', '');

        $model = new IndexModel();
        $model->getHistory($userID);
    }
}
	