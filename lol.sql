DROP DATABASE IF EXISTS lol;
CREATE DATABASE lol CHARACTER SET utf8mb4;
USE lol;

CREATE TABLE champ (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(100) NOT NULL,
rol ENUM('Assasin','Fighter','Mage','Marksman','Support','Tank') NOT NULL,
difficulty ENUM('Baja','Moderada','Alta') NOT NULL,
`description` TEXT NOT NULL
);

INSERT INTO champ VALUES(0,'Caitlyn','Marksman','Moderada','Reconocida como su mejor pacificadora, Caitlyn es también la mejor arma de Piltover para librar a la ciudad de sus elusivos elementos criminales. A menudo trabaja con Vi, y actúa como un frío y eficiente contrapunto para la naturaleza más impetuosa de su socia. A pesar de que lleva un rifle hextech único, el arma más poderosa de Caitlyn es su inteligencia superior, lo que le permite colocar trampas elaboradas para cualquier infractor de la ley lo suficientemente necio como para operar en la Ciudad del Progreso.');
INSERT INTO champ VALUES(0,'Amumu','Tank','Baja','Cuenta la leyenda que Amumu es un alma solitaria y melancólica de la vieja Shurima que vaga por el mundo en busca de un amigo. Condenado por una maldición ancestral, su destino es permanecer solo para siempre, pues su tacto es muerte y su cariño, la perdición. Aquellos que afirman haberlo visto lo describen como un cadáver viviente, menudo y cubierto de vendajes. Amumu ha suscitado mitos, canciones y folclore transmitidos de generación en generación, hasta tal punto que ya es imposible separar la realidad de la ficción.');
INSERT INTO champ VALUES(0,'Gangplank','Fighter','Alta','Tan impredecible como brutal, el destronado rey de los piratas conocido como Gangplank es temido a lo largo y ancho del mundo. Antes gobernaba la ciudad portuaria de Aguas Estancadas, y aunque su reinado haya terminado, hay quienes creen que esto solo lo ha hecho más peligroso. Gangplank preferiría ver Aguas Estancadas bañada en sangre una vez más antes de dejar que alguien más la tomase. Ahora con pistola, machete y barriles de pólvora, está decidido a reclamar lo que ha perdido.');
INSERT INTO champ VALUES(0,'Karma','Mage','Moderada','No hay mortal que ejemplifique las tradiciones espirituales de Jonia mejor que Karma. Es la personificación de un alma antigua reencarnada un sinfín de veces, que acumula los recuerdos de las vidas pasadas a la nueva y que ha sido bendecida con un poder que pocos pueden comprender. Ha hecho lo que estaba en su mano para guiar a su pueblo en los recientes tiempos de crisis, pero sabe que la paz y la armonía solo se alcanzarán pagando un alto precio, tanto para ella como para la tierra que más aprecia.');
INSERT INTO champ VALUES(0,'Ivern','Support','Moderada','Ivern Bósquez, conocido por muchos como el Padre Arborescente, es un ser peculiar, mitad humano y mitad árbol, que deambula por los bosques de Runaterra y cultiva la vida allá donde va. Conoce los secretos del mundo natural y es buen amigo de todo lo que crece, vuela o se refugia en él. Ivern comparte su curiosa sabiduría con todo aquel con el que se encuentra, rejuvenece los bosques y, de vez en cuando, confía sus secretos a mariposas indiscretas.');

CREATE TABLE `user` (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(100) NOT NULL,
username VARCHAR(15) NOT NULL UNIQUE,
`password` TEXT NOT NULL,
email VARCHAR(30) NOT NULL UNIQUE
);