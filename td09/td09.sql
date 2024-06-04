-- Q01 : Affichez les informations contenues dans la relation vin avec une requête SQL
select * from vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q02 : Affichez le cru et l'année des vins (projection).
select cru, annee 
from vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q03 : Affichez le cru et l'année des vins de 1976 (restriction).
select cru, annee
from vin
where annee = 1976;


-- -----------------------------------------------------------------------------------------------------------------
-- Q04 : Affichez les vins par ordre des crus.
select *
from vin
order by cru;


-- -----------------------------------------------------------------------------------------------------------------
-- Q05 : Affichez les vins par ordre des crus en supprimant les crus en double.
select distinct cru
from vin
order by cru;


-- -----------------------------------------------------------------------------------------------------------------
-- Q06 : Donner la liste des vins dont le degré est compris entre 11° et 12°. Utilisez between
select *
from vin
where degre between 11 and 12;


-- -----------------------------------------------------------------------------------------------------------------
-- Q07 : Affichez les vins dont le cru commence par 'C' de l'année 1980 ordonné par degré.
select *
from vin
where annee = 1980 and  cru like 'C%'
order by degre;


-- -----------------------------------------------------------------------------------------------------------------
-- Q08 : Donner le nombre de crus
select count(cru)
from vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q09 : Donner le nombre de crus distinct.
select count(distinct cru)
from vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q010 : Quel est le degré moyen des crus ?
select avg(degre)
from vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q011 : Quel est le plus fort degré des vins ?
select max(degre)
from vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q012 : Quels sont les crus (ordonnés par degré et année) de degré supérieur au degré moyen des crus ?
SELECT cru
FROM vin
WHERE degre>(SELECT AVG(degre)
             FROM vin)
ORDER BY degre, annee;


-- -----------------------------------------------------------------------------------------------------------------
-- Q013 : Affichez la liste des producteurs qui n'ont pas de prénom.
SELECT *
FROM producteur
WHERE prenom ="";


-- -----------------------------------------------------------------------------------------------------------------
-- Q014 : Donnez la liste des régions des producteurs.
SELECT region
FROM producteur;


-- -----------------------------------------------------------------------------------------------------------------
-- Q015 : Donnez la liste des régions des producteurs sans doublons ordonnée par région
SELECT DISTINCT(region)
FROM producteur
ORDER BY region;


-- -----------------------------------------------------------------------------------------------------------------
-- Q016 : Donner la liste par ordre alphabétique des noms et des prénoms des producteurs de vins n'appartenant pas aux régions suivantes : Corse, Beaujolais, Bourgogne et Rhône
SELECT nom, prenom
FROM producteur
WHERE region NOT IN ('Corse', 'Beaujolais', 'Bourgogne', 'Rhône')
ORDER BY nom, prenom;


-- -----------------------------------------------------------------------------------------------------------------
-- Q017 : Combien existe-t-il de producteurs par région.
SELECT region, COUNT(*) AS nb_producteurs
FROM producteur
GROUP BY region;


-- -----------------------------------------------------------------------------------------------------------------
-- Q018 : Quelle est la quantité de vin produite de degré 12 ?
SELECT SUM(recolte.quantite)
FROM recolte, vin
WHERE recolte.vin_id=vin.id AND vin.degre=12; 


-- -----------------------------------------------------------------------------------------------------------------
-- Q019 :  Quels sont les noms des producteurs du cru 'Etoile', leurs régions et les quantités totales de vins récoltés ?
SELECT producteur.nom, producteur.region, SUM(recolte.quantite) AS quantite_totale_recoltee
FROM producteur, vin, recolte
WHERE recolte.vin_id=vin.id AND recolte.producteur_id=producteur.id AND vin.cru='Etoile'
GROUP BY producteur.nom, producteur.region;


-- -----------------------------------------------------------------------------------------------------------------
-- Q020 : Combien y-a-t-il de producteurs par région dans les régions Savoie et Jura ?
SELECT region, COUNT(*) AS nb_producteurs
FROM producteur
WHERE region IN ('Savoie', 'Jura')
GROUP BY region;


-- -----------------------------------------------------------------------------------------------------------------
-- Q021 :  Donner la liste des noms et prénoms des producteurs produisant au moins trois crus. Utilisez le having.
select producteur.nom, producteur.prenom
from producteur, recolte
where recolte.producteur_id=producteur.id
GROUP BY producteur.nom, producteur.prenom
HAVING COUNT(DISTINCT recolte.vin_id) >= 3;


-- -----------------------------------------------------------------------------------------------------------------
-- Q022 :  Modifiez la structure de la relation vin en ajoutant un attribut bio. Utilisez l'instruction alter table et la valeur false pour tous les tuples déjà présents
ALTER TABLE vin
ADD COLUMN bio BOOLEAN DEFAULT FALSE;


-- -----------------------------------------------------------------------------------------------------------------
-- Q023 :  Vérifiez la présence de cette nouvelle colonne à l'aide d'une requête SQL simple.
DESCRIBE vin;


-- -----------------------------------------------------------------------------------------------------------------
-- Q024 :  Tous les vins de 1980 sont bio. Modifiez les données de la table vin en utilisant update.
UPDATE vin
SET bio = TRUE
WHERE annee=1980;


-- -----------------------------------------------------------------------------------------------------------------
-- Q025 :  Vérifiez à l'aide d'une requête SQL effectuant un group by sur l'attribut bio.
SELECT bio, COUNT(*) AS nb_vins
FROM vin
GROUP BY bio;


-- -----------------------------------------------------------------------------------------------------------------
-- Q026 :  Insérez un nouveau vin 'Champagne' de 2020 de degré 7 avec un id = 1000.
INSERT INTO vin VALUES (1000, 'Champagne', 2020, 7, FALSE);


-- -----------------------------------------------------------------------------------------------------------------
-- Q027 :  Vérifiez la présence de ce vin par une requête SQL
SELECT *
FROM vin
WHERE cru='Champagne';


-- -----------------------------------------------------------------------------------------------------------------
-- Q028 :  Insérez un nouveau vin 'Rhum' de l’année 2022, de degré 45 avec un id = 1000. Expliquez l'erreur
INSERT INTO vin VALUES (1000, 'Rhum', 2022, 45, FALSE);
-- La clé primaire 1000 est déjà utilisée par la requête de la question 26


-- -----------------------------------------------------------------------------------------------------------------
-- Q029 :  Affichez toutes les paires de producteurs habitant la région Alsace. Les tuples du résultat
-- seront de la forme id1, nom1, id2, nom2, région. La présence d'un tuple avec id1 et id2
-- interdit la présence d'un tuple avec id2 et id1.
SELECT DISTINCT p1.id AS id1, p1.nom AS nom1, p2.id AS id2, p2.nom AS nom2, p1.region AS region
FROM producteur p1
JOIN producteur p2 ON p1.id < p2.id
WHERE p1.region = 'Alsace' AND p2.region = 'Alsace';


-- -----------------------------------------------------------------------------------------------------------------
-- Q030 :   Supprimer la table vin avec une instruction drop. Expliquez l'erreur. Proposez une solution pour supprimer l'ensemble des relations.
DROP TABLE vin;
-- A cause des clés étrangères, on ne peut pas supprimer la table vin
-- Supprimer les clés étrangères avant de supprimer la table vin

