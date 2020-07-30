<?php 

class Personne {

    private $db ;

    public function __construct() {
        $this->db = new Database ;
    }

    public function create($data) {
        $this->db->query("INSERT INTO  personnes (nom , prenom , adresse , cp , telephone ) VALUES ( :nom , :prenom , :adresse , :cp , :telephone)");
        $this->db->bind(":nom" , $data['nom']);
        $this->db->bind(":prenom" , $data['prenom']);
        $this->db->bind(":adresse" , $data['adresse']);
        $this->db->bind(":cp" , $data['cp']);
        $this->db->bind(":telephone" , $data['telephone']);

        return $this->db->execuute() ;
    }

    public function update($personne_id , $data) {
        $this->db->query("UPDATE personnes
                         SET  nom = :nom , prenom = :prenom , adresse = :adresse , cp = :cp , telephone = :telephone 
                         WHERE personnes.id = $personne_id ");  
        //bind
        $this->db->bind(':nom' ,$data['nom']); 
        $this->db->bind(':prenom' ,$data['prenom']); 
        $this->db->bind(':adresse' ,$data['adresse']); 
        $this->db->bind(':cp' ,$data['cp']); 
        $this->db->bind(':telephone' ,$data['telephone']); 

        return $this->db->execuute() ;
    }

    public function getPersonnes() {
        $this->db->query('SELECT *
                          FROM personnes ');
        return $this->db->result_Set() ;
    }

    public function getpersonne($id) {
        $this->db->query("SELECT * 
                        FROM personnes
                        WHERE id = :id ") ;
        $this->db->bind(':id' , $id );

        return $this->db->single() ;
    }
    

    public function deletepersonne($del_id) {
        $this->db->query("DELETE FROM personnes WHERE personnes.id = $del_id");

        return $this->db->execuute() ;
    }
}


