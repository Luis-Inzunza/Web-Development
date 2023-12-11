<?php
class Book {
    public $titulo;
    
    public $enfoque;

    public $direc_img;

    public $color_titulo;

    public $color_fondo;

    public $usuario_id;

    public $ultima_modificacion;

    public function __construct(
        string $titulo, string $enfoque, string $direc_img, string $color_titulo, string $color_fondo, string $usuario_id, $ultima_modificacion 
        ) {
        $this->titulo = $titulo;
        $this->enfoque = $enfoque;
        $this->direc_img = $direc_img;
        $this->color_titulo = $color_titulo;
        $this->color_fondo = $color_fondo;
        $this->usuario_id = $usuario_id;
        $this->ultima_modificacion = $ultima_modificacion;
    }
    
    public function __toString() {
        return sprintf(
            "Book: [titulo=%s, enfoque=%s, direc_img=%s, color_titulo=%s, usuario_id=%s, ultima_modificacion=%s]",
            $this->titulo,
            $this->enfoque,
            $this->direc_img,
            $this->color_titulo,
            $this->usuario_id,
            $this->ultima_modificacion
        );
    }
} 
?>