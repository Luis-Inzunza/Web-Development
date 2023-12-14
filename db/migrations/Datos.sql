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

