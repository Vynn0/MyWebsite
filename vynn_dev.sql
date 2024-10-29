-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2024 at 12:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vynn.dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, 'Oh... you just clicked \'about\'. Well, welcome, I guess. My name is... Vynn0, or just Vino for short. I named Vynn0 just to sound cool, I guess... \'personal branding\' if you like, but eh...\r\n\r\nAnyways! What do most people expect from \'about\'? Probably something about this website, about \'me\' and who am I.\r\n\r\nTo start short, I\'m simply a college student, tasked with creating a portfolio website. This text will change in the future obviously, but I needed something, or anything to fill in this page so it does not feel empty. Right, I digress...\r\n\r\nSecondly, let\'s talk about my hobbies. If you haven\'t seen my projects and blog pages, you should see it, but tl;dr, I\'m a man with many hobbies. Writing? Check. Psychology? Check. Programming? Hmm... check, partially.\r\n\r\nLearning is a virtue, if you could say that. Moving on, let\'s talk about this website itself. As you might\'ve guessed, this website is a midterm project on my college/university, started... mid-late October I suppose. At first, I don\'t really have ANY idea what to create, but thanks to lots of sources and brainstorming, I finally came up with an idea.\r\n\r\nThe design itself is quite simple. I love astronomy, so I just decided to grab a random image related to astronomy, an astronaut as a background, and adapted the rest into a \'spacey\' feeling. It\'s not advanced, and I was under lots of time pressure, as well as other responsibilities. But I\'m quite glad, really.\r\n\r\nMy personal thanks to w3schools, OpenAI(ChatGPT), Claude Antrophic AI, YouTube, and Bootstrap for making my website creation journey possible.');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `summary` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Article Table';

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `summary`, `content`, `image_path`) VALUES
(1, 'Fantasy Map Project', 'A fantasy map project made by photoshop filled with lore.', 'At the northernmost of Sierra, lies the Mittelian peninsula. Its geographical location were rather isolated from the rest of Sierra as the ocean provided a wall for the land, and its eastern mountain deemed impassable as it has the tallest mountain in the world: Mount Molitza. It’s climate and temperature were rather temperate on the southern parts, yet it goes much colder as one goes north.\r\n\r\nThese are the map known to the Mittelians early on, as the knowledge of Sierra itself diminish over the centuries due to their isolation.\r\n\r\nFirst discovered by the early people of the Mittelian peninsula, in which they called themselves Mittelians— had a deep roots and difference from the rest of Sierra. \r\n\r\nThe Mittelian peninsula had some key geographical locations that contributes to its features. First were the vast fertile farmlands on the southern part, with rivers providing water sources to the lands itself. It is often the key location for Mittelians people to thrive as a civilization.\r\n\r\nThe Eastern part, the mountains—were considered to be the wall that protects the Mittelians. There are lots of written tales of invading forces coming from the East, and despite many subcultures of the Mittelians as it grows throughout the years—they will almost always unite against any uniting forces. The mountains provides lots of raw resources such as Copper, Iron and many more.\r\n\r\nThe middle part of Mittelian peninsula—the heart of the Peninsula were full of hills, and are colder. There are less location to settle, yet its hilly terrain provides lots of raw resources such as wood and significant mining resources, yet also provides enough fertile lands. It is a balance between the South and the East.\r\n\r\nLastly, the Western part is the most isolated of them all, facing nothing but the ocean. It is colder, and had less fertile lands. Despite this, it is the safest and most secure as not many desires to live in such areas, including invaders.', 'Assets/Mittlemazigste.png'),
(2, 'Fantasy Map Project - Subcultures', 'The second and continuation project, expands on Mittelia subcultures.', 'Over the centuries, though, the Mittelians have divided into four major subcultures. They still consider themselves each part of the Mittelians\' heritage and culture as a whole and consider the Mittelian peninsula their homeland, yet they each have their own differences and practices according to their geography.\r\n\r\nFirst were the resourceful—the stewards of the South, the Livens. With the most population and its areas optimal for civilization, the Livens thrived. They had the best economy, best farmlands, and largest population percentage.\r\n\r\nThese people were described as productive, economical, and resourceful. Due to its location near the coast and the rivers, they love to trade with each other, including overseas. These people were considered extroverted and always wanted the best for progress. They had to compete because over the centuries and all the history, the Mittelians were subjected to many invaders and conquest both from the Mountains and from the sea. Control is what gives them a sense of security.\r\n\r\nThe people of Livens often had fair skin and brown-dark blonde hair color, often accompanied with either hazel, green or rarely blue eyes. They got a fair share of vitamin D, but not too much.\r\n\r\nSecond, the Mitzens. These people were rowdy, often facing unknown dangers from the East and living in harsh conditions. They are much more militaristic and disciplined. They considers themselves as the protector of the land from the East. Considered strict, rough, and direct. They have less population that the Livens, yet they were much sturdier. They are as introverted as extroverted, which is quite balanced.\r\n\r\nThe people of Mitzens had a similar appearance to the Livens, although their hair were darker—unknown to why.\r\n\r\nThird, the Fallenian. When Mittelians is quite isolated from the world, the Fallenians were the most isolated within the Mittelian culture. These people were often storytellers and voyagers of the sea. If they don’t have the time for that, they usually spend their time with art, and even science. They were the most innovative and creative of the Mittelian, yet the Livens often take the credit because the Fallenian people were often very reserved and quite. Introverted, and probably much more used to a lack of communication. They often live in a very cold conditions.\r\n\r\nThe Fallenian were most controversial. First, there are records of settlers far West beyond the ocean to the lands of Mittelians, and might even assimilated to the culture. Many Mittelians on the region were often notified of “fallen empire” from the settlers accross the ocean, and therefore the name “Fallenian” were made. Because of this supposedly mixed culture, their dialects and customs are quite different from the rest of their cousins.\r\n\r\nThe people of Fallenian had a more paler and lighter looks on them. Their skin is much more pale, and their hair is known for its white-silver look with almost no pigmentation on it. Their eyes were mostly striking blue-light blue. These people are considered the most attractive, mysterious, and even romantic. Despite of this, they tend to lack the charisma of an extrovert. They tend to get discriminated against by Mittelians, especially Livens due to their odd look.\r\n\r\nLastly, the Middenian. They’re known as the moderates, encompassing all subcultures of Mittelian. They had the work and resourceful ethic of Livens, the strictness of Mitzens, and the ideas of Fallenian. Because of this, they’re considered as the “heart”, keeping all the cultures together. They tend to be diplomats, seeking peace within the land and communicating cultural issues with each other. They tend to be more tolerant of the Fallenian, and love peacekeeping.\r\n\r\nThe people of Middenian encompasses all the appearance of the Mitzes, and it is so mixed that they can be seen having no “identifier” on themselves.', 'Assets/Mittlemazigste-Culture.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `summary` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Blog table';

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `summary`, `content`, `image_path`) VALUES
(1, 'Domain of Expertise', 'Everyone has talents. Here, I will explain my useless theory on why.', 'Imagine a limitless two-dimensional board consisting of domains. The space itself is divided into three sections, Rational, Limbic, and Physical aspect. Those three aspects intersects each other, no matter how \"extreme\" a certain category is from the other two.\r\n\r\nNow, put in human expertise towards those board. For example, the realm of \"Computer Science\" largely relies on Rational aspect, going to extreme on that category, but it is not without the Limbic and the Physical.\r\n\r\nThe Limbic may play an aspect in fueling the passion, while the physical are playing part over the practical aspect.\r\n\r\nThere are multitudes of domains scattered around the board varying in size. The closer the two domains whilst still separate, the stronger its relation.\r\n\r\nA domain might derive from one or more domain as a result of divergence and interdisciplinary thinking for innovation.\r\n\r\nNow someone\'s natural talent might be randomly placed within those board. Some might perfectly fits within one domain, while some are slightly off and connects to two or more different domains, implying for a divergence.\r\n\r\nThe talent itself might shift periodically, fluid as a state of life always changes, but it might still be close within the starting point.\r\n\r\nEach of these domain might contain sub domains within, in which those talents are placed. The sub-domains could be a result from a divergence from another domain, containing it\'s aspect.\r\n\r\nFor example, certain philosophical sub-domains might contain psychology aspects as they derive from the main domain of psychology.\r\n\r\nIt\'s something like a chemistry, a combination of diverse domains that might result in more and more domains.\r\n\r\nThat\'s why, some talent might not be \"recognized\", when in reality, it is just \"off\" from a certain domain, waiting to result in a divergence or innovation.', 'Assets/blog1.png'),
(2, 'Effort Factor', 'Another funny, useless, and random theory.', '*What is effort?*\r\n\r\nIs it an abstract metric in which we expend our inner resources towards a task? Probably.\r\n\r\nEveryday, we take an effort to do things; to walk, to eat, to rest. But that\'s simply the basic necessities in which some of us don\'t have to think hardly enough, nor had to expend many willpower to do so.\r\n\r\nBut there\'s another problem comes in mind: *everything else.*\r\n\r\nRight, you have to go to work. Maybe you\'re still in college and there\'s an assignment. Or perhaps you\'re still at school, with homework piling up on your desk.\r\n\r\nNow *that* requires certain amount of effort. Sometimes, you require a large activation energy to kickstart that chemical reaction, one that get you moving after all of those procrastination.\r\n\r\nWhy is it so difficult? Why is it so heavy?\r\n\r\nWell, we must first realize that our perception of a task is largely abstract and heavily influenced by our upbringings, values, personality traits, and much more.\r\n\r\nThese perception are our *first hand* reaction towards the task. For example:\r\n*Ugh, there\'s so much numbers on this task*.\r\n*Do I have to do this homework? I just wanna sleep*\r\n*I don\'t wanna go to work today*\r\n\r\nPerception, then either lift, or puts pressure to our willpower. Willpower, in a simple terms, is the metric of the amount of available resources divided by subjectively-perceived task.\r\n\r\nThis is why some people could handle lots of tasks, while others couldn\'t, because of differences in their *subjective perspective of the task*, rather than the objective weight of it.\r\n\r\nR = Resources\r\n*Resources, in this case, are things like chemistry, nutrition, and other factors. It is the stuff that could be used to expend energy.*\r\n\r\nIt = Internal task\r\n*Internal task are factors that uses resources. This includes managing bodily function, and other factors that the mind needed.*\r\n\r\nW = Will\r\n*Will, in this case, is the amount of resources available divided, ready to be used.*\r\n\r\nP = Purpose\r\n*Purpose is an abstract metric which is highly subjective to each person.*\r\n\r\nTo = Objective weight of a task\r\n*Task is an abstract idea that uses will to be done. The metric used here is used to idealize an objective weight outside of one\'s subjective perception.*\r\n\r\nTs = Subjective weight of a task\r\n*Subjective perception weight of a task are influenced by one\'s perception.*\r\n\r\nPr = Perception\r\n*Perception are influenced by mindset, immediacy and pressure.*\r\n\r\nMt = Mental power\r\n*This immediate willingness for us to take a task ready at hand under many variables. If it\'s negative, humans have a tendency towards inertia. If it\'s positive, humans have a tendency towards action.*\r\n\r\n**In essence:**\r\n\r\nMt = (W - Ts) * P\r\n*Mental power are will subtracted by the amount of subjective weight of a certain task, which is then multiplied by purpose.*\r\n\r\nW = R / It\r\n*Willpower are the result of internal resources divided by other internal tasks.*\r\n\r\nTs = To * Pr\r\n*Subjective weight of a task are multiplied by perception, which could be either negative or positive depending on the situation.*\r\n\r\n**Note: This is a highly simplified formula that only measures subjective process. This is not in any way scientific, but rather, a simple metric to visualize the process of my understanding of human psychology in its current immediacy.**', 'Assets/blog2.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image_path`) VALUES
(1, 'Silhoutte', 'Assets/gallery1.jpg'),
(2, 'Astronaut', 'Assets/gallery2.png'),
(3, 'AI Generated', 'Assets/gallery3.png'),
(4, 'Astronaut Glitch', 'Assets/gallery4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
