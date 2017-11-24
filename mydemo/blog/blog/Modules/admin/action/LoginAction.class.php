<?php 

class LoginAction extends Action {
    public function index() {
        $this->display();
    }
    
    public function login() {
        if(!IS_POST) $this->redirect('Login/index');
        $db = M('user');
        $result = $db->where(array('username'=>I('username')))->find();
        
        if(!$result || I('password','','md5') != $result['password'] ) {
            $this->error('Login Error.');
        }
        $data = array(
            'id'=>$result['id'],
            'loginip'=>get_client_ip(),
            'time'=>time(),
        );
        $db->data($data)->save();
        session('uid',$result['id']);
        session('username',$result['username']);
        
        $this->redirect('admin/Index/index');
    }
    
    public function logout() {
        session_unset();
        session_destroy();
        $this->redirect('admin/Login/index');
    }
    
}
