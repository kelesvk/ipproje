-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 May 2021, 17:06:41
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE `articles` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(36) NOT NULL,
  `a_content` text NOT NULL,
  `a_cid` int(11) NOT NULL,
  `a_image` varchar(99) NOT NULL,
  `a_author` varchar(36) NOT NULL,
  `a_view` text NOT NULL DEFAULT '0',
  `a_summary` text NOT NULL,
  `a_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`a_id`, `a_title`, `a_content`, `a_cid`, `a_image`, `a_author`, `a_view`, `a_summary`, `a_date`) VALUES
(1, 'FRP Nedir?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra. Nunc ac congue odio. Etiam molestie, lorem sit amet tempor auctor, odio erat volutpat urna, eget ornare turpis nisl sit amet nulla. Integer eget elit pulvinar, lobortis nisl ac, dapibus nunc. Nullam venenatis consequat libero, in pharetra dolor maximus ut. Nulla et erat sed sem blandit consectetur. Praesent nec est massa. Donec quis pulvinar dui. Integer facilisis nulla eu quam congue feugiat. Aenean dapibus gravida quam.\r\n\r\nMaecenas porta porttitor tristique. Curabitur maximus tellus erat, vel molestie magna lacinia sed. Praesent sodales ipsum leo, eu rhoncus sapien vehicula in. Etiam egestas aliquam nulla vitae lacinia. Aliquam malesuada nulla quis interdum sagittis. Maecenas et consectetur orci, vitae convallis lacus. Duis felis justo, feugiat a cursus quis, consectetur id est. Suspendisse pretium vulputate ante, eget rutrum erat. Suspendisse feugiat ex sit amet lectus efficitur maximus. Mauris porttitor ex sapien, non placerat magna euismod vel. Vivamus eleifend congue elit, et suscipit odio bibendum eu. Donec varius nec ex nec aliquet.\r\n\r\nFusce laoreet sed turpis et semper. Aenean pretium velit vel mauris condimentum aliquet. Praesent ligula odio, imperdiet at tempus vitae, vehicula id nibh. Suspendisse potenti. Pellentesque malesuada, orci et viverra laoreet, ligula mi auctor mi, ut sodales magna libero in enim. Praesent facilisis at elit nec convallis. Nullam mattis nibh quis purus pulvinar, vitae faucibus lectus gravida. Quisque tincidunt pretium purus, et convallis purus bibendum nec. Nullam eleifend ac libero vel cursus.\r\n\r\nDonec feugiat dui ac felis consectetur, at finibus ex sodales. Praesent vel luctus massa. Mauris varius libero id nulla elementum consectetur. Donec ultricies, enim non rutrum feugiat, augue diam tincidunt est, ac pellentesque arcu nulla efficitur sem. Maecenas ornare mi eget lacus facilisis rutrum. Ut ullamcorper tincidunt velit non rutrum. In malesuada ac mi in faucibus.\r\n\r\nAenean luctus, sem sed congue scelerisque, nunc dolor feugiat diam, vitae vestibulum libero sapien nec nisi. Morbi interdum eros at neque tincidunt laoreet. Aliquam erat volutpat. Pellentesque pharetra tincidunt semper. Maecenas id ipsum erat. Mauris et leo vitae neque consectetur posuere et nec nunc. Suspendisse sagittis laoreet eros non vulputate. Suspendisse quis egestas enim. Nulla sodales sapien elit, eu tincidunt turpis euismod nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 1, '', 'Yemrekayaa', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra.', '2021-05-03'),
(3, 'Nasıl Oynanır?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra. Nunc ac congue odio. Etiam molestie, lorem sit amet tempor auctor, odio erat volutpat urna, eget ornare turpis nisl sit amet nulla. Integer eget elit pulvinar, lobortis nisl ac, dapibus nunc. Nullam venenatis consequat libero, in pharetra dolor maximus ut. Nulla et erat sed sem blandit consectetur. Praesent nec est massa. Donec quis pulvinar dui. Integer facilisis nulla eu quam congue feugiat. Aenean dapibus gravida quam.\r\n\r\nMaecenas porta porttitor tristique. Curabitur maximus tellus erat, vel molestie magna lacinia sed. Praesent sodales ipsum leo, eu rhoncus sapien vehicula in. Etiam egestas aliquam nulla vitae lacinia. Aliquam malesuada nulla quis interdum sagittis. Maecenas et consectetur orci, vitae convallis lacus. Duis felis justo, feugiat a cursus quis, consectetur id est. Suspendisse pretium vulputate ante, eget rutrum erat. Suspendisse feugiat ex sit amet lectus efficitur maximus. Mauris porttitor ex sapien, non placerat magna euismod vel. Vivamus eleifend congue elit, et suscipit odio bibendum eu. Donec varius nec ex nec aliquet.\r\n\r\nFusce laoreet sed turpis et semper. Aenean pretium velit vel mauris condimentum aliquet. Praesent ligula odio, imperdiet at tempus vitae, vehicula id nibh. Suspendisse potenti. Pellentesque malesuada, orci et viverra laoreet, ligula mi auctor mi, ut sodales magna libero in enim. Praesent facilisis at elit nec convallis. Nullam mattis nibh quis purus pulvinar, vitae faucibus lectus gravida. Quisque tincidunt pretium purus, et convallis purus bibendum nec. Nullam eleifend ac libero vel cursus.\r\n\r\nDonec feugiat dui ac felis consectetur, at finibus ex sodales. Praesent vel luctus massa. Mauris varius libero id nulla elementum consectetur. Donec ultricies, enim non rutrum feugiat, augue diam tincidunt est, ac pellentesque arcu nulla efficitur sem. Maecenas ornare mi eget lacus facilisis rutrum. Ut ullamcorper tincidunt velit non rutrum. In malesuada ac mi in faucibus.\r\n\r\nAenean luctus, sem sed congue scelerisque, nunc dolor feugiat diam, vitae vestibulum libero sapien nec nisi. Morbi interdum eros at neque tincidunt laoreet. Aliquam erat volutpat. Pellentesque pharetra tincidunt semper. Maecenas id ipsum erat. Mauris et leo vitae neque consectetur posuere et nec nunc. Suspendisse sagittis laoreet eros non vulputate. Suspendisse quis egestas enim. Nulla sodales sapien elit, eu tincidunt turpis euismod nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 2, '', 'Yemrekayaa', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra.', '2021-05-12'),
(4, 'Sistemler', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra. Nunc ac congue odio. Etiam molestie, lorem sit amet tempor auctor, odio erat volutpat urna, eget ornare turpis nisl sit amet nulla. Integer eget elit pulvinar, lobortis nisl ac, dapibus nunc. Nullam venenatis consequat libero, in pharetra dolor maximus ut. Nulla et erat sed sem blandit consectetur. Praesent nec est massa. Donec quis pulvinar dui. Integer facilisis nulla eu quam congue feugiat. Aenean dapibus gravida quam.\r\n\r\nMaecenas porta porttitor tristique. Curabitur maximus tellus erat, vel molestie magna lacinia sed. Praesent sodales ipsum leo, eu rhoncus sapien vehicula in. Etiam egestas aliquam nulla vitae lacinia. Aliquam malesuada nulla quis interdum sagittis. Maecenas et consectetur orci, vitae convallis lacus. Duis felis justo, feugiat a cursus quis, consectetur id est. Suspendisse pretium vulputate ante, eget rutrum erat. Suspendisse feugiat ex sit amet lectus efficitur maximus. Mauris porttitor ex sapien, non placerat magna euismod vel. Vivamus eleifend congue elit, et suscipit odio bibendum eu. Donec varius nec ex nec aliquet.\r\n\r\nFusce laoreet sed turpis et semper. Aenean pretium velit vel mauris condimentum aliquet. Praesent ligula odio, imperdiet at tempus vitae, vehicula id nibh. Suspendisse potenti. Pellentesque malesuada, orci et viverra laoreet, ligula mi auctor mi, ut sodales magna libero in enim. Praesent facilisis at elit nec convallis. Nullam mattis nibh quis purus pulvinar, vitae faucibus lectus gravida. Quisque tincidunt pretium purus, et convallis purus bibendum nec. Nullam eleifend ac libero vel cursus.\r\n\r\nDonec feugiat dui ac felis consectetur, at finibus ex sodales. Praesent vel luctus massa. Mauris varius libero id nulla elementum consectetur. Donec ultricies, enim non rutrum feugiat, augue diam tincidunt est, ac pellentesque arcu nulla efficitur sem. Maecenas ornare mi eget lacus facilisis rutrum. Ut ullamcorper tincidunt velit non rutrum. In malesuada ac mi in faucibus.\r\n\r\nAenean luctus, sem sed congue scelerisque, nunc dolor feugiat diam, vitae vestibulum libero sapien nec nisi. Morbi interdum eros at neque tincidunt laoreet. Aliquam erat volutpat. Pellentesque pharetra tincidunt semper. Maecenas id ipsum erat. Mauris et leo vitae neque consectetur posuere et nec nunc. Suspendisse sagittis laoreet eros non vulputate. Suspendisse quis egestas enim. Nulla sodales sapien elit, eu tincidunt turpis euismod nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 1, '', 'Yemrekayaa', '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra.', '2021-05-15'),
(5, 'Oyunlar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra. Nunc ac congue odio. Etiam molestie, lorem sit amet tempor auctor, odio erat volutpat urna, eget ornare turpis nisl sit amet nulla. Integer eget elit pulvinar, lobortis nisl ac, dapibus nunc. Nullam venenatis consequat libero, in pharetra dolor maximus ut. Nulla et erat sed sem blandit consectetur. Praesent nec est massa. Donec quis pulvinar dui. Integer facilisis nulla eu quam congue feugiat. Aenean dapibus gravida quam.\r\n\r\nMaecenas porta porttitor tristique. Curabitur maximus tellus erat, vel molestie magna lacinia sed. Praesent sodales ipsum leo, eu rhoncus sapien vehicula in. Etiam egestas aliquam nulla vitae lacinia. Aliquam malesuada nulla quis interdum sagittis. Maecenas et consectetur orci, vitae convallis lacus. Duis felis justo, feugiat a cursus quis, consectetur id est. Suspendisse pretium vulputate ante, eget rutrum erat. Suspendisse feugiat ex sit amet lectus efficitur maximus. Mauris porttitor ex sapien, non placerat magna euismod vel. Vivamus eleifend congue elit, et suscipit odio bibendum eu. Donec varius nec ex nec aliquet.\r\n\r\nFusce laoreet sed turpis et semper. Aenean pretium velit vel mauris condimentum aliquet. Praesent ligula odio, imperdiet at tempus vitae, vehicula id nibh. Suspendisse potenti. Pellentesque malesuada, orci et viverra laoreet, ligula mi auctor mi, ut sodales magna libero in enim. Praesent facilisis at elit nec convallis. Nullam mattis nibh quis purus pulvinar, vitae faucibus lectus gravida. Quisque tincidunt pretium purus, et convallis purus bibendum nec. Nullam eleifend ac libero vel cursus.\r\n\r\nDonec feugiat dui ac felis consectetur, at finibus ex sodales. Praesent vel luctus massa. Mauris varius libero id nulla elementum consectetur. Donec ultricies, enim non rutrum feugiat, augue diam tincidunt est, ac pellentesque arcu nulla efficitur sem. Maecenas ornare mi eget lacus facilisis rutrum. Ut ullamcorper tincidunt velit non rutrum. In malesuada ac mi in faucibus.\r\n\r\nAenean luctus, sem sed congue scelerisque, nunc dolor feugiat diam, vitae vestibulum libero sapien nec nisi. Morbi interdum eros at neque tincidunt laoreet. Aliquam erat volutpat. Pellentesque pharetra tincidunt semper. Maecenas id ipsum erat. Mauris et leo vitae neque consectetur posuere et nec nunc. Suspendisse sagittis laoreet eros non vulputate. Suspendisse quis egestas enim. Nulla sodales sapien elit, eu tincidunt turpis euismod nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 1, '', 'Yemrekayaa', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim auctor nisi, vehicula condimentum elit posuere sed. Ut ac mi non arcu gravida elementum. Integer lobortis congue velit, sit amet blandit lacus tempus sit amet. Duis at nulla sed ligula vehicula pharetra.', '2021-05-25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articlesview`
--

CREATE TABLE `articlesview` (
  `v_id` int(11) NOT NULL,
  `v_aid` int(11) NOT NULL,
  `v_userip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `articlesview`
--

INSERT INTO `articlesview` (`v_id`, `v_aid`, `v_userip`) VALUES
(10, 4, '::1'),
(11, 1, '::1'),
(12, 5, '::1'),
(13, 3, '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(36) NOT NULL,
  `c_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_description`) VALUES
(1, 'FRP', ''),
(2, 'Diğer', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `articlesview`
--
ALTER TABLE `articlesview`
  ADD PRIMARY KEY (`v_id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `articles`
--
ALTER TABLE `articles`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `articlesview`
--
ALTER TABLE `articlesview`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
