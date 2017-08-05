<?php
namespace apps\admin\ctrl;
use  apps\admin\model\banner;
class bannerCtrl extends baseCtrl{
        public function add(){
            $this->assign('type',0);
            $model=new banner();
            $this->assign('bannerInfo',$model->article());
            $this->display('banner','add.html');
        }

        //保存banner链接
    public function save(){
        $model=new banner();
       $status = upFiles('banner');

        $data['aid']=intval($_POST['aid']);
        if($status){
            $data['banner']=$status['cover_path'];
            //保存入库
                if( $model->add($data)){
                    header('Location:/admin/banner/banner_list');
                }
        }
    }

    public function banner_list(){
        $this->assign('type',1);
        //查询轮播图片
        $model=new banner();
        $this->assign('data',$model->sel_banner());
        $this->display('banner','banner_list.html');
    }
}