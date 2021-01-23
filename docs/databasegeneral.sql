CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID USUARIO',
  `usuario_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre',
  `usuario_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Apellido',
  `usuario_login` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Login',
  `usuario_password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contraseña',
  `usuario_fecha_creacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha Creación',
  `usuario_fecha_modificacion` timestamp NULL DEFAULT NULL COMMENT 'Fecha modificación\n',
  `usuario_fecha_ultimo_acceso` timestamp NULL DEFAULT NULL COMMENT 'Fecha último acceso',
  `usuario_email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo Electrónico',
  `usuario_telefono_1` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Teléfono 1',
  `usuario_telefono_2` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Teléfono 2',
  `usuario_direccion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT 'Dirección',
  `usuario_activo` tinyint(1) DEFAULT '1',
  `usuario_online` tinyint(1) DEFAULT '0',
  `usuario_perfil` varchar(45) NOT NULL COMMENT 'Perfíl',
  `usuario_imagen_1` text,
  `usuario_estado` varchar(20) DEFAULT NULL COMMENT 'Disponibilidad',
  `usuario_mensaje_publico` varchar(100) DEFAULT NULL COMMENT 'Mensaje al público',
  `usuario_genero` varchar(45) DEFAULT NULL COMMENT 'Género',
  `usuario_fecha_nacimiento` timestamp NULL DEFAULT NULL,
  
  `authKey` text DEFAULT NULL COMMENT '',
  `accessToken` text DEFAULT NULL COMMENT '',
  
  
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_login`, `usuario_password`, `usuario_fecha_creacion`, `usuario_fecha_modificacion`, `usuario_fecha_ultimo_acceso`, `usuario_email`, `usuario_telefono_1`, `usuario_telefono_2`, `usuario_direccion`, `usuario_activo`, `usuario_online`, `usuario_perfil`, `usuario_imagen_1`, `usuario_estado`, `usuario_mensaje_publico`, `usuario_genero`, `usuario_fecha_nacimiento`, `authKey`, `accessToken`) VALUES ('1', 'Brayan', 'Ochoa', 'brayad@gmail.com', '5ca33d221fd09f16c1ecba9c1aadc3eb', NULL, NULL, NULL, 'brayad@gmail.com', '+584167235018', NULL, NULL, '1', '0', 'administrador', NULL, NULL, NULL, NULL, NULL, NULL, NULL);