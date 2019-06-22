<?php 

class Message extends DB {

private $id;
private $id_client;
private $sujet;
private $contenu;
private $lu;
private $date_creation;


public function getId(){ return $this->id;}
public function getId_client(){ return $this->id_client;}
public function getSujet(){ return $this->sujet;}
public function getContenu(){ return $this->contenu;}
public function getLu(){ return $this->lu;}
public function getDate_creation(){ return $this->date_creation;}

public function setId($value){ $this->id= $value;}
public function setId_client($value){ $this->id_client= $value;}
public function setSujet($value){ $this->sujet= $value;}
public function setContenu($value){ $this->contenu= $value;}
public function setLu($value){ $this->lu= $value;}
public function setDate_creation($value){ $this->date_creation= $value;}

public function setMessage($id,$id_client,$sujet,$contenu,$lu,$date_creation){
	$this->id = $id;
	$this->id_client = $id_client;
	$this->sujet = $sujet;
	$this->contenu = $contenu;
	$this->lu = $lu;
	$this->date_creation = $date_creation;
}

public function getSQL(){
       
		$str = sprintf(" id_client='%d'",mysqli_real_escape_string($this->connect(),$this->getId_client()));
		$str .= sprintf(", sujet='%s'",mysqli_real_escape_string($this->connect(),$this->getSujet()));
		$str .= sprintf(", contenu='%s'",mysqli_real_escape_string($this->connect(),$this->getContenu()));
		$str .= sprintf(", lu='%b'",mysqli_real_escape_string($this->connect(),$this->getLu()));
		$str .= sprintf(", date_creation='%s'",mysqli_real_escape_string($this->connect(),$this->getDate_creation()));
		return($str);
	}

public function updateToDB(){
		$query = "UPDATE ".$_SESSION['pfx']."_message SET ";
		$query .= $this->getSQL();
		$query .= sprintf(" WHERE id = %d",$this->id);
    return $this->connect()->query($query);
	}
	
public function saveToDB(){
		$query = "INSERT INTO ".$_SESSION['pfx']."_message SET ";
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
    $res = $this->connect()->query(sprintf("SELECT * FROM " . $_SESSION['pfx'] . "_message WHERE id = '%d'", mysqli_real_escape_string($this->connect(), $id)));
    while ($fetch = $res->fetch_assoc()) {
        $this->setMessage($fetch["id"], $fetch["id_client"], $fetch["sujet"], $fetch["contenu"], $fetch["lu"], $fetch["date_creation"]);
    }
}


public function getCount()
    {
        $res = $this->connect()->query("SELECT COUNT(*) AS total FROM " . $_SESSION['pfx'] . "_message");
       $row = $res->fetch_array();
        echo $row["total"];
    }


}