<?php 
class Administrator extends DB{
private $id;
private $login;
private $pass;
private $passMD5;
private $type;
private $etat;

public function getId(){ return $this->id;}
public function getLogin(){ return $this->login;}
public function getPass(){ return $this->pass;}
public function getPassMD5(){ return $this->passMD5;}
public function getType(){ return $this->type;}
public function getEtat(){ return $this->etat;}

public function setId($value){ $this->id= $value;}
public function setLogin($value){ $this->login= $value;}
public function setPass($value){ $this->pass= $value;}
public function setPassMD5($value){ $this->passMD5= $value;}
public function setType($value){ $this->type= $value;}
public function setEtat($value){ $this->etat= $value;}

public function setAdministrator($id,$login,$pass,$passMD5,$type,$etat){
	$this->id = $id;
	$this->login = $login;
	$this->pass = $pass;
	$this->passMD5 = $passMD5;
	$this->type = $type;
	$this->etat = $etat;
}

public function getSQL(){
       
		$str = sprintf(" login='%s'",mysqli_real_escape_string($this->connect(),$this->getLogin()));
		$str .= sprintf(", pass='%s'",mysqli_real_escape_string($this->connect(),$this->getPass()));
		$str .= sprintf(", passMD5='%s'",mysqli_real_escape_string($this->connect(),$this->getPassMD5()));
		$str .= sprintf(", type='%s'",mysqli_real_escape_string($this->connect(),$this->getType()));
		$str .= sprintf(", etat='%b'",mysqli_real_escape_string($this->connect(),$this->getEtat()));
		return($str);
	}

public function updateToDB(){
		$query = "UPDATE ".$_SESSION['pfx']."_administrator SET ";
		$query .= $this->getSQL();
		$query .= sprintf(" WHERE id = %d",$this->id);
    return $this->connect()->query($query);
	}
	
public function saveToDB(){
		$query = "INSERT INTO ".$_SESSION['pfx']."_administrator SET ";
		$query .= $this->getSQL();
    return $this->connect()->query($query);
	}
public function deleteFromDB($id){
		$query = "DELETE From ".$_SESSION['pfx']."_administrator ";
		$query .= sprintf(" WHERE id = '%d'",($id));
    return $this->connect()->query($query);
	}

public function getFromDB($id)
{
    $res = $this->connect()->query(sprintf("SELECT * FROM " . $_SESSION['pfx'] . "_administrator WHERE id = '%d'", mysqli_real_escape_string($this->connect(), $id)));
    while ($fetch = $res->fetch_assoc()) {
        $this->setAdministrator($fetch["id"], $fetch["login"], $fetch["pass"], $fetch["passMd5"], $fetch["type"], $fetch["etat"]);
    }
}



public function updateEtatFromDB($id){
		$query = sprintf("UPDATE ".$_SESSION['pfx']."_administrator SET etat = 1 WHERE id = '%d' ", mysqli_real_escape_string($this->connect(),$id));
    return $this->connect()->query($query);
	}	
	public function desactiveEtatFromDB($id){
		$query = sprintf("UPDATE ".$_SESSION['pfx']."_administrator SET etat = 0 WHERE id = '%d' ", mysqli_real_escape_string($this->connect(),$id));
        return $this->connect()->query($query);
	}	


	
public function publishToDB($id,$pub){
		$query = sprintf("UPDATE ".$_SESSION['pfx']."_administrator SET etat = '%b' WHERE id = '%d' ", mysqli_real_escape_string($this->connect(),$pub), mysqli_real_escape_string($this->connect(),$id));
    return $this->connect()->query($query);
	}

	 public function getCount()
    {
        $res = $this->connect()->query("SELECT COUNT(*) AS total FROM " . $_SESSION['pfx'] . "_administrator");
       $row = $res->fetch_array();
        echo $row["total"];
    }
}
?>