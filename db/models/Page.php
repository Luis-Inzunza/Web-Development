<?php 
class Pagina {
    public $titulo_libro;
    public $index_pag;
    public $text;
    public $color_texto;
    public $color_fondo;
    public $imagen;
    public $formato;
    public $audio;
    public $voz; 
    public $subrayado;

    public function __construct($titulo_libro, $index_pag, $text,
     $color_texto, $color_fondo, $formato, $audio, $voz, $subrayado, $imagen) {
        $this->titulo_libro = $titulo_libro;
        $this->index_pag = $index_pag;
        $this->text = $text;
        $this->color_texto = $color_texto;
        $this->color_fondo = $color_fondo;
        $this->formato = $formato;
        $this->audio = $audio;
        $this->voz = $voz;
        $this->subrayado = $subrayado;
        $this->imagen = $imagen;
    }
    public function __toString() {
        return sprintf(
            "Libro: %s, Página: %d, Texto: %s, Color de Texto: %s, Color de Fondo: %s, Formato: %s, Audio: %s, Voz: %s, Subrayado: %s, Imagen: %s",
            $this->titulo_libro,
            $this->index_pag,
            $this->text,
            $this->color_texto,
            $this->color_fondo,
            $this->formato,
            $this->audio,
            $this->voz,
            $this->subrayado,
            $this->imagen
        );
    }
}
?>