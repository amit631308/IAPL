-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 05:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `type` int(5) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_admin`
--

INSERT INTO `heysushil_admin` (`id`, `name`, `email`, `type`, `password`) VALUES
(1, 'Sachin', 'admin@iapl.com', 1, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_career`
--

CREATE TABLE `heysushil_career` (
  `id` int(8) NOT NULL,
  `job_opening_type` varchar(100) DEFAULT NULL,
  `job_title` varchar(1000) DEFAULT NULL,
  `general_information` text DEFAULT NULL,
  `industry_type` varchar(500) DEFAULT NULL,
  `function_area` varchar(500) DEFAULT NULL,
  `employment_type` varchar(100) DEFAULT NULL,
  `preferred_education` varchar(500) DEFAULT NULL,
  `competencies` text DEFAULT NULL,
  `job_duties` text DEFAULT NULL,
  `number_of_opening` int(8) DEFAULT NULL,
  `opening_date` varchar(20) DEFAULT NULL,
  `ending_date` varchar(20) DEFAULT NULL,
  `active_deactivated` int(2) DEFAULT 0 COMMENT '0: Deactive | 1: Active'
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
-- Table structure for table `heysushil_courses`
--

CREATE TABLE `heysushil_courses` (
  `id` int(8) NOT NULL,
  `course_level` varchar(200) NOT NULL,
  `course_name` varchar(500) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_type` varchar(200) NOT NULL,
  `course_eligibility` varchar(1000) NOT NULL,
  `accelerated_mode` varchar(1500) NOT NULL,
  `course_duration` varchar(500) NOT NULL,
  `semester_tearm` varchar(100) NOT NULL,
  `total_number_of_tearm_or_semester` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `career_option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_courses`
--

INSERT INTO `heysushil_courses` (`id`, `course_level`, `course_name`, `course_code`, `course_type`, `course_eligibility`, `accelerated_mode`, `course_duration`, `semester_tearm`, `total_number_of_tearm_or_semester`, `image`, `career_option`) VALUES
(1, '1', 'Demo course', 'DEMO001', '1', 'BCA', 'this is accelerated mode demo', '1 to 3 Year', '2', '3', 'e0f49dc0532da7212b3257c8ab7ebedc.jpg', '<h3 style=\"font-family: &quot;Roboto Slab&quot;, serif; font-weight: 600; line-height: 1.42857; color: rgb(51, 51, 51); font-size: 24px;\">Civil Engineers normally do the accompanying:</h3><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; list-style: none; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: 14px;\"><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Dissect long-range plans, overview reports, maps, and other information to plan and configuration ventures</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Consider development costs, government guidelines, expected ecological perils, and different components during the arranging and danger investigation phases of a task</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Assemble and submit license applications to nearby, state, and bureaucratic organizations, confirming that activities conform to different guidelines.</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Regulate and break down the consequences of soil testing to decide the ampleness and quality of establishments.</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Examine the aftereffects of tests on building materials, for example, solid, wood, black-top, or steel, for use specifically extends</li></ul>'),
(2, '2', 'New generation courseNew generation courseNew generation courseNew generation course', 'DEMO002', '1', 'MCA', 'this is accelerated mode demo', '2 years', '1', '4', '73ed404558affa0101f01581258f4091.jpg', '<h3 style=\"font-family: &quot;Roboto Slab&quot;, serif; font-weight: 600; line-height: 1.42857; font-size: 24px;\"><font color=\"#ff0000\">Civil Engineers normally do the accompanying:</font></h3><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; list-style: none; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: 14px;\"><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Dissect long-range plans, overview reports, maps, and other information to plan and configuration ventures</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Consider development costs, government guidelines, expected ecological perils, and different components during the arranging and danger investigation phases of a task</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Assemble and submit license applications to nearby, state, and bureaucratic organizations, confirming that activities conform to different guidelines.</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Regulate and break down the consequences of soil testing to decide the ampleness and quality of establishments.</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Examine the aftereffects of tests on building materials, for example, solid, wood, black-top, or steel, for use specifically extends</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Get ready quotes for materials, gear, or work to decide an undertaking\'s monetary attainability</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Use plan programming to plan and plan transportation frameworks, pressure-driven frameworks, and structures by industry and government principles</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Perform or direct reviewing tasks to set up building areas, site designs, reference focuses, levels, and rises to control development</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Deal with the fix, upkeep, and substitution of the public and private foundation Civil Engineers likewise should introduce their discoveries to general society on themes, for example, offered proposition, natural effect explanations, or property portrayals.</li></ul><p><br style=\"color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: 14px;\"></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Numerous civil engineers hold administrative or authoritative positions going from the boss of a building site to city engineer, public works chief, and city administrator. As bosses, they are entrusted with guaranteeing that sheltered work rehearses are followed at building destinations.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Other civil engineers\' work in plan, development, exploration, and educating. Structural specialists work with others on ventures and might be helped by structural designing experts. Structural specialists get ready license records for taking a shot at ventures in a sustainable power source.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">They confirm that the tasks will conform to government, state, and neighbourhood necessities. These specialists lead basic examinations for huge scope photovoltaic, or sunlight-based energy, ventures. They likewise assess the capacity of sun-oriented cluster uphold structures and structures to endure worries from wind, seismic movement, and different sources. For huge scope wind ventures, structural specialists regularly get ready roadbeds to deal with huge trucks that pull in the turbines.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Structural specialists take a shot at complex ventures, and they can accomplish work fulfilment in observing the task arrive at fruition. They for the most part have practical experience in one of a few zones.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Construction engineers&nbsp;</span>oversee development ventures, guaranteeing that they are planned and implicit agreement with plans and details. These architects regularly are liable for the plan and wellbeing of impermanent structures utilized during development. They may likewise administer budgetary, time-the executives, and interchanges parts of a task.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Geotechnical engineers</span>&nbsp;work to ensure that establishments for assembled objects going from roads and structures to runways and dams are strong. They centre around how structures worked by structural specialists, for example, structures and passages, collaborate with the earth (counting soil and rock). Additionally, the plan and plan for slants, holding dividers, and passages.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Civil Engineers</span>&nbsp;plan and survey significant ventures, for example, structures, extensions, or dams, to guarantee their quality and strength.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Transportation engineers</span>&nbsp;plan, plan, work and keep up regular frameworks, for example, roads and thruways, however, they likewise plan bigger undertakings, for example, air terminals, transport ports, mass travel frameworks, and harbours. Crafted by civil engineers is firmly identified with crafted by ecological designers.</p><h3 style=\"font-family: &quot;Roboto Slab&quot;, serif; font-weight: 600; line-height: 1.42857; color: rgb(51, 51, 51); font-size: 24px;\">Advancement for Civil Engineers</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Civil engineers with abundant experience may move into senior positions, for example, venture chiefs or practical supervisors of plan, development, activity, or support. In any case, they would initially need to acquire the Expert Designing (PE) permit, because solitary authorized specialists can accept obligations for public tasks.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">In the wake of picking up licensure, an expert designer may look for credentialing that exhibits their skill in a structural designing strength. Such an accreditation might be useful for headway to senior specialized or even administrative positions.</p>'),
(3, '2', 'my new course', 'new220', '1', 'nothing', 'this is accelerated mode demo', '1 year', '1', '1', '0140655d43a2c80240b2cf14bf6202e9.jpg', '<p><span style=\"font-family: &quot;Times New Roman&quot;; font-size: medium;\">course_name</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: medium;\">course_name</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: medium;\">course_name</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: medium;\">course_name</span><span style=\"font-family: &quot;Times New Roman&quot;; font-size: medium;\">course_name</span><br></p>'),
(4, '2', 'New generation courseNew generation courseNew generation courseNew generation course', 'DEMO0022', '1', 'MCA', 'this is accelerated mode demo', '2 years', '1', '4', 'common.gif', '<h3 style=\"font-family: \"Roboto Slab\", serif; font-weight: 600; line-height: 1.42857; font-size: 24px;\"><font color=\"#ff0000\">Civil Engineers normally do the accompanying:</font></h3><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; list-style: none; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: 14px;\"><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Dissect long-range plans, overview reports, maps, and other information to plan and configuration ventures</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Consider development costs, government guidelines, expected ecological perils, and different components during the arranging and danger investigation phases of a task</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Assemble and submit license applications to nearby, state, and bureaucratic organizations, confirming that activities conform to different guidelines.</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Regulate and break down the consequences of soil testing to decide the ampleness and quality of establishments.</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Examine the aftereffects of tests on building materials, for example, solid, wood, black-top, or steel, for use specifically extends</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Get ready quotes for materials, gear, or work to decide an undertaking\'s monetary attainability</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Use plan programming to plan and plan transportation frameworks, pressure-driven frameworks, and structures by industry and government principles</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Perform or direct reviewing tasks to set up building areas, site designs, reference focuses, levels, and rises to control development</li><li style=\"text-align: justify;\"><i class=\"arrow_carrot-2right text-thm2\" style=\"margin-left: -18px;\"></i>Deal with the fix, upkeep, and substitution of the public and private foundation Civil Engineers likewise should introduce their discoveries to general society on themes, for example, offered proposition, natural effect explanations, or property portrayals.</li></ul><p><br style=\"color: rgb(119, 119, 119); font-family: Roboto, sans-serif; font-size: 14px;\"></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Numerous civil engineers hold administrative or authoritative positions going from the boss of a building site to city engineer, public works chief, and city administrator. As bosses, they are entrusted with guaranteeing that sheltered work rehearses are followed at building destinations.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Other civil engineers\' work in plan, development, exploration, and educating. Structural specialists work with others on ventures and might be helped by structural designing experts. Structural specialists get ready license records for taking a shot at ventures in a sustainable power source.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">They confirm that the tasks will conform to government, state, and neighbourhood necessities. These specialists lead basic examinations for huge scope photovoltaic, or sunlight-based energy, ventures. They likewise assess the capacity of sun-oriented cluster uphold structures and structures to endure worries from wind, seismic movement, and different sources. For huge scope wind ventures, structural specialists regularly get ready roadbeds to deal with huge trucks that pull in the turbines.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Structural specialists take a shot at complex ventures, and they can accomplish work fulfilment in observing the task arrive at fruition. They for the most part have practical experience in one of a few zones.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Construction engineers </span>oversee development ventures, guaranteeing that they are planned and implicit agreement with plans and details. These architects regularly are liable for the plan and wellbeing of impermanent structures utilized during development. They may likewise administer budgetary, time-the executives, and interchanges parts of a task.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Geotechnical engineers</span> work to ensure that establishments for assembled objects going from roads and structures to runways and dams are strong. They centre around how structures worked by structural specialists, for example, structures and passages, collaborate with the earth (counting soil and rock). Additionally, the plan and plan for slants, holding dividers, and passages.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Civil Engineers</span> plan and survey significant ventures, for example, structures, extensions, or dams, to guarantee their quality and strength.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\"><span style=\"font-weight: bolder;\">Transportation engineers</span> plan, plan, work and keep up regular frameworks, for example, roads and thruways, however, they likewise plan bigger undertakings, for example, air terminals, transport ports, mass travel frameworks, and harbours. Crafted by civil engineers is firmly identified with crafted by ecological designers.</p><h3 style=\"font-family: \"Roboto Slab\", serif; font-weight: 600; line-height: 1.42857; color: rgb(51, 51, 51); font-size: 24px;\">Advancement for Civil Engineers</h3><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">Civil engineers with abundant experience may move into senior positions, for example, venture chiefs or practical supervisors of plan, development, activity, or support. In any case, they would initially need to acquire the Expert Designing (PE) permit, because solitary authorized specialists can accept obligations for public tasks.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 14px; line-height: 1.5em; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;\">In the wake of picking up licensure, an expert designer may look for credentialing that exhibits their skill in a structural designing strength. Such an accreditation might be useful for headway to senior specialized or even administrative positions.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_course_behaviour`
--

CREATE TABLE `heysushil_course_behaviour` (
  `id` int(8) NOT NULL,
  `course_id` int(5) NOT NULL,
  `course_behaviour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_course_behaviour`
--

INSERT INTO `heysushil_course_behaviour` (`id`, `course_id`, `course_behaviour`) VALUES
(1, 1, 'Semester'),
(2, 2, 'Term');

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_course_levels`
--

CREATE TABLE `heysushil_course_levels` (
  `id` int(8) NOT NULL,
  `course_level_id` int(5) NOT NULL,
  `course_level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_course_levels`
--

INSERT INTO `heysushil_course_levels` (`id`, `course_level_id`, `course_level_name`) VALUES
(1, 1, 'Diploma'),
(2, 2, 'Graduate'),
(3, 3, 'Post Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_course_other_feilds`
--

CREATE TABLE `heysushil_course_other_feilds` (
  `id` int(8) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `career_option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_course_related_subjects`
--

CREATE TABLE `heysushil_course_related_subjects` (
  `id` int(8) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_name` varchar(500) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `subject_grade` int(5) NOT NULL,
  `subject_semester` int(5) NOT NULL,
  `subject_type` int(2) NOT NULL DEFAULT 0 COMMENT '0: Non-elective | 1: Elective',
  `course_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_course_related_subjects`
--

INSERT INTO `heysushil_course_related_subjects` (`id`, `subject_code`, `subject_name`, `course_code`, `subject_grade`, `subject_semester`, `subject_type`, `course_id`) VALUES
(1, 'qqqq', 'sub name', 'DEMO001', 0, 2, 1, 1),
(2, 'bbb', 'hkj', 'DEMO001', 0, 3, 0, 1),
(3, 'qqqq', 'sub name', 'DEMO001', 0, 2, 0, 1),
(4, 'bbb', 'hkj', 'DEMO001', 0, 3, 0, 1),
(5, 'qqqq', 'sub name', 'DEMO001', 0, 2, 0, 1),
(6, 'demo001', 'new subject', 'DEMO001', 5, 3, 0, 1),
(7, 'ai001', 'new ai', 'DEMO002', 5, 3, 0, 2),
(8, 'ai002', 'again ai', 'DEMO002', 5, 3, 0, 2),
(9, 'ai003', 'new ai', 'DEMO002', 5, 3, 0, 2),
(10, 'hello001', 'mycourse', 'new220', 10, 1, 0, 3),
(11, 'hello001', 'mycourse', 'new220', 10, 1, 0, 3),
(12, '', '', 'DEMO001', 0, 0, 0, 1),
(13, '', '', 'DEMO001', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_course_types`
--

CREATE TABLE `heysushil_course_types` (
  `id` int(8) NOT NULL,
  `course_type_id` int(5) NOT NULL,
  `course_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_course_types`
--

INSERT INTO `heysushil_course_types` (`id`, `course_type_id`, `course_type_name`) VALUES
(1, 1, 'Engineering'),
(2, 2, 'Management'),
(3, 3, 'Short Term');

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
  `resume_name` varchar(1000) DEFAULT NULL,
  `resume_name_enc` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `heysushil_user_types`
--

CREATE TABLE `heysushil_user_types` (
  `id` int(8) NOT NULL,
  `ut_number` int(5) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heysushil_user_types`
--

INSERT INTO `heysushil_user_types` (`id`, `ut_number`, `type`) VALUES
(1, 1, 'admin'),
(2, 2, 'manager');

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
-- Indexes for table `heysushil_courses`
--
ALTER TABLE `heysushil_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_course_behaviour`
--
ALTER TABLE `heysushil_course_behaviour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_course_levels`
--
ALTER TABLE `heysushil_course_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_course_other_feilds`
--
ALTER TABLE `heysushil_course_other_feilds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_course_related_subjects`
--
ALTER TABLE `heysushil_course_related_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_course_types`
--
ALTER TABLE `heysushil_course_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_email_data`
--
ALTER TABLE `heysushil_email_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heysushil_user_types`
--
ALTER TABLE `heysushil_user_types`
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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `heysushil_courses`
--
ALTER TABLE `heysushil_courses`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `heysushil_course_behaviour`
--
ALTER TABLE `heysushil_course_behaviour`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `heysushil_course_levels`
--
ALTER TABLE `heysushil_course_levels`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `heysushil_course_other_feilds`
--
ALTER TABLE `heysushil_course_other_feilds`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heysushil_course_related_subjects`
--
ALTER TABLE `heysushil_course_related_subjects`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `heysushil_course_types`
--
ALTER TABLE `heysushil_course_types`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `heysushil_email_data`
--
ALTER TABLE `heysushil_email_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heysushil_user_types`
--
ALTER TABLE `heysushil_user_types`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
