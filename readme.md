## UCP-web 

# hal pertama yang harus lu lakuin && PERINGATAN 1    

* ikutin tutorial [TUTORIAL LINK](https://www.codingnepalweb.com/configure-xampp-to-send-mail-from-localhost/) ***Pencet link ini untuk melihat tutorial tanpa tutorial Ini Kalian Akan Gagal*** 

## Warning
* bukan untuk di jual ini for all!!!!!
* sambungin databes dengan databes lu!!!!
* sesuain script ama databes lu!!!!
* sambungin databes lu di bagian connection.php
* setelah itu pergi ke controllerUserData.php untuk melihat panduan berikutnya

# PERINGATAN  2   ini harus
```sql
CREATE TABLE `playerucp` (
  `jangan di perhatiin` (11) NOT NULL,
  `jangan di perhatiin` (255) NOT NULL,
  `jangan di perhatiin` (255) NOT NULL,
  `jangan di perhatiin` (255) NOT NULL,
  `code` mediumint(50) NOT NULL, /*Harus Lu Tambahin*/
  `status` text NOT NULL, /*Harus Lu Tambahin*/
  `jangan di perhatiin` (11) NOT NULL DEFAULT '137', 
  `jangan di perhatiin` (32) NOT NULL DEFAULT '0',
  `jangan di perhatiin` (32) NOT NULL DEFAULT '0',
  `jangan di perhatiin` (32) NOT NULL DEFAULT '0',
  `jangan di perhatiin` (11) NOT NULL,
  `jangan di perhatiin` (11) NOT NULL,
  `jangan di perhatiin` (11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

* yang harus di tambah dalam databes anda adalah 
```sql
`code` mediumint(50) NOT NULL,
`status` text NOT NULL,
```
* untuk contohnya ada pada line 14 dan 15 ini penting

# PERINGATAN 3
**jika ingin mengkonfigurasikan file yang ada di controllerUserData.php pastikan untuk mengkonfigurasikan file lainya pokonya yang di tanda [''] rubah yang di dalam titik 2 itu merubah databes memerlukan waktu untuk mengkonfigurasi kan script
pokonya selebihnya itu sesuain ama nama databes dan jangan lupa mengaturnya di dalam controllerUserData soalnya home.php, login.php, logout.php regis.php itu dia ngeget dari file controllerUserData harap dipastikan bila merubah script pada controllerUserData 
dan pastikan bahwa line 14 dan 15 harus di tambahakan di dalam databes sekian dari saya terima kasi**


* Jika ada yang anda ingin katakan atau anda tanyakan bisa pm discord saya 
* dan bila ingin melihat contoh databesnya ada pada file databes anda perhatikan!

## Desktop Mode Preview 
![Previw](https://cdn.discordapp.com/attachments/890404151811510342/891329669863989289/unknown.png)
![Previw](https://cdn.discordapp.com/attachments/890404151811510342/891329722582188072/unknown.png)
![Previw](https://cdn.discordapp.com/attachments/890404151811510342/891329754358239272/unknown.png)

## Mobile Mode Preview
![Previw](https://cdn.discordapp.com/attachments/890404151811510342/891330059493855282/unknown.png)
![Previw](https://cdn.discordapp.com/attachments/890404151811510342/891330082759663676/unknown.png)
![Previw](https://cdn.discordapp.com/attachments/890404151811510342/891330160811458590/unknown.png)

# pm discord TheJayඞ#7217 kalo ada yang pusing
![The Jay](https://github.com/Yazrc/UCP-web/blob/main/credit%20=%20TheJay/thejay.png?raw=true)
