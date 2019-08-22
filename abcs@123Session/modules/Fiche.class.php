<?php 

class Fiche extends DB{
	private $id;
	private $id_client;
	private $mois;
	private $annee;
	private $pdf;
	private $date_creation;
    private $type;

	public function getId(){ return $this->id;}
    public function getId_client(){ return $this->id_client;}
    public function getMois(){ return $this->mois;}
    public function getAnnee(){ return $this->annee;}
    public function getPdf(){ return $this->pdf;}
    public function getDate_creation(){ return $this->date_creation;}
    public function getType(){ return $this->type;}

    public function setId($value){ $this->id= $value;}
    public function setId_client($value){ $this->id_client= $value;}
    public function setMois($value){ $this->mois= $value;}
    public function setAnnee($value){ $this->annee= $value;}
    public function setPdf($value){ $this->pdf= $value;}
    public function setDate_creation($value){ $this->date_creation= $value;}
    public function setType($value){ $this->type= $value;}

    public function setFiche($id,$id_client,$mois,$annee,$pdf,$date_creation,$type)
    {
        $this->id = $id;
        $this->id_client = $id_client;
        $this->mois = $mois;
        $this->annee = $annee;
        $this->pdf = $pdf;
        $this->date_creation = $date_creation;
        $this->type = $type;
    }
    public function getSQL()
    {

        $str = sprintf(" id_client='%d'", mysqli_real_escape_string($this->connect(), $this->getId_client()));
        $str .= sprintf(", mois='%s'", mysqli_real_escape_string($this->connect(), $this->getMois()));
        $str .= sprintf(", annee='%d'", mysqli_real_escape_string($this->connect(), $this->getAnnee()));
        $str .= sprintf(", pdf='%s'", mysqli_real_escape_string($this->connect(), $this->getPdf()));
        $str .= sprintf(", date_creation='%s'", mysqli_real_escape_string($this->connect(), $this->getDate_creation()));
        $str .= sprintf(", type='%d'", mysqli_real_escape_string($this->connect(), $this->getType()));
        return($str);
    }
    public function updateToDB(){
        $query = "UPDATE ".$_SESSION['pfx']."_fiche SET ";
        $query .= $this->getSQL();
        $query .= sprintf(" WHERE id = %d",$this->id);
        return $this->connect()->query($query);
    }

    public function saveToDB(){
        $query = "INSERT INTO ".$_SESSION['pfx']."_fiche SET ";
        $query .= $this->getSQL();
        return $this->connect()->query($query);
    }
    public function deleteFromDB($id){
        $query = "DELETE From ".$_SESSION['pfx']."_fiche ";
        $query .= sprintf(" WHERE id = '%d'",($id));
        return $this->connect()->query($query);
    }
  public function deleteFichierFromDB($id)
    {

        $query = "update " . $_SESSION['pfx'] . "_fiche set pdf = ''";

        $query .= sprintf(" where id = %d", mysqli_real_escape_string($this->connect(), $id));

        return $this->connect()->query($query);

    }
    public function getFromDB($id)
    {
        $res = $this->connect()->query(sprintf("SELECT * FROM " . $_SESSION['pfx'] . "_fiche WHERE id = '%d'", mysqli_real_escape_string($this->connect(), $id)));
        while ($fetch = $res->fetch_assoc()) {
            $this->setFiche($fetch["id"], $fetch["id_client"], $fetch["mois"], $fetch["annee"], $fetch["pdf"], $fetch["date_creation"], $fetch["type"]);
        }
    }
     public function getCount()
    {
        $res = $this->connect()->query("SELECT COUNT(*) AS total FROM " . $_SESSION['pfx'] . "_fiche WHERE type=1");
       $row = $res->fetch_array();
        echo $row["total"];
    }

}
?>