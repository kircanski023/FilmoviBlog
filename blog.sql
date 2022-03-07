-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 05:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `author_password` varchar(100) NOT NULL,
  `author_bio` text NOT NULL,
  `author_role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_email`, `author_password`, `author_bio`, `author_role`) VALUES
(1, 'Slobodan', 'kircanskis@gmail.com', '$2y$10$WUpRkkJ1HhNsU9ARmOcvPeZduvvI2Tx9Vb8YExsHmvdt3/7aFFWey', 'Slobodan', 'admin'),
(2, 'Autor', 'autor@gmail.com', '$2y$10$KyecNcNsieR0rL3BdVxgYOXKlGDbo.0TSOtAf2/0UcP9oSxbz7YZa', 'Enter Bio', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Filmovi - domaći'),
(2, 'Filmovi - strani'),
(3, 'Šta gledati'),
(4, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(40) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_image` varchar(150) NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_content` text NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_date` varchar(30) NOT NULL,
  `post_keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_category`, `post_image`, `post_author`, `post_content`, `post_title`, `post_date`, `post_keywords`) VALUES
(1, '1', 'uploads/5ff9e6c4b1c774.93530278.jpg', '1', '<div class=\"first-letter\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Overpass, sans-serif; color: #373a3c;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background: rgba(0, 0, 0, 0); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Malo je onih koji kultni film&nbsp;<a style=\"box-sizing: inherit; margin: 0px; padding: 0px; vertical-align: baseline; background: linear-gradient(#ff4057 0px, #ff4057) 0px 100% / 2px 2px repeat-x; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; color: #ff4057; text-decoration-line: none; touch-action: manipulation; outline: none; position: relative; transition: background-size 0.3s ease 0s, color 0.15s ease 0s;\" href=\"https://mondo.rs/Zabava/Film/a1392588/ko-to-tamo-peva-film-snimanje-price-sa-snimanja.html\" target=\"_blank\" rel=\"noopener\">\"Ko to tamo peva\"&nbsp;</a>nisu gledali nekoliko puta i svaki put se smejali i uživali uz dogodov&scaron;tine likova koji su iz jednog malog mesta u Srbiji krenuli na put za Beograd, autobusom porodice Krstić.</p>\r\n</div>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Radnja filma je svima dobro poznata, ali ono &scaron;to retko ko zna jesta da prvobitno uop&scaron;te nije bilo planirano da do publike dođe u verziji koju svi volimo.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Pre svega, Slobodanu &Scaron;ijanu je pripala čast da režira ovo ostvarenje sedme umetnosti nakon &scaron;to je Goran Paskaljević odustao, i to kako bi se posvetio filmu \"Zemaljski dani teku\".</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Ono &scaron;to bi posebno izmenilo celokupni utisak filma svakako su uloge Mi&scaron;ka i &scaron;lager pevača koje su bile namenjene drugim glumcima.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">\"Ulogu Mi&scaron;ka Krstića sam namenio Bogdanu Dikliću, ali njegovo tada&scaron;nje matično pozori&scaron;te nije htelo da ga pusti na snimanje, pa je morao da me odbije. Zbog toga sam ulogu vozača ponudio Aleksandru Berčeku koji ju je odmah prihvatio\", prisetio se &Scaron;ijan i otkrio:</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">\"Ulogu pevača &scaron;lagera sam u prvoj podeli namenio Ljubi&scaron;i Samardžiću, ali ju je on, iz meni nepoznatog razloga, odbio. Gaga (Dragan Nikolić) ju je prihvatio u poslednjem trenutku i odlično mu je legla\".</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Čak se i Gaga dvoumio oko uloge. Naime, Milena Dravić, koja je sa Draganom u braku provela 45 godina, nikada se nije me&scaron;ala u odabir njegovih uloga, ali je ostalo upamćeno kao zanimljiv detalj da je uz njenu podr&scaron;ku prihvatio, ispostaviće se, svoju legendarnu ulogu u filmu \"Ko to tamo peva\".</p>', 'Malo je onih koji kultni film \"Ko to tamo peva\"', '14/01/22', ''),
(2, '4', 'uploads/5ff9e87cb21d96.30814557.jpg', '1', '<p class=\"story-lead\" style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: 34px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Legendarni glumac preminuo je nakon duge borbe sa te&scaron;kom bole&scaron;ću u 77. godini.</p>\r\n<div class=\"first-letter\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Overpass, sans-serif; color: #373a3c;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background: rgba(0, 0, 0, 0); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Vest o smrti&nbsp;<a style=\"box-sizing: inherit; margin: 0px; padding: 0px; vertical-align: baseline; background: linear-gradient(#ff4057 0px, #ff4057) 0px 100% / 2px 2px repeat-x; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; color: #ff4057; text-decoration-line: none; touch-action: manipulation; outline: none; position: relative; transition: background-size 0.3s ease 0s, color 0.15s ease 0s;\" href=\"https://mondo.rs/Zabava/Zvezde-i-tracevi/a1401305/mustafa-nadarevic-preminuo.html\" target=\"_blank\" rel=\"noopener\">Mustafe Nadarevića potvrdio je glumac Moamer Kasumović&nbsp;</a>za portal Radiosarajevo.ba, dok Klix.ba nezvanično prenosi da se Nadarević navodno borio i sa kovidom.</p>\r\n</div>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\"><span style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgba(0, 0, 0, 0); font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; font-family: inherit;\">Slavni glumac je početkom ove godine&nbsp;</span><a style=\"box-sizing: inherit; margin: 0px; padding: 0px; vertical-align: baseline; background: linear-gradient(#ff4057 0px, #ff4057) 0px 100% / 2px 2px repeat-x; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; color: #ff4057; text-decoration-line: none; touch-action: manipulation; outline: none; position: relative; transition: background-size 0.3s ease 0s, color 0.15s ease 0s;\" href=\"https://mondo.rs/Zabava/Zvezde-i-tracevi/a1271009/Mustafa-Nadarevic-o-raku-pluca.html\">otkrio da boluje od karcinoma pluća</a><span style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgba(0, 0, 0, 0); font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; font-family: inherit;\">, a&nbsp;<span style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgba(0, 0, 0, 0); font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; font-family: inherit;\">nedavno je otpu&scaron;ten iz bolnice i bio je u kući u Zagrebu. Kako su pisali mediji nije izlazio iz stana zbog epidemiolo&scaron;ke situacije.</span></span></p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Uprkos borbi sa te&scaron;kom bole&scaron;ću, glumac nije odustao od posla, te je i dalje bio aktivan na pozori&scaron;nim daskama, odakle je i počeo.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Svoju prvu ulogu je dobio u prvom razredu osnovne &scaron;kole, kada je na &scaron;kolskoj priredbi glumio Crvenkapicu. Učiteljica ga je za tu ulogu izabrala jer je imao dužu kosu i piskutav glas, pa je ličio na devojčicu.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Kada je krenuo u riječku Gimnaziju postao je član amaterskog pozori&scaron;ta \"Viktor Car Emin\", pa se ljubav prema glumi pretvorila u poziv. Upisao je Akademiju dramskih umetnosti u Zagrebu.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">&nbsp;</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Filmsku karijeru započinje tek početkom osamdesetih godina u sporednim ulogama. U filmu \"Otac na službenom putu\" Emira Kusturice iz 1985. godine istakao se ulogom Zijaha.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Zatim su usledili filmovi \"Već viđeno\", Gorana Markovića iz 1987. godine, \"Glembajevi\" Antuna Vrdoljaka iz 1988. godine, pa \"Kuduz\", \"Gluvi barut\", \"Praznik u Sarajevu\", \"Pu&scaron;ka za uspavljivanje\", \"Ničija zemlja\", \"Gori vatra\", \"Nafaka\" i mnogi drugi.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Oprobao se i kao pozori&scaron;ni reditelj 1992. sa predstavom \"Let iznad kukavičjeg gnezda\". Predstave \"Balkanski &scaron;pijun\" i \"Hasanaginica\" su postale hit, te se igrale u Narodnom pozori&scaron;tu u Zagrebu i u Sarajevu.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Ipak, Mustafa Nadarević &scaron;irom Balkana ostaće upamćen po ulozi Izeta Fazlinovića iz serije \"Lud, zbunjen, normalan\". Za kratko vreme osvojio je srca ulogom karikaturalnog deda, jo&scaron; uvek nostalgičnim za doba Jugoslavije. Gledaoci ispred malih ekrana mora da su uvideli mnoge sličnosti sa stvarnim dedama, ali i energiju glumca koji je već zagazio u sedmu deceniju.</p>', 'OVO SU ULOGE PO KOJIMA ĆEMO PAMTITI MUSTAFU NADAREVIĆA', '12/01/22', ''),
(3, '3', 'uploads/5ff9ea6ecde2e1.78855225.jpg', '1', '<p><span style=\"color: #222222; font-family: \'Open Sans\', sans-serif; font-size: 20px; font-variant-ligatures: none; font-weight: bold;\">Domaći naslovi, kultni glumci i autori i zabava za najmlađe!</span></p>\r\n<div class=\"first-letter\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Overpass, sans-serif; color: #373a3c;\">\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background: rgba(0, 0, 0, 0); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Najmoderniji bioskop u regionu, Cineplexx Galerija Belgrade, sutra, 30.10. zvanično otvara svoja vrata za posetioce.</p>\r\n</div>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">U prvoj fazi biće otvoreno nekoliko sala, dok će u narednom periodu, po prvi put u region, biti predstavljena IMAX&reg;</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Već od prvog radnog dana novog bioskopa, repertoar će se izdvojiti po upečatljivom sadržaju, koji publika nije imala priliku da vidi u takvom obliku.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Dani klasičnog srpskog filma će publici predstaviti sedam restauriranih kultnih filmova domaće kinematografije producentske kuće Centar film. U periodu od 30. oktobra do 5. novembra, na velikom platnu će ponovo svoje umeće pokazati Dragan Nikolić, Milena Dravić, Zoran Radmilović, Pavle Vuisić, kao i mnoge druge legende srpskog glumi&scaron;ta.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">U petak, 30. 10, reviju će započeti film \"Nacionalna klasa\",&nbsp; priča o Flojdu i njegovim ambicijama da pređe u vi&scaron;u klasu.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">&Scaron;ta se desi kada se dva davitelja urote jedan protiv drugog, publika će otkriti u subotu, 31. 10, u filmu Slobodana &Scaron;ijana, \"Davitelj protiv davitelja\".</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Nedelja, 1. novembar, rezervisana je za \"Varljivo leto &lsquo;68\", a Batu Stojkovića ćemo imati priliku da vidimo na velikom platnu i 2. novembra, ali u legendarnom filmu ,\"Maratonci trče počasni krug\". Borba za naklonost američke novinarke odigraće se u utorak, 3. novembra, u filmu \"Ne&scaron;to između\". Doktor Ilić i njegov ,,Poseban tretman&rdquo; naći će se na repertoaru 4. novembra, dok će reviju zatvoriti Mira Furlan i Mima Karadžić u fillmu \"Lepota poroka\", u četvrtak, 5. novembra.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Ulaznice za Dane klasičnog srpskog filma su u prodaji po ceni od 300 dinara.</p>\r\n<h3 style=\"box-sizing: inherit; margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 28px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: Overpass, sans-serif; color: #222222;\">Zabava za najmlađe!</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">Pored podsećanja na neke od najistaknutijih domaćih filmova, Cineplexx Galerija Belgrade bioskop će i najmlađima ponuditi omiljene aktuelne naslove po promotivnoj ceni od 300 dinara.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 40px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-ligatures: none; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; font-family: \'Open Sans\', sans-serif; color: #222222;\">\"Trolovi: Svetska turneja\", \"Snežana i sedam patuljaka\", \"Lesi se vraća kući\", i \"Kućni patuljci: Operacija kolačići\" naći će se na repertoaru u prvim radnim danima novog Cineplexx bioskopa, od petka do nedelje.</p>', 'MARATONCI, VARLJIVO LETO I FLOJD: Novi bioskop u Galeriji Beograd - cena karte 300 dinara!', '13/01/22', 'bioskop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
