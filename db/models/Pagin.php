<?php 
class Pagina {
    public string $titulo_libro;
    public int $index_pag;
    public string $text;
    public string $color_texto;
    public string $color_fondo;
    public $formato;
    public $audio;
    public $voz; 
    public $subrayado;

    public function __construct($titulo_libro, $index_pag, $text,
     $color_texto, $color_fondo, $formato, $audio, $voz, $subrayado) {
        $this->titulo_libro = $titulo_libro;
        $this->index_pag = $index_pag;
        $this->text = $text;
        $this->color_texto = $color_texto;
        $this->color_fondo = $color_fondo;
        $this->formato = $formato;
        $this->audio = $audio;
        $this->voz = $voz;
        $this->subrayado;
    }
}
?>