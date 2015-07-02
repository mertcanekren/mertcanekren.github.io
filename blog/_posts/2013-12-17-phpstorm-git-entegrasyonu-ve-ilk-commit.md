---
layout: post
title: PhpStorm Git Entegrasyonu ve İlk Commit
date: 2013-12-17 18:40
author: mertcan
comments: true
categories: [commit, git, git commit, github, IDE, phpstorm, phpstorm git, version control, Web]
---
<div style="clear: both; text-align: center;"><a style="margin-left: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/phpstorm-logo.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/phpstorm-logo.jpg" alt="" width="400" height="257" border="0" /></a></div>
JetBrains PhpStorm, IDE olarak günümüzde kullanılan en yaygın php geliştirme araçlarından biri. İçinde barındırdığı bir çok özellik, eklenebilir bir çok eklentilere sahip olması ile ile kolay ve rahat kullanıma sahip.

İçinde barındırdığı güzel özelliklerinde biri version control sistemleri ile birlikte entegre olarak çalışması. Git ile entegre çalışması için bir kaç ayarlama ve tanımlamalar yapmamı gerekiyor. Elimden geldiğince bunları paylaşmaya çalışacağım.

İlk olarak kullandığımız sisteme git kurmamız gerekiyor. Bunu için <a href="http://git-scm.com/">http://git-scm.com/</a> adresini ziyaret ederek kendi işletim sistemimize göre uygun olan git kurulum dosyalarını indirerek sistemimize kurabiliriz.

<a name="more"></a>

Linux işletim sistemleri için konstoldan <span style="text-decoration: underline;">apt-get install git</span> diyerek sisteminize kurulum yapabilirsiniz.

Sistemimize kurulum yaptıktan sonra PhpStorm üzerinde ayarlar kısmında bulunan Version Control bölümünde ki git alanından kurulum yaptığımız dizinde bulunan git.exe dosyasının yolunu belirtiyoruz.
<div style="clear: both; text-align: center;"><a style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g-300x122.jpg" alt="" width="640" height="262" border="0" /></a></div>
git.exe dosyasının yolunu belirttikten sonra çalıştığınız proje üzerinde ki .git klasörünü yine ayarlar bölümünde bulunan version control bölümünde olan directory listesine ekliyoruz.
<div style="clear: both; text-align: center;"><a style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g2.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g2-300x65.jpg" alt="" width="640" height="138" border="0" /></a></div>
Resimde bulunan yeşil + simgesine tıklayarak çalıştığınız projenin yolunu belirip ekleyebilirsiniz.
<div style="clear: both; text-align: center;"><a style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g3.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g3-300x119.jpg" alt="" width="640" height="255" border="0" /></a></div>
Bundan sonra bu proje üzerinde PhpStorm üzerinde dosyalarda değişiklik yaptığınızda düzenleme yaptığınız dosyanın adı mavi olarak değişecektir ve changes tablosunda değişiklik yapmış olduğunuz dosyanın adını göreceksiniz
<div style="clear: both; text-align: center;"><a style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g4.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g4-300x90.jpg" alt="" width="640" height="193" border="0" /></a></div>
Benim değişiklik yaptığım projede kullandığım git sistemi GitHub ile entegre çalışıyor.

Değişiklik yaptığımız dosyaları commit atmak için default altında bulunan dosyaların bulunduğu yere sağ tıklayarak commit changes diyoruz.
<div style="clear: both; text-align: center;"><a style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g5.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g5-300x190.jpg" alt="" width="400" height="253" border="0" /></a></div>
Daha sonra açılan pencerede commit açıklamasını yazarak commit and push diyoruz

<a style="clear: left; display: inline !important; margin-bottom: 1em; margin-right: 1em; text-align: center;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g6.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g6-294x300.jpg" alt="" width="390" height="400" border="0" /></a>

Daha sonra açılan ekranda hangi branch, hangi proje üzerine commit atıyoruz onları gösteren bir pencere geliyor.
<div style="clear: both; text-align: center;"><a style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;" href="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g7.jpg"><img src="http://www.mertcanekren.com/blog/wp-content/uploads/2013/12/g7-300x275.jpg" alt="" width="400" height="366" border="0" /></a></div>
push dedikten sonra projemize commit atmış oluyoruz.
