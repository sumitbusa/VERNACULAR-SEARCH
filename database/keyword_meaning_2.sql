-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2015 at 08:07 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `translator`
--

-- --------------------------------------------------------

--
-- Table structure for table `keyword_meaning_2`
--

CREATE TABLE IF NOT EXISTS `keyword_meaning_2` (
  `English_Input` varchar(50) DEFAULT NULL,
  `Gujarati_input` varchar(50) NOT NULL DEFAULT '',
  `English_meaning1` varchar(100) DEFAULT NULL,
  `English_meaning2` varchar(50) DEFAULT NULL,
  `English_meaning3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Gujarati_input`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keyword_meaning_2`
--

INSERT INTO `keyword_meaning_2` (`English_Input`, `Gujarati_input`, `English_meaning1`, `English_meaning2`, `English_meaning3`) VALUES
('antaray', 'અંતરાય', 'obstacle', NULL, NULL),
('aandar', 'અંદર', 'inner', NULL, NULL),
('akassmat', 'અકસ્માત​', 'Accident', NULL, NULL),
('Agani', 'અગ્નિ', 'Direction(South-East)', 'Fire', NULL),
('angira', 'અજીર', 'Fig', NULL, NULL),
('adrushya', 'અદૃશ્ય', 'Invisible', NULL, NULL),
('adabhut', 'અદ​ભુત', 'Incredible', NULL, NULL),
('anaath', 'અનાથ', 'orphan', NULL, NULL),
('Anukaran', 'અનુકરણ', 'Imitate', NULL, NULL),
('anukool', 'અનુકૂલ', 'Acclimatize', 'To be comfortable with', NULL),
('apuratu', 'અપૂરતુ', 'Scant', 'Insufficient', NULL),
('abhiyaaskram', 'અભ્યાસક્રમ', 'Syllabus', NULL, NULL),
('avatar', 'અવ​તાર​', 'Divine form', NULL, NULL),
('ahankar', 'અહંકાર', 'Vanity', NULL, NULL),
('ochintu', 'અોચિંતુ', 'Abrupt', 'Unaware', NULL),
('aa', 'આ', 'This', NULL, NULL),
('aakado', 'આંકડો', 'Figure', NULL, NULL),
('aakarshana', 'આકર્ષણ​', 'Attraction', NULL, NULL),
('aakash', 'આકાશ', 'Sky', NULL, NULL),
('Aakarosh', 'આક્રોશ', 'aggression', NULL, NULL),
('aag', 'આગ', ' Fire', NULL, NULL),
('aagman', 'આગમન', 'Arrival', 'Entry', NULL),
('aagada', 'આગળ', 'Forth', NULL, NULL),
('aaj', 'આજ', 'Today', 'Present Day', NULL),
('aagyapalak', 'આજ્ઞાપાલક', 'obedient', NULL, NULL),
('aafat', 'આફત', 'Calamity', NULL, NULL),
('aabhar', 'આભાર', 'Thank', NULL, NULL),
('aari', 'આરી', 'Saw-A hand tool having a toothed blade for cutting especially Wood', NULL, NULL),
('asha', 'આશા', 'Hope', NULL, NULL),
('ishan', 'ઈશાન', 'Direction(North-East)', NULL, NULL),
('uttar', 'ઉત્તર​', 'Direction(North)', 'Answer', NULL),
('utasuk', 'ઉત્સુક', 'keen', NULL, NULL),
('utasava', 'ઉત્સ​વ​', 'Festival', NULL, NULL),
('udas', 'ઉદાસ\n', 'Sad', 'Unhappy', NULL),
('udayaan', 'ઉદ્યાન', 'Garden', NULL, NULL),
('Unado', 'ઉનાળો', 'Summer', NULL, NULL),
('upar', 'ઉપર', 'over', NULL, NULL),
('uchu', 'ઊંચું', 'Tall', NULL, NULL),
('ooche', 'ઊંચે', 'Above', 'Up', NULL),
('oota', 'ઊટ', 'camel', NULL, NULL),
('oonap', 'ઊણપ', 'Absence', 'Deficiency', NULL),
('oon', 'ઊન', 'Wool', NULL, NULL),
('rutu', 'ઋતુ', 'Season', NULL, NULL),
('rushi', 'ઋષિ', 'Sage', NULL, NULL),
('kaachumbar', 'કચુંબર', 'Salad', NULL, NULL),
('kathor', 'કઠોર', 'Stern', NULL, NULL),
('kadiyo', 'કડિયો', 'Mason', NULL, NULL),
('kapaas', 'કપાસ', 'Cotton', NULL, NULL),
('kabar', 'કબર', 'Tomb', NULL, NULL),
('kabat', 'કબાડ', 'Cabinet', NULL, NULL),
('kamal', 'કમળ', 'Lotus', NULL, NULL),
('karkasr', 'કરકસર', 'Thirf', NULL, NULL),
('karamavu', 'કરમાવું', 'faint', NULL, NULL),
('karavat', 'કરવત', 'a condensed but memorable saying embodying some im', NULL, NULL),
('kalpana', 'કલ્પના', 'Imagine', NULL, NULL),
('kashthatarang', 'કષ્ઠતરંગ', 'Xylophone', NULL, NULL),
('kaasoti', 'કસોટી', 'Test', NULL, NULL),
('kaasko', 'કાંસકો', 'Comb', NULL, NULL),
('kaatara', 'કાતર', 'Scissors', NULL, NULL),
('kaam', 'કામ', 'Work', NULL, NULL),
('karkhanu', 'કારખાનું', 'Factory', NULL, NULL),
('kalpnik', 'કાલ્પનિક', 'Imaginary', NULL, NULL),
('kado', 'કાળો', 'Black', NULL, NULL),
('kiyaan', 'કિયાન', 'King', 'Royal', NULL),
('killo', 'કિલ્લો', 'Fort', NULL, NULL),
('kitali', 'કીટલી', 'kettle', NULL, NULL),
('kido', 'કીડો', 'Worm', NULL, NULL),
('kutir', 'કુટીર', 'Cabin', NULL, NULL),
('kumarika', 'કુમારિકા', 'Maiden', NULL, NULL),
('Quran', 'કુરાન', 'Holy book For Muslim Community', NULL, NULL),
('kuhadi', 'કુહાડી', 'Axe', NULL, NULL),
('kunchi', 'કૂંચી', 'Key', NULL, NULL),
('kudavu', 'કૂદવૂ', 'Jump', NULL, NULL),
('kon', 'કોણ', 'Who', NULL, NULL),
('kothado', 'કોથડો', 'Sack', NULL, NULL),
('kobi', 'કોબી', 'cabbage', NULL, NULL),
('kor', 'કોર', 'Verge', NULL, NULL),
('kaushaliya', 'કૌશલીય', 'Capacity', NULL, NULL),
('kya', 'ક્યાં', 'Where', NULL, NULL),
('kyare', 'ક્યારે', 'when', '', NULL),
('kriyapad', 'ક્રિયાપદ', 'Verb', NULL, NULL),
('krutika', 'ક્રુતિકા', 'Pleiades', NULL, NULL),
('krura', 'ક્રૂર​', 'Ferocious', NULL, NULL),
('krodha', 'ક્રોધ​', 'Wrath', 'Anger', NULL),
('kharab', 'ખરાબ', 'Bad', 'Not good', NULL),
('khatar', 'ખાતર​', 'Fertilizer', NULL, NULL),
('khatu', 'ખાતું', 'Account', NULL, NULL),
('khullu', 'ખુલ્લું', 'Open', NULL, NULL),
('khes', 'ખેસ', 'Scarf', NULL, NULL),
('khoraka', 'ખોરાક​', 'Food', NULL, NULL),
('gandu', 'ગંદું', 'Foul', NULL, NULL),
('gayi kale', 'ગઈ કાલે', 'Yesterday', NULL, NULL),
('garDha', 'ગઢ​', 'Fort', NULL, NULL),
('ganatari', 'ગણતરી', 'Calculate', NULL, NULL),
('garagadi', 'ગરગડી', 'Having wheels', NULL, NULL),
('garva', 'ગર્વ​', 'Vanity', NULL, NULL),
('galgoto', 'ગલગોટો', 'Marigold', NULL, NULL),
('gaamadu', 'ગામડું', 'Village', NULL, NULL),
('gaay', 'ગાય', 'Cow', NULL, NULL),
('gado', 'ગાળો', 'Curse', NULL, NULL),
('Geeta', 'ગીતા', 'Hindu holy book-Geeta', NULL, NULL),
('gulab', 'ગુલાબ', 'Rose', NULL, NULL),
('gulabi', 'ગુલાબી', 'Pink', NULL, NULL),
('gokharu', 'ગોખરુ', 'thistle', NULL, NULL),
('goro', 'ગોરો', 'Fair', NULL, NULL),
('Gaushala', 'ગૌશાળા', 'Cowshed', NULL, NULL),
('ghamand', 'ઘમંડ', 'Arrogance', NULL, NULL),
('ghodagadi', 'ઘોડાગાડી', 'Horse-Cart', NULL, NULL),
('chandan', 'ચંદન', 'SandalWood', NULL, NULL),
('chandra', 'ચંદ્ર​', 'Moon', NULL, NULL),
('champo', 'ચંપો', 'Champak', NULL, NULL),
('chakshu', 'ચક્ષુ', 'Sight', 'Vision', NULL),
('charitra', 'ચરિત્ર​', 'Character', NULL, NULL),
('charnarvind', 'ચર્નાવિંદ', 'Legs', NULL, NULL),
('charvu', 'ચર​વું', 'Feed', NULL, NULL),
('chalchitra', 'ચલચિત્ર​', 'Video', NULL, NULL),
('caara', 'ચાર​', 'Four', NULL, NULL),
('caLisa', 'ચાળીસ​', 'Forty', NULL, NULL),
('chaavi', 'ચાવી', 'Key', NULL, NULL),
('chinta', 'ચિંતા', 'To Worry', NULL, NULL),
('chichiyaari', 'ચિચિયારી', 'Yell', NULL, NULL),
('chitra', 'ચિત્ર', 'Picture', 'Image', NULL),
('chulo', 'ચૂલો', 'Stove', NULL, NULL),
('Chomasu', 'ચોમાસું', 'Monsoon', 'Rainy Season', NULL),
('chori', 'ચોરી', 'Theft', NULL, NULL),
('channu', 'છાનું', 'Secret', NULL, NULL),
('jang', 'જંગ', 'War', NULL, NULL),
('jungal', 'જંગલ', 'Forest', NULL, NULL),
('javabdari', 'જવાબદારી', 'Responsibility', 'Accountable', NULL),
('Jambu', 'જાંબુ', 'Jamboo', NULL, NULL),
('jambudiya', 'જાંબુડિયા', 'Violet', NULL, NULL),
('jadu', 'જાદુ', 'Magic', NULL, NULL),
('jaari rakhvu', 'જારી ‌‌‌‌રાખવું', 'To maintain', NULL, NULL),
('jeet', 'જીત', 'Win', 'Victory', NULL),
('jiv', 'જીવ', 'Live', 'Alive', NULL),
('jivan', 'જીવન', 'life', NULL, NULL),
('juvan', 'જુવાન', 'Young', NULL, NULL),
('ju', 'જૂ', 'Louse', NULL, NULL),
('gyan', 'જ્ઞાન', 'Knowledge', NULL, NULL),
('jyot', 'જ્યોત', 'Flame', NULL, NULL),
('jvala', 'જ્વાળા', 'Flame', NULL, NULL),
('zhadap', 'ઝડપી', 'Fast', NULL, NULL),
('zununi', 'ઝનૂની', 'Fierce', NULL, NULL),
('zabakaaro', 'ઝબકારો', 'Flash', NULL, NULL),
('tuk', 'ટુક', 'Short Duration', NULL, NULL),
('dammar', 'ડામર', 'tar', NULL, NULL),
('dhong', 'ઢોંગ', 'Feign', NULL, NULL),
('tanga', 'તંગ', 'Tense', NULL, NULL),
('tanbu', 'તંબૂ', 'Tent', NULL, NULL),
('tapa', 'તપ', 'Penance', 'Deep prayer', NULL),
('taravu', 'તરવું', 'Float', NULL, NULL),
('talawar', 'તલ​વાર​', 'Sword', NULL, NULL),
('tavo', 'તવો', 'Pan', NULL, NULL),
('taadu', 'તાળું', 'Lock', NULL, NULL),
('tavadi', 'તાવડી', 'pan', NULL, NULL),
('tijori', 'તિજોરી', 'Safe', NULL, NULL),
('Tu', 'તું', 'Thou', 'You', NULL),
('tej', 'તેજ', 'Brightness', NULL, NULL),
('Tyag', 'ત્યાગ', 'Sacrifice', NULL, NULL),
('trisa', 'ત્રીસ​', 'Thirty', NULL, NULL),
('thadi', 'થાળી', 'plate', NULL, NULL),
('thelo', 'થેલો', 'bag', NULL, NULL),
('dantmanjan', 'દંતમંજન', 'Toothpaste', NULL, NULL),
('Dampati', 'દંપતી', 'Couple', NULL, NULL),
('dashina', 'દક્ષિણ', 'Direction(South)', NULL, NULL),
('dafatara', 'દફતર', 'Satchel', 'Office', NULL),
('daya', 'દયા', 'pity', NULL, NULL),
('daraji', 'દરજી', 'Tailor', NULL, NULL),
('dhushya', 'દશ્ય', 'Scene', NULL, NULL),
('Dahi', 'દહી', 'Curd', 'Yogard', NULL),
('dahi', 'દહીં', 'yogurt', NULL, NULL),
('daatan', 'દાતણ', 'Tooth-Brush', NULL, NULL),
('daadaa', 'દાદા', 'GrandFather', NULL, NULL),
('daadima', 'દાદીમા', 'GrandMother', NULL, NULL),
('davpez', 'દાવપેચ​', 'Tactics', NULL, NULL),
('Dishao', 'દિશાઓ', 'Directions', NULL, NULL),
('dukaan', 'દુકાન', 'Shop', 'Store', NULL),
('duniya', 'દુનિયા', 'World', NULL, NULL),
('duraga', 'દુર્ગ​', 'Fort', NULL, NULL),
('dushaman', 'દુશ્મન', 'Foe', NULL, NULL),
('dusht', 'દુષ્ટ', 'Villian', NULL, NULL),
('dev', 'દેવ', 'God', NULL, NULL),
('draaksh', 'દ્રાક્ષ', 'Grapes', NULL, NULL),
('dhandho', 'ધંધો', 'Occupation', NULL, NULL),
('ghatanasthaana', 'ધટનાસ્થાન', 'Scene(of some incident)', NULL, NULL),
('Dharm', 'ધર્મ', 'Caste', 'Religion', NULL),
('Dharmnirapeksha', 'ધર્મનિરપેક્ષ', 'Secular', '', NULL),
('Dhabu', 'ધાબું', 'Terrace', NULL, NULL),
('ghasalate', 'ધાસલેટ', 'Kerosene', NULL, NULL),
('Dhiraj', 'ધીરજ', 'Patience', NULL, NULL),
('Dhun', 'ધૂન', 'Tunes', NULL, NULL),
('dhodo', 'ધોળો', 'White', NULL, NULL),
('naffat', 'નફટ', 'stubborn', NULL, NULL),
('namuno', 'નમૂનો', 'Sample', NULL, NULL),
('Nasib', 'નસીબ​', 'Fortune\n', NULL, NULL),
('najuk', 'નાજુક', 'Tender', 'Delicate', NULL),
('nabud', 'નાબૂદ', 'Abolish', 'Eliminated', NULL),
('Narangi', 'નારંગી', 'Orange', NULL, NULL),
('nalayak', 'નાલાયક', 'Worthless', NULL, NULL),
('ninda', 'નિંદા', 'Abuse', NULL, NULL),
('Nikhalas', 'નિખાલસ​', 'Frank', NULL, NULL),
('Nimit', 'નિમિત', 'To be reason of', NULL, NULL),
('niyati', 'નિયતિ', 'Fate', 'Destiny', NULL),
('niraskshar', 'નિરક્ષર', 'lliterate', NULL, NULL),
('nirashakata', 'નિરક્ષરતા', 'illiteracy', NULL, NULL),
('nirarth', 'નિરર્થ', 'Useless', NULL, NULL),
('Nirbal', 'નિર્બલ', 'feeble', NULL, NULL),
('nivarutti', 'નિવૃત્તિ', 'Retirement', NULL, NULL),
('nishpakshapati', 'નિષ્પક્ષપાતી', 'Neutral', 'Impartial', NULL),
('nishfada', 'નિષ્ફળ', 'Failure', NULL, NULL),
('Nisarg', 'નિસર્ગ', 'Nature', NULL, NULL),
('nairutya', 'નૈઋત્ય', 'South-West', NULL, NULL),
('nauka', 'નૌકા', 'A boat for travelling', NULL, NULL),
('pankti', 'પંક્તિ', 'A line of a poem', NULL, NULL),
('panchang', 'પંચાંગ', 'calendar', NULL, NULL),
('pandar', 'પંદર', 'Fifteen', NULL, NULL),
('pakhavaadiyu', 'પખ​વાડીયું', 'Fortnight\n', NULL, NULL),
('pagaar', 'પગાર​', 'salary', 'Income', NULL),
('patana', 'પતન', 'fall', NULL, NULL),
('patthar', 'પથ્થર', 'Stone', NULL, NULL),
('padarth', 'પદાર્થ', 'object', NULL, NULL),
('pardesh', 'પરદેશ', 'Abroad', NULL, NULL),
('parakram', 'પરાક્રમ​', 'Feat', NULL, NULL),
('pari', 'પરી', 'Fairy', NULL, NULL),
('pavitra', 'પવિત્ર', 'Sacred', NULL, NULL),
('pashchim', 'પશ્ચિમ', 'West', NULL, NULL),
('paach', 'પાંચ​', 'Five', NULL, NULL),
('panjru', 'પાંજરું', 'Cage', NULL, NULL),
('pagal', 'પાગલ', 'Mad', NULL, NULL),
('pachu', 'પાછુ', 'Return', 'Back', 'Again'),
('paanu', 'પાનું', 'Page', NULL, NULL),
('pindo', 'પિંડો', 'Mass', NULL, NULL),
('pita', 'પિતા', 'Father', 'Dad', 'Daddy'),
('pichu', 'પીંછું', 'Feature', NULL, NULL),
('pith', 'પીઠ', 'back', 'return', NULL),
('pida', 'પીડા', 'pain', NULL, NULL),
('pido', 'પીળો', 'yellow', NULL, NULL),
('puchadi', 'પુંછડી', 'Tail', NULL, NULL),
('pushkal', 'પુષ્કળ', 'Abundance', 'Plenty', NULL),
('purva', 'પૂર્વ', 'East', NULL, NULL),
('pura', 'પૂર​', 'Flood', NULL, NULL),
('prakara', 'પ્રકાર​', 'kind', NULL, NULL),
('prakash', 'પ્રકાશ', 'Light', NULL, NULL),
('pratika', 'પ્રતિક', 'Symbol', NULL, NULL),
('pratham', 'પ્રથમ​', 'First', NULL, NULL),
('pramanma', 'પ્રમાણમાં', 'Accordingly', 'Relatively', NULL),
('pravash', 'પ્રવાસ', 'Journey', 'Trip', NULL),
('prasang', 'પ્રસંગ', 'Occasion', NULL, NULL),
('prem', 'પ્રેમ', 'love', NULL, NULL),
('pravaaha', 'પ્ર​વાહ​', 'Flow', NULL, NULL),
('paravangi', 'પ​ર​વાન​ગી', 'Permission', NULL, NULL),
('phatakaravu', 'ફટકારવું', 'Thrash', NULL, NULL),
('phanaas', 'ફણસ', 'Jackfruit', NULL, NULL),
('phuldani', 'ફુલદાની', 'Vase', NULL, NULL),
('phuvaaro', 'ફુવારો', 'Fountain', NULL, NULL),
('phutapatti', 'ફૂટપટ્ટી', 'Scale(Measure)', NULL, NULL),
('phuthali', 'ફૂથલી', 'Scandal', 'A defaming Incident', NULL),
('phlu', 'ફ્લૂ', 'influenza', NULL, NULL),
('bagalu', 'બગલું', 'stork', NULL, NULL),
('bachaavu', 'બચાવવું', 'Save', NULL, NULL),
('badami', 'બદામી', 'Brown', NULL, NULL),
('badha', 'બધા', 'All', 'Everyone', NULL),
('banaata', 'બનાત​', 'felt', NULL, NULL),
('banavelu', 'બનાવેલુ', 'Had made', NULL, NULL),
('baraf', 'બરફ', 'Snow', ' Ice', NULL),
('bali', 'બલિ', 'Sacrifice', NULL, NULL),
('bahar', 'બહાર', 'out', NULL, NULL),
('baisaheb', 'બાઈસાહેબ', 'Madam', NULL, NULL),
('baadha', 'બાધા', 'Restrictions', NULL, NULL),
('balataru', 'બાલતરુ', 'sapling', NULL, NULL),
('biju', 'બીજું', 'Second', NULL, NULL),
('baithaka', 'બેઠક', 'Seat', NULL, NULL),
('bevakuf', 'બેવકૂફ', 'Foolish', NULL, NULL),
('bhamaro', 'ભમરો', 'Beetle', NULL, NULL),
('bhaaI', 'ભાઈ', 'Brother', NULL, NULL),
('Bharat', 'ભારત', 'India(Country)', NULL, NULL),
('bhaari', 'ભારી', 'Heavy', NULL, NULL),
('bhukhro', 'ભૂખરો', 'Grey', NULL, NULL),
('bhuro', 'ભૂરો', 'blue', NULL, NULL),
('bhorpan', 'ભોળપણ', 'innocent', NULL, NULL),
('manjhuri', 'મંજૂરી', 'Sanction', NULL, NULL),
('Mandir', 'મંદિર', 'Temple', 'A Holy place for worship', NULL),
('maachar', 'મચ્છર', 'Mosquito', NULL, NULL),
('machali', 'મછલી', 'Fish', NULL, NULL),
('Madhamakhi', 'મધમાખી', 'Honeybee', NULL, NULL),
('manai', 'મનાઈ', 'Ban', 'Prohibited', 'Not Allowed'),
('mafat', 'મફત', 'Free', 'No charges', NULL),
('Mahabharat', 'મહાભારત', 'Hindu holy book-Mahabharat', NULL, NULL),
('mahasaagar', 'મહાસાગર', 'Ocean', NULL, NULL),
('maasa', 'માંસ​', 'Flesh', NULL, NULL),
('Makhi', 'માખી', 'HouseFly', NULL, NULL),
('maataa', 'માતા', 'Mother', 'Mom', 'Mummy'),
('Maya', 'માયા', 'Illusion', NULL, NULL),
('Mayalu', 'માયાળુ', 'Kind', NULL, NULL),
('mejabani', 'મિજબાની', 'Feast', NULL, NULL),
('mithu', 'મીઠું', 'Salt', NULL, NULL),
('mukh', 'મુખ', 'Face', NULL, NULL),
('Mukhavas', 'મુખવાસ', 'A mouth freshner', NULL, NULL),
('mukharvind', 'મુખારવિંદ', 'Face', NULL, NULL),
('mutthi', 'મુઠ્ઠી', 'Fist', NULL, NULL),
('Murkha', 'મુર્ખ​', 'Fool', NULL, NULL),
('mulya', 'મુલ્ય​', 'Value', NULL, NULL),
('mutrashaya', 'મૂત્રાશય​', 'Kidney', NULL, NULL),
('Mosama', 'મોસમ', 'Season', NULL, NULL),
('yash', 'યશ', 'Victory', 'Win', NULL),
('yaaddast', 'યાદદાસ્ત', 'Memory', NULL, NULL),
('yuvavastha', 'યુવાવસ્થા', 'youth', NULL, NULL),
('yogya', 'યોગ્ય', 'Right', NULL, NULL),
('yojanaa', 'યોજના', 'Scheme', NULL, NULL),
('rangabhumi', 'રંગભૂમિ', 'Theatre', NULL, NULL),
('randvip', 'રણદ્વીપ​', 'oasis', NULL, NULL),
(NULL, 'રતાનું', 'Yam', NULL, NULL),
('rada', 'રદ', 'Omit', NULL, NULL),
('ras', 'રસ', 'Interest', 'Juice', NULL),
('rakshas', 'રાક્ષસ', 'Devil', 'Monster', NULL),
('Rajadanda', 'રાજદંડ', 'Sceptre', NULL, NULL),
('reti', 'રેતી', 'Sand', NULL, NULL),
('rosh', 'રોષ', 'Pique', 'Anger', NULL),
('ladhavu', 'લડવું', 'Fight', NULL, NULL),
('lata', 'લતા', 'Climber(tree)', NULL, NULL),
('Labha', 'લાભ', 'Sake', NULL, NULL),
('loota', 'લૉટ​', 'Flour', NULL, NULL),
('lohi', 'લોહી', 'blood', NULL, NULL),
('vandan', 'વંદન', 'Salute', NULL, NULL),
('vadhavu', 'વઢવું', 'Scold', NULL, NULL),
('varu', 'વરુ', 'Wolf', NULL, NULL),
('varsh', 'વર્ષ', 'Year', NULL, NULL),
('varsha', 'વર્ષા', 'Rain', NULL, NULL),
('vasavu', 'વસવું', 'Inhabit', NULL, NULL),
('vastu', 'વસ્તુ', 'Thing', NULL, NULL),
('vasadi', 'વાંસળી', 'Flute', NULL, NULL),
('vagh', 'વાઘ', 'Tigers', NULL, NULL),
('vachradu', 'વાછરડું', 'Calf', NULL, NULL),
('vaad', 'વાડ', 'Fence', NULL, NULL),
('vadi', 'વાડી', 'A place for special occasions-Vadi', 'A open ground-Vadi', NULL),
('vadandani dukan', 'વાળંદની દુકાન', 'Saloon', NULL, NULL),
('vidhyalay', 'વિઘાલય', 'School', NULL, NULL),
('vicharavu', 'વિચારવું', 'think', NULL, NULL),
('vigyaana', 'વિજ્ઞાન', 'Science', NULL, NULL),
('vibhag', 'વિભાગ​', 'Section', NULL, NULL),
('viram', 'વિરામ', 'Rest', 'Breakdown', NULL),
('vivechak', 'વિવૅચક', 'Critic', NULL, NULL),
('vivek', 'વિવેક', 'Calm', NULL, NULL),
('vishe', 'વિશે', 'About', NULL, NULL),
('vishesh', 'વિશેષ', 'Special', 'Important', NULL),
('vishvas', 'વિશ્વાસ', 'Faith', NULL, NULL),
('vruksh', 'વૃક્ષ', 'Tree', NULL, NULL),
('vrudha', 'વૃધ્દ', 'Old', NULL, NULL),
('vechaan', 'વેચાણ', 'Sale', NULL, NULL),
('vetan', 'વેતન​', 'Income', 'salary', NULL),
('vyakati', 'વ્યક્તિ', 'Person', NULL, NULL),
('vyartha', 'વ્યર્થ', 'Vain', NULL, NULL),
('vyavasaay', 'વ્યવસાય', 'Occupation', NULL, NULL),
('sha-kiran', 'શ-કિરણ', 'X-ray', NULL, NULL),
('shaktishaali', 'શક્તિશાલી', 'Vigorous', 'Powerful', NULL),
('shan', 'શણ', 'Jute', NULL, NULL),
('shanivaar', 'શનિવાર', 'Saturday', NULL, NULL),
('shapatha', 'શપથ', 'oath', NULL, NULL),
('sharabat', 'શરબત', 'Syrup', NULL, NULL),
('shaant', 'શાંત', 'Calm', NULL, NULL),
('shakbhaji', 'શાકભાજી', 'Vegetables', NULL, NULL),
('shada', 'શાળા', 'School', NULL, NULL),
('shahi', 'શાહી', 'Ink', 'Loyal', NULL),
('shikaar', 'શિકાર', 'Kill', 'Hunt', NULL),
('shiksha', 'શિક્ષા', 'Education', NULL, NULL),
('shiyaada', 'શિયાળ', 'Fox', NULL, NULL),
('Shiyado', 'શિયાળો', 'Winter', NULL, NULL),
('shilpakar', 'શિલ્પકાર', 'Sculptor', NULL, NULL),
('shulka', 'શુલ્ક​', 'Fee', NULL, NULL),
('shetur', 'શૅતૂર', 'Mulberry', NULL, NULL),
('shekvu', 'શેકવું', 'To bake', NULL, NULL),
('sodh', 'શોધ', 'Search', NULL, NULL),
('sangharavu', 'સંઘરવું', 'To save', NULL, NULL),
('sangharsh', 'સંઘર્ષ', 'Struggle', NULL, NULL),
('saant', 'સંત', 'Saint', NULL, NULL),
('santosh', 'સંતોષ', 'Satisfy', NULL, NULL),
('sandesh', 'સંદેશ', 'Message', NULL, NULL),
('sandhi', 'સંધિ', 'Pact', NULL, NULL),
('sayog', 'સંયોગ', 'Factor', NULL, NULL),
('satyaghatana', 'સત્યઘટના', 'fact', NULL, NULL),
('satra', 'સત્ર', 'Term', NULL, NULL),
('satranta', 'સત્રાન્ત​', 'Terminal', NULL, NULL),
('samhaj', 'સમજ', 'Understanding', NULL, NULL),
('samarth', 'સમર્થ', 'Able', 'Can', NULL),
('samaj', 'સમાજ', 'Social', NULL, NULL),
('samudrayaatraa', 'સમુદ્રયાત્રા', 'Sail', NULL, NULL),
('sarakhu', 'સરખું', 'Same', NULL, NULL),
('salamat', 'સલામત', 'Safe', NULL, NULL),
('sastu', 'સસ્તું', 'Affortable', 'Cheap', NULL),
('saathe', 'સાથે', 'Accompany', 'Together', 'With'),
('saamarthya', 'સામર્થ્ય', 'Ability', 'Power', NULL),
('sarangi', 'સારંગી', 'fiddle', NULL, NULL),
('saaru', 'સારું', 'Good', NULL, NULL),
('sidhu', 'સીધું', 'Straight', NULL, NULL),
('sundar', 'સુંદર', 'Fair', 'Beautiful', NULL),
('sutra', 'સુત્ર', 'Axiom', 'Formula', NULL),
('suvidhao', 'સુવિઘાઓ', 'Facility', NULL, NULL),
('Surya', 'સૂર્ય', 'Sun', NULL, NULL),
('stri', 'સ્ત્રી', 'Female', 'Women', NULL),
('spasht', 'સ્પષ્ટ', 'obvious', NULL, NULL),
('svatantra', 'સ્વતન્ત્ર​', 'Free', NULL, NULL),
('hazaar', 'હજાર', 'Thousand', NULL, NULL),
('harsh', 'હર્ષ', 'Happiness', 'Joy', NULL),
('halesu', 'હલેસું', 'oar', NULL, NULL),
('ha', 'હા', 'Yes', NULL, NULL),
('haak', 'હાક', 'To Call', NULL, NULL),
('hajari', 'હાજરી', 'Attend', 'Presence', NULL),
('hu', 'હું', 'I', 'Myself', NULL),
('hoshiyaar', 'હોશિયાર​', 'Clever', 'Intelligent', NULL),
('shetra', '‌‌‌‌ક્ષેત્ર', 'Scope', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
