<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Application\Model\IndexModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function loginAction()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

    	$model = new IndexModel();
    	$model->login($username, $password);
    }

     public function registerAction()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $model = new IndexModel();
        $model->register($username, $password);
    }

     public function changePasswordAction()
    {
        $userID = isset($_POST['userID']) ? $_POST['userID'] : '';
        $oldPassword = isset($_POST['username']) ? $_POST['username'] : '';
        $newPassword = isset($_POST['password']) ? $_POST['password'] : '';

        $model = new IndexModel();
        $model->changePassword($userID, $oldPassword, $newPassword);
    }

     public function getHistoryAction()
    {
        $userID = isset($_POST['userID']) ? $_POST['userID'] : '';

        $model = new IndexModel();
        $model->getHistory($userID);
    }
}
	