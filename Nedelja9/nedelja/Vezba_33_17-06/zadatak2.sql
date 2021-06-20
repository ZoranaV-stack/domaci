INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES ('789', 'paradajz', 200), ('776', 'crni luk', 50), ('761', 'beli luk', 80)

SELECT prodaja.kolicina, proizvodi.cena 
FROM `prodaja` JOIN 'proizvodi' ON prodaja.barkod=proizvodi.barkod



INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL, '789', 50, 50*200, '2021-16-06')


INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL, '789', 20, 20*200, '2021-06-17'), (NULL, '789', 40, 40*250, '2021-06-17'), (NULL, '789', 10, 10*220, '2021-06-17'), (NULL, '776', 30, 30*50, '2021-05-01')

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES (NULL, '761', 6, 6*80, '2021-06-15'),(NULL, '761', 2, 2*80, '2021-06-16'),(NULL, '761', 3, 3*80, '2021-06-18')


DELETE FROM `prodaja` WHERE barkod='789' AND datum='2021-06-16'



UPDATE `prodaja` SET `cena`=cena+cena*0.1 WHERE datum='2021-06-17'


SELECT `barkod` FROM `prodaja` WHERE datum='2021-05-01'


SELECT DISTINCT `barkod` FROM `prodaja` WHERE datum='2021-05-01'


SELECT datum, SUM(kolicina) FROM `prodaja` GROUP BY datum


SELECT naziv, SUM(kolicina) FROM `prodaja` JOIN `proizvodi` ON prodaja.barkod=proizvodi.barkod GROUP BY prodaja.barkod



SELECT naziv, datum, SUM(kolicina) FROM `prodaja` JOIN `proizvodi` ON prodaja.barkod=proizvodi.barkod GROUP BY prodaja.barkod, datum