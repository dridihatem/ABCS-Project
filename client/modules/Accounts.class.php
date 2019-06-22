<?php 

class Accounts extends DB{
	private $id;
	private $matricule;
	private $password;
	private $passwordcrypt;
	private $nom;
    private $prenom;
    private $email;
    private $active;

	public function getId(){ return $this->id;}
    public function getMatricule(){ return $this->matricule;}
    public function getPassword(){ return $this->password;}
    public function getPasswordcrypt(){ return $this->passwordcrypt;}
    public function getNom(){ return $this->nom;}
    public function getPrenom(){ return $this->prenom;}
    public function getEmail(){ return $this->email;}
    public function getActive(){ return $this->active;}

    public function setId($value){ $this->id= $value;}
    public function setMatricule($value){ $this->matricule= $value;}
    public function setPassword($value){ $this->password= $value;}
    public function setPasswordcrypt($value){ $this->passwordcrypt= $value;}
    public function setNom($value){ $this->nom= $value;}
    public function setPrenom($value){ $this->prenom= $value;}
    public function setEmail($value){ $this->email= $value;}
    public function setActive($value){ $this->active= $value;}

    public function setAccounts($id,$matricule,$password,$passwordcrypt,$nom,$prenom,$email,$active)
    {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->password = $password;
        $this->passwordcrypt = $passwordcrypt;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->active = $active;
    }
    public function getSQL()
    {

        $str = sprintf(" matricule='%d'", mysqli_real_escape_string($this->connect(), $this->getMatricule()));
        $str .= sprintf(", password='%s'", mysqli_real_escape_string($this->connect(), $this->getPassword()));
        $str .= sprintf(", passwordcrypt='%s'", mysqli_real_escape_string($this->connect(), $this->getPasswordcrypt()));
        $str .= sprintf(", nom='%s'", mysqli_real_escape_string($this->connect(), $this->getNom()));
        $str .= sprintf(", prenom='%s'", mysqli_real_escape_string($this->connect(), $this->getPrenom()));
        $str .= sprintf(", email='%s'", mysqli_real_escape_string($this->connect(), $this->getEmail()));
        $str .= sprintf(", active='%b'", mysqli_real_escape_string($this->connect(), $this->getActive()));
        return($str);
    }
    public function updateToDB(){
        $query = "UPDATE ".$_SESSION['pfx']."_accounts SET ";
        $query .= $this->getSQL();
        $query .= sprintf(" WHERE id = %d",$this->id);
        return $this->connect()->query($query);
    }

    public function saveToDB(){
        $query = "INSERT INTO ".$_SESSION['pfx']."_accounts SET ";
        $query .= $this->getSQL();
        return $this->connect()->query($query);
    }
    public function deleteFromDB($id){
        $query = "DELETE From ".$_SESSION['pfx']."_accounts ";
        $query .= sprintf(" WHERE id = '%d'",($id));
        return $this->connect()->query($query);
    }

    public function getFromDB($id)
    {
        $res = $this->connect()->query(sprintf("SELECT * FROM " . $_SESSION['pfx'] . "_accounts WHERE id = '%d'", mysqli_real_escape_string($this->connect(), $id)));
        while ($fetch = $res->fetch_assoc()) {
            $this->setAccounts($fetch["id"], $fetch["matricule"], $fetch["password"], $fetch["passwordcrypt"], $fetch["nom"],$fetch["prenom"],$fetch["email"],$fetch["active"]);
        }
    }
    public function getCount()
    {
        $res = $this->connect()->query("SELECT COUNT(*) AS total FROM " . $_SESSION['pfx'] . "_accounts");
       $row = $res->fetch_array();
        echo $row["total"];
    }

}
?>