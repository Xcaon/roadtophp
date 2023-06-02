<?php


// Clase de categoria
class Categoria {
    private $id;
    private $nombre;
    
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

	public function save(){
		

        $sql = "INSERT INTO categorias VALUES(null, '{$this->getNombre()}')";
        $save = $this->db->query($sql);

        $result = false;
        if ($save){
			echo "La actualizaciones se hizo correctamente";
            $result = true;
        } else {
			echo "Fallo la consulta";
		}
        return $result;
	}

    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias");
        return $categorias;
    }

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}
	
	/**
	 * @param mixed  
	 * @return self
	 */
	public function setNombre($nombre): self {
		$this->nombre = $this->db->real_escape_string($nombre);
		return $this;
	}

   


}


?>