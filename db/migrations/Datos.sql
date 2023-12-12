-- Insertar dos usuarios

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

-- Insertar libros asociados al primer usuario (Juan)

INSERT INTO
    Libros (
        Titulo,
        Enfoque,
        Direc_img,
        Color_titulo,
        Color_fondo,
        Usuario_id,
        ultima_modificacion
    )
VALUES (
        'Libro de Juan 1',
        'Aventura',
        'gatito.png',
        '#FFFFFF',
        '#000000',
        1,
        CURRENT_TIMESTAMP
    );

-- Insertar libros asociados al segundo usuario (María)

INSERT INTO
    Libros (
        Titulo,
        Enfoque,
        Direc_img,
        Color_titulo,
        Color_fondo,
        Usuario_id,
        ultima_modificacion
    )
VALUES (
        'Libro de María 1',
        'Fantasía',
        'img_libro1',
        '#FF0000',
        '#00FF00',
        2,
        CURRENT_TIMESTAMP
    ), (
        'Libro de María 2',
        'Misterio',
        'otra_imagen.png',
        '#0000FF',
        '#FFFF00',
        2,
        CURRENT_TIMESTAMP
    );

-- Insertar páginas para el libro de Juan (usuario ID 1)

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
        'Libro de Juan 1',
        1,
        'Texto página 1',
        '#000000',
        '#FFFFFF',
        1,
        TRUE,
        1,
        FALSE
    ), (
        'Libro de Juan 1',
        2,
        'Texto página 2',
        '#FFFFFF',
        '#000000',
        2,
        FALSE,
        0,
        TRUE
    );

-- Insertar páginas para los libros de María (usuario ID 2)

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
        'Libro de María 1',
        1,
        'Texto página 1',
        '#FF0000',
        '#00FF00',
        3,
        TRUE,
        0,
        FALSE
    ), (
        'Libro de María 1',
        2,
        'Texto página 2',
        '#00FF00',
        '#FF0000',
        1,
        FALSE,
        1,
        TRUE
    ), (
        'Libro de María 2',
        1,
        'Texto página 1',
        '#0000FF',
        '#FFFF00',
        2,
        TRUE,
        0,
        FALSE
    ), (
        'Libro de María 2',
        2,
        'Texto página 2',
        '#FFFF00',
        '#0000FF',
        3,
        FALSE,
        1,
        TRUE
    );