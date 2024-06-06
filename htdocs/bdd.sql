CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(50),
    nom VARCHAR(50),
    login VARCHAR(50),
    email VARCHAR(100),
    annee_naissance INT,
    ville VARCHAR(50),
    departement INT
);
INSERT INTO utilisateurs (prenom, nom, login, email, annee_naissance, ville, departement) VALUES
('Jean', 'Dupont', 'jdupont', 'jdupont@ifpa86.fr', 1990, 'Paris', 75),
('Marie', 'Martin', 'mmartin', 'mmartin@ifpa86.fr', 1985, 'Lyon', 69),
('Pierre', 'Durand', 'pdurand', 'pdurand@ifpa86.fr', 1988, 'Marseille', 13),
('Sophie', 'Lefevre', 'slefevre', 'slefevre@ifpa86.fr', 1992, 'Bordeaux', 33),
('Nicolas', 'Garcia', 'ngarcia', 'ngarcia@ifpa86.fr', 1980, 'Toulouse', 31),
('Camille', 'Leroy', 'cleroy', 'cleroy@ifpa86.fr', 1983, 'Lille', 59),
('Julie', 'Moreau', 'jmoreau', 'jmoreau@ifpa86.fr', 1987, 'Strasbourg', 67),
('Thomas', 'Dubois', 'tdubois', 'tdubois@ifpa86.fr', 1995, 'Nantes', 44),
('Sarah', 'Roux', 'sroux', 'sroux@ifpa86.fr', 1991, 'Nice', 06),
('Antoine', 'Fournier', 'afournier', 'afournier@ifpa86.fr', 1989, 'Rennes', 35),
('Laura', 'Girard', 'lgirard', 'lgirard@ifpa86.fr', 1986, 'Grenoble', 38),
('Maxime', 'Thomas', 'mthomas', 'mthomas@ifpa86.fr', 1993, 'Montpellier', 34),
('Elodie', 'Lefort', 'elefort', 'elefort@ifpa86.fr', 1984, 'Dijon', 21),
('Vincent', 'Lemoine', 'vlemoine', 'vlemoine@ifpa86.fr', 1981, 'Toulon', 83),
('Caroline', 'Renaud', 'crenaud', 'crenaud@ifpa86.fr', 1982, 'Angers', 49),
('Gabriel', 'Petit', 'gpetit', 'gpetit@ifpa86.fr', 1994, 'Avignon', 84),
('Emilie', 'Mercier', 'emercier', 'emercier@ifpa86.fr', 1987, 'Caen', 14),
('Guillaume', 'Marchand', 'gmarchand', 'gmarchand@ifpa86.fr', 1990, 'Nîmes', 30),
('Mathilde', 'Dufour', 'mdufour', 'mdufour@ifpa86.fr', 1985, 'Perpignan', 66),
('Alexandre', 'Leroux', 'aleroux', 'aleroux@ifpa86.fr', 1988, 'Besançon', 25),
('Juliette', 'Guerin', 'jguerin', 'jguerin@ifpa86.fr', 1991, 'Limoges', 87),
('Louis', 'Dupuis', 'ldupuis', 'ldupuis@ifpa86.fr', 1989, 'Annecy', 74),
('Mélanie', 'Bonnet', 'mbonnet', 'mbonnet@ifpa86.fr', 1986, 'Poitiers', 86),
('Olivier', 'Guyot', 'oguyot', 'oguyot@ifpa86.fr', 1983, 'Clermont-Ferrand', 63),
('Chloé', 'Roy', 'croy', 'croy@ifpa86.fr', 1992, 'La Rochelle', 17),
('Anthony', 'Masson', 'amasson', 'amasson@ifpa86.fr', 1995, 'Béziers', 34),
('Marine', 'Garnier', 'mgarnier', 'mgarnier@ifpa86.fr', 1980, 'Aix-en-Provence', 13),
('Lucas', 'Guerin', 'lguerin', 'lguerin@ifpa86.fr', 1981, 'Chartres', 28),
('Charlotte', 'Fernandez', 'cfernandez', 'cfernandez@ifpa86.fr', 1984, 'Chambéry', 73),
('Kevin', 'Lecomte', 'klecomte', 'klecomte@ifpa86.fr', 1987, 'Vannes', 56),
('Céline', 'Lefebvre', 'clefebvre', 'clefebvre@ifpa86.fr', 1993, 'Tarbes', 65),
('Martin', 'Le Gall', 'mlegall', 'mlegall@ifpa86.fr', 1990, 'Bourges', 18),
('Inès', 'Meyer', 'imeyer', 'imeyer@ifpa86.fr', 1992, 'Carcassonne', 11),
('Rémi', 'Schmitt', 'rschmitt', 'rschmitt@ifpa86.fr', 1988, 'Troyes', 10),
('Audrey', 'Picard', 'apicard', 'apicard@ifpa86.fr', 1985, 'Pau', 64),
('Pauline', 'Roger', 'proger', 'proger@ifpa86.fr', 1991, 'Saint-Malo', 35),
('Théo', 'Barbier', 'tbarbier', 'tbarbier@ifpa86.fr', 1994, 'Angoulême', 16),
('Manon', 'Perrin', 'mperrin', 'mperrin@ifpa86.fr', 1982, 'Niort', 79),
('Nicolas', 'Brun', 'nbrun', 'nbrun@ifpa86.fr', 1989, 'Lorient', 56),
('Laure', 'Lopez', 'llopez', 'llopez@ifpa86.fr', 1980, 'Aubagne', 13),
('Romain', 'Giraud', 'rgiraud', 'rgiraud@ifpa86.fr', 1983, 'Calais', 62),
('Marine', 'Sanchez', 'msanchez', 'msanchez@ifpa86.fr', 1986, 'Colmar', 68),
('Damien', 'Leclerc', 'dleclerc', 'dleclerc@ifpa86.fr', 1993, 'Dieppe', 76),
('Caroline', 'Renard', 'crenard', 'crenard@ifpa86.fr', 1987, 'Douai', 59),
('Jonathan', 'Benoit', 'jbenoit', 'jbenoit@ifpa86.fr', 1990, 'Vichy', 03),
('Maxime', 'Roux', 'mroux', 'mroux@ifpa86.fr', 1981, 'Boulogne-sur-Mer', 62);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

INSERT INTO services (nom) VALUES
('Commercial'),
('Technique'),
('Administratif');

CREATE TABLE utilisateurs_services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT,
    service_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id),
    FOREIGN KEY (service_id) REFERENCES services(id)
);

INSERT INTO utilisateurs_services (utilisateur_id, service_id) VALUES
(1, 1), (2, 2), (3, 3), (4, 1), (5, 2), (6, 3), (7, 1), (8, 2), (9, 3), (10, 1),
(11, 2), (12, 3), (13, 1), (14, 2), (15, 3), (16, 1), (17, 2), (18, 3), (19, 1),
(20, 2), (21, 3), (22, 1), (23, 2), (24, 3), (25, 1), (26, 2), (27, 3), (28, 1),
(29, 2), (30, 3), (31, 1), (32, 2), (33, 3), (34, 1), (35, 2), (36, 3), (37, 1),
(38, 2), (39, 3), (40, 1), (41, 2), (42, 3), (43, 1), (44, 2), (45, 3), (46, 1);