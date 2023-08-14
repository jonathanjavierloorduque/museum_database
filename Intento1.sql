USE `intento1`;
DROP DATABASE `intento1`;
DROP TABLE Dimension;
DROP TABLE Condicion_legal; 
DROP TABLE Custodio;
DROP TABLE Objeto;
DROP TABLE Datos_de_control;



CREATE TABLE  Datos_de_control(
                Inventariado_por VARCHAR(200) NOT NULL,
                Entidad_investigadora VARCHAR(200),
                Revisado_por VARCHAR(200),
                Aprobado_por VARCHAR(200),
                Registro_fotografico VARCHAR(200),
                Fecha_de_inventario VARCHAR(200),
                Fecha_de_revision VARCHAR(200),
                Fecha_de_aprobacion VARCHAR(200),
                Fecha_de_actualizacion VARCHAR(200),
                PRIMARY KEY (Inventariado_por)
				
);



CREATE TABLE Objeto (
                cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                Inventariado_por VARCHAR(200) NOT NULL,
                Numero_registro VARCHAR(100),
                Bien_cultural VARCHAR(100),
                Material VARCHAR(100),
                Periodo_historico VARCHAR(100),
                Cronologia VARCHAR(100),
                Fijacion_cultural VARCHAR(100),
                Fotografia BLOB,
                Descripcion_fotografia VARCHAR(200),
                Procedencia_del_bien_cultural VARCHAR(100),
                Nombre_del_sitio VARCHAR(200),
                Investigador_responsable_procedencia VARCHAR(200),
                Unidad_Cateo VARCHAR(200),
                Nivel VARCHAR(200),
                Profundidad VARCHAR(200),
                Nombre_del_Proyecto VARCHAR(200),
                Codigo_de_control_de_investigacion VARCHAR(200),
                Descripcion_del_contexto_arqueologico VARCHAR(10000),
                Regimen_custodia VARCHAR(200),
                codigo_anterior_info_relacionada VARCHAR(200),
                Fichas_relacionadas VARCHAR(200),
                Otros_Codigos VARCHAR(200),
                Observaciones VARCHAR(2000),
                Bibliografa VARCHAR(200),
                PRIMARY KEY (cod_objeto),
                FOREIGN KEY (Inventariado_por) REFERENCES Datos_de_control (Inventariado_por)
);
CREATE TABLE Custodio (
                cod_persona VARCHAR(200) NOT NULL,
                cod_objeto VARCHAR(200) NOT NULL,
                Rol VARCHAR(200) NOT NULL,
                Nombre_custodio VARCHAR(200) NOT NULL,
                PRIMARY KEY (cod_persona, cod_objeto),
                FOREIGN KEY (cod_objeto) REFERENCES Objeto (cod_objeto)
);

CREATE TABLE Condicion_legal(
				cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                Proceso_juridico VARCHAR(200) NOT NULL ,
                Lugar_del_proceso VARCHAR(200),
                Tipo_de_proceso VARCHAR(200),
                N_de_Proceso VARCHAR(200),
                Codigo_de_sustraccion VARCHAR(200),
                Observaciones VARCHAR(2000),
                PRIMARY KEY(cod_objeto, Proceso_juridico),
                FOREIGN KEY (cod_objeto) REFERENCES Objeto(cod_objeto)
);


CREATE TABLE Dimension (
				cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                Descripcion_de_la_dimension  VARCHAR(1000),
                Valor_de_dimension VARCHAR(200),
                PRIMARY KEY (cod_objeto),
                FOREIGN KEY (cod_objeto) REFERENCES Objeto(cod_objeto)

);

CREATE TABLE Descripcion (
                cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                Tipo_de_descripcion VARCHAR(200),
                Descripcion_del_tipo_des VARCHAR(10000),
                PRIMARY KEY (cod_objeto),
                FOREIGN KEY (cod_objeto) REFERENCES Objeto(cod_objeto)

);

CREATE TABLE Movimiento(
                cod_movimiento VARCHAR(200) NOT NULL,
                Lugar_actual VARCHAR(200),
                Lugar_destino VARCHAR(200),
                Tipo_de_entrega VARCHAR(200),
                PRIMARY KEY(cod_movimiento)
);

CREATE TABLE Objeto_Movimiento (
                cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                cod_movimientO VARCHAR(200) NOT NULL,
                Hora_y_fecha_movimiento DATE,
                Persona_responsable VARCHAR (200),
                PRIMARY KEY (cod_objeto),
                FOREIGN KEY (cod_movimiento) REFERENCES Movimiento (cod_movimiento),
                FOREIGN KEY ( cod_objeto) REFERENCES Objeto (cod_objeto)
);

CREATE TABLE Tipo_de_Recoleccion (
                cod_objeto VARCHAR(200) NOT NULL,
                Metodo_Prodecencia VARCHAR(200),
                PRIMARY KEY (cod_objeto),
                FOREIGN KEY ( cod_objeto) REFERENCES Objeto (cod_objeto)
);

CREATE TABLE Estado(
				cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                cod_estado VARCHAR(200) NOT NULL,
                Descripcion_del_estado VARCHAR(10000),
                Integridad VARCHAR(200),
                PRIMARY KEY (cod_estado),
                FOREIGN KEY ( cod_objeto) REFERENCES Objeto (cod_objeto)
);

CREATE TABLE Factor(
				cod_factor VARCHAR(200) NOT NULL,
                cod_estado VARCHAR(200) NOT NULL,
                PRIMARY KEY (cod_factor),
				FOREIGN KEY (cod_estado) REFERENCES Estado (cod_estado)
);

CREATE TABLE Sub_Factor(
				cod_factor VARCHAR(200) NOT NULL,
                cod_subfactor VARCHAR(200) NOT NULL,
                Descripcion_subfactor VARCHAR(10000) NOT NULL,
                FOREIGN KEY (cod_factor) REFERENCES Factor (cod_factor)
);

CREATE TABLE Informacion_clasificada (
                cod_info VARCHAR(200) NOT NULL,
                cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                Fotografas_url VARCHAR(2083) ,
                Descripcion_de_fotografiasurl VARCHAR(10000),
                Escaneo_url VARCHAR(200) ,
                Catlogo VARCHAR(200) ,
                Sector VARCHAR(200) ,
                Subsector VARCHAR(200) ,
                Referencia VARCHAR(200) ,
                Zona VARCHAR(200) ,
                Tipo VARCHAR(200) ,
                Accin VARCHAR(200) ,
                UnidadPL VARCHAR(200) ,
                Depsito VARCHAR(200) ,
                Prof_cmbs VARCHAR(200) ,
                X VARCHAR(200) ,
                Y VARCHAR(200) ,
                Z VARCHAR(200) ,
                PRIMARY KEY (cod_info, cod_objeto),
                FOREIGN KEY ( cod_objeto) REFERENCES Objeto (cod_objeto)
);


CREATE TABLE Localizacion (
                cod_localizacion VARCHAR(200) NOT NULL,
                cod_objeto VARCHAR(200) NOT NULL UNIQUE,
                Provincia VARCHAR(200),
                Canton VARCHAR(200),
                Parroquia VARCHAR(200),
                RecintoComuna VARCHAR(200),
                Contenedor VARCHAR(200),
                Subcontenedor VARCHAR(200),
                Direccin VARCHAR(200),
                Coleccion VARCHAR(200),
                Coordenadas VARCHAR(200),
                Coordenada_EsteX VARCHAR(200),
                Coordenada_NorteY VARCHAR(200),
                Coordenada_AltitudZ VARCHAR(200),
                Coordenada_EsteX_1 VARCHAR(200),
                Coordenada_NorteY_1 VARCHAR(200),
                Coordenada_AltitudZ_1 VARCHAR(200),
                PRIMARY KEY (cod_localizacion, cod_objeto),
                FOREIGN KEY ( cod_objeto) REFERENCES Objeto (cod_objeto)
);


