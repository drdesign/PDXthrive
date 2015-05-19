

### 1.2.2 - 20/04/2015

 Changes: 


 * improved update system


### 1.2.1 - 31/03/2015

 Changes: 


 * Fixed #82, remove huge spacing above testimonials section
 * Fixed #71, removed font weight 200, which is not available for open sans


### 1.2 - 04/03/2015

 Changes: 


 * Issue #46 fixed (Hover li sidebar)

Din sidebar scoate te rog hover-ul cu font-weight de pe link-urile din
sidebar.
 * Issue #47 fixed (Inputs height)

Mai mareste height-ul la inputuri ( search si comments ), textarea la
comments este ok.
 * Issue #48 fixed (Hover today's program)

Adauga putin hover cu opacity la today's program pe index.
 * Issue #49 fixed (Titlu latest news)

Aici nu ma refeream sa pui height fix pe titlul, nu asa se tractica, ci
sa limitezi height'ul la o dimensiune decenta. Gen poti pune max-height
pana terminarea butonului.
 * Issue #50 fixed (Link titlu latest news)

adauga link pe tilul de la latest news.
 * Issue #51 fixed (Responsive vertical spacing)

Issue fixed:

Pe responsive mai redu cu aprox 30% din spatierea dintre sectiuni, este
prea mare.
 * Issue #53 fixed (Responsive iOS input reset)

adauga ios input reset pentru toate formele de input-uri pe responsive.
 * Issue #54 fixed (Responsive height menu link)

mareste height-ul la link-urile din meniu si adauga o bordura intre ele,
verifica ca link-ul sa fie disponibil dpv tactil pe toata suprafata
vizuala a link-ului.
 * Issue #55 fixed (Responsive Pagina program)

Exista o eroare aici:
https://docs.google.com/file/d/0B_PXQJiDwwstQk5GeTQtU3ZMTmc/edit?usp=drivesdk

Edge case content + dynamic structure, @robciucioan intri si tu la
training :)
 * Issue #56 fixed (Responsive z-index meu)

Adauga un z-index pe meniu ca este o eroare aici:
https://docs.google.com/file/d/0B_PXQJiDwwstSmxCT21ndUJoMEE/edit?usp=drivesdk
 * Issue #57 fixed (Responsive Menu icon active)

Adauga clasa active pe menu icon.
 * Issue #58 (Responsive Gallery items)

Aici acel hover cu titlu si lupa ar trebuii activat by default pe
responsive.
 * Issue #59 fixed (Comments font)

Adauga putin stil pe continutul de la comentarii + fa markup test pls.
 * Issue #60 fixed (Comments - stil buton reply)

Adauga stil pe butonul de reply, similiar cu butonul submit
 * Issue #61 fixed

La comentarii headline-ul arata ciudat, sa il aliniezi a stanga pls.
https://docs.google.com/file/d/0B_PXQJiDwwstSTRFQnE0Y0hjUGc/edit?usp=drivesdk
 * Issue #62 fixed (Responsive - recent posts)

Pe responsive, tableta, la widgetul recent posts, imparte'l in doua
coloane.
 * Issue #63 fixed (Responsive Centrare background)

Adauga background center top pentru imaginea din subheader de pe index.
 * Issue #64 fixed (Responsive - Sectiune post meta la blog)

Sectiunea post meta de la blog arata destul de dezordonat pe mobil (
telefon ).
 * Issue #64 fixed (Responsive - Sectiune post meta la blog )

Sectiunea post meta de la blog arata destul de dezordonat pe mobil (
telefon ).
 * Issue #65 fixed (Responsive Titlu program mobil)

Pe mobil titlul la program nu se vede ok daca este prea lung.

https://docs.google.com/file/d/0B_PXQJiDwwstTDRadS12dWVRTzQ/edit?usp=drivesdk

Edge case content again!
 * Issue #66 fixed (Responsive - Centrare text)

Centreaza textul de pe pagina de program te rog.
 * Issue #68 fixed (Iframe harta)

adauga width, height 100% cu important pentru iframe-ul de la harta.
 * Merge pull request #69 from robciucioan/development

Development
 * Fixed #74, added textdomain for translations
 * Fixed #76, undefinded notices on schedule single page
 * Fixed #78, remove not used images in the theme, to reduce theme size
 * This fixes #79

Replaced screenshot, the dimensions needed are now correct
 * Merge pull request #80 from DragosBubu/development

This fixes #79
 * Fixed #73, default values in customizer for frontpage
 * This fixes #70

Schedule image, no longer hard-coded
 * This fixes #77

The calendar looks good, now


### 1.2 - 26/01/2015

 Changes: 


 * new test

- add new test line
 * new line [1]

new line [1] description
 * first commit

first description!!
 * Centrare testimoniale
 * News - featured image
 * updates
 * Issue #3. Subheader content width.

Am marit widthul pentru content la 650px, la h1 am pus  widthul 100%.
 * Issue #4. logo position & size.

Am remediat problema.
 * Issue #5. features icon.

Am rezolvat problema.
 * Issue #6. Testimonials fixes.

Am schimbat img cu figure si am pus imaginea cu background, am setat
background-size:cover. Ca sa nu se mai vada 2 testimoniale pe slide am
setat heightul 391px pentru clasa list_carousel_entry.
 * Issue #7. latest news nr.
 * Issue #9. background image feat zone.
 * Issue #11. blog box shadow.
 * Issue #13. blog - egaleaza height-ul.
 * Issue #14. spatiu paginare.
 * Issue #15. blog single.
 * Issue #17. admin nav
 * Issue #19. post fara imagine
 * Issue #21. Markup And Formatting.
 * Issues #10 , #12 , #16 , #18
 * Issue #1

Am facut calculatorul bmi.
 * Schedule section
 * Responsive
 * Issue #2 fixed
 * Issue #30 - Aliniere meniu
 * Issue #24 - spatiu footer
 * Issue #25 - Centrare text zi
 * Issue #26 - no image
 * Issue #27 - Harta footer
 * Issue #29 - Single image
 * Issue #32 - Hover recent posts
 * Issue #36 - BMI calc
 * Issue #37 - header image+bmi image
 * Issue #35 - Scos fb comments
 * Issue #34 - widgetized footer
 * Issue #31 fixed

Issue fixed: Sa postezi pe TM contact-form-ul pentru pagina de contact.

Cod Contact Form 7:

[text* your-name placeholder "Name *"]
[email* your-email placeholder "email@themeisle.com"]
[textarea your-message placeholder "Your Message *"]
[submit "Send"]
 * Issue #39 fixed

Issue fixed: Ionu adauga te rog si TGM activation pentru cf7.
 * Issue #40 fixed

Issue fixed:

Aici la blog si pagini, scoate acel fundal albastru si pune numele
paginii in partea stanga, acesta est eun element ce va fi folosit intr-o
alta tema.
 * Issue #41 fixed

Issue fixed:

Pentru pagina de Blog nu se pot seta cate articole sa apara per pagina,
Acest lucru sa se seteze din settings>reading, sa rezolvi te rog aici.
 * Issue #42 fixed

Issue fixed:

Progamul de pe index trebuie sa se ordoneze in functie de ora care este
adaugata acolo.
 * Issue #43 fixed

Issue fixed:

Mai adauga putin adding-top la textarea de la contactform, nu este egal
pe toate partile.
 * Issue #44 fixed

Issue fixed:

Pe index la latest posts se vede urat daca titlul este prea mare
https://docs.google.com/file/d/0B_PXQJiDwwstazRIa0kyWXNTaG8/edit?usp=drivesdk
 * Issue #45 fixed

Issue fixed:

Am discutat aici, sa faci sa se vada titlul la blog mai ok, fara
pattern-ul din psd sau altele.
