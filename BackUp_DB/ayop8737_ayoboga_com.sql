-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2020 at 02:13 PM
-- Server version: 10.2.31-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayop8737_ayoboga.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_news`
--

CREATE TABLE `card_news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_news`
--

INSERT INTO `card_news` (`id`, `title`, `slug`, `text`, `date`) VALUES
(1, 'ini Berita satu', 'ini-Berita-satu', 'ini text di berita 1', '2020-04-02 00:00:00'),
(2, 'ini Berita dua', 'ini-Berita-dua', 'ini text berita 2', '2020-04-02 00:00:00'),
(3, 'ini berita ketiga', 'ini-berita-ketiga', 'ini text berita ketiga', '2020-04-02 14:19:31'),
(4, 'ini berita keempat', 'ini-berita-keempat', 'ini text berita keempat', '2020-04-02 14:29:12'),
(5, 'ini berita kelima', 'ini-berita-kelima', 'ini text berita kelima', '2020-04-02 14:29:12'),
(6, 'ini berita enam', 'ini-berita-enam', 'ini text berita enam', '2020-04-02 14:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `table_card_menu`
--

CREATE TABLE `table_card_menu` (
  `ID_menu` varchar(5) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sub_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_card_menu`
--

INSERT INTO `table_card_menu` (`ID_menu`, `title`, `sub_title`) VALUES
('BP001', 'F&amp;B PRODUCTS', 'Kita Belajar mengenai dunia Kitchen, Cooking Method, Cutting Method, Preparation dan Banyak lagi!'),
('BS001', 'F&amp;B SERVICES', 'Kita Belajar mengenai dunia Restaurant, Pelayanan Tamu, Set-Up table dan banyak lagi!'),
('PC001', 'MICE AN PLACE', 'Mungin kamu belum familiar dengan kata ini, sebelum mulai belajar, pastikan dulu kamu udah pelajari '),
('PC002', 'KITCHEN WARE', 'Alat masak membantu kita untuk mempermudah dalam pembuatan suatu makanan!'),
('PC003', 'CUTTING METHOD', 'Banyak sekali jenis dan macam macam potongan, baik itu sayuran, buah, dan daging, cari tau disini!'),
('PC004', 'COOKING METHOD', 'Membuat makanan agar enak tentu harus dengan cara memasaknya, metode memasak sangat banyak!'),
('PC005', 'SAUCE AND DRESSING', 'Sauce adalah komponen yang wajib ada dalam suatu hidangan, banyak sekali jenis jenis sauce!'),
('PC006', 'PLATING', 'Menyatukan seluruh bahan makanan yang telah jadi kedalam satu piring dan menghiasinya!'),
('PC007', 'HERBS AND SPICES', 'Membuat makanan tidak lengkap jika tidak menggunakan bumbu dan rempah!'),
('PC008', 'MENU STRUCTURE', 'Menu Tentunya memiliki Strukturnya, dari hidangan pembuka sampai penutup!'),
('PC009', 'VEGETABLES', 'Sayuran sangat penting untuk kehidupan kita, banyak sekali jenisnya!'),
('RC001', 'CONTINENTAL FOOD', 'Ingin Gaul? Masuk Sini! Masak Makanan Khas Barat? eropa? Amerika, disini! Continental Food!'),
('RN001', 'NUSANTARA FOOD', 'Cinta Tanah Air? cinta kota Kamu? Pasti Dong, Makanya sini banyak resep Masakan Nusantara!'),
('RO001', 'ORIENTAL FOOD', 'Suka Ramen? Sushi? Kebab? Masuk sini! Banyak resep buat kamu Masak Makanan Oriental Food!'),
('SC001', 'SERVICE', 'Melayani Tamu adalah kunci Utama seorang Waiter!, Menyapa tamu, Alur Pelayanan, dan banyak lagi!'),
('SC002', 'SETUP TABLE', 'Banyak jenis dan Macam macam dari setup table pada restaurant!, ingin Belajar? Masuk sini!'),
('SC003', 'WARE', 'Disini Kamu akan belajar macam macam alat makan yang ada di dunia Restaurant, Penasaran? Check Disini!'),
('SC004', 'BEVERAGE', 'Banyak sekali minuman didunia ini, Mocktail? Cocktail? Traditional Baverage? banyak sekali!'),
('SC005', 'NAPKIN', 'Banyak sekali lipatan lipatan napkin yang bisa kamu pelajari disini!, bikin penasaran kann? Masuk sini!'),
('SC006', 'COFFEE DAN LATTE ART', 'Selain Beverage, seorang Waiter wajib bisa dan tau akan coffee dan tentunya coffee latte art');

-- --------------------------------------------------------

--
-- Table structure for table `table_data_input`
--

CREATE TABLE `table_data_input` (
  `ID` varchar(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `create_by` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `create_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_data_input`
--

INSERT INTO `table_data_input` (`ID`, `title`, `sub_title`, `create_by`, `content`, `create_date`) VALUES
('BPCO01', 'Apa itu Cooking Method?', 'Cooking Method apa sihh??', 'By Randy', 'Selamat datang dan selamat bergabung, Cooking Method, yaps! dalam bahasa indonesia Cooking method artinya adalah metode memasak. loh jadi kita harus belajar tentang metode memasak? Jelas perlu ini itu adalah basic kamu bisa berdiri di kitchen!, jadi apa itu metode Memasak? Metode memasak adalah cara atau langkah memasak suatu hidangan makanan sesuai dengan bahan mentah atau semi jadi agar masakan bisa di hidangkan/ disajikan', NULL),
('BPCO02', '2 Bagian Besar Metode Memasak', 'moist heat of cooking? dry heat of cooking?', 'By Randy', 'Kali ini dipelajaran kedua kita akan berkenalan dengan 2 jenis metode memasak, yang pertama ada moist heat of cooking dan yang kedua ada dry heat of cooking, jadi mereka semua itu apa?\r\n\r\n\r\n========== *** ==========\r\n\r\nmoist heat of cooking, bisa diartikan sebagai Panas basah, panas basah ini maksudnya adalah kita memasak menggunakan cairan (air) banyak sekali jenis jenisnya yang nanti kita jelaskan di materi materi selanjutnya, \r\n\r\nDry Heat of Cooking, yang kedua ini artinya adalah panas kering, panas kering sesuai dengan namanya, dia bertentangan dengan moist heat, dia tidak menggunakan air untuk memasaknya, sebagai gantinya dia menggunakan lemak untuk memasak, biasanya kegunaannya seperti menumis dan menggoreng yang akan kita jelaskan juga di materi lain.', NULL),
('BPCO03', 'Moist Head Cooking Method', '', 'By Fadhel', 'Moist Head Cooking Method itu sendiri meliputi :', '2019-11-17 20:22:44'),
('BPCO04', '', 'Poaching', '', 'Poaching adalah teknik memasak dengan api sedang dan perlahan-lahan. Masakan yang  terkenal menggunakan teknik ini adalah poached egg.', '2019-11-17 22:03:25'),
('BPCO05', '', 'Simmering', '', 'Simmering adalah memasak makanan dengan api kecil. Biasanya tingkat kematangan dengan teknik ini lebih sempurna. Biasa digunakan untuk memasak sayuran, bakso, atau sayur bersantan.', '2019-11-17 22:05:00'),
('BPCO06', '', 'Boiling', '', 'Ini pasti semua pada tahu ya? Iya. Merebus. Ini teknik paling sederhana yang biasa kita lakukan.', '2019-11-17 22:05:43'),
('BPCO07', '', 'Braising', '', 'Braising itu cara memasak masakan yang awalnya dimasak dengan membuat caramelization dengan teknik pan seared (memasak di wajan datar dengan panas tinggi) sebentar saja, lalu dilanjutkan dengan memasaknya dengan memasukkannya ke dalam oven atau di masak di dalam wadah tertutup (panci/pot) dengan disertai sedikit  cairan/kuah/kaldu.', '2019-11-17 22:06:54'),
('BPCO08', '', 'Stewing', '', 'Stewing adalah memasak secara perlahan dengan bahan makanan yang telah dipotong â€“ potong menjadi potongan yang lebih kecil seperti daging, ayam dengan menggunakan air yang tidak terlalu banyak atau hampir sama dengan jumlah bahan, waktu yang diperlukan juga lama.', '2019-11-17 22:08:57'),
('BPCO09', '', 'Pot Roasting', '', 'adalah proses roasting dimana bahan makanan yang akan diolah ditempatkan dalam wadah kemudian baru dimasak dalam oven.', '2019-11-17 22:09:45'),
('BPCO10', '', 'Steaming', '', 'Ini juga pastinya sudah pada tahu. Yes! Steaming adalah mengukus alias memasak dengan dua bagian: panci di bawah berisi air mendidih, di atasnya ada dandang berisi bahan yang mau dikukus.', '2019-11-17 22:10:28'),
('BPCO11', '', 'Papillote', '', 'adalah metode penyegelan protein dan mineral dalam kertas perkamen, biasanya diterapkan saat memanggang dengan oven. ', '2019-11-17 22:11:12'),
('BPCO12', 'Dry Heat Cooking', '', 'By Fadhel', 'Nah setelah tadi kita mempelajari tentang berbagai macam teknik dalam Moist Heat Cooking, mari kita lanjutkan dengan Dry Heat Cooking. Dalam Dry Heat Cooking itu sendiri meliputi :', '2019-11-17 22:13:45'),
('BPCO13', '', 'Pan Frying', '', 'Pan frying adalah teknik memasak dengan cara menggoreng bahan makanan dengan menggunakan sedikit minyak hanya untuk melumasi wajan.', '2019-11-17 22:16:11'),
('BPCO14', '', 'Searing', '', 'Searing adalah teknik memasak dengan suhu tinggi menggunakan wajan datar atau bergerigi di\r\natas kompor untuk membentuk kerak karamel di bagian luar dari daging, unggas atau ikan.', '2019-11-17 22:17:02'),
('BPCO15', '', 'Roasting', '', 'Roasting berarti memasak bahan makanan dengan keadaan sekitar bahan makanan tersebut dalam keadaan panas, kering, biasanya menggunakan equipment oven. ', '2019-11-17 22:17:52'),
('BPCO16', '', 'Sauteing', '', 'SautÃ© adalah teknik memasak dengan cara menumis sebentar menggunakan minyak yang sedikit dengan suhu tinggi, biasanya dalam wajan di atas kompor.', '2019-11-17 22:19:29'),
('BPCO17', '', 'Stir Frying', '', 'Stir frying sedikit mirip sauteing karena menggunakan suhu tinggi, namun minyaknya agak lebih banyak.', '2019-11-17 22:26:20'),
('BPCO18', '', 'Shallow Frying', '', 'Shallow frying menggunakan minyak yang tingginya hanya sepertiga atau setengah makanan. Teknik ini biasa digunakan untuk menggoreng daging, ikan, perkedel, dan beberapa jenis gorengan lain secara rumahan.', '2019-11-17 22:27:10'),
('BPCO19', '', 'Deep Frying', '', 'Deep frying adalah teknik memasak dengan menggoreng menggunakan minyak yang banyak dan makanan terendam seluruhnya dalam minyak panas. Hasilnya adalah renyah, kecokelatan di luarnya dan dalamnya sepenuhnya matang.', '2019-11-17 22:27:45'),
('BPCO20', '', 'Grilling', '', 'Metode memasak grilling secara umum sudah kita kenal untuk membuat sate. Pada dasarnya grilling adalah memasak dengan panas langsung dengan api di bawah bahan masakan; bahan masakan diletakkan kira-kira 10 cm dari api.', '2019-11-17 22:28:34'),
('BPCO21', '', 'Broiling', '', 'Broil adalah memasak bahan makanan menggunakan suhu yang tinggi dengan cepat. Metode ini biasanya digunakan untuk memasak bagian daging yang empuk, unggas, ikan dan beberapa jenis sayuran.', '2019-11-17 22:29:40'),
('BPCO22', '', 'Baking', '', 'Bake atau baking mempunyai arti yang sama, memasak bahan makanan dengan keadaan sekitar bahan makanan tersebut dalam keadaan panas, kering dan biasanya menggunakan oven.', '2019-11-17 22:30:17'),
('BPCU00', 'Apa itu Cutting Method?', 'Pengertian', 'By Fadhel', 'Pada dasarnya cutting method adalah suatu metode atau cara dalam memotong sayuran agar mendapatkan bentuk yang kita inginkan', '2019-11-13 11:04:22'),
('BPCU01', 'Cara memegang pisau dengan benar', 'Tips', 'By Fadhel', 'Pelajari cara memegang pisau dapur dengan benar. Pegang pisau dapur seolah-olah Anda ingin bersalaman dengan pegangan pisau. Ketika Anda mengangkat pisau dapur, jari telunjuk Anda harus berada di luar bagian bilah pisau (pada sisi datarnya) dan jari tengah, manis, dan kelingking Anda berada di bagian atas pegangan pada bilahnya. Pisau harus sejajar dengan tubuh Anda. Pegangan ini disebut dengan pegangan menjepit, dan merupakan cara yang baik untuk memegang pisau, karena akan menghasilkan kontrol dan akurasi yang optimal untuk potongan Anda. Karena jari Anda lebih dekat dengan bilah, Anda dapat mengendalikannya dengan ebih baik dan membuatnya mengarah ke arah yang Anda mau.', '2019-11-13 11:22:18'),
('BPCU02', 'Potongan Ikan', 'Pengertian', 'By Fadhel', 'Dalam memotong Ikan terutama dalam proses pengolahan Ikan itu sendiri, memiliki beragam teknik atau cara memotong Ikan. Seperti :', '2019-11-13 11:28:36'),
('BPCU03', '', 'Delice', 'By Fadhel', 'Potongan ini adalah potongan fillet utuh panjang, yang kemudian disimpul menjadi bulatan atau dilipat.', '2019-11-13 11:30:12'),
('BPCU04', '', 'Paupiette', 'By Fadhel', 'Adalah daging fillet tipis yang diisi lalu digukung. Biasanya juga disebut dengan rolled fish.', '2019-11-13 11:31:17'),
('BPCU05', '', 'Goujon', 'By Fadhel', 'Goujon adalah daging ikan fillet yang dipotong serong memanjang, atau berbentuk panjang sirip ikan.', '2019-11-13 11:32:17'),
('BPCU06', '', 'Troncom', 'By Fadhel', 'Adalah potongan ikan yang dibentuk bulat utuh. Biasanya, ikan yang dipotong dengan teknik ini adalah ikan yang berbentuk pipih.', '2019-11-13 11:33:16'),
('BPCU07', '', 'Supreme', 'By Fadhel', 'Supreme adalah potongan ikan yang diiris miring dari fillet ikan. Biasanya dipotong dari ikan yang bertubuh besar.', '2019-11-13 11:34:58'),
('BPCU08', '', 'Darne', 'By Fadhel', 'Adalah potongan ikan yang dipotong melintang dari ikan yang berbentuk bulat dan masih utuh, contohnya ikan tenggiri dan tongkol.', '2019-11-13 11:36:09'),
('BPCU09', 'Potongan Ayam', 'Pengertian', 'By Fadhel', 'Sama halnya dengan mengolah ikan atau bahan masakan yang lain, daging ayam memiliki teknik dan cara sendiri dalam mengolahnya, antara lain :', '2019-11-13 11:42:30'),
('BPCU10', '', 'Whole Chicken ( Ayam Utuh )', 'By Fadhel', ' Meliputi semua bagian tubuh ayam tanpa terkecuali. Hanya saja untuk ayam kampung termasuk leher, kepala, hingga ceker ikut dikemas.', '2019-11-13 11:45:46'),
('BPCU11', '', 'Neck', 'By Fadhel', 'Adalah bagian leher pada ayam', '2019-11-15 20:13:16'),
('BPCU12', '', 'Forequarter', '', 'Adalah potongan ayam sayap dan dada yang menyatu.', '2019-11-15 20:14:34'),
('BPCU13', '', '3-Join Wing', '', 'Adalah potongan ayam bagian sayap utuh. Nahhh... di bagian 1 sayap utuh, terdapat 3 bagian sayap. yaitu :\r\nâ€¢	Wing Tip : bagian sayap paling ujung yang agak lancip kelihatannya.\r\nâ€¢	Mid Joint Wing : bagian sayap yang ada di tengah - tengan antara kedua bagian sayap\r\nâ€¢	Drumette : bagian sayap yang paling dekat dengan dada. Bagian sayang yang ada paling dalam.', '2019-11-15 20:16:36'),
('BPCU14', '', 'Breast Skin', '', 'Adalah bagian dada ayam utuh, masih terdapat kulit & tulang.', '2019-11-15 20:19:20'),
('BPCU15', '', 'Breast fillet without skin', '', 'Adalah bagian dada ayam yang hanya terdapat dagingnya saja, tanpa kulit dan tulangnya.', '2019-11-15 20:22:05'),
('BPCU16', '', 'Leg Quarter with Backbone', '', 'Adalah potongan ayam bagian paha atas dan paha bawah yang masih berisi tulang, termasuk tulang belakang.', '2019-11-15 20:24:07'),
('BPCU17', '', 'Thigh', '', 'Adalah potongan ayam bagian paha atas.', '2019-11-15 20:25:29'),
('BPCU18', '', 'Drumstick', '', 'Adalah potongan ayam bagian paha atas. ', '2019-11-15 20:26:49'),
('BPCU19', 'Potongan Sapi', 'Pengertian', 'By Fadhel', 'Dalam mengolah daging sapi, terutama dalam memotong daging sapi terdapat berbagai macam jenis potongan pada daging sapi, seperti :', '2019-11-15 21:18:11'),
('BPCU20', '', 'Tenderloin ( Has Dalam )', '', 'Adalah pemotongan daging sapi yang berasal dari otot utama sekitar pinggang sapi, atau sekitar bahu dan tulang panggul.', '2019-11-15 21:26:35'),
('BPCU21', '', 'Sirloin', '', 'Adalah pemotongan daging sapi yang diperoleh dari bagian iga, yang juga banyak diolah sebagai steak. Walaupun masuk dalam kelas daging steak dibawah has dalam, namun sirloin ini sangat banyak diminati penggemar steak.', '2019-11-15 21:27:12'),
('BPCU22', '', 'Chuck', '', 'Adalah bagian pemotongan daging sapi yang diambil dari bagian atasnya paha depan. Paling cocok jenis potongan ini adalah untuk membuat bakso, karena lebih liat dan kenyal.', '2019-11-15 23:12:38'),
('BPCU23', '', 'Rib', '', 'Ini adalah pemotongan daging sapi yang diambil dari sekitar tulang iga/tulang rusuk sapi.', '2019-11-15 23:13:57'),
('BPCU24', '', 'T-Bone', '', 'Jenis pemotongan daging sapi yang disebut T-bone juga biasa disajikan sebagai steak. Hal ini adalah potongan daging sapi yang terdiri dari tenderloin dan sedikit bagian strip yang dipisahkan oleh tulang yang berbentuk seperti huruf T.', '2019-11-15 23:15:15'),
('BPCU25', '', 'Rump', '', 'Potongan daging sapi yang berasal dari daerah punggung bagian belakang. Umumnya jenis daging sapi yang satu ini dihidangkan setelah dipanggang.', '2019-11-15 23:16:07'),
('BPCU26', '', 'Lamosir', '', 'Merupakan jenis daging sapi yang lunak, dan dinamakan lamusir karena didalamnya terdapat butir-butir lemak. Daging jenis pemotongan ini bisa diolah dengan dipanggang oven, bakar, atau grill.', '2019-11-15 23:17:00'),
('BPCU27', '', 'Brisket', '', 'Potongan ini diambil dari bagian dada bagian bawah disekitar ketiak sapi. Umumnya bagian ini agak berlemak, dan biasanya digunakan untuk masakan khas Padang.', '2019-11-15 23:17:51'),
('BPCU28', '', 'Shank', '', 'Diambil dari kaki bagian depan atas dari sapi, yang umumnya digunakan untuk menghasilkan kaldu, misalnya sebagai bahan dasar sup, soto dan bakso urat.', '2019-11-15 23:18:42'),
('BPCU29', '', 'Knuckle', '', 'Adalah bagian pemotongan daging sapi yang diambil dari bagian atas paha belakang sapi, yang berada di antara penutup dan gandik. ', '2019-11-15 23:19:43'),
('BPCU30', '', 'Tile', '', 'Seringkali disebut buntut(ekor dalam bahasa Jawa), adalah bagian ekor sapi yang biasanya disajikan sebagai sup buntut.', '2019-11-15 23:20:52'),
('BPCU31', 'Potongan Sayuran', 'Pengertian', 'By Fadhel', 'Nah ternyata selain ketiga bahan tadi yaitu sapi, ayam, dan ikan, sayuran juga memiliki jenis potongan tersendiri dalam mengolahnya. Lantas apa saja sih potongan-potongan untuk sayuran? Mari kita pelajari!', '2019-11-15 23:25:16'),
('BPCU32', '', 'Jardiniere', '', 'Potongan ini biasanya digunakan dalam hidangan steak / maincourse yang berukuran 3cm x 1cm x 1cm.', '2019-11-15 23:28:02'),
('BPCU33', '', 'Julienne', '', 'Potongan ini biasanya digunakan dalam hidangan salad / appetizer yang berukuran 4cm x 2mm x 2mm.', '2019-11-15 23:29:05'),
('BPCU34', '', 'Brunoise', '', 'Potongan ini biasanya digunakan dalam isian roughut yang berukuran 2mm x 2mm x 2mm.', '2019-11-15 23:30:07'),
('BPCU35', '', 'Macedoine', '', 'Potongan ini biasanya digunakan dalam isian soup yang berukuran 1cm x 1cm x 1cm', '2019-11-15 23:47:11'),
('BPCU36', '', 'Allumate', '', 'Potongan ini seperti batang korek api tetapi lebih besar dari juliene yang berukuran 3cm x 3mm x 3mm.', '2019-11-15 23:48:30'),
('BPCU37', '', 'Paysane', '', 'Potongan ini biasanya digunakan untuk isian soup dengan ukuran 1cm x 1cm.', '2019-11-15 23:49:14'),
('BPCU38', '', 'Chiffonade', '', 'Potongan halus pada sayuran seperti kol, sawi, lettuce.', '2019-11-15 23:50:13'),
('BPCU39', '', 'Chopped', '', 'Dicincang halus / kasar pada umbi lapis seperti onion, garlic, shallot.', '2019-11-15 23:50:53'),
('BPCU40', '', 'Slice', '', 'Potongan ini berbentuk irisan, baik itu tebal maupun tipis. Biasanya potongan ini digunakan untuk tomato, sucini, carrot.', '2019-11-15 23:51:52'),
('BPCU41', '', 'Turning', '', 'Potongan turning biasa digunakan untuk soup contohnya potato, labu siam.', '2019-11-15 23:52:39'),
('BPCU42', '', 'Vichy', '', 'Potongan ini hampir sama dengan slice yaitu potongan asli dari bentuk sayuran tersebut contohnya carrot vichy.', '2019-11-15 23:53:24'),
('BPHS01', 'Herbs and Spices', 'Apa yang dimaksud dengan Herbs dan Spices', 'By Pretty', 'Nah kali ini kita belajar tentang bumbu dan rempah yg digunakan dalam makanan,yaitu HERBS and SPICES.\r\nHERBS (bumbu) tanaman aromatik yang ditambahkan pada makanan sebagai penyedap dan penambah aroma pd makanan. Bumbu ini cenderung basah,sehingga jangka waktu penyimpanan tidak lama.  Herbs sebagian besar terdiri dari tumbuh-tumbuhan yang berasal dari daerah dingin, dan biasanya digunakan dalam keadaan masih segar. \r\nSPICES (rempah) sebagian besar tumbuh di daerah tropis dan banyak dimanfaatkan dalam pengolahan makanan untuk memberi rasa pada makanan. Rempah dapat juga dikatakan sebagai bumbu kering. Pada dasarnya bumbu dan rempah keduanya memberi dan meningkatkan rasa dan aroma pada makanan.', '2019-11-08 10:56:48'),
('BPHS02', 'Perbedaan dari Herbs and Spices', 'Jelaskan perbedaan Herbs dan Spices', 'By Pretty', 'Bagi kamu pecinta kuliner dan suka memasak, tentu sudah gak asing lagi dengan aroma dan rasa rempah dan bumbu, kan? Rempah dan bumbu menjadikan masakan menjadi lebih kaya. Apalagi masakan Indonesia terkenal kaya bumbu dan rempah.\r\nTetapi, apakah kamu sudah tahu bedanya rempah (herbs) dengan bumbu (spices)?\r\nBumbu atau herbs adalah tanaman aromatik. Bentuknya biasanya cenderung segar cenderung basah. Sehingga, jangka waktu penyimpanannya tidak lama,sedangkan;\r\nRempah cenderung kering dan yang digunakan adalah bagian biji, akar atau kulit kayunya. \r\nRempah digunakan dalam berbagai makanan, minuman, dan obat-obatan. Selain itu, rempah juga dapat memberikan warna, rasa, dan bau pada makanan', '2019-11-08 11:01:35'),
('BPHS03', 'Macam macam Herbs', 'Sebutkan macam-macam Herbs', 'By Pretty', 'Contoh Macam-macam Herbs\r\n- cabai\r\n- bawang putih ,bawang merah\r\n- tomat\r\n- daun kemangi\r\n- kunyit\r\n-jahe\r\n- laos\r\n- kecombrang\r\n- jahe\r\n- jeruk nipis,jeruk limau\r\ndll', '2019-11-08 11:07:14'),
('BPHS04', 'Macam macam Spices', 'Sebutkan macam-macam Spices', 'By Pretty', 'Contoh Macam-macam Spices(Rempah)\r\n- lada\r\n- cengkeh\r\n- kayu manis\r\n- ketumbar\r\n- pala\r\n- jinten\r\n- kapulaga\r\n- kemiri\r\n- bunga lawang\r\ndan masih banyak lagi', '2019-11-08 11:13:59'),
('BPKW00', 'Apa itu Kitchen Ware ?', 'Pengertian ', 'By Fadhel ', 'Setelah kamu belajar mengenai Mice en Place, tentu saja dalam memasak kamu perlu tahu tentang kitchenware. Dalam dunia tata boga sendiri kitchenware merupakan salah satu komponen utama dalam penyajian suatu masakan.  Nah lantas apa itu Kitchen Ware?\r\nKitchen Ware adalah segala macam peralatan yang digunakan untuk memasak makanan baik peralatan untuk proses memasak, memanggang, merebus, hingga menyajikan makanan.', '2019-11-05 15:14:32'),
('BPKW01', 'Jenis Alat Masak', '', 'By Fadhel ', 'Peralatan masak yang digunakan tentu saja memiliki jenis dan fungsinya masing-masing. Pada umumnya jenis alat masak terbagi berdasarkan jenis bahan baku yang digunakan dalam pembuatan alat masak itu sendiri. Seperti :\r\n1. Stainless Steel\r\n2. Wood / Kayu\r\n3. Rubber / Karet / Plastik', '2019-11-05 15:23:57'),
('BPKW02', '', 'Stainless steel', 'By Fadhel ', 'Nah dalam dunia tata boga penggunaan peralatan masak dari stainless steel merupakan hal yang paling umum dan sering ditemukan dalam peralatan masak di kitchen. Karna peralatan dari stainless steel dinilai lebih kuat dan tahan terhadap karat. Berikut ini merupakan beberapa contoh kitchen ware yang terbuat dari stainless steel :\r\n\r\n1. Spatula\r\n2. Double Handle Wok\r\n3. Chinese Wok\r\n4. Fry  Pan', '2019-11-05 15:47:29'),
('BPKW03', '', 'Wood / Kayu', 'By Fadhel', 'Penggunaan alat masak tentu tidak selalu menggunakan stainless steel dalam proses masak memasak, salah satunya alat masak yang terbuat dari kayu. Berikut adalah contoh peralatan memasak dari kayu beserta fungsinya :\r\n\r\n1. Rolling Pin \r\nRolling pin ataupun penggiling adonan ini berfungsi untuk menggilas dan meratakan adonan sebelum dipotong atau dicetak menjadi kue pastry lezat. Terbuat dari batok kelapa membuat peralatan memasak ini terlihat sangat elegant. Rolling Pin terbuat dari kayu kelapa. Digunakan untuk menipiskan adonan kue sebelum dibentuk atau digunakan sebagai adonan kue.\r\n\r\n2. Wood Spatula\r\nberfungsi untuk mengaduk masakan ketika menumis.\r\n\r\n3. Cutting Board\r\nSetiap bahan-bahan yang akan diolah khususnya yang akan dipotong, menggunakan cutting board sebagai alas untuk memotong bahan-bahan yang akan digunakan untuk memasak.\r\n\r\n\r\n    \r\n', '2019-11-13 10:51:23'),
('BPMP01', 'Apa itu Mise en Place?', 'Pengertian ', 'By Fadhel ', 'Mungkin teman-teman khususnya kamu yang ingin memasak, sudah tidak asing lagi mendengar kata Mice en Place. Nah apa sih Mice en Plece itu sendiri? Dalam dunia tata boga Mice en place sendiri berarti sebagai persiapan dan penempatan segala peralatan dan perlengkapan yang akan digunakan dalam penghidangan sajian makanan pada tempatnya, sehingga memudahkan pada saat penggunaanya. ', NULL),
('BPMP02', 'Apa yang harus disiapkan?', 'Persiapan', 'By Fadhel ', 'Yang harus disiapkan sebelum kita memulai memasak yaitu :\r\nA. Peralatan \r\nB. Bahan\r\nC. Resep ( Optional )\r\n', NULL),
('BPMP03', 'Persiapan Alat', 'Alat - alat yang disiapkan', 'By Fadhel ', 'Alat - alat yang umumnya disiapkan ketika Mice en Place antara lain :\r\n1. Cutting Board\r\n2. Knife\r\n3. Napkin\r\n4. Bowl ( plastic bowl or aluminium bowl )\r\n5. Kitchen Tray', NULL),
('BPMP04', 'Persiapan Bahan', 'Bahan - bahan yang dibutuhkan ', 'By Fadhel ', 'Tentu saja bahan yang dibutuhkan tergantung masakan atau resep apa yang akan kamu buat, namun yang harus dilakukan adalah :\r\n1. Pastikan bahan - bahan yang akan kamu gunakan merupakan bahan yang berkualitas, karena kualitas bahan akan berpengaruh terhadap cita rasa dari masakan.\r\n2.  Cuci / bersihkan bahan - bahan yang akan digunakan,\r\n3. Jika ada bahan yang dikupas, maka kupaslah terlebih dahulu.', NULL),
('BPMP05', 'Langkah - langkah Mice en Place', '', 'By Fadhel ', 'Nah setelah kamu sudah menyiapkan peralatan dan bahan sesuai dengan kebutuhan kamu, maka tentu saja ada langkah - langkah yang harus kamu ikuti loh, nah apa sajakah itu? \r\n1. Persiapkan alat yang dibutuhkan.\r\n2. Jangan lupa sebelum menggunakan cutting board, gunakanlah napkin sebagai alas dari cutting board tersebut.\r\n3. Kemudian persiapkan bahan yang dibutuhkan.\r\n4. Terakhir, bahan yang telah dipotong disimpan ke tempat yang sudah disiapkan ( seperti : Bowl atau Kitchen tray ).\r\n', NULL),
('BPMS01', ' Menu Structure', 'Apa itu Menu Structure', 'By Pretty', ' Menu Structure adalah susunan makanan yg hendak dinikmati dan penuntun bagi mereka yang menikmatinya karena akan tergambar tentang apa dan bagaimana makanan tersebut disajikan. \r\nBiasanya menu yg tersturktur itu seperti : Makanan Pembuka(Appetizer),Soup,Makanan Utama (Main Course),Makanan Penutup Dessert.\r\n', '2019-11-08 11:20:29'),
('BPMS02', 'Susunan Menu Structure', 'Menjelaskan Susunan Menu Strukture  seperti âž¢ Appetizer âž¢ Soup âž¢ Main Course âž¢ Dessert', 'By Pretty', 'âž¢ Appetizer adalah makanan pembuka yang dihidangakan dengan porsi kecil atau hidangan pembangkit selera makan . makanan pembuka ada 2 jenis, - Cold Appetizer( contohnya :Fruit salad ,Coctail ), Hot Appetizer(contohnya : risoles and croqette)\r\nâž¢ Soup dihidangkan setelah appetizer (cold entrÃ©e) atau sebelum entrÃ©e,\r\nPada jamuan makan untuk menetralkan rasa tajam dari appetizer untuk memenuhi/ sebelum hidangan berikutnya\r\nâž¢ Main Course adalah Hidangan pokok dari suatu susunan menu lengkap yang dihidangkan pada waktu lunch maupun dinner, ukuran porsinya pun lebih besar dari appetizer.\r\nâž¢ Dessert adalah Hidangan penutup yang disajikan setelah hidangan utama ,sebagai hidangan penutup biasanya disebut dengan makanan pencuci mulut atau hidangan yg manis-manis. Contohnya: ice cream,pudding,apple pie.\r\n', '2019-11-08 11:21:56'),
('BPP01', ' Plating', 'Jelaskan apa itu Plating?', 'By Pretty', 'Plating adalah cara penataan atau penyajian makanan diatas piring dengan memperhatikan posisi dan komposisi makanan untuk menunjukkan nilai seni dan citarasa yg tinggi. ', '2019-11-08 11:38:59'),
('BPP02', 'Cara menyajikan Plating', 'Yang Harus diperhatikan dalam Plating', 'By Pretty', '1. Gunakan tempat penyajian makanan yg elegan \r\n2. Atur makanan hingga terlihat menarik\r\n3. Gunakan bahan dasar yang alami pada makanan\r\n4. Sesuaikan komposisi elemen makanan, contohnya : Keseimbangan antara Karbohidrat,\r\nProtein Hewani, Sayuran\r\n', '2019-11-08 11:48:39'),
('BPSD00', 'Apa itu Sauce and Dressing?', 'Pengertian Sauce and Dressing ', 'By Pretty', 'SAUCE adalah  suatu bahan makanan yg dihaluskan dengan kombinasi dari bahan pengental lainnya sehingga menjadi setengah cair. Sauce disajikan bersama daging,ikan maupun kue-kue manis  dengan maksud untuk mempertinggi kualitas dan cita rasa makanan tersebut .\r\nDRESSING adalah cairan yang dihaluskan yang mempunyi rasa kecut dan tajam. Rasa Dressing sebaiknya lebih menonjol dari rasa asam bahan utama karena :\r\n - Bahan utama sebagian besar diambil dari sayuran segar atau bahan makanan segar lainnya yg belum dibumbui.\r\n - Bahan salad yang dimasak biasanya ditambah sedikit bumbu,hampir tidak terasa , dengan begitu rasa salad hanya diberikan oleh      \r\n   dressing.\r\n', '2019-11-08 09:21:23'),
('BPSD01', 'Mother Sauce ', 'Apa sih  itu Mother Sauce  ', 'By Pretty', 'Nah, kali ini aku akan membahas tentang mother sauce. Dari semua ilmu boga, apa lagi continental, sauce sangatlah penting untuk di mengerti dan di pahami. Karna sauce salah satu komponen utama dan wajib ada pada main course continental.\r\nMother sauce adalah sauce dasar yang paling mudah untuk di buat dan bahannya paling mudah di dapatkan.\r\nMother sauce terdiri dari 5 sauce dasar. Yaitu:\r\n-Hollandaise, Bechamel, Vellute, tomato, espagnole\r\n', '2019-11-08 09:51:58'),
('BPSD02', ' Hollandaise', ' Hollandaise beserta Turunannnya', 'By Pretty', 'Hollandaise Sauce sering juga disebut Barnaise Sauce  yang  terbuat dari  campuran mentega yang sudah dilelehkan,perasan lemon dan bahan pengental berupa kuning telur.  Hollandaise Sauce sangat cocok dihidangkan bersama olahan seafood.\r\nAdapun  Turunan saus dari hollandaise sauce (wine vinegar): Mousline, Riche, Maltaise. \r\nSaus ini di klasifikasikan menjadi 3 macam yaitu:\r\nMelted Butter,\r\nSoft Butter,\r\nSimple Sauce. ', '2019-11-08 10:12:49'),
('BPSD03', 'Bechamel ', ' Bechamel Sauce dan Turunannya', 'By Pretty', 'nah sekarang kita mengulas tentang apa itu Bachamel Sauce; \r\nBechamel Sauce terbuat dari campuran susu,white roux,pala,bay leaf,bawang bombay dan cengkeh.  Bechamel  Sauce sering dipakai untuk saus dasar lasagna dan makanan berbahan dasar ikan.\r\nadapun turunan dari  Bechamel Sauce ;  Cream, Mornay, Soubise, Mustard, Horseradish', '2019-11-08 10:22:51'),
('BPSD04', ' Vellute Sauce', 'Klasifikasi Vellute Sauce dan Turunannya', 'By Pretty', ' Setelah kita membahas tentang Bechamel Sauce sekarang kita akan membahas tentang Vellute Sauce; \r\nVellute/Veloute  Sauce terbuat dari kaldu ayam atau kaldu ikan dan white roux. Vellute Sauce biasa dihidangkan bersama  makanan berbahan dasar ayam , ikan dan sayuran.\r\ndan turunan dari Vellute Sauce; Allemande, Mushroom, Albufera, Supreme, White Wine Sauce, Normandy sauce.', '2019-11-08 10:29:56'),
('BPSD05', 'Tomato Sauce', '  Tomato Sauce dan Turunannya', 'By Pretty', 'Sebagian banyak orang tidak asing lagi apa itu saus tomat,tetapi bagi kamu yg tidak begitu memahami tentang saus tomat mari kita bersama mengulasnya ; Tomato Sauce biasanya terbuat dari pure tomat ditambah kaldu dan roux. Selain itu,dibutuhkan mire poix,bay leaf,pasta tomat dan bumbu-bumbu lainnya agar rasa dan warna tomato sauce lebih keluar. Tomato Sauce biasanya digunakan sebagai bahan pelengkap pasta dan makanan yg berbahan dasar daging merah maupun ayam .\r\nturunannya adalah; Americaine, Italianne, Spicy Sauce.', '2019-11-08 10:39:26'),
('BPSD06', ' Espagnole Sauce ', ' Espagnole  Sauce beserta Turunannya', 'By Pretty', 'nah terakhir kita akan membahas apa itu Espagnole Sauce bagi kamu penikmat steak pasti tidak asing lagi mendengar apa itu Espagnole Sauce , jadi bagi kamu yg tidak tahu apa itu Espagnole Sauce mari kita ulas; Espagnole Sauce sering juga disebut Brown Sauce yang terbuat dari bahan cair kaldu cokelat dan roux. Warna cokelat diperoleh dengan menggosongkan tulang saat pembuatan kaldu dan penambahan mire poix saat proses pembuatan saus. Mire Poix adalah berbagai jenis sayuran yg terdiri dari wortel,bawang bombay,batang daun bawang dan batang seledri , direbus bersama selama proses pembuatan kaldu .  Espagnole Sauce biasa disajikan bersama makanan berbahan dasar daging seperti steak.\r\nberikut turunan dari  Espagnole Sauce ;  Diable, Madere, Perigeoux, Piquante, Robert, Charcuterie, Bordelaise, Chasesur, Bigarade, Red Wine Sauce, Mushroom, Zingara.', '2019-11-08 10:44:19'),
('BSS001', 'Apa itu Service?', '', 'By Randy', 'Kali ini kita akan belajar mengenai dunia FB yang bertolak belakang dengan ktichen, yap! Ini adalah FB Service.\r\n\r\nJadi Apa itu FB service?\r\nFB Service adalah salahsatu departement F&B dimana mereka yang mengatur pelayanan makan dan minum di restaurant. Orang yang melayani tamu atau Guest disebut waiter/waitress. Banyak sekali Pembelajaran F&B di sini. Ayo kita pelajari bersama.', '2019-11-06 11:55:48'),
('BSS002', 'Langkah Langkah Pelayanan Tamu di Restaurant', '', 'By Randy', 'Untuk mencapai kepuasan tamu, ada langkah langkah pelayanan service di Restaurant diantaranya\r\nMenyambut Tamu\r\nMengantar ke meja\r\nMenarik Kursi untuk Tamu\r\nMempersilahkan Duduk\r\nMembuka Napkin\r\nMembuka Gelas Goblet\r\nPouring Water\r\nMemberikan Menu\r\nMenunggu Tamu memilih menu\r\nMencatat Hidangan yang dipilih\r\nMemberikan hidangan sesuai menu\r\nClear Up Piring kotor\r\nMenunggu keperluan Tamu\r\nMenarik Kursi tamu\r\nMengucapkan terima kasih\r\n\r\nMasih ada istilah istilah yang kamu engga ketahui? Tenang saja Kita pelajari semuanya bareng bareng di kelas ini!\r\n', '2019-11-06 12:02:25'),
('BSS003', '', '01 Penyambutan Tamu', 'By Randy', 'Langkah yang paling awal adalah menyambut tamu, tentu caranya standar dan biasa, biasanya ketika tamu masuk, kamu sambut dengan bahasa yang sopan, â€œselamat datang di restaurant kamiâ€ atau bisa juga dengan bahasa inggris untuk standar internasional seperti â€œGood Morning, welcome to our restaurantâ€. Jangan lupa postur tubuh sedikit menunduk agar terlihat menghargai tamu, dibarengi dengan tangan kanan di tempelkan ke data atas kiri atau pinggang kiri.', '2019-11-06 12:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `status`) VALUES
(204, 'kutchiyosenojutsu', 'narutoshippuden', '2019-10-19 17:48:29', ''),
(205, 'admin_fadhel', '684ayoboga.com', '2019-10-29 10:26:32', ''),
(206, 'admin_pretty', '989ayoboga.com', '2019-10-29 10:26:32', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_news`
--
ALTER TABLE `card_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_card_menu`
--
ALTER TABLE `table_card_menu`
  ADD PRIMARY KEY (`ID_menu`);

--
-- Indexes for table `table_data_input`
--
ALTER TABLE `table_data_input`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_news`
--
ALTER TABLE `card_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
