<?php
namespace Roomer\Controller;
use Think\Controller;
class UsermanagerController extends Controller {
    public function index(){
        $this->checkSession();
        $this->recordList();
        $this->display();
    }

    public function check_orders(){
        $this->checkSession();
        $this->recordList_order();
        $this->display();
    }
    public function recordList(){
        $this->checkSession();
        $record = M('user');
        $total=$record->count();
        $per = 15;
        import('Org.Util.Page');
        $page = new \Page($total,$per);
        $sql = "select * from hotel_user ".$page->limit;
        $query = $record -> query($sql);
        $pageList=$page->fpage();
        $this->assign('param',$query);
        $this->assign('pageList',$pageList);
        $this->assign('num',1);
    }
    public function recordList_order(){
        $this->checkSession();
        $record = M('room_order');
        $total=$record->count();
        $per = 15;
        import('Org.Util.Page');
        $page = new \Page($total,$per);
        $sql = "select * from hotel_room_order ".$page->limit;
        $query = $record -> query($sql);
        $pageList=$page->fpage();
        $this->assign('param',$query);
        $this->assign('pageList',$pageList);
        $this->assign('num',1);
    }
    public function recordFinder(){//用户管理
      /*  $admin = $_SESSION['admin'];
        if(!isset($admin)&&is_null($admin)){
            $this->error('请重新登陆','../Login/index');
        }*/
        $this->checkSession();
        $str = $_POST['keyword'];
        if(empty($str)||is_null($str)){
            $this->recordList();
        }
        else{$user = M('user');
            $key = '%'.$str.'%';
            $map['user_nickname|user_IDcard|user_mobile|user_name|user_email|user_status']=array('like',$key);
            $total = $user->where($map)->count();
            $per =15;
            import('Org.Util.Page');
            $page = new \Page($total,$per);
            $sql = "select * from hotel_user where  user_nickname like '%".$str."%' or user_IDcard like '%".$str."%' or user_mobile like '%".$str."%' or user_name like '%".$str."%' or user_email like '%".$str."%' or user_status like '%".$str."%'   ".$page->limit;
            $query = $user -> query($sql);
            $pageList=$page->fpage();
            $this->assign('param',$query);
            $this->assign('pageList',$pageList);
            $this->assign('num',1);
        }
        $this->display('recordFinder');
    }

    public function record_orders(){
        /*  $admin = $_SESSION['admin'];
          if(!isset($admin)&&is_null($admin)){
              $this->error('请重新登陆','../Login/index');
          }*/
        $this->checkSession();
        $str = $_POST['keyword'];
        if(empty($str)||is_null($str)){
            $this->recordList_order();
        }
        else{$order = M('room_order');
            $key = '%'.$str.'%';
            $map['category|user_name|user_mobile|user_idcard|order_status|instatus|operator']=array('like',$key);
            $total = $order->where($map)->count();
            $per = 15;
            import('Org.Util.Page');
            $page = new \Page($total,$per);
            $sql = "select * from hotel_room_order where  category like '%".$str."%' or user_name like '%".$str."%'or user_mobile like '%".$str."%' or user_idcard like '%".$str."%' or order_status like '%".$str."%' or instatus like '%".$str."%' or operator like '%".$str."%' ".$page->limit;
            $query = $order -> query($sql);
            $pageList=$page->fpage();
            $this->assign('param',$query);
            $this->assign('pageList',$pageList);
            $this->assign('num',1);
        }
        $this->display('record_orders');
    }
    public function edit_user_status(){
        $this->checkSession();
        $this->editDisplay();
        $this->display();
    }
    public function  edit_user()
    {
        $this->checkSession();
        $data['user_status'] = $_POST['instatus_change'];//
        $condition['user_id'] = $_POST['user_id'];
        $result = M('user')->where($condition)->data($data)->save();
        if ($result !== false) {
            $this->success('更改状态成功！', U('usermanager/index'));
        } else {
            $this->error('更改状态失败');
        }
    }
    public function editDisplay(){//显示结果页
        $this->checkSession();
        $r_order_id = $_GET['user_id'];
        $info = M('user')->where("user_id=$r_order_id")->find();
        $this->assign('info',$info);
    }
    public function checkSession(){
        $roomer_id = $_SESSION['roomer_id'];
        if(isset($roomer_id)){
            $this->assign('roomer_id',$roomer_id);
        }else{
            $this->error("需先登录,方可进行查询！",U('Login/index'));
        }
    }
}