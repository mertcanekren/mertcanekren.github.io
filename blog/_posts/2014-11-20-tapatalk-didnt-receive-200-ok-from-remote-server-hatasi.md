---
layout: post
title: Tapatalk "didn't receive 200 ok from remote server" hatası
author: mertcan
categories: []
---

Geçenlerde&nbsp;PHPBB kurulu olan forum sitesine Tapatalk kurdum. Kurulum sitede yer alan <a href="https://tapatalk.com/activate_tapatalk.php?plugin=phpbb" target="_blank">dokümantasyon</a> göre sıkıntısız kuruldu. Tapatalk aktif olarak çalışması için kendi sitesi üzerinden api key oluşturdum ve aktif olması için hesabı ekledim. Fakat tüm url, plugin kurulumu tam olmasına rağmen tam aktif olacağı sırada&nbsp;"didn't receive 200 ok from remote server" hatası ile tapatalk üzerinden aktif edemiyordu. Kendi forum sitelerinde olan düzenlemeler url forum url yönlendirmesinden kaynaklanır gibi bir kaç post ile karşılaştım. Benim kurduğum forumda yönlendirme ile ilgili bir işlem bulunmuyordu. Plugin kurulduğu klasöre (mobiquo) 755 iznini vererek çözdüm.
