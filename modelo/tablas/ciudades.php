<?php

/**
 * Created by PhpStorm.
 * User: Cachu
 * Date: 09/mar/2017
 * Time: 05:06 PM
 */
class TablaCiudades extends bd
{
    function create_table()
    {
        $sql = <<<MySQL
CREATE TABLE ciudades
(
    id_ciudad bigint(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_estado bigint(20) NOT NULL,
    nombre_ciudad varchar(100) NOT NULL
);
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Aguascalientes');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Asientos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Calvillo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Cosío');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Jesús maria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Pabellón de arteaga');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Rincón de romos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'San josé de gracia');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'Tepezalá');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'San francisco de los romo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (1, 'El llano');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Ensenada');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Mexicali');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Tecate');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Tijuana');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Playas de rosarito');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Rosarito');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Ciudad guadalupe victoria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'San felipe');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'San quintín');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Ciudad morelos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Los algodones');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'La rumorosa');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Cataviña');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Colonet');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Cedros');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Guadalupe');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (2, 'Islas coronado');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (3, 'Comondú');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (3, 'Mulegé');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (3, 'La paz');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (3, 'Los cabos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (3, 'Loreto');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Calkiní');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Campeche');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Carmen');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Champotón');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Hecelchakán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Hopelchén');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Palizada');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Tenabo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Escárcega');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Calakmul');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (4, 'Candelaria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Acacoyagua ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Acala ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Acapetahua ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Aldama ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Altamirano ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Amatán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Amatenango de la frontera ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Amatenango del valle ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Angel albino corzo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Arriaga ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Bejucal de ocampo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Bella vista ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Benemérito de las américas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Berriozábal ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Bochil ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'El bosque 
');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Cacahoatán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Catazajá ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Cintalapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Coapilla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Comitán de domínguez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'La concordia ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Copainalá ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chalchihuitán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chamula ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chanal ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chapultenango ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chenalhó ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chiapa de corzo corzo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chiapilla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chicoasén ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chicomuselo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Chilón ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Escuintla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Francisco león ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Frontera comalapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Frontera hidalgo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'La grandeza ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Huhuetán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Huixtán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Huitiupán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Huixtla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'La independencia ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ixhuatán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ixtacomitán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ixtapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ixtapangajoya ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Jiquipilas jiquipilas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Juárez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Larráinzar ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'La libertad ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Mapastepec ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Maravilla tenejapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Marqués de comillas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Mazapa de madero ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Mazatán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Metapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Mitontic ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Montecristo de guerrero ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Motozintla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Nicolás ruíz ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ocosingo 
');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ocotepec ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ocozocoautla de espinosa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Ostuacán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Osumacinta ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Oxchuc ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Palenque ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Pantelhó ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Pantepec ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Pichucalco ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Pijijiapan ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'El porvenir ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Pueblo nuevo solistahuacán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Rayón ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Reforma ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Las rosas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Las rosas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Sabanilla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Salto de agua ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'San andrés duraznal ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'San cristobal de las casas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'San fernando ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'San juan cancuc ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'San lucas ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Santiago el pinar ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Siltepec ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Simojovel ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Sitalá ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Socoltenango ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Solosuchiapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Soyaló ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Suchiapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Suchiate ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Sunuapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tapachula ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tapalapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tapilula ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tecpatán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tenejapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Teopisca ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tila ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tonalá ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Totolapa ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'La trinitaria ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tumbalá ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tuxtla gutiérrez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tuxtla chico ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tuzantán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Tzimol ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Unión juárez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Venustiano carranza ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Villa comaltitlán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Villa corzo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Villaflores ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Yajalón ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (5, 'Zinacantán ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Ahumada');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Aldama');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Allende');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Aquiles serdánserdán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Ascensión');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Bachíniva');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Balleza');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Batopilas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Bocoyna');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (66, 'Buenaventura');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Camargo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Carichi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Casas grandes');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Coronado');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Coyame del sotol');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'La cruz');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Cuauhtémoc');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Cusihuiriáchi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Chihuahua');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Chínipas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Delicias');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Dr. belisario domínguez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Galeana');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Santa isabel');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Gómez farías');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Gran morelos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Guachochi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Guadalupe d.b.');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Guadalupe y calvo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Guazapares');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Hidalgo del parral');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Huejotitán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Ignacio zaragoza');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Janos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Jiménez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Juárez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Julimes');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'López');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Madera');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Maguarichi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Manuel benavides');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Matachi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Matamoros');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Meoqui');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Morelos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Moris');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Namiquipa');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Nonoava');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Nuevo casas grandes');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Ocampo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Ojinaga');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Praxedis g. guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Riva palacio');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Rosales');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Rosario');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'San francisco de borja');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'San francisco de conchos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'San francisco del oro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Santa bárbara');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Satevó');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Saucillo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Temósachi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'El tule');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Urique');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Uruáchi');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (6, 'Valle de zaragoza');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Abasolo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Acuña');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Allende');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Arteaga');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Candela');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Castaños');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Cuatrocienegas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Escobedo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Francisco i. madero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Frontera');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'General cepeda');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Hidalgo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Jimenez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Juarez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Lamadrid');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Matamoros');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Monclova');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Morelos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'San buenaventura');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'San juan de sabinas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'San pedro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Sierra mojada');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Torreon');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, 'Viesca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (7, ' villa union');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Armería');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Colima');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Comala');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Coquimatlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Cuauhtémoc');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Ixtlahuacán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Manzanillo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Minatitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Tecomán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (8, 'Villa de álvarez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Canatlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Canelas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Coneto de comonfort');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Cuencamé');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Durango');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'General simón bolívar');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Gómez palacio');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Guadalupe victoria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Guanaceví');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Hidalgo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Indé');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Ciudad lerdo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Mapimí');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Mezquital');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Nazas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Nombre de dios');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Ocampo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Oro, el');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Otáez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Pánuco de coronado');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Peñón blanco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Poanas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Pueblo nuevo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Rodeo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'San bernardo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'San dimas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'San juan de guadalupe');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'San juan del río');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'San luis del cordero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'San pedro del gallo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Santiago papasquiaro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Súchil');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Tamazula');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Tepehuanes');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Tlahualilo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Topia');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Vicente guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Nuevo ideal');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Santa clara');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Santiago papasquiaro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Súchil');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Tamazula');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Tepehuanes');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Tlahualilo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Topia');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Vicente guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (10, 'Nuevo ideal');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Acambay');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Acolman');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Aculco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Almoloya de alquisiras');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Almoloya de  juárez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Almoloya del río');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Amanalco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Amatepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Amecameca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Apaxco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Atenco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Atizapán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Atizapán de zaragoza');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Atlacomulco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Atlautla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Axapusco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ayapango');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Calimaya');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Capulhuac');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Coacalco de berriozábal');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Coatepec harinas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Cocotitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Coyotepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Cuautitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chalco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chapa de mota');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chapultepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chiautla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chicoloapan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chiconcuac');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Chimalhuacán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Donato guerra');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ecatepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ecatzingo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Hueypoxtla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Huixquilucan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Isidro fabela');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ixtapaluca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ixtapan de la sal');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ixtapan del oro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ixtlahuaca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Xalatlaco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Jaltenco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Jilotepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Jilotzingo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Jiquipilco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Jocotitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Joquicingo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Juchitepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Lerma');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Malinalco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Melchor ocampo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Metepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Mexicaltzingo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Morelos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Naucalpan de juárez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Nezahualcóyotl');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Nextlalpan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Nicolás romero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Nopaltepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ocoyoacac');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ocuilan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'El oro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Otumba');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Otzoloapan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Otzolotepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Ozumba');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Papalotla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'La paz');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Polotitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Rayón');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'San antonio la isla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'San felipe del progreso');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'San martín de las pirámides');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'San mateo atenco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'San simón de guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Santo tomás');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Soyaniquilpan de juárez');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Sultepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tecámac');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tejupilco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Temamatla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Temascalapa');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Temascalcingo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Temascaltepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Temoaya');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tenancingo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tenango del aire');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tenango del valle');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Teoloyucan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Teotihuacán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tepetlaoxtoc');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tepetlixpa');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tepotzotlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tequixquiac');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Texcaltitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Texcalyacac');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Texcoco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tezoyuca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tianguistenco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Timilpan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tlalmanalco');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tlalnepantla de baz');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tlatlaya');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Toluca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tonatico');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tultepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Tultitlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Valle de bravo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Villa de allende');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Villa del carbón');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Villa guerrero');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Villa victoria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Xonacatlán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Zacazonapan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Zacualpan');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Zinacantepec');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Zumpahuacán');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Zumpango');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Cuautitlán izcalli');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Valle de chalco solidaridad');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Luvianos');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'San josé del rincón');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (11, 'Santa maría tonanitla');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Abasolo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Acambaro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Allende');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Apaseo el alto');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Atarjea');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Celaya');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Manuel doblado');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Comonfort');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Coroneo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Cortazar');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Cueramaro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Doctor mora');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Dolores hidalgo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Guanajuato');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Huanimaro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Irapuato');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Jaral del progreso');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Jerecuaro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Leon');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Moroleon');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Ocampo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Penjamo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Pueblo nuevo');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Purisima del rincon');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Romita');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Salamanca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Salvatierra');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'San diego de la union');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'San felipe');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'San francisco del rincon');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'San jose iturbide');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'San luis de la paz');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Santa catarina');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Santa cruz de juventino rosas');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Santiago maravatio');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Silao');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Tarandacuao');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Tarimoro');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Tierra blanca');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Uriangato');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Valle de santiago');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Victoria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Villagran');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Xichu');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (12, 'Yuriria');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Acapulco de juárez  ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Acatepec ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Ahuacuotzingo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Ajuchitlan del progreso ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Alcozauca de guerrero ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Alpoyeca ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Apaxtla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Arcelia ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Atenango del río ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Atlamajalcingo del monte ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Atlixtac ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Atoyac de álvarez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Ayutla ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Azoyú ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Benito juárez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Buenavista de cuéllar ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Chilapa de álvarez ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Chilpancingo de los bravo ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Coahuayutla de josé maría izazaga ');
INSERT INTO ciudades (id_estado, nombre_ciudad) VALUES (13, 'Cochoapa el grande');
MySQL;
        return $this->multiconsulta($sql);
    }

    function selectCiudadesFromEstado($id_estado)
    {
        $sql = /** @lang MySQL */
            <<<MySQL
SELECT
  id_ciudad     idCiudad,
  nombre_ciudad nombreCiudad
FROM ciudades
WHERE id_estado = $id_estado
MySQL;
        return $this->consulta($sql);
    }
}