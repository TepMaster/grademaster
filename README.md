# grademaster

Documentație
Grade Master

Numele aplicației: Grade Master
Versiune:0.16 Realese
Numele echipei: Marcu Solutions
Membrii echipei: Vâță Ștefan
Școala: Liceul Teoretic Miron Costin Iași
Clasa: a 11-a D
Profesor: Scutaru Alina









			Descriere Proiect:

# Scris in PHP/HTML/CSS cu următoarele dependențe:
•	meekroDB (DB hadeling) 
•	Bramus (reqest router) 
•	Bootstrap (css) 

Proiectul Grade Master s-a născut din dorința de a îmbunătăți comunicarea cu familiile elevilor și pentru facilitarea gestionarii bazelor de date privind situația școlară. 
Proiectul se adresează tuturor persoanelor care își doresc un catalog digital accesibil. Grade Master permite utilizatorilor săi urmărirea notelor și absentelor, rapid,  printr-o interfață ușor de navigat. 
Pentru sporirea confortului  utilizatorilor noștri, sunt generate automat mesaje de tip  email și SMS, în timp real, în momentul actualizării bazei de date. Serviciul este accesibil de pe orice dispozitiv cu o conexiune la internet, fiind în permanență în contact direct elevi,  părinți, profesori.
Principalele avantaje ale acestui catalog (față de cele existente pe piață)  sunt: 
	eficiență și promptitudine prin comunicare în timp real
	securitate prin notificarea conectării și transmiterea adresei IP de conectare
	costul aproape inexistent.

# Ce oferă Grade Master partenerilor săi:
	Școlii: acces platformă pentru Android, IOS si PC, rapoarte automate prin SMS, e-mail, implementare bază de date, suport tehnic.
	Părinților: acces platformă pentru Android, IOS si PC cu notificări în timp real, SMS, e-mail, comunicare cu profesorii în timp real prin intermediul platformei.
	Elevilor: acces platformă pentru Android, IOS si PC cu notificări în timp real, SMS, e-mail, comunicare cu profesorii în timp real prin intermediul platformei.

# Parola default:
ROOT (administrator system)    admin:QAZ123qaz
Elev (cont elev0) 	elev@marcu.ru:pass
Părinte (Cont părinte pentru elev0)  parinte@marcu.ru:pass
Profesor Diriginte  (Romana) 	prof@marcu.ru:pass
Profesor  (Matematica) 	prof2@marcu.ru:pass

# Analiza pieței:
După căutarea unui catalog digital existent pe piață, am dorit și contribuit la eficientizarea transmiterii informației, securitate în toate categoriile, dar în special profesorilor, precum și un cost aproape inexistent.
La o socoteală simplă, veți vedea că este mai mare costul cu mersul la școală, biletele de autobuz sau costul cu mașina personală, parcarea, întreruperea zilei de lucru și timpul alocat deplasării decât costul pentru  catalogul electronic.
Exemple: 
GradeMaster:
12 (ani de studii)  x 6  (clase /an) x 28 (elevi/clasa) = 1680 (plătitori) 
Costuri: 50x12+25x12= 900 (ron) /an=180 EURO/an
900:1680=0,5 RON/AN
Alte Platforme:
12 (ani de studii)  x 6  (clase /an) x 28 (elevi/clasa) = 1680 (plătitori) 
Costuri: 60RON*1680= 100.800 (ron) /an= 20.160 EURO/an

# Implementarea aplicatiei:
Am decis pentru o compatibilitate mai mare să implementez un sistem de tip WebApp pentru a fi accesibil pe orice arhitectură. Situl este scris în PHP datele sunt stocate într-un mod securizat în baza de date (MariaDB) . Datele de login sunt hasuite cu salt înainte de a fi salvate asigurând securitatea utilizatorilor. 
# Funcționalitate:
GradeMaster este forte ușor de folosit datorită designului simplu și intuitiv. Un alt beneficiu este că toate procesele memory intesive se desfășoară pe server și cerințele minime pentru utilizator sunt aproape inxistente  (necesită doar un webBrowser) . Toate operațiunile de pe server sunt optimizate utilizând puțină memorie și CPU (un Pc cu i5 gen 6 poate susține aproximativ 3k-5k clienți simultani care utilizează baza de date, tot conținutul static este cached pe serverele Cloudflare) .
# Technologii folosite:
	PHP
	Baza de date
	JavaScript
	HTML/CSS
	Modem GSM
# Securitate:
Aplicația a fost proiectată de la început pentru a fi securizată la atacuri cibernetice pentru evitarea exploatării serverului, s-au folosit cele mai actuale versiuni (OS, librării) . Toate câmpurile prezentate utilizatorului sunt salubrizate (User Input Sanitation)  pentru a evita injectarea codului malițios. 

# Testarea proiectului pentru exploituri:
Tot WebApp-ul a fost testat împotriva injecțiilor SQL folosind SQL Map, jSQL Injection și Burp Suite. Împotriva atacurilor de tip DDOS, site-ul folosește Cloudflare pentru a minimaliza daunele create. De asemenea, sistemul blochează automat adresele IP cunoscute ca SPAM/SCAN/BRUTE/DDOS. 
WebApp-ul a fost testat meticulos împotriva exploit-urilor și a bag-urilor asigurând utilizatorilor noștri o platformă sigură și stabilă.

# Interfața:
WebApp este accesibil prin intermediul webBrowserului și prezintă design responsiv, simplu și intuitiv de navigat.
Resurse și source code:
GradeMaster este scris integral în Php/Html/Css/Js și nu necesită compilarea codului, ci doar copierea codului sursa către rootul webservarului. Importarea bazei de date și editarea fișierului "db.class.php" cu numele bazei de date, username, parola, portul bazei de date.
Prezentare:
-sunt necesare 3 telefoane mobile (elev/profesor/părinte)  pentru  demonstrarea funcționalității sistemului de livrare sms/email în timp real,  (revin în sarcina autorului proiectului) 
- un modem GSM și o cartelă prepay cu sms-uri nelimitate (5$) ,  (revin în sarcina autorului proiectului) 
# Instalare:
1.	Instalați un server web  (apache/ Nginx)  și o bază de date  (mysql/mariaDB) 
2.	Copiați fișierele pe root-ul serverului web
3.	Instalare phpmyadmin pentru a gestiona baza de date.
4.	Importați baza de date și editați fișierul „db.class.php” cu parola/user/nume baza de date
5.	Acordați permisiuni pt upload pt folserul „images”  
6.	Instalati server de sms ca un serviciu și „main.py” configurând setările SMTP și portul COM al modulului GSM
7.	Editați fișierul „helper.php” la linia 47 și 58 înlocuind adresa IP cu adresa IP a serverul de SMS    -- opțional doar dacă servar de sms este pe alt dispozitiv, dacă este hostat pe același PC, poate fi lăsat 127.0.0.1:5000
8.	Verificați funcționalitatea site-ul 



# Utilizare panou admin (ROOT) :
1.	Cu ajutorul interfeței de admin puteți vedea/modifica/șterge toate notele/absențele folosind „Manager Note si Abs”
2.	Cu ajutorul paginii „Add users” puteți crea conturi doi de profesori/elevi/părinți  folosind butoanele aferente.
3.	Pentru a reseta parola unui cont, navigați pe pagina „Add users” introduceți mail-ul contului și dați click pe „Reset Password”
4.	Pentru a crea o clasa trebuie mai întâi să creați materialele necesare (fiecare clasă necesită materii individuale. Ex. Mate 10d,Mate10e)  introduceți numele clasei/dirigintele și ID-ul materiilor) 
5.	Pentru a atribui o clasă unui profesor trebuie să folosiți butonul „Editare artibute Profesori „selectați profesorul și dați click „Edit”  in dreptul acestuia. Veți vizualiza o listă de clasa deja atribuite acestui profesor. Pentru a  adăuga una nouă vă trebuie să introduceți ID-ul materiei/clasei.
6.	Pentru a selecta perioada școlară puteți folosi butonul „Modifica perioada școlară” prin accesarea datelor în care se pot pune note/absente sau puteți să încărcați folosind un fișier Excel cu toate datele zilelor de curs folosind phpmyadmin în tabela „date”.



Obs.
Pentru a încărca mai mulți elevi/profesori simultan în baza de data se poate folosi formatul Excel, folosind phpmyadmin în tabela „logins”.


# Lista de librării externe folosite:
•	meekroDB (DB hadeling) 
•	Bramus (reqest router) 
•	Bootstrap
•	Google-fonts
·	Boxicons (Iconite) 
·	Parti HTML CSS JS

