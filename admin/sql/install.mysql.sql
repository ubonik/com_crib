--
-- Структура таблицы `#__crib_dictionary`
--

CREATE TABLE IF NOT EXISTS `#__crib_dictionary` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `english` varchar(255) NOT NULL,
  `rus` varchar(255) NOT NULL,
  `id_categories` int NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int NOT NULL,
  `lerned` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `#__crib_dictionary`
--

INSERT IGNORE INTO `#__crib_dictionary` (`id`, `english`, `rus`, `id_categories`, `state`, `ordering`, `lerned`) VALUES
(6, 'where', 'где, куда', 5, 1, 332, 1),
(7, 'put', 'поместить, разместить, вложить', 16, 1, 331, 1),
(8, 'provide', 'обеспечивать', 16, 1, 330, 1),
(10, 'such as', 'такие как', 5, 1, 329, 1),
(11, 'rendering', 'отрисовка', 0, 1, 328, 1),
(12, 'aka', 'также известный как, иначе', 5, 1, 327, 1),
(13, 'was performed', 'было выполнено', 16, 1, 326, 1),
(14, 'mapped', 'сопоставляются', 16, 1, 325, 1),
(15, 'redirect', 'перенаправлять', 0, 1, 324, 1),
(16, 'that', 'что', 5, 1, 323, 1),
(17, 'easier', 'облегчающий', 0, 1, 315, 1),
(18, 'Instance', 'экземпляр класса', 0, 1, 322, 1),
(19, 'order', 'порядок, заказ, поручение', 0, 1, 321, 1),
(24, 'which', 'который', 0, 1, 320, 1),
(25, 'chosen', 'выбранный', 0, 1, 319, 1),
(26, 'behavior', 'поведение', 0, 1, 318, 1),
(27, 'keepalive', 'сообщение', 0, 1, 316, 1),
(28, 'override', 'переопределять', 0, 1, 317, 1),
(29, 'pure', 'чистый', 0, 1, 1, 1),
(30, 'several', 'несколько', 0, 1, 4, 1),
(31, 'should', 'должен, необходимо, нужно', 0, 1, 2, 1),
(32, 'all done', 'все готово', 0, 1, 3, 1),
(33, 'done', 'сделанный, выполненный', 18, 1, 5, 1),
(34, 'solution', 'решение', 17, 1, 6, 1),
(35, 'features', 'особенности', 17, 1, 7, 1),
(36, 'beginner', 'начинающий', 17, 1, 8, 1),
(38, 'available', 'доступный', 18, 1, 9, 1),
(39, 'matter', 'вопрос', 17, 1, 10, 1),
(40, 'later', 'позже', 5, 1, 11, 1),
(41, 'check', 'проверка', 17, 1, 12, 1),
(42, 'exist', 'существовать', 16, 1, 13, 1),
(43, 'store', 'хранить', 16, 1, 14, 1),
(44, 'load', 'загрузка', 17, 1, 15, 1),
(45, 'differs', 'отличается', 16, 1, 16, 1),
(46, 'related', 'связанный', 18, 1, 17, 1),
(47, 'оptional', 'необязательный', 18, 1, 18, 1),
(48, 'success', 'успех', 17, 1, 19, 1),
(49, 'failure', 'неудача, сбой', 17, 1, 20, 1),
(50, 'in most cases', 'в большинстве случаев', 17, 1, 21, 1),
(51, 'most', 'большинство', 17, 1, 22, 1),
(52, 'need', 'необходимость', 17, 1, 23, 1),
(53, 'output', 'выход', 17, 1, 24, 1),
(54, 'safe', 'безопасный', 18, 1, 25, 1),
(55, 'triggering', 'запуск', 17, 1, 26, 1),
(56, 'derived', 'полученный производный', 18, 1, 27, 1),
(57, 'perform', 'выполнять', 16, 1, 28, 1),
(58, 'matching', 'подходящий', 18, 1, 29, 1),
(59, 'record', 'запись', 17, 1, 30, 1),
(60, 'required', 'обязательный', 18, 1, 31, 1),
(61, 'otherwise', 'в противном случае, иначе', 1, 1, 32, 1),
(62, 'parsed', 'анализировать, разобрать, обработать', 16, 1, 33, 1),
(63, 'recently', 'недавно', 5, 1, 34, 1),
(64, 'necessary', 'необходимый', 18, 1, 35, 1),
(65, 'reference', 'справочник, ссылка', 17, 1, 36, 1),
(66, 'so', 'так, настолько', 1, 1, 37, 1),
(67, 'retrieving', 'извлечение, получение,возврашение', 17, 1, 38, 1),
(68, 'grid', 'сетка', 17, 1, 39, 1),
(69, 'tip', 'совет', 17, 1, 40, 1),
(70, 'offer', 'предложение', 17, 1, 41, 1),
(71, 'contain', 'содержать', 16, 1, 42, 1),
(72, 'various', 'различный', 18, 1, 43, 1),
(73, 'warranty', 'гарантия', 17, 1, 44, 1),
(74, 'want', 'хотеть', 16, 1, 45, 1),
(75, 'here', 'здесь', 5, 1, 46, 1),
(76, 'response', 'ответ', 17, 1, 47, 1),
(77, 'ensure', 'обеспечить, гарантировать', 16, 1, 48, 1),
(78, 'payment', 'оплата', 17, 1, 49, 1),
(79, 'sent', 'отправленный', 18, 1, 50, 1),
(80, 'yet', 'пока', 5, 1, 51, 1),
(81, 'ready', 'готово', 5, 1, 52, 1),
(82, 'previously', 'ранее', 5, 1, 53, 1),
(83, 'useful', 'полезный', 18, 1, 54, 1),
(84, 'prevent', 'предотвращать', 16, 1, 55, 1),
(85, 'spares', 'экономить', 16, 1, 56, 1),
(86, 'but', 'но', 19, 1, 57, 1),
(87, 'attention', 'внимание', 17, 1, 58, 1),
(88, 'chaining', 'сцепление, связывание', 17, 1, 59, 1),
(89, 'support', 'поддержка', 17, 1, 60, 1),
(90, 'vendor', 'продавец, производитель', 17, 1, 61, 1),
(91, 'ask', 'спрашивать', 16, 1, 62, 1),
(92, 'then', 'затем', 5, 1, 63, 1),
(93, 'because', 'потому что', 5, 1, 64, 1),
(94, 'determine', 'определять', 16, 1, 65, 1),
(95, 'how', 'как', 5, 1, 66, 1),
(96, 'previous', 'предыдущий', 18, 1, 67, 1),
(97, 'entry', 'вход', 17, 1, 68, 1),
(98, 'suggested', 'предложенный', 18, 1, 69, 1),
(99, 'invoice', 'накладная', 17, 1, 70, 1),
(100, 'usual', 'обычный', 18, 1, 71, 1),
(101, 'send', 'посылать', 16, 1, 72, 1),
(102, 'browse', 'просматривать выбрать', 16, 1, 73, 1),
(103, 'powerful', 'мощный', 18, 1, 74, 1),
(104, 'own', 'собственный', 18, 1, 75, 1),
(108, 'launch', 'запуск', 17, 1, 76, 1),
(109, 'entirely', 'полностью', 5, 1, 77, 1),
(110, 'topic', 'тема', 17, 1, 78, 1),
(111, 'enough', 'достаточно', 5, 1, 79, 1),
(112, 'fill', 'заполнять', 16, 1, 80, 1),
(113, 'vital', 'жизненно важный', 18, 1, 81, 1),
(114, 'must', 'обязательно', 5, 1, 82, 1),
(115, 'reveals', 'покажет', 16, 1, 83, 1),
(116, 'anybody', 'кто-нибудь', 5, 1, 84, 1),
(117, 'involved', 'занимающийся', 16, 1, 85, 1),
(118, 'knowledge', 'знание', 17, 1, 86, 1),
(119, 'requirement', 'требование', 17, 1, 87, 1),
(121, 'also', 'также', 19, 1, 88, 1),
(122, 'may', 'мочь', 16, 1, 89, 1),
(123, 'really', 'очень', 5, 1, 90, 1),
(124, 'numerous', 'многочисленный', 18, 1, 91, 1),
(125, 'follow', 'следовать', 16, 1, 92, 1),
(126, 'besides', 'Кроме того', 19, 1, 93, 1),
(127, 'software', 'программное обеспечение', 17, 1, 94, 1),
(128, 'benefit', 'преиммущество', 17, 1, 95, 1),
(129, 'possible', 'возможный', 18, 1, 96, 1),
(130, 'hundreds', 'Сотни', 17, 1, 97, 1),
(131, 'improving', 'улучшение', 17, 1, 98, 1),
(132, 'since', 'с  после', 1, 1, 99, 1),
(133, 'immense', 'огромный', 18, 1, 100, 1),
(134, 'effort', 'усилие', 17, 1, 101, 1),
(135, 'allow', 'позволять', 16, 1, 102, 1),
(136, 'to fit', 'подойти', 16, 1, 103, 1),
(137, 'however', 'однако', 5, 1, 104, 1),
(138, 'purpose', 'цель', 17, 1, 105, 1),
(139, 'many', 'много', 5, 1, 106, 1),
(140, 'sure', 'конечно', 5, 1, 107, 1),
(141, 'stick', 'Придерживаться', 16, 1, 108, 1),
(142, 'depends', 'зависит', 16, 1, 109, 1),
(143, 'either', 'любой', 18, 1, 110, 1),
(144, 'source', 'ресурс источник', 17, 1, 111, 1),
(145, 'perhaps', 'возможно', 5, 1, 112, 1),
(146, 'sense', 'смысл', 17, 1, 113, 1),
(147, 'will', 'будет', 16, 1, 114, 1),
(148, 'instead', 'Вместо', 5, 1, 115, 1),
(149, 'into', 'в на к', 1, 1, 116, 1),
(150, 'them', 'их', 3, 1, 117, 1),
(151, 'afterwards', 'впоследствии', 5, 1, 118, 1),
(152, 'through', 'через', 1, 1, 119, 1),
(153, 'when', 'когда', 19, 1, 120, 1),
(155, 'reason', 'причина', 17, 1, 121, 1),
(156, 'somebody', 'кто-то', 3, 1, 122, 1),
(157, 'pointless', 'бессмысленный', 18, 1, 123, 1),
(158, 'encounter', 'столкнуться', 16, 1, 124, 1),
(159, 'certain', 'определенный', 18, 1, 125, 1),
(160, 'intercepted', 'перехваченный', 18, 1, 126, 1),
(161, 'always', 'всегда', 5, 1, 127, 1),
(162, 'specifies', 'указанный', 18, 1, 128, 1),
(163, 'within', 'внутри', 5, 1, 129, 1),
(164, 'as', 'как', 5, 1, 130, 1),
(165, 'extra', 'дополнительный', 18, 1, 131, 1),
(166, 'note that', 'Обратите внимание, что', 17, 1, 132, 1),
(167, 'keep', 'держать', 16, 1, 133, 1),
(168, 'internal', 'внутренний', 18, 1, 134, 1),
(169, 'clutter', 'беспорядок', 17, 1, 135, 1),
(170, 'below', 'под', 1, 1, 136, 1),
(171, 'careful', 'осторожный', 18, 1, 137, 1),
(172, 'share', 'делиться', 16, 1, 138, 1),
(173, 'first of all', 'прежде всего', 0, 1, 139, 1),
(174, 'from scratch', 'с нуля', 0, 1, 140, 1),
(175, 'sometimes', 'иногда', 5, 1, 141, 1),
(176, 'versus', 'против', 0, 1, 142, 1),
(177, 'whether', 'будь то', 5, 1, 143, 1),
(178, 'hold', 'содержать', 16, 1, 144, 1),
(179, 'incoming', 'входящий', 18, 1, 145, 1),
(180, 'suppose', 'Предполагать', 16, 1, 146, 1),
(181, 'receive', 'получать', 16, 1, 147, 1),
(182, 'same', 'одинаковый такой же', 18, 1, 148, 1),
(183, 'performance', 'представление', 17, 1, 149, 1),
(184, 'convenient', 'удобный', 18, 1, 150, 1),
(185, 'place', 'место', 17, 1, 151, 1),
(186, 'in addition', 'кроме того', 5, 1, 152, 1),
(187, 'tells', 'говорит', 16, 1, 153, 1),
(188, 'any', 'любой', 18, 1, 154, 1),
(189, 'occurs', 'происходит', 16, 1, 155, 1),
(190, 'consideration', 'рассмотрение', 17, 1, 156, 1),
(191, 'mind', 'ум', 17, 1, 157, 1),
(192, 'keep mind', 'имейте в виду', 16, 1, 158, 1),
(193, 'separate', 'разделять', 16, 1, 159, 1),
(194, 'advantage', 'преимущество', 17, 1, 160, 1),
(195, 'drawback', 'недостаток', 0, 1, 161, 1),
(196, 'verb', 'глагол', 17, 1, 162, 1),
(197, 'restrict', 'ограничивать', 16, 1, 163, 1),
(198, 'lot', 'много', 5, 1, 164, 1),
(199, 'grows', 'растет', 16, 1, 165, 1),
(200, 'eventually', 'в итоге', 5, 1, 166, 1),
(201, 'issue', 'проблема задача вопрос', 17, 1, 167, 1),
(202, 'evaluates', 'оценивает', 16, 1, 168, 1),
(203, 'pass', 'передать пройти', 16, 1, 169, 1),
(204, 'expect', 'ожидать', 16, 1, 170, 1),
(205, 'probably', 'возможно', 5, 1, 171, 1),
(206, 'imagine', 'воображать представлять', 16, 1, 172, 1),
(207, 'reuse', 'повторное использование', 17, 1, 173, 1),
(208, 'prefer', 'предпочитать', 16, 1, 174, 1),
(209, 'concise', 'краткий сжатый', 18, 1, 175, 1),
(210, 'decrease', 'уменьшать', 0, 1, 176, 1),
(211, 'as soon as', 'как только', 5, 1, 177, 1),
(212, 'common', 'общий', 18, 1, 178, 1),
(213, 'might', 'вероятно', 5, 1, 179, 1),
(214, 'rest', 'остальное', 5, 1, 180, 1),
(215, 'directly', 'непосредственно', 5, 1, 181, 1),
(216, 'during', 'в течение', 5, 1, 182, 1),
(217, 'important', 'важный', 18, 1, 183, 1),
(218, 'whenever', 'всякий раз, когда', 0, 1, 184, 0),
(219, 'declare', 'объявлять', 16, 1, 185, 1),
(220, 'report', 'отчет', 17, 1, 186, 1),
(221, 'explicitly', 'явно', 5, 1, 187, 1),
(222, 'definition', 'определение', 17, 1, 188, 1),
(223, 'anything else', 'что-нибудь еще', 5, 1, 189, 1),
(224, 'already', 'уже', 1, 1, 190, 1),
(225, 'explain', 'объяснять', 16, 1, 191, 1),
(226, 'able', 'способный', 18, 1, 192, 1),
(227, 'thing', 'вещь', 17, 1, 193, 1),
(228, 'vague', 'неопределенный, смутный расплывчатый', 18, 1, 194, 1),
(229, 'tries', 'пытается', 16, 1, 195, 1),
(230, 'happens', 'происходит', 16, 1, 196, 0),
(231, 'remaining', 'оставшийся', 18, 1, 197, 1),
(232, 'belonging', 'принадлежащий', 18, 1, 198, 1),
(233, 'still', 'все еще', 5, 1, 199, 1),
(234, 'way', 'способ', 17, 1, 200, 1),
(235, 'dispatching', 'отправка', 17, 1, 201, 1),
(236, 'listening', 'прослушивание', 17, 1, 202, 1),
(237, 'without', 'без', 1, 1, 203, 1),
(238, 'boils down', 'свестись', 16, 1, 204, 1),
(239, 'most likely', 'скорее всего', 5, 1, 205, 1),
(240, 'throughout', 'на протяжении', 5, 1, 206, 1),
(241, 'earlier', 'ранее', 5, 1, 207, 1),
(242, 'both', 'оба', 3, 1, 208, 1),
(243, 'respond', 'реагировать', 16, 1, 209, 1),
(244, 'confusing', 'запутанный', 18, 1, 210, 1),
(245, 'just realize', 'просто поймите', 16, 1, 211, 1),
(246, 'worse', 'хуже', 5, 1, 212, 1),
(247, 'too many', 'слишком много', 5, 1, 213, 1),
(248, 'tempting', 'заманчиво', 5, 1, 214, 1),
(249, 'dozens', 'десятки', 17, 1, 215, 1),
(250, 'slow', 'медленный', 18, 1, 216, 1),
(251, 'hard', 'трудный', 18, 1, 217, 1),
(252, 'advice', 'совет', 17, 1, 218, 1),
(253, 'even better', 'еще лучше', 5, 1, 219, 1),
(254, 'opportunity', 'возможность', 17, 1, 220, 1),
(255, 'cool', 'крутой', 18, 1, 221, 1),
(256, 'briefly', 'кратко', 5, 1, 222, 1),
(257, 'often', 'часто', 5, 1, 223, 1),
(258, 'compatible', 'совместимый', 18, 1, 224, 1),
(259, 'one by one', 'по одному', 5, 1, 225, 1),
(260, 'means', 'означает', 16, 1, 226, 1),
(261, 'outside', 'снаружи', 5, 1, 227, 1),
(262, 'thoroughly', 'тщательно', 5, 1, 228, 0),
(263, 'like', 'похожий', 18, 1, 229, 1),
(264, 'entire', 'весь полный', 5, 1, 230, 1),
(265, 'flexible', 'гибкий', 18, 1, 231, 1),
(266, 'violate', 'нарушать', 16, 1, 232, 1),
(267, 'desired', 'желанный', 18, 1, 233, 1),
(268, 'append', 'добавлять', 16, 1, 234, 1),
(269, 'refer', 'относиться', 16, 1, 235, 0),
(270, 'indicates', 'указывает', 16, 1, 236, 1),
(271, 'equals', 'равен', 16, 1, 237, 1),
(272, 'quick', 'быстрый', 18, 1, 238, 1),
(273, 'exercise', 'упражнение тренировка', 17, 1, 239, 1),
(274, 'extract', 'извлекать', 16, 1, 240, 1),
(275, 'properly', 'должным образом', 5, 1, 241, 0),
(276, 'overwrite', 'переписывать', 16, 1, 242, 1),
(277, 'mentioned', 'упомянутый', 18, 1, 243, 0),
(278, 'useless', 'бесполезный', 18, 1, 244, 1),
(279, 'inspect', 'проверить', 16, 1, 245, 1),
(280, 'meets', 'соответствовать', 16, 1, 246, 1),
(281, 'everything', 'всё', 5, 1, 247, 1),
(282, 'generic', 'универсальный', 18, 1, 248, 0),
(283, 'assuming', 'Предполагая', 16, 1, 249, 0),
(284, 'arbitrary', 'произвольный', 18, 1, 250, 1),
(285, 'whatever', 'что угодно какой угодно', 5, 1, 251, 0),
(286, 'called', 'называемый', 18, 1, 252, 1),
(287, 'aid', 'помощь поддержка', 17, 1, 253, 0),
(288, 'gain', 'получить', 16, 1, 254, 0),
(289, 'awesome', 'потрясающий', 18, 1, 255, 1),
(290, 'exception', 'исключение', 18, 1, 256, 0),
(291, 'introduce', 'вводить', 16, 1, 257, 0),
(292, 'tiny', 'крошечный', 18, 1, 258, 1),
(293, 'consists', 'состоит', 16, 1, 259, 0),
(294, 'fetch', 'получить', 16, 1, 260, 0),
(295, 'replace', 'заменять', 16, 1, 261, 1),
(296, 'once', 'как только', 5, 1, 262, 0),
(297, 'flaw', 'недостаток', 17, 1, 263, 0),
(298, 'wrong', 'неправильный', 18, 1, 264, 0),
(299, 'weird', 'странный', 18, 1, 265, 0),
(300, 'confirm', 'подтверждать', 16, 1, 266, 0),
(301, 'apply', 'применять', 16, 1, 267, 0),
(302, 'further', 'дальнейший', 18, 1, 268, 0),
(303, 'condition', 'состояние', 17, 1, 269, 0),
(304, 'therefore', 'следовательно', 5, 1, 270, 0),
(305, 'beware', 'остерегаться', 16, 1, 271, 0),
(306, 'state', 'состояние', 17, 1, 272, 0),
(307, 'assigned', 'присвоенный', 18, 1, 273, 0),
(308, 'of course', 'Конечно', 5, 1, 274, 0),
(309, 'similar', 'схожий', 18, 1, 275, 0),
(310, 'frequently', 'часто', 5, 1, 276, 0),
(311, 'even', 'даже, еще', 5, 1, 277, 0),
(312, 'approach', 'подход', 17, 1, 278, 0),
(313, 'collect', 'собирать', 16, 1, 279, 0),
(314, 'goal', 'цель', 17, 1, 280, 0),
(315, 'discover', 'находить', 16, 1, 281, 0),
(316, 'preparing', 'подготовка', 17, 1, 282, 0),
(317, 'intent', 'цель', 17, 1, 283, 0),
(318, 'elaborate', 'Сложный', 18, 1, 284, 0),
(319, 'takes up', 'занимать', 16, 1, 285, 0),
(320, 'become', 'стать', 16, 1, 286, 0),
(321, 'decides', 'решает', 16, 1, 287, 0),
(322, 'parentheses', 'скобки', 17, 1, 288, 0),
(323, 'cover', 'покрытие охват', 17, 1, 289, 0),
(324, 'nonetheless', 'тем не менее', 5, 1, 290, 0),
(325, 'less', 'менее меньше', 5, 1, 291, 0),
(326, 'missing', 'пропущенный', 18, 1, 292, 0),
(327, 'becomes', 'становиться', 16, 1, 293, 0),
(328, 'make sure', 'убедиться', 16, 1, 294, 0),
(329, 'commonly', 'Обычно', 5, 1, 295, 0),
(330, 'complete', 'полный', 18, 1, 296, 0),
(331, 'actually', 'на самом деле', 5, 1, 297, 0),
(332, 'mandatory', 'обязательный', 18, 1, 298, 0),
(333, 'regarding', 'касательно', 5, 1, 299, 0),
(334, 'underscore', 'подчеркивать', 16, 1, 300, 0),
(335, 'proper', 'правильный', 18, 1, 301, 0),
(336, 'decide', 'решать', 16, 1, 302, 0),
(337, 'increase', 'увеличение', 17, 1, 303, 0),
(338, 'destination', 'место назначения', 17, 1, 304, 0),
(339, 'forget', 'забыть', 16, 1, 305, 0),
(340, 'entity', 'сущность', 17, 1, 306, 0),
(341, 'undo', 'отменить', 16, 1, 307, 0),
(342, 'rollback', 'отмена', 17, 1, 308, 0),
(343, 'above', 'выше', 5, 1, 309, 0),
(344, 'completed', 'завершенный', 18, 1, 310, 0),
(345, 'anymore', 'больше', 5, 1, 311, 0),
(346, 'obviously', 'очевидно', 5, 1, 312, 0),
(347, 'remote', 'удаленный', 18, 1, 313, 0),
(348, 'avoid', 'избегать', 16, 1, 314, 0);

--
-- Структура таблицы `#__crib_categories`
--

CREATE TABLE IF NOT EXISTS `#__crib_categories` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `#__crib_categories`
--

INSERT IGNORE INTO `#__crib_categories` (`id`, `name`, `alias`, `state`) VALUES
(1, 'предлоги', 'predlogi', 1),
(3, 'местоимения', '', 1),
(5, 'наречие', 'narechie', 1),
(16, 'глагол', 'glagol', 1),
(17, 'существительное', 'sushchestvitelnoe', 1),
(18, 'прилагательное', 'prilagatelnoe', 1),
(19, 'союз', 'soyuz', 1);

