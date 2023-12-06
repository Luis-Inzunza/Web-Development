INSERT INTO
    Usuarios (
        Nombre,
        Apellido,
        Email,
        Contrasena
    )
VALUES (
        'Juan',
        'Pérez',
        'juan@example.com',
        'contrasena1'
    ), (
        'María',
        'González',
        'maria@example.com',
        'contrasena2'
    );

INSERT INTO
    Libros (
        Titulo,
        Enfoque,
        Direc_img,
        Color_titulo,
        Color_fondo,
        Usuario_id
    )
VALUES (
        'Libro 1',
        'Ficción',
        'img_libro1.jpg',
        'FFFFFF',
        '000000',
        1
    ), (
        'Libro 2',
        'No ficción',
        'img_libro2.jpg',
        'FF0000',
        '00FF00',
        1
    ), (
        'Libro 3',
        'Fantasía',
        'img_libro3.jpg',
        '0000FF',
        'FFFF00',
        1
    ), (
        'Libro 4',
        'Misterio',
        'img_libro4.jpg',
        '00FFFF',
        'FF00FF',
        1
    ), (
        'Libro 5',
        'Aventura',
        'img_libro5.jpg',
        '000000',
        'FFFFFF',
        1
    );

INSERT INTO
    Paginas (
        Titulo_libro,
        Index_pag,
        Texto,
        Color_texto,
        Color_fondo,
        Formato,
        Audio,
        Voz,
        Subrayado
    )
VALUES (
        'Libro 1',
        1,
        'Texto página 1',
        'Negro',
        'Blanco',
        1,
        TRUE,
        1,
        FALSE
    ), (
        'Libro 1',
        2,
        'Texto página 2',
        'Blanco',
        'Negro',
        2,
        FALSE,
        0,
        TRUE
    ), (
        'Libro 1',
        3,
        'Texto página 3',
        'Azul',
        'Amarillo',
        3,
        TRUE,
        1,
        FALSE
    ), (
        'Libro 1',
        4,
        'Texto página 4',
        'Verde',
        'Rojo',
        1,
        FALSE,
        0,
        TRUE
    ), (
        'Libro 1',
        5,
        'Texto página 5',
        'Rojo',
        'Verde',
        2,
        TRUE,
        1,
        TRUE
    ),

 (
    'Libro 2',
    1,
    'Texto página 1',
    'Negro',
    'Blanco',
    3,
    TRUE,
    0,
    FALSE
), (
    'Libro 2',
    2,
    'Texto página 2',
    'Blanco',
    'Negro',
    1,
    FALSE,
    1,
    TRUE
), (
    'Libro 2',
    3,
    'Texto página 3',
    'Azul',
    'Amarillo',
    2,
    TRUE,
    0,
    FALSE
), (
    'Libro 2',
    4,
    'Texto página 4',
    'Verde',
    'Rojo',
    3,
    FALSE,
    1,
    TRUE
), (
    'Libro 2',
    5,
    'Texto página 5',
    'Rojo',
    'Verde',
    1,
    TRUE,
    0,
    TRUE
);