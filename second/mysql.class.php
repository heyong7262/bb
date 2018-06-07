<?php 
header('Content-Type: text/html; charset=utf-8');
class Mysql{
  function __construct(){
    mysql_connect("127.0.0.1","root","root") or die('链接失败');
    mysql_select_db("test");
    mysql_query("set names utf8");
  }

  /**列表查询 */
  function getList($sql){
    $res = mysql_query($sql);
    $data = array();
    while($row = mysql_fetch_assoc($res)){
      $data[] = $row;
    }
    return $data;
  }

  /** 单条数据获取 修改时使用 */
  function getRow($sql){
    $res = mysql_query($sql);
    return mysql_fetch_assoc($res);

  }

  /** 删除操作 */
  function del($sql){
    return mysql_query($sql);
  }

  /** 修改 */
  function update($sql){
    return mysql_query($sql);
  }
  /** 添加 */
  function add($sql)
  {
    return mysql_query($sql);
  }



}



 ?>