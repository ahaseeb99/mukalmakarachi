-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2021 at 05:16 PM
-- Server version: 5.7.34-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mukalama_ows_muk`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) NOT NULL,
  `title` text CHARACTER SET utf8mb4 NOT NULL,
  `english` text CHARACTER SET utf8mb4 NOT NULL,
  `slug` text NOT NULL,
  `thumbnail` text,
  `des` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `title`, `english`, `slug`, `thumbnail`, `des`, `created_at`, `updated_at`) VALUES
(6, 'ناصر کاظمی', 'Nasir Kazmi', 'nasir-kazmi', '/storage/files/1/5qd6DUC6Bv70rLBIhoRcn2c5uyCSDlzDA2vl27Vl.png', NULL, '2021-05-03 11:51:41', '2021-05-03 11:51:41'),
(7, 'سبوحہ خان', 'Khan', 'khan', '/storage/files/1/5qd6DUC6Bv70rLBIhoRcn2c5uyCSDlzDA2vl27Vl.png', NULL, '2021-05-03 11:52:29', '2021-05-03 11:52:29'),
(8, 'حسن منظر', 'Hassan Manzar', 'hassan-manzar', '/storage/files/1/5qd6DUC6Bv70rLBIhoRcn2c5uyCSDlzDA2vl27Vl.png', NULL, '2021-05-03 11:53:16', '2021-05-03 11:53:16'),
(9, 'سعادت حسن منٹو', 'Saad', 'saad', '/storage/files/1/5qd6DUC6Bv70rLBIhoRcn2c5uyCSDlzDA2vl27Vl.png', 'des', '2021-05-05 03:48:15', '2021-05-05 03:48:15'),
(10, '2مبین مرزا', 'Mubeen Mirza', 'mubeen-mirza', '/storage/files/1/download.jpg', NULL, '2021-05-10 09:35:42', '2021-05-10 14:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` text,
  `des` text NOT NULL,
  `english` text,
  `slug` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `des`, `english`, `slug`, `date`, `category_id`, `author_id`, `thumbnail`, `created_at`, `updated_at`) VALUES
(2, 'خواب دیکھنے والا', '<p>مائی ہاجراں نے ہاتھ کی ہتھیلی پر کچھ گلاب کی پتیاں ڈالیں پھر زور کی پھونک مار کر انھیں اُڑا دیا۔ ایک دو سرخ پتیاں ہتھیلی پر رہیں۔ غور سے ان کو دیکھتے ہوئے مائی نے کہا &hellip; &lsquo;&lsquo;لو جی اس بار اتوار ہی راجا اتوار ہی وزیر &hellip; سارا سال بارش خوب ہوگی &hellip; چاول، کنک، گنا، کپاس کی کمی نہیں &hellip; پر کالے رنگ کو ہاری رہے &hellip; ماش، کودا، تل، لوہا &hellip; ان کی قیمتوں میں کم کم ہوئے جائے۔ سفید رنگ کا کپڑا سستا &hellip; کالے رنگ کا مہنگا &hellip; دھاتوں کے بیوپاری خوش &hellip; کیسر، ہلدی، کسم، لونگ، جاوتری بیچنے والے روئیں&hellip; &rsquo;&rsquo;</p>\r\n\r\n<p>مائی ہاجراں سال بھر میں ہونے والی فصلوں کا بیان تفصیل سے کرتی چلی تو اس کی چادر کا کونا کھینچ کر عبدالکریم بولا&hellip; &lsquo;&lsquo;مائی جی &hellip; اماں پھول واری مجھے فصلوں سے کیا لینا دینا &hellip; اچھی ہوں یا بری &hellip; مجھے ارزانی گرانی سے کیا &hellip; مندا ہو کہ ہن برسے، ہمیں بھرے گودام سے کچھ تعلق نہیں &hellip;&rsquo;&rsquo;</p>\r\n\r\n<p>مائی پھول واری نے آنکھیں کھولے بغیر بڑے جلال سے کہا &hellip; &lsquo;&lsquo;حق اللہ&hellip; کبھی یہ ہوا کہ جاٹ ہوکر دھرتی سے ناتا ٹوٹے &hellip; کبھی یہ ہوا کہ ماں بن کر اولاد بھولے کبھی یہ دیکھا مرد ہو کر عورت سے ناتا ٹوٹے &hellip;؟&rsquo;&rsquo;</p>\r\n\r\n<p>&lsquo;&lsquo;میں جاٹ نہیں ہوں ماں جی &hellip; گجر ہوں گجر &hellip; پہلے بہت گائیں بھینسیں تھیں میرے باپ کے زمانے میں، اب صرف تین بھینسیں ہیں اور ایک گائے &hellip; ان کا دودھ ڈرموں میں ڈال کر لاہور لے جاتا ہوں &hellip; گرمی ہو تو ڈر لگا رہتا ہے کہ کہیں راستے میں دودھ نہ پھٹ جائے &hellip; سردی ہو تو پولیس والے کا خطرہ رہتا ہے &hellip; میں تو ڈر کا، خوف کا پالا ہوا ہوں &hellip; مجھے کیا لینا جنس اجناس سے&hellip;&rsquo;&rsquo;</p>\r\n\r\n<p>مائی ہاجراں نے آنکھ کھولی&hellip;کانچ کی بنی آنکھیں ہری نیلی گویا اس سے بھی پرے دیکھنے لگیں۔</p>\r\n\r\n<p>&lsquo;&lsquo;تو پھر آ گیا عبدالکریم &hellip; بابا جا کر دودھ بیچ میرے پاس تیرے سوال کا جواب کوئی ناں&rsquo;&rsquo;</p>\r\n\r\n<p>&lsquo;&lsquo;ہاں جی &hellip; آ گیا!&rsquo;&rsquo;</p>\r\n\r\n<p>&lsquo;&lsquo;تجھے منع کیا تھا کہ ہماری جھونپڑی میں تیرے سوال کا جواب نہیں &hellip; ہم تو گیہوں، جو، چنا، مشک، کافور، سوت کپاس کا اُتار چڑھاؤ بتاتے ہیں &hellip; تیرے چوپائے اس سال سستے ہوں گے پر ابھی ابھی خرید لے اگلی سنکرانت جب سورج نئے برج میں جائے گا بھاؤ بھینس، گائے کا پھر بڑھے گا &hellip; پھر خریدنا مشکل ہوگا۔&rsquo;&rsquo;</p>\r\n\r\n<p>&lsquo;&lsquo;اماں ہاجراں &hellip; میں یہاں کے نفع نقصان کا نہیں سوچتا &hellip;&rsquo;&rsquo;</p>\r\n\r\n<p>اماں نے اپنے پاس پڑی چھڑی اٹھا کر زو ر سے زمین پر ماری اور قہر سے بولی &hellip; &lsquo;&lsquo;لے بچڑا یہاں کاپوچھتا ہے تو پوچھ لے &hellip; شہرت، عزت &hellip;رزق، محبت&hellip; جو چاہے ترنت ملے پر تو پوچھتا ہے مابعد کی &hellip; جنت کی &hellip; عورت ٹھہری عارف دنیا &hellip; میرا کام کیا جنت سے؟ &hellip; میں&hellip;! بتا میں دنیا کا بندہ میرا کیا کام بہشت سے؟&rsquo;&rsquo;</p>\r\n\r\n<p>عبدالکریم نے سر جھکا کر جیسے اپنے آپ سے کہا &hellip; &lsquo;&lsquo;وہ بھی یہی کہتی ہے مائی پھول واری &hellip; وہ کہتی ہے &hellip; قرآن میں تو ہر جگہ لکھا ہے جنت میں حوریں ہوں گی &hellip; عورتوں کا تو کہیں ذکر ہی نہیں پھر چادر تان کر پڑی رہتی ہے اور روتی ہے کہ میں تو دوزخ میں جاؤں گی اور تو جنت میں؟ &hellip; ہمارا تو ملاپ آگے چل کر ہوگا ہی نہیں۔&rsquo;&rsquo; مائی پھول واری کچھ دیر ہنستی رہی پھر اپنا سلیپر اٹھا کر اس نے عبدالکریم کے کندھے پر مارا اور بولی &hellip; &lsquo;&lsquo;لے اب اٹھ جا &hellip; جو کاروبار میں مندا اچھا پوچھنا ہو تو میرے پاس آ جانا &hellip; ایسے اُلٹے سیدھے سوالوں کو نہیں پوچھا کرتے &hellip;&rsquo;&rsquo;</p>\r\n\r\n<p>عبدالکریم بولا&hellip; &lsquo;&lsquo;پر میری گھر والی نے تو کبھی کسی کا دھیلی بھر نقصان نہیں کیا۔ اپنے جی کی کوئی خواہش پوری نہیں کی&hellip; عشا کو فجر سے جا&nbsp; ملایا&hellip; بندگی میں کسرنہیں، دوسروں کی سیوا میں ڈنڈی نہیں ماری پھر پھر&hellip; وہ جنت میں کیوں نہیں جائے گی&hellip;؟&rsquo;&rsquo;</p>\r\n\r\n<p>مائی ہاجراں نے دونوں ہاتھوں میں پھول کی پتیاں لے کر اُچھالیں اور پھر گرج کر بولی &hellip; &lsquo;&lsquo;دیکھ بچڑا جو میں تجھے حقیقت بتا بھی دوں تو تیری سمجھ میں کیا آئے گی؟ &hellip;گجر کو دودھ بیچنے سے کام، تجھے کیا لگے عورت جنت میں جائے گی کہ نہیں &hellip; تو نے کیا لینا ہے جنت سے &hellip; اپنا آرام سے رہ &hellip; نیک عمل کیے جا آپی تو جنت میں بیٹھا حوروں سے پنکھے جھلائے گا &hellip; بس ایک بات یاد رکھ &hellip; چیت جائے بساکھ &hellip; مینہ بر سے سوکھا پڑے &hellip; دودھ میں پانی نہیں ملانا &hellip; ملاوٹ نہیں کرنی عبدالکریم &hellip; نہ بات میں نہ ہاتھ سے &hellip;&rsquo;&rsquo; مائی ہاجراں نے کاٹن کی ساڑھی کا پلا سر پر درست کیا۔</p>\r\n\r\n<p>پھر آنکھیں بند کر لیں اور اس کے لب خفی ذکر سے لرزنے لگے &hellip; عبدالکریم نے حوصلہ پا کر اس کے پاؤں&nbsp; پکڑ لیے &hellip; &lsquo;&lsquo;میں نے تو دو سال ہوئے پانی کی بوند بھی نہیں ڈالی دودھ میں &hellip; صبح تڑکے موٹر سائیکل پر کین بھر کر جاتا ہوں تو چل کر میرے گاہکوں سے پوچھ لے اماں پھول واری &hellip; جو کسی کو شکایت ہو &hellip;&rsquo;&rsquo;</p>\r\n\r\n<p>اماں نے پاؤں کھینچ کر پیچھے کر لیا &hellip; &lsquo;&lsquo;جا بچڑا جا میں تیرے سوال کا جواب دے چکی &hellip; عورت جنت میں نہیں جائے گی&nbsp; &hellip; بس گنتی شنتی کی عورتیں ہوں &hellip; نیک مردوں کا سایہ بن کر &hellip; نبیوں کی مائیں&hellip; نبی کے ناتے سے زندہ رہنے والی &hellip; باقی سب ہاویہ زاویہ ہے لے بچڑا &hellip; جا اب کام لگ عورت عارف ِدنیا ہے اور مرد عارفِ مولا &hellip; یہ بات سمجھ جا۔&rsquo;&rsquo;</p>\r\n\r\n<p>&lsquo;&lsquo;آپ کو معلوم ہے آپ جانتی ہیں &hellip; آپ اتنی کرنی والی ایویں تو مشہور نہیں ہوگئیں &hellip; آپ میرے سوال کا شافی جواب دیں بی بی پھول واری &hellip; میری بیوی جنت میں کیوں نہیں جائے گی&hellip;؟ آپ مجھے گستاخی پر نہ اُکسائیں۔ میں بار بار ایک ہی بات کا رٹا نہیں لگانا چاہتا۔&rsquo;&rsquo;</p>\r\n\r\n<p>اماں پھول واری نے دوپٹے سے منھ پونچھا اور بولی &hellip; &lsquo;&lsquo;دیکھ بچڑا عبدالکریم اللہ بڑی حکمت سے دنیا چلاتا ہے &hellip;کسی کے ذمے کچھ، کسی کے ذمے کچھ &hellip; کس کی کوئی ذمہ داری &hellip; کسی کے لیے کوئی اور خدمت &hellip; کوئی اصیل ذاتی کام کیے جائے &hellip; کسی کمیرے کو اُجرت پر لگا لے &hellip; چنگا چوکھا دے &hellip; پر کمیرا اکڑتا جائے &hellip; کچھ اس کے ٹہیلے کہ ہر دم نظر آگے &hellip; کچھ روزینیے لے کر دھونس دیں &hellip; کچھ صرف روٹی کپڑے پر راضی، کچھ تاج دار دروازے چوکی پر پہرا دلوائیں، کچھ پرور دے اِدھر سے اُدھر لگائی بجھائی کرنے والے &hellip; اللّٰہ کا نظام بچڑا بڑی حکمت سے چلتا ہے &hellip; کسی سے پوچھ گچھ ہوتی رہتی ہے، کچھ بے کام دندناتے پھرتے ہیں۔ ہم جیسے چاکر صرف اوپری کاموں کے لیے ہوتے ہیں۔ بھاگ دوڑ بڑی پر ذمے داری صفر۔ جو کان میں پڑ گئی سب کو جا سنائی، بھیا ہم لوگ ٹھکانے دار نہیں ہوتے جو اس کے اندر کی خبر رکھیں &hellip; بس اتنا سن رکھا ہے کہ عورت جنت میں نہیں جائے گی سو تجھ کو بتا دیا &hellip; اب تو مانے یا نہ مانے تیری مرضی &hellip; ہم تو اتنا جانتے ہیں کہ جنت میں حوریں ہوں گی &hellip; عورت کہیں کہیں &hellip; ذکر ہے ان معدودے چند عورتوں کا &hellip; جو کسی نبی کے حوالے سے قابل ذکر ہوئیں۔&rsquo;&rsquo;</p>\r\n\r\n<p>مائی پھول واری چپ ہوگئی تو عبدالکریم اُٹھ کر دروازے میں جا بیٹھا &hellip; گرمی شدت پکڑ رہی تھی۔ سامنے چھوٹا سا قبرستان تھا جس میں دیہاتی لوگوں کی کچی پکی قبریں تھیں۔ کسی کسی قبر پر تازہ چھڑکاؤ بھی تھا۔ نمبردار کی دادی سب سے نمایاں قبر کے اندر دفن تھی۔ اس پر لوح بھی سنگ مرمر کا تھا اور سنگ تربت بھی گہرے سنگ مرمر کی تھی &hellip; ان ہی قبروں سے رات کے وقت مائی ہاجراں پھول واری گلاب کی پتیاں اپنی جھولی میں بھر کر لے آتی تھی۔ جس روز کوئی نیا ڈولا قبر میں اُترتا&nbsp; مائی ایک دیا جلا کر رات گئے قبر پر پہنچتی اور دیر تک بیٹھی جانے والے سے باتیں کیا کرتی &hellip; اماں پھول واری کی حرکتوں سے گورکن واقف تھے&hellip; وہ اماں کے تکیے کی طرف کمر کرکے نہیں بیٹھتے تھے۔ ان کا خیال تھا کہ ایسی کرنی والی عورت جو رات گئے قبرستان میں آنے&nbsp; کا حوصلہ رکھتی ہو معمولی ذی روح نہیں ہوسکتی۔</p>\r\n\r\n<p>اماں پھول واری کا تکیہ ذرا اونچائی والے ٹبّے پر تھا۔ یہاں سے قبرستان کا منظر صاف دکھائی دیتا تھا۔ عبدالکریم اماں کے پاس سے اٹھ کر دروازے میں جا بیٹھا &hellip; گرمی روز افزوں تھی، گرمی کا پیام بر بن کر ہوا قبرستان میں جھول رہی تھی۔ گویا کچی قبروں کو مٹ جانے کا حکم مل گیا تھا &hellip; اونچائی کی وجہ سے نمبردار کی دادی کا روضہ ہوا کی راہ میں حائل تھا &hellip;</p>\r\n\r\n<p>عبدالکریم نے دل میں سوچا &hellip; انسان ہر وقت فکر میں کیوں مبتلا رہتا ہے؟ کچی قبر رہے نہ رہے &hellip; انسان خود یہاں وہاں آگے پیچھے رہے نہ رہے &hellip; وہ دودھ کی ڈرم بھرتا &hellip; کچے راستے پر موٹر سائیکل چلاتا &hellip; سوچتا چلا جاتا &hellip; اسے اپنی فکر نہ تھی بس اسے خوف تھا کہ کہیں &hellip; اس کی بیوی موت کے بعد اسے مل نہ سکے گی۔ عبدالکریم کو یہ تو پورا یقین تھا کہ وہ جنت میں جائے گا لیکن بیوی نے اس کے دل میں شبہ ڈال دیا تھا کہ وہ بہشت میں نہیں ہوگی &hellip; قبرستان کی طرف منھ کر کے اس نے سوچا بھلا یہ بھی کوئی سوچ ہے، کوئی فکر ہے &hellip; سارا وقت اسے بس یہی فکر ستاتا کہ بتول مرنے کے بعد کہاں رہے گی&hellip;؟</p>\r\n\r\n<p>جنت میں کہ جہنم میں؟</p>\r\n\r\n<p>برزخ میں کہ یہیں کہیں کسی بدروح کی شکل میں بھٹکتی ٹکریں مارتی سایوں میں ڈھلتی اندھیروں میں ڈوبتی ابھرتی، کسی درخت پر بیٹھی، کسی قبر پر چڑھی &hellip;؟ یہ تصورات اس کے لیے ہول ناک تھے۔</p>\r\n\r\n<p>عبدالکریم کو یہ فکر کوئی ایک دن میں نصیب نہ ہوا &hellip; وہ مسجد میں جمعے کی نماز ضرور پڑھتا، وہیں سے اس نے جنت اور دوزخ کی تشویش حاصل کی تھی &hellip; اسے ہولے ہولے یقین آ چلا تھا کہ بتول کو جنت نصیب نہیں ہوگی اور وہ تھوہروں میں بھٹکتی، کھولتے پانی پیتی دوزخ میں کہیں چلاتی پھرے گی &hellip; &lsquo;&lsquo;سرمد&hellip; اوئے سرمدا&hellip; پترا &hellip; سرمدا کہاں ہے تو&hellip; بتا تو سہی کہاں ہے؟ اِدھر تو راستہ بھی نہیں ملتا سرمد۔&rsquo;&rsquo;</p>\r\n\r\n<p>اماں پھول واری کی طرف پشت کیے عبدالکریم قبرستان کی جانب خالی نظروں سے دیکھ رہا تھا۔ اسے تین سال پہلے کی وہ رات یاد آئی جب وہ بتول کو بیاہ کر گاؤں لایا تھا۔ آدھی رات گئے بتول اٹھ کر باہر صحن میں چلی گئی تھی اور اپنے سات سالہ پچھ لگ بیٹے کے ساتھ سو رہی تھی جس وقت صبح کی اذان ہوئی اور عبدالکریم نے بتول کو اپنی&nbsp; چارپائی پر نہ پایا تو اچانک عبدالکریم کا سارا وجود بھونچکا رہ گیا &hellip; باہر نکل کر اس نے صحن میں دیکھا تمام گھر والے چارپائیوں پر اوندھے سیدھے بے سدھ لیٹے تھے۔ اس کی ماں جس کا سرکبھی ننگا نہ ہوتا وہ بے خبر پڑی تھی اور اس کا دوپٹہ فرش پر صبح کی ہوا میں رینگ رہا تھا۔ دلہن بتول سرخ لباس میں ملبوس تھی، اس کا دایاں بازو سرمد کے سر کے نیچے تھا اور سرمد نے اپنا سربتول کی گردن میں پھنسا رکھا تھا۔ اس منظر کو دیکھ کر عبدالکریم چپ چاپ اندر چلا گیا۔</p>\r\n\r\n<p>اس نے اپنی مرضی سے شادی کی تھی۔ شہر کی جانب دودھ سپلائی کرنے جاتا تو شہر کے شروع علاقے میں شکلا ً بے آباد چند بکھرے سے، بے رچے، گھروں کی آبادی آتی۔ ان ہی گھروں میں بتول اپنے باپ کے ساتھ سرمد کے اِردگرد گھومتی رہتی۔ پہلے تو عبدالکریم دودھ کی قیمت لیتا رہا پھر دوسرے چوتھے رقم پکڑنے لگا۔ ہولے ہولے اس نے دودھ کے پیسے وصول کرنے بند کر دیے۔ بتول نے سوال نہ کیا وہ بھی خاموش رہی اور اس کفالت کو خوشی سے منظور کر لیا۔ بتول کا ابا پتنگ باز تھا۔ چھوٹی سی دکان لب سڑک تھی جس میں ادھیل، دمڑچیل، تکل، کل چڑی پتنگوں کا بیوپار زیادہ تھا۔ آبادی سے دور بڑی پتنگیں نہ بکتی تھیں، چھوٹے بچے ہلکی قیمت کے گڈے، گڈیاں لے جاتے &hellip; بسنت سے پہلے ابا بہت مصروف ہوجاتا۔ وہ کانچ کا سفوف ابلے چاولوں میں ملا کر بڑی توجہ سے مانجھا بناتا اور ڈور پر ڈور سونتتا جاتا &hellip; پھر کل چڑی، ہلکے پتنگ بنا کر ان گنت چرخی چڑھی رنگ برنگی ڈوریں لے کر شاہ عالمی پہنچتا &hellip; سیر بھر گوشت چار روپے سے ایک سو دس روپے کے نرخ پر جا پہنچا لیکن ابا کی سدھ پتنگیں، چرخیاں زیادہ قیمت وصول نہ کر پاتیں۔ مانجھا بنانا، انٹی کرنا، چرخی پرڈور لپیٹنا بتول کے کام تھے۔ سرمد اور بتول بھاگ بھاگ کر اباّ کا کام کرتے پھر بھی ابا&nbsp; کو فکر رہتی کہ بتول جوان بھی ہے اور سدھ بھی اس کا سربندھ ہو جائے تو وہ سکھ کی نیند سو رہے۔ &lsquo;&lsquo;پھر تیرا کیا بھروسا۔&rsquo;&rsquo; وہ پتنگ کو کنیا کر کہتا &hellip; &lsquo;&lsquo;آ جائے گا تیرا وارث کہیں سے &hellip; تو تو ایسی پتنگ ہے بتول جو ذرا سی ہوا میں سدھ نہیں رہتی &hellip; کیا ہوا جو اللہ سائیں نے تیرا خصم سونت لیا &hellip; وہ&nbsp; اللہ بھیجے گا &hellip; تیرا کفیل &hellip; تیز ہوا ہو تو پتنگ اراٹے&nbsp; مارتی ہے &hellip; ہوا نہ چلے تو ہتھے سے اکھڑ جاتی ہے &hellip; مانگتی ہے تو ایسا مانگ جو نہ تیز ہوا ہو نہ بند بس اوپر ہی اوپر لے جائے &hellip;&nbsp; تارے کی طرح اڑائے آسمان میں&hellip;&rsquo;&rsquo;</p>\r\n\r\n<p>بتول خاموش رہتی۔</p>\r\n\r\n<p>عبدالکریم بھی چپ چاپ رہا کرتا لیکن اس کے جسم میں خوشی کی کونپلیں ایسے آئیں تھیں جیسے بہار کے دِنوں میں انارکی سوکھی شاخوں میں زندگی کے آثار پیدا ہوتے ہیں۔</p>\r\n\r\n<p>عبدالکریم نے بتول کی جانب بڑھنے کے لیے سرمد کا متوازی راستہ تلاش کیا۔ وہ شہر سے ٹافیاں کھلونے، لنڈے کی جینز قمیص، کاپیاں پنسلیں لانے لگا، رفتہ رفتہ دودھ سپلائی کرنے کے بعد وہ سرمد سے باتیں کرنے بیٹھ جاتا۔ بتول کام کرتی رہتی کبھی کبھی ابا بھی اس گفتگو میں شامل ہو جاتا۔</p>\r\n\r\n<p>&nbsp;</p>', 'Dream', 'dream', '2021-05-04 19:00:00', 16, 9, '/storage/files/1/user.jpg', '2021-05-05 00:05:59', '2021-05-05 13:08:02'),
(3, 'ایک دو اور تیسرا ‘‘وہ’’', '<p>سیڑھیاں گھنٹیوں کی آواز کے ساتھ اوپر نیچے ہو رہی تھیں اور یہ نوجوان لڑکا &hellip; جاوے پتھر کی اُن سیڑھیوں پہ پڑا تھا۔</p>\r\n\r\n<p>سگاں ابھی نہیں آئی تھی۔ اسی لیے جاوے باہر انتظار میں سیڑھیوں پر ہی سوگیا مگر سیڑھیاں ہلے جا رہی تھیں اور گھنٹیوں کی آواز رکتی نہیں تھی۔ اس آواز کے ساتھ شاید سیڑھیوں کی ڈوریاں بندھی ہوں گی تو وہی ڈوریاں کھینچ کے وہ انھیں اوپر اٹھا لیتی اور پھر ڈھیل دے کے گرا دیتی تھی۔ اچھلتے گرتے جاوے کا سر درد کرنے لگا، پسلیاں ٹوٹنے کو ہوئیں۔ پتھر کی کاٹتی ہوئی سیڑھیوں پر دہرا ہو کے وہ آواز کے رخ منھ کرکے پکارا، &rsquo;&rsquo;سگاں!&lsquo;&lsquo; مگر یہ پکار اتنی بھی نہ اٹھی کہ وہ خود سن لیتا اس نے پھر آواز دی، &lsquo;&lsquo;سگ گاںںں!&rsquo;&rsquo;</p>\r\n\r\n<p>ایک مرد کی بھاری آواز سنائی دی &lsquo;&lsquo;جاوے! ہاں ڑے دوس! پروانئیں بچہ&hellip;بولو۔ ابی ہم آگیاؤں۔&rsquo;&rsquo;</p>\r\n\r\n<p>اُس نے آواز سن لی۔ یہ اُسی شیدی کی آواز تھی جسے وہ سوچتا رہا تھا مگر شیدی ابھی نظر نہیں آیا تھا۔جاوے نے کوشش کرکے آنکھیں کھول دیں۔</p>\r\n\r\n<p>اس وقت رات تھی یا شاید دور دور تک بادل گھرے ہوئے تھے یا شاخیں ہوں گی پتوں سے ڈھکی، جو جاوے پہ جھک آئی تھیں۔ ان شاخوں یا گھرے ہوئے بادلوں یا رات کی طرف یہ لڑکا جاوے اٹھتا تھا پر اُن تک پہنچ نہیں پاتا تھا۔ اُس نے سنا گھنٹیوں کی آواز برابر آ رہی تھی لیکن جیسا پہلے تھا کہ سیڑھیاں تھیں تو اب سیڑھیاں کہیں نہیں تھیں۔ جاوے ایک تکلیف دہ بستر پر مڑا تڑا پڑا تھا اور بستر ہلتا تھا۔ حرکت میں تھا جیسے کوئی سواری ہو۔ کیا یہ کوئی سواری ہے؟ اور گھنٹیوں کے ساتھ کیا کوئی اور بھی آواز آتی ہے؟</p>\r\n\r\n<p>مرد کی وہی بھاری آواز سنائی دی، &lsquo;&lsquo;روکو۔ اُوٹھ روکو۔ روکوڑے اُوٹھ، گوارکش! تمھارا اوکات میں چاکو مارے!&rsquo;&rsquo; سواری رک گئی۔ گھنٹی کی آواز بھی رک گئی پر دور کہیں یہ آواز چلتی رہی۔</p>\r\n\r\n<p>اندھیرے میں سے کسی بہت ہی گھٹیا آدمی نے غصے سے پوچھا، &lsquo;&lsquo;کیا بات ہے سالا شیدی!؟ کیوں شور کرتا ہے؟&rsquo;&rsquo;</p>\r\n\r\n<p>&lsquo;&lsquo;ی کرتا اور بلبلائے جاتا تھا۔ قابو میں نہیں آرہا تھا۔</p>', 'ak do', 'ak-do', '2021-05-04 19:00:00', 16, 9, '/storage/files/1/user.jpg', '2021-05-05 00:06:56', '2021-05-05 13:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text NOT NULL,
  `english` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `slug`, `english`, `created_at`, `updated_at`) VALUES
(15, 'غزل', 'ghazal', 'Ghazal', '2021-05-04 21:33:47', '2021-05-04 22:06:08'),
(16, 'نظم', 'nazm', 'Nazm', '2021-05-04 21:42:15', '2021-05-04 21:42:15'),
(17, 'خاکہ', 'khaka', 'Khaka', '2021-05-05 00:27:27', '2021-05-05 00:27:27'),
(18, 'افسانہ', 'afsana', 'Afsana', '2021-05-05 00:27:43', '2021-05-05 00:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `english` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `english`, `slug`, `created_at`, `updated_at`) VALUES
(28, 'ڈرامہ', 'Drama', 'drama', '2021-05-03 01:32:58', '2021-05-07 03:43:37'),
(29, 'ناول', '', 'nowal', '2021-05-03 01:34:17', '2021-05-03 01:34:17'),
(30, 'فکشن', '', 'Fiction', '2021-05-03 01:34:55', '2021-05-03 01:34:55'),
(31, 'رسالے', '', 'Magazines', '2021-05-03 01:35:17', '2021-05-03 01:35:17'),
(32, 'ترجمہ', '', 'Translation', '2021-05-03 01:35:46', '2021-05-03 01:35:46'),
(35, 'خاکے', 'Khake', 'khake', '2021-05-03 01:37:11', '2021-05-04 10:12:20'),
(36, 'افسانہ', 'Afsana', 'afsana', '2021-05-04 10:13:20', '2021-05-04 10:13:20'),
(38, 'مضامین', 'Essays', 'essays', '2021-05-10 13:41:13', '2021-05-10 13:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `fname` text COLLATE utf8_unicode_ci NOT NULL,
  `lname` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Owais', 'Azam', '12312312', 'iamowaisazam@gmail.com', 'owais123', '2021-05-09 15:20:24', '2021-05-09 15:20:24'),
(2, 'Owais', 'Azam', '12312312', 'iamowaisazam@gmail.com', 'owais123', '2021-05-09 15:21:03', '2021-05-09 15:21:03'),
(3, 'Owais', 'Azam', '12312312', 'iamowaisazam@gmail.com', 'owais123', '2021-05-09 15:21:52', '2021-05-09 15:21:52'),
(4, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:41:51', '2021-05-10 16:41:51'),
(5, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:41:54', '2021-05-10 16:41:54'),
(6, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:41:58', '2021-05-10 16:41:58'),
(7, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:01', '2021-05-10 16:42:01'),
(8, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:04', '2021-05-10 16:42:04'),
(13, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:16', '2021-05-10 16:42:16'),
(14, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:20', '2021-05-10 16:42:20'),
(15, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:24', '2021-05-10 16:42:24'),
(16, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:27', '2021-05-10 16:42:27'),
(17, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:32', '2021-05-10 16:42:32'),
(18, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:37', '2021-05-10 16:42:37'),
(19, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:43', '2021-05-10 16:42:43'),
(20, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:51', '2021-05-10 16:42:51'),
(21, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:55', '2021-05-10 16:42:55'),
(22, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:42:58', '2021-05-10 16:42:58'),
(23, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:01', '2021-05-10 16:43:01'),
(24, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:03', '2021-05-10 16:43:03'),
(25, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:05', '2021-05-10 16:43:05'),
(26, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:07', '2021-05-10 16:43:07'),
(27, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:09', '2021-05-10 16:43:09'),
(28, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:10', '2021-05-10 16:43:10'),
(29, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:12', '2021-05-10 16:43:12'),
(30, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:13', '2021-05-10 16:43:13'),
(31, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:15', '2021-05-10 16:43:15'),
(32, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:17', '2021-05-10 16:43:17'),
(33, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:19', '2021-05-10 16:43:19'),
(34, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:21', '2021-05-10 16:43:21'),
(35, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:24', '2021-05-10 16:43:24'),
(36, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:27', '2021-05-10 16:43:27'),
(37, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:31', '2021-05-10 16:43:31'),
(38, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:34', '2021-05-10 16:43:34'),
(39, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:37', '2021-05-10 16:43:37'),
(40, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:41', '2021-05-10 16:43:41'),
(41, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:44', '2021-05-10 16:43:44'),
(42, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:46', '2021-05-10 16:43:46'),
(43, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:49', '2021-05-10 16:43:49'),
(44, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:51', '2021-05-10 16:43:51'),
(45, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:53', '2021-05-10 16:43:53'),
(46, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:55', '2021-05-10 16:43:55'),
(47, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:57', '2021-05-10 16:43:57'),
(48, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:43:58', '2021-05-10 16:43:58'),
(49, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:00', '2021-05-10 16:44:00'),
(50, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:01', '2021-05-10 16:44:01'),
(51, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:02', '2021-05-10 16:44:02'),
(52, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:03', '2021-05-10 16:44:03'),
(53, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:05', '2021-05-10 16:44:05'),
(54, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:06', '2021-05-10 16:44:06'),
(55, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:07', '2021-05-10 16:44:07'),
(56, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:08', '2021-05-10 16:44:08'),
(57, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:09', '2021-05-10 16:44:09'),
(58, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:10', '2021-05-10 16:44:10'),
(59, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:11', '2021-05-10 16:44:11'),
(60, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:12', '2021-05-10 16:44:12'),
(61, 'Test', 'User', '0123654789', 'mairakamal02@gmail.com', 'Nice Website. Good Work.', '2021-05-10 16:44:13', '2021-05-10 16:44:13'),
(62, 'Ahsun', 'Mirza', '121212122', 'admin@mailinator.com', 'Testing', '2021-05-12 16:03:47', '2021-05-12 16:03:47'),
(63, 'talha', 'mansoor', '03232818809', 'zmarkfraft@gmail.com', 'I AM TYPING', '2021-05-24 20:44:07', '2021-05-24 20:44:07'),
(64, 'talha', 'mansoor', '03232818809', 'zmarkfraft@gmail.com', 'I AM TYPING', '2021-05-24 20:44:08', '2021-05-24 20:44:08'),
(65, 'talha', 'mansoor', '03232818809', 'zmarkfraft@gmail.com', 'I AM TYPING', '2021-05-24 20:44:09', '2021-05-24 20:44:09'),
(66, 'Sanford Johnston V', 'Sanford Johnston V', '17755862839', 'Betsy2@yahoo.com', 'generating', '2021-06-14 19:29:39', '2021-06-14 19:29:39'),
(67, 'Alfred Conn IV', 'Alfred Conn IV', '14085653519', 'frank-der-zauberer@gmx.de', 'Realigned', '2021-06-17 22:27:52', '2021-06-17 22:27:52'),
(68, 'Stephen Casper', 'Stephen Casper', '18481015311', 'kerley.candice@gmail.com', 'rich', '2021-06-22 06:15:58', '2021-06-22 06:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filemanagers`
--

CREATE TABLE `filemanagers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `extension` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `filemanagers`
--

INSERT INTO `filemanagers` (`id`, `title`, `extension`, `name`, `created_at`, `updated_at`, `user_id`, `size`, `url`) VALUES
(29, 'logo1', 'png', 'logo11033246842', '2021-02-01 05:11:00', '2021-02-01 05:11:00', 1, '8849', 'admin/upload/logo11033246842.png'),
(30, 'favicon', 'png', 'favicon32155618', '2021-02-01 05:19:56', '2021-02-01 05:19:56', 1, '2536', 'admin/upload/favicon32155618.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `english` text NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `des` text,
  `category_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `price` double NOT NULL DEFAULT '0',
  `pdf_price` double NOT NULL DEFAULT '0',
  `thumbnail` text,
  `pdf` text,
  `type` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `english`, `title`, `slug`, `des`, `category_id`, `author_id`, `price`, `pdf_price`, `thumbnail`, `pdf`, `type`, `created_at`, `updated_at`) VALUES
(48, 'Musawari Aur Musawir', 'مصوری اور مصور', 'musawari-aur-musawir', 'des46', 35, 8, 700, 500, '/storage/files/1/book1.jpg', '/storage/files/1/pdf.pdf', 'book', '2021-05-03 08:53:55', '2021-05-18 14:35:50'),
(49, 'Char Jadid Musawir', 'چار جدید مصور', 'char-jadid-musawir', NULL, 28, 8, 900, 400, '/storage/files/1/book1.jpg', '/storage/files/1/pdf.pdf', 'book', '2021-05-03 09:43:47', '2021-05-08 15:26:38'),
(51, 'Mukalama 26', 'مکالمہ 26', 'mukalama-26', NULL, 35, NULL, 1500, 20, '/storage/files/1/book1.jpg', '/storage/files/1/Scribble Flyer 1.pdf', 'magazine', '2021-05-03 09:53:32', '2021-05-10 06:43:35'),
(52, 'Mat Sehal Humay Jano', 'مت سہل ہمیں جانو', 'mat-sehal-humay-jano', NULL, 28, 9, 800, 700, '/storage/files/1/book1.jpg', '/storage/files/1/pdf.pdf', 'book', '2021-05-03 11:00:38', '2021-05-10 01:07:25'),
(53, 'Mukalama 24', 'مکالمہ 24', 'mukalama-24', NULL, NULL, NULL, 250, 0, '/storage/files/1/book1.jpg', NULL, 'magazine', '2021-05-03 11:13:27', '2021-05-04 12:16:30'),
(54, 'Mukalama 25', 'مکالمہ25', 'mukalama-25', NULL, NULL, NULL, 250, 0, '/storage/files/1/book1.jpg', '/storage/files/1/pdf.pdf', 'magazine', '2021-05-03 11:15:29', '2021-05-10 01:07:51'),
(55, 'Mukalama', 'مکالمہ', 'mukalama', NULL, NULL, NULL, 500, 500, '/storage/files/1/24 250.jpg', NULL, 'magzine', '2021-05-10 14:32:39', '2021-05-10 14:32:39'),
(56, 'test', 'test', 'test', NULL, NULL, NULL, 500, 650, '/storage/files/1/24 250.jpg', NULL, 'magzine', '2021-05-10 14:33:32', '2021-05-10 14:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `plural` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `excerpt` text,
  `fields` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `plural`, `slug`, `icon`, `excerpt`, `fields`, `created_at`, `updated_at`) VALUES
(2, 'Blog', 'Blogs', 'blog', 'fas fas fa-chart-pie', 'asdasdasd', 'a:0:{}', '2021-01-30 06:08:55', '2021-02-04 03:18:38'),
(5, 'Testimonail', 'Testimonails', 'testimonail', 'fa fa-map', 'test', 'a:2:{i:1;a:2:{s:3:\"key\";s:18:\"Comment Background\";s:5:\"value\";N;}i:2;a:2:{s:3:\"key\";s:17:\"Client Background\";s:5:\"value\";N;}}', '2021-02-03 01:58:10', '2021-02-08 13:00:35'),
(6, 'Service', 'services', 'service', 'fa fa-address-book', 'This Is services', 'a:0:{}', '2021-02-08 13:25:18', '2021-03-04 14:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `newslaters`
--

CREATE TABLE `newslaters` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslaters`
--

INSERT INTO `newslaters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'nasiralishah80@gmail.com', '2021-02-09 06:14:46', '2021-02-09 06:14:46'),
(4, 'admin@flexibleit.net', '2021-04-11 08:00:20', '2021-04-11 08:00:20'),
(5, 'iamowaisazam@gmail.com', '2021-05-05 14:00:51', '2021-05-05 14:00:51'),
(6, 'admin@gmail.com', '2021-05-05 14:01:37', '2021-05-05 14:01:37'),
(7, 'owaisazam40@gmail.com', '2021-05-05 14:03:10', '2021-05-05 14:03:10'),
(8, 'jessicaviba08@gmail.com', '2021-06-05 13:38:56', '2021-06-05 13:38:56'),
(9, 'smhusainalig@gmail.com', '2021-06-11 17:24:51', '2021-06-11 17:24:51'),
(10, 'frank-der-zauberer@gmx.de', '2021-06-17 22:28:07', '2021-06-17 22:28:07'),
(11, 'archuleta.aimee@yahoo.com', '2021-06-18 22:10:39', '2021-06-18 22:10:39'),
(12, 'kerley.candice@gmail.com', '2021-06-22 06:16:13', '2021-06-22 06:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `items` text COLLATE utf8_unicode_ci NOT NULL,
  `tracking_id` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0',
  `additional_note` text COLLATE utf8_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address`, `total`, `status`, `items`, `tracking_id`, `payment_method`, `payment_status`, `additional_note`, `date`, `created_at`, `updated_at`) VALUES
(133, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:11:\"03232818809\";s:7:\"country\";s:14:\"پاکستان\";s:5:\"state\";s:5:\"sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"12312\";s:7:\"address\";s:3:\"123\";}', 122844, 'canceled', 'a:2:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-hard\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:800;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:800;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-soft\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:700;s:8:\"quantity\";i:3;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:2100;}}', '907325357', 'cash_on_delivery', 0, 'mkmm', '2021-06-25 18:07:37', '2021-05-08 19:49:17', '2021-06-25 22:07:37'),
(134, 98, 'a:8:{s:4:\"name\";s:13:\"Talha Mansoor\";s:5:\"email\";s:24:\"talhamansoor93@gmail.com\";s:6:\"mobile\";s:11:\"03232818809\";s:7:\"country\";s:8:\"pakistan\";s:5:\"state\";s:5:\"sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"12312\";s:7:\"address\";s:3:\"123\";}', 122844, 'processing', 'a:2:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-hard\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:800;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:800;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-soft\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:700;s:8:\"quantity\";i:3;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:2100;}}', '1917759303', 'cash_on_delivery', 0, 'mkmm', '2021-05-09 07:12:28', '2021-05-09 07:12:28', '2021-05-09 07:12:28'),
(135, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:8:\"12312312\";s:7:\"country\";s:8:\"pakistan\";s:5:\"state\";s:5:\"Sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:4:\"2123\";s:7:\"address\";s:7:\"Address\";}', 121444, 'processing', 'a:2:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-hard\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:800;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:800;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-soft\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:700;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:700;}}', '2018339491', 'cash_on_delivery', 0, 'sss', '2021-05-09 17:16:59', '2021-05-09 17:16:59', '2021-05-09 17:16:59'),
(136, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:11:\"03232818809\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"12312\";s:7:\"address\";s:3:\"123\";}', 700, 'processing', 'a:1:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-soft\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:700;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:700;}}', '534152982', 'cash_on_delivery', 0, 'as', '2021-05-10 06:53:16', '2021-05-10 06:53:16', '2021-05-10 06:53:16'),
(137, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:5:\"phone\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"asdas\";s:4:\"city\";s:5:\"12312\";s:3:\"zip\";s:5:\"ssdsd\";s:7:\"address\";s:4:\"ssss\";}', 76165, 'processing', 'a:2:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"48-hard\";s:5:\"title\";s:26:\"مصوری اور مصور\";s:2:\"id\";i:48;s:4:\"slug\";s:20:\"musawari-aur-musawir\";s:5:\"price\";d:700;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:700;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"48-soft\";s:5:\"title\";s:26:\"مصوری اور مصور\";s:2:\"id\";i:48;s:4:\"slug\";s:20:\"musawari-aur-musawir\";s:5:\"price\";d:500;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:500;}}', '1724710011', 'cash_on_delivery', 0, 'sdsdsd', '2021-05-10 11:58:48', '2021-05-10 11:58:48', '2021-05-10 11:58:48'),
(139, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:11:\"03232818809\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"12312\";s:7:\"address\";s:3:\"123\";}', 168773, 'processing', 'a:5:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-hard\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:800;s:8:\"quantity\";i:2;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:1600;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-soft\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:700;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:700;}i:2;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"49-hard\";s:5:\"title\";s:24:\"چار جدید مصور\";s:2:\"id\";i:49;s:4:\"slug\";s:18:\"char-jadid-musawir\";s:5:\"price\";d:900;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:900;}i:3;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"49-soft\";s:5:\"title\";s:24:\"چار جدید مصور\";s:2:\"id\";i:49;s:4:\"slug\";s:18:\"char-jadid-musawir\";s:5:\"price\";d:400;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:400;}i:4;a:10:{s:2:\"tt\";s:8:\"magazine\";s:6:\"cartid\";s:7:\"54-hard\";s:5:\"title\";s:14:\"مکالمہ25\";s:2:\"id\";i:54;s:4:\"slug\";s:11:\"mukalama-25\";s:5:\"price\";d:250;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:250;}}', '1903075441', 'cash_on_delivery', 0, 'mkmm', '2021-05-11 16:32:04', '2021-05-11 16:32:04', '2021-05-11 16:32:04'),
(140, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:11:\"03232818809\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"12312\";s:7:\"address\";s:3:\"123\";}', 61272, 'processing', 'a:2:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"49-hard\";s:5:\"title\";s:24:\"چار جدید مصور\";s:2:\"id\";i:49;s:4:\"slug\";s:18:\"char-jadid-musawir\";s:5:\"price\";d:900;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:900;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"49-soft\";s:5:\"title\";s:24:\"چار جدید مصور\";s:2:\"id\";i:49;s:4:\"slug\";s:18:\"char-jadid-musawir\";s:5:\"price\";d:400;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:400;}}', '2117242844', 'cash_on_delivery', 0, 'as', '2021-05-11 16:34:02', '2021-05-11 16:34:02', '2021-05-11 16:34:02'),
(141, 102, 'a:8:{s:4:\"name\";s:9:\"Test User\";s:5:\"email\";s:22:\"mairakamal02@gmail.com\";s:6:\"mobile\";s:9:\"121212122\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"Sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"75300\";s:7:\"address\";s:76:\"B-301 Block-3, Shahid Royal City, Gulshan-e-Iqbal Block-1, Karachi, Pakistan\";}', 75465, 'processing', 'a:1:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"48-soft\";s:5:\"title\";s:26:\"مصوری اور مصور\";s:2:\"id\";i:48;s:4:\"slug\";s:20:\"musawari-aur-musawir\";s:5:\"price\";d:500;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:500;}}', '2069887641', 'cash_on_delivery', 0, NULL, '2021-05-12 15:23:41', '2021-05-12 15:23:41', '2021-05-12 15:23:41'),
(142, 102, 'a:8:{s:4:\"name\";s:9:\"Test User\";s:5:\"email\";s:22:\"mairakamal02@gmail.com\";s:6:\"mobile\";s:9:\"121212122\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"Sindh\";s:4:\"city\";s:7:\"Karachi\";s:3:\"zip\";s:5:\"75300\";s:7:\"address\";s:76:\"B-301 Block-3, Shahid Royal City, Gulshan-e-Iqbal Block-1, Karachi, Pakistan\";}', 800, 'processing', 'a:1:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-hard\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:800;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:800;}}', '1859100324', 'cash_on_delivery', 0, NULL, '2021-05-12 15:41:29', '2021-05-12 15:41:29', '2021-05-12 15:41:29'),
(143, 1, 'a:8:{s:4:\"name\";s:5:\"Admin\";s:5:\"email\";s:20:\"superadmin@gmail.com\";s:6:\"mobile\";s:5:\"phone\";s:7:\"country\";s:8:\"Pakistan\";s:5:\"state\";s:5:\"asdas\";s:4:\"city\";s:5:\"12312\";s:3:\"zip\";s:5:\"ssdsd\";s:7:\"address\";s:4:\"ssss\";}', 167723, 'processing', 'a:4:{i:0;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-hard\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:800;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:800;}i:1;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"52-soft\";s:5:\"title\";s:29:\"مت سہل ہمیں جانو\";s:2:\"id\";i:52;s:4:\"slug\";s:20:\"mat-sehal-humay-jano\";s:5:\"price\";d:700;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:700;}i:2;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"49-hard\";s:5:\"title\";s:24:\"چار جدید مصور\";s:2:\"id\";i:49;s:4:\"slug\";s:18:\"char-jadid-musawir\";s:5:\"price\";d:900;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"hard\";s:8:\"currency\";s:2:\"RS\";s:5:\"total\";d:900;}i:3;a:10:{s:2:\"tt\";s:4:\"book\";s:6:\"cartid\";s:7:\"49-soft\";s:5:\"title\";s:24:\"چار جدید مصور\";s:2:\"id\";i:49;s:4:\"slug\";s:18:\"char-jadid-musawir\";s:5:\"price\";d:400;s:8:\"quantity\";i:1;s:4:\"type\";s:4:\"soft\";s:8:\"currency\";s:1:\"$\";s:5:\"total\";d:400;}}', '1183967580', 'cash_on_delivery', 0, 'sdsdsd', '2021-05-17 13:27:42', '2021-05-17 13:27:42', '2021-05-17 13:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `payer_info` text COLLATE utf8_unicode_ci,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `currency`, `amount`, `details`, `payer_info`, `payment_method`, `order_id`, `date`, `file`, `created_at`, `updated_at`) VALUES
(15, 'USD', 67.79, '', 'a:5:{s:5:\"email\";s:36:\"sb-peoot4026031@business.example.com\";s:4:\"name\";s:8:\"John Doe\";s:8:\"payer_id\";s:13:\"32A6P87MCV588\";s:7:\"address\";s:2:\"US\";s:12:\"bank_account\";s:37:\"sb-em43un3698173@business.example.com\";}', 'paypal', 115, '2021-04-15 11:13:25', NULL, '2021-04-15 11:13:25', '2021-04-15 11:13:25'),
(16, 'USD', 67.79, '', 'a:5:{s:5:\"email\";s:36:\"sb-peoot4026031@business.example.com\";s:4:\"name\";s:8:\"John Doe\";s:8:\"payer_id\";s:13:\"32A6P87MCV588\";s:7:\"address\";s:2:\"US\";s:12:\"bank_account\";s:37:\"sb-em43un3698173@business.example.com\";}', 'paypal', 116, '2021-04-15 11:17:06', NULL, '2021-04-15 11:17:06', '2021-04-15 11:17:06'),
(17, 'USD', 57.43, '', 'a:5:{s:5:\"email\";s:36:\"sb-peoot4026031@business.example.com\";s:4:\"name\";s:8:\"John Doe\";s:8:\"payer_id\";s:13:\"32A6P87MCV588\";s:7:\"address\";s:2:\"US\";s:12:\"bank_account\";s:37:\"sb-em43un3698173@business.example.com\";}', 'paypal', 121, '2021-04-17 15:17:37', NULL, '2021-04-17 15:17:37', '2021-04-17 15:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(4, 'users.view_all', 'View All Users', '2020-01-24 01:01:29', '2020-11-22 13:45:12'),
(5, 'users.edit', 'Edit Users', '2020-01-24 01:02:16', '2020-01-24 01:38:09'),
(14, 'settings.general', 'Access General', '2020-01-24 04:35:05', '2020-11-22 13:33:39'),
(15, 'settings.access', 'Access Settings Panel', '2020-01-24 04:36:21', '2020-11-22 13:20:19'),
(25, 'users.delete', 'Delete User', '2020-01-25 05:32:05', '2020-02-03 06:06:50'),
(194, 'users.create', 'Create User', '2020-09-10 07:32:02', '2020-09-10 07:32:02'),
(207, 'settings.filemanager', 'Access FileManager', '2020-09-28 13:53:30', '2020-11-22 13:23:50'),
(218, 'users.roles', 'Manage Roles', '2020-11-22 11:22:19', '2020-11-22 11:22:19'),
(219, 'users.permissions', 'Manage Permissions', '2020-11-22 11:22:50', '2020-11-22 11:22:50'),
(220, 'settings.customizations', 'Access Customizatons', '2020-11-22 12:14:17', '2020-11-22 13:33:31'),
(227, 'users.access', 'Access Users & Roles Panel', '2020-11-22 14:21:49', '2020-11-22 14:24:09'),
(228, 'settings.create', 'Access All Settings', '2020-11-23 14:17:04', '2020-11-23 14:17:04'),
(229, 'users.dashboard', 'Access Dashboard', '2021-01-11 14:34:32', '2021-01-11 14:34:32'),
(230, 'categories.create', 'Create Category', '2021-01-16 04:33:32', '2021-01-16 04:33:32'),
(231, 'accounts.manage', 'Manage Accounts & Finance', '2021-04-10 14:53:40', '2021-04-10 14:53:40'),
(232, 'sales.manage', 'Manage Sales Managment', '2021-04-10 14:54:17', '2021-04-10 14:54:17'),
(233, 'inventories.items', 'Manage Inventory Items', '2021-04-10 14:55:57', '2021-04-10 14:55:57'),
(234, 'inventories.suppliers', 'Manage Suppliers', '2021-04-10 14:56:30', '2021-04-10 14:56:30'),
(235, 'inventories.stocks', 'Manage  Item Stocks', '2021-04-10 14:57:02', '2021-04-10 14:57:15'),
(236, 'inventories.newsletters', 'Manage Newsletters', '2021-04-10 15:11:19', '2021-04-10 15:11:19'),
(237, 'settings.shop', 'Manage Shop', '2021-04-10 15:21:52', '2021-04-10 15:22:06'),
(238, 'settings.modules', 'Manage Modules', '2021-04-10 16:01:55', '2021-04-10 16:01:55'),
(239, 'settings.custom_modules', 'Manage Custom Modules', '2021-04-10 16:09:31', '2021-04-10 16:09:31'),
(240, 'access_admin_panel', 'Access Admin Panel', '2021-04-20 10:43:32', '2021-04-20 10:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text,
  `thumbnail` text,
  `gallery` text,
  `slug` varchar(100) NOT NULL,
  `module_id` bigint(20) NOT NULL,
  `excerpt` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `attributes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `des`, `thumbnail`, `gallery`, `slug`, `module_id`, `excerpt`, `created_at`, `updated_at`, `status`, `attributes`) VALUES
(22, 'How to Buy Safe Baby Clothes', '<ul>\r\n	<li>Safety concerns: How some baby clothes might be dangerous</li>\r\n	<li>Are organic baby clothes worth the money?</li>\r\n	<li>Looking towards sustainable baby clothes</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Shopping for outfits for a baby can be&nbsp;<em>so</em>&nbsp;much fun &mdash; there are many adorable options out there! But there&#39;s a bit more that goes into how to choose&nbsp;baby clothes&nbsp;than whether or not the item is cute or not, and even after all we&#39;ve learned about safety, not everything we can buy off the rack or online is 100% safe for our kids to wear. From&nbsp;toxic chemicals&nbsp;to choking hazards and other safety concerns, it&#39;s important to be armed with all the information about safe baby clothes before you buy.</p>\r\n\r\n<p>It definitely sounds overwhelming, but don&#39;t worry; this shouldn&#39;t take away from the fun of buying all the tiny outfits for your baby&#39;s wardrobe. Once you have the facts (and know which baby clothing brands to shop from), you can rest assured that your baby will be safe&nbsp;<em>and</em>&nbsp;stylish, all at the same time.</p>', 'admin/upload/blogs/posts/171022604903.jpg', 'a:0:{}', 'how-to-buy-safe-baby-clothes', 2, NULL, '2021-02-04 03:28:03', '2021-02-04 03:39:37', 'approved', 'a:0:{}'),
(23, 'What Is the Best Organic Baby Food?', '<ul>\r\n	<li>All about organic baby food, from the best organic baby products to how to make your own organic baby food</li>\r\n	<li>Popular organic baby food brands</li>\r\n	<li>Store bought vs. homemade organic baby food</li>\r\n</ul>\r\n\r\n<p>Now that&nbsp;your little one is eating solid foods, you naturally want to make sure that&nbsp;you&rsquo;re feeding your baby the healthiest diet&nbsp;possible. Many moms believe that&nbsp;organic food is a better choice, not only for their babies but for the&nbsp;planet. So, what is the best organic baby food out there? Is homemade better than store-bought? Here are some tips to help you decide.</p>\r\n\r\n<p><img alt=\"best organic baby food \" src=\"https://images.ctfassets.net/9l3tjzgyn9gr/4uxL5qFLcHzzZ3yjy9dbOd/18c754d5bb5dd9d1b8f7695ea800a03e/best_organic_baby_food_1.jpg?fm=jpg&amp;fl=progressive&amp;q=50&amp;w=1200\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>All about organic baby food</h2>\r\n\r\n<p><strong>Is organic food better for your baby?</strong><br />\r\n&ldquo;Nutritionally, there really is no significant difference between organic food and other foods,&rdquo; pediatric gastroenterologist Meghana Sathe M.D.&nbsp;wrote on ChildrensHealth.com. The main reason to buy organic baby food is to minimize exposure to pesticides, GMO ingredients, and chemical fertilizers.&nbsp;Research&nbsp;has shown that exposure to even low levels of pesticides in babies can have serious effects on their&nbsp;health and neurodevelopment.</p>\r\n\r\n<p>Mom Diana Lovett agrees. &ldquo;We started him on organic baby food and we&rsquo;re really happy with it,&quot; Lovett previously told&nbsp;NBC News. &quot;I just wanted something healthy for my son and didn&rsquo;t like the idea of pesticides in baby food.&rdquo;</p>\r\n\r\n<p><strong>What does it mean if baby food is labeled organic?</strong><br />\r\nFoods labeled organic must follow&nbsp;strict standards&nbsp;set by the federal government, meaning they are&nbsp;grown&nbsp;without toxic pesticides, fertilizers, antibiotics, hormones, GMOs, sewage sludge, or irradiation.</p>\r\n\r\n<p><strong>What to look for in organic baby food?</strong><br />\r\nFirst of all, is the food really organic?&nbsp;USDA organic seals&nbsp;label foods according to their percentage of organic ingredients, but not all food labeled organic has that certification. Also, don&rsquo;t be conned by the word &ldquo;natural.&rdquo; The FDA does not&nbsp;regulate&nbsp;the use of this term, and it has no clear definition. Many ingredients that are considered harmful or unhealthy, like high-fructose corn syrup, are also &ldquo;natural.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"best organic baby food 2\" src=\"https://images.ctfassets.net/9l3tjzgyn9gr/2mWCiUCJCB8VOol7EGEnlP/523718e6f9c701fecf3be62b3b328674/best_organic_baby_food_2.jpg?fm=jpg&amp;fl=progressive&amp;q=50&amp;w=1200\" /></p>\r\n\r\n<h2>Popular organic baby food brands</h2>\r\n\r\n<p>Here&#39;s a selection of well-known brands. Take into consideration your preferences, your baby&rsquo;s likes and dislikes, and your budget, and discover which brand is best for you.</p>\r\n\r\n<p><strong>Yumi</strong><br />\r\nA fresh organic baby food delivery service founded by&nbsp;two moms, Yumi is allergen free, 100% organic, non-GMO, gluten free, kosher, vegan, plant-based, and dairy-free.</p>\r\n\r\n<p><strong>Once Upon a Farm</strong><br />\r\nCofounded by actress&nbsp;Jennifer Garner, these organic, no-sugar-added, cold-pressed blends can be ordered online or purchased at the supermarket.</p>\r\n\r\n<p><strong>Beech-Nut</strong><br />\r\nThis widely available, reasonably priced brand has a line of non-GMO, USDA-certified organic baby foods with no artificial preservatives, colors, or flavors.</p>\r\n\r\n<p><strong>Earth&rsquo;s Best</strong><br />\r\nFounded in 1985, this company offers a complete selection of organic and non-GMO products, as well as diapers and toothpaste. You can find it on grocery shelves in stores and online.</p>\r\n\r\n<p><strong>Plum Organics</strong><br />\r\nUsing only non-GMO, organic ingredients, the fruit, vegetable, and grain blends are unsalted, unsweetened, and kosher and promise to expose your baby to unique flavors. Buy online or in stores.</p>\r\n\r\n<p><strong>MySerenityKids</strong><br />\r\nThese sugar- and grain-free products are made from well-sourced meats, healthy fats, and vegetables in proportions that mimic breast milk&rsquo;s macronutrients. This brand can be purchased online or at supermarkets.</p>', 'admin/upload/blogs/posts/14631630101.jpg', 'a:0:{}', 'what-is-the-best-organic-baby-food-', 2, NULL, '2021-02-04 03:55:54', '2021-02-04 03:58:28', 'approved', 'a:0:{}'),
(24, 'All you need to know about Oiling your Baby’s Hair', '<p>Your baby&rsquo;s delicate skin deserves the best care, right from head to toe. Just as you carefully select the right skincare products to cleanse &amp; moisturize your baby&rsquo;s body, it&rsquo;s also important to pay attention to your baby&rsquo;s scalp and hair health. The right use of a gentle and natural baby hair oil can have a multitude of benefits for your little one, right from keeping their scalp healthy and soft, to keeping their cute locks shiny, smooth and tangle-free. It is also extremely beneficial for babies with skin conditions like eczema and cradle cap.</p>\r\n\r\n<p><br />\r\nTo help you care for your baby&rsquo;s scalp &amp; hair, we formulated the Softsens Baby Natural Hair Oil &ndash; a bio-nourish blend of 7 natural seed oils to gently protect and nourish baby&#39;s delicate locks &amp; scalp. This all-natural formulation is hypoallergenic, clinically tested in Europe, absolutely safe for use on infants, made without any parabens, sulfates and harmful chemicals in a world class GMP certified facility.</p>\r\n\r\n<p><br />\r\nWhile natural oils such as olive and coconut have been traditionally to massage baby&rsquo;s scalp, our specially-formulated gentle &amp; natural Softsens baby hair oil can help provide overall nourishment and care for your baby&rsquo;s scalp and hair.</p>\r\n\r\n<p><br />\r\nWHY USE BABY HAIR OIL?</p>\r\n\r\n<p><br />\r\nHere are some of the benefits of massaging your baby&rsquo;s scalp regularly with Softsens baby hair oil:</p>\r\n\r\n<p><br />\r\n1. Loosens dry, flakey skin and moisturizes scalp<br />\r\nGently massaging your baby&rsquo;s scalp with Softsens baby natural hair oil can help loosen and remove dry skin and dead skin cells, thus leaving your baby&rsquo;s scalp smooth and healthy. It also helps keep the scalp well-moisturized and soft.</p>\r\n\r\n<p><br />\r\n2. Protects and nourishes scalp<br />\r\nSoftsens baby Natural Hair Oil is full of ingredients that boost scalp health. It contains almond oil that is helpful in curing scalp inflammations, coconut oil that prevents protein loss and jojoba oil that maintains the natural pH balance of the scalp. Each of the ingredients plays an important role in gently protecting and nourishing your baby&rsquo;s scalp.</p>\r\n\r\n<p><br />\r\n3. Stimulates new hair growth and strengthens follicles<br />\r\nA scalp massage also helps boosts blood circulation and stimulates hair growth. Some babies are born with thicker hair while some have thinner growth which fills in over a period of time. Your baby might even have a slight bald spot at the back of their head as a result of spending most of their time lying on the back. Softsens baby Natural Hair Oil is enriched with powerful natural seed oils that not only strengthen hair follicles but also boost healthy hair growth.</p>\r\n\r\n<p><br />\r\n4. Helps treat itchiness and skin conditions such as cradle cap and eczema<br />\r\nSkin conditions like eczema and cradle cap are quite common amongst babies. You can help soothe skin and reduce the effects of cradle cap by using Softsens baby hair oil to massage the affected skin. Wash off soon after with gentle &amp; tear-free Softsens baby shampoo. Find out more about cradle cap and how to treat it by reading our blog: How to Treat Cradle Cap in Babies.</p>\r\n\r\n<p><br />\r\n5. Improves texture and leaves hair softer, smoother &amp; healthier<br />\r\nRegular use of baby hair oil can improve the texture of your baby&rsquo;s hair, tame unruly locks and help you gently untangle hair. It also conditions hair effectively, leaving it incredibly soft, silky and smooth. Your baby too will love this soothing massage.</p>\r\n\r\n<p><br />\r\nWHAT MAKES SOFTSENS NATURAL HAIR OIL PERFECT FOR YOUR BABY&rsquo;S SCALP CARE?</p>\r\n\r\n<p><br />\r\nSoftsens Baby Natural Hair Oil is a carefully-formulated bio-nourish blend of 7 natural seed oils, each of which have been specifically chosen to provide specific benefits for your baby&rsquo;s scalp. Here&rsquo;s a look at what we put inside this nourishing hair oil and the advantages of each of these ingredients:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Olive oil: Moisturizes scalp, loosens dry flakes, and reduces the effects of cradle cap.</p>\r\n\r\n<p>Linseed oil: Nourishes hair to promote soft, smooth &amp; shiny locks.</p>\r\n\r\n<p>Coconut Oil: Removes sebum build-up from follicles and prevents protein loss.</p>\r\n\r\n<p>Sesame oil: Improves blood circulation in the scalp for healthier hair growth.</p>\r\n\r\n<p>Jojoba oil: Maintains scalp&rsquo;s natural pH balance.</p>\r\n\r\n<p>Argan oil: Conditions &amp; hydrates hair to improve elasticity.</p>\r\n\r\n<p>Almond oil: Soothes and cures scalp inflammation.</p>', 'admin/upload/blogs/posts/12085107386.jpg', 'a:0:{}', 'all-you-need-to-know-about-oiling-your-baby-s-hair', 2, NULL, '2021-02-04 04:05:02', '2021-02-04 04:07:56', 'approved', 'a:0:{}'),
(25, 'Essential Tips for Setting Up an Efficient Diaper Changing Station', '<p>During your baby&rsquo;s first year, you might often feel like you&rsquo;re on constant &lsquo;diaper duty&rsquo;. Babies go through 10 or 12 diapers a day on average, so YES, a lot of your time will be devoted to changing and disposing of your baby&rsquo;s diapers. However, you can make diaper duty smoother and easier by setting up one or more efficient and organized diaper-changing stations around your home. Here&rsquo;s how you can prepare for those innumerable diaper changes:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Designate one or more convenient diaper changing spots<br />\r\nPick one main diaper changing area in the room in which you and your baby spend the most amount of time, whether it&rsquo;s your bedroom, living area or nursery. This is where you&rsquo;ll want to set up your main diaper changing station. For this purpose, you can either shop for an actual diaper changing table or simple re-purpose an old dresser into a changing table.</p>\r\n\r\n<p>While this is your main diaper changing area, the trick is to also designate other smaller diaper changing areas throughout your home, so that you don&rsquo;t have to walk up and down whenever baby needs a diaper change (especially if you have a larger or two-storey home) Each of these areas should also be stocked with diaper-changing essentials so that you have everything you need within arm&rsquo;s reach during a quick diaper change.</p>\r\n\r\n<p>While an actual diaper changing table is quite helpful and practical, many moms find it easier to simply place baby on the bed or floor with a diaper changing pad underneath. This is also great if you don&rsquo;t have a lot of space for an actual diaper changing table. However, the two main benefits of having a diaper changing table are:</p>\r\n\r\n<p>No bending for Mumma<br />\r\nA useful storage place for your diaper changing essentials</p>\r\n\r\n<p>2. Choose a diaper changing table that&rsquo;s appropriately-sized, sturdy and has LOTS of storage<br />\r\nAs you grow older, there are very few things as exciting as hearing the words &lsquo;more storage space&rsquo;. And with the tiny new addition to your family, you&rsquo;re probably going to need lots of it! So, choose a diaper changing table that has a good amount of storage space underneath. These could be open shelves or pull-out drawers, based on whatever works best for you. To make things easier, you can also hang up a diaper organizer on the wall above your changing station so that you can easily grab what you need when you&rsquo;re changing baby&rsquo;s diaper.</p>\r\n\r\n<p>Pick a table that&rsquo;s a comfortable height for you and make sure that it&rsquo;s sturdy, stable and big enough for your wiggly little baby.</p>\r\n\r\n<p>You can then layer the table with a thin baby mattress and diaper changing pad to make it cozy and comfortable for your little one. Many parents also prefer having a safety strap that they can adjust around baby to make sure your little one stays in place. However, whether you have a safety strap or not, it&rsquo;s important to never leave baby unattended while on the changing table, even if it&rsquo;s just for a few seconds.</p>\r\n\r\n<p><br />\r\n3. Stock your diaper changing station with these essentials&nbsp;<br />\r\nStock up on all the essentials for your changing table and keep a close eye on your supplies so that you don&rsquo;t fall short of these essentials at any point. While the changing table is a good place to store your main essentials, it&rsquo;s also good to keep a few of them in every room so that they&rsquo;re always close by when you need them. Here&rsquo;s a comprehensive list of diaper changing station essentials. You&rsquo;ll also need to pack most of these essentials in your nappy bag if you&rsquo;re going outside with baby.</p>\r\n\r\n<p><br />\r\nDIAPERS<br />\r\nNo prizes for guessing this one. Always make sure you have a few packs of diapers ready. This is one item you don&rsquo;t want to run out of. To make sure you&rsquo;re always prepared for a quick diaper change, take the diapers out of the main packaging and place them in a neat stack on the changing table. Follow the same practice in all the other smaller designated diaper changing areas throughout your house. If you&rsquo;re using cloth diapers, make sure you also have baby-safe diaper pins within reach.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>WIPES<br />\r\nStock up on this very-essential item! Softsens Baby Wet Wipes are enriched with natural ingredients and free of colour, alcohol and parabens, making them mild and gentle for your baby&rsquo;s skin. A great way to make sure that you never run out of these wipes is by subscribing to the Softsens Bundles service, where you can place a standing order for your wipes and get them delivered straight home a regular basis. Find out more here!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>DIAPER RASH CREAM<br />\r\nDiaper rash can be extremely uncomfortable for your precious baby and can sometimes occur no matter how many precautions you take. Which is why it&rsquo;s best to protect your baby&rsquo;s skin with a mild baby diaper rash cream. Softsens Baby Diaper Rash Cream not only heals diaper rash effectively, but also prevents it from occurring. It is so gentle that you can actually use it every time you change your baby&rsquo;s diaper.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CHANGING PADS AND COVERS<br />\r\nA comfortable changing pad is great for many reasons. It keeps baby cozy and it can be placed just about anywhere for a quick diaper change, whether you&rsquo;re indoors or outdoors. Keep a few water-proof changing pad covers as well in case of any messes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BABY POWDER<br />\r\nA safe, mild &amp; hypoallergenic Baby Powder such as Softsens Baby Powder can actually help reduce rashes and redness caused by friction and excessive moisture. Be sure to first put some in the palm of your hand before dabbing it on the skin and always keep it away from baby&rsquo;s face.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>FRESH CLOTHES<br />\r\nSometimes diaper-changing can be mess-free and sometimes you might be faced with what we call a &lsquo;poop explosion&rsquo;. In any case, it&rsquo;s always better to have a clean change of clothes nearby.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SMALL TOWEL<br />\r\nIf you have a baby boy, placing a tiny towel over their genitals can help prevent an accidental &lsquo;pee shower&rsquo; while you&rsquo;re changing baby.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TOYS<br />\r\nIt&rsquo;s great to have a few toys that can distract baby while you&rsquo;re changing them, especially if your little one is in a fussy mood. Also, if their hands are occupied with toys, there&rsquo;s less chance of them trying to grab hold of something else, for example, their dirty diaper.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HAND SANITIZER<br />\r\nWhile it is still important to wash your hands with soap when handling your baby, it can be helpful to have this around at times.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>DIAPER PAIL/TRASH CAN<br />\r\nHave an easy diaper disposal system in place. While you&rsquo;ll probably find all kinds of fancy odor-containing diaper pails online, a regular trash can with a lid also works just fine. Make sure you have one with a foot-pedal so you can go hands-free.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>FIRST AID AND BABY GROOMING ESSENTIALS<br />\r\nThe changing station is also a great place for storing other essentials. You can place your baby here when you want to cut their nails (good luck), or administer any medicine.</p>\r\n\r\n<p><br />\r\nHow did you set up your diaper changing station at home? We&rsquo;d love to know your favourite tips &amp; suggestions!</p>', 'admin/upload/blogs/posts/13474822292.jpg', 'a:0:{}', 'essential-tips-for-setting-up-an-efficient-diaper-changing-station', 2, NULL, '2021-02-04 04:09:21', '2021-02-04 04:09:39', 'approved', 'a:0:{}'),
(31, 'Miss Aqila', NULL, NULL, '/storage/files/1/2b.jpg', 'miss-aqila', 5, 'This Website is Great for Mothers. I would recommend you to Buy Products From Here.', '2021-02-04 05:44:22', '2021-04-10 14:36:41', 'approved', 'a:2:{s:18:\"Comment Background\";s:8:\"cardbg-1\";s:17:\"Client Background\";s:5:\"ico-1\";}'),
(32, 'Mrs Majid', NULL, NULL, 'a:0:{}', 'mrs-majid', 5, 'Always available to answer any questions. Very knowledgeable about the services they provide. Would recommend to anyone!', '2021-02-04 05:45:03', '2021-02-08 13:14:28', 'approved', 'a:2:{s:18:\"Comment Background\";s:8:\"cardbg-2\";s:17:\"Client Background\";s:5:\"ico-2\";}'),
(33, 'Miss Tayaba Khan', NULL, NULL, 'a:0:{}', 'miss-tayaba-khan', 5, 'You have been absolutely wonderful for Consultant, and I can\'t thank you enough for all your tremendous skills, support', '2021-02-04 05:45:39', '2021-02-08 13:13:43', 'approved', 'a:2:{s:18:\"Comment Background\";s:8:\"cardbg-3\";s:17:\"Client Background\";s:5:\"ico-3\";}'),
(34, 'Bridal Shower', NULL, 'admin/upload/blogs/posts/ico1 (1)613889276.png', 'a:0:{}', 'bridal-shower', 6, 'It is so easy to find a babysitter who suits you best.', '2021-02-08 13:28:20', '2021-02-08 13:56:02', 'approved', 'a:0:{}'),
(35, 'Baby Shower', NULL, 'admin/upload/blogs/posts/ico21824729874.png', 'a:0:{}', 'baby-shower', 6, 'It is so easy to find a babysitter who suits you best.', '2021-02-08 13:29:05', '2021-02-08 13:58:54', 'approved', 'a:0:{}'),
(36, 'Baby Photography', NULL, 'admin/upload/blogs/posts/ico1 (1)732799729.png', 'a:0:{}', 'baby-photography', 6, 'It is so easy to find a babysitter who suits you best.', '2021-02-08 13:29:45', '2021-02-08 13:59:18', 'approved', 'a:0:{}'),
(37, 'Birthday Party', NULL, 'admin/upload/blogs/posts/ico22026682279.png', 'a:0:{}', 'birthday-party', 6, 'It is so easy to find a babysitter who suits you best.', '2021-02-08 13:31:31', '2021-02-08 13:59:41', 'approved', 'a:0:{}'),
(38, 'Anniversary Ceremony', NULL, 'admin/upload/blogs/posts/ico3627596628.png', 'a:0:{}', 'anniversary-ceremony', 6, 'It is so easy to find a babysitter who suits you best.', '2021-02-08 13:31:55', '2021-02-08 14:00:01', 'approved', 'a:0:{}'),
(39, 'Haqiqa Ceremony', NULL, 'admin/upload/blogs/posts/ico12008327679.png', 'a:0:{}', 'haqiqa-ceremony', 6, 'It is so easy to find a', '2021-02-08 13:32:27', '2021-02-08 14:02:31', 'approved', 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `body` text,
  `blog_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `body`, `blog_id`, `status`, `created_at`, `updated_at`, `type`) VALUES
(3, 92, 'Pellentesque gravida tristique ultrices. Sed blandit varius mauris, vel volutpat urna hendrerit id. Curabitur rutrum dolor gravida turpis tristique efficitur', 2, 1, '2021-02-07 16:27:01', '2021-05-05 00:54:30', 'asnaf'),
(4, 92, 'Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo', 2, 1, '2021-02-08 00:40:14', '2021-05-05 03:25:46', 'asnaf'),
(5, 92, ' Cras magna nunc, cursus lobortis luctus at', 2, 1, '2021-02-08 00:41:06', '2021-05-10 06:55:54', 'asnaf'),
(6, 92, 'Duis eleifend lorem non ant', 2, 1, '2021-02-08 13:17:20', '2021-05-10 06:55:59', 'asnaf'),
(8, 92, 'Duis eleifend lorem non ant.', 2, 1, '2021-02-08 16:37:23', '2021-05-10 12:42:12', 'asnaf'),
(9, 92, 'Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui ', 2, 1, '2021-02-11 04:33:00', '2021-05-05 03:25:51', 'asnaf'),
(10, 92, 'Cras magna nunc, cursus lobortis luctus at,', 2, 1, '2021-02-11 04:36:03', '2021-05-10 12:42:30', 'asnaf'),
(33, 1, 'hello this is test', 1, 1, '2021-05-24 20:21:20', '2021-05-24 20:21:39', 'tweet'),
(34, 1, 'this is new coment', 1, 0, '2021-05-24 20:22:20', '2021-05-24 20:22:20', 'tweet'),
(35, 106, 'vcfgvb rr5vrrr', 3, 0, '2021-05-27 21:33:43', '2021-05-27 21:33:43', 'tweet'),
(36, 106, 'zabardast good', 3, 0, '2021-05-27 21:34:09', '2021-05-27 21:34:09', 'tweet'),
(37, 1, 'adadad', 1, 0, '2021-06-25 22:03:55', '2021-06-25 22:03:55', 'tweet'),
(38, 1, 'adsas', 1, 0, '2021-06-25 22:04:02', '2021-06-25 22:04:02', 'tweet');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(7, 'super-admin', 'Super', '2020-01-21 14:22:35', '2020-01-21 14:22:35'),
(29, 'Customer', 'Customer\r\n\r\n', '2020-11-22 07:17:55', '2021-04-28 19:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `name` text COLLATE utf8mb4_unicode_ci,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, '', 'app_fav_icon', '/storage/files/1/logo.jpg', NULL, '2021-06-24 19:21:16'),
(2, NULL, 'app_name', 'Mukalma', NULL, '2021-06-24 19:21:16'),
(3, NULL, 'app_meta', 'اکادمی بازیافت ایک اشاعتی ادارہ ہے۔ اردو دنیا کی معروف و ممتاز شخصیات کی کتابیں اس ادارے سے شائع ہوچکی ہیں۔ اپنے ادبی، فکری اور اشاعتی معیار کے حوالے سے اکادمی بازیافت کی کتابیں صرف پاکستان میں ہی نہیں، بلکہ بیرونِ ملک بھی الگ سے پہچانی اور قدر کی نگاہ سے دیکھی جاتی ہیں۔', NULL, '2021-06-24 19:21:16'),
(4, NULL, 'app_logo', '/storage/files/1/logo.jpg', NULL, '2021-06-24 19:21:16'),
(5, NULL, 'app_keywords', 'keywordsssssssssssssssss', NULL, '2021-06-24 19:21:16'),
(6, NULL, 'app_big_logo', '/storage/files/1/logo.jpg', NULL, '2021-06-24 19:21:16'),
(7, NULL, 'app_copyright', 'copyright © mukalamakarachi 2020-2021. All rights reserved.', NULL, '2021-06-24 19:21:16'),
(8, NULL, 'shop_tax', '1', '2021-02-04 17:25:20', '2021-03-29 16:26:02'),
(9, NULL, 'shop_discount', '5', '2021-02-04 17:25:38', '2021-03-29 16:26:02'),
(10, NULL, 'currency', '$', '2021-02-04 18:14:55', '2021-03-29 16:26:02'),
(11, NULL, 'email', 'info@mukalamakarachi.com', '2021-02-06 05:23:55', '2021-06-24 19:21:16'),
(12, NULL, 'phone', '021-32751324', '2021-02-06 05:24:12', '2021-06-24 19:21:16'),
(13, NULL, 'mobile', 'mobile', '2021-02-06 05:24:25', '2021-02-06 05:24:25'),
(14, NULL, 'country', 'Pakistan', '2021-02-06 05:24:46', '2021-06-24 19:21:16'),
(15, NULL, 'state', 'Sindh', '2021-02-06 05:24:57', '2021-06-24 19:21:16'),
(16, NULL, 'city', 'Karachi', '2021-02-06 05:25:10', '2021-06-24 19:21:16'),
(17, NULL, 'postal', 'postal', '2021-02-06 05:25:35', '2021-06-24 19:21:16'),
(18, NULL, 'street_address', 'Cecilia Chapman, 711-2880 Nulla St, Mankato', '2021-02-06 05:25:52', '2021-06-24 19:21:16'),
(19, NULL, 'facebook', 'https://web.facebook.com/', '2021-02-08 12:53:15', '2021-06-24 19:21:16'),
(20, NULL, 'twitter', 'twitter.com', '2021-02-08 13:00:41', '2021-06-24 19:21:16'),
(21, NULL, 'whatsapp', '031202123212', '2021-02-08 13:00:58', '2021-06-24 19:21:16'),
(22, NULL, 'skype', 'none', '2021-02-08 13:01:10', '2021-02-08 13:01:10'),
(23, NULL, 'instagram', 'Instagram', '2021-02-08 13:03:35', '2021-06-24 19:21:16'),
(24, NULL, 'flip', 'none', '2021-02-08 13:04:52', '2021-06-24 19:21:16'),
(25, NULL, 'description', 'اکادمی بازیافت ایک اشاعتی ادارہ ہے۔ 1996ء میں قائم ہونے والا یہ ادارہ ابتدا میں صرف ادبی جریدے ’’مکالمہ‘‘ کی اشاعت تک محدود تھا، لیکن 2001ء سے کتابوں کی اشاعت کے سلسلے کا باقاعدہ آغاز ہوا۔ افسانے، شاعری، ناول، خاکے، یادیں، تراجم، تنقید، مذہب اور تہذیب کے موضوعات پر اب تک اردو دنیا کی معروف و ممتاز شخصیات کی کتابیں اکادمی بازیافت سے شائع ہوچکی ہیں۔ ان میں سلیم احمد، عزیز حامد مدنی، ادا جعفری، جمیل الدین عالی، اسد محمد خاں، شمس الرحمن فاروقی، ساقی فاروقی، مشفق خواجہ، حسینہ معین، رضیہ فصیح احمد، جمال پانی پتی، سحر انصاری، سیّد مظہر جمیل، باقر نقوی، اقبال حیدر، نسیم سیّد، عبداللہ جاوید، نجم الحسن رضوی، شفیع عقیل، زبیر رضوی، رضی مجتبیٰ اور صبیح رحمانی جیسے نام ور لوگ شامل ہیں۔ اکادمی بازیافت کی کتابیں اپنے ادبی، فکری اور اشاعتی معیار کے حوالے سے صرف پاکستان میں ہی نہیں، بلکہ بیرونِ ملک بھی الگ سے پہچانی اور قدر کی نگاہ سے دیکھی جاتی ہیں۔ کسی کتاب کا اس ادارے سے شائع ہونا معیار کی ضمانت سمجھا جاتا ہے۔', '2021-02-08 13:49:42', '2021-06-24 19:21:16'),
(26, NULL, 'paypal_status', 'on', '2021-04-15 13:13:10', '2021-05-05 02:01:29'),
(27, NULL, 'paypal_client', 'ARcivjZDaa0jb6vYlx3d8uMA5L8saPl4AlbaYUn_MEWtZMZsbJiTa4eOZ-PJpNCNWfZjJE4x5Lx90Teu', '2021-04-15 13:13:31', '2021-05-05 02:01:29'),
(28, NULL, 'paypal_secret', 'EL-42zeKx_cEsjq7-xvehjaBNfdG7mBAKqZNqtB0hyodsDVAfceNnhyc7G7IyTJfVBD9bbugOxdMWHsH', '2021-04-15 13:13:42', '2021-05-05 02:01:29'),
(29, NULL, 'paypal_des', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2021-04-15 13:13:42', '2021-05-05 02:01:29'),
(30, NULL, 'cash_enable', 'off', '2021-04-17 04:23:10', '2021-04-17 04:31:12'),
(31, NULL, 'cash_des', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2021-04-17 04:23:20', '2021-06-24 19:21:16'),
(32, NULL, 'cash_status', 'on', '2021-04-17 04:24:39', '2021-06-24 19:21:16'),
(33, NULL, 'bank_status', 'on', '2021-04-17 04:27:20', '2021-06-24 19:21:16'),
(34, NULL, 'bank_name', 'THE WORLD BANK', '2021-04-17 04:27:33', '2021-06-24 19:21:16'),
(35, NULL, 'bank_account', '12345678912345', '2021-04-17 04:27:46', '2021-06-24 19:21:16'),
(36, NULL, 'bank_des', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2021-04-17 04:28:01', '2021-06-24 19:21:16'),
(37, NULL, 'bank_iban', '0', '2021-04-17 07:18:12', '2021-04-17 07:18:12'),
(38, NULL, 'footer1', 'صبح 11 بجے سے شام 6 تک کریں', '2021-02-08 13:49:42', '2021-06-24 19:21:16'),
(39, NULL, 'footer2', 'ورلڈ وائڈ', '2021-02-08 13:49:42', '2021-06-24 19:21:16'),
(40, NULL, 'footer3', 'سیف پیمنٹ', '2021-02-08 13:49:42', '2021-06-24 19:21:16'),
(41, NULL, 'freepdf', '3', '2021-02-08 13:49:42', '2021-06-24 19:21:16'),
(42, NULL, 'terms', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(43, NULL, 'payment', 'seeDonec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(44, NULL, 'shipment', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(45, NULL, 'location', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(46, NULL, 'adjustment', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(47, NULL, 'policy', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(48, NULL, 'return', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', '2021-02-08 13:49:42', '2021-06-24 19:32:34'),
(49, NULL, 'terms_condition', 'seeDonec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, NULL),
(50, NULL, 'payment_method', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, '2021-06-24 19:21:16'),
(51, NULL, 'shipping_guide', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, '2021-06-24 19:21:16'),
(52, NULL, 'location_page', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, '2021-06-24 19:21:16'),
(53, NULL, 'estimated_delivery', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, '2021-06-24 19:21:16'),
(54, NULL, 'shipping_policy', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, '2021-06-24 19:21:16'),
(55, NULL, 'return_policy', 'Donec suscipit, nulla sit amet finibus ultrices, nibh enim vulputate eros, scelerisque aliquam orci nisl vel est. Suspendisse congue ultricies mollis. Pellentesque ante nisi, aliquam a iaculis in, sagittis quis tortor. Etiam iaculis molestie malesuada. Aenean ullamcorper hendrerit nibh nec condimentum. Sed eget pellentesque purus, ut vehicula tortor. Nam molestie ut ante vel fringilla. Nunc viverra mauris ut sollicitudin fermentum. Mauris tortor nibh, auctor sed porttitor in, interdum in magna. Pellentesque sit amet malesuada odio. Fusce diam orci, vehicula eget maximus in, bibendum sit amet ipsum. Pellentesque lectus eros, luctus et rhoncus in, ornare eu eros. Vivamus a quam et augue ullamcorper luctus. Praesent tempus imperdiet elit ut ornare.', NULL, '2021-06-24 19:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` bigint(20) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `english` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(11) NOT NULL,
  `thumbnail` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `title`, `des`, `english`, `slug`, `date`, `author_id`, `thumbnail`, `excerpt`, `created_at`, `updated_at`) VALUES
(1, 'خواب دیکھنے والا', '<p>asdasdasdasdsadas</p>', 'Dream', 'dream', '2021-05-12 00:00:00', 9, '/storage/files/1/5qd6DUC6Bv70rLBIhoRcn2c5uyCSDlzDA2vl27Vl.png', '', '2021-05-08 14:57:23', '2021-05-08 15:00:59'),
(3, 'Test 2', '<p>TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest212121212</p>', 'Test', 'test', '2021-05-04 00:00:00', 8, '/storage/files/1/EhrqYyWpT6UID6GNzaPAVpyJMqGnQwg1yx4mzt46.jpeg', '', '2021-05-10 15:45:42', '2021-05-10 15:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `title`, `short_name`, `created_at`, `updated_at`) VALUES
(6, 'Killo Gram', 'ks', '2021-03-21 08:14:13', '2021-03-21 08:14:13'),
(7, 'Inches', 'inc', '2021-03-21 08:14:24', '2021-03-21 08:14:24'),
(8, 'centimeter', 'cm', '2021-03-21 08:14:52', '2021-03-21 08:14:52'),
(9, 'Packet', 'pcs', '2021-03-21 08:15:38', '2021-03-21 08:19:58'),
(10, 'Litter', 'Ltr', '2021-03-28 08:48:50', '2021-03-28 08:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` text COLLATE utf8mb4_unicode_ci,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `story` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `cover` text COLLATE utf8mb4_unicode_ci,
  `birthday` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `company` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `fname`, `lname`, `role_id`, `status`, `gender`, `social`, `mobile`, `country`, `state`, `city`, `zip`, `address`, `bio`, `story`, `image`, `cover`, `birthday`, `nic`, `api_token`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `permissions`, `company`) VALUES
(1, 'Admin', 'superadmin@gmail.com', '$2y$10$b1celiGLiyKdJf3m9UiTO.LpD56DyeROT3uGk3UrNcodNW.ksB7ee', 'Customer5', 'Farming', 7, 'Blocked', 'Female', NULL, '12312313', 'asd', 'Sindh', 'Karachi', '119', 'sddfsdfsdfsd', 'asdasd', 'bio', '/storage/files/1/2b.jpg', NULL, '2021-04-12 19:00:00', 'sasdasd', '2a03eba459380b6da9e0cfa3a5e0314f867fa10dc239e45aa5b0c947ca909233', NULL, NULL, '2020-09-01 12:12:37', '2021-04-13 10:36:28', 'a:0:{}', NULL),
(92, 'Customer', 'customer@gmail.com', '$2y$10$mLQbUkb6L3DJ0P2dWNm/4uvESiMl7oqICHm23BEUnXo88a3w4f.X.', NULL, NULL, 29, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-03 12:35:52', NULL, NULL, NULL, NULL, '2021-05-03 12:35:52', '2021-05-07 03:23:32', 'a:23:{i:0;s:18:\"access_admin_panel\";i:1;s:12:\"users.access\";i:2;s:14:\"users.view_all\";i:3;s:10:\"users.edit\";i:4;s:12:\"users.delete\";i:5;s:12:\"users.create\";i:6;s:11:\"users.roles\";i:7;s:17:\"users.permissions\";i:8;s:15:\"users.dashboard\";i:9;s:21:\"inventories.suppliers\";i:10;s:17:\"inventories.items\";i:11;s:18:\"inventories.stocks\";i:12;s:12:\"sales.manage\";i:13;s:23:\"inventories.newsletters\";i:14;s:15:\"accounts.manage\";i:15;s:15:\"settings.access\";i:16;s:15:\"settings.create\";i:17;s:16:\"settings.general\";i:18;s:13:\"settings.shop\";i:19;s:23:\"settings.customizations\";i:20;s:16:\"settings.modules\";i:21;s:23:\"settings.custom_modules\";i:22;s:20:\"settings.filemanager\";}', NULL),
(93, 'Owais Azam', 'iamowaisazam@gmail.com', '$2y$10$WK9jTFs.2RTf8WF1Cqu4zOEYHKjyyTZZaeSh8o7ojcOT0wbkTx8Ee', NULL, NULL, 29, 'approved', NULL, NULL, '12312312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-05 22:50:29', NULL, NULL, NULL, NULL, '2021-05-06 03:50:29', '2021-05-06 03:50:29', NULL, NULL),
(94, 'Owais Azam', '1iamowaisazam@gmail.com', '$2y$10$3dsDX6rsQgB7UIV/6AFKZuazQcco71KsMS0xg6CJxxnUfoo7oeJm.', NULL, NULL, 29, 'approved', NULL, NULL, '12312312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-05 23:49:34', NULL, NULL, NULL, NULL, '2021-05-06 04:49:34', '2021-05-06 04:49:34', NULL, NULL),
(97, 'test', 'test@gmail.com', '$2y$10$6jpx6OZSWMUOnBBpcUJ3q.VLMg0EUUc9P/2B4b2SZClmZtR55r77W', NULL, NULL, 29, 'approved', NULL, NULL, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-07 07:10:06', NULL, NULL, NULL, NULL, '2021-05-07 12:10:06', '2021-05-07 12:10:06', NULL, NULL),
(98, 'Talha Mansoor', 'talhamansoor93@gmail.com', '$2y$10$EdnQgvjCOgEkjpBMzlX1U.d2gqMShCYPg2MAqBaMdYfFPV6YEBTHy', NULL, NULL, 29, 'approved', NULL, NULL, '03232818809', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 02:11:41', NULL, NULL, NULL, NULL, '2021-05-09 07:11:41', '2021-05-09 07:11:41', NULL, NULL),
(99, 'Owais Azam', 'owaisjan@gmail.com', '$2y$10$PkPm58WG9MV2bgmoYZhHseiKoHRtYOq9.TJpmjeweG0BLrO47s1Ne', NULL, NULL, 29, 'approved', NULL, NULL, '03112239342', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 09:23:32', NULL, NULL, NULL, NULL, '2021-05-09 14:23:32', '2021-05-09 14:23:32', NULL, NULL),
(101, 'Owais Azam', 'owaisazam1@gmail.com', '$2y$10$NuO6NOLEbM0379MiNla3C.FrPd5CgIuBI0YVlRVIJLZ/fCcBpjfoW', NULL, NULL, 29, 'approved', NULL, NULL, '12312312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-09 09:26:58', NULL, NULL, NULL, NULL, '2021-05-09 14:26:58', '2021-05-09 14:26:58', NULL, NULL),
(102, 'Test User', 'mairakamal02@gmail.com', '$2y$10$x84lXgE56eXjCp9nZ8CFyeJ9Xn0yxcgoyMf9Z9cdAT4DDQYNrQeLa', NULL, NULL, 29, 'approved', NULL, NULL, '0123654789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-10 07:43:55', NULL, NULL, NULL, NULL, '2021-05-10 12:43:55', '2021-05-10 12:43:55', NULL, NULL),
(105, 'Talha Mansoor', 'talhamansoor931@gmail.com', '$2y$10$eFJH/ZoYjiZ3mxMTofxm5u0qnfZyzJ.//TGarDmwJ4jTYg4DH81ou', NULL, NULL, 29, 'approved', NULL, NULL, '03232818809', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-11 11:55:52', NULL, NULL, NULL, NULL, '2021-05-11 16:55:52', '2021-05-11 16:55:52', NULL, NULL),
(106, 'Bar B Q', 'Admin@example.com', '$2y$10$6INksaOnzk6Fc2Qd3oRhmemvqIMZHJKdC/bKGEDqDjUEphxPETSPi', NULL, NULL, 29, 'approved', NULL, NULL, '03324643323', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-27 16:29:51', NULL, NULL, NULL, NULL, '2021-05-27 21:29:51', '2021-05-27 21:29:51', NULL, NULL),
(107, 'Juvenal Block', 'jessicaviba08@gmail.com', '$2y$10$aq0YqeQXOHZuAc6mSDwgxuEue0CCVO0pE7FlBdTZeAgTVqDQn2IMS', NULL, NULL, 29, 'approved', NULL, NULL, '12467856168', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-05 09:38:34', NULL, NULL, NULL, NULL, '2021-06-05 13:38:34', '2021-06-05 13:38:34', NULL, NULL),
(108, 'Ms. Glenn Blick', 'archuleta.aimee@yahoo.com', '$2y$10$Jl2N794RVtstla5uYljM0OIn0wi1AnqkXPk8GTE7t6Tk1t1v5K6Ny', NULL, NULL, 29, 'approved', NULL, NULL, '14641119027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-18 18:10:13', NULL, NULL, NULL, NULL, '2021-06-18 22:10:13', '2021-06-18 22:10:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `thumbnail` text,
  `category_id` int(11) NOT NULL,
  `des` text,
  `video` text,
  `english` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `slug`, `thumbnail`, `category_id`, `des`, `video`, `english`, `created_at`, `updated_at`) VALUES
(1, 'شعروشاعری', 'shair-o-shayari', '/storage/files/1/video1.jpg', 5, 'ASDASDASD', 'https://www.youtube.com/embed/SFxFJ4pUXNw', 'Shair-o-Shayari', '2021-05-04 00:01:54', '2021-05-07 07:04:04'),
(2, 'شعروشاعری', 'shair-o-shayari1', '/storage/files/1/video1.jpg', 3, 'asdasd', 'https://www.youtube.com/embed/bCpag6gZgn8', 'Shair-o-Shayari1', '2021-05-04 00:03:07', '2021-05-04 00:14:33'),
(3, 'شعروشاعری1', 'shair-o-shayari551', '/storage/files/1/video1.jpg', 5, 'dddddddd1', 'https://www.youtube.com/embed/SFxFJ4pUXNw', 'Shair-o-Shayari551', '2021-05-04 00:07:05', '2021-05-04 00:14:44'),
(4, 'شعروشاعری', 'shaire-o-shayari', '/storage/files/1/video1.jpg', 3, 'Test', 'https://www.youtube.com/embed/u9B-yMUw3m4', 'shaire-o-shayari', '2021-05-06 13:31:00', '2021-05-06 13:31:00'),
(5, 'Test Video', 'test', '/storage/files/1/video1.jpg', 8, NULL, 'https://www.learningcontainer.com/wp-content/uploads/2020/05/sample-mp4-file.mp4', 'Test', '2021-05-10 16:25:33', '2021-05-10 16:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `english` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `title`, `english`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'شعروشاعری', 'Shair-o-Shayari', 'Shair-o-Shayari', '2021-05-03 21:39:22', '2021-05-03 22:10:34'),
(4, 'ادرس', 'Urdu', 'urdu', '2021-05-03 21:40:23', '2021-05-03 22:11:13'),
(5, 'غزل', 'Ghazal', 'ghazal', '2021-05-03 22:02:20', '2021-05-03 22:11:37'),
(8, 'test', 'test', 'test', '2021-05-10 15:50:44', '2021-05-10 15:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filemanagers`
--
ALTER TABLE `filemanagers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslaters`
--
ALTER TABLE `newslaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `api_token` (`api_token`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `filemanagers`
--
ALTER TABLE `filemanagers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newslaters`
--
ALTER TABLE `newslaters`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
