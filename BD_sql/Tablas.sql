-- Usuarios

CREATE TABLE
    USUARIOS (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(50),
        Apellido VARCHAR(50),
        Email VARCHAR(100),
        Contrasena VARCHAR(100)
    );

-- Libros (su informacion de portada)

CREATE TABLE
    Libros (
        Titulo VARCHAR(100) PRIMARY KEY,
        Direc_img VARCHAR(200),
        Color VARCHAR(20)
    );

-- Paginas (la informacion a presentar en las paginas), tiene una relacion Libros 1--a--n paginas

CREATE TABLE
    Paginas (
        Titulo_Libro VARCHAR(100),
        Index_Pag INT,
        Texto TEXT,
        Color_Texto VARCHAR(20),
        Color_Fondo VARCHAR(20),
        Formato TINYINT,
        Audio BOOLEAN,
        Voz TINYINT,
        Subrayado BOOLEAN,
        PRIMARY KEY (Titulo_Libro, Index_Pag),
        FOREIGN KEY (Titulo_Libro) REFERENCES Libros(Titulo)
    );

-- Agregamos una relacion de Ususarios 1--a--n Libros

ALTER TABLE Libros
ADD COLUMN Usuario_ID INT,
ADD
    FOREIGN KEY (Usuario_ID) REFERENCES Usuarios(ID);