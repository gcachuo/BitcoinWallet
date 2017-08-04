CREATE TABLE `_acciones`
(
  id_accion          BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  descripcion_accion VARCHAR(100)     NOT NULL
  COMMENT 'palabra en minusculas para manejo en codigo, *no es el nombre de la accion*',
  estatus_accion     BIT DEFAULT b'1' NULL,
  CONSTRAINT acciones_descripcion_accion_uindex
  UNIQUE (descripcion_accion)
);

CREATE TABLE `_modulos`
(
  id_modulo      BIGINT           NOT NULL
    PRIMARY KEY,
  icono_modulo   VARCHAR(100)     NULL,
  padre_modulo   BIGINT           NOT NULL,
  orden_modulo   BIGINT           NOT NULL,
  navegar_modulo VARCHAR(100)     NULL,
  estatus_modulo BIT DEFAULT b'1' NULL
);

CREATE TABLE `_perfiles`
(
  id_perfil         BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  id_usuario_create BIGINT           NOT NULL
  COMMENT 'usuario que creo el perfil',
  nombre_perfil     VARCHAR(100)     NOT NULL,
  estatus_perfil    BIT DEFAULT b'1' NOT NULL,
  CONSTRAINT `_perfiles_nombre_perfil_pk`
  UNIQUE (nombre_perfil)
);

CREATE TABLE `_usuarios`
(
  id_usuario        BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  nombre_usuario    VARCHAR(100)       NULL,
  login_usuario     VARCHAR(50)        NOT NULL,
  password_usuario  VARCHAR(255)       NOT NULL,
  correo_usuario    VARCHAR(255)       NULL,
  estatus_usuario   BIT DEFAULT b'1'   NOT NULL,
  perfil_usuario    BIGINT DEFAULT '1' NOT NULL,
  id_usuario_create BIGINT             NOT NULL
  COMMENT 'usuario que creo el registro',
  CONSTRAINT usuarios_login_usuario_uindex
  UNIQUE (login_usuario)
);

CREATE INDEX usuarios_perfiles_id_perfil_fk
  ON `_usuarios` (perfil_usuario);

CREATE TABLE categorias
(
  id_categoria      VARCHAR(255)     NOT NULL
    PRIMARY KEY,
  nombre_categoria  VARCHAR(100)     NOT NULL,
  estatus_categoria BIT DEFAULT b'1' NULL,
  fija_categoria    BIT DEFAULT b'0' NULL
);

CREATE TABLE ciudades
(
  id_ciudad     BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  id_estado     BIGINT       NOT NULL,
  nombre_ciudad VARCHAR(100) NOT NULL
);

CREATE TABLE clientes
(
  id_cliente        BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  nombre_cliente    VARCHAR(100)     NOT NULL,
  razon_cliente     VARCHAR(100)     NULL,
  rfc_cliente       VARCHAR(100)     NULL,
  calle_cliente     VARCHAR(255)     NULL,
  numext_cliente    VARCHAR(10)      NULL,
  numint_cliente    VARCHAR(10)      NULL,
  colonia_cliente   VARCHAR(100)     NULL,
  cp_cliente        INT              NULL,
  id_ciudad         BIGINT           NOT NULL,
  localidad_cliente VARCHAR(100)     NULL,
  contacto_cliente  VARCHAR(100)     NULL,
  correo_cliente    VARCHAR(255)     NOT NULL,
  telefono_cliente  VARCHAR(100)     NULL,
  saldo_cliente     DECIMAL(12, 2)   NULL,
  id_usuario_create BIGINT           NOT NULL,
  estatus_cliente   BIT DEFAULT b'1' NULL
);

CREATE TABLE cuentas
(
  id_cuenta         BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  nombre_cuenta     VARCHAR(100)                  NOT NULL,
  saldo_cuenta      DECIMAL(12, 2) DEFAULT '0.00' NULL,
  id_usuario_create BIGINT                        NOT NULL,
  estatus_cuenta    BIT DEFAULT b'1'              NULL
);

CREATE INDEX cuentas_id_cuenta_index
  ON cuentas (id_cuenta);

CREATE TABLE estados
(
  id_estado     BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  nombre_estado VARCHAR(100) NOT NULL,
  CONSTRAINT estados_nombre_estado_uindex
  UNIQUE (nombre_estado)
);

CREATE TABLE perfiles_acciones
(
  id_perfil_accion BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  id_perfil        BIGINT NOT NULL,
  id_accion        BIGINT NOT NULL,
  id_modulo        BIGINT NOT NULL,
  CONSTRAINT perfiles_acciones_id_accion_id_perfil_id_modulo_pk
  UNIQUE (id_accion, id_perfil, id_modulo)
);

CREATE TABLE tarjetas
(
  id_tarjeta           BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  id_usuario           BIGINT       NOT NULL,
  id_paypal_card       VARCHAR(255) NOT NULL,
  id_payer_paypal_card VARCHAR(255) NOT NULL,
  number_paypal_card   VARCHAR(16)  NOT NULL,
  delete_link_paypal   VARCHAR(255) NOT NULL,
  CONSTRAINT tarjetas_id_paypal_card_uindex
  UNIQUE (id_paypal_card),
  CONSTRAINT tarjetas_delete_link_paypal_uindex
  UNIQUE (delete_link_paypal)
);

CREATE TABLE transacciones
(
  id_transaccion        BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  fecha_transaccion     DATE             NOT NULL,
  concepto_transaccion  VARCHAR(100)     NOT NULL,
  categoria_transaccion VARCHAR(255)     NULL,
  tipo_transaccion      BIGINT           NOT NULL,
  monto_transaccion     DECIMAL(12, 2)   NOT NULL,
  id_usuario_create     BIGINT           NOT NULL,
  estatus_transaccion   BIT DEFAULT b'1' NULL,
  imagen_transaccion    VARCHAR(255)     NOT NULL,
  id_cuenta             BIGINT           NOT NULL
);

CREATE TABLE traspasos
(
  id_traspaso            BIGINT AUTO_INCREMENT
    PRIMARY KEY,
  observaciones_traspaso VARCHAR(255) NULL,
  id_transaccion_origen  BIGINT       NOT NULL,
  id_transaccion_destino BIGINT       NOT NULL,
  CONSTRAINT traspasos_transacciones_id_transaccion_origen_fk
  FOREIGN KEY (id_transaccion_origen) REFERENCES transacciones (id_transaccion),
  CONSTRAINT traspasos_transacciones_id_transaccion_destino_fk
  FOREIGN KEY (id_transaccion_destino) REFERENCES transacciones (id_transaccion)
);