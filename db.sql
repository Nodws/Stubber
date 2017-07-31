CREATE TABLE `stubs` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `hits` int(11) NOT NULL,
  `url` text NOT NULL,
  `del` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `stubs`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `stubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
