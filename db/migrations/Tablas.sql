-- Usuarios

CREATE TABLE
    Usuarios (
        Id INT AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(50),
        Apellido VARCHAR(50),
        Email VARCHAR(100),
        Contrasena VARCHAR(100)
    );

-- Libros (su informacion de portada)

CREATE TABLE
    Libros (
        Titulo VARCHAR(100) PRIMARY KEY,
        Enfoque VARCHAR(100),
        Direc_img VARCHAR(100),
        Color_titulo VARCHAR(7),
        Color_fondo VARCHAR(7),
        Usuario_id INT,
        ultima_modificacion TIMESTAMP,
        FOREIGN KEY (Usuario_id) REFERENCES Usuarios(Id)
    );

-- Paginas (la informacion a presentar en las paginas), tiene una relacion Libros 1--a--n paginas

CREATE TABLE
    Paginas (
        Titulo_libro VARCHAR(100),
        Index_pag INT,
        Texto TEXT,
        Color_texto VARCHAR(7),
        Color_fondo VARCHAR(7),
        Formato TINYINT,
        Audio BOOLEAN,
        Voz TINYINT,
        Subrayado BOOLEAN,
        PRIMARY KEY (Titulo_libro, Index_pag),
        FOREIGN KEY (Titulo_libro) REFERENCES Libros(Titulo)
    );