
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin', 'User1', '12345'),
(2, 'skeeper', 'Skeeper Loyaltie', '12345'),
(3, 'user', 'User one', '12345'),
(4, 'skee', 'Skee', '12345');
