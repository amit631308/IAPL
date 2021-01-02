-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2020 at 10:01 AM
-- Server version: 5.6.49-cll-lve
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
-- Database: `heysushil_iapl`
--

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_admin`
--

CREATE TABLE `heysushil_admin` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_admin`
--

INSERT INTO `heysushil_admin` (`id`, `name`, `email`, `type`, `password`) VALUES
(1, 'Sachin', 'admin@iapl.com', 'admin', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_career`
--

CREATE TABLE `heysushil_career` (
  `id` int(8) NOT NULL,
  `job_opening_type` varchar(100) DEFAULT NULL,
  `job_title` varchar(1000) DEFAULT NULL,
  `general_information` text,
  `industry_type` varchar(500) DEFAULT NULL,
  `function_area` varchar(500) DEFAULT NULL,
  `employment_type` varchar(100) DEFAULT NULL,
  `preferred_education` varchar(500) DEFAULT NULL,
  `competencies` text,
  `job_duties` text,
  `number_of_opening` int(8) DEFAULT NULL,
  `opening_date` varchar(20) DEFAULT NULL,
  `ending_date` varchar(20) DEFAULT NULL,
  `active_deactivated` int(2) DEFAULT '0' COMMENT '0: Deactive | 1: Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_career`
--

INSERT INTO `heysushil_career` (`id`, `job_opening_type`, `job_title`, `general_information`, `industry_type`, `function_area`, `employment_type`, `preferred_education`, `competencies`, `job_duties`, `number_of_opening`, `opening_date`, `ending_date`, `active_deactivated`) VALUES
(1, 'Fresher', 'Graphic Designer – Layout Artist', '<ul>\r\n<li>Required graphic designer in creating branding, sales and marketing collateral as per defined guidelines.</li>\r\n<li>Liaise with the branding team to discuss their requirements and help to resolve any issues related to the work produced.</li>\r\n<li>Ensure all artwork produced meets the need, requirements and brand values.</li>\r\n<li>Creation of design work, including packaging, display banners, labels, hoardings and other artworks.</li>\r\n<li>Help to produce internal sales and marketing materials.</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'Education', 'Design, Creative, User Experience', 'Full Time', 'Bachelor\'s degree', '<ul>\r\n<li>Photoshop</li>\r\n<li>Indesign</li>\r\n<li>Illustrator</li>\r\n<li>Corel Draw</li>\r\n<li>Graphic Designing</li>\r\n<li>Creative Designing</li>\r\n<li>Illustration</li>\r\n<li>Print Media</li>\r\n<li>Flash</li>\r\n</ul>', '<ul>\r\n<li>Draft mockups of website designs, brochures, iconography, and any other marketing materials required.</li>\r\n<li>Collaborate with marketing teams and management to discuss which mockups are effective, and use their feedback to develop final drafts.</li>\r\n<li>Revise the work of previous designers to create a unified aesthetic for our brand materials.</li>\r\n<li>Work on multiple projects at once, and consistently meet draft deadlines.</li>\r\n<li>Communicate frequently with clients to update them on the progress of the project and to answer any questions they might have.</li>\r\n<li>Other duties as requested.</li>\r\n</ul>\r\n<p>&nbsp;</p>', 1, NULL, NULL, 0),
(2, 'Fresher', 'Sales & Business Development – Executive', '<ul>\r\n<li>Conduct market research to identify selling possibilities and evaluate customer needs.</li>\r\n<li>Actively seek out new sales opportunities through cold calling, networking and social media.</li>\r\n<li>Set up meetings with potential clients and listen to their wishes and concerns.</li>\r\n<li>Prepare and deliver appropriate presentations on services.</li>\r\n<li>Create frequent reviews and reports with sales and financial data.</li>\r\n<li>Negotiate/close deals and handle complaints or objections.</li>\r\n<li>Collaborate with team members to achieve better results.</li>\r\n<li>Gather feedback from customers or prospects and share with internal teams.</li>\r\n</ul>', 'Education', 'Sales, Marketing, Social Networking, Team Player', 'Full Time', 'Bachelor\'s degree and other education', '<ul>\r\n<li>Presentation Skills</li>\r\n<li>Client Relationships</li>\r\n<li>Emphasizing Excellence</li>\r\n<li>Energy Level</li>\r\n<li>Negotiation</li>\r\n<li>Prospecting Skills</li>\r\n<li>Meeting Sales Goals</li>\r\n<li>Creativity</li>\r\n<li>Sales Planning</li>\r\n<li>Independence</li>\r\n<li>Motivation for Sales</li>\r\n</ul>', '<ul>\r\n<li>Maintained open communication with customers, allowing for more accurate profiling of potential business and increased sales.</li>\r\n<li>Manage the prospect/opportunity from initial identification to the enquiry stage and development of the proposal.</li>\r\n<li>Develop sales strategies for the area to meet and exceed sales targets.</li>\r\n<li>Negotiate pricing details with customers in order to secure business, while maximizing target profitability and margins.</li>\r\n<li>Collect and analyze information and prepare data and sales reports.</li>\r\n<li>Perform any other job functions as assigned.</li>\r\n</ul>', 3, NULL, NULL, 0),
(3, 'Experienced', 'Sales & Business Development – Executive', '<ul>\r\n<li>Conduct market research to identify selling possibilities and evaluate customer needs.</li>\r\n<li>Actively seek out new sales opportunities through cold calling, networking and social media.</li>\r\n<li>Set up meetings with potential clients and listen to their wishes and concerns.</li>\r\n<li>Prepare and deliver appropriate presentations on services.</li>\r\n<li>Create frequent reviews and reports with sales and financial data.</li>\r\n<li>Negotiate/close deals and handle complaints or objections.</li>\r\n<li>Collaborate with team members to achieve better results.</li>\r\n<li>Gather feedback from customers or prospects and share with internal teams.</li>\r\n</ul>', 'Education', 'Sales, Marketing, Social Networking, Team Player', 'Full Time', 'Bachelor\'s degree and other education', '<ul>\r\n<li>Presentation Skills</li>\r\n<li>Client Relationships</li>\r\n<li>Emphasizing Excellence</li>\r\n<li>Energy Level</li>\r\n<li>Negotiation</li>\r\n<li>Prospecting Skills</li>\r\n<li>Meeting Sales Goals</li>\r\n<li>Creativity</li>\r\n<li>Sales Planning</li>\r\n<li>Independence</li>\r\n<li>Motivation for Sales</li>\r\n</ul>', '<ul>\r\n<li>Maintained open communication with customers, allowing for more accurate profiling of potential business and increased sales.</li>\r\n<li>Manage the prospect/opportunity from initial identification to the enquiry stage and development of the proposal.</li>\r\n<li>Develop sales strategies for the area to meet and exceed sales targets.</li>\r\n<li>Negotiate pricing details with customers in order to secure business, while maximizing target profitability and margins.</li>\r\n<li>Collect and analyze information and prepare data and sales reports.</li>\r\n<li>Perform any other job functions as assigned.</li>\r\n</ul>', 1, NULL, NULL, 0),
(4, 'Fresher', 'Content Writer', '<p>We are looking for a Content Writer to join our team and enrich our websites with new blog posts, guides and marketing copy.</p>\r\n<p>Content Writer responsibilities include conducting thorough research on industry-related topics, generating ideas for new content types and proofreading articles before publication.</p>\r\n<p>Ultimately, you&rsquo;ll deliver quality writing pieces that appeal to our audiences, attract customers and boost brand awareness.</p>', 'Education', 'Copywriter, Technical Writer, Writer', 'Full Time', 'Bachelor\'s degree and other education', '<ul>\r\n<li>Adaptability</li>\r\n<li>Research</li>\r\n<li>Originality</li>\r\n<li>Search engine optimization (SEO)</li>\r\n<li>Time management</li>\r\n<li>Communication</li>\r\n<li>Editing</li>\r\n<li>Knowledge of social media</li>\r\n</ul>', '<ul>\r\n<li>Research industry-related topics (combining online sources, interviews and studies)</li>\r\n<li>Write a clear marketing copy to promote our products/services</li>\r\n<li>Proofread and edit blog posts before publication</li>\r\n<li>Submit work to editors for input and approval</li>\r\n<li>Coordinate with marketing and design teams to illustrate articles</li>\r\n<li>Conduct simple keyword research and use SEO guidelines to increase web traffic</li>\r\n<li>Promote content on social media</li>\r\n<li>Identify customers&rsquo; needs and gaps in our content and recommend new topics</li>\r\n<li>Ensure all-around consistency (style, fonts, images and tone)</li>\r\n<li>Update website content as needed</li>\r\n</ul>', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_email_data`
--

CREATE TABLE `heysushil_email_data` (
  `id` int(10) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `form_name` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `positionapplied` varchar(100) DEFAULT NULL,
  `resume` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heysushil_admin`
--
ALTER TABLE `heysushil_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_career`
--
ALTER TABLE `heysushil_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_email_data`
--
ALTER TABLE `heysushil_email_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heysushil_admin`
--
ALTER TABLE `heysushil_admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `heysushil_career`
--
ALTER TABLE `heysushil_career`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `heysushil_email_data`
--
ALTER TABLE `heysushil_email_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
