CREATE TABLE `stubs` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL DEFAULT '',
  `hits` int(11) NOT NULL DEFAULT '0',
  `url` text NOT NULL,
  `del` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `stubs`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `stubs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
