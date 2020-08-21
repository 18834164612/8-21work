<?php
class reg{
    function add(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/reg.html");
        echo "注册";
    }
    function addUser(){
          $uname=$_POST["uname"];
          $pass=$_POST["pass"];
          $pass1=$_POST["pass1"];

          echo $uname;
          echo "<br>";
        echo $pass;
        echo $pass1;
    }
}