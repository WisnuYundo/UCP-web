<?
//****База и настройки*****//
date_default_timezone_set ('Asia/Omsk'); // часовой пояс
define("DB_HOST","localhost"); // хост базы данных
define("DB_USER","a0138087_123qs"); // пользователь базы данных
define("DB_PASS",""); // пароль от базы данных
define("DB_BASE","a0138087_123qs"); // имя базы данных
@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("NO CONNECT FOR DATABASE");
@mysql_select_db(DB_BASE)
or die("ERROR mysql_select_db()");
$maxnews = 10;//Максимально новостей

$account = array (
	'table' => 'account',//Таблица с аккаунтами
	'pass' => 'Password',//Переменная пароля
	'name' => 'Name',//Переменная имени
	'level' => 'Level',//Переменная уровня
	'exp' => 'Exp',//Переменная Exp
	'cash' => 'Cash',//Переменная денег на руках
	'bank' => 'Bank',//Переменная денег в банке
	'id' => 'id',//id аккаунта
	'admin' => 'Admin',//админка
	'drugs' => 'Drugs',//Наркотики
	'sex' => 'Sex',//пол
	'skin' => 'Skin',//скин
	'mail' => 'mail',//Переменная почты
	'datavhod' => 'LastDate',//Переменная даты последнего входа
	'numberphone' => 'Number',//телефон игрока
	'pcash' => 'Pcash',//денег на телефоне
	'wanted' => 'wanted',//розыск
	'ipreg' => 'ipreg',//Ip регистрации
	'datareg' => 'datareg',//дата регистрации
	'ipvhod' => 'ipvhod',//Ip последнего входа
	'subnetreg' => 'subnetreg',//Подсеть
	//admin
	'dataadmin' => 'dataadmin',//дата назначение
	'getadmin' => 'getadmin',//Кто поставил
	//скиллы
	'deagle' => 'skill1',//скилл дигла
	'shotgun' => 'skill2',//скилл дробовика
	'mp5' => 'skill3',//скилл mp5
	'ak47' => 'skill4',//скилл ak
	'm4' => 'skill5',//скилл m4
	'sdpistol' => 'skill6',//скилл sdpistol
	//лицензии
	'vodprava' => 'lic1',//права
	'vertlic' => 'lic2',//полеты
	'vodalic' => 'lic3',//водянка
	'gunlic' => 'lic4',//оружие
	'bizlic' => 'lic5',//биз
	//
	'job' => 'pob',//подработка
	'leader' => 'Leader',//лидерка
	'member' => 'Member',//фракция
	'rank' => 'Rang',//ранг
	'car' => 'Car',//тачка
	'house' => 'House',//дом
	'biz' => 'Biz',//бизнес
	'ban' => 'Ban',
	'online' => 'Online',
	'donate' => 'Donate',//бизнес
	'warn' => 'Warn'//бизнес
	);

$site = array(
	'nameproject' => 'Swatch',
	'keywords' => 'начать играть в гта са, гта по сети, андреас, GTA, Grand Theft Auto, самп, samp, sa-mp, гта са, swatch, свотч, s-rp, с-рп, роле плей, RolePlay, сервер, са мп, multiplayer',
	'description' => 'Выбери сам, кем ты хочешь стать в нашей игре'
);
//-------------------------//
?>