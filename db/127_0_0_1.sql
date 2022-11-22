-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 11:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehc-workshop`
--
CREATE DATABASE IF NOT EXISTS `ehc-workshop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ehc-workshop`;

-- --------------------------------------------------------

--
-- Table structure for table `chall_master`
--

CREATE TABLE `chall_master` (
  `ID_chall` int(10) NOT NULL,
  `Description` varchar(2500) CHARACTER SET utf8 NOT NULL,
  `hint` varchar(2500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chall_master`
--

INSERT INTO `chall_master` (`ID_chall`, `Description`, `hint`) VALUES
(1, 'Description', 'Hint'),
(2, 'Description:Hey bro,you were very excellent pass 7 challenge', 'Hint:oke'),
(3, 'Description:So,this is a little challenge for you', 'Hint:Web exploit'),
(4, 'Desrcription:I believe you can do it', 'Hint:injection'),
(5, 'Description:I believe youuuuuuuuuuuuuuu', 'Hint:chall_master,Can you change your score up to 7000?');

-- --------------------------------------------------------

--
-- Table structure for table `list_challenge`
--

CREATE TABLE `list_challenge` (
  `ID_chall` int(5) NOT NULL,
  `Chall_name` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Hint` varchar(500) DEFAULT NULL,
  `Flag` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_challenge`
--

INSERT INTO `list_challenge` (`ID_chall`, `Chall_name`, `Description`, `Hint`, `Flag`) VALUES
(1, 'Linux_1', ' Description: Bắt đầu làm quen với việc đọc file trên linux nào!\r\n Lưu ý: đáp án của challenge này sẽ là mật khẩu cho challenge sau (ví dụ đáp án của challenge 1 sẽ là mật khẩu cho challenge 2 và tương tự)\r\nĐáp án luôn có dạng EHC{...} (phần “…” là chữ hoặc số)\r\nCâu lệnh kết nối: \r\nssh challenge1@18.139.114.46 -p 2220\r\nMật khẩu: ehcgreat\r\n', 'Hint 1:cat README', 'EHC{s5h_f0r_7h3_4cc3sS}'),
(2, 'Linux_2', 'Description: File chứa đáp án của challenge này đã bị ẩn. Bạn có thể tìm ra nó không? \r\nLưu ý: Đáp án luôn có dạng EHC{...} (phần “…” là chữ hoặc số)\r\nCâu lệnh kết nối: \r\nssh challenge2@18.139.114.46 -p 2220\r\nMật khẩu: đáp án của challenge trước.\r\n', 'Hint:cat README', 'EHC{s0m3tHiNg_y0u_c4n7_s33}'),
(3, 'Linux_3', 'Desciption: Ôi không! Đáp án của chúng ta đang ở trong file text chứa cả một biển từ thế này! Phải làm thế nào đây?\r\nLưu ý: Đáp án luôn có dạng EHC{...} (phần “…” là chữ hoặc số)\r\nCâu lệnh kết nối: \r\nssh challenge3@18.139.114.46 -p 2220\r\nMật khẩu: đáp án của challenge trước.\r\n', 'Hint: cat README', ' EHC{f0rM4t_1s_1mP0rt4n7}'),
(4, 'Linux_4', 'Description: Trong linux, file được phân quyền rất nghiêm ngặt, với 3 nhóm quyền: User (Người tạo ra file), Group (nhóm của người đã tạo ra file), Other (người dùng khác). Các quyền của từng nhóm cũng chia làm 3 loại: quyền đọc (read - r), quyền ghi (write - w), quyền thực thi (execute - x). Có vẻ lần này, với tài khoản login vào hệ thống, chúng ta không có quyền đọc được file đáp án rồi. Hãy thử tìm cách nhé.\r\nLưu ý: Đáp án luôn có dạng EHC{...} (phần “…” là chữ hoặc số)\r\nCâu lệnh kết nối: \r\nss', 'Hint:cat README', 'EHC{pr1v1l3g3_35c4l4t10n}'),
(5, 'Linux_5', 'Description: Ôi không! Nhiều file thế này! Thật giả lẫn lộn làm sao mà tìm được file flag đây?\r\nLưu ý: Đáp án luôn có dạng EHC{...} (phần “…” là chữ hoặc số)\r\nCâu lệnh kết nối: \r\nssh challenge5@18.139.114.46 -p 2220\r\nMật khẩu: đáp án của challenge trước.\r\n', 'Hint: cat README', 'EHC{d0_sM4rT3r_n0t_h4rD3r}'),
(6, 'Redteam', 'Description: Vào discord, sử dụng lệnh $red_team tại channel red_bot và chờ đợi inbox từ chú bot thần thánh.', 'Hint: No hint', 'EHC{mak3_IA_gr3at_aga1n_02/12/2017}'),
(7, 'Blueteam', 'Description: Vào discord, sử dụng lệnh /blue_team tại channel blue_bot và chờ đợi inbox từ chú bot thần thánh.', 'Hint:No hint', 'EHC{Nguyen_Doanh_Thinh_Ethical_Hacker_Club}'),
(8, 'chall_8', 'Description_8', 'Hint_8', 'EHC{Thank_you_for_joining_EHC\'s_Information_Assurance_Day}');

-- --------------------------------------------------------

--
-- Table structure for table `solve`
--

CREATE TABLE `solve` (
  `ID_team` int(5) NOT NULL,
  `ID_chall` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solve`
--

INSERT INTO `solve` (`ID_team`, `ID_chall`) VALUES
(41, 1),
(41, 2),
(41, 3),
(41, 4),
(41, 5),
(41, 6),
(41, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `score`) VALUES
(1, 'team_1', 'd5ca6e51e91b44883d5885df14e7bbd046be019ce4f00d2143a97a22b1cc1280', 0),
(2, 'team_2', 'd66db214228c3e67241fb36cbf0c70a2ed6d2253ed88eb8cea76b7707ff422e9', 0),
(3, 'team_3', '93540b779e37fbec81f95c516cbf5dd6b42291521d52cba19dd404af496d6b1c', 0),
(4, 'team_4', '885f7cd3c6b6d261d74ad9f01b10408cbc21fb5263362bbc717d6490f429325c', 0),
(5, 'team_5', 'a14b6c43fe992c1edb5732e35ba8cf0a6ffb0d1b2aca0ec2daca3a5a5aa518fe', 0),
(6, 'team_6', '7f63ccf795c7565328936011ea152b7ab2b220e9f5386fe5625a94f54de94e8a', 0),
(7, 'team_7', '70c59f2fcb501db0634a3d1b53e9d24ea24eef8c883f1c98ffdd50c39d11a017', 0),
(8, 'team_8', '15adff8a12d532aa2d5d4b1c0dc0953c9f036c49644c2e456d25692d2a10086f', 0),
(9, 'team_9', '916e1b3c0fc2b1490b14496d0fd889ce4fe516886b5ef23bcdfe6bbfc0e4a525', 0),
(10, 'team_10', 'a051b16be26b5a0aed061a14ca4b8c41a3ca5ba61d5b61890762429b773a7297', 0),
(11, 'team_11', '97210743fb944d8d504a95f37474268387716f2910dabc344672e95c0e5cb5c8', 0),
(12, 'team_12', 'e83afd9b1decc4a86b830e88ea8adba646ee96db1452eebc5f50643ef121cc9e', 0),
(13, 'team_13', '3fa0ea28a50bd13c49979481f26d3ff835e3773ead7120a1208af0fc0782bfa5', 0),
(14, 'team_14', 'f628f8dfae430fcdb6a12fa7238cac7d96188e0669a092544843f26adccbc9e1', 0),
(15, 'team_15', 'bbc3e1d048e1f356a4dbb450b15d881c27c54f629347dfbb7ba3e648f1c18d48', 0),
(16, 'team_16', 'a9e4a282cf6e861a0b56f5376bbed717ed7ef5481a996b36a27c96b57ea4b2dd', 0),
(17, 'team_17', 'c4abc0229dc57adf25f5e6578203273d78fbb9f8e5c2ef9e3709c31b9e81c36d', 0),
(18, 'team_18', '795958963a5151d2551727c492e96db15597a1a0afe093af4de82472b1df7b01', 0),
(19, 'team_19', '0984c1985d2f5ce6fb1fc24a9a856acc906432a8fa0802ccc5aec3db26b4e399', 0),
(20, 'team_20', '53670cc57eb7629e9e268dd2794803cbd24a3fcbb66a95e7f87b6fef65f58d14', 0),
(21, 'team_21', '00cf7cd945802428dbfa70d1fd085cb0fffc2d47fc07a7bb412ad705c71e9703', 0),
(22, 'team_22', '382884b041be971ac2896277109b78a34e4d8972436e8ec482770b73b40264e5', 0),
(23, 'team_23', '1fa8e0526df7a887299bc209a157ea1b9ed5cd8576a279848e16bb7d9ae8d3d5', 0),
(24, 'team_24', '768ec1b75c3175b7ecb07040d893d8a7071b83a4db82c374b588e062f676aedc', 0),
(25, 'team_25', '2db8a2b4ef6a0f1bf3c30781be6e314d0f0e6ec9ba7de4ca709862543852c779', 0),
(26, 'team_26', 'b05d1b2da2b86d9e1363415cb650914c762585b55b6cbbcec2e20a153ba50fb9', 0),
(27, 'team_27', '208f20bcd5923971669a7ae29934e6f65fae3a8e155b76825ca6ea930a08608a', 0),
(28, 'team_28', 'e948aa433e3a4ffe09be8fb75c780a408bb28c18fa033a649e4def068e15be45', 0),
(29, 'team_29', 'b06adeb4341ba59888d028f9bf0adb1fe02ccf28ec5852ede93968970b1b6a89', 0),
(30, 'team_30', '42173cbc6bfde6cba26d3355153b7c96a16d41b91abb8f5440ecc8ab8bb28871', 0),
(31, 'team_31', '361a8e5ff6e7a932b37f497d4b8ff951a7455d1ab99a5b9264a5f95d3c3887bb', 0),
(32, 'team_32', 'e3b836fe5705c363532cf41796c6c8b7e6ffcf2e1b4b65515a509814a46fa976', 0),
(33, 'team_33', 'f9a1265408f58e6bf5afc495470a943396ee4803f80c8f574511b6c4388fbf76', 0),
(34, 'team_34', '4031098367e03ddb9ce4d7d085f5d3987e7b550f818bee2da77a4bb3b872ccd3', 0),
(35, 'team_35', '9afc18dbce75a18ec96a5d6359dca4c73bb4db5e2e70c1127f0bc6537cc185a8', 0),
(36, 'team_36', '8e5b39c1489d587e6abb51bdde140d0657e384df3fae28a8f3c614dd2bfc4d0f', 0),
(37, 'team_37', 'a97d5caa85c903480f3585adc1656c4087ca55a75b9f60eba3f17cc4aa134808', 0),
(38, 'team_38', '5d2dcd9020c572826a3b863bec150fa7cb441d0a3dbc62bda18178b005cb4f89', 0),
(39, 'team_39', 'f12879d97eff5e7c98e682ae1b31a95858f0bc6bcc5ef4cf789c607e0e5ceea1', 0),
(40, 'team_40', '2e1f55af88b7d87f0a2d97f04b9dfd96fbfc7adc48e59e16446420ce75dd2fe3', 0),
(41, 'admin', '05926fd3e6ec8c13c5da5205b546037bdcf861528e0bdb22e9cece29e567a1bc', 7000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chall_master`
--
ALTER TABLE `chall_master`
  ADD PRIMARY KEY (`ID_chall`);

--
-- Indexes for table `list_challenge`
--
ALTER TABLE `list_challenge`
  ADD PRIMARY KEY (`ID_chall`);

--
-- Indexes for table `solve`
--
ALTER TABLE `solve`
  ADD PRIMARY KEY (`ID_team`,`ID_chall`),
  ADD KEY `ID_chall` (`ID_chall`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chall_master`
--
ALTER TABLE `chall_master`
  MODIFY `ID_chall` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `list_challenge`
--
ALTER TABLE `list_challenge`
  MODIFY `ID_chall` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `solve`
--
ALTER TABLE `solve`
  ADD CONSTRAINT `solve_ibfk_1` FOREIGN KEY (`ID_chall`) REFERENCES `list_challenge` (`ID_chall`),
  ADD CONSTRAINT `solve_ibfk_2` FOREIGN KEY (`ID_team`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
