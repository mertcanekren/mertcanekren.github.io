---
layout: post
title: apache mod_rewrite aktif etmek
date: 2013-08-24 23:52
author: mertcan
comments: true
categories: [apache, apache mod_rewrite, apache2, Linux, mod_rewrite, sudo, Web]
---
Apache kurulumundan sonra genelde mod_rewrite modülü aktif olmuyor. Bunu için küçük bir dosya kopyalaması ve düzenleme ile aktif duruma getiriyoruz.<br /><br />İlk olarak&nbsp;sudo cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled komutu ile dosya taşıma işlemini gerçekleştiriyoruz. Daha sonra&nbsp;sudo nano /etc/apache2/sites-enabled/000-default dosyasını açarak&nbsp;AllowOverride None yazan yerleri&nbsp;AllowOverride all olarak değiştiriyoruz. Son olarak sudo /etc/init.d/apache2 restart komutu ile apache yi yeniden başlatarak aktif duruma getiriyoruz.
