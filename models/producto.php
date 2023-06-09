<?php

class Producto {
    private $id;
    private $categoria_id;
    private $nombre;

    private $descripcion;

    private $precio;

    private $stock;

    private $oferta;

    private $fecha;

    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos");
        return $productos;
    }
    
	public function save(){
		$sql = "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', '{$this->getPrecio()}', '{$this->getStock()}', '{$this->getOferta()}', '{$this->getFecha()}' , 'aa')";
		$save = $this->db->query($sql);

		$result = false;
		if ( $save){
			$result = true;
		}

		return $result;
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
	public function getCategoria_id() {
		return $this->categoria_id;
	}
	
	/**
	 * @param mixed $categoria_id 
	 * @return self
	 */
	public function setCategoria_id($categoria_id): self {
		$this->categoria_id = $categoria_id;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}
	
	/**
	 * @param mixed $nombre 
	 * @return self
	 */
	public function setNombre($nombre): self {
		$this->nombre = $this->db->real_escape_string($nombre);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}
	
	/**
	 * @param mixed $descripcion 
	 * @return self
	 */
	public function setDescripcion($descripcion): self {
		$this->descripcion = $this->db->real_escape_string($descripcion);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getPrecio() {
		return $this->precio;
	}
	
	/**
	 * @param mixed $precio 
	 * @return self
	 */
	public function setPrecio($precio): self {
		$this->precio = $this->db->real_escape_string($precio);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getStock() {
		return $this->stock;
	}
	
	/**
	 * @param mixed $stock 
	 * @return self
	 */
	public function setStock($stock): self {
		$this->stock = $this->db->real_escape_string($stock);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getOferta() {
		return $this->oferta;
	}
	
	/**
	 * @param mixed $oferta 
	 * @return self
	 */
	public function setOferta($oferta): self {
		$this->oferta = $this->db->real_escape_string($oferta);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getFecha() {
		return $this->fecha;
	}
	
	/**
	 * @param mixed $fecha 
	 * @return self
	 */
	public function setFecha($fecha): self {
		$this->fecha = $this->db->real_escape_string($fecha);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getImagen() {
		return $this->imagen;
	}
	
	/**
	 * @param mixed $imagen 
	 * @return self
	 */
	public function setImagen($imagen): self {
		$this->imagen = $this->db->real_escape_string($imagen);
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDb() {
		return $this->db;
	}
	
	/**
	 * @param mixed $db 
	 * @return self
	 */
	public function setDb($db): self {
		$this->db = $db;
		return $this;
	}
}


?>