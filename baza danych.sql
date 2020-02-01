-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 01 Lut 2020, 15:52
-- Wersja serwera: 10.2.8-MariaDB
-- Wersja PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `inzynierka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kalendarz`
--

DROP TABLE IF EXISTS `kalendarz`;
CREATE TABLE IF NOT EXISTS `kalendarz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dj` int(11) NOT NULL,
  `dzien` int(11) NOT NULL,
  `miesiac` int(11) NOT NULL,
  `rok` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kalendarz`
--

INSERT INTO `kalendarz` (`id`, `dj`, `dzien`, `miesiac`, `rok`) VALUES
(10, 7, 31, 0, 2020),
(9, 7, 30, 0, 2020),
(5, 7, 7, 0, 2020),
(6, 7, 8, 0, 2020),
(8, 7, 16, 0, 2020);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rodzaj` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imie` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `miejscowosc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL,
  `opis` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `wojewodztwo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `videoset` varchar(255) DEFAULT NULL,
  `cennik` int(11) DEFAULT NULL,
  `min_h` int(11) DEFAULT NULL,
  `max_h` int(11) DEFAULT NULL,
  `pop` int(11) DEFAULT NULL,
  `discopolo` int(11) DEFAULT NULL,
  `elektroniczna` int(11) DEFAULT NULL,
  `lata80` int(11) DEFAULT NULL,
  `lata90` int(11) DEFAULT NULL,
  `rock` int(11) DEFAULT NULL,
  `hiphop` int(11) DEFAULT NULL,
  `rb` int(11) DEFAULT NULL,
  `jazz` int(11) DEFAULT NULL,
  `metal` int(11) DEFAULT NULL,
  `urodziny` int(11) DEFAULT NULL,
  `wesele` int(11) DEFAULT NULL,
  `studniowka` int(11) DEFAULT NULL,
  `komers` int(11) DEFAULT NULL,
  `jubileusz` int(11) DEFAULT NULL,
  `firmowa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `players`
--

INSERT INTO `players` (`id`, `alias`, `pass`, `rodzaj`, `email`, `imie`, `miejscowosc`, `telefon`, `opis`, `wojewodztwo`, `videoset`, `cennik`, `min_h`, `max_h`, `pop`, `discopolo`, `elektroniczna`, `lata80`, `lata90`, `rock`, `hiphop`, `rb`, `jazz`, `metal`, `urodziny`, `wesele`, `studniowka`, `komers`, `jubileusz`, `firmowa`) VALUES
(8, 'neycza2', '123', 'KLIENT', 'cheester55@o2.pl', 'Maciek', 'Jaworzno', 0, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'DJ HAZEL', '123', 'DJ', 'hazel@gmail.com', 'test23', 'Lublin', 876354647, 'Za poczÄ…tek kariery uwaÅ¼a rok 1998 bo od tego czasu zajÄ…Å‚ sie miksowaniem nagraÅ„. Po trzech miesiÄ…cach grania w klubach warszawskich zdobyÅ‚ pierwsze Mistrzostwo Polski DMC w kategorii â€˜â€˜ MIKSOWANIE DO TAÅƒCAâ€™â€™ ..Rok pÃ³Åºniej powtÃ³rzyÅ‚ ten sukces zdobywajÄ…c juÅ¼ wtedy tytuÅ‚ â€˜ â€˜MASTER DJ DMCâ€™â€™Po zdobyciu pierwszego Mistrzostwa Polski wspÃ³Å‚pracowaÅ‚ z firmÄ… PIONEER , robiÄ…c pokazy moÅ¼liwoÅ›ci sprzÄ™tu DJ-skiego tej firmy , oraz miksowania. WchodziÅ‚ w skÅ‚ad nielicznej grupy dj-Ã³w [ i do tej pory rÃ³wnieÅ¼ wchodzi ] firmy Pioneer Poland - â€˜â€˜PIONEER DJâ€™S TEAMâ€™â€™ . .', 'lubelskie', 'vw8Vtfe-Oog', 50, 5, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(9, 'TAITO', 'iopqweqweqweqweqweqweqweqeq', 'DJ', '555555@o2.pl', '', 'Warszawa', 574857485, 'TAITO pod tym pseudonimem kryje siÄ™ urodzony w maÅ‚ym mieÅ›cie na Mazowszu 10 kwietnia 1988 r. mÅ‚ody chlopak imieniem Kamil, ktÃ³ry to nigdy nie planowaÅ‚ byÄ‡ producentem, djem, nikim z zaplecza muzycznego. Zawsze interesowaÅ‚a go piÅ‚ka noÅ¼na i temu poÅ›wiÄ™caÅ‚ caÅ‚y swÃ³j czas. Codzienne Teningi , mecze , to byÅ‚ chleb powszedni Kamila , ale wszystko w Å¼yciu ma swÃ³j koniec , na jednym z meczÃ³w po odniesionej kontuzji nie mÃ³gÅ‚ juÅ¼ kontynuowaÄ‡ piÅ‚karskiego kunsztu. Kamil jak zawsze powtarzaÅ‚ \"Normalnie pracowaÄ‡ to ja nie mogÄ™ :)\" pomyÅ›laÅ‚ ze zostanie producentem muzyki klubowej , w jego domu od zawsze goÅ›ciÅ‚a muzyka od najmÅ‚odszych lat, Italo Disko , Pop , wiec czemu nie ?', 'mazowieckie', 'Mlug3zlmNy4', 20, 5, 20, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0),
(11, 'INOX', '434234', 'DJ', 'inox@gmail.com', '', 'Bydgoszcz', 987675456, 'Za konsoletÄ… od 17 lat. Wielki miÅ‚oÅ›nik wszelkich odmian muzyki klubowej. Kolekcjoner winyli - ma ich wiele tysiÄ™cy i kaÅ¼dego tygodnia gromadzi kolejne kilkadziesiÄ…t. W winylach ceni sobie jakoÅ›Ä‡ dÅºwiÄ™ku i moÅ¼liwoÅ›Ä‡ \"czucia nagrania\".Od kilku lat czÅ‚onek FTB DJ Team, dziÄ™ki czemu zwiedziÅ‚ juÅ¼ prawie wszystkie kluby w Polsce. Zawsze przyjmowany z entuzjazmem, bo teÅ¼ wiele zaangaÅ¼owania i entuzjazmu wkÅ‚ada w kaÅ¼dy set. Preferuje muzykÄ™ house - prezentuje jej rÃ³Å¼ne odmiany funky, disco, progressive , ale teÅ¼ potrafi zagraÄ‡ bardziej energetycznie. WciÄ…Å¼ gÅ‚odny nowych brzmieÅ„, jest na bieÅ¼Ä…co z nowinkami electro-house, hardhouse, a nawet techno.', 'kujawsko-pomorskie', '', 16, 4, 12, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0),
(12, 'Arctic Moon', '123123', 'DJ', 'arctic@gmail.com', '', 'ZamoÅ›Ä‡', 456234234, 'Tomasz Popielarski (Arctic Moon) â€“ DJ/producent pochodzÄ…cy z Polski. UrodziÅ‚ siÄ™ w 1988 roku w Szczecinie. JuÅ¼ od dzieciÅ„stwa interesowaÅ‚ siÄ™ muzykÄ… elektronicznÄ…, ktÃ³ra fascynowaÅ‚a go swojÄ… rÃ³Å¼norodnoÅ›ciÄ… i emocjami jakie wywoÅ‚uje. Swoje pierwsze kroki w tworzeniu muzyki zaczÄ…Å‚ w 2004 roku zapoznajÄ…c siÄ™ z profesjonalnymi programami do produkcji i zdobywajÄ…c muzyczne', 'lubelskie', '', 20, 2, 12, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1),
(13, 'DJ W', 'asda', 'DJ', 'w@gmail.com', '', 'Gubin', 434654234, 'Aktualnie rezydent klubu LUZTRO w Warszawie â€“ imprezy DUSS LUZZ w kaÅ¼dy ostatni piÄ…tek miesiÄ…caStyl â€“ Techno i House oraz wszelkie pochodneMotto â€“ Å»eby byÄ‡ dobrym djâ€™em trzeba byÄ‡ dobrym czÅ‚owiekiem', 'lubuskie', '', 22, 3, 12, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1),
(14, 'Matt Bukovski', '123', 'DJ', '13213', '', 'Opole', 123545678, 'Matt Bukovski jest jednym z najszybciej rozwijających się polskich producentów/DJ muzyki trance. Jest związany z muzyką od najmłodszych lat, kiedy to zaczął naukę gry na pianinie w szkole muzycznej - obecnie jest zaś studentem warszawskiego Uniwersytetu Muzycznego.\r\n\r\nNiezależnie od tego czy komponuje muzykę poważną czy taneczną, zawsze robi to z wielkim zaangażowaniem i pasją. Produkcją muzyki trance zajął się w 2009 roku, a już rok później wydał swoją pierwszą produkcję \"Fresh Air\", która od razu otrzymała support takich gwiazd jak Aly&Fila.', 'opolskie', '', 13, 2, 43, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Indecent Noise', '123', 'DJ', '123213', '', 'Stalowa Wola', 123543543, 'Ostatnie lata to okres artystycznej ekspansji dla wielu polskich producentów i didżejów. W jej wyniku niemalże każda „elektroniczna nisza” nie jest już zajęta wyłącznie przez muzyków zagranicznych. I to właśnie jedną z nich znalazł dla siebie dwudziestotrzyletni warszawianin, o którym Tom Colontonio mówi jednym słowem: “Sikkkkkkkkkkk!“. Kto to taki?', 'Podkarpackie', '', 23, 4, 12, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'Nitrous Oxide', '123', 'DJ', '4234234', '', 'Grajewo', 123867485, 'Czy można napisać o Krzysztofie Prętkiewiczu coś, czego jeszcze nie napisano? Jedna z najważniejszych postaci polskiej sceny trance, pierwszy polak w Anjunabeats, stanowi także połowę duetu 3rd Moon. Od pewnego czasu żaden jego utwór nie przejdzie niezauważony.\r\nPierwszy raz z muzyką elektroniczną zetknął się w połowie lat 90, słysząc produkcje Jean Michel Jarre’a, Mike’a Oldfielda i Depeche Mode. Wśród swoich inspiracji wymienia także Thomasa Newmana i Hansa Zimmera - twórców muzyki filmowej. Produkcyjnie - wszystko zaczęło się, kiedy w wieku trzynastu lat Krzysiek dostał w prezencie od rodziców pierwszy komputer. ', 'podlaskie', '', 22, 5, 12, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Angelo Mike', 'adsad', 'DJ', 'asdasd', '', 'Gdynia', 123654567, 'Prawdziwi profesjonaliści swoje nazwiska budują latami. Nawet największe sukcesy są dla nich tylko kolejnymi powodami, żeby dalej się rozwijać. Angelo Mike jest właśnie takim profesjonalistą, któremu spoczywanie na laurach nigdy nawet nie przeszło przez myśl. Ale sam profesjonalizm w zawodzie DJ-a i producenta to tylko połowa sukcesu - druga to talent, który sprawia, że za artystą podążają tłumy.\r\n', 'pomorskie', '', 44, 6, 12, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Matush', '123123', 'DJ', '1313123', '', 'Kalisz', 325645456, 'Jego niezwykła osobowość, zmysł doboru muzyki, jak również niezwykle płynna technika miksowania sprawiły, że zyskał uznanie na polskiej scenie klubowej. Dzięki sukcesom własnych produkcji został doceniony również jako producent i remixer zarówno w Polsce, jak i poza jej granicami.', 'wielkopolskie', '', 34, 3, 12, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Catz and Dogz', '12312', 'DJ', '123', '', 'Pyrzyce', 767867543, '', 'zachodniopomorskie', '', 22, 2, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Skytech', '123', 'DJ', 'tutego', '', 'Jawor', 435678364, 'Pod tą nazwą tworzą bracia z Olsztyna: Julian (25 l.) i Mateusz (15 l.) Dziewulscy. Produkcją zajmują się od 2002 roku, od tamtej pory zdobyli cenne doświadczenia szukając swojego miejsca w różnych gatunkach muzyki elektronicznej. Dopiero w poprzednim roku poczuli, że ich produkcje osiągnęły na tyle dobry poziom, aby je wydawać. ', 'dolnoÅ›lÄ…skie', '', 24, 5, 12, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Alex', '123', 'DJ', 'tutego2', '', 'Kutno', 246543456, 'DJ @LeX – Michał Grzybek, założyciel i współtwórca formacji A STATE OF MIND, producent oraz DJ z ponad 15 letnim stażem za konsoletą. Wieloletni rezydent jednego z największych klubów dolnego śląska. Przygodę z muzyką rozpoczął od nauki gry na pianinie lecz z biegiem lat czując niedosyt spróbował czegoś więcej… Gdy pierwszy raz stanął po „drugiej stronie”, od razu wiedział że mixowanie muzyki dla ludzi jest jego przeznaczeniem...', 'Å‚Ã³dzkie', '', 24, 1, 23, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Tiddey', '123', 'DJ', 'tutego3', '', 'Babice', 567495845, 'omimo iż Tiddey rozpoczął karierę w 2002 roku to już wcześniej przejawiał zainteresowanie branżą muzyczną. Wykształcenie zdobył w poznańskiej szkole muzycznej i wówczas wiązał swoją przyszłość z gitarą. Urodzony 24.03.1979 roku Darek Płaza pierwszy raz zetknął się z mikserem na początku 2002 roku. Już wtedy wiedział, że granie i tworzenie własnych produkcji stanie się jego życiem. Pierwsze, niezwykle udane, doświadczenia w poznańskich klubach wyróżniały go spośród innych, popularnych DJ. Pewne było, że Darek nie będzie kolejnym rezydentem klubowym, lecz w ciągu najbliższych czterech lat stanie się czołowym, polskim DJ o własnej tożsamości muzycznej i unikalnym stylu. W roku 2003 wspólnie z przyjaciółmi powołał do życia agencję MDT w której tworzył największe polskie eventy takie jak Sunrise Festival, Independance, czy EnTrance. W 2006 roku zdecydował się na rozwój własnej kariery jako DJ-a i producenta muzycznego i odszedł z agencji MDT.', 'maÅ‚opolskie', '', 30, 4, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'Cez Are Kane', '123', 'DJ', 'tutego4', '', 'Morawica', 574657485, 'Muzyczny smakosz wychowany na klasyce, delektujący się każdym brzemieniem. W zaskakujący sposób splata ze sobą dźwięki i różne style muzyczne, łącząc je w wysmakowane kompozycje.\r\nJest szczęściarzem, gdyż swoją pasję uczynił sposobem na życie. Wychodząca spod jego ręki sety to nie dźwięczny monolog, lecz forma dialogu z ludźmi, idealna forma przekazu...a czasem i odzwierciedleniem poszczególnych pokoleń.', 'Å›wiÄ™tokrzyskie', '', 40, 2, 20, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Dave Schiemann', '123', 'DJ', 'tutego5', '', 'Szczytno', 574857854, 'W 2007 roku mając zaledwie 18 lat doczekał się pierwszego wydawnictwa na winylu w Holenderskiej wytwórni Detox Records. Rok później nawiązał współpracę z Bartem Claessenem (znanym bardziej jako Barthezz za sprawą hitu \"On The Move\") z którym wyprodukował uznany później za klasyk utwór \"Madness\" , wydany nakładem Anjunabeats. Utwór cieszył się ogromną popularnością wśród największych gwiazd muzyki Trance i przez długi czas zajmował najwyższe miejsce na liście sprzedaży Beatport. Współpraca z Claessenem doczekała się kontynuacji w postaci remixu dla duetu Super8 & Tab do utworu \"Elektra\". ', 'warmiÅ„sko-mazurskie', '', 20, 2, 12, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'Drilla', '123123', 'DJ', '1313123', '', 'Turek', 325645456, 'Jego niezwykła osobowość, zmysł doboru muzyki, jak również niezwykle płynna technika miksowania sprawiły, że zyskał uznanie na polskiej scenie klubowej. Dzięki sukcesom własnych produkcji został doceniony również jako producent i remixer zarówno w Polsce, jak i poza jej granicami.', 'wielkopolskie', '', 34, 3, 12, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'Adrena Line', '12312', 'DJ', '123', '', 'Karlino', 767867543, '', 'zachodniopomorskie', '', 22, 2, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'Vivka', '123', 'DJ', 'tutego', '', 'Nowa Ruda', 435678364, 'Pod tą nazwą tworzą bracia z Olsztyna: Julian (25 l.) i Mateusz (15 l.) Dziewulscy. Produkcją zajmują się od 2002 roku, od tamtej pory zdobyli cenne doświadczenia szukając swojego miejsca w różnych gatunkach muzyki elektronicznej. Dopiero w poprzednim roku poczuli, że ich produkcje osiągnęły na tyle dobry poziom, aby je wydawać. ', 'dolnoÅ›lÄ…skie', '', 24, 5, 12, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'MarioDeejay', '123', 'DJ', 'tutego2', '', 'Tuszyn', 246543456, 'DJ @LeX – Michał Grzybek, założyciel i współtwórca formacji A STATE OF MIND, producent oraz DJ z ponad 15 letnim stażem za konsoletą. Wieloletni rezydent jednego z największych klubów dolnego śląska. Przygodę z muzyką rozpoczął od nauki gry na pianinie lecz z biegiem lat czując niedosyt spróbował czegoś więcej… Gdy pierwszy raz stanął po „drugiej stronie”, od razu wiedział że mixowanie muzyki dla ludzi jest jego przeznaczeniem...', 'Å‚Ã³dzkie', '', 24, 1, 23, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'MdK', '123', 'DJ', 'tutego3', '', 'Zator', 567495845, 'omimo iż Tiddey rozpoczął karierę w 2002 roku to już wcześniej przejawiał zainteresowanie branżą muzyczną. Wykształcenie zdobył w poznańskiej szkole muzycznej i wówczas wiązał swoją przyszłość z gitarą. Urodzony 24.03.1979 roku Darek Płaza pierwszy raz zetknął się z mikserem na początku 2002 roku. Już wtedy wiedział, że granie i tworzenie własnych produkcji stanie się jego życiem. Pierwsze, niezwykle udane, doświadczenia w poznańskich klubach wyróżniały go spośród innych, popularnych DJ. Pewne było, że Darek nie będzie kolejnym rezydentem klubowym, lecz w ciągu najbliższych czterech lat stanie się czołowym, polskim DJ o własnej tożsamości muzycznej i unikalnym stylu. W roku 2003 wspólnie z przyjaciółmi powołał do życia agencję MDT w której tworzył największe polskie eventy takie jak Sunrise Festival, Independance, czy EnTrance. W 2006 roku zdecydował się na rozwój własnej kariery jako DJ-a i producenta muzycznego i odszedł z agencji MDT.', 'maÅ‚opolskie', '', 30, 4, 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'Fafaq', '123', 'DJ', 'tutego4', '', 'Chmielnik', 574657485, 'Muzyczny smakosz wychowany na klasyce, delektujący się każdym brzemieniem. W zaskakujący sposób splata ze sobą dźwięki i różne style muzyczne, łącząc je w wysmakowane kompozycje.\r\nJest szczęściarzem, gdyż swoją pasję uczynił sposobem na życie. Wychodząca spod jego ręki sety to nie dźwięczny monolog, lecz forma dialogu z ludźmi, idealna forma przekazu...a czasem i odzwierciedleniem poszczególnych pokoleń.', 'Å›wiÄ™tokrzyskie', '', 40, 2, 20, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'Novika', '123', 'DJ', 'tutego5', '', 'Olecko', 574857854, 'W 2007 roku mając zaledwie 18 lat doczekał się pierwszego wydawnictwa na winylu w Holenderskiej wytwórni Detox Records. Rok później nawiązał współpracę z Bartem Claessenem (znanym bardziej jako Barthezz za sprawą hitu \"On The Move\") z którym wyprodukował uznany później za klasyk utwór \"Madness\" , wydany nakładem Anjunabeats. Utwór cieszył się ogromną popularnością wśród największych gwiazd muzyki Trance i przez długi czas zajmował najwyższe miejsce na liście sprzedaży Beatport. Współpraca z Claessenem doczekała się kontynuacji w postaci remixu dla duetu Super8 & Tab do utworu \"Elektra\". ', 'warmiÅ„sko-mazurskie', '', 20, 2, 12, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

DROP TABLE IF EXISTS `wiadomosci`;
CREATE TABLE IF NOT EXISTS `wiadomosci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tresc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nadawca` int(11) NOT NULL,
  `odbiorca` int(11) NOT NULL,
  `data` date NOT NULL,
  `godzina` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wiadomosci`
--

INSERT INTO `wiadomosci` (`id`, `tresc`, `nadawca`, `odbiorca`, `data`, `godzina`) VALUES
(85, 'Pasuje mi. ProszÄ™ zarezerwowaÄ‡ termin 21 maja 2020', 8, 7, '2020-02-01', '16:51:54'),
(84, '1500zÅ‚', 7, 8, '2020-02-01', '16:51:30'),
(83, 'Jaki bÄ™dzie caÅ‚kowity koszt zagrania na 18stce mojego syna? ÅÄ…cznie 8 godzin grania', 8, 7, '2020-02-01', '16:50:20'),
(82, 'Witam, tak', 7, 8, '2020-02-01', '16:48:52'),
(81, 'Witam serdecznie, czy 21 maja 2020 ma pan wolny termin?', 8, 7, '2020-02-01', '16:48:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
