-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2023 pada 06.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_kursus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `judul` varchar(360) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `status`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Generating Random Data into a Database Using Pythons', '<p>In this article we’re going to demonstrate how to generate dummy data and input for a MySQL database. Majority of the times we need to create a database to test some software that we’ve built. To do this, we can use Structured Query Language (SQL) to create a mock database system. However, problems may arise if we want to test hundreds or even thousands of records. There is definitely no way we could write that many insert statements into our SQL scripts to meeting our testing deadlines for product deployment, that would be too tedious and time consuming.&nbsp;<br><br>To help with this problem, our trusty friend Python comes to assist !&nbsp;<br><br><strong>Python to the rescue !&nbsp;</strong><br><br>As you may or may not know python is a scripting language that is well known for its plethora (abundance) of libraries. Python is also known for its ability to automate task using its very simple syntax.&nbsp;<br><br>Pre-requisite Knowledge :&nbsp;</p><ul><li>Installation of python packages using pip.</li><li>Basic understanding of what databases are and how they use SQL.</li><li>Even if you don’t have what is required above, this article will ensure that you understand its content to help you further your Python career.</li></ul><p>So let’s get into it !&nbsp;<br><br>The python libraries that we’ll be used for this project are:&nbsp;<br><br>Faker — This is a package that can generate dummy data for you. We will use this to generate our dummy data.&nbsp;<br>Pandas — This is a data analysis tool. This will be used to package our dummy data and convert it to tables in a database system.&nbsp;<br>SQLAlchemy — This is an Object Relational Mapper(ORM) for SQL. ORM will be used as our database engine as it will provide our connection to our database.</p>', '658f784f65c29_andre-benz-qi2hmCwlhcE-unsplash.jpg', '2023-12-30 08:54:23', '2023-12-30 08:54:23'),
(2, 1, 'Faker: An Amazing and Insanely Useful Python Library', '<p><strong>Create Dataset! Analyze it! And Share with the World!&nbsp;</strong><br>Finding Data set is always a first step in Data Analytics project, unless it is provided. &nbsp;Data which meets our needs may be expensive, hard to collect, or simply might not available at the moment.&nbsp;<br><br>Secondly, even if you collected the data, there comes Copyright ⚠️ restrictions while sharing the data with others.&nbsp;<br><br>Hence, in next 3 minutes we will solve this problem, by creating our own dummy-yummy dataset!! 💯&nbsp;<br><br>All we need is python packages random, pandas and Faker!!&nbsp;<br><br><strong>Fake it until you make it.&nbsp;</strong><br><br>— Steven Tyler&nbsp;<br><br>Faker&nbsp;<br><i>Faker is the Python package which generates Fake or dummy data for you.&nbsp;</i><br><br>And its usage is also quite straight forward.&nbsp;<br><br>For the first time use only, install the package Faker as shown below.&nbsp;<br><br>pip install Faker&nbsp;<br>Once installed successfully, its time to try out!! 🚀&nbsp;<br><br>Start with creating and initializing a generator using faker.Faker() , which will generate data by accessing various properties.</p>', 'wolf_starry_sky_tree_moon_118496_3840x2160.jpg', '2023-12-30 09:37:34', '2023-12-30 11:43:37'),
(3, 1, 'Generate Dummy Data With Faker', '<p>Fictitious data is required for a variety of purposes. Whether for testing, anonymising sensitive data, or adding “noise” to a training dataset, it can be beneficial to have access to a fake dataset in the same shape as the real data. You may also need to generate dummy data for testing and operational purposes. That is, to test what you have developed and how your code reacts to different types of input.&nbsp;<br><br>However, <i>finding the necessary data in a specific format we want can be difficult</i>. So, where do you get dummy data for your own application? There is an elegant solution to this problem in the form of the Faker package. With Python, you can use the Faker package to generate data according to your data needs. Faker is an open source library designed to generate different types of synthetic data.&nbsp;<br><br>In this article, we’ll take a quick tour of Faker’s features and how to use them to create a dummy dataset.&nbsp;<br><br><strong>Installation and Use&nbsp;</strong><br>Faker allows you to generate random data in dozens of languages. Since Faker is an open library for the community, it is constantly evolving. Providers –generators specific to a certain type of data– are added regularly by the community. Let’s take a look at how to use it in terms of codes.</p>', '658f85d77ae56_wallhaven-5wvmq9.jpg', '2023-12-30 09:52:07', '2023-12-30 09:52:07'),
(4, 1, 'Generating Dummy Data in C#', '<p>In the realm of data analysis and software development, the creation of dummy data sets serves as a pivotal tool for testing algorithms, software, and analysis methodologies without compromising real data. This article delves into the process of generating dummy data using C# and explores the optimization of data analysis through performant LINQ (Language Integrated Query) queries.</p><p>&nbsp;</p><p><i>Generating Dummy Data with C#</i></p><p>The foundation begins with the creation of a C# class utilizing Pascal case, containing essential personal information fields such as ID, first name, last name, place of birth, date of birth, identification number, and gender. Leveraging this class, a method is crafted within a DummyDataGenerator class to create a specified number of dummy data entries, each simulating a unique individual.</p>', '987919.jpg', '2023-12-30 10:17:33', '2023-12-30 11:12:38'),
(5, 1, 'Why dummy data matters – and how to generate it', '<p>Part of creating a successful Staging and Test environment for your application is generating dummy data as part of your deployment process.&nbsp;<br><br>This dummy data is used during development, the QA process and even for feature demos. Making it easy for application states to be achieved with minimal “setup” (that tends to be tedious, data-entry style work) increases productivity of the whole team.&nbsp;<br><br>In this article, we will explore two strategies for generating dummy data: using a ‘Dummy Data Seeder’ or ‘Scrambling Production Data’.&nbsp;<br><br><strong>Dummy Data Seeding&nbsp;</strong><br><br>I had once written an article entitled “The Perfect Staging Environment” which explores this strategy in more detail.&nbsp;<br><br>The strategy&nbsp;<br><br>Create a seeder that leverages your existing Model Factories. We called ours “DummyDataSeeder.php”&nbsp;<br>Drop your database and seed using this class whenever you want to start from a fresh “state”.&nbsp;<br>Automate this as part of your post deployment script.&nbsp;<br><br>When to use this strategy&nbsp;<br><br>When the different states your data can be in is limited.&nbsp;<br>When it’s easy to recreate states by doing a few manual steps.&nbsp;<br>When it’s easy for whoever is doing the QA to update the seeder (ideal for when the developers are taking on the QA responsibility).&nbsp;<br><br><strong>When not to use this strategy&nbsp;</strong><br><br>When there are many different states your data can be in.&nbsp;<br>When it’s complicated and/or tedious to get the application into a particular state.&nbsp;<br>When it’s not uncommon to want to recreate a user’s exact state on a test environment in order to better understand the issue.&nbsp;<br><br>Lessons learned&nbsp;<br><br>When the application was “small”, this strategy was an extremely quick way for developers to get into a productive, working state.&nbsp;<br>The “DummyDataSeeder” file can quickly and easily become one very long and hard to follow class.&nbsp;<br>We tried to improve on this strategy by creating a UI + configuration-driven way of seeding different states. Avoid doing this: the configuration file ended up being more complex than what it replaced, rarely worked and wasn’t used.&nbsp;<br><br>Scrambling Production Data&nbsp;<br><br>This strategy leaves you with dummy data that is almost identical to your production data, except anonymised. For medium to large scale applications – this is well worth the effort.&nbsp;<br><br>The strategy&nbsp;<br><br>Replicate your production database elsewhere&nbsp;<br>Iterate over all of your records, and apply a reasonable strategy to anonymise data&nbsp;<br>Use this database as your staging/test database&nbsp;<br>Automate this through a command, or as part of your post deployment script.&nbsp;<br><br>When to use this strategy&nbsp;<br><br>When the data you want to mock is quite complex&nbsp;<br>When you want to be able to test the exact state that a production user is in, in a test environment&nbsp;<br>When you expand the team to include a dedicated QA person&nbsp;<br>When you’d like to test using production data, without any of the risks (and in a GDPR-friendly way)&nbsp;<br><br>When not to use this strategy&nbsp;<br><br>When the application is small&nbsp;<br>When the person doing the testing is a developer, and can easily create different states&nbsp;<br><br>Lessons learned&nbsp;<br><br>Automate this process at the click of a button – this is a task that needs to happen often (at least once per release, and at most – every time a feature branch is deployed to a test or staging environment).&nbsp;<br>Depending on your strategies for 3rd party integrations your application might have, you may want to disconnect any production accounts as part of the scrambling process.&nbsp;<br>It’s useful to scramble user emails to match their ID, and to change everyone’s password to something easy to remember.&nbsp;<br>Test this solution in a real-world environment to avoid surprises (if you’d like to setup an export across servers then you’re going to want to see what the performance of that looks like!)</p>', '658f8d134522e_sopngqp8ruu11.png', '2023-12-30 10:22:59', '2023-12-30 10:22:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2023-12-29 13:25:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
