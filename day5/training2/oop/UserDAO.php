<?php
class UserDAO {
  public function getList()
  {
    try{
      $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $st = $pdo->prepare("select * from user order by id;");
      $st->execute();
      $users = $st->fetchAll();
      return $users;
    } catch(PDOException $e){
      error_log($e->getMessage());
      error_log($e->getTraceAsString());
      return false;
    } finally{
      $st = NULL;
      $pdo = NULL;
    }
  }

  public function save($id, $password, $email)
  {
    try{
      $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $st = $pdo->prepare("insert into user values(:id, :password, :email)");
      $st->bindParam(":id", $id);
      $st->bindParam(":password", $password);
      $st->bindParam(":email", $email);
      $st->execute();
      return true;
    } catch(PDOException $e){
      error_log($e->getMessage());
      error_log($e->getTraceAsString());
      return false;
    } finally{
      $st = NULL;
      $pdo = NULL;
    }
  }

}
