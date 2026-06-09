# Progetto Finale Cybersecurity - Sintesi

## Challenge 1 - Rate Limiter
- Simulato attacco DoS con richieste multiple su /articles/search
- Mitigazione: aggiunto rate limiter (throttle) sulla rotta di ricerca
- Risultato: blocco richieste e protezione del server

## Challenge 2 - CSRF / Operazioni GET
- Problema: azioni critiche via GET
- Attacco: richiesta malevola tramite pagina HTML
- Mitigazione: sostituzione GET con PATCH + protezione CSRF
- Risultato: azioni non eseguibili senza autorizzazione

## Challenge 3 - Logging
- Problema: mancanza log su operazioni critiche
- Mitigazione: logging su eventi importanti (login, articoli, ruoli)
- Risultato: tracciabilità attività utenti

## Challenge 4 - SSRF
- Attacco: modifica URL per accedere a internal.finance
- URL usato: http://internal.finance:8001/user-data.php
- Mitigazione: whitelist di sorgenti + mapping server-side
- Risultato: accesso diretto a URL bloccato

## Challenge 5 - XSS
- Attacco: script inserito nel body articolo (<script>alert('XSS')</script>)
- Mitigazione: sanitizzazione input (strip_tags / escaping Blade)
- Risultato: codice non eseguito nel browser

## Challenge 6 - Mass Assignment
- Attacco: aggiunta campo is_admin via request manipolata
- Mitigazione: restrizione $fillable nel model User
- Risultato: campi non autorizzati ignorati

## Conclusione
Il sistema è stato analizzato in ottica sicurezza web e sono state applicate mitigazioni per le principali vulnerabilità OWASP.
