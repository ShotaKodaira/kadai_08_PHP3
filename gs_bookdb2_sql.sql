-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 4 月 02 日 15:08
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_bookdb2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm2_table`
--

CREATE TABLE `gs_bm2_table` (
  `id` int(12) NOT NULL,
  `saunaname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `saunaurl` text COLLATE utf8_unicode_ci,
  `saunareview` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--

INSERT INTO `gs_bm2_table` (`id`, `saunaname`, `saunaurl`, `saunareview`, `indate`) VALUES
(1, '喜久の湯','https://www.1010.or.jp/map/item/item-cnt-246', '徒歩2分のマイサウナ', '2022-06-27 20:28:50'),
(2, '明神の湯','https://myoujin-no-yu.com/', 'チャリ圏内で一番バランスが良い', '2022-06-27 20:29:28'),
(3, 'レインボー新小岩店','https://hpdsp.jp/rainbow-sinkoiwa/', '水風呂の温度差がすごい', '2022-06-27 20:30:33'),
(4, '湯楽の里 松戸','https://www.yurakirari.com/matsudo/', '車で行きやすい', '2022-06-27 20:32:12');


ALTER TABLE `gs_bm2_table`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gs_bm2_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
