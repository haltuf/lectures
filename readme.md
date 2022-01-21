Nette - přihlašování uživatelů z databáze, vlastní Authenticator
=

Kód v tomto repozitáři je výsledkem mého výukového videa: [Nette - přihlašování uživatelů z databáze, vlastní Authenticator](https://youtu.be/xe9J_qIBmc8)

## Instalace

1. Naklonujte si nebo si stáhněte tento repozitář 
2. Spusťte na svém počítači Docker Desktop. Pokud ho nemáte, nainstalujte si ho.
3. Spusťte v naklonovaném repozitáři soubor `.docker/up.bat`
4. Napište v příkazové řádce `docker exec example composer install`
5. Otevřete svůj oblíbený prohlížeč.
6. Napište do adresního řádku `localhost`. Měla by se objevit typická úvodní stránka z nette/web-project včetně debuggovací lišty.
7. Napište do adresního řádku `localhost:8080`. Měl by se objevit PHPMyAdmin s jednou tabulkou jménem `user` s jedním záznamem.

Na adrese `localhost/admin/sign-in` najdete přihlašovací formulář.

Výchozí username je `test`, heslo `test`.

Šablonu použitou ve videu najdete [zde](https://www.edooca.cz/public/theme.zip). Do složky www je třeba nahrát všechny podadresáře z `.theme/dist/assets`.  
Originální zdrojové kódy šablony naleznete [zde](https://github.com/codescandy/Dash-UI). ZIP soubor přidán k videu jako laskavost pro méně pokročilé programátory, pro něž by kompilace `dist` adresáře byla příliš náročným úkolem.