DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `date_creation`, `category_id`) VALUES
(4, 'post 3', 'text post3', '2016-03-10 17:09:32', 2),
(5, 'post 4', 'text post 4', '2016-03-10 17:10:00', 1),
(7, 'sdaasda', 'asdasdas', NULL, NULL),
(8, 'asda', 'asdas', NULL, NULL),
(9, 'asda', 'asda', NULL, NULL),
(10, 'asda', 'asdas', NULL, NULL),
(11, 'asda', 'd23e2', NULL, NULL),
(12, 'asd', 'asda', NULL, NULL),
(13, 'sad', 'asda', NULL, NULL),
(14, 'asda', 'q2321', NULL, NULL),
(15, 'new AR title', 'AR text', '2016-04-26 17:05:10', NULL),
(16, 'AR title11111', 'AR text', '2016-04-26 17:15:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_idx` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;