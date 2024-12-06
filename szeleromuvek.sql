-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 05, 2024 at 08:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szeleromuvek`
--

-- --------------------------------------------------------

--
-- Table structure for table `helyszin`
--

CREATE TABLE `helyszin` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `megyeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helyszin`
--

INSERT INTO `helyszin` (`id`, `nev`, `megyeid`) VALUES
(1, 'Várpalota', 14),
(2, 'Kulcs', 13),
(3, 'Mosonszolnok', 15),
(4, 'Mosonmagyaróvár', 15),
(5, 'Bükkaranyos', 1),
(6, 'Erk', 2),
(7, 'Újrónafő', 15),
(8, 'Szápár', 14),
(9, 'Vép', 16),
(11, 'Mezőtúr', 5),
(12, 'Törökszentmiklós', 5),
(14, 'Felsőzsolca', 1),
(15, 'Csetény', 14),
(16, 'Ostffyasszonyfa', 16),
(17, 'Levél', 15),
(19, 'Csorna', 15),
(20, 'Mecsér', 15),
(21, 'Bakonycsernye', 13),
(22, 'Sopronkövesd', 15),
(23, 'Nagylózs', 15),
(25, 'Jánossomorja', 15),
(26, 'Ács', 12),
(27, 'Pápakovácsi', 14),
(28, 'Vönöck', 16),
(29, 'Kisigmánd', 12),
(30, 'Bőny', 15),
(31, 'Csém', 12),
(32, 'Nagyigmánd', 12),
(35, 'Bábolna', 12),
(37, 'Ikervár', 16),
(38, 'Lövő', 15);

-- --------------------------------------------------------

--
-- Table structure for table `kapcsolat`
--

CREATE TABLE `kapcsolat` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `targy` varchar(255) NOT NULL,
  `uzenet` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kapcsolat`
--

INSERT INTO `kapcsolat` (`id`, `nev`, `email`, `targy`, `uzenet`, `datum`) VALUES
(11, 'Levi Blanár 2', 'blanar.levente@gmail.com', 'tesz', 'Szeretném jelezni, hogy a Kulcsi Szélerőmű 2. számú tornyában az elmúlt hét során több komoly probléma is jelentkezett, amelyek sürgős beavatkozást igényelnek. Az első észlelt rendellenesség a rotor körüli mechanikus zaj, amely erőteljesen felerősödött, különösen szélcsendesebb időszakokban. Ezt a zajt valószínűleg a csapágyak kopása vagy kenési hiányosságok okozzák. Emellett a torony vibrációja is szokatlanul magas, amit az érzékelők is megerősítettek, és ez hosszabb távon az alapzat károsodásához vezethet.', '2024-11-28 19:21:12'),
(12, 'Kovács Béla', 'kovacsbela@gmail.com', 'Hiba bejelentés', 'A generátor teljesítménye szintén csökkent: a normál 1,5 MW helyett csupán 1,1 MW-ot tud produkálni, ami jelentős termelési kiesést eredményez. Továbbá a lapátszög-állító rendszer lassan és pontatlanul reagál a vezérlési parancsokra, ami rontja az energiaátalakítás hatékonyságát. A lapátok élei szabad szemmel látható sérüléseket mutatnak, valószínűleg madarak ütközése vagy apróbb tárgyak miatt. A vezérlőrendszer logjaiban visszatérő hibaüzenetek jelentkeznek, amelyek szerint a rotor és a tengely között kapcsolati instabilitás tapasztalható.', '2024-11-28 20:33:02'),
(13, 'Lator Attila', 'latorattila@gmail.com', 'Rendszerdiagnosztika', 'A rendszerdiagnosztika azt is mutatja, hogy az utóbbi két hétben a szélerőmű energiaátalakítási hatékonysága 20%-kal csökkent. A hőmérséklet-érzékelők időnként irreális értékeket jeleznek, ami a hőmérséklet-szabályozó rendszer hibájára utalhat. Emellett a torony alsó részében folyamatos olajszivárgást tapasztalunk, amely veszélyezteti a csapágyak és a tengely élettartamát. Az üzemeltetési logban rögzített adatok alapján a szervómotorok terhelése is jelentősen meghaladja a gyári előírásokat, ami sürgős beavatkozást indokol.', '2024-11-28 20:33:44'),
(14, 'Bakos Ferenc', 'bakosferi@gmail.com', 'Rotor instabilitás és vezérlési hibák – Azonnali javítás szükséges', 'A Kulcsi Szélerőmű 5. számú tornyában az utóbbi időben jelentős működési zavarokat tapasztaltunk, amelyek sürgős beavatkozást igényelnek. A rotor működés közben szokatlan hangokat ad ki, ami a tengely és a csapágy kopottságára utalhat. Az energiamérési adatok szerint a rendszer nem képes stabil teljesítményt leadni: a generátor 1,5 MW helyett csak 0,9 MW-ot termel, ami közel 40%-os kapacitáscsökkenést jelent. Az időjárási körülményektől függetlenül a lapátok mozgása aszimmetrikus, amit a vezérlőrendszer hibái is alátámasztanak.', '2024-11-28 20:34:43'),
(15, 'Tenkes Dániel', 'tenkesdani@gmail.com', 'Generátor túlmelegedés és teljesítménycsökkenés – Beavatkozás szükséges', 'Ezúton szeretnénk jelezni, hogy a Kulcsi Szélerőmű 7. számú tornyában az elmúlt időszakban kritikus problémák léptek fel, amelyek sürgős javítást igényelnek. A generátor működése során rendkívüli mértékű hőmérséklet-emelkedést tapasztaltunk, amelyet a rendszer már többször vészleállással próbált kezelni. A hűtőrendszer nem működik megfelelően, ami a generátor alkatrészeinek károsodásához vezethet, ha a probléma nem kerül azonnal orvoslásra.', '2024-11-28 20:35:17'),
(16, 'Levi Blanár', 'blanar.levente@gmail.com', 'Újrateszt', 'Újrateszt CRUD funckiók beiktatása után.', '2024-11-28 21:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `megye`
--

CREATE TABLE `megye` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `regio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `megye`
--

INSERT INTO `megye` (`id`, `nev`, `regio`) VALUES
(1, 'Borsod-Abaúj-Zemplén', 'Észak-Magyarország'),
(2, 'Heves', 'Észak-Magyarország'),
(3, 'Nógrád', 'Észak-Magyarország'),
(4, 'Hajdú-Bihar', 'Észak-Alföld'),
(5, 'Jász-Nagykun-Szolnok', 'Észak-Alföld'),
(6, 'Szabolcs-Szatmár-Bereg', 'Észak-Alföld'),
(7, 'Bács-Kiskun', 'Dél-Alföld'),
(8, 'Békés', 'Dél-Alföld'),
(9, 'Csongrád', 'Dél-Alföld'),
(10, 'Pest', 'Közép-Magyarország'),
(11, 'Budapest ', 'Közép-Magyarország'),
(12, 'Komárom-Esztergom', 'Közép-Dunántúl'),
(13, 'Fejér', 'Közép-Dunántúl'),
(14, 'Veszprém', 'Közép-Dunántúl'),
(15, 'Győr-Moson-Sopron', 'Nyugat-Dunántúl'),
(16, 'Vas', 'Nyugat-Dunántúl'),
(17, 'Zala', 'Nyugat-Dunántúl'),
(18, 'Baranya', 'Dél-Dunántúl'),
(19, 'Somogy', 'Dél-Dunántúl'),
(20, 'Tolna', 'Dél-Dunántúl');

-- --------------------------------------------------------

--
-- Table structure for table `torony`
--

CREATE TABLE `torony` (
  `id` int(11) NOT NULL,
  `darab` int(11) NOT NULL,
  `teljesitmeny` int(11) NOT NULL,
  `kezdev` int(11) NOT NULL,
  `helyszinid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `torony`
--

INSERT INTO `torony` (`id`, `darab`, `teljesitmeny`, `kezdev`, `helyszinid`) VALUES
(1, 1, 250, 2000, 1),
(2, 1, 600, 2001, 2),
(3, 2, 600, 2002, 3),
(4, 2, 600, 2003, 4),
(5, 1, 225, 2005, 5),
(6, 1, 800, 2005, 6),
(7, 1, 800, 2005, 7),
(8, 1, 1800, 2005, 8),
(9, 1, 600, 2005, 9),
(10, 5, 2000, 2005, 4),
(11, 1, 1500, 2006, 11),
(12, 1, 1500, 2006, 12),
(13, 5, 2000, 2006, 4),
(14, 1, 1800, 2006, 14),
(15, 2, 2000, 2006, 15),
(16, 1, 600, 2006, 16),
(17, 12, 2000, 2006, 17),
(18, 1, 800, 2007, 3),
(19, 1, 800, 2007, 19),
(20, 1, 800, 2007, 20),
(21, 1, 2000, 2007, 21),
(22, 4, 3000, 2008, 22),
(23, 3, 3000, 2008, 23),
(24, 1, 2000, 2008, 23),
(25, 12, 2000, 2008, 17),
(26, 4, 2000, 2008, 25),
(27, 1, 1800, 2008, 25),
(28, 1, 2000, 2008, 26),
(29, 1, 2000, 2008, 27),
(30, 1, 850, 2008, 28),
(31, 19, 2000, 2009, 29),
(32, 8, 2000, 2009, 30),
(33, 4, 1800, 2010, 30),
(34, 1, 1800, 2010, 30),
(35, 6, 2000, 2010, 31),
(36, 7, 2000, 2010, 32),
(37, 6, 2000, 2010, 26),
(38, 2, 2000, 2010, 32),
(39, 6, 2000, 2010, 35),
(40, 1, 3000, 2010, 35),
(41, 1, 2000, 2010, 25),
(42, 4, 2000, 2011, 37),
(43, 13, 2000, 2011, 37),
(44, 1, 2000, 2010, 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helyszin`
--
ALTER TABLE `helyszin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_megyeid` (`megyeid`);

--
-- Indexes for table `kapcsolat`
--
ALTER TABLE `kapcsolat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `megye`
--
ALTER TABLE `megye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `torony`
--
ALTER TABLE `torony`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_helyszinid` (`helyszinid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kapcsolat`
--
ALTER TABLE `kapcsolat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `torony`
--
ALTER TABLE `torony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
