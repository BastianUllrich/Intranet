<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значення повинно бути Ні.',
    'This value should be true.' => 'Значення повинно бути Так.',
    'This value should be of type {{ type }}.' => 'Тип значення повинен бути {{ type }}.',
    'This value should be blank.' => 'Значення повинно бути пустим.',
    'The value you selected is not a valid choice.' => 'Обране вами значення недопустиме.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ви повинні обрати хоча б {{ limit }} варіант.|Ви повинні обрати хоча б {{ limit }} варіанти.|Ви повинні обрати хоча б {{ limit }} варіантів.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ви повинні обрати не більше ніж {{ limit }} варіантів.',
    'One or more of the given values is invalid.' => 'Одне або кілька заданих значень є недопустимі.',
    'This field was not expected.' => 'Це поле не очікується.',
    'This field is missing.' => 'Це поле не вистачає.',
    'This value is not a valid date.' => 'Дане значення не є вірною датою.',
    'This value is not a valid datetime.' => 'Дане значення дати та часу недопустиме.',
    'This value is not a valid email address.' => 'Значення адреси электронної пошти недопустиме.',
    'The file could not be found.' => 'Файл не знайдено.',
    'The file is not readable.' => 'Файл не читається.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий ({{ size }} {{ suffix }}). Дозволений максимальний розмір {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файлу недопустимий ({{ type }}). Допустимі MIME-типи файлів {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значення повинно бути {{ limit }} або менше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значення занадто довге. Повинно бути рівне {{ limit }} символу або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.',
    'This value should be {{ limit }} or more.' => 'Значення повинно бути {{ limit }} або більше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значення занадто коротке. Повинно бути рівне {{ limit }} символу або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.',
    'This value should not be blank.' => 'Значення не повинно бути пустим.',
    'This value should not be null.' => 'Значення не повинно бути null.',
    'This value should be null.' => 'Значення повинно бути null.',
    'This value is not valid.' => 'Значення недопустиме.',
    'This value is not a valid time.' => 'Значення часу недопустиме.',
    'This value is not a valid URL.' => 'Значення URL недопустиме.',
    'The two values should be equal.' => 'Обидва занчення повинні бути одинаковими.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий. Максимальний допустимий розмір {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадто великий.',
    'The file could not be uploaded.' => 'Файл не можливо завантажити.',
    'This value should be a valid number.' => 'Значення має бути допустимим числом.',
    'This file is not a valid image.' => 'Цей файл не є допустимим форматом зображення.',
    'This is not a valid IP address.' => 'Це некоректна IP адреса.',
    'This value is not a valid language.' => 'Це некоректна мова.',
    'This value is not a valid locale.' => 'Це некоректна локалізація.',
    'This value is not a valid country.' => 'Це некоректна країна.',
    'This value is already used.' => 'Це значення вже використовується.',
    'The size of the image could not be detected.' => 'Не вдалося визначити розмір зображення.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина зображення занадто велика ({{ width }}px). Максимально допустима ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина зображення занадто мала ({{ width }}px). Мінімально допустима ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висота зображення занадто велика ({{ height }}px). Максимально допустима висота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висота зображення занадто мала ({{ height }}px). Мінімально допустима висота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значення має бути поточним паролем користувача.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значення повиино бути рівним {{ limit }} символу.|Значення повиино бути рівним {{ limit }} символам.|Значення повиино бути рівним {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл був завантажений лише частково.',
    'No file was uploaded.' => 'Файл не був завантажений.',
    'No temporary folder was configured in php.ini.' => 'Не налаштована тимчасова директорія в php.ini.',
    'Cannot write temporary file to disk.' => 'Неможливо записати тимчасовий файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Розширення PHP викликало помилку при завантаженні.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ця колекція повинна містити {{ limit }} елемент чи більше.|Ця колекція повинна містити {{ limit }} елемента чи більше.|Ця колекція повинна містити {{ limit }} елементів чи більше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ця колекція повинна містити {{ limit }} елемент чи менше.|Ця колекція повинна містити {{ limit }} елемента чи менше.|Ця колекція повинна містити {{ limit }} елементов чи менше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ця колекція повинна містити рівно {{ limit }} елемент.|Ця колекція повинна містити рівно {{ limit }} елемента.|Ця колекція повинна містити рівно {{ limit }} елементів.',
    'Invalid card number.' => 'Невірний номер карти.',
    'Unsupported card type or invalid card number.' => 'Непідтримуваний тип карти або невірний номер карти.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Це не дійсний міжнародний номер банківського рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значення не у форматі ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значення не у форматі ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значення не відповідає форматам ISBN-10 та ISBN-13.',
    'This value is not a valid ISSN.' => 'Значення має невірний формат ISSN.',
    'This value is not a valid currency.' => 'Значення має невірний формат валюти.',
    'This value should be equal to {{ compared_value }}.' => 'Значення повинно дорівнювати {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значення має бути більше ніж {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значення має бути більше або дорівнювати {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення має бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значення повинно бути менше ніж {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значення повинно бути менше або дорівнювати {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значення не повинно дорівнювати  {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення не повинно бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Співвідношення сторін зображення занадто велике ({{ ratio }}). Максимальне співвідношення сторін {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Співвідношення сторін зображення занадто мало ({{ ratio }}). Мінімальне співвідношення сторін {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Зображення квадратне ({{ width }}x{{ height }}px). Квадратні зображення не дозволені.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Зображення альбомної орієнтації ({{ width }}x{{ height }}px). Зображення альбомної орієнтації не дозволені.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Зображення в портретній орієнтації ({{ width }}x{{ height }}px). Зображення в портретної орієнтації не дозволені.',
    'An empty file is not allowed.' => 'Порожні файли не дозволені.',
    'The host could not be resolved.' => 'Ім\'я хоста не знайдено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значення не збігається з очікуваним {{ charset }} кодуванням.',
    'This is not a valid Business Identifier Code (BIC).' => 'Це не дійсний банківський код (BIC).',
    'Error' => 'Помилка',
    'This is not a valid UUID.' => 'Це не валідне значення UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Це значення повинне бути кратним {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банківський код (BIC) не пов’язаний із міжнародним номером банківського рахунку (IBAN) {{ iban }}.',
    'This value should be valid JSON.' => 'Значення має бути корректним JSON.',
    'This collection should contain only unique elements.' => 'Ця колекція повинна мати тільки унікальни значення.',
    'This value should be positive.' => 'Значення має бути позитивним.',
    'This value should be either positive or zero.' => 'Значення має бути позитивним або дорівнювати нулю.',
    'This value should be negative.' => 'Значення має бути негативним.',
    'This value should be either negative or zero.' => 'Значення має бути негативним або дорівнювати нулю.',
    'This value is not a valid timezone.' => 'Значення не є дійсним часовим поясом.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Цей пароль був скомпрометований в результаті витоку даних та не повинен використовуватися. Будь ласка, використовуйте інший пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значення має бути між {{ min }} та {{ max }}.',
    'This form should not contain extra fields.' => 'Ця форма не повинна містити додаткових полів.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Завантажений файл занадто великий. Будь-ласка, спробуйте завантажити файл меншого розміру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значення недопустиме. Будь-ласка, спробуйте відправити форму знову.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Помилка автентифікації.',
    'Authentication credentials could not be found.' => 'Автентифікаційні дані не знайдено.',
    'Authentication request could not be processed due to a system problem.' => 'Запит на автентифікацію не може бути опрацьовано у зв’язку з проблемою в системі.',
    'Invalid credentials.' => 'Невірні автентифікаційні дані.',
    'Cookie has already been used by someone else.' => 'Хтось інший вже використав цей сookie.',
    'Not privileged to request the resource.' => 'Відсутні права на запит цього ресурсу.',
    'Invalid CSRF token.' => 'Невірний токен CSRF.',
    'Digest nonce has expired.' => 'Закінчився термін дії одноразового ключа дайджесту.',
    'No authentication provider found to support the authentication token.' => 'Не знайдено провайдера автентифікації, що підтримує токен автентифікаціії.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія недоступна, її час вийшов, або cookies вимкнено.',
    'No token could be found.' => 'Токен не знайдено.',
    'Username could not be found.' => 'Ім’я користувача не знайдено.',
    'Account has expired.' => 'Термін дії облікового запису вичерпано.',
    'Credentials have expired.' => 'Термін дії автентифікаційних даних вичерпано.',
    'Account is disabled.' => 'Обліковий запис відключено.',
    'Account is locked.' => 'Обліковий запис заблоковано.',
  ),
  'time' => 
  array (
    'diff.ago.year' => '%count% рiк тому|%count% роки тому|%count% рокiв тому',
    'diff.ago.month' => '%count% мiсяць тому|%count% мiсяцi тому|%count% мiсяцiв тому',
    'diff.ago.day' => '%count% день тому|%count% днi тому|%count% днiв тому',
    'diff.ago.hour' => '%count% годину тому|%count% години тому|%count% годин тому',
    'diff.ago.minute' => '%count% хвилину тому|%count% хвилини тому|%count% хвилин тому',
    'diff.ago.second' => '%count% секунду тому|%count% секунди тому|%count% секунд тому',
    'diff.empty' => 'зараз',
    'diff.in.second' => 'через %count% секунду|через %count% секунди|через %count% секунд',
    'diff.in.hour' => 'через %count% годину|через %count% години|через %count% годин',
    'diff.in.minute' => 'через %count% хвилину|через %count% хвилини|через %count% хвилин',
    'diff.in.day' => 'через %count% день|через %count% днi|через %count% днiв',
    'diff.in.month' => 'через %count% мiсяць|через %count% мiсяцi|через %count% мiсяцiв',
    'diff.in.year' => 'через %count% рiк|через %count% роки|через %count% рокiв',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'time' => 
  array (
    'diff.ago.year' => '1 year ago|%count% years ago',
    'diff.ago.month' => '1 month ago|%count% months ago',
    'diff.ago.day' => '1 day ago|%count% days ago',
    'diff.ago.hour' => '1 hour ago|%count% hours ago',
    'diff.ago.minute' => '1 minute ago|%count% minutes ago',
    'diff.ago.second' => '1 second ago|%count% seconds ago',
    'diff.empty' => 'now',
    'diff.in.second' => 'in 1 second|in %count% seconds',
    'diff.in.hour' => 'in 1 hour|in %count% hours',
    'diff.in.minute' => 'in 1 minute|in %count% minutes',
    'diff.in.day' => 'in 1 day|in %count% days',
    'diff.in.month' => 'in 1 month|in %count% months',
    'diff.in.year' => 'in 1 year|in %count% years',
  ),
  'maintenance' => 
  array (
    'lexik_maintenance.success_unlock' => 'Server is online.',
    'lexik_maintenance.not_success_unlock' => 'Impossible to do this action.',
    'lexik_maintenance.not_success_lock' => 'Server is already locking.',
    'lexik_maintenance.success_lock_database' => 'Server is under maintenance with driver database.',
    'lexik_maintenance.success_lock_file' => 'Server is under maintenance with driver file.',
    'lexik_maintenance.success_lock_memc' => 'Server is under maintenance with memcache.',
    'lexik_maintenance.success_lock_shm' => 'Server is under maintenance with shm.',
  ),
  'messages' => 
  array (
    'install_tool' => 'Contao install tool',
    'an_error_occurred' => 'An error occurred',
    'locked_headline' => 'The install tool has been locked!',
    'locked_explanation' => 'For security reasons, the install tool has been locked after a wrong password had been entered more than three times in a row. You can unlock it in the Contao Manager or by running <code>contao:install:unlock</code> on the command line.',
    'file_permissions_headline' => 'PHP is not allowed to write files!',
    'file_permissions_explanation' => 'Your server does not support file access via PHP; most likely PHP runs as Apache module under a different user. Please contact your server administrator and ask him to fix the problem.',
    'file_permissions_warning' => '<strong>Do not attempt to fix this yourself by making files and folders writable for everyone!</strong>',
    'accept_license' => 'Accept license',
    'set_password' => 'Install tool password',
    'set_password_hint' => 'Please enter a password to prevent unauthorized access.',
    'password' => 'Password',
    'confirmation' => 'Confirmation',
    'save_password' => 'Save password',
    'password_confirmation_mismatch' => 'The password does not match the confirmation!',
    'password_too_short' => 'The password should be at least %d characters long!',
    'login' => 'Login',
    'login_explanation' => 'Please enter the install tool password. The install tool password is not the same as the Contao back end password.',
    'allow_cookies' => 'You have to allow cookies to use Contao.',
    'invalid_password' => 'Invalid password!',
    'database_connection' => 'Database connection',
    'database_connected' => 'Database connection established.',
    'database_dot_in_dbname' => 'The database name must not contain dots!',
    'database_could_not_connect' => 'Could not connect to the database!',
    'database_connection_explain' => 'Please enter your database connection parameters.',
    'database_host' => 'Host',
    'database_port' => 'Port number',
    'database_user' => 'Username',
    'database_password' => 'Password',
    'database_name' => 'Database name',
    'save_settings' => 'Save settings',
    'update_tables' => 'Update the database',
    'update_tables_explain' => 'Please note that the update assistant only handles tables starting with <code>tl_</code>.',
    'update_tables_confirm' => 'The database is up to date.',
    'update_save' => 'Update database',
    'CREATE' => 'Create tables',
    'ALTER_ADD' => 'Add columns',
    'ALTER_CHANGE' => 'Change columns',
    'ALTER_DROP' => 'Drop columns',
    'DROP' => 'Drop tables',
    'select_all' => 'Select all',
    'template_import' => 'Import a template',
    'template_import_explain' => 'Here you can import an <code>.sql</code> file from the <code>templates</code> directory. Any existing data will be deleted! If you only want to import a theme, please use the theme manager in the Contao back end instead.',
    'import_exception' => 'The import failed! Is the database up to date and is the template file compatible with your Contao version?',
    'import_empty_source' => 'Please choose a template file!',
    'import_data_will_be_deleted' => 'Any existing data will be deleted!',
    'imported_on' => 'Template imported on %s.',
    'templates' => 'Templates',
    'do_not_truncate' => 'Do not truncate the tables',
    'import_confirm' => 'Any existing data will be deleted! Do you really want to continue?',
    'template_save' => 'Import template',
    'admin_create' => 'Create an admin user',
    'admin_create_explain' => 'Here you can create an admin user to log into the Contao back end.',
    'admin_confirm' => 'An admin user has been created.',
    'admin_username' => 'Username',
    'admin_name' => 'Name',
    'admin_email' => 'E-mail',
    'admin_save' => 'Create admin user',
    'admin_error_extnd' => 'For security reasons you can not use the following characters here: #<>()\\=',
    'admin_error_no_space' => 'The username must not contain any whitespace characters!',
    'admin_error_email' => 'Please enter a valid e-mail address!',
    'admin_error_password_match' => 'The passwords did not match!',
    'admin_error_password_user' => 'Your username and password must not be the same!',
    'admin_error' => 'Please fill in all fields to create an admin user!',
    'congratulations' => 'Congratulations!',
    'congratulations_explain' => 'You have successfully installed Contao.',
    'installation_complete' => 'Installation complete',
    'installation_complete_explain' => 'Now please go to the Contao back end and check the system settings.',
    'back_end' => 'Contao back end',
    'old_database' => 'The database is too old!',
    'old_database_explanation' => 'You need at least Contao 3.2 to upgrade to Contao 4.',
    'console_explanation' => 'A post installation task could not be completed!',
    'duplicate_subscriptions' => 'Duplicate subscriptions',
    'duplicate_subscriptions_begin' => 'Duplicate newsletter subscriptions found:',
    'duplicate_subscriptions_end' => 'The duplicate entries have been purged automatically. A backup of the original subscriptions has been stored in <code>tl_newsletter_recipients_backup</code>.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
