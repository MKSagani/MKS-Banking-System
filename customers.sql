
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'OLIVIA SMITH', 'olivia@gmail.com', 2000),
(2, 'EMMA THOMAS', 'emma@gmail.com', 2900),
(3, 'SOPHIA JONAS', 'sophia@gmail.com', 4000),
(4, 'JAMES WHITE', 'james@mail.com', 2900),
(5, 'SARAH LOPEZ', 'sarah@gmail.com', 8900),
(6, 'KAREN WILLAMSON', 'karen34@gmail.com', 6800),
(7, 'DANIEL WALTER', 'daniel63@gmail.com', 1700),
(8, 'CHARLES MATHEW', 'charles6785@gmail.com', 3500),
(9, 'EMILY SMITH', 'emily@gmail.com', 4600),
(10, 'ANDREW POTTER', 'PotterAndrew@gmail.com', 9000);
(11, 'GEORGE NICHOLAS', 'george45@gmail.com', 5000);
(12, 'STEPHEN PETER', 'stephen@gmail.com', 2900);
(13, 'ANTHONY MILLER', 'anthony@gmail.com', 7800);
(14, 'ISABELLA HERNANDEZ', 'isa67@gmail.com', 7600);
(15, 'SARA WILLAMS', 'sarah23@gmail.com', 3300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

