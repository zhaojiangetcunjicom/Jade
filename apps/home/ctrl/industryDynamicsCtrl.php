<?php
namespace apps\home\ctrl;
use apps\home\model\industryDynamics;

class industryDynamicsCtrl extends baseCtrl{
  // 构造方法
  public function _auto(){

  }

  // 行业动态页面
  public function index(){
    // Get

      $model=new industryDynamics();
    if (IS_GET === true) {
      // display
        $type=isset($_GET['type'])?$_GET['type']:'';

        $this->assign('industryInfo',$model->sel($type));
        $this->assign('type',$type);
      $this->display('industryDynamics','index.html');
      die;
    }
    $page=intval($_POST['page'])+1;
      $type=isset($_POST['type'])?$_POST['type']:'';
    echo json_encode($model->moreData($page,$type));
  }

  // 行业动态详细页面
  public function detail(){
    // Get
    if (IS_GET === true) {
      // display
        $id=isset($_GET['id'])?$_GET['id']:0;
        $model=new industryDynamics();
        $this->assign('detailInfo',$model->selDetail($id));
      $this->display('industryDynamics','detail.html');
    }
  }

}