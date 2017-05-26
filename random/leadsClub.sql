-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2013 at 11:16 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'mlmleadsclub'
--

-- --------------------------------------------------------

--
-- Table structure for table 'headlines'
--

CREATE TABLE IF NOT EXISTS 'headlines' (
  'id' smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  'headline' varchar(250) NOT NULL,
   PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table 'arrangements'
--

INSERT INTO 'headlines' ('id', 'headline') VALUES
('', 'Formula #1: [INCREDIBLY GOOD] WITHOUT [INCREDIBLY BAD]'),
('', 'Formula #2: How [Premise] Got Me A [Awesome Outcome]'),
('', 'Formula #3: Are You In This Kind Of [Pain or Anxiety]'),
('', 'Formula #4: How I [Achieved an awesome outcome] [by overcoming a massive disadvantage]'),
('', 'Formula #5: How To [Live The Promise] starting with [A Low Magnitude Change, Activity or Situation]'),
('', 'Formula #6: For the [Prospect In Pain] How To [Live The Promise] Starting With [A Low Magnitude Change, Activity or Situation]'),
('', 'Formula #7: If You [Can/Are/Have] then You Can [Have an Awesome Outcome]'),
('', 'Formula #8: [Secrets/Tricks/Strategies/Techniques/Systems] of a [Prospect who is living the Promise]'),
('', 'Formula #9: [WARNING/Alert/Attention/Be Advised]: [A Specific Kind of Prospect] will [Experience/Become] [A Situation even MORE painful than the one they are currently in]'),
('', 'Formula #10: [Give Me/Show Me] [A Situation/Amount of Activity] and I\'ll [Deliver You to the Promise Land/Prevent You From Experiencing More Pain]'),
('', 'Formula #11: [Number or Statistics] of a [Type of Prospect] are [Now Living in the Promise Land] [despite] [An Initial Negative Reaction to the Premise]'),
('', 'Formula #12: [Number] of ways to [Reach the Shore of the Promise Land] while [not increasing pain/effort/anxiety/loss]'),
('', 'Formula #13: How To Get [Result] [Quickly] [Without Risk]'),
('', 'Formula #14: How To [Eliminate Specific Pain] [Without More Pain]'),
('', 'Formula #15: If [Specific Emotional Hot Button Situation Is Happening], Then [Worst Fear Might Be True]'),
('', 'Formula #16: What To Do If [Specific Hot Button Situation]'),
('', 'Formula #17: 10 Mistakes Most [Customer Description] Make [In Situation] – And How To Avoid Them'),
('', 'Formula #18: Why [Common-Sense Approach] Doesn’t Work… And What To Do About It'),
('', 'Formula #19: How To [Turn Problem] [Into Benefit]'),
('', 'http://blog.myleadsystempro.com/19-proven-formulas-for-high-converting-headlines#');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
