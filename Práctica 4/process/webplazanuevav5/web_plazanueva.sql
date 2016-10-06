/*
SQLyog Trial v12.2.4 (64 bit)
MySQL - 10.1.13-MariaDB : Database - hotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotel`;

/*Table structure for table `habitacion` */

DROP TABLE IF EXISTS `habitacion`;

CREATE TABLE `habitacion` (
  `idHabitacion` int(11) NOT NULL,
  `tipoHabitacion` int(11) NOT NULL,
  PRIMARY KEY (`idHabitacion`),
  KEY `FK_habitacion` (`tipoHabitacion`),
  CONSTRAINT `FK_habitacion` FOREIGN KEY (`tipoHabitacion`) REFERENCES `tipohabitacion` (`idTipoHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `habitacion` */

insert  into `habitacion`(`idHabitacion`,`tipoHabitacion`) values 
(1,1),
(2,1),
(3,1),
(4,1),
(5,1),
(6,2),
(7,2),
(8,2),
(9,2),
(10,2),
(11,2),
(12,2),
(13,2),
(14,2),
(15,2),
(16,2),
(17,2),
(18,2),
(19,2),
(20,2),
(21,2),
(22,2),
(23,2),
(24,2),
(25,2),
(26,2),
(27,2),
(28,2),
(29,2),
(30,2),
(31,2),
(32,2);

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `idSeccion` int(10) unsigned NOT NULL COMMENT 'Seccion de la web.',
  `content` longtext COMMENT 'Contenido de la seccion',
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idSeccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hotel` */

insert  into `hotel`(`idSeccion`,`content`,`nombre`) values 
(0,'<div id=\"content\"> \r\n    \r\n    \r\n    <div id=\"leftPan\">\r\n      <div id=\"room\">\r\n        <h2></h2>\r\n          <a href=\"index.php?seccion=3\"><img src=\"images/img_has.jpg\" width=\"179\" height=\"81\" alt=\"\" /></a>\r\n        <p><span class=\"headline\"> con vistas a Plaza Nueva y a la Torre de la Vela,</span><br />\r\n           que pertenece al recinto de la Alhambra, le permitirán disfrutar de una perspectiva distinta de la ciudad. Disfrute de esta experiencia por un pequeño suplemento.\r\n            Asimismo el hotel dispone de habitaciones interiores, recomendables para personas que desean descansar con la máxima tranquilidad.\r\n            Las habitaciones también disponen de un cuarto de baño completo, aire acondicionado, TV, teléfono directo y una caja de seguridad gratuita para su mayor tranquilidad. </p>\r\n        <ul>\r\n          <li><a href=\"index.php?seccion=3&tipo=1\">Habitación doble o twin</a></li>\r\n          <li><a href=\"index.php?seccion=3&tipo=2\">Doble superior </a></li>\r\n          <li><a href=\"index.php?seccion=3&tipo=3\">Habitación triple </a></li>\r\n        </ul>\r\n      </div>  	  \r\n      <div id=\"services\">\r\n		</br>\r\n        <h2></h2>\r\n        <div class=\"servItem\">\r\n          <p><a href=\"index.php?seccion=1\">\r\n    <span class=\"headline\">Oferta dos noches</span><br /></a>\r\n    Disfrute de un 10% de descuento en estancias de dos noches.</br> <a href=\"index.php?seccion=1\">leer más...</a>\r\n</p>\r\n        </div>\r\n        <div class=\"servItem\">\r\n          <p><a href=\"index.php?seccion=1\">\r\n    <span class=\"headline\">Oferta por reserva anticipada</span><br /></a>\r\n    Disfruta de un 10% de descuento reservando con 21 días de antelación.</br> <a href=\"index.php?seccion=1\">leer más...</a>\r\n</p>     \r\n        </div>\r\n		<div class=\"servItem\">\r\n        <p><a href=\"index.php?seccion=1\">tenemos muchas más promociones</a></p>\r\n		</div>\r\n      </div>\r\n    </div>\r\n    <div id=\"rightPan\">\r\n      <div id=\"welcome\">\r\n        <p><span class=\"headline\"> El Hotel Plaza Nueva está situado en el pleno centro monumental, comercial y administrativo de Granada, a 10 minutos de la Alhambra.</span><br />         \r\n\r\n            El hotel ofrece una amplia y eficiente gama de servicios extra que satisfarán cualquier necesidad que le surja, reservas a shows de flamenco o visitas turísticas por la ciudad y la Alhambra.\r\n\r\n            El hotel le ofrece 25 amplias y luminosas habitaciones repartidas sobre 3 plantas con ascensor.\r\n\r\n            Cada planta del hotel y cada habitación poseen un nombre y encanto propio. Este nombre es una representación de un evento importante en la vida e historia de Granada. No tienen tarjetas magnéticas para abrir las puertas de las habitaciones, preferimos la originalidad que proporciona una tradicional llave.\r\n\r\n            El hotel ofrece el servicio de desayuno continental en la cafetería, donde podrá disfrutar de conexión WIFI. Asimismo podrá obtener mediante pago del servicio conexión WIFI en su habitación.\r\n\r\n            Confiamos en que disfrute plenamente su estancia entre nosotros así como de nuestra bella ciudad.\r\n           \r\n        <div class=\"clear\"></div>\r\n      </div>\r\n        <img src=\"images/hotel_plaza_nueva_fuente.jpg\" alt=\"Vista del Hotel\">\r\n\r\n\r\n      <div id=\"activities\">\r\n        <h2></h2>\r\n          <a href=\"index.php?seccion=4&tipo=1\"><img src=\"images/alhambra.jpg\" width=\"196\" height=\"70\" alt=\"\" /></a>\r\n        <p><a href=\"index.php?seccion=4&tipo=1\">\r\n    <span class=\"headline\">Visita guiada a la Alhambra</span><br /></a>\r\n    Descubrirá con nostros la única Ciudad Medieval Musulmana mejor conservada del mundo, la Alhambra; visitando sus palacios, Mexuar, Comares, Leones, Generalife; paseando por sus patios <a href=\"servicios/alhambra.html\">leer más...</a>\r\n</p>\r\n      </div>\r\n    </div>\r\n    <div class=\"clear\" id=\"end\"></div>\r\n  </div>','Hotel'),
(1,'	<div id=\"content\">\r\n\r\n      <span class=\"headline\">Disponemos de las siguientes promociones de las que podrá disfrutar:</span>\r\n      <div>\r\n          <p>\r\n              <a href=\"index.php?seccion=1\"><span class=\"headline\">OFERTA DOS NOCHES</span><br /></a>\r\n              Disfrute de un 10% de descuento en estancias de un mínimo de dos noches.\r\n      </div>\r\n      <br />\r\n      <div>\r\n          <p>\r\n              <a href=\"index.php?seccion=1\">\r\n                  <span class=\"headline\">\r\n                      OFERTA 10% DE DESCUENTO\r\n                  </span><br />\r\n              </a>\r\n              Disfrute de un 10% de descuento con esta tarifa no reembolsable.\r\n      </div>\r\n      <br />\r\n      <div>\r\n          <p>\r\n              <a href=\"index.php?seccion=1\">\r\n                  <span class=\"headline\">\r\n                      OFERTA RESERVA ANTICIPADA\r\n                  </span><br />\r\n              </a>\r\n              Disfruta de un 10% de descuento reservando con 21 días de antelación.\r\n      </div>\r\n      <br />\r\n     <table width=\"10%\" border=\"0\" cellpadding=\"0\">\r\n	  <tr>\r\n      <td><a href=\"images/hab1.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/hab1.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/hab2.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/hab2.jpg\" /><br />\r\n      </a></td>\r\n	  \r\n	  </tr>\r\n	   <tr>\r\n      <td><a href=\"images/hab3.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/hab3.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/hotel-noche.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/hotel-noche.jpg\" /><br />\r\n      </a></td>\r\n	  </tr>\r\n	  </table>\r\n	  \r\n	  <br /><br />	<br />	<br />	<br />	<br />	<br />	<br />  <br />	<br />	<br />	<br />	<br />	<br />	<br />  <br /> <br />  <br />\r\n\r\n  </div>','Promociones'),
(2,'\r\n<div id=\"content\">\r\n      <br />\r\n	  <table width=\"10%\" border=\"0\" cellpadding=\"0\">\r\n	  <tr>\r\n      <td><a href=\"images/hab1.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/hab1.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/hab2.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/hab2.jpg\" /><br />\r\n      </a></td>\r\n	  \r\n	  </tr>\r\n	   <tr>\r\n      <td><a href=\"images/hab3.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/hab3.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/hotel-noche.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/hotel-noche.jpg\" /><br />\r\n      </a></td>\r\n	  </tr>\r\n	   <tr>\r\n      <td><a href=\"images/alhambra-fuente.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/alhambra-fuente.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/alhambra2.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/alhambra2.jpg\" /><br />\r\n      </a></td>\r\n	  </tr>\r\n	   <tr>\r\n      <td><a href=\"images/thum01.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/thum01.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/thumb02.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/thumb02.jpg\" /><br />\r\n      </a></td>\r\n	  </tr>\r\n	    <tr>\r\n      <td><a href=\"images/thumb00.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/thumb00.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/thumb03.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/thumb03.jpg\" /><br />\r\n      </a></td>\r\n	  </tr>\r\n	    <tr>\r\n      <td><a href=\"images/thumb04.jpg\">\r\n      <img  width = \"250px\" height=\"175px\" src=\"images/thumb04.jpg\" /><br />\r\n      </a></td>\r\n	  <td><a href=\"images/thumb05.jpg\">\r\n          <img  width = \"250px\" height=\"175px\" src=\"images/thumb05.jpg\" /><br />\r\n      </a></td>\r\n	  </tr>  \r\n	  \r\n      \r\n</table>\r\n</div>\r\n','Fotos'),
(3,'Nuestras habitaciones con vistas a Plaza Nueva y a la Torre de la Vela, que pertenece al recinto de la Alhambra, le permitirán disfrutar de una perspectiva distinta de la ciudad. Disfrute de esta experiencia por un pequeño suplemento.\r\n<br />\r\n<br />Asimismo el hotel dispone de habitaciones interiores, recomendables para personas que desean descansar con la máxima tranquilidad.\r\n<br />\r\n<br />Las habitaciones también disponen de un cuarto de baño completo, aire acondicionado, TV, teléfono directo y una caja de seguridad gratuita para su mayor tranquilidad.\r\n<br />\r\n<br />\r\n\r\n<span class=\"headline\">Las habitaciones incluyen los siguientes servicios:</span><br />\r\n<ul>\r\n    </br>\r\n    <li>Recepción 24 horas</li>\r\n    <li>Conexión Wi-fi a internet</li>\r\n    <li>Bar-Cafetería</li>\r\n    <li>Consigna de equipajes</li>\r\n    <li>Aire acondicionado</li>\r\n    <li>Parking cubierto</li>\r\n    <li>Accesos adaptados</li>\r\n    <li>Servicio de habitaciones</li>\r\n    <br />\r\n</ul>   \r\n		 \r\n  \r\n','Habitaciones'),
(4,'Estos son los servicios de los que disfrutará durante su estancia en el Hotel Plaza Nueva, entre los que destacamos el servicio de cuna gratuito (según disponibilidad) y servicio de reserva de entradas para la Alhambra y para espectáculos de flamenco, así como packs de aventura en Sierra Nevada.  \r\n\r\n','Servicios'),
(5,'\r\n\r\n<html>\r\n<body>\r\n\r\n	 <div id=\"content\">\r\n\r\n      <a href=\"https://www.google.es/maps/place/Hotel+Plaza+Nueva/@37.17704,-3.596301,15z/data=!4m2!3m1!1s0x0:0x9253186efccf153a?sa=X&ved=0ahUKEwim5bDAt_vLAhWFtxQKHVukCvgQ_BIIhgEwCg\"><span class=\"headline\">MAPA</span></a></br></br>\r\n      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.975876823966!2d-3.5984950486717175!3d37.17704425399586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fcb8cb9390e1%3A0x9253186efccf153a!2sHotel+Plaza+Nueva!5e0!3m2!1ses!2ses!4v1458196168852\" width=\"500\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n      <br /></br></br></br>\r\n      <a href=\"index.php?seccion=5&tipo=1\"><span class=\"headline\">CONTACTO</span></a></br></br>\r\n      <ul>\r\n          <li><span class=\"headline\">Dirección:</span> Imprenta, nº 2</li><br />\r\n          <li><span class=\"headline\">Localidad:</span> Granada</li><br />\r\n          <li><span class=\"headline\">Provincia:</span> Granada</li><br />\r\n          <li><span class=\"headline\">País:</span> España</li><br />\r\n          <li><span class=\"headline\">Teléfono:</span> +34 958 215 273</li><br />\r\n          <li><span class=\"headline\">Fax:</span> +34 958 225 765</li><br />\r\n          <li><span class=\"headline\">E-mail:</span> info@hotel-plazanueva.com</li><br />\r\n          <li><a href=\"index.php?seccion=5&tipo=1\"><span class=\"headline\">Formulario de contacto</span></a></li>\r\n      </ul>\r\n      <br />\r\n      <br />\r\n\r\n      <span class=\"headline\">REDES SOCIALES</span></br></br>\r\n      <ul>\r\n          <a href=\"http://www.facebook.com\"><li><span class=\"headline\">Facebook</span></li></a>\r\n          <br />\r\n          <a href=\"http://twitter.com\"><li><span class=\"headline\">Twitter</span></li></a>\r\n          <br />\r\n          <a href=\"https://plus.google.com/\"><li><span class=\"headline\">Google+</span></li></a>\r\n          <br />\r\n\r\n      </ul>\r\n      <br />\r\n\r\n      <span class=\"headline\">COMO LLEGAR AL HOTEL PLAZA NUEVA</span></br>\r\n      </br>\r\n      Para llegar al Hotel Plaza Nueva toma el Anillo de Granada, dirección Motril-Sierra Nevada, y coge la salida número 128: Centro-Méndez Núñez. Continua por la avenida Fuente Nueva-Severo Ochoa y, sin tomar el túnel, gira a la derecha en la Avenida de la Constitución.\r\n      </br>\r\n      </br>\r\n      Al final hay una rotonda con una bandera de España. Gira a la izquierda en la Avenida del Hospicio (deja los Jardines del Triunfo a tu izquierda) y gira a la derecha (hay un semáforo en la intersección) Avenida Capitán Moreno.\r\n      </br>\r\n      </br>\r\n      Sigue recto hasta el final de la avenida y en la rotonda continúa recto. Luego gira a la izquierda (justo enfrente de un hotel) y pasa bajo el Arco o Puerta Elvira. Continúa por la calle Elvira. Hacia el final de la calle verás señales luminosas. Continúa recto y verás un kiosco. Al final de la calle Pan se encuentra la entrada principal del Hotel Plaza Nueva. Se puede llegar hasta la puerta del hotel para descargar el equipaje.\r\n      </br>\r\n      </br>\r\n      Si has reservado aparcamiento, situado a sólo 100 metros del hotel, te acompañaremos. La tarifa de aparcamiento es de 20,00 € al día y la hora de salida es a las 12:00. Recuerda que si cancelas el estacionamiento en el día de llegada, debes pagar el 50% del importe de la tarifa, ya que las plazas son limitadas.\r\n      </br>\r\n      </br>\r\n\r\n  </div>\r\n\r\n</body>\r\n</html>','Contacto y Mapa');

/*Table structure for table `reserva` */

DROP TABLE IF EXISTS `reserva`;

CREATE TABLE `reserva` (
  `idReserva` int(20) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(20) NOT NULL,
  `fechaEntrada` date NOT NULL,
  `fechaSalida` date NOT NULL,
  `precio` double NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`idReserva`),
  KEY `FK_reserva` (`cliente`),
  CONSTRAINT `FK_reserva` FOREIGN KEY (`cliente`) REFERENCES `usuario` (`nombreUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=696 DEFAULT CHARSET=latin1;

/*Data for the table `reserva` */

insert  into `reserva`(`idReserva`,`cliente`,`fechaEntrada`,`fechaSalida`,`precio`,`estado`) values 
(1,'admin','1970-01-01','1970-01-01',0,'IMBORRABLE'),
(695,'adri','0000-00-00','0000-00-00',0,'PROCESO');

/*Table structure for table `reservahabitacion` */

DROP TABLE IF EXISTS `reservahabitacion`;

CREATE TABLE `reservahabitacion` (
  `idReserva` int(11) DEFAULT NULL,
  `idHabitacion` int(11) DEFAULT NULL,
  KEY `idReserva` (`idReserva`),
  KEY `idHabitacion` (`idHabitacion`),
  CONSTRAINT `reservahabitacion_ibfk_1` FOREIGN KEY (`idReserva`) REFERENCES `reserva` (`idReserva`),
  CONSTRAINT `reservahabitacion_ibfk_2` FOREIGN KEY (`idHabitacion`) REFERENCES `habitacion` (`idHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reservahabitacion` */

insert  into `reservahabitacion`(`idReserva`,`idHabitacion`) values 
(1,1);

/*Table structure for table `servicio` */

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` mediumtext,
  `imgPath` mediumtext,
  `precio` double DEFAULT NULL,
  `web` mediumtext,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `servicio` */

insert  into `servicio`(`idServicio`,`nombre`,`descripcion`,`imgPath`,`precio`,`web`) values 
(1,'La Alhambra','Descubrirá con nosotros la única Ciudad Medieval Musulmana mejor conservada del mundo, la Alhambra; \r\nvisitando sus palacios, Mexuar, Comares, Leones, Generalife; paseando por sus patios, de los Arrayenes, \r\nla Reja, la Acequia, la Sultana; y disfrutando de sus jardines, de Partal, de la Medina y por suspuesto del \r\nGeneralife con sus gracioso juegos de agua, y su laberintico diseño.','images/alhambra2.jpg',12,'http://www.alhambra.org/'),
(2,'Sierra Nevada','En Sierra Nevada podrá admirar la nieve y visitar numerosas estaciones de deportes de invierno \r\ncomo son Snowboard, esquí o trineos. Lo pasará genial, garantizado.','images/sierra_nevada2.jpg',90,'http://sierranevada.es/');

/*Table structure for table `tipohabitacion` */

DROP TABLE IF EXISTS `tipohabitacion`;

CREATE TABLE `tipohabitacion` (
  `idTipoHabitacion` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` mediumtext,
  `imgPath` mediumtext,
  `precio` double DEFAULT NULL,
  `precioDesayuno` double DEFAULT NULL,
  PRIMARY KEY (`idTipoHabitacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tipohabitacion` */

insert  into `tipohabitacion`(`idTipoHabitacion`,`nombre`,`descripcion`,`imgPath`,`precio`,`precioDesayuno`) values 
(1,'Doble o Twin','En nuestra habitaciones standard disfrutará de todo el equipamento y comodidad que su estancia en Granada merece.','images/hab1_grande.jpg',49,63),
(2,'Doble Superior	','Disfrute de una magnífica vista de la plaza nueva y el centro de Granada desde nuestras habitaciones superiores.','images/hab2_grande.jpg',71,85),
(3,'Triple	','En nuestras habitaciones triples podrá disfrutar de sus vacaciones en familia o con amigos en el centro de Granada.','images/hab3.jpg',71,85);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `DNI` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT '0',
  `direccion` varchar(80) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`nombreUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`nombreUsuario`,`pass`,`nombre`,`DNI`,`email`,`admin`,`direccion`,`telefono`) values 
('admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL,'admin',1,NULL,NULL),
('adri','5e082012573775c13199192bf00694e7','Adrián Portillo Sánchez','77397029m','adri95cadiz@hotmail.',0,'C/ Cruz del sur, bloque 6\r\n2º, letra A','654980340'),
('hotel','nopass','Hotel Plaza Nueva',NULL,'info@hotel-plazanuev',0,'Imprenta, nº 2. 18010 Granada, Granada, España','+34 958 21'),
('juanmyh','73a011f44d6e1fe2677523e4b28a75da',NULL,NULL,'juanmihinojosa@hotma',0,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
