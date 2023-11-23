-- Datos artificiales para Usuario

INSERT INTO
    USUARIOS (
        Nombre,
        Apellido,
        Email,
        Contrasena
    )
VALUES (
        'Juan',
        'Pérez',
        'juan@example.com',
        'contraseña1'
    ), (
        'María',
        'González',
        'maria@example.com',
        'contraseña2'
    ), (
        'Carlos',
        'López',
        'carlos@example.com',
        'contraseña3'
    );

-- Datos artificuales para Libros

INSERT INTO
    Libros (Titulo, Direc_img, Color)
VALUES (
        'El señor de los anillos',
        'imagen1.jpg',
        'Verde'
    ), (
        'Cien años de soledad',
        'imagen2.jpg',
        'Azul'
    );

-- Datos artificiales para Paginas

INSERT INTO
    Paginas (
        Titulo_Libro,
        Index_Pag,
        Texto,
        Color_Texto,
        Color_Fondo,
        Formato,
        Audio,
        Voz,
        Subrayado,
        Direc_img
    )
VALUES (
        'El señor de los anillos',
        1,
        'Texto página 1',
        'Negro',
        'Blanco',
        1,
        TRUE,
        1,
        FALSE,
        'imagen1_pag1.jpg'
    ), (
        'El señor de los anillos',
        2,
        'Texto página 2',
        'Blanco',
        'Negro',
        2,
        FALSE,
        0,
        TRUE,
        'imagen1_pag2.jpg'
    ), (
        'El señor de los anillos',
        3,
        'Texto página 3',
        'Azul',
        'Amarillo',
        3,
        TRUE,
        1,
        FALSE,
        'imagen1_pag3.jpg'
    ), (
        'El señor de los anillos',
        4,
        'Texto página 4',
        'Verde',
        'Rojo',
        1,
        FALSE,
        0,
        TRUE,
        'imagen1_pag4.jpg'
    ), (
        'El señor de los anillos',
        5,
        'Texto página 5',
        'Rojo',
        'Verde',
        2,
        TRUE,
        1,
        TRUE,
        'imagen1_pag5.jpg'
    ), (
        'Cien años de soledad',
        1,
        'Texto página 1',
        'Negro',
        'Blanco',
        3,
        TRUE,
        0,
        FALSE,
        'imagen2_pag1.jpg'
    ), (
        'Cien años de soledad',
        2,
        'Texto página 2',
        'Blanco',
        'Negro',
        1,
        FALSE,
        1,
        TRUE,
        'imagen2_pag2.jpg'
    ), (
        'Cien años de soledad',
        3,
        'Texto página 3',
        'Azul',
        'Amarillo',
        2,
        TRUE,
        0,
        FALSE,
        'imagen2_pag3.jpg'
    ), (
        'Cien años de soledad',
        4,
        'Texto página 4',
        'Verde',
        'Rojo',
        3,
        FALSE,
        1,
        TRUE,
        'imagen2_pag4.jpg'
    ), (
        'Cien años de soledad',
        5,
        'Texto página 5',
        'Rojo',
        'Verde',
        1,
        TRUE,
        0,
        TRUE,
        'imagen2_pag5.jpg'
    );