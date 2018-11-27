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
    	$model = new IndexModel();
    	$model->login($_POST['username'], $_POST['password']);
    }

    public function registerAction()
    {
        $model = new IndexModel();
        $model->login($_POST['username'], $_POST['password']);
    }

    public function changePasswordAction()
    {
        $model = new IndexModel();
        $model->changePassword($_POST['oldPassword'], $_POST['newPassword']);
    }

    public function showInfoAction()
    {
        $model = new IndexModel();
        $model->showInfo(($_POST['username']);
    }
}
	