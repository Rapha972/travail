<? php
class Dbconnect

private $dsn ='mysql:host=localhot;dbname=test;charset=utf8'
private $user ='root'    
private $pwsd =''
    
public function Db()
{
    
    $db = new PDO($dsn,$user,$pwsd);
    
    var_dupmp($db);
}