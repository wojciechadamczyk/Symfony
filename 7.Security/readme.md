# PHP - Symfony 2 - Security

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

## Statyczny user

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_static_user (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 2 - Nowy kontroler. 
W projekcie stwórz kontroler z dwoma akcjami:
  * /all
  * /restricted
  
Nastêpnie skonfiguruj Symfony w taki sposób ¿eby akcja restricted by³a dostêpna tylko i wy³¹cznie po zalogowaniu.
Masz to zrobiæ u¿ywaj¹c komponentu Security i statycznych u¿ytkowników (wpisanych na sta³e do plików konfiguracyjnych).


## FosUserBundle

### Æwiczenie 3 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_fos_user (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 4 - FosUserBundle.
W nowym projekcie uruchom FosUserBundle. Projekt na razie ma dawaæ mo¿liwoœæ logowania, rejestracji, wylogowywania i edycji swojego konta.
Poza podstawowymi informacjami które trzyma FosUserBundle, nasz u¿ytkownik powinien jeszcze trzymaæ swój opis.
Spróbuj podmieniæ widoki na swoje w³asne (¿eby nie u¿ywaæ widoków przegotowanych przez FOS).

### Æwiczenie 5.
Do ostatnich warsztatów doimplementuj funkcjonalnoœc u¿ytkowników. Ka¿dy u¿ytkownik powinien mieæ swoj¹ w³asn¹ ksi¹¿kê adresow¹.
Stwórz potrzebn¹ Ci encjê i po³¹cz j¹ z kontaktami (relacja wiele do jednego - jednokierunkowa).

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request