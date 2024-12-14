<?php
$servidor = "localhost";
$usuario = "root"; // Tu usuario de la base de datos
$contraseña = ""; // Tu contraseña de la base de datos
$nombre_base_de_datos = "CMDB_11"; // Nombre de tu base de datos

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $contraseña, $nombre_base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
<!DOCTYPE html><html data-build=3D"prod-25bd1e85c53506c069b1c38c72896959d65=
32fd6" dir=3D"ltr" class=3D"light" style=3D"color-scheme: light;" data-head=
lessui-focus-visible=3D""><head><meta http-equiv=3D"Content-Type" content=
=3D"text/html; charset=3DUTF-8"><link rel=3D"stylesheet" type=3D"text/css" =
href=3D"cid:css-dab92b5b-4317-47b2-8f61-f6e914c37a3b@mhtml.blink" /><link r=
el=3D"stylesheet" type=3D"text/css" href=3D"cid:css-3f7975b2-32a2-4392-be39=
-52ba13ed1912@mhtml.blink" /><link rel=3D"stylesheet" type=3D"text/css" hre=
f=3D"cid:css-b36d6269-a772-4896-a205-40ef42376e56@mhtml.blink" /><link rel=
=3D"stylesheet" type=3D"text/css" href=3D"cid:css-62deff78-a14b-4499-b506-9=
38d066142f7@mhtml.blink" /><link rel=3D"stylesheet" type=3D"text/css" href=
=3D"cid:css-729e5bfb-a8f3-4704-9292-ba361f631128@mhtml.blink" /><meta name=
=3D"viewport" content=3D"width=3Ddevice-width, initial-scale=3D1"><link rel=
=3D"preconnect" href=3D"https://cdn.oaistatic.com/"><meta name=3D"robots" c=
ontent=3D"index, follow"><meta name=3D"apple-itunes-app" content=3D"app-id=
=3D6448311069"><link rel=3D"apple-touch-icon" sizes=3D"180x180" href=3D"htt=
ps://cdn.oaistatic.com/assets/apple-touch-icon-mz9nytnj.webp"><link rel=3D"=
icon" type=3D"image/png" sizes=3D"32x32" href=3D"https://cdn.oaistatic.com/=
assets/favicon-32x32-p4ktpm1x.webp" media=3D"(prefers-color-scheme: light)"=
><link rel=3D"icon" type=3D"image/png" sizes=3D"32x32" href=3D"https://cdn.=
oaistatic.com/assets/favicon-dark-32x32-gt5kfzyp.webp" media=3D"(prefers-co=
lor-scheme: dark)"><link rel=3D"icon" type=3D"image/svg+xml" sizes=3D"32x32=
" href=3D"https://cdn.oaistatic.com/assets/favicon-o20kmmos.svg">
<meta property=3D"og:image" content=3D"ht=
tps://cdn.oaistatic.com/assets/chatgpt-share-og-u7j5uyao.webp"><meta proper=
ty=3D"og:><link rel=3D"stylesheet" href=
=3D"https://cdn.oaistatic.com/assets/root-msgf0obc.css"><link rel=3D"styles=
heet" href=3D"https://cdn.oaistatic.com/assets/conversation-small-ile61fj8.=
css"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"htt=
ps://cdn.oaistatic.com/assets/o6cfvwu98guy8e6o.js"><link rel=3D"moduleprelo=
ad" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets=
/isb31kc1hf2e3mcx.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=
=3D"" href=3D"https://cdn.oaistatic.com/assets/kdyshfuo29gz6wzi.js"><link r=
el=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oai=
static.com/assets/hindyi1eoo8kg761.js"><link rel=3D"modulepreload" as=3D"sc=
ript" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/dppjc0pcf4q=
v70bk.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=
=3D"https://cdn.oaistatic.com/assets/gsxkqpy7f1fludpu.js"><link rel=3D"modu=
lepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com=
/assets/b4armymlujwjuihq.js"><link rel=3D"modulepreload" as=3D"script" cros=
sorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/i1mn4uumjwfuej9b.js">=
<link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://=
cdn.oaistatic.com/assets/kwov6pqpdadqckqj.js"><link rel=3D"modulepreload" a=
s=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/l239=
kt6s4j40y4na.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D""=
 href=3D"https://cdn.oaistatic.com/assets/k18wiyzxuc5ehdkc.js"><link rel=3D=
"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistati=
c.com/assets/nk9q2ec149c12hl4.js"><link rel=3D"modulepreload" as=3D"script"=
 crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/fk363qum6vegxjpt=
.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"htt=
ps://cdn.oaistatic.com/assets/fzrn137102spawew.js"><link rel=3D"moduleprelo=
ad" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets=
/ep1s1er4o2p869vd.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=
=3D"" href=3D"https://cdn.oaistatic.com/assets/kvgl8gn88ozgq97y.js"><link r=
el=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oai=
static.com/assets/btagl6w1gub4aw61.js"><link rel=3D"modulepreload" as=3D"sc=
ript" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/niyhks06wcp=
9vfyg.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=
=3D"https://cdn.oaistatic.com/assets/ficifsu3qthc6xyg.js"><link rel=3D"modu=
lepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com=
/assets/bx8iihb4114bljna.js"><link rel=3D"modulepreload" as=3D"script" cros=
sorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/c4bxzbp1808foto4.js">=
<link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://=
cdn.oaistatic.com/assets/o6h0uj2r2c4ef9nh.js"><link rel=3D"modulepreload" a=
s=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/fg9q=
p807r8rd7yf3.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D""=
 href=3D"https://cdn.oaistatic.com/assets/iej0cupg2dqkmejt.js"><link rel=3D=
"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistati=
c.com/assets/e7mwoxpcgyxs45n9.js"><link rel=3D"modulepreload" as=3D"script"=
 crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/o65dvu4tmsaixz2l=
.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"htt=
ps://cdn.oaistatic.com/assets/n3zpik2hgrcy4gsp.js"><link rel=3D"moduleprelo=
ad" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets=
/g4tl5lt9yqf20m4s.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=
=3D"" href=3D"https://cdn.oaistatic.com/assets/jk8w36bsokizpx57.js"><link r=
el=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oai=
static.com/assets/g1bz5ylcnhbb5wqu.js"><link rel=3D"modulepreload" as=3D"sc=
ript" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/d2do4q5bd7e=
t5zlx.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=
=3D"https://cdn.oaistatic.com/assets/eqa3nliewllgdsv7.js"><link rel=3D"modu=
lepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com=
/assets/gfwb8nupllbo9wa7.js"><link rel=3D"modulepreload" as=3D"script" cros=
sorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/f0zxgysl1scjrjlj.js">=
<link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://=
cdn.oaistatic.com/assets/ctpxmpkyq6qv35fg.js"><link rel=3D"modulepreload" a=
s=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/iob0=
k340ufv9mu6a.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D""=
 href=3D"https://cdn.oaistatic.com/assets/ghdjreqw0bymhcfb.js"><link rel=3D=
"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistati=
c.com/assets/hglnhn2tb7pvctkg.js"><link rel=3D"modulepreload" as=3D"script"=
 crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/jp4mkzhrtwyorop0=
.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"htt=
ps://cdn.oaistatic.com/assets/n9g50103104vwid9.js"><link rel=3D"moduleprelo=
ad" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets=
/ab81rro89971qirq.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=
=3D"" href=3D"https://cdn.oaistatic.com/assets/hvpmlja50sgyw8b8.js"><link r=
el=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oai=
static.com/assets/i9b0myy8mbpauibh.js"><link rel=3D"modulepreload" as=3D"sc=
ript" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/jk93jgdo6ho=
hffe8.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=
=3D"https://cdn.oaistatic.com/assets/n0aaojat4jpvjou9.js"><link rel=3D"modu=
lepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com=
/assets/og7imah72wwt62f1.js"><link rel=3D"modulepreload" as=3D"script" cros=
sorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/ofejr8iq94eu19lv.js">=
<link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://=
cdn.oaistatic.com/assets/hzsto6gjic35y48y.js"><link rel=3D"modulepreload" a=
s=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/omq6=
4j4lf0v0mjdo.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D""=
 href=3D"https://cdn.oaistatic.com/assets/ivn41kt0kshyoy9e.js"><link rel=3D=
"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistati=
c.com/assets/dou8z19epdlfd4or.js"><link rel=3D"modulepreload" as=3D"script"=
 crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/nkckhbi5ft4184iw=
.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"htt=
ps://cdn.oaistatic.com/assets/dpwi0l2hsd2yjki3.js"><link rel=3D"moduleprelo=
ad" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets=
/kqwdyvkaaavvn8k3.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=
=3D"" href=3D"https://cdn.oaistatic.com/assets/ol7wqtfziqk9eted.js"><link r=
el=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oai=
static.com/assets/8eauvrvm7g227q06.js"><link rel=3D"modulepreload" as=3D"sc=
ript" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/inku2yo7nwx=
f4eea.js"><link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=
=3D"https://cdn.oaistatic.com/assets/izaw40mm5ou346ym.js"><link rel=3D"modu=
lepreload" as=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com=
/assets/oyrjulmncp1dmbe8.js"><link rel=3D"modulepreload" as=3D"script" cros=
sorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/dq267j7exce8h7i1.js">=
<link rel=3D"modulepreload" as=3D"script" crossorigin=3D"" href=3D"https://=
cdn.oaistatic.com/assets/b047zhqpqn2az9lc.js"><link rel=3D"modulepreload" a=
s=3D"script" crossorigin=3D"" href=3D"https://cdn.oaistatic.com/assets/f4yk=
4925ccdb7wln.js"></head><body class=3D"" style=3D""><span data-testid=3D"bl=
ocking-initial-modals-done" class=3D"hidden"></span><div class=3D"relative =
flex h-full w-full overflow-hidden transition-colors z-0"><div class=3D"z-[=
21] flex-shrink-0 overflow-x-hidden bg-token-sidebar-surface-primary max-md=
:!w-0" style=3D"width:260px"><div class=3D"h-full w-[260px]"><div class=3D"=
flex h-full min-h-0 flex-col"><div class=3D"draggable relative h-full w-ful=
l flex-1 items-start border-white/20"><h2 style=3D"position:absolute;border=
:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, =
0, 0, 0);white-space:nowrap;word-wrap:normal">Historial del chat</h2><nav c=
lass=3D"flex h-full w-full flex-col px-3" aria-label=3D"Historial del chat"=
><div class=3D"flex justify-between flex h-[60px] items-center md:h-header-=
height"><span class=3D"flex" data-state=3D"closed"><button aria-label=3D"Ce=
rrar barra lateral" data-testid=3D"close-sidebar-button" class=3D"h-10 roun=
ded-lg px-2 text-token-text-secondary focus-visible:outline-0 disabled:text=
-token-text-quaternary focus-visible:bg-token-sidebar-surface-secondary ena=
bled:hover:bg-token-sidebar-surface-secondary no-draggable"><svg width=3D"2=
4" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3=
.org/2000/svg" class=3D"icon-xl-heavy max-md:hidden"><path fill-rule=3D"eve=
nodd" clip-rule=3D"evenodd" d=3D"M8.85719 3H15.1428C16.2266 2.99999 17.1007=
 2.99998 17.8086 3.05782C18.5375 3.11737 19.1777 3.24318 19.77 3.54497C20.7=
108 4.02433 21.4757 4.78924 21.955 5.73005C22.2568 6.32234 22.3826 6.96253 =
22.4422 7.69138C22.5 8.39925 22.5 9.27339 22.5 10.3572V13.6428C22.5 14.7266=
 22.5 15.6008 22.4422 16.3086C22.3826 17.0375 22.2568 17.6777 21.955 18.27C=
21.4757 19.2108 20.7108 19.9757 19.77 20.455C19.1777 20.7568 18.5375 20.882=
6 17.8086 20.9422C17.1008 21 16.2266 21 15.1428 21H8.85717C7.77339 21 6.899=
25 21 6.19138 20.9422C5.46253 20.8826 4.82234 20.7568 4.23005 20.455C3.2892=
4 19.9757 2.52433 19.2108 2.04497 18.27C1.74318 17.6777 1.61737 17.0375 1.5=
5782 16.3086C1.49998 15.6007 1.49999 14.7266 1.5 13.6428V10.3572C1.49999 9.=
27341 1.49998 8.39926 1.55782 7.69138C1.61737 6.96253 1.74318 6.32234 2.044=
97 5.73005C2.52433 4.78924 3.28924 4.02433 4.23005 3.54497C4.82234 3.24318 =
5.46253 3.11737 6.19138 3.05782C6.89926 2.99998 7.77341 2.99999 8.85719 3ZM=
6.35424 5.05118C5.74907 5.10062 5.40138 5.19279 5.13803 5.32698C4.57354 5.6=
146 4.1146 6.07354 3.82698 6.63803C3.69279 6.90138 3.60062 7.24907 3.55118 =
7.85424C3.50078 8.47108 3.5 9.26339 3.5 10.4V13.6C3.5 14.7366 3.50078 15.52=
89 3.55118 16.1458C3.60062 16.7509 3.69279 17.0986 3.82698 17.362C4.1146 17=
.9265 4.57354 18.3854 5.13803 18.673C5.40138 18.8072 5.74907 18.8994 6.3542=
4 18.9488C6.97108 18.9992 7.76339 19 8.9 19H9.5V5H8.9C7.76339 5 6.97108 5.0=
0078 6.35424 5.05118ZM11.5 5V19H15.1C16.2366 19 17.0289 18.9992 17.6458 18.=
9488C18.2509 18.8994 18.5986 18.8072 18.862 18.673C19.4265 18.3854 19.8854 =
17.9265 20.173 17.362C20.3072 17.0986 20.3994 16.7509 20.4488 16.1458C20.49=
92 15.5289 20.5 14.7366 20.5 13.6V10.4C20.5 9.26339 20.4992 8.47108 20.4488=
 7.85424C20.3994 7.24907 20.3072 6.90138 20.173 6.63803C19.8854 6.07354 19.=
4265 5.6146 18.862 5.32698C18.5986 5.19279 18.2509 5.10062 17.6458 5.05118C=
17.0289 5.00078 16.2366 5 15.1 5H11.5ZM5 8.5C5 7.94772 5.44772 7.5 6 7.5H7C=
7.55229 7.5 8 7.94772 8 8.5C8 9.05229 7.55229 9.5 7 9.5H6C5.44772 9.5 5 9.0=
5229 5 8.5ZM5 12C5 11.4477 5.44772 11 6 11H7C7.55229 11 8 11.4477 8 12C8 12=
.5523 7.55229 13 7 13H6C5.44772 13 5 12.5523 5 12Z" fill=3D"currentColor"><=
/path></svg><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"n=
one" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-xl-heavy md:hidden"=
><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 8C3 7.44772 3.44=
772 7 4 7H20C20.5523 7 21 7.44772 21 8C21 8.55228 20.5523 9 20 9H4C3.44772 =
9 3 8.55228 3 8ZM3 16C3 15.4477 3.44772 15 4 15H14C14.5523 15 15 15.4477 15=
 16C15 16.5523 14.5523 17 14 17H4C3.44772 17 3 16.5523 3 16Z" fill=3D"curre=
ntColor"></path></svg></button></span><div class=3D"flex"><span class=3D"fl=
ex" data-state=3D"closed"><button aria-label=3D"Ctrl K" class=3D"h-10 round=
ed-lg px-2 text-token-text-secondary focus-visible:outline-0 disabled:text-=
token-text-quaternary focus-visible:bg-token-sidebar-surface-secondary enab=
led:hover:bg-token-sidebar-surface-secondary"><svg width=3D"24" height=3D"2=
4" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg"=
 class=3D"icon-xl-heavy"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" =
d=3D"M10.75 4.25C7.16015 4.25 4.25 7.16015 4.25 10.75C4.25 14.3399 7.16015 =
17.25 10.75 17.25C14.3399 17.25 17.25 14.3399 17.25 10.75C17.25 7.16015 14.=
3399 4.25 10.75 4.25ZM2.25 10.75C2.25 6.05558 6.05558 2.25 10.75 2.25C15.44=
44 2.25 19.25 6.05558 19.25 10.75C19.25 12.7369 18.5683 14.5645 17.426 16.0=
118L21.4571 20.0429C21.8476 20.4334 21.8476 21.0666 21.4571 21.4571C21.0666=
 21.8476 20.4334 21.8476 20.0429 21.4571L16.0118 17.426C14.5645 18.5683 12.=
7369 19.25 10.75 19.25C6.05558 19.25 2.25 15.4444 2.25 10.75Z" fill=3D"curr=
entColor"></path></svg></button></span><span class=3D"flex" data-state=3D"c=
losed"><button aria-label=3D"Nuevo chat" data-testid=3D"create-new-chat-but=
ton" class=3D"h-10 rounded-lg px-2 text-token-text-secondary focus-visible:=
outline-0 disabled:text-token-text-quaternary focus-visible:bg-token-sideba=
r-surface-secondary enabled:hover:bg-token-sidebar-surface-secondary"><svg =
width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"currentColor" xmln=
s=3D"http://www.w3.org/2000/svg" class=3D"icon-xl-heavy"><path d=3D"M15.672=
9 3.91287C16.8918 2.69392 18.8682 2.69392 20.0871 3.91287C21.3061 5.13182 2=
1.3061 7.10813 20.0871 8.32708L14.1499 14.2643C13.3849 15.0293 12.3925 15.5=
255 11.3215 15.6785L9.14142 15.9899C8.82983 16.0344 8.51546 15.9297 8.29289=
 15.7071C8.07033 15.4845 7.96554 15.1701 8.01005 14.8586L8.32149 12.6785C8.=
47449 11.6075 8.97072 10.615 9.7357 9.85006L15.6729 3.91287ZM18.6729 5.3270=
8C18.235 4.88918 17.525 4.88918 17.0871 5.32708L11.1499 11.2643C10.6909 11.=
7233 10.3932 12.3187 10.3014 12.9613L10.1785 13.8215L11.0386 13.6986C11.681=
2 13.6068 12.2767 13.3091 12.7357 12.8501L18.6729 6.91287C19.1108 6.47497 1=
9.1108 5.76499 18.6729 5.32708ZM11 3.99929C11.0004 4.55157 10.5531 4.99963 =
10.0008 5.00007C9.00227 5.00084 8.29769 5.00827 7.74651 5.06064C7.20685 5.1=
1191 6.88488 5.20117 6.63803 5.32695C6.07354 5.61457 5.6146 6.07351 5.32698=
 6.63799C5.19279 6.90135 5.10062 7.24904 5.05118 7.8542C5.00078 8.47105 5 9=
.26336 5 10.4V13.6C5 14.7366 5.00078 15.5289 5.05118 16.1457C5.10062 16.750=
9 5.19279 17.0986 5.32698 17.3619C5.6146 17.9264 6.07354 18.3854 6.63803 18=
.673C6.90138 18.8072 7.24907 18.8993 7.85424 18.9488C8.47108 18.9992 9.2633=
9 19 10.4 19H13.6C14.7366 19 15.5289 18.9992 16.1458 18.9488C16.7509 18.899=
3 17.0986 18.8072 17.362 18.673C17.9265 18.3854 18.3854 17.9264 18.673 17.3=
619C18.7988 17.1151 18.8881 16.7931 18.9393 16.2535C18.9917 15.7023 18.9991=
 14.9977 18.9999 13.9992C19.0003 13.4469 19.4484 12.9995 20.0007 13C20.553 =
13.0004 21.0003 13.4485 20.9999 14.0007C20.9991 14.9789 20.9932 15.7808 20.=
9304 16.4426C20.8664 17.116 20.7385 17.7136 20.455 18.2699C19.9757 19.2107 =
19.2108 19.9756 18.27 20.455C17.6777 20.7568 17.0375 20.8826 16.3086 20.942=
1C15.6008 21 14.7266 21 13.6428 21H10.3572C9.27339 21 8.39925 21 7.69138 20=
.9421C6.96253 20.8826 6.32234 20.7568 5.73005 20.455C4.78924 19.9756 4.0243=
3 19.2107 3.54497 18.2699C3.24318 17.6776 3.11737 17.0374 3.05782 16.3086C2=
.99998 15.6007 2.99999 14.7266 3 13.6428V10.3572C2.99999 9.27337 2.99998 8.=
39922 3.05782 7.69134C3.11737 6.96249 3.24318 6.3223 3.54497 5.73001C4.0243=
3 4.7892 4.78924 4.0243 5.73005 3.54493C6.28633 3.26149 6.88399 3.13358 7.5=
5735 3.06961C8.21919 3.00673 9.02103 3.00083 9.99922 3.00007C10.5515 2.9996=
4 10.9996 3.447 11 3.99929Z" fill=3D"currentColor"></path></svg></button></=
span></div></div><div class=3D"flex-col flex-1 transition-opacity duration-=
500 relative -mr-2 pr-2 overflow-y-auto"><div class=3D"bg-token-sidebar-sur=
face-primary pt-0"><div class=3D"flex h-6 w-6 items-cente=
r justify-center text-token-text-secondary"><div class=3D"h-6 w-6"><div cla=
ss=3D"gizmo-shadow-stroke relative flex h-full items-center justify-center =
rounded-full bg-token-main-surface-primary text-token-text-primary"><svg wi=
dth=3D"41" height=3D"41" viewBox=3D"0 0 41 41" fill=3D"none" xmlns=3D"http:=
//www.w3.org/2000/svg" class=3D"h-2/3 w-2/3" role=3D"img"><text x=3D"-9999"=
 y=3D"-9999">ChatGPT</text><path d=3D"M37.5324 16.8707C37.9808 15.5241 38.1=
363 14.0974 37.9886 12.6859C37.8409 11.2744 37.3934 9.91076 36.676 8.68622C=
35.6126 6.83404 33.9882 5.3676 32.0373 4.4985C30.0864 3.62941 27.9098 3.402=
59 25.8215 3.85078C24.8796 2.7893 23.7219 1.94125 22.4257 1.36341C21.1295 0=
.785575 19.7249 0.491269 18.3058 0.500197C16.1708 0.495044 14.0893 1.16803 =
12.3614 2.42214C10.6335 3.67624 9.34853 5.44666 8.6917 7.47815C7.30085 7.76=
286 5.98686 8.3414 4.8377 9.17505C3.68854 10.0087 2.73073 11.0782 2.02839 1=
2.312C0.956464 14.1591 0.498905 16.2988 0.721698 18.4228C0.944492 20.5467 1=
.83612 22.5449 3.268 24.1293C2.81966 25.4759 2.66413 26.9026 2.81182 28.314=
1C2.95951 29.7256 3.40701 31.0892 4.12437 32.3138C5.18791 34.1659 6.8123 35=
.6322 8.76321 36.5013C10.7141 37.3704 12.8907 37.5973 14.9789 37.1492C15.92=
08 38.2107 17.0786 39.0587 18.3747 39.6366C19.6709 40.2144 21.0755 40.5087 =
22.4946 40.4998C24.6307 40.5054 26.7133 39.8321 28.4418 38.5772C30.1704 37.=
3223 31.4556 35.5506 32.1119 33.5179C33.5027 33.2332 34.8167 32.6547 35.965=
9 31.821C37.115 30.9874 38.0728 29.9178 38.7752 28.684C39.8458 26.8371 40.3=
023 24.6979 40.0789 22.5748C39.8556 20.4517 38.9639 18.4544 37.5324 16.8707=
ZM22.4978 37.8849C20.7443 37.8874 19.0459 37.2733 17.6994 36.1501C17.7601 3=
6.117 17.8666 36.0586 17.936 36.0161L25.9004 31.4156C26.1003 31.3019 26.266=
3 31.137 26.3813 30.9378C26.4964 30.7386 26.5563 30.5124 26.5549 30.2825V19=
.0542L29.9213 20.998C29.9389 21.0068 29.9541 21.0198 29.9656 21.0359C29.977=
 21.052 29.9842 21.0707 29.9867 21.0902V30.3889C29.9842 32.375 29.1946 34.2=
791 27.7909 35.6841C26.3872 37.0892 24.4838 37.8806 22.4978 37.8849ZM6.3922=
7 31.0064C5.51397 29.4888 5.19742 27.7107 5.49804 25.9832C5.55718 26.0187 5=
.66048 26.0818 5.73461 26.1244L13.699 30.7248C13.8975 30.8408 14.1233 30.90=
2 14.3532 30.902C14.583 30.902 14.8088 30.8408 15.0073 30.7248L24.731 25.11=
03V28.9979C24.7321 29.0177 24.7283 29.0376 24.7199 29.0556C24.7115 29.0736 =
24.6988 29.0893 24.6829 29.1012L16.6317 33.7497C14.9096 34.7416 12.8643 35.=
0097 10.9447 34.4954C9.02506 33.9811 7.38785 32.7263 6.39227 31.0064ZM4.297=
07 13.6194C5.17156 12.0998 6.55279 10.9364 8.19885 10.3327C8.19885 10.4013 =
8.19491 10.5228 8.19491 10.6071V19.808C8.19351 20.0378 8.25334 20.2638 8.36=
823 20.4629C8.48312 20.6619 8.64893 20.8267 8.84863 20.9404L18.5723 26.5542=
L15.206 28.4979C15.1894 28.5089 15.1703 28.5155 15.1505 28.5173C15.1307 28.=
5191 15.1107 28.516 15.0924 28.5082L7.04046 23.8557C5.32135 22.8601 4.06716=
 21.2235 3.55289 19.3046C3.03862 17.3858 3.30624 15.3413 4.29707 13.6194ZM3=
1.955 20.0556L22.2312 14.4411L25.5976 12.4981C25.6142 12.4872 25.6333 12.48=
05 25.6531 12.4787C25.6729 12.4769 25.6928 12.4801 25.7111 12.4879L33.7631 =
17.1364C34.9967 17.849 36.0017 18.8982 36.6606 20.1613C37.3194 21.4244 37.6=
047 22.849 37.4832 24.2684C37.3617 25.6878 36.8382 27.0432 35.9743 28.1759C=
35.1103 29.3086 33.9415 30.1717 32.6047 30.6641C32.6047 30.5947 32.6047 30.=
4733 32.6047 30.3889V21.188C32.6066 20.9586 32.5474 20.7328 32.4332 20.5338=
C32.319 20.3348 32.154 20.1698 31.955 20.0556ZM35.3055 15.0128C35.2464 14.9=
765 35.1431 14.9142 35.069 14.8717L27.1045 10.2712C26.906 10.1554 26.6803 1=
0.0943 26.4504 10.0943C26.2206 10.0943 25.9948 10.1554 25.7963 10.2712L16.0=
726 15.8858V11.9982C16.0715 11.9783 16.0753 11.9585 16.0837 11.9405C16.0921=
 11.9225 16.1048 11.9068 16.1207 11.8949L24.1719 7.25025C25.4053 6.53903 26=
.8158 6.19376 28.2383 6.25482C29.6608 6.31589 31.0364 6.78077 32.2044 7.595=
08C33.3723 8.40939 34.2842 9.53945 34.8334 10.8531C35.3826 12.1667 35.5464 =
13.6095 35.3055 15.0128ZM14.2424 21.9419L10.8752 19.9981C10.8576 19.9893 10=
.8423 19.9763 10.8309 19.9602C10.8195 19.9441 10.8122 19.9254 10.8098 19.90=
58V10.6071C10.8107 9.18295 11.2173 7.78848 11.9819 6.58696C12.7466 5.38544 =
13.8377 4.42659 15.1275 3.82264C16.4173 3.21869 17.8524 2.99464 19.2649 3.1=
767C20.6775 3.35876 22.0089 3.93941 23.1034 4.85067C23.0427 4.88379 22.937 =
4.94215 22.8668 4.98473L14.9024 9.58517C14.7025 9.69878 14.5366 9.86356 14.=
4215 10.0626C14.3065 10.2616 14.2466 10.4877 14.2479 10.7175L14.2424 21.941=
9ZM16.071 17.9991L20.4018 15.4978L24.7325 17.9975V22.9985L20.4018 25.4983L1=
6.071 22.9985V17.9991Z" fill=3D"currentColor"></path></svg></div></div></di=
v><div class=3D"text-sm grow overflow-hidden text-ellipsis whitespace-nowra=
p text-token-text-primary">ChatGPT</div><div class=3D"flex gap-2"><span cla=
ss=3D"flex items-center" data-state=3D"closed"><button class=3D"invisible t=
ext-token-text-secondary hover:text-token-text-primary group-hover:visible"=
><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"currentColor=
" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path d=3D"M15.672=
9 3.91287C16.8918 2.69392 18.8682 2.69392 20.0871 3.91287C21.3061 5.13182 2=
1.3061 7.10813 20.0871 8.32708L14.1499 14.2643C13.3849 15.0293 12.3925 15.5=
255 11.3215 15.6785L9.14142 15.9899C8.82983 16.0344 8.51546 15.9297 8.29289=
 15.7071C8.07033 15.4845 7.96554 15.1701 8.01005 14.8586L8.32149 12.6785C8.=
47449 11.6075 8.97072 10.615 9.7357 9.85006L15.6729 3.91287ZM18.6729 5.3270=
8C18.235 4.88918 17.525 4.88918 17.0871 5.32708L11.1499 11.2643C10.6909 11.=
7233 10.3932 12.3187 10.3014 12.9613L10.1785 13.8215L11.0386 13.6986C11.681=
2 13.6068 12.2767 13.3091 12.7357 12.8501L18.6729 6.91287C19.1108 6.47497 1=
9.1108 5.76499 18.6729 5.32708ZM11 3.99929C11.0004 4.55157 10.5531 4.99963 =
10.0008 5.00007C9.00227 5.00084 8.29769 5.00827 7.74651 5.06064C7.20685 5.1=
1191 6.88488 5.20117 6.63803 5.32695C6.07354 5.61457 5.6146 6.07351 5.32698=
 6.63799C5.19279 6.90135 5.10062 7.24904 5.05118 7.8542C5.00078 8.47105 5 9=
.26336 5 10.4V13.6C5 14.7366 5.00078 15.5289 5.05118 16.1457C5.10062 16.750=
9 5.19279 17.0986 5.32698 17.3619C5.6146 17.9264 6.07354 18.3854 6.63803 18=
.673C6.90138 18.8072 7.24907 18.8993 7.85424 18.9488C8.47108 18.9992 9.2633=
9 19 10.4 19H13.6C14.7366 19 15.5289 18.9992 16.1458 18.9488C16.7509 18.899=
3 17.0986 18.8072 17.362 18.673C17.9265 18.3854 18.3854 17.9264 18.673 17.3=
619C18.7988 17.1151 18.8881 16.7931 18.9393 16.2535C18.9917 15.7023 18.9991=
 14.9977 18.9999 13.9992C19.0003 13.4469 19.4484 12.9995 20.0007 13C20.553 =
13.0004 21.0003 13.4485 20.9999 14.0007C20.9991 14.9789 20.9932 15.7808 20.=
9304 16.4426C20.8664 17.116 20.7385 17.7136 20.455 18.2699C19.9757 19.2107 =
19.2108 19.9756 18.27 20.455C17.6777 20.7568 17.0375 20.8826 16.3086 20.942=
1C15.6008 21 14.7266 21 13.6428 21H10.3572C9.27339 21 8.39925 21 7.69138 20=
.9421C6.96253 20.8826 6.32234 20.7568 5.73005 20.455C4.78924 19.9756 4.0243=
3 19.2107 3.54497 18.2699C3.24318 17.6776 3.11737 17.0374 3.05782 16.3086C2=
.99998 15.6007 2.99999 14.7266 3 13.6428V10.3572C2.99999 9.27337 2.99998 8.=
39922 3.05782 7.69134C3.11737 6.96249 3.24318 6.3223 3.54497 5.73001C4.0243=
3 4.7892 4.78924 4.0243 5.73005 3.54493C6.28633 3.26149 6.88399 3.13358 7.5=
5735 3.06961C8.21919 3.00673 9.02103 3.00083 9.99922 3.00007C10.5515 2.9996=
4 10.9996 3.447 11 3.99929Z" fill=3D"currentColor"></path></svg></button></=
span></div></a></div></div><div><div tabindex=3D"0"><a data-discover=3D"tru=
e" ><button data-testid=3D"explore-gpts-bu=
tton" class=3D"flex w-full items-center gap-2.5 rounded-lg px-2 text-token-=
text-primary hover:bg-token-sidebar-surface-secondary h-10"><div class=3D"f=
lex h-6 w-6 items-center justify-center text-token-text-secondary"><svg wid=
th=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http:/=
/www.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-ru=
le=3D"evenodd" d=3D"M6.75 4.5C5.50736 4.5 4.5 5.50736 4.5 6.75C4.5 7.99264 =
5.50736 9 6.75 9C7.99264 9 9 7.99264 9 6.75C9 5.50736 7.99264 4.5 6.75 4.5Z=
M2.5 6.75C2.5 4.40279 4.40279 2.5 6.75 2.5C9.09721 2.5 11 4.40279 11 6.75C1=
1 9.09721 9.09721 11 6.75 11C4.40279 11 2.5 9.09721 2.5 6.75Z" fill=3D"curr=
entColor"></path><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M17=
.25 4.5C16.0074 4.5 15 5.50736 15 6.75C15 7.99264 16.0074 9 17.25 9C18.4926=
 9 19.5 7.99264 19.5 6.75C19.5 5.50736 18.4926 4.5 17.25 4.5ZM13 6.75C13 4.=
40279 14.9028 2.5 17.25 2.5C19.5972 2.5 21.5 4.40279 21.5 6.75C21.5 9.09721=
 19.5972 11 17.25 11C14.9028 11 13 9.09721 13 6.75Z" fill=3D"currentColor">=
</path><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M6.75 15C5.50=
736 15 4.5 16.0074 4.5 17.25C4.5 18.4926 5.50736 19.5 6.75 19.5C7.99264 19.=
5 9 18.4926 9 17.25C9 16.0074 7.99264 15 6.75 15ZM2.5 17.25C2.5 14.9028 4.4=
0279 13 6.75 13C9.09721 13 11 14.9028 11 17.25C11 19.5972 9.09721 21.5 6.75=
 21.5C4.40279 21.5 2.5 19.5972 2.5 17.25Z" fill=3D"currentColor"></path><pa=
th fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M17.25 15C16.0074 15 15=
 16.0074 15 17.25C15 18.4926 16.0074 19.5 17.25 19.5C18.4926 19.5 19.5 18.4=
926 19.5 17.25C19.5 16.0074 18.4926 15 17.25 15ZM13 17.25C13 14.9028 14.902=
8 13 17.25 13C19.5972 13 21.5 14.9028 21.5 17.25C21.5 19.5972 19.5972 21.5 =
17.25 21.5C14.9028 21.5 13 19.5972 13 17.25Z" fill=3D"currentColor"></path>=
</svg></div><span class=3D"text-sm">Explorar GPT</span></button></a></div><=
/div><div class=3D"flex flex-col gap-2 text-token-text-primary text-sm fals=
e mt-5 pb-2"><div><div class=3D"relative mt-5 first:mt-0 last:mb-5"><div cl=
ass=3D"sticky bg-token-sidebar-surface-primary top-0 z-20"><span class=3D"f=
lex h-9 items-center"><h3 class=3D"px-2 text-xs font-semibold text-ellipsis=
 overflow-hidden break-all pt-3 pb-2 text-token-text-primary">Hoy</h3></spa=
n></div><ol><li class=3D"relative z-[15]" data-testid=3D"history-item-0"><d=
iv class=3D"no-draggable group relative rounded-lg active:opacity-90 bg-tok=
en-sidebar-surface-secondary"><a class=3D"flex items-center gap-2 p-2" data=
-discover=3D"true" ><div class=3D"relative grow overflow-hidden whitespace-nowrap" =
dir=3D"auto" title=3D"Plantilla inicio sesi=C3=B3n HTML">Plantilla inicio s=
esi=C3=B3n HTML<div class=3D"absolute bottom-0 top-0 to-transparent ltr:rig=
ht-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sideba=
r-surface-secondary w-10 from-60%"></div></div></a><div class=3D"absolute b=
ottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 flex"><span =
class=3D"" data-state=3D"closed"><button class=3D"flex items-center justify=
-center text-token-text-secondary transition hover:text-token-text-primary =
radix-state-open:text-token-text-secondary" data-testid=3D"history-item-0-o=
ptions" type=3D"button" id=3D"radix-:r7s:" aria-haspopup=3D"menu" aria-expa=
nded=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBo=
x=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D=
"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10=
.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3=
.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 1=
0.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12=
C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046=
 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg>=
</button></span></div></div></li></ol></div><div class=3D"relative mt-5 fir=
st:mt-0 last:mb-5"><div class=3D"sticky bg-token-sidebar-surface-primary to=
p-0 z-20"><span class=3D"flex h-9 items-center"><h3 class=3D"px-2 text-xs f=
ont-semibold text-ellipsis overflow-hidden break-all pt-3 pb-2 text-token-t=
ext-primary">30&nbsp;d=C3=ADas anteriores</h3></span></div><ol><li class=3D=
"relative" data-testid=3D"history-item-0"><div class=3D"no-draggable group =
relative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-second=
ary"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true" ><div class=
=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"=
Presidente de Estados Unidos">Presidente de Estados Unidos<div class=3D"abs=
olute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:le=
ft-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary from-token-sid=
ebar-surface-primary can-hover:group-hover:from-token-sidebar-surface-secon=
dary w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60%"=
></div></div></a><div class=3D"absolute bottom-0 top-0 items-center gap-1.5=
 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=
=3D"" data-state=3D"closed"><button class=3D"flex items-center justify-cent=
er text-token-text-secondary transition hover:text-token-text-primary radix=
-state-open:text-token-text-secondary" data-testid=3D"history-item-0-option=
s" type=3D"button" id=3D"radix-:r5j:" aria-haspopup=3D"menu" aria-expanded=
=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D=
"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"ico=
n-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.895=
4 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.895=
43 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.89=
54 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 =
10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 =
19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></bu=
tton></span></div></div></li></ol></div><div class=3D"relative mt-5 first:m=
t-0 last:mb-5"><div class=3D"sticky bg-token-sidebar-surface-primary top-0 =
z-20"><span class=3D"flex h-9 items-center"><h3 class=3D"px-2 text-xs font-=
semibold text-ellipsis overflow-hidden break-all pt-3 pb-2 text-token-text-=
primary">noviembre</h3></span></div><ol><li class=3D"relative" data-testid=
=3D"history-item-0"><div class=3D"no-draggable group relative rounded-lg ac=
tive:opacity-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex =
items-center gap-2 p-2" data-discover=3D"true"><div class=3D"relative grow overflo=
w-hidden whitespace-nowrap" dir=3D"auto" title=3D"Presidencia de Venezuela =
2024">Presidencia de Venezuela 2024<div class=3D"absolute bottom-0 top-0 to=
-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to=
-r from-token-sidebar-surface-primary from-token-sidebar-surface-primary ca=
n-hover:group-hover:from-token-sidebar-surface-secondary w-8 from-0% can-ho=
ver:group-hover:w-10 can-hover:group-hover:from-60%"></div></div></a><div c=
lass=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:l=
eft-0 hidden can-hover:group-hover:flex"><span class=3D"" data-state=3D"clo=
sed"><button class=3D"flex items-center justify-center text-token-text-seco=
ndary transition hover:text-token-text-primary radix-state-open:text-token-=
text-secondary" data-testid=3D"history-item-0-options" type=3D"button" id=
=3D"radix-:r5l:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=
=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"n=
one" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=
=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.1=
0457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12Z=
M10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 1=
3.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19=
 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 1=
3.1046 17 12Z" fill=3D"currentColor"></path></svg></button></span></div></d=
iv></li></ol></div><div class=3D"relative mt-5 first:mt-0 last:mb-5"><div c=
lass=3D"sticky bg-token-sidebar-surface-primary top-0 z-20"><span class=3D"=
flex h-9 items-center"><h3 class=3D"px-2 text-xs font-semibold text-ellipsi=
s overflow-hidden break-all pt-3 pb-2 text-token-text-primary">octubre</h3>=
</span></div><ol><li class=3D"relative" data-testid=3D"history-item-0"><div=
 class=3D"no-draggable group relative rounded-lg active:opacity-90 hover:bg=
-token-sidebar-surface-secondary"><a class=3D"flex items-center gap-2 p-2" =
data-discover=3D"true"><div class=3D"relative grow overflow-hidden whitespace-nowr=
ap" dir=3D"auto" title=3D"Prueba embarazo para implante">Prueba embarazo pa=
ra implante<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0=
 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-su=
rface-primary from-token-sidebar-surface-primary can-hover:group-hover:from=
-token-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can=
-hover:group-hover:from-60%"></div></div></a><div class=3D"absolute bottom-=
0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:g=
roup-hover:flex"><span class=3D"" data-state=3D"closed"><button class=3D"fl=
ex items-center justify-center text-token-text-secondary transition hover:t=
ext-token-text-primary radix-state-open:text-token-text-secondary" data-tes=
tid=3D"history-item-0-options" type=3D"button" id=3D"radix-:r5n:" aria-hasp=
opup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"2=
4" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3=
.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"e=
venodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13=
.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 1=
0 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 =
10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 2=
1 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"curr=
entColor"></path></svg></button></span></div></div></li><li class=3D"relati=
ve" data-testid=3D"history-item-1"><div class=3D"no-draggable group relativ=
e rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-secondary"><a=
 class=3D"flex items-center gap-2 p-2" data-discover=3D"true" ><div class=3D"relati=
ve grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"Procesos d=
e Integraci=C3=B3n Matem=C3=A1tica">Procesos de Integraci=C3=B3n Matem=C3=
=A1tica<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr=
:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surfac=
e-primary from-token-sidebar-surface-primary can-hover:group-hover:from-tok=
en-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can-hov=
er:group-hover:from-60%"></div></div></a><div class=3D"absolute bottom-0 to=
p-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group=
-hover:flex"><span class=3D"" data-state=3D"closed"><button class=3D"flex i=
tems-center justify-center text-token-text-secondary transition hover:text-=
token-text-primary radix-state-open:text-token-text-secondary" data-testid=
=3D"history-item-1-options" type=3D"button" id=3D"radix-:r5p:" aria-haspopu=
p=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24" =
height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.or=
g/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"even=
odd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.10=
46 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 1=
2 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 =
13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 1=
2C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"current=
Color"></path></svg></button></span></div></div></li></ol></div><div class=
=3D"relative mt-5 first:mt-0 last:mb-5"><div class=3D"sticky bg-token-sideb=
ar-surface-primary top-0 z-20"><span class=3D"flex h-9 items-center"><h3 cl=
ass=3D"px-2 text-xs font-semibold text-ellipsis overflow-hidden break-all p=
t-3 pb-2 text-token-text-primary">septiembre</h3></span></div><ol><li class=
=3D"relative" data-testid=3D"history-item-0"><div class=3D"no-draggable gro=
up relative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-sec=
ondary"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true"><div class=
=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"=
Metodolog=C3=ADa Scrum para proyectos">Metodolog=C3=ADa Scrum para proyecto=
s<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gr=
adient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-prim=
ary from-token-sidebar-surface-primary can-hover:group-hover:from-token-sid=
ebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can-hover:gro=
up-hover:from-60%"></div></div></a><div class=3D"absolute bottom-0 top-0 it=
ems-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover=
:flex"><span class=3D"" data-state=3D"closed"><button class=3D"flex items-c=
enter justify-center text-token-text-secondary transition hover:text-token-=
text-primary radix-state-open:text-token-text-secondary" data-testid=3D"his=
tory-item-0-options" type=3D"button" id=3D"radix-:r5r:" aria-haspopup=3D"me=
nu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24" height=
=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000=
/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=
=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.1=
0457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C1=
3.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.104=
6 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 1=
3.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"=
></path></svg></button></span></div></div></li></ol></div><div class=3D"rel=
ative mt-5 first:mt-0 last:mb-5"><div class=3D"sticky bg-token-sidebar-surf=
ace-primary top-0 z-20"><span class=3D"flex h-9 items-center"><h3 class=3D"=
px-2 text-xs font-semibold text-ellipsis overflow-hidden break-all pt-3 pb-=
2 text-token-text-primary">agosto</h3></span></div><ol><li class=3D"relativ=
e" data-testid=3D"history-item-0"><div class=3D"no-draggable group relative=
 rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-secondary"><a =
class=3D"flex items-center gap-2 p-2" data-discover=3D"true ><div class=3D"relativ=
e grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"C=C3=A1lcul=
o sueldo mensual">C=C3=A1lculo sueldo mensual<div class=3D"absolute bottom-=
0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-g=
radient-to-r from-token-sidebar-surface-primary from-token-sidebar-surface-=
primary can-hover:group-hover:from-token-sidebar-surface-secondary w-8 from=
-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60%"></div></div>=
</a><div class=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:rig=
ht-0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=3D"" data-st=
ate=3D"closed"><button class=3D"flex items-center justify-center text-token=
-text-secondary transition hover:text-token-text-primary radix-state-open:t=
ext-token-text-secondary" data-testid=3D"history-item-0-options" type=3D"bu=
tton" id=3D"radix-:r5t:" aria-haspopup=3D"menu" aria-expanded=3D"false" dat=
a-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fi=
ll=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path fi=
ll-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5=
 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.104=
6 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13=
.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.895=
4 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 =
14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></button></span></=
div></div></li></ol></div><div class=3D"relative mt-5 first:mt-0 last:mb-5"=
><div class=3D"sticky bg-token-sidebar-surface-primary top-0 z-20"><span cl=
ass=3D"flex h-9 items-center"><h3 class=3D"px-2 text-xs font-semibold text-=
ellipsis overflow-hidden break-all pt-3 pb-2 text-token-text-primary">junio=
</h3></span></div><ol><li class=3D"relative" data-testid=3D"history-item-0"=
><div class=3D"no-draggable group relative rounded-lg active:opacity-90 hov=
er:bg-token-sidebar-surface-secondary"><a class=3D"flex items-center gap-2 =
p-2" data-discover=3D"true" href=3D"https://chatgpt.com/c/0353d9cc-7dd9-4d9=
4-84d6-07bcc80b56a8"><div class=3D"relative grow overflow-hidden whitespace=
-nowrap" dir=3D"auto" title=3D"Enrutadores Mongos: M=C3=BAltiples No Almace=
nan">Enrutadores Mongos: M=C3=BAltiples No Almacenan<div class=3D"absolute =
bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 r=
tl:bg-gradient-to-r from-token-sidebar-surface-primary from-token-sidebar-s=
urface-primary can-hover:group-hover:from-token-sidebar-surface-secondary w=
-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60%"></div=
></div></a><div class=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 =
ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=3D"" =
data-state=3D"closed"><button class=3D"flex items-center justify-center tex=
t-token-text-secondary transition hover:text-token-text-primary radix-state=
-open:text-token-text-secondary" data-testid=3D"history-item-0-options" typ=
e=3D"button" id=3D"radix-:r5v:" aria-haspopup=3D"menu" aria-expanded=3D"fal=
se" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24=
 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><=
path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.895=
43 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3=
 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 1=
2C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954=
 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C1=
7.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></button></=
span></div></div></li></ol></div><div class=3D"relative mt-5 first:mt-0 las=
t:mb-5"><div class=3D"sticky bg-token-sidebar-surface-primary top-0 z-20"><=
span class=3D"flex h-9 items-center"><h3 class=3D"px-2 text-xs font-semibol=
d text-ellipsis overflow-hidden break-all pt-3 pb-2 text-token-text-primary=
">mayo</h3></span></div><ol><li class=3D"relative" data-testid=3D"history-i=
tem-0"><div class=3D"no-draggable group relative rounded-lg active:opacity-=
90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex items-center =
gap-2 p-2" data-discover=3D"true"><div class=3D"relative grow overflow-hidden whit=
espace-nowrap" dir=3D"auto" title=3D"Esquema MongoDB para Torneo.">Esquema =
MongoDB para Torneo.<div class=3D"absolute bottom-0 top-0 to-transparent lt=
r:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-s=
idebar-surface-primary from-token-sidebar-surface-primary can-hover:group-h=
over:from-token-sidebar-surface-secondary w-8 from-0% can-hover:group-hover=
:w-10 can-hover:group-hover:from-60%"></div></div></a><div class=3D"absolut=
e bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden ca=
n-hover:group-hover:flex"><span class=3D"" data-state=3D"closed"><button cl=
ass=3D"flex items-center justify-center text-token-text-secondary transitio=
n hover:text-token-text-primary radix-state-open:text-token-text-secondary"=
 data-testid=3D"history-item-0-options" type=3D"button" id=3D"radix-:r61:" =
aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg w=
idth=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http=
://www.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-=
rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 =
7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 =
10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10=
.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 =
10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fil=
l=3D"currentColor"></path></svg></button></span></div></div></li><li class=
=3D"relative" data-testid=3D"history-item-1"><div class=3D"no-draggable gro=
up relative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-sec=
ondary"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true" ><div class=
=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"=
">Nuevo chat<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-=
0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-s=
urface-primary from-token-sidebar-surface-primary can-hover:group-hover:fro=
m-token-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 ca=
n-hover:group-hover:from-60%"></div></div></a><div class=3D"absolute bottom=
-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:=
group-hover:flex"><span class=3D"" data-state=3D"closed"><button class=3D"f=
lex items-center justify-center text-token-text-secondary transition hover:=
text-token-text-primary radix-state-open:text-token-text-secondary" data-te=
stid=3D"history-item-1-options" type=3D"button" id=3D"radix-:r63:" aria-has=
popup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"=
24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w=
3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"=
evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 1=
3.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 =
10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14=
 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 =
21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"cur=
rentColor"></path></svg></button></span></div></div></li></ol></div><div cl=
ass=3D"relative mt-5 first:mt-0 last:mb-5"><div class=3D"sticky bg-token-si=
debar-surface-primary top-0 z-20"><span class=3D"flex h-9 items-center"><h3=
 class=3D"px-2 text-xs font-semibold text-ellipsis overflow-hidden break-al=
l pt-3 pb-2 text-token-text-primary">2023</h3></span></div><ol><li class=3D=
"relative" data-testid=3D"history-item-0"><div class=3D"no-draggable group =
relative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-second=
ary"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true"><div class=
=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"=
Planetas: Definici=C3=B3n y criterios.">Planetas: Definici=C3=B3n y criteri=
os.<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-=
gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-pr=
imary from-token-sidebar-surface-primary can-hover:group-hover:from-token-s=
idebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can-hover:g=
roup-hover:from-60%"></div></div></a><div class=3D"absolute bottom-0 top-0 =
items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hov=
er:flex"><span class=3D"" data-state=3D"closed"><button class=3D"flex items=
-center justify-center text-token-text-secondary transition hover:text-toke=
n-text-primary radix-state-open:text-token-text-secondary" data-testid=3D"h=
istory-item-0-options" type=3D"button" id=3D"radix-:r65:" aria-haspopup=3D"=
menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24" heigh=
t=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/200=
0/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" =
d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.=
10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C=
13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.10=
46 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 =
13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor=
"></path></svg></button></span></div></div></li><li class=3D"relative" data=
-testid=3D"history-item-1"><div class=3D"no-draggable group relative rounde=
d-lg active:opacity-90 hover:bg-token-sidebar-surface-secondary"><a class=
=3D"flex items-center gap-2 p-2" data-discover=3D"true" href=3D"https://cha=
tgpt.com/c/e503ea15-f562-4be9-9cfd-77046b236a73"><div class=3D"relative gro=
w overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"Estimaci=C3=B3n =
de tareas de cocina">Estimaci=C3=B3n de tareas de cocina<div class=3D"absol=
ute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left=
-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary from-token-sideb=
ar-surface-primary can-hover:group-hover:from-token-sidebar-surface-seconda=
ry w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60%"><=
/div></div></a><div class=3D"absolute bottom-0 top-0 items-center gap-1.5 p=
r-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=
=3D"" data-state=3D"closed"><button class=3D"flex items-center justify-cent=
er text-token-text-secondary transition hover:text-token-text-primary radix=
-state-open:text-token-text-secondary" data-testid=3D"history-item-1-option=
s" type=3D"button" id=3D"radix-:r67:" aria-haspopup=3D"menu" aria-expanded=
=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D=
"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"ico=
n-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.895=
4 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.895=
43 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.89=
54 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 =
10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 =
19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></bu=
tton></span></div></div></li><li class=3D"relative" data-testid=3D"history-=
item-2"><div class=3D"no-draggable group relative rounded-lg active:opacity=
-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex items-center=
 gap-2 p-2" data-discover=3D"true" ><div class=3D"relative grow overflow-hidden whi=
tespace-nowrap" dir=3D"auto" title=3D"C=C3=B3mo ser millonario">C=C3=B3mo s=
er millonario<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right=
-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-=
surface-primary from-token-sidebar-surface-primary can-hover:group-hover:fr=
om-token-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 c=
an-hover:group-hover:from-60%"></div></div></a><div class=3D"absolute botto=
m-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover=
:group-hover:flex"><span class=3D"" data-state=3D"closed"><button class=3D"=
flex items-center justify-center text-token-text-secondary transition hover=
:text-token-text-primary radix-state-open:text-token-text-secondary" data-t=
estid=3D"history-item-2-options" type=3D"button" id=3D"radix-:r69:" aria-ha=
spopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D=
"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.=
w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D=
"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 =
13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954=
 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 1=
4 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954=
 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"cu=
rrentColor"></path></svg></button></span></div></div></li><li class=3D"rela=
tive" data-testid=3D"history-item-3"><div class=3D"no-draggable group relat=
ive rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-secondary">=
<a class=3D"flex items-center gap-2 p-2" data-discover=3D"true" href=3D"htt=
ps://chatgpt.com/c/e8e003e4-4abf-495b-bce8-3f7eb0caddc7"><div class=3D"rela=
tive grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"TransMil=
enio - Public Private Mix">TransMilenio - Public Private Mix<div class=3D"a=
bsolute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:=
left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary from-token-s=
idebar-surface-primary can-hover:group-hover:from-token-sidebar-surface-sec=
ondary w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60=
%"></div></div></a><div class=3D"absolute bottom-0 top-0 items-center gap-1=
.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><span cla=
ss=3D"" data-state=3D"closed"><button class=3D"flex items-center justify-ce=
nter text-token-text-secondary transition hover:text-token-text-primary rad=
ix-state-open:text-token-text-secondary" data-testid=3D"history-item-3-opti=
ons" type=3D"button" id=3D"radix-:r6b:" aria-haspopup=3D"menu" aria-expande=
d=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=
=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"=
icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.=
8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.=
89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10=
.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C=
17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 =
14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg><=
/button></span></div></div></li><li class=3D"relative" data-testid=3D"histo=
ry-item-4"><div class=3D"no-draggable group relative rounded-lg active:opac=
ity-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex items-cen=
ter gap-2 p-2" data-discover=3D"true" href=3D"><div class=3D"relative grow overflow-hidden =
whitespace-nowrap" dir=3D"auto" title=3D"Actualizar firmware impresora RX13=
30H">Actualizar firmware impresora RX1330H<div class=3D"absolute bottom-0 t=
op-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-grad=
ient-to-r from-token-sidebar-surface-primary from-token-sidebar-surface-pri=
mary can-hover:group-hover:from-token-sidebar-surface-secondary w-8 from-0%=
 can-hover:group-hover:w-10 can-hover:group-hover:from-60%"></div></div></a=
><div class=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-=
0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=3D"" data-state=
=3D"closed"><button class=3D"flex items-center justify-center text-token-te=
xt-secondary transition hover:text-token-text-primary radix-state-open:text=
-token-text-secondary" data-testid=3D"history-item-4-options" type=3D"butto=
n" id=3D"radix-:r6d:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-s=
tate=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=
=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path fill=
-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 1=
0C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 =
3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1=
046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 =
10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14=
 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></button></span></di=
v></div></li><li class=3D"relative" data-testid=3D"history-item-5"><div cla=
ss=3D"no-draggable group relative rounded-lg active:opacity-90 hover:bg-tok=
en-sidebar-surface-secondary"><a class=3D"flex items-center gap-2 p-2" data=
-discover=3D"true"><div class=3D"relative grow overflow-hidden whitespace-nowrap" =
dir=3D"auto" title=3D"Estaciones TransMilenio en Bogot=C3=A1">Estaciones Tr=
ansMilenio en Bogot=C3=A1<div class=3D"absolute bottom-0 top-0 to-transpare=
nt ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-to=
ken-sidebar-surface-primary from-token-sidebar-surface-primary can-hover:gr=
oup-hover:from-token-sidebar-surface-secondary w-8 from-0% can-hover:group-=
hover:w-10 can-hover:group-hover:from-60%"></div></div></a><div class=3D"ab=
solute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidd=
en can-hover:group-hover:flex"><span class=3D"" data-state=3D"closed"><butt=
on class=3D"flex items-center justify-center text-token-text-secondary tran=
sition hover:text-token-text-primary radix-state-open:text-token-text-secon=
dary" data-testid=3D"history-item-5-options" type=3D"button" id=3D"radix-:r=
6f:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><=
svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D=
"http://www.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" =
clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.=
8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.=
8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 =
14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 1=
0 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z=
" fill=3D"currentColor"></path></svg></button></span></div></div></li><li c=
lass=3D"relative" data-testid=3D"history-item-6"><div class=3D"no-draggable=
 group relative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface=
-secondary"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true"=
 href=3D"https://chatgpt.com/c/0d751a25-4328-4ab3-b801-f9b4423569e8"><div c=
lass=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=
=3D"Modelo en Cascada: Requerimientos Estables">Modelo en Cascada: Requerim=
ientos Estables<div class=3D"absolute bottom-0 top-0 to-transparent ltr:rig=
ht-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sideba=
r-surface-primary from-token-sidebar-surface-primary can-hover:group-hover:=
from-token-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10=
 can-hover:group-hover:from-60%"></div></div></a><div class=3D"absolute bot=
tom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hov=
er:group-hover:flex"><span class=3D"" data-state=3D"closed"><button class=
=3D"flex items-center justify-center text-token-text-secondary transition h=
over:text-token-text-primary radix-state-open:text-token-text-secondary" da=
ta-testid=3D"history-item-6-options" type=3D"button" id=3D"radix-:r6h:" ari=
a-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg widt=
h=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://=
www.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rul=
e=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 1=
2C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.=
8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.89=
54 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.=
8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=
=3D"currentColor"></path></svg></button></span></div></div></li><li class=
=3D"relative" data-testid=3D"history-item-7"><div class=3D"no-draggable gro=
up relative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-sec=
ondary"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true" hre=
f=3D"https://chatgpt.com/c/5cf76d0f-e599-4a69-b151-116804d72d97"><div class=
=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"=
An=C3=A1lisis de caso: Pasos">An=C3=A1lisis de caso: Pasos<div class=3D"abs=
olute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:le=
ft-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary from-token-sid=
ebar-surface-primary can-hover:group-hover:from-token-sidebar-surface-secon=
dary w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60%"=
></div></div></a><div class=3D"absolute bottom-0 top-0 items-center gap-1.5=
 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=
=3D"" data-state=3D"closed"><button class=3D"flex items-center justify-cent=
er text-token-text-secondary transition hover:text-token-text-primary radix=
-state-open:text-token-text-secondary" data-testid=3D"history-item-7-option=
s" type=3D"button" id=3D"radix-:r6j:" aria-haspopup=3D"menu" aria-expanded=
=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D=
"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"ico=
n-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.895=
4 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.895=
43 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.89=
54 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 =
10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 =
19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></bu=
tton></span></div></div></li><li class=3D"relative" data-testid=3D"history-=
item-8"><div class=3D"no-draggable group relative rounded-lg active:opacity=
-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex items-center=
 gap-2 p-2" data-discover=3D"true" href=3D"><div class=3D"relative grow overflow-hidden whi=
tespace-nowrap" dir=3D"auto" title=3D"Triada P-P-P Explicada">Triada P-P-P =
Explicada<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 l=
tr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surf=
ace-primary from-token-sidebar-surface-primary can-hover:group-hover:from-t=
oken-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can-h=
over:group-hover:from-60%"></div></div></a><div class=3D"absolute bottom-0 =
top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:gro=
up-hover:flex"><span class=3D"" data-state=3D"closed"><button class=3D"flex=
 items-center justify-center text-token-text-secondary transition hover:tex=
t-token-text-primary radix-state-open:text-token-text-secondary" data-testi=
d=3D"history-item-8-options" type=3D"button" id=3D"radix-:r6l:" aria-haspop=
up=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24"=
 height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.o=
rg/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"eve=
nodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1=
046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 =
12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10=
 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 =
12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"curren=
tColor"></path></svg></button></span></div></div></li><li class=3D"relative=
" data-testid=3D"history-item-9"><div class=3D"no-draggable group relative =
rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-secondary"><a c=
lass=3D"flex items-center gap-2 p-2" data-discover=3D"true" href=3D"https:/=
/chatgpt.com/c/ab3e0c0c-b18b-4849-bf89-efbf0b844535"><div class=3D"relative=
 grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"IP est=C3=A1=
tica vs din=C3=A1mica">IP est=C3=A1tica vs din=C3=A1mica<div class=3D"absol=
ute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left=
-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary from-token-sideb=
ar-surface-primary can-hover:group-hover:from-token-sidebar-surface-seconda=
ry w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:from-60%"><=
/div></div></a><div class=3D"absolute bottom-0 top-0 items-center gap-1.5 p=
r-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><span class=
=3D"" data-state=3D"closed"><button class=3D"flex items-center justify-cent=
er text-token-text-secondary transition hover:text-token-text-primary radix=
-state-open:text-token-text-secondary" data-testid=3D"history-item-9-option=
s" type=3D"button" id=3D"radix-:r6n:" aria-haspopup=3D"menu" aria-expanded=
=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D=
"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"ico=
n-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.895=
4 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.895=
43 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.89=
54 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 =
10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 =
19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></bu=
tton></span></div></div></li><li class=3D"relative" data-testid=3D"history-=
item-10"><div class=3D"no-draggable group relative rounded-lg active:opacit=
y-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex items-cente=
r gap-2 p-2" data-discover=3D"true" href=3D"https://chatgpt.com/c/48c6a099-=
e4c6-4d76-b692-a5fbe2e66b56"><div class=3D"relative grow overflow-hidden wh=
itespace-nowrap" dir=3D"auto" title=3D"Switch vs Router">Switch vs Router<d=
iv class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradi=
ent-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary=
 from-token-sidebar-surface-primary can-hover:group-hover:from-token-sideba=
r-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can-hover:group-=
hover:from-60%"></div></div></a><div class=3D"absolute bottom-0 top-0 items=
-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:fl=
ex"><span class=3D"" data-state=3D"closed"><button class=3D"flex items-cent=
er justify-center text-token-text-secondary transition hover:text-token-tex=
t-primary radix-state-open:text-token-text-secondary" data-testid=3D"histor=
y-item-10-options" type=3D"button" id=3D"radix-:r6p:" aria-haspopup=3D"menu=
" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D=
"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/sv=
g" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D=
"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.1045=
7 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1=
046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 1=
0 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1=
046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></=
path></svg></button></span></div></div></li><li class=3D"relative" data-tes=
tid=3D"history-item-11"><div class=3D"no-draggable group relative rounded-l=
g active:opacity-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"f=
lex items-center gap-2 p-2" data-discover=3D"true" href=3D"https://chatgpt.=
com/c/6f746adb-b770-47ea-aeb8-7c1fce95968a"><div class=3D"relative grow ove=
rflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"Switch vs Router">Swi=
tch vs Router<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right=
-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-=
surface-primary from-token-sidebar-surface-primary can-hover:group-hover:fr=
om-token-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 c=
an-hover:group-hover:from-60%"></div></div></a><div class=3D"absolute botto=
m-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover=
:group-hover:flex"><span class=3D"" data-state=3D"closed"><button class=3D"=
flex items-center justify-center text-token-text-secondary transition hover=
:text-token-text-primary radix-state-open:text-token-text-secondary" data-t=
estid=3D"history-item-11-options" type=3D"button" id=3D"radix-:r6r:" aria-h=
aspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=
=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://w=
ww.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=
=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12=
C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8=
954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.895=
4 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8=
954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D=
"currentColor"></path></svg></button></span></div></div></li><li class=3D"r=
elative" data-testid=3D"history-item-12"><div class=3D"no-draggable group r=
elative rounded-lg active:opacity-90 hover:bg-token-sidebar-surface-seconda=
ry"><a class=3D"flex items-center gap-2 p-2" data-discover=3D"true" href=3D=
"https://chatgpt.com/c/856d41db-1c11-410d-858c-78eb428a8e76"><div class=3D"=
relative grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"Swit=
ch vs Router">Switch vs Router<div class=3D"absolute bottom-0 top-0 to-tran=
sparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r fr=
om-token-sidebar-surface-primary from-token-sidebar-surface-primary can-hov=
er:group-hover:from-token-sidebar-surface-secondary w-8 from-0% can-hover:g=
roup-hover:w-10 can-hover:group-hover:from-60%"></div></div></a><div class=
=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-=
0 hidden can-hover:group-hover:flex"><span class=3D"" data-state=3D"closed"=
><button class=3D"flex items-center justify-center text-token-text-secondar=
y transition hover:text-token-text-primary radix-state-open:text-token-text=
-secondary" data-testid=3D"history-item-12-options" type=3D"button" id=3D"r=
adix-:r6t:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"cl=
osed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" x=
mlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path fill-rule=3D"ev=
enodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 1=
0 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12=
C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046=
 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20=
.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046=
 17 12Z" fill=3D"currentColor"></path></svg></button></span></div></div></l=
i><li class=3D"relative" data-testid=3D"history-item-13"><div class=3D"no-d=
raggable group relative rounded-lg active:opacity-90 hover:bg-token-sidebar=
-surface-secondary"><a class=3D"flex items-center gap-2 p-2" data-discover=
=3D"true" href=3D"https://chatgpt.com/c/8a88732f-0c48-48b8-81e9-3601f05a7e8=
c"><div class=3D"relative grow overflow-hidden whitespace-nowrap" dir=3D"au=
to" title=3D"Diferencia Switch Router">Diferencia Switch Router<div class=
=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l=
 rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary from-to=
ken-sidebar-surface-primary can-hover:group-hover:from-token-sidebar-surfac=
e-secondary w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hover:fr=
om-60%"></div></div></a><div class=3D"absolute bottom-0 top-0 items-center =
gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"><spa=
n class=3D"" data-state=3D"closed"><button class=3D"flex items-center justi=
fy-center text-token-text-secondary transition hover:text-token-text-primar=
y radix-state-open:text-token-text-secondary" data-testid=3D"history-item-1=
3-options" type=3D"button" id=3D"radix-:r6v:" aria-haspopup=3D"menu" aria-e=
xpanded=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24" vie=
wBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=
=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3=
 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 1=
4C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 1=
4 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17=
 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1=
046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></path></s=
vg></button></span></div></div></li><li class=3D"relative" data-testid=3D"h=
istory-item-14"><div class=3D"no-draggable group relative rounded-lg active=
:opacity-90 hover:bg-token-sidebar-surface-secondary"><a class=3D"flex item=
s-center gap-2 p-2" data-discover=3D"true" href=3D"https://chatgpt.com/c/d4=
447d6e-8cb7-44c3-9fc5-632a9e524300"><div class=3D"relative grow overflow-hi=
dden whitespace-nowrap" dir=3D"auto" title=3D"Switch vs Router">Switch vs R=
outer<div class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr:b=
g-gradient-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-=
primary from-token-sidebar-surface-primary can-hover:group-hover:from-token=
-sidebar-surface-secondary w-8 from-0% can-hover:group-hover:w-10 can-hover=
:group-hover:from-60%"></div></div></a><div class=3D"absolute bottom-0 top-=
0 items-center gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-h=
over:flex"><span class=3D"" data-state=3D"closed"><button class=3D"flex ite=
ms-center justify-center text-token-text-secondary transition hover:text-to=
ken-text-primary radix-state-open:text-token-text-secondary" data-testid=3D=
"history-item-14-options" type=3D"button" id=3D"radix-:r71:" aria-haspopup=
=3D"menu" aria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24" h=
eight=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org=
/2000/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"eveno=
dd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.104=
6 6.10457 14 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12=
 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 1=
3.1046 10 12ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12=
C21 13.1046 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentC=
olor"></path></svg></button></span></div></div></li><li class=3D"relative" =
data-testid=3D"history-item-15"><div class=3D"no-draggable group relative r=
ounded-lg active:opacity-90 hover:bg-token-sidebar-surface-secondary"><a cl=
ass=3D"flex items-center gap-2 p-2" data-discover=3D"true" href=3D"https://=
chatgpt.com/c/ad57a7ff-9c82-4e1d-99a3-4b003e645b92"><div class=3D"relative =
grow overflow-hidden whitespace-nowrap" dir=3D"auto" title=3D"Diferencia Sw=
itch y Router">Diferencia Switch y Router<div class=3D"absolute bottom-0 to=
p-0 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradi=
ent-to-r from-token-sidebar-surface-primary from-token-sidebar-surface-prim=
ary can-hover:group-hover:from-token-sidebar-surface-secondary w-8 from-0% =
can-hover:group-hover:w-10 can-hover:group-hover:from-60%"></div></div></a>=
<div class=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0=
 rtl:left-0 hidden can-hover:group-hover:flex"><span class=3D"" data-state=
=3D"closed"><button class=3D"flex items-center justify-center text-token-te=
xt-secondary transition hover:text-token-text-primary radix-state-open:text=
-token-text-secondary" data-testid=3D"history-item-15-options" type=3D"butt=
on" id=3D"radix-:r73:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-=
state=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=
=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path fill=
-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 1=
0C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 =
3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1=
046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 =
10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14=
 17 13.1046 17 12Z" fill=3D"currentColor"></path></svg></button></span></di=
v></div></li><li class=3D"relative" data-testid=3D"history-item-16"><div cl=
ass=3D"no-draggable group relative rounded-lg active:opacity-90 hover:bg-to=
ken-sidebar-surface-secondary"><a class=3D"flex items-center gap-2 p-2" dat=
a-discover=3D"true" href=3D"https://chatgpt.com/c/944851ca-41a0-4f7e-8ccc-9=
021fb6175b9"><div class=3D"relative grow overflow-hidden whitespace-nowrap"=
 dir=3D"auto" title=3D"Microservicios en dispositivos peque=C3=B1os">Micros=
ervicios en dispositivos peque=C3=B1os<div class=3D"absolute bottom-0 top-0=
 to-transparent ltr:right-0 ltr:bg-gradient-to-l rtl:left-0 rtl:bg-gradient=
-to-r from-token-sidebar-surface-primary from-token-sidebar-surface-primary=
 can-hover:group-hover:from-token-sidebar-surface-secondary w-8 from-0% can=
-hover:group-hover:w-10 can-hover:group-hover:from-60%"></div></div></a><di=
v class=3D"absolute bottom-0 top-0 items-center gap-1.5 pr-2 ltr:right-0 rt=
l:left-0 hidden can-hover:group-hover:flex"><span class=3D"" data-state=3D"=
closed"><button class=3D"flex items-center justify-center text-token-text-s=
econdary transition hover:text-token-text-primary radix-state-open:text-tok=
en-text-secondary" data-testid=3D"history-item-16-options" type=3D"button" =
id=3D"radix-:r75:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-stat=
e=3D"closed"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"=
none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path fill-rul=
e=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 12C3 10.8954 3.89543 10 5 10C6.=
10457 10 7 10.8954 7 12C7 13.1046 6.10457 14 5 14C3.89543 14 3 13.1046 3 12=
ZM10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 =
13.1046 14 12 14C10.8954 14 10 13.1046 10 12ZM17 12C17 10.8954 17.8954 10 1=
9 10C20.1046 10 21 10.8954 21 12C21 13.1046 20.1046 14 19 14C17.8954 14 17 =
13.1046 17 12Z" fill=3D"currentColor"></path></svg></button></span></div></=
div></li><li class=3D"relative" data-testid=3D"history-item-17"><div class=
=3D"no-draggable group relative rounded-lg active:opacity-90 hover:bg-token=
-sidebar-surface-secondary"><a class=3D"flex items-center gap-2 p-2" data-d=
iscover=3D"true" href=3D"https://chatgpt.com/c/59f6088d-401b-413e-b726-c4ef=
31a9ef9c"><div class=3D"relative grow overflow-hidden whitespace-nowrap" di=
r=3D"auto" title=3D"Research theme selection">Research theme selection<div =
class=3D"absolute bottom-0 top-0 to-transparent ltr:right-0 ltr:bg-gradient=
-to-l rtl:left-0 rtl:bg-gradient-to-r from-token-sidebar-surface-primary fr=
om-token-sidebar-surface-primary can-hover:group-hover:from-token-sidebar-s=
urface-secondary w-8 from-0% can-hover:group-hover:w-10 can-hover:group-hov=
er:from-60%"></div></div></a><div class=3D"absolute bottom-0 top-0 items-ce=
nter gap-1.5 pr-2 ltr:right-0 rtl:left-0 hidden can-hover:group-hover:flex"=
><span class=3D"" data-state=3D"closed"><button class=3D"flex items-center =
justify-center text-token-text-secondary transition hover:text-token-text-p=
rimary radix-state-open:text-token-text-secondary" data-testid=3D"history-i=
tem-17-options" type=3D"button" id=3D"radix-:r77:" aria-haspopup=3D"menu" a=
ria-expanded=3D"false" data-state=3D"closed"><svg width=3D"24" height=3D"24=
" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" =
class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3=
 12C3 10.8954 3.89543 10 5 10C6.10457 10 7 10.8954 7 12C7 13.1046 6.10457 1=
4 5 14C3.89543 14 3 13.1046 3 12ZM10 12C10 10.8954 10.8954 10 12 10C13.1046=
 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 1=
2ZM17 12C17 10.8954 17.8954 10 19 10C20.1046 10 21 10.8954 21 12C21 13.1046=
 20.1046 14 19 14C17.8954 14 17 13.1046 17 12Z" fill=3D"currentColor"></pat=
h></svg></button></span></div></div></li></ol></div></div></div></div><div =
class=3D"flex flex-col py-2 empty:hidden dark:border-white/20"><a class=3D"=
group flex gap-2 p-2.5 text-sm cursor-pointer focus:ring-0 radix-disabled:p=
ointer-events-none radix-disabled:opacity-50 group items-center hover:bg-to=
ken-sidebar-surface-secondary m-0 rounded-lg px-2"><span class=3D"flex w-fu=
ll flex-row flex-wrap-reverse justify-between"><div class=3D"flex items-cen=
ter gap-2"><span class=3D"flex h-7 w-7 items-center justify-center rounded-=
full border border-token-border-light"><svg width=3D"24" height=3D"24" view=
Box=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=
=3D"icon-sm shrink-0"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=
=3D"M12.5001 3.44338C12.1907 3.26474 11.8095 3.26474 11.5001 3.44338L4.8398=
4 7.28868C4.53044 7.46731 4.33984 7.79744 4.33984 8.1547V15.8453C4.33984 16=
.2026 4.53044 16.5327 4.83984 16.7113L11.5001 20.5566C11.8095 20.7353 12.19=
07 20.7353 12.5001 20.5566L19.1604 16.7113C19.4698 16.5327 19.6604 16.2026 =
19.6604 15.8453V8.1547C19.6604 7.79744 19.4698 7.46731 19.1604 7.28868L12.5=
001 3.44338ZM10.5001 1.71133C11.4283 1.17543 12.5719 1.17543 13.5001 1.7113=
3L20.1604 5.55663C21.0886 6.09252 21.6604 7.0829 21.6604 8.1547V15.8453C21.=
6604 16.9171 21.0886 17.9075 20.1604 18.4434L13.5001 22.2887C12.5719 22.824=
6 11.4283 22.8246 10.5001 22.2887L3.83984 18.4434C2.91164 17.9075 2.33984 1=
6.9171 2.33984 15.8453V8.1547C2.33984 7.0829 2.91164 6.09252 3.83984 5.5566=
3L10.5001 1.71133Z" fill=3D"currentColor"></path><path d=3D"M9.44133 11.445=
4L9.92944 9.98105C10.0321 9.67299 10.4679 9.67299 10.5706 9.98105L11.0587 1=
1.4454C11.2941 12.1517 11.8483 12.7059 12.5546 12.9413L14.019 13.4294C14.32=
7 13.5321 14.327 13.9679 14.019 14.0706L12.5546 14.5587C11.8483 14.7941 11.=
2941 15.3483 11.0587 16.0546L10.5706 17.519C10.4679 17.827 10.0321 17.827 9=
.92944 17.519L9.44133 16.0546C9.2059 15.3483 8.65167 14.7941 7.94537 14.558=
7L6.48105 14.0706C6.17298 13.9679 6.17298 13.5321 6.48105 13.4294L7.94537 1=
2.9413C8.65167 12.7059 9.2059 12.1517 9.44133 11.4454Z" fill=3D"currentColo=
r"></path><path d=3D"M14.4946 8.05961L14.7996 7.14441C14.8638 6.95187 15.13=
62 6.95187 15.2004 7.14441L15.5054 8.05961C15.6526 8.50104 15.999 8.84744 1=
6.4404 8.99458L17.3556 9.29965C17.5481 9.36383 17.5481 9.63617 17.3556 9.70=
035L16.4404 10.0054C15.999 10.1526 15.6526 10.499 15.5054 10.9404L15.2004 1=
1.8556C15.1362 12.0481 14.8638 12.0481 14.7996 11.8556L14.4946 10.9404C14.3=
474 10.499 14.001 10.1526 13.5596 10.0054L12.6444 9.70035C12.4519 9.63617 1=
2.4519 9.36383 12.6444 9.29965L13.5596 8.99458C14.001 8.84744 14.3474 8.501=
04 14.4946 8.05961Z" fill=3D"currentColor"></path></svg></span><div class=
=3D"flex flex-col"><span>Mejorar el plan</span><span class=3D"line-clamp-1 =
text-xs text-token-text-tertiary">Mayor acceso a los mejores modelos</span>=
</div></div></span></a><div class=3D"flex w-full items-center md:hidden"><d=
iv class=3D"max-w-[100%] grow"><div class=3D"group relative" data-headlessu=
i-state=3D""><button class=3D"flex w-full max-w-[100%] items-center gap-2 r=
ounded-lg text-sm group-ui-open:bg-token-sidebar-surface-secondary p-2 hove=
r:bg-token-sidebar-surface-secondary" data-testid=3D"accounts-profile-butto=
n" id=3D"headlessui-menu-button-:r1h:" type=3D"button" aria-haspopup=3D"men=
u" aria-expanded=3D"false" data-headlessui-state=3D""><div class=3D"flex-sh=
rink-0" style=3D"view-transition-name: var(--vt-profile-avatar-sidebar);"><=
div class=3D"flex items-center justify-center overflow-hidden rounded-full"=
><div class=3D"relative flex"><img alt=3D"User" width=3D"32" height=3D"32" =
class=3D"rounded-sm" referrerpolicy=3D"no-referrer" src=3D"https://lh3.goog=
leusercontent.com/a/AGNmyxYSfTZd0pe91C3CnutKj2W-Sdgf_X6Cwzq13dKX=3Ds96-c"><=
/div></div></div><div class=3D"relative -top-px grow -space-y-px truncate t=
ext-start text-token-text-primary"><div dir=3D"auto">jenny daniela</div></d=
iv></button></div></div></div></div></nav></div></div></div></div><div clas=
s=3D"relative flex h-full max-w-full flex-1 flex-col overflow-hidden"><div =
class=3D"draggable sticky top-0 z-10 flex min-h-[60px] items-center justify=
-center border-transparent bg-token-main-surface-primary pl-0 md:hidden"><d=
iv class=3D"no-draggable absolute bottom-0 left-0 top-0 ml-3 inline-flex it=
ems-center justify-center"><button type=3D"button" class=3D"inline-flex rou=
nded-md hover:text-token-text-primary focus:outline-none focus:ring-2 focus=
:ring-inset focus:ring-white active:opacity-50" data-testid=3D"open-sidebar=
-button"><span class=3D"sr-only">Abrir barra lateral</span><svg width=3D"24=
" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.=
org/2000/svg" class=3D"icon-lg mx-2 text-token-text-secondary"><path fill-r=
ule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M3 8C3 7.44772 3.44772 7 4 7H20C=
20.5523 7 21 7.44772 21 8C21 8.55228 20.5523 9 20 9H4C3.44772 9 3 8.55228 3=
 8ZM3 16C3 15.4477 3.44772 15 4 15H14C14.5523 15 15 15.4477 15 16C15 16.552=
3 14.5523 17 14 17H4C3.44772 17 3 16.5523 3 16Z" fill=3D"currentColor"></pa=
th></svg></button></div><div class=3D"no-draggable"><button aria-label=3D""=
 type=3D"button" id=3D"radix-:rs:" aria-haspopup=3D"menu" aria-expanded=3D"=
false" data-state=3D"closed" data-testid=3D"model-switcher-dropdown-button"=
 class=3D"group flex cursor-pointer items-center gap-1 rounded-lg py-1.5 px=
-3 text-lg hover:bg-token-main-surface-secondary radix-state-open:bg-token-=
main-surface-secondary font-semibold text-token-text-secondary overflow-hid=
den whitespace-nowrap"><div class=3D"text-token-text-secondary">ChatGPT <sp=
an class=3D"text-token-text-secondary"></span></div><svg width=3D"24" heigh=
t=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/200=
0/svg" class=3D"icon-md text-token-text-tertiary"><path fill-rule=3D"evenod=
d" clip-rule=3D"evenodd" d=3D"M5.29289 9.29289C5.68342 8.90237 6.31658 8.90=
237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90=
237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071=
 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.292=
9 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z"=
 fill=3D"currentColor"></path></svg></button></div><div class=3D"no-draggab=
le absolute bottom-0 right-0 top-0 mr-3 inline-flex items-center justify-ce=
nter"><span class=3D"flex" data-state=3D"closed"><button aria-label=3D"Nuev=
o chat" class=3D"h-10 rounded-lg px-2 text-token-text-secondary focus-visib=
le:outline-0 disabled:text-token-text-quaternary focus-visible:bg-token-sid=
ebar-surface-secondary enabled:hover:bg-token-sidebar-surface-secondary"><s=
vg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"currentColor" x=
mlns=3D"http://www.w3.org/2000/svg" class=3D"icon-xl-heavy"><path d=3D"M15.=
6729 3.91287C16.8918 2.69392 18.8682 2.69392 20.0871 3.91287C21.3061 5.1318=
2 21.3061 7.10813 20.0871 8.32708L14.1499 14.2643C13.3849 15.0293 12.3925 1=
5.5255 11.3215 15.6785L9.14142 15.9899C8.82983 16.0344 8.51546 15.9297 8.29=
289 15.7071C8.07033 15.4845 7.96554 15.1701 8.01005 14.8586L8.32149 12.6785=
C8.47449 11.6075 8.97072 10.615 9.7357 9.85006L15.6729 3.91287ZM18.6729 5.3=
2708C18.235 4.88918 17.525 4.88918 17.0871 5.32708L11.1499 11.2643C10.6909 =
11.7233 10.3932 12.3187 10.3014 12.9613L10.1785 13.8215L11.0386 13.6986C11.=
6812 13.6068 12.2767 13.3091 12.7357 12.8501L18.6729 6.91287C19.1108 6.4749=
7 19.1108 5.76499 18.6729 5.32708ZM11 3.99929C11.0004 4.55157 10.5531 4.999=
63 10.0008 5.00007C9.00227 5.00084 8.29769 5.00827 7.74651 5.06064C7.20685 =
5.11191 6.88488 5.20117 6.63803 5.32695C6.07354 5.61457 5.6146 6.07351 5.32=
698 6.63799C5.19279 6.90135 5.10062 7.24904 5.05118 7.8542C5.00078 8.47105 =
5 9.26336 5 10.4V13.6C5 14.7366 5.00078 15.5289 5.05118 16.1457C5.10062 16.=
7509 5.19279 17.0986 5.32698 17.3619C5.6146 17.9264 6.07354 18.3854 6.63803=
 18.673C6.90138 18.8072 7.24907 18.8993 7.85424 18.9488C8.47108 18.9992 9.2=
6339 19 10.4 19H13.6C14.7366 19 15.5289 18.9992 16.1458 18.9488C16.7509 18.=
8993 17.0986 18.8072 17.362 18.673C17.9265 18.3854 18.3854 17.9264 18.673 1=
7.3619C18.7988 17.1151 18.8881 16.7931 18.9393 16.2535C18.9917 15.7023 18.9=
991 14.9977 18.9999 13.9992C19.0003 13.4469 19.4484 12.9995 20.0007 13C20.5=
53 13.0004 21.0003 13.4485 20.9999 14.0007C20.9991 14.9789 20.9932 15.7808 =
20.9304 16.4426C20.8664 17.116 20.7385 17.7136 20.455 18.2699C19.9757 19.21=
07 19.2108 19.9756 18.27 20.455C17.6777 20.7568 17.0375 20.8826 16.3086 20.=
9421C15.6008 21 14.7266 21 13.6428 21H10.3572C9.27339 21 8.39925 21 7.69138=
 20.9421C6.96253 20.8826 6.32234 20.7568 5.73005 20.455C4.78924 19.9756 4.0=
2433 19.2107 3.54497 18.2699C3.24318 17.6776 3.11737 17.0374 3.05782 16.308=
6C2.99998 15.6007 2.99999 14.7266 3 13.6428V10.3572C2.99999 9.27337 2.99998=
 8.39922 3.05782 7.69134C3.11737 6.96249 3.24318 6.3223 3.54497 5.73001C4.0=
2433 4.7892 4.78924 4.0243 5.73005 3.54493C6.28633 3.26149 6.88399 3.13358 =
7.55735 3.06961C8.21919 3.00673 9.02103 3.00083 9.99922 3.00007C10.5515 2.9=
9964 10.9996 3.447 11 3.99929Z" fill=3D"currentColor"></path></svg></button=
></span></div></div><div class=3D"no-draggable flex w-full items-center jus=
tify-center bg-token-main-surface-primary md:hidden"></div><main class=3D"r=
elative h-full w-full flex-1 overflow-auto transition-width"><div role=3D"p=
resentation" class=3D"composer-parent flex h-full flex-col focus-visible:ou=
tline-0"><div class=3D"flex-1 overflow-hidden"><div class=3D"h-full"><div c=
lass=3D"react-scroll-to-bottom--css-whzmt-79elbk h-full"><div class=3D"reac=
t-scroll-to-bottom--css-whzmt-1n7m0yu"><div class=3D"flex flex-col text-sm =
md:pb-9" style=3D""><div class=3D"draggable no-draggable-children sticky to=
p-0 p-3 mb-1.5 flex items-center justify-between z-10 h-header-height font-=
semibold bg-token-main-surface-primary max-md:hidden"><div class=3D"absolut=
e start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2"></div><div class=3D"f=
lex items-center gap-0 overflow-hidden"><button aria-label=3D"" type=3D"but=
ton" id=3D"radix-:r7b:" aria-haspopup=3D"menu" aria-expanded=3D"false" data=
-state=3D"closed" data-testid=3D"model-switcher-dropdown-button" class=3D"g=
roup flex cursor-pointer items-center gap-1 rounded-lg py-1.5 px-3 text-lg =
hover:bg-token-main-surface-secondary radix-state-open:bg-token-main-surfac=
e-secondary font-semibold text-token-text-secondary overflow-hidden whitesp=
ace-nowrap"><div class=3D"text-token-text-secondary">ChatGPT <span class=3D=
"text-token-text-secondary"></span></div><svg width=3D"24" height=3D"24" vi=
ewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" clas=
s=3D"icon-md text-token-text-tertiary"><path fill-rule=3D"evenodd" clip-rul=
e=3D"evenodd" d=3D"M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711=
 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071=
 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12=
.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5=
.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.29289Z" fill=3D"cu=
rrentColor"></path></svg></button></div><div class=3D"gap-2 flex items-cent=
er pr-1 leading-[0]"><button class=3D"btn relative btn-secondary text-token=
-text-primary" aria-label=3D"Compartir" data-testid=3D"share-chat-button" s=
tyle=3D"view-transition-name: var(--vt_share_chat_wide_button);"><div class=
=3D"flex w-full items-center justify-center gap-1.5"><svg width=3D"24" heig=
ht=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/20=
00/svg" class=3D"icon-sm"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd"=
 d=3D"M11.2929 3.29289C11.6834 2.90237 12.3166 2.90237 12.7071 3.29289L16.7=
071 7.29289C17.0976 7.68342 17.0976 8.31658 16.7071 8.70711C16.3166 9.09763=
 15.6834 9.09763 15.2929 8.70711L13 6.41421V15C13 15.5523 12.5523 16 12 16C=
11.4477 16 11 15.5523 11 15V6.41421L8.70711 8.70711C8.31658 9.09763 7.68342=
 9.09763 7.29289 8.70711C6.90237 8.31658 6.90237 7.68342 7.29289 7.29289L11=
.2929 3.29289ZM4 14C4.55228 14 5 14.4477 5 15V18C5 18.5523 5.44772 19 6 19H=
18C18.5523 19 19 18.5523 19 18V15C19 14.4477 19.4477 14 20 14C20.5523 14 21=
 14.4477 21 15V18C21 19.6569 19.6569 21 18 21H6C4.34315 21 3 19.6569 3 18V1=
5C3 14.4477 3.44772 14 4 14Z" fill=3D"currentColor"></path></svg>Compartir<=
/div></button><button aria-label=3D"Abrir el men=C3=BA de perfil" data-test=
id=3D"profile-button" class=3D"flex h-10 w-10 items-center justify-center r=
ounded-full hover:bg-token-main-surface-secondary focus-visible:bg-token-ma=
in-surface-secondary focus-visible:outline-0" type=3D"button" id=3D"radix-:=
r7d:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed">=
<div class=3D"flex items-center justify-center overflow-hidden rounded-full=
"><div class=3D"relative flex"><img alt=3D"User" width=3D"32" height=3D"32"=
 class=3D"rounded-sm" referrerpolicy=3D"no-referrer" src=3D"https://lh3.goo=
gleusercontent.com/a/AGNmyxYSfTZd0pe91C3CnutKj2W-Sdgf_X6Cwzq13dKX=3Ds96-c">=
</div></div></button></div></div><article class=3D"w-full scroll-mb-[var(--=
thread-trailing-height,150px)] text-token-text-primary focus-visible:outlin=
e-2 focus-visible:outline-offset-[-4px]" dir=3D"auto" data-testid=3D"conver=
sation-turn-2" data-scroll-anchor=3D"false"><h5 class=3D"sr-only">Dijiste:<=
/h5><div class=3D"m-auto text-base py-[18px] px-3 md:px-4 w-full md:px-5 lg=
:px-4 xl:px-5"><div class=3D"mx-auto flex flex-1 gap-4 text-base md:gap-5 l=
g:gap-6 md:max-w-3xl lg:max-w-[40rem] xl:max-w-[48rem]"><div class=3D"group=
/conversation-turn relative flex w-full min-w-0 flex-col"><div class=3D"fle=
x-col gap-1 md:gap-3"><div class=3D"flex max-w-full flex-col flex-grow"><di=
v data-message-author-role=3D"user" data-message-id=3D"aaa2cd1d-6a82-4663-b=
b68-4a352dc58916" dir=3D"auto" class=3D"min-h-8 text-message flex w-full fl=
ex-col items-end gap-2 whitespace-normal break-words text-start [.text-mess=
age+&amp;]:mt-5"><div class=3D"flex w-full flex-col gap-1 empty:hidden item=
s-end rtl:items-start"><div class=3D"relative max-w-[70%] rounded-3xl bg-to=
ken-message-surface px-5 py-2.5"><div class=3D"whitespace-pre-wrap">PLANTIL=
LA DE INICIO DE SESION EN HTML CON USUARIO CONTRASE=C3=91A ROL Y BOTON DE I=
NGRESAR</div><div class=3D"absolute bottom-0 right-full top-0 -mr-3.5 hidde=
n pr-5 pt-1 [.group\/conversation-turn:hover_&amp;]:block"><span class=3D""=
 data-state=3D"closed"><button aria-label=3D"Editar mensaje" class=3D"flex =
h-9 w-9 items-center justify-center rounded-full text-token-text-secondary =
transition hover:bg-token-main-surface-tertiary"><svg width=3D"24" height=
=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000=
/svg" class=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=
=3D"M13.2929 4.29291C15.0641 2.52167 17.9359 2.52167 19.7071 4.2929C21.4784=
 6.06414 21.4784 8.93588 19.7071 10.7071L18.7073 11.7069L11.6135 18.8007C10=
.8766 19.5376 9.92793 20.0258 8.89999 20.1971L4.16441 20.9864C3.84585 21.03=
95 3.52127 20.9355 3.29291 20.7071C3.06454 20.4788 2.96053 20.1542 3.01362 =
19.8356L3.80288 15.1C3.9742 14.0721 4.46243 13.1234 5.19932 12.3865L13.2929=
 4.29291ZM13 7.41422L6.61353 13.8007C6.1714 14.2428 5.87846 14.8121 5.77567=
 15.4288L5.21656 18.7835L8.57119 18.2244C9.18795 18.1216 9.75719 17.8286 10=
.1993 17.3865L16.5858 11L13 7.41422ZM18 9.5858L14.4142 6.00001L14.7071 5.70=
712C15.6973 4.71693 17.3027 4.71693 18.2929 5.70712C19.2831 6.69731 19.2831=
 8.30272 18.2929 9.29291L18 9.5858Z" fill=3D"currentColor"></path></svg></b=
utton></span></div></div></div></div></div></div></div></div></div></articl=
e><article class=3D"w-full scroll-mb-[var(--thread-trailing-height,150px)] =
text-token-text-primary focus-visible:outline-2 focus-visible:outline-offse=
t-[-4px]" dir=3D"auto" data-testid=3D"conversation-turn-3" data-scroll-anch=
or=3D"false"><h6 class=3D"sr-only">ChatGPT dijo:</h6><div class=3D"m-auto t=
ext-base py-[18px] px-3 md:px-4 w-full md:px-5 lg:px-4 xl:px-5"><div class=
=3D"mx-auto flex flex-1 gap-4 text-base md:gap-5 lg:gap-6 md:max-w-3xl lg:m=
ax-w-[40rem] xl:max-w-[48rem]"><div class=3D"flex-shrink-0 flex flex-col re=
lative items-end"><div><div class=3D"pt-0"><div class=3D"gizmo-bot-avatar f=
lex h-8 w-8 items-center justify-center overflow-hidden rounded-full"><div =
class=3D"relative p-1 rounded-sm flex items-center justify-center bg-token-=
main-surface-primary text-token-text-primary h-8 w-8"><svg width=3D"41" hei=
ght=3D"41" viewBox=3D"0 0 41 41" fill=3D"none" xmlns=3D"http://www.w3.org/2=
000/svg" class=3D"icon-md" role=3D"img"><text x=3D"-9999" y=3D"-9999">ChatG=
PT</text><path d=3D"M37.5324 16.8707C37.9808 15.5241 38.1363 14.0974 37.988=
6 12.6859C37.8409 11.2744 37.3934 9.91076 36.676 8.68622C35.6126 6.83404 33=
.9882 5.3676 32.0373 4.4985C30.0864 3.62941 27.9098 3.40259 25.8215 3.85078=
C24.8796 2.7893 23.7219 1.94125 22.4257 1.36341C21.1295 0.785575 19.7249 0.=
491269 18.3058 0.500197C16.1708 0.495044 14.0893 1.16803 12.3614 2.42214C10=
.6335 3.67624 9.34853 5.44666 8.6917 7.47815C7.30085 7.76286 5.98686 8.3414=
 4.8377 9.17505C3.68854 10.0087 2.73073 11.0782 2.02839 12.312C0.956464 14.=
1591 0.498905 16.2988 0.721698 18.4228C0.944492 20.5467 1.83612 22.5449 3.2=
68 24.1293C2.81966 25.4759 2.66413 26.9026 2.81182 28.3141C2.95951 29.7256 =
3.40701 31.0892 4.12437 32.3138C5.18791 34.1659 6.8123 35.6322 8.76321 36.5=
013C10.7141 37.3704 12.8907 37.5973 14.9789 37.1492C15.9208 38.2107 17.0786=
 39.0587 18.3747 39.6366C19.6709 40.2144 21.0755 40.5087 22.4946 40.4998C24=
.6307 40.5054 26.7133 39.8321 28.4418 38.5772C30.1704 37.3223 31.4556 35.55=
06 32.1119 33.5179C33.5027 33.2332 34.8167 32.6547 35.9659 31.821C37.115 30=
.9874 38.0728 29.9178 38.7752 28.684C39.8458 26.8371 40.3023 24.6979 40.078=
9 22.5748C39.8556 20.4517 38.9639 18.4544 37.5324 16.8707ZM22.4978 37.8849C=
20.7443 37.8874 19.0459 37.2733 17.6994 36.1501C17.7601 36.117 17.8666 36.0=
586 17.936 36.0161L25.9004 31.4156C26.1003 31.3019 26.2663 31.137 26.3813 3=
0.9378C26.4964 30.7386 26.5563 30.5124 26.5549 30.2825V19.0542L29.9213 20.9=
98C29.9389 21.0068 29.9541 21.0198 29.9656 21.0359C29.977 21.052 29.9842 21=
.0707 29.9867 21.0902V30.3889C29.9842 32.375 29.1946 34.2791 27.7909 35.684=
1C26.3872 37.0892 24.4838 37.8806 22.4978 37.8849ZM6.39227 31.0064C5.51397 =
29.4888 5.19742 27.7107 5.49804 25.9832C5.55718 26.0187 5.66048 26.0818 5.7=
3461 26.1244L13.699 30.7248C13.8975 30.8408 14.1233 30.902 14.3532 30.902C1=
4.583 30.902 14.8088 30.8408 15.0073 30.7248L24.731 25.1103V28.9979C24.7321=
 29.0177 24.7283 29.0376 24.7199 29.0556C24.7115 29.0736 24.6988 29.0893 24=
.6829 29.1012L16.6317 33.7497C14.9096 34.7416 12.8643 35.0097 10.9447 34.49=
54C9.02506 33.9811 7.38785 32.7263 6.39227 31.0064ZM4.29707 13.6194C5.17156=
 12.0998 6.55279 10.9364 8.19885 10.3327C8.19885 10.4013 8.19491 10.5228 8.=
19491 10.6071V19.808C8.19351 20.0378 8.25334 20.2638 8.36823 20.4629C8.4831=
2 20.6619 8.64893 20.8267 8.84863 20.9404L18.5723 26.5542L15.206 28.4979C15=
.1894 28.5089 15.1703 28.5155 15.1505 28.5173C15.1307 28.5191 15.1107 28.51=
6 15.0924 28.5082L7.04046 23.8557C5.32135 22.8601 4.06716 21.2235 3.55289 1=
9.3046C3.03862 17.3858 3.30624 15.3413 4.29707 13.6194ZM31.955 20.0556L22.2=
312 14.4411L25.5976 12.4981C25.6142 12.4872 25.6333 12.4805 25.6531 12.4787=
C25.6729 12.4769 25.6928 12.4801 25.7111 12.4879L33.7631 17.1364C34.9967 17=
.849 36.0017 18.8982 36.6606 20.1613C37.3194 21.4244 37.6047 22.849 37.4832=
 24.2684C37.3617 25.6878 36.8382 27.0432 35.9743 28.1759C35.1103 29.3086 33=
.9415 30.1717 32.6047 30.6641C32.6047 30.5947 32.6047 30.4733 32.6047 30.38=
89V21.188C32.6066 20.9586 32.5474 20.7328 32.4332 20.5338C32.319 20.3348 32=
.154 20.1698 31.955 20.0556ZM35.3055 15.0128C35.2464 14.9765 35.1431 14.914=
2 35.069 14.8717L27.1045 10.2712C26.906 10.1554 26.6803 10.0943 26.4504 10.=
0943C26.2206 10.0943 25.9948 10.1554 25.7963 10.2712L16.0726 15.8858V11.998=
2C16.0715 11.9783 16.0753 11.9585 16.0837 11.9405C16.0921 11.9225 16.1048 1=
1.9068 16.1207 11.8949L24.1719 7.25025C25.4053 6.53903 26.8158 6.19376 28.2=
383 6.25482C29.6608 6.31589 31.0364 6.78077 32.2044 7.59508C33.3723 8.40939=
 34.2842 9.53945 34.8334 10.8531C35.3826 12.1667 35.5464 13.6095 35.3055 15=
.0128ZM14.2424 21.9419L10.8752 19.9981C10.8576 19.9893 10.8423 19.9763 10.8=
309 19.9602C10.8195 19.9441 10.8122 19.9254 10.8098 19.9058V10.6071C10.8107=
 9.18295 11.2173 7.78848 11.9819 6.58696C12.7466 5.38544 13.8377 4.42659 15=
.1275 3.82264C16.4173 3.21869 17.8524 2.99464 19.2649 3.1767C20.6775 3.3587=
6 22.0089 3.93941 23.1034 4.85067C23.0427 4.88379 22.937 4.94215 22.8668 4.=
98473L14.9024 9.58517C14.7025 9.69878 14.5366 9.86356 14.4215 10.0626C14.30=
65 10.2616 14.2466 10.4877 14.2479 10.7175L14.2424 21.9419ZM16.071 17.9991L=
20.4018 15.4978L24.7325 17.9975V22.9985L20.4018 25.4983L16.071 22.9985V17.9=
991Z" fill=3D"currentColor"></path></svg></div></div></div></div></div><div=
 class=3D"group/conversation-turn relative flex w-full min-w-0 flex-col age=
nt-turn"><div class=3D"flex-col gap-1 md:gap-3"><div class=3D"flex max-w-fu=
ll flex-col flex-grow"><div data-message-author-role=3D"assistant" data-mes=
sage-id=3D"f4129dfe-17fd-4906-93ef-5771eeeb5106" dir=3D"auto" class=3D"min-=
h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal bre=
ak-words text-start [.text-message+&amp;]:mt-5" data-message-model-slug=3D"=
gpt-4o"><div class=3D"flex w-full flex-col gap-1 empty:hidden first:pt-[3px=
]"><div class=3D"markdown prose w-full break-words dark:prose-invert light"=
><p>Aqu=C3=AD tienes una plantilla b=C3=A1sica en HTML para una p=C3=A1gina=
 de inicio de sesi=C3=B3n con campos para <strong>usuario</strong>, <strong=
>contrase=C3=B1a</strong>, <strong>rol</strong>, y un bot=C3=B3n de ingresa=
r. Puedes estilizarla y agregar funcionalidad usando CSS y JavaScript seg=
=C3=BAn tus necesidades.</p><h3>C=C3=B3digo HTML</h3><pre class=3D"!overflo=
w-visible"><div class=3D"contain-inline-size rounded-md border-[0.5px] bord=
er-token-border-medium relative bg-token-sidebar-surface-primary dark:bg-gr=
ay-950"><div class=3D"flex items-center text-token-text-secondary px-4 py-2=
 text-xs font-sans justify-between rounded-t-md h-9 bg-token-sidebar-surfac=
e-primary dark:bg-token-main-surface-secondary select-none">html</div><div =
class=3D"sticky top-9 md:top-[5.75rem]"><div class=3D"absolute bottom-0 rig=
ht-2 flex h-9 items-center"><div class=3D"flex items-center rounded bg-toke=
n-sidebar-surface-primary px-2 font-sans text-xs text-token-text-secondary =
dark:bg-token-main-surface-secondary"><span class=3D"" data-state=3D"closed=
"><button class=3D"flex gap-1 items-center select-none py-1"><svg width=3D"=
24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w=
3.org/2000/svg" class=3D"icon-sm"><path fill-rule=3D"evenodd" clip-rule=3D"=
evenodd" d=3D"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14=
C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22=
 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315=
 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.4=
4772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 2=
0 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill=
=3D"currentColor"></path></svg>Copiar c=C3=B3digo</button></span></div></di=
v></div><div class=3D"overflow-y-auto p-4" dir=3D"ltr"><code class=3D"!whit=
espace-pre hljs language-html"><span class=3D"hljs-meta">&lt;!DOCTYPE <span=
 class=3D"hljs-keyword">html</span>&gt;</span>
<span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">html</span> <span cl=
ass=3D"hljs-attr">lang</span>=3D<span class=3D"hljs-string">"en"</span>&gt;=
</span>
<span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">head</span>&gt;</spa=
n>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">meta</span> <spa=
n class=3D"hljs-attr">charset</span>=3D<span class=3D"hljs-string">"UTF-8"<=
/span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">meta</span> <spa=
n class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-string">"viewport"<=
/span> <span class=3D"hljs-attr">content</span>=3D<span class=3D"hljs-strin=
g">"width=3Ddevice-width, initial-scale=3D1.0"</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">title</span>&gt;=
</span>Inicio de Sesi=C3=B3n<span class=3D"hljs-tag">&lt;/<span class=3D"hl=
js-name">title</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">style</span>&gt;=
</span><span class=3D"css">
        <span class=3D"hljs-selector-tag">body</span> {
            <span class=3D"hljs-attribute">font-family</span>: Arial, sans-=
serif;
            <span class=3D"hljs-attribute">background-color</span>: <span c=
lass=3D"hljs-number">#f4f4f9</span>;
            <span class=3D"hljs-attribute">display</span>: flex;
            <span class=3D"hljs-attribute">justify-content</span>: center;
            <span class=3D"hljs-attribute">align-items</span>: center;
            <span class=3D"hljs-attribute">height</span>: <span class=3D"hl=
js-number">100vh</span>;
            <span class=3D"hljs-attribute">margin</span>: <span class=3D"hl=
js-number">0</span>;
        }
        <span class=3D"hljs-selector-class">.login-container</span> {
            <span class=3D"hljs-attribute">background</span>: <span class=
=3D"hljs-number">#fff</span>;
            <span class=3D"hljs-attribute">padding</span>: <span class=3D"h=
ljs-number">20px</span>;
            <span class=3D"hljs-attribute">border-radius</span>: <span clas=
s=3D"hljs-number">10px</span>;
            <span class=3D"hljs-attribute">box-shadow</span>: <span class=
=3D"hljs-number">0</span> <span class=3D"hljs-number">4px</span> <span clas=
s=3D"hljs-number">8px</span> <span class=3D"hljs-built_in">rgba</span>(<spa=
n class=3D"hljs-number">0</span>, <span class=3D"hljs-number">0</span>, <sp=
an class=3D"hljs-number">0</span>, <span class=3D"hljs-number">0.2</span>);
            <span class=3D"hljs-attribute">width</span>: <span class=3D"hlj=
s-number">300px</span>;
            <span class=3D"hljs-attribute">text-align</span>: center;
        }
        <span class=3D"hljs-selector-class">.login-container</span> <span c=
lass=3D"hljs-selector-tag">h2</span> {
            <span class=3D"hljs-attribute">margin-bottom</span>: <span clas=
s=3D"hljs-number">20px</span>;
            <span class=3D"hljs-attribute">color</span>: <span class=3D"hlj=
s-number">#333</span>;
        }
        <span class=3D"hljs-selector-class">.login-container</span> <span c=
lass=3D"hljs-selector-tag">input</span>, <span class=3D"hljs-selector-class=
">.login-container</span> select, <span class=3D"hljs-selector-class">.logi=
n-container</span> <span class=3D"hljs-selector-tag">button</span> {
            <span class=3D"hljs-attribute">width</span>: <span class=3D"hlj=
s-number">100%</span>;
            <span class=3D"hljs-attribute">padding</span>: <span class=3D"h=
ljs-number">10px</span>;
            <span class=3D"hljs-attribute">margin</span>: <span class=3D"hl=
js-number">10px</span> <span class=3D"hljs-number">0</span>;
            <span class=3D"hljs-attribute">border-radius</span>: <span clas=
s=3D"hljs-number">5px</span>;
            <span class=3D"hljs-attribute">border</span>: <span class=3D"hl=
js-number">1px</span> solid <span class=3D"hljs-number">#ccc</span>;
        }
        <span class=3D"hljs-selector-class">.login-container</span> <span c=
lass=3D"hljs-selector-tag">button</span> {
            <span class=3D"hljs-attribute">background-color</span>: <span c=
lass=3D"hljs-number">#007BFF</span>;
            <span class=3D"hljs-attribute">color</span>: white;
            <span class=3D"hljs-attribute">font-size</span>: <span class=3D=
"hljs-number">16px</span>;
            <span class=3D"hljs-attribute">border</span>: none;
            <span class=3D"hljs-attribute">cursor</span>: pointer;
        }
        <span class=3D"hljs-selector-class">.login-container</span> <span c=
lass=3D"hljs-selector-tag">button</span><span class=3D"hljs-selector-pseudo=
">:hover</span> {
            <span class=3D"hljs-attribute">background-color</span>: <span c=
lass=3D"hljs-number">#0056b3</span>;
        }
    </span><span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">style</s=
pan>&gt;</span>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">head</span>&gt;</sp=
an>
<span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">body</span>&gt;</spa=
n>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">div</span> <span=
 class=3D"hljs-attr">class</span>=3D<span class=3D"hljs-string">"login-cont=
ainer"</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">h2</span>&gt=
;</span>Inicio de Sesi=C3=B3n<span class=3D"hljs-tag">&lt;/<span class=3D"h=
ljs-name">h2</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">form</span> =
<span class=3D"hljs-attr">action</span>=3D<span class=3D"hljs-string">"#"</=
span> <span class=3D"hljs-attr">method</span>=3D<span class=3D"hljs-string"=
>"POST"</span>&gt;</span>
            <span class=3D"hljs-comment">&lt;!-- Campo de Usuario --&gt;</s=
pan>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</s=
pan> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"t=
ext"</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-str=
ing">"usuario"</span> <span class=3D"hljs-attr">placeholder</span>=3D<span =
class=3D"hljs-string">"Usuario"</span> <span class=3D"hljs-attr">required</=
span>&gt;</span>
           =20
            <span class=3D"hljs-comment">&lt;!-- Campo de Contrase=C3=B1a -=
-&gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</s=
pan> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"p=
assword"</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs=
-string">"contrase=C3=B1a"</span> <span class=3D"hljs-attr">placeholder</sp=
an>=3D<span class=3D"hljs-string">"Contrase=C3=B1a"</span> <span class=3D"h=
ljs-attr">required</span>&gt;</span>
           =20
            <span class=3D"hljs-comment">&lt;!-- Selecci=C3=B3n de Rol --&g=
t;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">select</=
span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-string">"=
rol"</span> <span class=3D"hljs-attr">required</span>&gt;</span>
                <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">opti=
on</span> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-stri=
ng">""</span> <span class=3D"hljs-attr">disabled</span> <span class=3D"hljs=
-attr">selected</span>&gt;</span>Selecciona tu rol<span class=3D"hljs-tag">=
&lt;/<span class=3D"hljs-name">option</span>&gt;</span>
                <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">opti=
on</span> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-stri=
ng">"admin"</span>&gt;</span>Administrador<span class=3D"hljs-tag">&lt;/<sp=
an class=3D"hljs-name">option</span>&gt;</span>
                <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">opti=
on</span> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-stri=
ng">"usuario"</span>&gt;</span>Usuario<span class=3D"hljs-tag">&lt;/<span c=
lass=3D"hljs-name">option</span>&gt;</span>
                <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">opti=
on</span> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-stri=
ng">"invitado"</span>&gt;</span>Invitado<span class=3D"hljs-tag">&lt;/<span=
 class=3D"hljs-name">option</span>&gt;</span>
            <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">select<=
/span>&gt;</span>
           =20
            <span class=3D"hljs-comment">&lt;!-- Bot=C3=B3n de Ingresar --&=
gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">button</=
span> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"=
submit"</span>&gt;</span>Ingresar<span class=3D"hljs-tag">&lt;/<span class=
=3D"hljs-name">button</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">form</span>=
&gt;</span>
    <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">div</span>&gt;<=
/span>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">body</span>&gt;</sp=
an>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">html</span>&gt;</sp=
an>
</code></div></div></pre><h3>Personalizaci=C3=B3n:</h3><ol><li><strong>Back=
end</strong>: Cambia el atributo <code>action</code> en el formulario para =
que apunte al archivo o endpoint del servidor que procesar=C3=A1 los datos.=
</li><li><strong>Validaci=C3=B3n</strong>: Usa JavaScript o HTML5 para real=
izar validaciones en los campos.</li><li><strong>Estilo</strong>: Puedes ag=
regar m=C3=A1s estilos con CSS para personalizarlo seg=C3=BAn tus necesidad=
es.</li><li><strong>Seguridad</strong>: Aseg=C3=BArate de encriptar la cont=
rase=C3=B1a en el backend y usar HTTPS para proteger los datos.</li></ol><p=
>=C2=BFNecesitas ayuda con la funcionalidad del backend o estilos adicional=
es?</p></div></div></div></div><div class=3D"mb-2 flex gap-3 empty:hidden -=
ml-2"><div class=3D"items-center justify-start rounded-xl p-1 z-10 -mt-1 bg=
-token-main-surface-primary md:absolute md:sr-only"><div class=3D"flex item=
s-center"><span class=3D"" data-state=3D"closed"><button class=3D"rounded-l=
g text-token-text-secondary hover:bg-token-main-surface-secondary" aria-lab=
el=3D"Read aloud" data-testid=3D"voice-play-turn-action-button"><span class=
=3D"flex h-[30px] w-[30px] items-center justify-center"><svg width=3D"24" h=
eight=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org=
/2000/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd" clip-rule=3D=
"evenodd" d=3D"M11 4.9099C11 4.47485 10.4828 4.24734 10.1621 4.54132L6.6757=
2 7.7372C6.49129 7.90626 6.25019 8.00005 6 8.00005H4C3.44772 8.00005 3 8.44=
776 3 9.00005V15C3 15.5523 3.44772 16 4 16H6C6.25019 16 6.49129 16.0938 6.6=
7572 16.2629L10.1621 19.4588C10.4828 19.7527 11 19.5252 11 19.0902V4.9099ZM=
8.81069 3.06701C10.4142 1.59714 13 2.73463 13 4.9099V19.0902C13 21.2655 10.=
4142 22.403 8.81069 20.9331L5.61102 18H4C2.34315 18 1 16.6569 1 15V9.00005C=
1 7.34319 2.34315 6.00005 4 6.00005H5.61102L8.81069 3.06701ZM20.3166 6.3566=
5C20.8019 6.09313 21.409 6.27296 21.6725 6.75833C22.5191 8.3176 22.9996 10.=
1042 22.9996 12.0001C22.9996 13.8507 22.5418 15.5974 21.7323 17.1302C21.474=
4 17.6185 20.8695 17.8054 20.3811 17.5475C19.8927 17.2896 19.7059 16.6846 1=
9.9638 16.1962C20.6249 14.9444 20.9996 13.5175 20.9996 12.0001C20.9996 10.4=
458 20.6064 8.98627 19.9149 7.71262C19.6514 7.22726 19.8312 6.62017 20.3166=
 6.35665ZM15.7994 7.90049C16.241 7.5688 16.8679 7.65789 17.1995 8.09947C18.=
0156 9.18593 18.4996 10.5379 18.4996 12.0001C18.4996 13.3127 18.1094 14.537=
2 17.4385 15.5604C17.1357 16.0222 16.5158 16.1511 16.0539 15.8483C15.5921 1=
5.5455 15.4632 14.9255 15.766 14.4637C16.2298 13.7564 16.4996 12.9113 16.49=
96 12.0001C16.4996 10.9859 16.1653 10.0526 15.6004 9.30063C15.2687 8.85905 =
15.3578 8.23218 15.7994 7.90049Z" fill=3D"currentColor"></path></svg></span=
></button></span><span class=3D"" data-state=3D"closed"><button class=3D"ro=
unded-lg text-token-text-secondary hover:bg-token-main-surface-secondary" a=
ria-label=3D"Copiar" data-testid=3D"copy-turn-action-button"><span class=3D=
"flex h-[30px] w-[30px] items-center justify-center"><svg width=3D"24" heig=
ht=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/20=
00/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd" clip-rule=3D"ev=
enodd" d=3D"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C2=
2 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2=
 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 1=
7 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.447=
72 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 =
5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill=
=3D"currentColor"></path></svg></span></button></span><div class=3D"flex"><=
span class=3D"" data-state=3D"closed"><button class=3D"rounded-lg text-toke=
n-text-secondary hover:bg-token-main-surface-secondary" aria-label=3D"Buena=
 respuesta" data-testid=3D"good-response-turn-action-button"><span class=3D=
"flex h-[30px] w-[30px] items-center justify-center"><svg width=3D"24" heig=
ht=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/20=
00/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd" clip-rule=3D"ev=
enodd" d=3D"M12.1318 2.50389C12.3321 2.15338 12.7235 1.95768 13.124 2.00775=
L13.5778 2.06447C16.0449 2.37286 17.636 4.83353 16.9048 7.20993L16.354 8.99=
999H17.0722C19.7097 8.99999 21.6253 11.5079 20.9313 14.0525L19.5677 19.0525=
C19.0931 20.7927 17.5124 22 15.7086 22H6C4.34315 22 3 20.6568 3 19V12C3 10.=
3431 4.34315 8.99999 6 8.99999H8C8.25952 8.99999 8.49914 8.86094 8.6279 8.6=
3561L12.1318 2.50389ZM10 20H15.7086C16.6105 20 17.4008 19.3964 17.6381 18.5=
262L19.0018 13.5262C19.3488 12.2539 18.391 11 17.0722 11H15C14.6827 11 14.3=
841 10.8494 14.1956 10.5941C14.0071 10.3388 13.9509 10.0092 14.0442 9.70591=
L14.9932 6.62175C15.3384 5.49984 14.6484 4.34036 13.5319 4.08468L10.3644 9.=
62789C10.0522 10.1742 9.56691 10.5859 9 10.8098V19C9 19.5523 9.44772 20 10 =
20ZM7 11V19C7 19.3506 7.06015 19.6872 7.17071 20H6C5.44772 20 5 19.5523 5 1=
9V12C5 11.4477 5.44772 11 6 11H7Z" fill=3D"currentColor"></path></svg></spa=
n></button></span><span class=3D"" data-state=3D"closed"><button class=3D"r=
ounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary" =
aria-label=3D"Respuesta deficiente" data-testid=3D"bad-response-turn-action=
-button"><span class=3D"flex h-[30px] w-[30px] items-center justify-center"=
><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=
=3D"http://www.w3.org/2000/svg" class=3D"icon-md-heavy"><path fill-rule=3D"=
evenodd" clip-rule=3D"evenodd" d=3D"M11.8727 21.4961C11.6725 21.8466 11.281=
1 22.0423 10.8805 21.9922L10.4267 21.9355C7.95958 21.6271 6.36855 19.1665 7=
.09975 16.7901L7.65054 15H6.93226C4.29476 15 2.37923 12.4921 3.0732 9.94753=
L4.43684 4.94753C4.91145 3.20728 6.49209 2 8.29589 2H18.0045C19.6614 2 21.0=
045 3.34315 21.0045 5V12C21.0045 13.6569 19.6614 15 18.0045 15H16.0045C15.7=
45 15 15.5054 15.1391 15.3766 15.3644L11.8727 21.4961ZM14.0045 4H8.29589C7.=
39399 4 6.60367 4.60364 6.36637 5.47376L5.00273 10.4738C4.65574 11.746 5.61=
351 13 6.93226 13H9.00451C9.32185 13 9.62036 13.1506 9.8089 13.4059C9.99743=
 13.6612 10.0536 13.9908 9.96028 14.2941L9.01131 17.3782C8.6661 18.5002 9.3=
5608 19.6596 10.4726 19.9153L13.6401 14.3721C13.9523 13.8258 14.4376 13.414=
1 15.0045 13.1902V5C15.0045 4.44772 14.5568 4 14.0045 4ZM17.0045 13V5C17.00=
45 4.64937 16.9444 4.31278 16.8338 4H18.0045C18.5568 4 19.0045 4.44772 19.0=
045 5V12C19.0045 12.5523 18.5568 13 18.0045 13H17.0045Z" fill=3D"currentCol=
or"></path></svg></span></button></span></div><span class=3D"hidden"></span=
><span class=3D"" data-state=3D"closed"><button type=3D"button" id=3D"radix=
-:r84:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed=
" class=3D"cursor-pointer h-[30px] rounded-md px-1 text-token-text-secondar=
y hover:bg-token-main-surface-secondary"><div class=3D"flex items-center pb=
-0"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xml=
ns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path d=3D"M3.06957 10.=
8763C3.62331 6.43564 7.40967 3 12 3C14.2824 3 16.4028 3.85067 18.0118 5.254=
39V4C18.0118 3.44772 18.4595 3 19.0118 3C19.5641 3 20.0118 3.44772 20.0118 =
4V8C20.0118 8.55228 19.5641 9 19.0118 9H15C14.4477 9 14 8.55228 14 8C14 7.4=
4772 14.4477 7 15 7H16.9571C15.6757 5.76379 13.9101 5 12 5C8.43108 5 5.4846=
6 7.67174 5.0542 11.1237C4.98586 11.6718 4.48619 12.0607 3.93815 11.9923C3.=
39011 11.924 3.00123 11.4243 3.06957 10.8763ZM20.0618 12.0077C20.6099 12.07=
6 20.9988 12.5757 20.9304 13.1237C20.3767 17.5644 16.5903 21 12 21C9.72322 =
21 7.60762 20.1535 5.99999 18.7559V20C5.99999 20.5523 5.55228 21 4.99999 21=
C4.44771 21 3.99999 20.5523 3.99999 20V16C3.99999 15.4477 4.44771 15 4.9999=
9 15H8.99999C9.55228 15 9.99999 15.4477 9.99999 16C9.99999 16.5523 9.55228 =
17 8.99999 17H7.04285C8.32433 18.2362 10.0899 19 12 19C15.5689 19 18.5153 1=
6.3283 18.9458 12.8763C19.0141 12.3282 19.5138 11.9393 20.0618 12.0077Z" fi=
ll=3D"currentColor"></path></svg><span class=3D"overflow-hidden text-clip w=
hitespace-nowrap text-sm" style=3D"opacity: 0; padding-left: 0px; width: 0%=
; will-change: auto;">4o</span><svg width=3D"24" height=3D"24" viewBox=3D"0=
 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-=
sm"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M5.29289 9.29289=
C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289=
C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10=
.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7=
348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90=
237 9.68342 5.29289 9.29289Z" fill=3D"currentColor"></path></svg></div></bu=
tton></span></div></div></div><div class=3D"pr-2 lg:pr-0"></div></div></div=
></div></div></article><article class=3D"w-full scroll-mb-[var(--thread-tra=
iling-height,150px)] text-token-text-primary focus-visible:outline-2 focus-=
visible:outline-offset-[-4px]" dir=3D"auto" data-testid=3D"conversation-tur=
n-4" data-scroll-anchor=3D"false"><h5 class=3D"sr-only">Dijiste:</h5><div c=
lass=3D"m-auto text-base py-[18px] px-3 md:px-4 w-full md:px-5 lg:px-4 xl:p=
x-5"><div class=3D"mx-auto flex flex-1 gap-4 text-base md:gap-5 lg:gap-6 md=
:max-w-3xl lg:max-w-[40rem] xl:max-w-[48rem]"><div class=3D"group/conversat=
ion-turn relative flex w-full min-w-0 flex-col"><div class=3D"flex-col gap-=
1 md:gap-3"><div class=3D"flex max-w-full flex-col flex-grow"><div data-mes=
sage-author-role=3D"user" data-message-id=3D"aaa2e653-784e-4623-a7eb-691245=
ab8c82" dir=3D"auto" class=3D"min-h-8 text-message flex w-full flex-col ite=
ms-end gap-2 whitespace-normal break-words text-start [.text-message+&amp;]=
:mt-5"><div class=3D"flex w-full flex-col gap-1 empty:hidden items-end rtl:=
items-start"><div class=3D"flex gap-2 flex-wrap mt-1 max-w-[80%] justify-en=
d"><div class=3D"group relative inline-block text-sm text-token-text-primar=
y"><div class=3D"relative overflow-hidden border border-token-border-light =
bg-token-main-surface-primary rounded-xl"><div class=3D"p-2 w-80"><div clas=
s=3D"flex flex-row items-center gap-2"><div class=3D"relative h-10 w-10 shr=
ink-0 overflow-hidden rounded-md"><svg xmlns=3D"http://www.w3.org/2000/svg"=
 viewBox=3D"0 0 36 36" fill=3D"none" class=3D"h-10 w-10 flex-shrink-0" widt=
h=3D"36" height=3D"36"><rect width=3D"36" height=3D"36" rx=3D"6" fill=3D"#0=
088FF"></rect><path d=3D"M18.833 9.66663H12.9997C12.5576 9.66663 12.1337 9.=
84222 11.8212 10.1548C11.5086 10.4673 11.333 10.8913 11.333 11.3333V24.6666=
C11.333 25.1087 11.5086 25.5326 11.8212 25.8451C12.1337 26.1577 12.5576 26.=
3333 12.9997 26.3333H22.9997C23.4417 26.3333 23.8656 26.1577 24.1782 25.845=
1C24.4907 25.5326 24.6663 25.1087 24.6663 24.6666V15.5L18.833 9.66663Z" str=
oke=3D"white" stroke-width=3D"1.66667" stroke-linecap=3D"round" stroke-line=
join=3D"round"></path><path d=3D"M18.833 9.66663V15.5H24.6663" stroke=3D"wh=
ite" stroke-width=3D"1.66667" stroke-linecap=3D"round" stroke-linejoin=3D"r=
ound"></path></svg></div><div class=3D"overflow-hidden"><div class=3D"trunc=
ate font-semibold">www.INFOTEC.com.rar</div><div class=3D"truncate text-tok=
en-text-tertiary">Archivo</div></div></div></div></div></div></div><div cla=
ss=3D"relative max-w-[70%] rounded-3xl bg-token-message-surface px-5 py-2.5=
 rounded-tr-lg"><div class=3D"whitespace-pre-wrap">

</div><div class=3D"absolute bottom-0 right-full top-0 -mr-3.5 hidden pr-5 =
pt-1 [.group\/conversation-turn:hover_&amp;]:block"><span class=3D"" data-s=
tate=3D"closed"><button aria-label=3D"Editar mensaje" class=3D"flex h-9 w-9=
 items-center justify-center rounded-full text-token-text-secondary transit=
ion hover:bg-token-main-surface-tertiary"><svg width=3D"24" height=3D"24" v=
iewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" cla=
ss=3D"icon-md"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M13.2=
929 4.29291C15.0641 2.52167 17.9359 2.52167 19.7071 4.2929C21.4784 6.06414 =
21.4784 8.93588 19.7071 10.7071L18.7073 11.7069L11.6135 18.8007C10.8766 19.=
5376 9.92793 20.0258 8.89999 20.1971L4.16441 20.9864C3.84585 21.0395 3.5212=
7 20.9355 3.29291 20.7071C3.06454 20.4788 2.96053 20.1542 3.01362 19.8356L3=
.80288 15.1C3.9742 14.0721 4.46243 13.1234 5.19932 12.3865L13.2929 4.29291Z=
M13 7.41422L6.61353 13.8007C6.1714 14.2428 5.87846 14.8121 5.77567 15.4288L=
5.21656 18.7835L8.57119 18.2244C9.18795 18.1216 9.75719 17.8286 10.1993 17.=
3865L16.5858 11L13 7.41422ZM18 9.5858L14.4142 6.00001L14.7071 5.70712C15.69=
73 4.71693 17.3027 4.71693 18.2929 5.70712C19.2831 6.69731 19.2831 8.30272 =
18.2929 9.29291L18 9.5858Z" fill=3D"currentColor"></path></svg></button></s=
pan></div></div></div></div></div></div></div></div></div></article><articl=
e class=3D"w-full scroll-mb-[var(--thread-trailing-height,150px)] text-toke=
n-text-primary focus-visible:outline-2 focus-visible:outline-offset-[-4px]"=
 dir=3D"auto" data-testid=3D"conversation-turn-5" data-scroll-anchor=3D"fal=
se"><h6 class=3D"sr-only"</h6><div class=3D"m-auto text-base =
py-[18px] px-3 md:px-4 w-full md:px-5 lg:px-4 xl:px-5"><div class=3D"mx-aut=
o flex flex-1 gap-4 text-base md:gap-5 lg:gap-6 md:max-w-3xl lg:max-w-[40re=
m] xl:max-w-[48rem]"><div class=3D"flex-shrink-0 flex flex-col relative ite=
ms-end"><div><div class=3D"pt-0"><div class=3D"gizmo-bot-avatar flex h-8 w-=
8 items-center justify-center overflow-hidden rounded-full"><div class=3D"r=
elative p-1 rounded-sm flex items-center justify-center bg-token-main-surfa=
ce-primary text-token-text-primary h-8 w-8"><svg width=3D"41" height=3D"41"=
 viewBox=3D"0 0 41 41" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" c=
lass=3D"icon-md" role=3D"img"><text x=3D"-9999" y=3D"-9999"></text><=
path d=3D"M37.5324 16.8707C37.9808 15.5241 38.1363 14.0974 37.9886 12.6859C=
37.8409 11.2744 37.3934 9.91076 36.676 8.68622C35.6126 6.83404 33.9882 5.36=
76 32.0373 4.4985C30.0864 3.62941 27.9098 3.40259 25.8215 3.85078C24.8796 2=
.7893 23.7219 1.94125 22.4257 1.36341C21.1295 0.785575 19.7249 0.491269 18.=
3058 0.500197C16.1708 0.495044 14.0893 1.16803 12.3614 2.42214C10.6335 3.67=
624 9.34853 5.44666 8.6917 7.47815C7.30085 7.76286 5.98686 8.3414 4.8377 9.=
17505C3.68854 10.0087 2.73073 11.0782 2.02839 12.312C0.956464 14.1591 0.498=
905 16.2988 0.721698 18.4228C0.944492 20.5467 1.83612 22.5449 3.268 24.1293=
C2.81966 25.4759 2.66413 26.9026 2.81182 28.3141C2.95951 29.7256 3.40701 31=
.0892 4.12437 32.3138C5.18791 34.1659 6.8123 35.6322 8.76321 36.5013C10.714=
1 37.3704 12.8907 37.5973 14.9789 37.1492C15.9208 38.2107 17.0786 39.0587 1=
8.3747 39.6366C19.6709 40.2144 21.0755 40.5087 22.4946 40.4998C24.6307 40.5=
054 26.7133 39.8321 28.4418 38.5772C30.1704 37.3223 31.4556 35.5506 32.1119=
 33.5179C33.5027 33.2332 34.8167 32.6547 35.9659 31.821C37.115 30.9874 38.0=
728 29.9178 38.7752 28.684C39.8458 26.8371 40.3023 24.6979 40.0789 22.5748C=
39.8556 20.4517 38.9639 18.4544 37.5324 16.8707ZM22.4978 37.8849C20.7443 37=
.8874 19.0459 37.2733 17.6994 36.1501C17.7601 36.117 17.8666 36.0586 17.936=
 36.0161L25.9004 31.4156C26.1003 31.3019 26.2663 31.137 26.3813 30.9378C26.=
4964 30.7386 26.5563 30.5124 26.5549 30.2825V19.0542L29.9213 20.998C29.9389=
 21.0068 29.9541 21.0198 29.9656 21.0359C29.977 21.052 29.9842 21.0707 29.9=
867 21.0902V30.3889C29.9842 32.375 29.1946 34.2791 27.7909 35.6841C26.3872 =
37.0892 24.4838 37.8806 22.4978 37.8849ZM6.39227 31.0064C5.51397 29.4888 5.=
19742 27.7107 5.49804 25.9832C5.55718 26.0187 5.66048 26.0818 5.73461 26.12=
44L13.699 30.7248C13.8975 30.8408 14.1233 30.902 14.3532 30.902C14.583 30.9=
02 14.8088 30.8408 15.0073 30.7248L24.731 25.1103V28.9979C24.7321 29.0177 2=
4.7283 29.0376 24.7199 29.0556C24.7115 29.0736 24.6988 29.0893 24.6829 29.1=
012L16.6317 33.7497C14.9096 34.7416 12.8643 35.0097 10.9447 34.4954C9.02506=
 33.9811 7.38785 32.7263 6.39227 31.0064ZM4.29707 13.6194C5.17156 12.0998 6=
.55279 10.9364 8.19885 10.3327C8.19885 10.4013 8.19491 10.5228 8.19491 10.6=
071V19.808C8.19351 20.0378 8.25334 20.2638 8.36823 20.4629C8.48312 20.6619 =
8.64893 20.8267 8.84863 20.9404L18.5723 26.5542L15.206 28.4979C15.1894 28.5=
089 15.1703 28.5155 15.1505 28.5173C15.1307 28.5191 15.1107 28.516 15.0924 =
28.5082L7.04046 23.8557C5.32135 22.8601 4.06716 21.2235 3.55289 19.3046C3.0=
3862 17.3858 3.30624 15.3413 4.29707 13.6194ZM31.955 20.0556L22.2312 14.441=
1L25.5976 12.4981C25.6142 12.4872 25.6333 12.4805 25.6531 12.4787C25.6729 1=
2.4769 25.6928 12.4801 25.7111 12.4879L33.7631 17.1364C34.9967 17.849 36.00=
17 18.8982 36.6606 20.1613C37.3194 21.4244 37.6047 22.849 37.4832 24.2684C3=
7.3617 25.6878 36.8382 27.0432 35.9743 28.1759C35.1103 29.3086 33.9415 30.1=
717 32.6047 30.6641C32.6047 30.5947 32.6047 30.4733 32.6047 30.3889V21.188C=
32.6066 20.9586 32.5474 20.7328 32.4332 20.5338C32.319 20.3348 32.154 20.16=
98 31.955 20.0556ZM35.3055 15.0128C35.2464 14.9765 35.1431 14.9142 35.069 1=
4.8717L27.1045 10.2712C26.906 10.1554 26.6803 10.0943 26.4504 10.0943C26.22=
06 10.0943 25.9948 10.1554 25.7963 10.2712L16.0726 15.8858V11.9982C16.0715 =
11.9783 16.0753 11.9585 16.0837 11.9405C16.0921 11.9225 16.1048 11.9068 16.=
1207 11.8949L24.1719 7.25025C25.4053 6.53903 26.8158 6.19376 28.2383 6.2548=
2C29.6608 6.31589 31.0364 6.78077 32.2044 7.59508C33.3723 8.40939 34.2842 9=
.53945 34.8334 10.8531C35.3826 12.1667 35.5464 13.6095 35.3055 15.0128ZM14.=
2424 21.9419L10.8752 19.9981C10.8576 19.9893 10.8423 19.9763 10.8309 19.960=
2C10.8195 19.9441 10.8122 19.9254 10.8098 19.9058V10.6071C10.8107 9.18295 1=
1.2173 7.78848 11.9819 6.58696C12.7466 5.38544 13.8377 4.42659 15.1275 3.82=
264C16.4173 3.21869 17.8524 2.99464 19.2649 3.1767C20.6775 3.35876 22.0089 =
3.93941 23.1034 4.85067C23.0427 4.88379 22.937 4.94215 22.8668 4.98473L14.9=
024 9.58517C14.7025 9.69878 14.5366 9.86356 14.4215 10.0626C14.3065 10.2616=
 14.2466 10.4877 14.2479 10.7175L14.2424 21.9419ZM16.071 17.9991L20.4018 15=
.4978L24.7325 17.9975V22.9985L20.4018 25.4983L16.071 22.9985V17.9991Z" fill=
=3D"currentColor"></path></svg></div></div></div></div></div><div class=3D"=
group/conversation-turn relative flex w-full min-w-0 flex-col agent-turn"><=
div class=3D"flex-col gap-1 md:gap-3"><div class=3D"flex max-w-full flex-co=
l flex-grow"><div data-message-author-role=3D"assistant" data-message-id=3D=
"3f07f14e-538e-4afc-a429-216917e2eb59" dir=3D"auto" class=3D"min-h-8 text-m=
essage flex w-full flex-col items-end gap-2 whitespace-normal break-words t=
ext-start [.text-message+&amp;]:mt-5" data-message-model-slug=3D"gpt-4o"><d=
iv class=3D"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]"><div cl=
ass=3D"markdown prose w-full break-words dark:prose-invert light"><p>Parece=
 que has subido un archivo comprimido con contenido relacionado. Primero, n=
ecesito descomprimir y revisar los archivos dentro de <strong><a rel=3D"noo=
pener" target=3D"_new" style=3D"--streaming-animation-state: var(--batch-pl=
ay-state-1); --animation-rate: var(--batch-play-rate-1);"><span style=3D"--=
animation-count: 0; --streaming-animation-state: var(--batch-play-state-2);=
">www</span><span style=3D"--animation-count: 1; --streaming-animation-stat=
e: var(--batch-play-state-2);">.INFOTEC</span><span style=3D"--animation-co=
unt: 2; --streaming-animation-state: var(--batch-play-state-2);">.com</span=
><span style=3D"--animation-count: 3; --streaming-animation-state: var(--ba=
tch-play-state-2);">.rar</span></a></strong> para entender c=C3=B3mo est=C3=
=A1n estructurados y c=C3=B3mo conectar las p=C3=A1ginas de <strong>index</=
strong>, <strong>login</strong> y <strong>registro</strong>. Voy a proceder=
 a descomprimirlo y analizarlo. Un momento.</p></div></div></div><div data-=
message-author-role=3D"assistant" data-message-id=3D"5247ecba-90cc-4b9f-957=
0-dd6f94498024" dir=3D"auto" class=3D"min-h-8 text-message flex w-full flex=
-col items-end gap-2 whitespace-normal break-words text-start [.text-messag=
e+&amp;]:mt-5" data-message-model-slug=3D"gpt-4o"><div class=3D"flex w-full=
 flex-col gap-1 empty:hidden first:pt-[3px]"><div class=3D"markdown prose w=
-full break-words dark:prose-invert light"><p>Parece que el sistema no pued=
e extraer el archivo RAR porque falta la herramienta adecuada para manejar =
este tipo de archivos. Para proceder, podr=C3=ADas:</p><ol><li><strong>Conv=
ertir el archivo RAR a un formato ZIP</strong> (que es m=C3=A1s ampliamente=
 soportado) y volver a cargarlo.</li><li><strong>Descomprimir el archivo lo=
calmente</strong> y subir los archivos descomprimidos aqu=C3=AD.</li><li>Si=
 deseas, puedo indicarte c=C3=B3mo hacerlo en tu computadora.</li></ol><p>I=
nd=C3=ADcame c=C3=B3mo prefieres proceder. =F0=9F=98=8A =E2=80=8B<span clas=
s=3D"" data-state=3D"closed"><button><svg xmlns=3D"http://www.w3.org/2000/s=
vg" viewBox=3D"0 0 19 15" fill=3D"none" class=3D"-mt-0.5 ml-0.5 inline-bloc=
k text-token-link hover:text-token-link-hover" width=3D"19" height=3D"15"><=
path d=3D"M4.42 0.75H2.8625H2.75C1.64543 0.75 0.75 1.64543 0.75 2.75V11.65C=
0.75 12.7546 1.64543 13.65 2.75 13.65H2.8625C2.8625 13.65 2.8625 13.65 2.86=
25 13.65C2.8625 13.65 4.00751 13.65 4.42 13.65M13.98 13.65H15.5375H15.65C16=
.7546 13.65 17.65 12.7546 17.65 11.65V2.75C17.65 1.64543 16.7546 0.75 15.65=
 0.75H15.5375H13.98" stroke=3D"currentColor" stroke-width=3D"1.5" stroke-li=
necap=3D"round" stroke-linejoin=3D"round"></path><path d=3D"M5.55283 4.2196=
3C5.25993 3.92674 4.78506 3.92674 4.49217 4.21963C4.19927 4.51252 4.19927 4=
.9874 4.49217 5.28029L6.36184 7.14996L4.49217 9.01963C4.19927 9.31252 4.199=
27 9.7874 4.49217 10.0803C4.78506 10.3732 5.25993 10.3732 5.55283 10.0803L7=
.95283 7.68029C8.24572 7.3874 8.24572 6.91252 7.95283 6.61963L5.55283 4.219=
63Z" fill=3D"currentColor" stroke=3D"currentColor" stroke-width=3D"0.2" str=
oke-linecap=3D"round" stroke-linejoin=3D"round"></path><path d=3D"M9.77753 =
8.75003C9.3357 8.75003 8.97753 9.10821 8.97753 9.55003C8.97753 9.99186 9.33=
57 10.35 9.77753 10.35H13.2775C13.7194 10.35 14.0775 9.99186 14.0775 9.5500=
3C14.0775 9.10821 13.7194 8.75003 13.2775 8.75003H9.77753Z" fill=3D"current=
Color" stroke=3D"currentColor" stroke-width=3D"0.1"></path></svg></button><=
/span>=E2=80=8B</p></div></div></div></div><div class=3D"mb-2 flex gap-3 em=
pty:hidden -ml-2"><div class=3D"items-center justify-start rounded-xl p-1 z=
-10 -mt-1 bg-token-main-surface-primary md:absolute md:sr-only"><div class=
=3D"flex items-center"><span class=3D"" data-state=3D"closed"><button class=
=3D"rounded-lg text-token-text-secondary hover:bg-token-main-surface-second=
ary" aria-label=3D"Read aloud" data-testid=3D"voice-play-turn-action-button=
"><span class=3D"flex h-[30px] w-[30px] items-center justify-center"><svg w=
idth=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http=
://www.w3.org/2000/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd"=
 clip-rule=3D"evenodd" d=3D"M11 4.9099C11 4.47485 10.4828 4.24734 10.1621 4=
.54132L6.67572 7.7372C6.49129 7.90626 6.25019 8.00005 6 8.00005H4C3.44772 8=
.00005 3 8.44776 3 9.00005V15C3 15.5523 3.44772 16 4 16H6C6.25019 16 6.4912=
9 16.0938 6.67572 16.2629L10.1621 19.4588C10.4828 19.7527 11 19.5252 11 19.=
0902V4.9099ZM8.81069 3.06701C10.4142 1.59714 13 2.73463 13 4.9099V19.0902C1=
3 21.2655 10.4142 22.403 8.81069 20.9331L5.61102 18H4C2.34315 18 1 16.6569 =
1 15V9.00005C1 7.34319 2.34315 6.00005 4 6.00005H5.61102L8.81069 3.06701ZM2=
0.3166 6.35665C20.8019 6.09313 21.409 6.27296 21.6725 6.75833C22.5191 8.317=
6 22.9996 10.1042 22.9996 12.0001C22.9996 13.8507 22.5418 15.5974 21.7323 1=
7.1302C21.4744 17.6185 20.8695 17.8054 20.3811 17.5475C19.8927 17.2896 19.7=
059 16.6846 19.9638 16.1962C20.6249 14.9444 20.9996 13.5175 20.9996 12.0001=
C20.9996 10.4458 20.6064 8.98627 19.9149 7.71262C19.6514 7.22726 19.8312 6.=
62017 20.3166 6.35665ZM15.7994 7.90049C16.241 7.5688 16.8679 7.65789 17.199=
5 8.09947C18.0156 9.18593 18.4996 10.5379 18.4996 12.0001C18.4996 13.3127 1=
8.1094 14.5372 17.4385 15.5604C17.1357 16.0222 16.5158 16.1511 16.0539 15.8=
483C15.5921 15.5455 15.4632 14.9255 15.766 14.4637C16.2298 13.7564 16.4996 =
12.9113 16.4996 12.0001C16.4996 10.9859 16.1653 10.0526 15.6004 9.30063C15.=
2687 8.85905 15.3578 8.23218 15.7994 7.90049Z" fill=3D"currentColor"></path=
></svg></span></button></span><span class=3D"" data-state=3D"closed"><butto=
n class=3D"rounded-lg text-token-text-secondary hover:bg-token-main-surface=
-secondary" aria-label=3D"Copiar" data-testid=3D"copy-turn-action-button"><=
span class=3D"flex h-[30px] w-[30px] items-center justify-center"><svg widt=
h=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://=
www.w3.org/2000/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd" cl=
ip-rule=3D"evenodd" d=3D"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34=
315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5=
C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7=
 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 =
19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.552=
3 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14=
 9H5Z" fill=3D"currentColor"></path></svg></span></button></span><div class=
=3D"flex"><span class=3D"" data-state=3D"closed"><button class=3D"rounded-l=
g text-token-text-secondary hover:bg-token-main-surface-secondary" aria-lab=
el=3D"Buena respuesta" data-testid=3D"good-response-turn-action-button"><sp=
an class=3D"flex h-[30px] w-[30px] items-center justify-center"><svg width=
=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://w=
ww.w3.org/2000/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd" cli=
p-rule=3D"evenodd" d=3D"M12.1318 2.50389C12.3321 2.15338 12.7235 1.95768 13=
.124 2.00775L13.5778 2.06447C16.0449 2.37286 17.636 4.83353 16.9048 7.20993=
L16.354 8.99999H17.0722C19.7097 8.99999 21.6253 11.5079 20.9313 14.0525L19.=
5677 19.0525C19.0931 20.7927 17.5124 22 15.7086 22H6C4.34315 22 3 20.6568 3=
 19V12C3 10.3431 4.34315 8.99999 6 8.99999H8C8.25952 8.99999 8.49914 8.8609=
4 8.6279 8.63561L12.1318 2.50389ZM10 20H15.7086C16.6105 20 17.4008 19.3964 =
17.6381 18.5262L19.0018 13.5262C19.3488 12.2539 18.391 11 17.0722 11H15C14.=
6827 11 14.3841 10.8494 14.1956 10.5941C14.0071 10.3388 13.9509 10.0092 14.=
0442 9.70591L14.9932 6.62175C15.3384 5.49984 14.6484 4.34036 13.5319 4.0846=
8L10.3644 9.62789C10.0522 10.1742 9.56691 10.5859 9 10.8098V19C9 19.5523 9.=
44772 20 10 20ZM7 11V19C7 19.3506 7.06015 19.6872 7.17071 20H6C5.44772 20 5=
 19.5523 5 19V12C5 11.4477 5.44772 11 6 11H7Z" fill=3D"currentColor"></path=
></svg></span></button></span><span class=3D"" data-state=3D"closed"><butto=
n class=3D"rounded-lg text-token-text-secondary hover:bg-token-main-surface=
-secondary" aria-label=3D"Respuesta deficiente" data-testid=3D"bad-response=
-turn-action-button"><span class=3D"flex h-[30px] w-[30px] items-center jus=
tify-center"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"=
none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md-heavy"><path fi=
ll-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M11.8727 21.4961C11.6725 21.=
8466 11.2811 22.0423 10.8805 21.9922L10.4267 21.9355C7.95958 21.6271 6.3685=
5 19.1665 7.09975 16.7901L7.65054 15H6.93226C4.29476 15 2.37923 12.4921 3.0=
732 9.94753L4.43684 4.94753C4.91145 3.20728 6.49209 2 8.29589 2H18.0045C19.=
6614 2 21.0045 3.34315 21.0045 5V12C21.0045 13.6569 19.6614 15 18.0045 15H1=
6.0045C15.745 15 15.5054 15.1391 15.3766 15.3644L11.8727 21.4961ZM14.0045 4=
H8.29589C7.39399 4 6.60367 4.60364 6.36637 5.47376L5.00273 10.4738C4.65574 =
11.746 5.61351 13 6.93226 13H9.00451C9.32185 13 9.62036 13.1506 9.8089 13.4=
059C9.99743 13.6612 10.0536 13.9908 9.96028 14.2941L9.01131 17.3782C8.6661 =
18.5002 9.35608 19.6596 10.4726 19.9153L13.6401 14.3721C13.9523 13.8258 14.=
4376 13.4141 15.0045 13.1902V5C15.0045 4.44772 14.5568 4 14.0045 4ZM17.0045=
 13V5C17.0045 4.64937 16.9444 4.31278 16.8338 4H18.0045C18.5568 4 19.0045 4=
.44772 19.0045 5V12C19.0045 12.5523 18.5568 13 18.0045 13H17.0045Z" fill=3D=
"currentColor"></path></svg></span></button></span></div><span class=3D"hid=
den"></span><span class=3D"" data-state=3D"closed"><button type=3D"button" =
id=3D"radix-:r9b:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-stat=
e=3D"closed" class=3D"cursor-pointer h-[30px] rounded-md px-1 text-token-te=
xt-secondary hover:bg-token-main-surface-secondary"><div class=3D"flex item=
s-center pb-0"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=
=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md"><path d=3D=
"M3.06957 10.8763C3.62331 6.43564 7.40967 3 12 3C14.2824 3 16.4028 3.85067 =
18.0118 5.25439V4C18.0118 3.44772 18.4595 3 19.0118 3C19.5641 3 20.0118 3.4=
4772 20.0118 4V8C20.0118 8.55228 19.5641 9 19.0118 9H15C14.4477 9 14 8.5522=
8 14 8C14 7.44772 14.4477 7 15 7H16.9571C15.6757 5.76379 13.9101 5 12 5C8.4=
3108 5 5.48466 7.67174 5.0542 11.1237C4.98586 11.6718 4.48619 12.0607 3.938=
15 11.9923C3.39011 11.924 3.00123 11.4243 3.06957 10.8763ZM20.0618 12.0077C=
20.6099 12.076 20.9988 12.5757 20.9304 13.1237C20.3767 17.5644 16.5903 21 1=
2 21C9.72322 21 7.60762 20.1535 5.99999 18.7559V20C5.99999 20.5523 5.55228 =
21 4.99999 21C4.44771 21 3.99999 20.5523 3.99999 20V16C3.99999 15.4477 4.44=
771 15 4.99999 15H8.99999C9.55228 15 9.99999 15.4477 9.99999 16C9.99999 16.=
5523 9.55228 17 8.99999 17H7.04285C8.32433 18.2362 10.0899 19 12 19C15.5689=
 19 18.5153 16.3283 18.9458 12.8763C19.0141 12.3282 19.5138 11.9393 20.0618=
 12.0077Z" fill=3D"currentColor"></path></svg><span class=3D"overflow-hidde=
n text-clip whitespace-nowrap text-sm" style=3D"opacity: 0; padding-left: 0=
px; width: 0px; will-change: opacity;">4o</span><svg width=3D"24" height=3D=
"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/sv=
g" class=3D"icon-sm"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D=
"M5.29289 9.29289C5.68342 8.90237 6.31658 8.90237 6.70711 9.29289L12 14.585=
8L17.2929 9.29289C17.6834 8.90237 18.3166 8.90237 18.7071 9.29289C19.0976 9=
.68342 19.0976 10.3166 18.7071 10.7071L12.7071 16.7071C12.5196 16.8946 12.2=
652 17 12 17C11.7348 17 11.4804 16.8946 11.2929 16.7071L5.29289 10.7071C4.9=
0237 10.3166 4.90237 9.68342 5.29289 9.29289Z" fill=3D"currentColor"></path=
></svg></div></button></span></div></div></div><div class=3D"pr-2 lg:pr-0">=
</div></div></div></div></div></article><article class=3D"w-full scroll-mb-=
[var(--thread-trailing-height,150px)] text-token-text-primary focus-visible=
:outline-2 focus-visible:outline-offset-[-4px]" dir=3D"auto" data-testid=3D=
"conversation-turn-6" data-scroll-anchor=3D"false"><h5 class=3D"sr-only">Di=
jiste:</h5><div class=3D"m-auto text-base py-[18px] px-3 md:px-4 w-full md:=
px-5 lg:px-4 xl:px-5"><div class=3D"mx-auto flex flex-1 gap-4 text-base md:=
gap-5 lg:gap-6 md:max-w-3xl lg:max-w-[40rem] xl:max-w-[48rem]"><div class=
=3D"group/conversation-turn relative flex w-full min-w-0 flex-col"><div cla=
ss=3D"flex-col gap-1 md:gap-3"><div class=3D"flex max-w-full flex-col flex-=
grow"><div data-message-author-role=3D"user" data-message-id=3D"aaa26688-bf=
37-42fd-ae36-9549c15ccfc1" dir=3D"auto" class=3D"min-h-8 text-message flex =
w-full flex-col items-end gap-2 whitespace-normal break-words text-start [.=
text-message+&amp;]:mt-5"><div class=3D"flex w-full flex-col gap-1 empty:hi=
dden items-end rtl:items-start"><div class=3D"flex gap-2 flex-wrap mt-1 max=
-w-[80%] justify-end"><div class=3D"group relative inline-block text-sm tex=
t-token-text-primary"><div class=3D"relative overflow-hidden border border-=
token-border-light bg-token-main-surface-primary rounded-xl"><div class=3D"=
p-2 w-80"><div class=3D"flex flex-row items-center gap-2"><div class=3D"rel=
ative h-10 w-10 shrink-0 overflow-hidden rounded-md"><svg xmlns=3D"http://w=
ww.w3.org/2000/svg" viewBox=3D"0 0 36 36" fill=3D"none" class=3D"h-10 w-10 =
flex-shrink-0" width=3D"36" height=3D"36"><rect width=3D"36" height=3D"36" =
rx=3D"6" fill=3D"#0088FF"></rect><path d=3D"M18.833 9.66663H12.9997C12.5576=
 9.66663 12.1337 9.84222 11.8212 10.1548C11.5086 10.4673 11.333 10.8913 11.=
333 11.3333V24.6666C11.333 25.1087 11.5086 25.5326 11.8212 25.8451C12.1337 =
26.1577 12.5576 26.3333 12.9997 26.3333H22.9997C23.4417 26.3333 23.8656 26.=
1577 24.1782 25.8451C24.4907 25.5326 24.6663 25.1087 24.6663 24.6666V15.5L1=
8.833 9.66663Z" stroke=3D"white" stroke-width=3D"1.66667" stroke-linecap=3D=
"round" stroke-linejoin=3D"round"></path><path d=3D"M18.833 9.66663V15.5H24=
.6663" stroke=3D"white" stroke-width=3D"1.66667" stroke-linecap=3D"round" s=
troke-linejoin=3D"round"></path></svg></div><div class=3D"overflow-hidden">=
<div class=3D"truncate font-semibold">index.html</div><div class=3D"truncat=
e text-token-text-tertiary">Archivo</div></div></div></div></div></div><div=
 class=3D"group relative inline-block text-sm text-token-text-primary"><div=
 class=3D"relative overflow-hidden border border-token-border-light bg-toke=
n-main-surface-primary rounded-xl"><div class=3D"p-2 w-80"><div class=3D"fl=
ex flex-row items-center gap-2"><div class=3D"relative h-10 w-10 shrink-0 o=
verflow-hidden rounded-md"><svg xmlns=3D"http://www.w3.org/2000/svg" viewBo=
x=3D"0 0 36 36" fill=3D"none" class=3D"h-10 w-10 flex-shrink-0" width=3D"36=
" height=3D"36"><rect width=3D"36" height=3D"36" rx=3D"6" fill=3D"#0088FF">=
</rect><path d=3D"M18.833 9.66663H12.9997C12.5576 9.66663 12.1337 9.84222 1=
1.8212 10.1548C11.5086 10.4673 11.333 10.8913 11.333 11.3333V24.6666C11.333=
 25.1087 11.5086 25.5326 11.8212 25.8451C12.1337 26.1577 12.5576 26.3333 12=
.9997 26.3333H22.9997C23.4417 26.3333 23.8656 26.1577 24.1782 25.8451C24.49=
07 25.5326 24.6663 25.1087 24.6663 24.6666V15.5L18.833 9.66663Z" stroke=3D"=
white" stroke-width=3D"1.66667" stroke-linecap=3D"round" stroke-linejoin=3D=
"round"></path><path d=3D"M18.833 9.66663V15.5H24.6663" stroke=3D"white" st=
roke-width=3D"1.66667" stroke-linecap=3D"round" stroke-linejoin=3D"round"><=
/path></svg></div><div class=3D"overflow-hidden"><div class=3D"truncate fon=
t-semibold">Login.html</div><div class=3D"truncate text-token-text-tertiary=
">Archivo</div></div></div></div></div></div></div></div></div></div></div>=
</div></div></div></article><article class=3D"w-full scroll-mb-[var(--threa=
d-trailing-height,150px)] text-token-text-primary focus-visible:outline-2 f=
ocus-visible:outline-offset-[-4px]" dir=3D"auto" data-testid=3D"conversatio=
n-turn-7" data-scroll-anchor=3D"true"><h5 class=3D"sr-only"></h5><div class=
=3D"m-auto text-base py-[18px] px-3 md:px-4 w-full md:px-5 lg:px-4 xl:px-5"=
><div class=3D"mx-auto flex flex-1 gap-4 text-base md:gap-5 lg:gap-6 md:max=
-w-3xl lg:max-w-[40rem] xl:max-w-[48rem]"><div class=3D"flex-shrink-0 flex =
flex-col relative items-end"><div><div class=3D"pt-0"><div class=3D"gizmo-b=
ot-avatar flex h-8 w-8 items-center justify-center overflow-hidden rounded-=
full"><div class=3D"relative p-1 rounded-sm flex items-center justify-cente=
r bg-token-main-surface-primary text-token-text-primary h-8 w-8"><svg width=
=3D"41" height=3D"41" viewBox=3D"0 0 41 41" fill=3D"none" xmlns=3D"http://w=
ww.w3.org/2000/svg" class=3D"icon-md" role=3D"img"><text x=3D"-9999" y=3D"-=
9999">ChatGPT</text><path d=3D"M37.5324 16.8707C37.9808 15.5241 38.1363 14.=
0974 37.9886 12.6859C37.8409 11.2744 37.3934 9.91076 36.676 8.68622C35.6126=
 6.83404 33.9882 5.3676 32.0373 4.4985C30.0864 3.62941 27.9098 3.40259 25.8=
215 3.85078C24.8796 2.7893 23.7219 1.94125 22.4257 1.36341C21.1295 0.785575=
 19.7249 0.491269 18.3058 0.500197C16.1708 0.495044 14.0893 1.16803 12.3614=
 2.42214C10.6335 3.67624 9.34853 5.44666 8.6917 7.47815C7.30085 7.76286 5.9=
8686 8.3414 4.8377 9.17505C3.68854 10.0087 2.73073 11.0782 2.02839 12.312C0=
.956464 14.1591 0.498905 16.2988 0.721698 18.4228C0.944492 20.5467 1.83612 =
22.5449 3.268 24.1293C2.81966 25.4759 2.66413 26.9026 2.81182 28.3141C2.959=
51 29.7256 3.40701 31.0892 4.12437 32.3138C5.18791 34.1659 6.8123 35.6322 8=
.76321 36.5013C10.7141 37.3704 12.8907 37.5973 14.9789 37.1492C15.9208 38.2=
107 17.0786 39.0587 18.3747 39.6366C19.6709 40.2144 21.0755 40.5087 22.4946=
 40.4998C24.6307 40.5054 26.7133 39.8321 28.4418 38.5772C30.1704 37.3223 31=
.4556 35.5506 32.1119 33.5179C33.5027 33.2332 34.8167 32.6547 35.9659 31.82=
1C37.115 30.9874 38.0728 29.9178 38.7752 28.684C39.8458 26.8371 40.3023 24.=
6979 40.0789 22.5748C39.8556 20.4517 38.9639 18.4544 37.5324 16.8707ZM22.49=
78 37.8849C20.7443 37.8874 19.0459 37.2733 17.6994 36.1501C17.7601 36.117 1=
7.8666 36.0586 17.936 36.0161L25.9004 31.4156C26.1003 31.3019 26.2663 31.13=
7 26.3813 30.9378C26.4964 30.7386 26.5563 30.5124 26.5549 30.2825V19.0542L2=
9.9213 20.998C29.9389 21.0068 29.9541 21.0198 29.9656 21.0359C29.977 21.052=
 29.9842 21.0707 29.9867 21.0902V30.3889C29.9842 32.375 29.1946 34.2791 27.=
7909 35.6841C26.3872 37.0892 24.4838 37.8806 22.4978 37.8849ZM6.39227 31.00=
64C5.51397 29.4888 5.19742 27.7107 5.49804 25.9832C5.55718 26.0187 5.66048 =
26.0818 5.73461 26.1244L13.699 30.7248C13.8975 30.8408 14.1233 30.902 14.35=
32 30.902C14.583 30.902 14.8088 30.8408 15.0073 30.7248L24.731 25.1103V28.9=
979C24.7321 29.0177 24.7283 29.0376 24.7199 29.0556C24.7115 29.0736 24.6988=
 29.0893 24.6829 29.1012L16.6317 33.7497C14.9096 34.7416 12.8643 35.0097 10=
.9447 34.4954C9.02506 33.9811 7.38785 32.7263 6.39227 31.0064ZM4.29707 13.6=
194C5.17156 12.0998 6.55279 10.9364 8.19885 10.3327C8.19885 10.4013 8.19491=
 10.5228 8.19491 10.6071V19.808C8.19351 20.0378 8.25334 20.2638 8.36823 20.=
4629C8.48312 20.6619 8.64893 20.8267 8.84863 20.9404L18.5723 26.5542L15.206=
 28.4979C15.1894 28.5089 15.1703 28.5155 15.1505 28.5173C15.1307 28.5191 15=
.1107 28.516 15.0924 28.5082L7.04046 23.8557C5.32135 22.8601 4.06716 21.223=
5 3.55289 19.3046C3.03862 17.3858 3.30624 15.3413 4.29707 13.6194ZM31.955 2=
0.0556L22.2312 14.4411L25.5976 12.4981C25.6142 12.4872 25.6333 12.4805 25.6=
531 12.4787C25.6729 12.4769 25.6928 12.4801 25.7111 12.4879L33.7631 17.1364=
C34.9967 17.849 36.0017 18.8982 36.6606 20.1613C37.3194 21.4244 37.6047 22.=
849 37.4832 24.2684C37.3617 25.6878 36.8382 27.0432 35.9743 28.1759C35.1103=
 29.3086 33.9415 30.1717 32.6047 30.6641C32.6047 30.5947 32.6047 30.4733 32=
.6047 30.3889V21.188C32.6066 20.9586 32.5474 20.7328 32.4332 20.5338C32.319=
 20.3348 32.154 20.1698 31.955 20.0556ZM35.3055 15.0128C35.2464 14.9765 35.=
1431 14.9142 35.069 14.8717L27.1045 10.2712C26.906 10.1554 26.6803 10.0943 =
26.4504 10.0943C26.2206 10.0943 25.9948 10.1554 25.7963 10.2712L16.0726 15.=
8858V11.9982C16.0715 11.9783 16.0753 11.9585 16.0837 11.9405C16.0921 11.922=
5 16.1048 11.9068 16.1207 11.8949L24.1719 7.25025C25.4053 6.53903 26.8158 6=
.19376 28.2383 6.25482C29.6608 6.31589 31.0364 6.78077 32.2044 7.59508C33.3=
723 8.40939 34.2842 9.53945 34.8334 10.8531C35.3826 12.1667 35.5464 13.6095=
 35.3055 15.0128ZM14.2424 21.9419L10.8752 19.9981C10.8576 19.9893 10.8423 1=
9.9763 10.8309 19.9602C10.8195 19.9441 10.8122 19.9254 10.8098 19.9058V10.6=
071C10.8107 9.18295 11.2173 7.78848 11.9819 6.58696C12.7466 5.38544 13.8377=
 4.42659 15.1275 3.82264C16.4173 3.21869 17.8524 2.99464 19.2649 3.1767C20.=
6775 3.35876 22.0089 3.93941 23.1034 4.85067C23.0427 4.88379 22.937 4.94215=
 22.8668 4.98473L14.9024 9.58517C14.7025 9.69878 14.5366 9.86356 14.4215 10=
.0626C14.3065 10.2616 14.2466 10.4877 14.2479 10.7175L14.2424 21.9419ZM16.0=
71 17.9991L20.4018 15.4978L24.7325 17.9975V22.9985L20.4018 25.4983L16.071 2=
2.9985V17.9991Z" fill=3D"currentColor"></path></svg></div></div></div></div=
></div><div class=3D"group/conversation-turn relative flex w-full min-w-0 f=
lex-col agent-turn"><div class=3D"flex-col gap-1 md:gap-3"><div class=3D"fl=
ex max-w-full flex-col flex-grow"><p class=3D"first:mt-0 my-1.5 h-8 flex it=
ems-center ltr:mr-auto rtl:ml-auto empty:hidden text-token-text-secondary">=
</p><div data-message-author-role=3D"assistant" data-message-id=3D"a2e9b43a=
-40bc-433d-a8c2-0bf85026f5a7" dir=3D"auto" class=3D"min-h-8 text-message fl=
ex w-full flex-col items-end gap-2 whitespace-normal break-words text-start=
 [.text-message+&amp;]:mt-5" data-message-model-slug=3D"gpt-4o"><div class=
=3D"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]"><div class=3D"m=
arkdown prose w-full break-words dark:prose-invert light"><p>Parece que tie=
nes dos archivos principales: <strong>index.html</strong> y <strong>Login.h=
tml</strong>. Con base en el contenido de estos archivos, aqu=C3=AD tienes =
un plan para conectarlos correctamente junto con una p=C3=A1gina de registr=
o:</p><h3>Pasos para conectar las p=C3=A1ginas:</h3><ol><li><p><strong>Aseg=
urar enlaces entre las p=C3=A1ginas</strong>:</p><ul><li>Actualiza los enla=
ces en el archivo <code>index.html</code> para que apunten correctamente a =
las p=C3=A1ginas de inicio de sesi=C3=B3n y registro.</li><li>Incluye boton=
es o enlaces que redirijan entre las p=C3=A1ginas.</li></ul></li><li><p><st=
rong>Configurar el formulario de inicio de sesi=C3=B3n</strong>:</p><ul><li=
>En <code>Login.html</code>, configura el atributo <code>action</code> para=
 enviar los datos del formulario a un archivo PHP que procese la autenticac=
i=C3=B3n.</li></ul></li><li><p><strong>Crear una p=C3=A1gina de registro</s=
trong>:</p><ul><li>Si a=C3=BAn no tienes un archivo de registro, crea uno c=
on un formulario que permita al usuario registrarse.</li></ul></li></ol><h3=
>Ejemplo de modificaciones:</h3><h4><code>index.html</code></h4><p>Actualiz=
a los enlaces para que apunten correctamente a <code>Login.html</code> y un=
a p=C3=A1gina de registro, por ejemplo:</p><pre class=3D"!overflow-visible"=
><div class=3D"contain-inline-size rounded-md border-[0.5px] border-token-b=
order-medium relative bg-token-sidebar-surface-primary dark:bg-gray-950"><d=
iv class=3D"flex items-center text-token-text-secondary px-4 py-2 text-xs f=
ont-sans justify-between rounded-t-md h-9 bg-token-sidebar-surface-primary =
dark:bg-token-main-surface-secondary select-none">html</div><div class=3D"s=
ticky top-9 md:top-[5.75rem]"><div class=3D"absolute bottom-0 right-2 flex =
h-9 items-center"><div class=3D"flex items-center rounded bg-token-sidebar-=
surface-primary px-2 font-sans text-xs text-token-text-secondary dark:bg-to=
ken-main-surface-secondary"><span class=3D"" data-state=3D"closed"><button =
class=3D"flex gap-1 items-center select-none py-1"><svg width=3D"24" height=
=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000=
/svg" class=3D"icon-sm"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=
=3D"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.656=
9 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569=
 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H=
19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4=
.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C=
14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill=3D"curren=
tColor"></path></svg>Copiar c=C3=B3digo</button></span></div></div></div><d=
iv class=3D"overflow-y-auto p-4" dir=3D"ltr"><code class=3D"!whitespace-pre=
 hljs language-html"><span class=3D"hljs-tag">&lt;<span class=3D"hljs-name"=
>nav</span> <span class=3D"hljs-attr">id</span>=3D<span class=3D"hljs-strin=
g">"nav"</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">ul</span>&gt;</s=
pan>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">li</span> <s=
pan class=3D"hljs-attr">class</span>=3D<span class=3D"hljs-string">"current=
"</span>&gt;</span><span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">a=
</span> <span class=3D"hljs-attr">href</span>=3D<span class=3D"hljs-string"=
>"index.html"</span>&gt;</span>INICIO<span class=3D"hljs-tag">&lt;/<span cl=
ass=3D"hljs-name">a</span>&gt;</span><span class=3D"hljs-tag">&lt;/<span cl=
ass=3D"hljs-name">li</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">li</span>&gt=
;</span><span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">a</span> <sp=
an class=3D"hljs-attr">href</span>=3D<span class=3D"hljs-string">"Login.htm=
l"</span>&gt;</span>INICIAR SESI=C3=93N<span class=3D"hljs-tag">&lt;/<span =
class=3D"hljs-name">a</span>&gt;</span><span class=3D"hljs-tag">&lt;/<span =
class=3D"hljs-name">li</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">li</span>&gt=
;</span><span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">a</span> <sp=
an class=3D"hljs-attr">href</span>=3D<span class=3D"hljs-string">"Registro.=
html"</span>&gt;</span>REGISTRATE<span class=3D"hljs-tag">&lt;/<span class=
=3D"hljs-name">a</span>&gt;</span><span class=3D"hljs-tag">&lt;/<span class=
=3D"hljs-name">li</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">li</span>&gt=
;</span><span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">a</span> <sp=
an class=3D"hljs-attr">href</span>=3D<span class=3D"hljs-string">"Contacto.=
html"</span>&gt;</span>CONTACTO<span class=3D"hljs-tag">&lt;/<span class=3D=
"hljs-name">a</span>&gt;</span><span class=3D"hljs-tag">&lt;/<span class=3D=
"hljs-name">li</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">ul</span>&gt;</=
span>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">nav</span>&gt;</spa=
n>
</code></div></div></pre><h4><code>Login.html</code></h4><p>Modifica el for=
mulario para enviar los datos a un archivo PHP para autenticaci=C3=B3n (por=
 ejemplo, <code>auth.php</code>):</p><pre class=3D"!overflow-visible"><div =
class=3D"contain-inline-size rounded-md border-[0.5px] border-token-border-=
medium relative bg-token-sidebar-surface-primary dark:bg-gray-950"><div cla=
ss=3D"flex items-center text-token-text-secondary px-4 py-2 text-xs font-sa=
ns justify-between rounded-t-md h-9 bg-token-sidebar-surface-primary dark:b=
g-token-main-surface-secondary select-none">html</div><div class=3D"sticky =
top-9 md:top-[5.75rem]"><div class=3D"absolute bottom-0 right-2 flex h-9 it=
ems-center"><div class=3D"flex items-center rounded bg-token-sidebar-surfac=
e-primary px-2 font-sans text-xs text-token-text-secondary dark:bg-token-ma=
in-surface-secondary"><span class=3D"" data-state=3D"closed"><button class=
=3D"flex gap-1 items-center select-none py-1"><svg width=3D"24" height=3D"2=
4" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg"=
 class=3D"icon-sm"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M=
7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.=
6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19=
V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19=
.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.4477=
2 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.55=
23 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill=3D"currentColo=
r"></path></svg>Copiar c=C3=B3digo</button></span></div></div></div><div cl=
ass=3D"overflow-y-auto p-4" dir=3D"ltr"><code class=3D"!whitespace-pre hljs=
 language-html"><span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">form=
</span> <span class=3D"hljs-attr">action</span>=3D<span class=3D"hljs-strin=
g">"auth.php"</span> <span class=3D"hljs-attr">method</span>=3D<span class=
=3D"hljs-string">"POST"</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</span> <sp=
an class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"text"</sp=
an> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-string">"us=
uario"</span> <span class=3D"hljs-attr">placeholder</span>=3D<span class=3D=
"hljs-string">"Usuario"</span> <span class=3D"hljs-attr">required</span>&gt=
;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</span> <sp=
an class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"password"=
</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-string"=
>"contrase=C3=B1a"</span> <span class=3D"hljs-attr">placeholder</span>=3D<s=
pan class=3D"hljs-string">"Contrase=C3=B1a"</span> <span class=3D"hljs-attr=
">required</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">select</span> <s=
pan class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-string">"rol"</sp=
an> <span class=3D"hljs-attr">required</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">option</span=
> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-string">""</=
span> <span class=3D"hljs-attr">disabled</span> <span class=3D"hljs-attr">s=
elected</span>&gt;</span>Selecciona tu rol<span class=3D"hljs-tag">&lt;/<sp=
an class=3D"hljs-name">option</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">option</span=
> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-string">"adm=
in"</span>&gt;</span>Administrador<span class=3D"hljs-tag">&lt;/<span class=
=3D"hljs-name">option</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">option</span=
> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-string">"usu=
ario"</span>&gt;</span>Usuario<span class=3D"hljs-tag">&lt;/<span class=3D"=
hljs-name">option</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">option</span=
> <span class=3D"hljs-attr">value</span>=3D<span class=3D"hljs-string">"inv=
itado"</span>&gt;</span>Invitado<span class=3D"hljs-tag">&lt;/<span class=
=3D"hljs-name">option</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">select</span>&g=
t;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">button</span> <s=
pan class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"submit"<=
/span>&gt;</span>Ingresar<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-=
name">button</span>&gt;</span>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">form</span>&gt;</sp=
an>
</code></div></div></pre><h4><code>Registro.html</code></h4><p>Si no tienes=
 una p=C3=A1gina de registro, puedes usar este ejemplo:</p><pre class=3D"!o=
verflow-visible"><div class=3D"contain-inline-size rounded-md border-[0.5px=
] border-token-border-medium relative bg-token-sidebar-surface-primary dark=
:bg-gray-950"><div class=3D"flex items-center text-token-text-secondary px-=
4 py-2 text-xs font-sans justify-between rounded-t-md h-9 bg-token-sidebar-=
surface-primary dark:bg-token-main-surface-secondary select-none">html</div=
><div class=3D"sticky top-9 md:top-[5.75rem]"><div class=3D"absolute bottom=
-0 right-2 flex h-9 items-center"><div class=3D"flex items-center rounded b=
g-token-sidebar-surface-primary px-2 font-sans text-xs text-token-text-seco=
ndary dark:bg-token-main-surface-secondary"><span class=3D"" data-state=3D"=
closed"><button class=3D"flex gap-1 items-center select-none py-1"><svg wid=
th=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http:/=
/www.w3.org/2000/svg" class=3D"icon-sm"><path fill-rule=3D"evenodd" clip-ru=
le=3D"evenodd" d=3D"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 2=
2 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34=
315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8=
.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H=
10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.4=
4772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z=
" fill=3D"currentColor"></path></svg>Copiar c=C3=B3digo</button></span></di=
v></div></div><div class=3D"overflow-y-auto p-4" dir=3D"ltr"><code class=3D=
"!whitespace-pre hljs language-html"><span class=3D"hljs-meta">&lt;!DOCTYPE=
 <span class=3D"hljs-keyword">html</span>&gt;</span>
<span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">html</span> <span cl=
ass=3D"hljs-attr">lang</span>=3D<span class=3D"hljs-string">"en"</span>&gt;=
</span>
<span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">head</span>&gt;</spa=
n>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">meta</span> <spa=
n class=3D"hljs-attr">charset</span>=3D<span class=3D"hljs-string">"UTF-8"<=
/span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">meta</span> <spa=
n class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-string">"viewport"<=
/span> <span class=3D"hljs-attr">content</span>=3D<span class=3D"hljs-strin=
g">"width=3Ddevice-width, initial-scale=3D1.0"</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">title</span>&gt;=
</span>Registro<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">titl=
e</span>&gt;</span>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">style</span>&gt;=
</span><span class=3D"css">
        <span class=3D"hljs-comment">/* Similar al estilo de Login.html */<=
/span>
    </span><span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">style</s=
pan>&gt;</span>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">head</span>&gt;</sp=
an>
<span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">body</span>&gt;</spa=
n>
    <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">div</span> <span=
 class=3D"hljs-attr">class</span>=3D<span class=3D"hljs-string">"register-c=
ontainer"</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">h2</span>&gt=
;</span>Registro de Usuario<span class=3D"hljs-tag">&lt;/<span class=3D"hlj=
s-name">h2</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">form</span> =
<span class=3D"hljs-attr">action</span>=3D<span class=3D"hljs-string">"regi=
ster.php"</span> <span class=3D"hljs-attr">method</span>=3D<span class=3D"h=
ljs-string">"POST"</span>&gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</s=
pan> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"t=
ext"</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-str=
ing">"nombre"</span> <span class=3D"hljs-attr">placeholder</span>=3D<span c=
lass=3D"hljs-string">"Nombre completo"</span> <span class=3D"hljs-attr">req=
uired</span>&gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</s=
pan> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"t=
ext"</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-str=
ing">"usuario"</span> <span class=3D"hljs-attr">placeholder</span>=3D<span =
class=3D"hljs-string">"Usuario"</span> <span class=3D"hljs-attr">required</=
span>&gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</s=
pan> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"e=
mail"</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs-st=
ring">"correo"</span> <span class=3D"hljs-attr">placeholder</span>=3D<span =
class=3D"hljs-string">"Correo electr=C3=B3nico"</span> <span class=3D"hljs-=
attr">required</span>&gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">input</s=
pan> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"p=
assword"</span> <span class=3D"hljs-attr">name</span>=3D<span class=3D"hljs=
-string">"contrase=C3=B1a"</span> <span class=3D"hljs-attr">placeholder</sp=
an>=3D<span class=3D"hljs-string">"Contrase=C3=B1a"</span> <span class=3D"h=
ljs-attr">required</span>&gt;</span>
            <span class=3D"hljs-tag">&lt;<span class=3D"hljs-name">button</=
span> <span class=3D"hljs-attr">type</span>=3D<span class=3D"hljs-string">"=
submit"</span>&gt;</span>Registrarse<span class=3D"hljs-tag">&lt;/<span cla=
ss=3D"hljs-name">button</span>&gt;</span>
        <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">form</span>=
&gt;</span>
    <span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">div</span>&gt;<=
/span>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">body</span>&gt;</sp=
an>
<span class=3D"hljs-tag">&lt;/<span class=3D"hljs-name">html</span>&gt;</sp=
an>
</code></div></div></pre><h4>Backend en PHP (Ejemplo simple para <code>auth=
.php</code>)</h4><pre class=3D"!overflow-visible"><div class=3D"contain-inl=
ine-size rounded-md border-[0.5px] border-token-border-medium relative bg-t=
oken-sidebar-surface-primary dark:bg-gray-950"><div class=3D"flex items-cen=
ter text-token-text-secondary px-4 py-2 text-xs font-sans justify-between r=
ounded-t-md h-9 bg-token-sidebar-surface-primary dark:bg-token-main-surface=
-secondary select-none">php</div><div class=3D"sticky top-9 md:top-[5.75rem=
]"><div class=3D"absolute bottom-0 right-2 flex h-9 items-center"><div clas=
s=3D"flex items-center rounded bg-token-sidebar-surface-primary px-2 font-s=
ans text-xs text-token-text-secondary dark:bg-token-main-surface-secondary"=
><span class=3D"" data-state=3D"closed"><button class=3D"flex gap-1 items-c=
enter select-none py-1"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 2=
4" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-sm"><pa=
th fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M7 5C7 3.34315 8.34315 =
2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17=
 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 =
7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20=
 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9=
 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19=
V10C15 9.44772 14.5523 9 14 9H5Z" fill=3D"currentColor"></path></svg>Copiar=
 c=C3=B3digo</button></span></div></div></div><div class=3D"overflow-y-auto=
 p-4" dir=3D"ltr"><code class=3D"!whitespace-pre hljs language-php"><span c=
lass=3D"hljs-meta">&lt;?php</span>
<span class=3D"hljs-comment">// Conexi=C3=B3n a la base de datos</span>
<span class=3D"hljs-variable">$conexion</span> =3D <span class=3D"hljs-keyw=
ord">new</span> <span class=3D"hljs-title function_ invoke__">mysqli</span>=
(<span class=3D"hljs-string">"localhost"</span>, <span class=3D"hljs-string=
">"root"</span>, <span class=3D"hljs-string">""</span>, <span class=3D"hljs=
-string">"Registrate"</span>);


<span class=3D"hljs-comment">// Verificar conexi=C3=B3n</span>
<span class=3D"hljs-keyword">if</span> (<span class=3D"hljs-variable">$cone=
xion</span>-&gt;connect_error) {
    <span class=3D"hljs-keyword">die</span>(<span class=3D"hljs-string">"Er=
ror de conexi=C3=B3n: "</span> . <span class=3D"hljs-variable">$conexion</s=
pan>-&gt;connect_error);
}

<span class=3D"hljs-comment">// Obtener datos del formulario</span>
<span class=3D"hljs-variable">$usuario</span> =3D <span class=3D"hljs-varia=
ble">$_POST</span>[<span class=3D"hljs-string">'usuario'</span>];
<span class=3D"hljs-variable">$contrase=C3=B1a</span> =3D <span class=3D"hl=
js-variable">$_POST</span>[<span class=3D"hljs-string">'contrase=C3=B1a'</s=
pan>];
<span class=3D"hljs-variable">$rol</span> =3D <span class=3D"hljs-variable"=
>$_POST</span>[<span class=3D"hljs-string">'rol'</span>];

<span class=3D"hljs-comment">// Consulta SQL</span>
<span class=3D"hljs-variable">$sql</span> =3D <span class=3D"hljs-string">"=
SELECT * FROM usuarios WHERE usuario =3D '<span class=3D"hljs-subst">$usuar=
io</span>' AND contrase=C3=B1a =3D '<span class=3D"hljs-subst">$contrase</s=
pan>=C3=B1a' AND rol =3D '<span class=3D"hljs-subst">$rol</span>'"</span>;
<span class=3D"hljs-variable">$resultado</span> =3D <span class=3D"hljs-var=
iable">$conexion</span>-&gt;<span class=3D"hljs-title function_ invoke__">q=
uery</span>(<span class=3D"hljs-variable">$sql</span>);

<span class=3D"hljs-keyword">if</span> (<span class=3D"hljs-variable">$resu=
ltado</span>-&gt;num_rows &gt; <span class=3D"hljs-number">0</span>) {
    <span class=3D"hljs-keyword">echo</span> <span class=3D"hljs-string">"I=
nicio de sesi=C3=B3n exitoso. Bienvenido, <span class=3D"hljs-subst">$usuar=
io</span>."</span>;
} <span class=3D"hljs-keyword">else</span> {
    <span class=3D"hljs-keyword">echo</span> <span class=3D"hljs-string">"U=
suario o contrase=C3=B1a incorrectos."</span>;
}
<span class=3D"hljs-meta">?&gt;</span>
</code></div></div></pre><p>Esto deber=C3=ADa cubrir la conexi=C3=B3n entre=
 las p=C3=A1ginas y la base de datos. Si necesitas ayuda con algo espec=C3=
=ADfico, av=C3=ADsame. =F0=9F=98=8A</p></div></div></div></div><div class=
=3D"mb-2 flex gap-3 empty:hidden -ml-2"><div class=3D"items-center justify-=
start rounded-xl p-1 flex"><div class=3D"flex items-center"><span class=3D"=
" data-state=3D"closed"><button class=3D"rounded-lg text-token-text-seconda=
ry hover:bg-token-main-surface-secondary" aria-label=3D"Read aloud" data-te=
stid=3D"voice-play-turn-action-button"><span class=3D"flex h-[30px] w-[30px=
] items-center justify-center"><svg width=3D"24" height=3D"24" viewBox=3D"0=
 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-=
md-heavy"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M11 4.9099=
C11 4.47485 10.4828 4.24734 10.1621 4.54132L6.67572 7.7372C6.49129 7.90626 =
6.25019 8.00005 6 8.00005H4C3.44772 8.00005 3 8.44776 3 9.00005V15C3 15.552=
3 3.44772 16 4 16H6C6.25019 16 6.49129 16.0938 6.67572 16.2629L10.1621 19.4=
588C10.4828 19.7527 11 19.5252 11 19.0902V4.9099ZM8.81069 3.06701C10.4142 1=
.59714 13 2.73463 13 4.9099V19.0902C13 21.2655 10.4142 22.403 8.81069 20.93=
31L5.61102 18H4C2.34315 18 1 16.6569 1 15V9.00005C1 7.34319 2.34315 6.00005=
 4 6.00005H5.61102L8.81069 3.06701ZM20.3166 6.35665C20.8019 6.09313 21.409 =
6.27296 21.6725 6.75833C22.5191 8.3176 22.9996 10.1042 22.9996 12.0001C22.9=
996 13.8507 22.5418 15.5974 21.7323 17.1302C21.4744 17.6185 20.8695 17.8054=
 20.3811 17.5475C19.8927 17.2896 19.7059 16.6846 19.9638 16.1962C20.6249 14=
.9444 20.9996 13.5175 20.9996 12.0001C20.9996 10.4458 20.6064 8.98627 19.91=
49 7.71262C19.6514 7.22726 19.8312 6.62017 20.3166 6.35665ZM15.7994 7.90049=
C16.241 7.5688 16.8679 7.65789 17.1995 8.09947C18.0156 9.18593 18.4996 10.5=
379 18.4996 12.0001C18.4996 13.3127 18.1094 14.5372 17.4385 15.5604C17.1357=
 16.0222 16.5158 16.1511 16.0539 15.8483C15.5921 15.5455 15.4632 14.9255 15=
.766 14.4637C16.2298 13.7564 16.4996 12.9113 16.4996 12.0001C16.4996 10.985=
9 16.1653 10.0526 15.6004 9.30063C15.2687 8.85905 15.3578 8.23218 15.7994 7=
.90049Z" fill=3D"currentColor"></path></svg></span></button></span><span cl=
ass=3D"" data-state=3D"closed"><button class=3D"rounded-lg text-token-text-=
secondary hover:bg-token-main-surface-secondary" aria-label=3D"Copiar" data=
-testid=3D"copy-turn-action-button"><span class=3D"flex h-[30px] w-[30px] i=
tems-center justify-center"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 =
24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md-=
heavy"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M7 5C7 3.3431=
5 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 1=
7H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.3431=
5 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 =
14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9=
C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.=
5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill=3D"currentColor"></path></=
svg></span></button></span><div class=3D"flex"><span class=3D"" data-state=
=3D"closed"><button class=3D"rounded-lg text-token-text-secondary hover:bg-=
token-main-surface-secondary" aria-label=3D"Buena respuesta" data-testid=3D=
"good-response-turn-action-button"><span class=3D"flex h-[30px] w-[30px] it=
ems-center justify-center"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 2=
4 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-md-h=
eavy"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M12.1318 2.503=
89C12.3321 2.15338 12.7235 1.95768 13.124 2.00775L13.5778 2.06447C16.0449 2=
.37286 17.636 4.83353 16.9048 7.20993L16.354 8.99999H17.0722C19.7097 8.9999=
9 21.6253 11.5079 20.9313 14.0525L19.5677 19.0525C19.0931 20.7927 17.5124 2=
2 15.7086 22H6C4.34315 22 3 20.6568 3 19V12C3 10.3431 4.34315 8.99999 6 8.9=
9999H8C8.25952 8.99999 8.49914 8.86094 8.6279 8.63561L12.1318 2.50389ZM10 2=
0H15.7086C16.6105 20 17.4008 19.3964 17.6381 18.5262L19.0018 13.5262C19.348=
8 12.2539 18.391 11 17.0722 11H15C14.6827 11 14.3841 10.8494 14.1956 10.594=
1C14.0071 10.3388 13.9509 10.0092 14.0442 9.70591L14.9932 6.62175C15.3384 5=
.49984 14.6484 4.34036 13.5319 4.08468L10.3644 9.62789C10.0522 10.1742 9.56=
691 10.5859 9 10.8098V19C9 19.5523 9.44772 20 10 20ZM7 11V19C7 19.3506 7.06=
015 19.6872 7.17071 20H6C5.44772 20 5 19.5523 5 19V12C5 11.4477 5.44772 11 =
6 11H7Z" fill=3D"currentColor"></path></svg></span></button></span><span cl=
ass=3D"" data-state=3D"closed"><button class=3D"rounded-lg text-token-text-=
secondary hover:bg-token-main-surface-secondary" aria-label=3D"Respuesta de=
ficiente" data-testid=3D"bad-response-turn-action-button"><span class=3D"fl=
ex h-[30px] w-[30px] items-center justify-center"><svg width=3D"24" height=
=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/2000=
/svg" class=3D"icon-md-heavy"><path fill-rule=3D"evenodd" clip-rule=3D"even=
odd" d=3D"M11.8727 21.4961C11.6725 21.8466 11.2811 22.0423 10.8805 21.9922L=
10.4267 21.9355C7.95958 21.6271 6.36855 19.1665 7.09975 16.7901L7.65054 15H=
6.93226C4.29476 15 2.37923 12.4921 3.0732 9.94753L4.43684 4.94753C4.91145 3=
.20728 6.49209 2 8.29589 2H18.0045C19.6614 2 21.0045 3.34315 21.0045 5V12C2=
1.0045 13.6569 19.6614 15 18.0045 15H16.0045C15.745 15 15.5054 15.1391 15.3=
766 15.3644L11.8727 21.4961ZM14.0045 4H8.29589C7.39399 4 6.60367 4.60364 6.=
36637 5.47376L5.00273 10.4738C4.65574 11.746 5.61351 13 6.93226 13H9.00451C=
9.32185 13 9.62036 13.1506 9.8089 13.4059C9.99743 13.6612 10.0536 13.9908 9=
.96028 14.2941L9.01131 17.3782C8.6661 18.5002 9.35608 19.6596 10.4726 19.91=
53L13.6401 14.3721C13.9523 13.8258 14.4376 13.4141 15.0045 13.1902V5C15.004=
5 4.44772 14.5568 4 14.0045 4ZM17.0045 13V5C17.0045 4.64937 16.9444 4.31278=
 16.8338 4H18.0045C18.5568 4 19.0045 4.44772 19.0045 5V12C19.0045 12.5523 1=
8.5568 13 18.0045 13H17.0045Z" fill=3D"currentColor"></path></svg></span></=
button></span></div><span class=3D"hidden"></span><span class=3D"" data-sta=
te=3D"closed"><button type=3D"button" id=3D"radix-:rae:" aria-haspopup=3D"m=
enu" aria-expanded=3D"false" data-state=3D"closed" class=3D"cursor-pointer =
h-[30px] rounded-md px-1 text-token-text-secondary hover:bg-token-main-surf=
ace-secondary"><div class=3D"flex items-center pb-0"><svg width=3D"24" heig=
ht=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3.org/20=
00/svg" class=3D"icon-md"><path d=3D"M3.06957 10.8763C3.62331 6.43564 7.409=
67 3 12 3C14.2824 3 16.4028 3.85067 18.0118 5.25439V4C18.0118 3.44772 18.45=
95 3 19.0118 3C19.5641 3 20.0118 3.44772 20.0118 4V8C20.0118 8.55228 19.564=
1 9 19.0118 9H15C14.4477 9 14 8.55228 14 8C14 7.44772 14.4477 7 15 7H16.957=
1C15.6757 5.76379 13.9101 5 12 5C8.43108 5 5.48466 7.67174 5.0542 11.1237C4=
.98586 11.6718 4.48619 12.0607 3.93815 11.9923C3.39011 11.924 3.00123 11.42=
43 3.06957 10.8763ZM20.0618 12.0077C20.6099 12.076 20.9988 12.5757 20.9304 =
13.1237C20.3767 17.5644 16.5903 21 12 21C9.72322 21 7.60762 20.1535 5.99999=
 18.7559V20C5.99999 20.5523 5.55228 21 4.99999 21C4.44771 21 3.99999 20.552=
3 3.99999 20V16C3.99999 15.4477 4.44771 15 4.99999 15H8.99999C9.55228 15 9.=
99999 15.4477 9.99999 16C9.99999 16.5523 9.55228 17 8.99999 17H7.04285C8.32=
433 18.2362 10.0899 19 12 19C15.5689 19 18.5153 16.3283 18.9458 12.8763C19.=
0141 12.3282 19.5138 11.9393 20.0618 12.0077Z" fill=3D"currentColor"></path=
></svg><span class=3D"overflow-hidden text-clip whitespace-nowrap text-sm" =
style=3D"opacity: 0; padding-left: 0px; width: 0px; will-change: opacity;">=
4o</span><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none=
" xmlns=3D"http://www.w3.org/2000/svg" class=3D"icon-sm"><path fill-rule=3D=
"evenodd" clip-rule=3D"evenodd" d=3D"M5.29289 9.29289C5.68342 8.90237 6.316=
58 8.90237 6.70711 9.29289L12 14.5858L17.2929 9.29289C17.6834 8.90237 18.31=
66 8.90237 18.7071 9.29289C19.0976 9.68342 19.0976 10.3166 18.7071 10.7071L=
12.7071 16.7071C12.5196 16.8946 12.2652 17 12 17C11.7348 17 11.4804 16.8946=
 11.2929 16.7071L5.29289 10.7071C4.90237 10.3166 4.90237 9.68342 5.29289 9.=
29289Z" fill=3D"currentColor"></path></svg></div></button></span></div></di=
v></div><div class=3D"pr-2 lg:pr-0"></div><div class=3D"mt-3 w-full empty:h=
idden"><div class=3D"text-center"></div></div></div></div></div></div></art=
icle></div></div></div></div></div><div class=3D"md:pt-0 dark:border-white/=
20 md:border-transparent md:dark:border-transparent w-full"><div><div class=
=3D"m-auto text-base px-3 md:px-4 w-full md:px-5 lg:px-4 xl:px-5"><div clas=
s=3D"mx-auto flex flex-1 gap-4 text-base md:gap-5 lg:gap-6 md:max-w-3xl lg:=
max-w-[40rem] xl:max-w-[48rem]"><div class=3D"flex justify-center"></div><f=
orm class=3D"w-full" type=3D"button" aria-haspopup=3D"dialog" aria-expanded=
=3D"false" aria-controls=3D"radix-:r7m:" data-state=3D"closed"><div class=
=3D"relative flex h-full max-w-full flex-1 flex-col"><div class=3D"absolute=
 bottom-full left-0 right-0 z-20"></div><div class=3D"absolute bottom-full =
my-3 z-20"></div><div class=3D"group relative flex w-full items-center"><di=
v id=3D"composer-background" class=3D"flex w-full cursor-text flex-col roun=
ded-3xl px-2.5 py-1 transition-colors contain-inline-size bg-[#f4f4f4] dark=
:bg-token-main-surface-secondary"><div class=3D"flex min-h-[44px] items-sta=
rt pl-2"><div class=3D"min-w-0 max-w-full flex-1"><div class=3D"_prosemirro=
r-parent_15ceg_1 text-token-text-primary max-h-[25dvh] max-h-52 overflow-au=
to default-browser"><textarea class=3D"block h-10 w-full resize-none border=
-0 bg-transparent px-0 py-2 text-token-text-primary placeholder:text-token-=
text-secondary" placeholder=3D"Env=C3=ADa un mensaje a ChatGPT" style=3D"di=
splay: none;"></textarea><div contenteditable=3D"true" translate=3D"no" cla=
ss=3D"ProseMirror" id=3D"prompt-textarea" spellcheck=3D"false" data-ms-edit=
or=3D"true"><p data-placeholder=3D"Env=C3=ADa un mensaje a ChatGPT" class=
=3D"placeholder"><br class=3D"ProseMirror-trailingBreak"></p></div></div></=
div><div class=3D"w-[32px] pt-1"></div></div><div class=3D"flex h-[44px] it=
ems-center justify-between"><div class=3D"flex gap-x-1"><div class=3D"relat=
ive"><div class=3D"relative"><div class=3D"flex flex-col"><input multiple=
=3D"" tabindex=3D"-1" class=3D"hidden" type=3D"file" style=3D"display: none=
;"><span class=3D"hidden"></span><button type=3D"button" id=3D"radix-:r7n:"=
 aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed" class=
=3D"text-token-text-primary border border-transparent inline-flex items-cen=
ter justify-center gap-1 rounded-lg text-sm dark:transparent dark:bg-transp=
arent leading-none outline-none cursor-pointer hover:bg-token-main-surface-=
secondary dark:hover:bg-token-main-surface-secondary focus-visible:bg-token=
-main-surface-secondary radix-state-active:text-token-text-secondary radix-=
disabled:cursor-auto radix-disabled:bg-transparent radix-disabled:text-toke=
n-text-tertiary dark:radix-disabled:bg-transparent m-0 h-0 w-0 border-none =
bg-transparent p-0"></button><div class=3D"h-8"><button disabled=3D"" aria-=
disabled=3D"true" aria-label=3D"Adjuntar archivos no est=C3=A1 disponible" =
data-state=3D"closed" class=3D"flex items-center justify-center h-8 w-8 rou=
nded-lg rounded-bl-xl text-token-text-primary dark:text-white focus-visible=
:outline-black dark:focus-visible:outline-white opacity-30"><svg width=3D"2=
4" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"none" xmlns=3D"http://www.w3=
.org/2000/svg"><path fill-rule=3D"evenodd" clip-rule=3D"evenodd" d=3D"M9 7C=
9 4.23858 11.2386 2 14 2C16.7614 2 19 4.23858 19 7V15C19 18.866 15.866 22 1=
2 22C8.13401 22 5 18.866 5 15V9C5 8.44772 5.44772 8 6 8C6.55228 8 7 8.44772=
 7 9V15C7 17.7614 9.23858 20 12 20C14.7614 20 17 17.7614 17 15V7C17 5.34315=
 15.6569 4 14 4C12.3431 4 11 5.34315 11 7V15C11 15.5523 11.4477 16 12 16C12=
.5523 16 13 15.5523 13 15V9C13 8.44772 13.4477 8 14 8C14.5523 8 15 8.44772 =
15 9V15C15 16.6569 13.6569 18 12 18C10.3431 18 9 16.6569 9 15V7Z" fill=3D"c=
urrentColor"></path></svg></button></div><div></div></div></div></div></div=
><div class=3D"min-w-8"><div class=3D"relative h-8 w-8"><span class=3D"" da=
ta-state=3D"closed"><div class=3D"flex h-full w-full items-center justify-c=
enter rounded-full" style=3D"background: linear-gradient(rgb(0, 0, 0) 0%, r=
gb(0, 0, 0) 100%); will-change: auto;"><button data-testid=3D"composer-spee=
ch-button" aria-label=3D"Iniciar el modo de voz" class=3D"relative flex h-8=
 w-8 items-center justify-center rounded-full text-white transition-colors =
hover:opacity-70 focus-visible:outline-none focus-visible:outline-black dis=
abled:text-[#f4f4f4] disabled:opacity-30 dark:text-black"><div class=3D"rel=
ative h-full w-full"><div class=3D"absolute inset-0 flex items-center justi=
fy-center"><svg width=3D"24" height=3D"24" viewBox=3D"0 0 24 24" fill=3D"no=
ne" xmlns=3D"http://www.w3.org/2000/svg"><path d=3D"M9.5 4C8.67157 4 8 4.67=
157 8 5.5V18.5C8 19.3284 8.67157 20 9.5 20C10.3284 20 11 19.3284 11 18.5V5.=
5C11 4.67157 10.3284 4 9.5 4Z" fill=3D"currentColor"></path><path d=3D"M13 =
8.5C13 7.67157 13.6716 7 14.5 7C15.3284 7 16 7.67157 16 8.5V15.5C16 16.3284=
 15.3284 17 14.5 17C13.6716 17 13 16.3284 13 15.5V8.5Z" fill=3D"currentColo=
r"></path><path d=3D"M4.5 9C3.67157 9 3 9.67157 3 10.5V13.5C3 14.3284 3.671=
57 15 4.5 15C5.32843 15 6 14.3284 6 13.5V10.5C6 9.67157 5.32843 9 4.5 9Z" f=
ill=3D"currentColor"></path><path d=3D"M19.5 9C18.6716 9 18 9.67157 18 10.5=
V13.5C18 14.3284 18.6716 15 19.5 15C20.3284 15 21 14.3284 21 13.5V10.5C21 9=
.67157 20.3284 9 19.5 9Z" fill=3D"currentColor"></path></svg></div></div></=
button></div></span></div></div></div></div></div></div></form></div></div>=
<div class=3D"relative w-full px-2 py-2 text-center text-xs text-token-text=
-secondary empty:hidden md:px-[60px]"><div class=3D"min-h-4"><div>ChatGPT p=
uede cometer errores. Comprueba la informaci=C3=B3n importante.</div></div>=
</div></div></div></div><div class=3D"group absolute bottom-2 end-2 z-20 fl=
ex flex-col gap-1 md:flex lg:bottom-3 lg:end-3"><button class=3D"flex h-6 w=
-6 items-center justify-center rounded-full border border-token-border-ligh=
t text-xs text-token-text-secondary" type=3D"button" id=3D"radix-:R15qaaklj=
5:" aria-haspopup=3D"menu" aria-expanded=3D"false" data-state=3D"closed" da=
ta-testid=3D"undefined-button">?</button></div></main></div><div class=3D"z=
-[1] flex-shrink-0 overflow-x-hidden bg-token-sidebar-surface-primary max-m=
d:!w-0" style=3D"width: 0px;"><div class=3D"absolute h-full w-[400px] point=
er-events-none"><div class=3D"flex h-full flex-col"></div></div></div></div=
><div aria-live=3D"assertive" aria-atomic=3D"true" class=3D"sr-only"></div>=
<div aria-live=3D"polite" aria-atomic=3D"true" class=3D"sr-only"></div><aud=
io class=3D"fixed bottom-0 left-0 hidden h-0 w-0" autoplay=3D"" crossorigin=
=3D"anonymous"></audio><span class=3D"pointer-events-none fixed inset-0 z-[=
60] mx-auto my-2 flex max-w-[560px] flex-col items-stretch justify-start md=
:pb-5"></span><!--$--><!--/$--><iframe height=3D"1" width=3D"1" style=3D"po=
sition: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"><=
/iframe></body><editor-card style=3D"position:absolute;top:0px;left:0px;z-i=
ndex:auto;display: block !important"><div dir=3D"ltr" style=3D"all: initial=
;"><div role=3D"status" aria-live=3D"polite" aria-label=3D"Hay &quot;&quot;=
 un problema de correcci=C3=B3n detectado en esta l=C3=ADnea" style=3D"widt=
h: 0px; height: 0px; color: transparent; background: none; border: none; ou=
tline: none; overflow: hidden; pointer-events: none;"></div><div style=3D"c=
olor-scheme: initial; forced-color-adjust: initial; mask: initial; math-dep=
th: initial; position: absolute; position-anchor: initial; text-size-adjust=
: initial; appearance: initial; color: initial; font: initial; font-palette=
: initial; font-synthesis: initial; position-area: initial; text-orientatio=
n: initial; text-rendering: initial; text-spacing-trim: initial; -webkit-fo=
nt-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: i=
nitial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial=
; accent-color: initial; place-content: initial; place-items: initial; plac=
e-self: initial; alignment-baseline: initial; anchor-name: initial; anchor-=
scope: initial; animation-composition: initial; animation: initial; app-reg=
ion: initial; aspect-ratio: initial; backdrop-filter: initial; backface-vis=
ibility: initial; background: initial; background-blend-mode: initial; base=
line-shift: initial; baseline-source: initial; block-size: initial; border-=
block: initial; border: initial; border-radius: initial; border-collapse: i=
nitial; border-end-end-radius: initial; border-end-start-radius: initial; b=
order-inline: initial; border-start-end-radius: initial; border-start-start=
-radius: initial; inset: initial; box-decoration-break: initial; box-shadow=
: initial; box-sizing: initial; break-after: initial; break-before: initial=
; break-inside: initial; buffered-rendering: initial; caption-side: initial=
; caret-color: initial; clear: initial; clip: initial; clip-path: initial; =
clip-rule: initial; color-interpolation: initial; color-interpolation-filte=
rs: initial; color-rendering: initial; columns: initial; column-fill: initi=
al; gap: initial; column-rule: initial; column-span: initial; contain: init=
ial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial=
; contain-intrinsic-inline-size: initial; container: initial; content: init=
ial; content-visibility: initial; counter-increment: initial; counter-reset=
: initial; counter-set: initial; cursor: initial; cx: initial; cy: initial;=
 d: initial; display: initial; dominant-baseline: initial; empty-cells: ini=
tial; field-sizing: initial; fill: initial; fill-opacity: initial; fill-rul=
e: initial; filter: initial; flex: initial; flex-flow: initial; float: init=
ial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area=
: initial; height: initial; hyphenate-character: initial; hyphenate-limit-c=
hars: initial; hyphens: initial; image-orientation: initial; image-renderin=
g: initial; initial-letter: initial; inline-size: initial; inset-block: ini=
tial; inset-inline: initial; interpolate-size: initial; isolation: initial;=
 letter-spacing: initial; lighting-color: initial; line-break: initial; lis=
t-style: initial; margin-block: initial; margin: initial; margin-inline: in=
itial; marker: initial; mask-type: initial; math-shift: initial; math-style=
: initial; max-block-size: initial; max-height: initial; max-inline-size: i=
nitial; max-width: initial; min-block-size: initial; min-height: initial; m=
in-inline-size: initial; min-width: initial; mix-blend-mode: initial; objec=
t-fit: initial; object-position: initial; object-view-box: initial; offset:=
 initial; opacity: initial; order: initial; orphans: initial; outline: init=
ial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margi=
n: initial; overflow-wrap: initial; overflow: initial; overlay: initial; ov=
erscroll-behavior-block: initial; overscroll-behavior-inline: initial; over=
scroll-behavior: initial; padding-block: initial; padding: initial; padding=
-inline: initial; page: initial; page-orientation: initial; paint-order: in=
itial; perspective: initial; perspective-origin: initial; pointer-events: i=
nitial; position-try: initial; position-visibility: initial; quotes: initia=
l; r: initial; resize: initial; rotate: initial; ruby-align: initial; ruby-=
position: initial; rx: initial; ry: initial; scale: initial; scroll-behavio=
r: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-ma=
rgin-inline: initial; scroll-padding-block: initial; scroll-padding: initia=
l; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-=
stop: initial; scroll-snap-type: initial; scroll-timeline: initial; scrollb=
ar-color: initial; scrollbar-gutter: initial; scrollbar-width: initial; sha=
pe-image-threshold: initial; shape-margin: initial; shape-outside: initial;=
 shape-rendering: initial; size: initial; speak: initial; stop-color: initi=
al; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stro=
ke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; =
stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial;=
 tab-size: initial; table-layout: initial; text-align: initial; text-align-=
last: initial; text-anchor: initial; text-combine-upright: initial; text-de=
coration: initial; text-decoration-skip-ink: initial; text-emphasis: initia=
l; text-emphasis-position: initial; text-indent: initial; text-overflow: in=
itial; text-shadow: initial; text-transform: initial; text-underline-offset=
: initial; text-underline-position: initial; text-wrap: initial; timeline-s=
cope: initial; touch-action: initial; transform: initial; transform-box: in=
itial; transform-origin: initial; transform-style: initial; transition: ini=
tial; translate: initial; user-select: initial; vector-effect: initial; ver=
tical-align: initial; view-timeline: initial; view-transition-class: initia=
l; view-transition-name: initial; visibility: initial; border-spacing: init=
ial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -we=
bkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal=
-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -w=
ebkit-box-reflect: initial; -webkit-line-break: initial; -webkit-line-clamp=
: initial; -webkit-mask-box-image: initial; -webkit-print-color-adjust: ini=
tial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webki=
t-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text=
-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-=
text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: in=
itial; white-space-collapse: initial; widows: initial; width: initial; will=
-change: initial; word-break: initial; word-spacing: initial; x: initial; y=
: initial; z-index: 2147483647;"><link rel=3D"stylesheet" href=3D"chrome-ex=
tension://gpaiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.css"><div sty=
le=3D"all: initial;"><template shadowmode=3D"open"></template></div></div><=
div style=3D"color-scheme: initial; forced-color-adjust: initial; mask: ini=
tial; math-depth: initial; position: absolute; position-anchor: initial; te=
xt-size-adjust: initial; appearance: initial; color: initial; font: initial=
; font-palette: initial; font-synthesis: initial; position-area: initial; t=
ext-orientation: initial; text-rendering: initial; text-spacing-trim: initi=
al; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-=
orientation: initial; -webkit-writing-mode: initial; writing-mode: initial;=
 zoom: initial; accent-color: initial; place-content: initial; place-items:=
 initial; place-self: initial; alignment-baseline: initial; anchor-name: in=
itial; anchor-scope: initial; animation-composition: initial; animation: in=
itial; app-region: initial; aspect-ratio: initial; backdrop-filter: initial=
; backface-visibility: initial; background: initial; background-blend-mode:=
 initial; baseline-shift: initial; baseline-source: initial; block-size: in=
itial; border-block: initial; border: initial; border-radius: initial; bord=
er-collapse: initial; border-end-end-radius: initial; border-end-start-radi=
us: initial; border-inline: initial; border-start-end-radius: initial; bord=
er-start-start-radius: initial; inset: initial; box-decoration-break: initi=
al; box-shadow: initial; box-sizing: initial; break-after: initial; break-b=
efore: initial; break-inside: initial; buffered-rendering: initial; caption=
-side: initial; caret-color: initial; clear: initial; clip: initial; clip-p=
ath: initial; clip-rule: initial; color-interpolation: initial; color-inter=
polation-filters: initial; color-rendering: initial; columns: initial; colu=
mn-fill: initial; gap: initial; column-rule: initial; column-span: initial;=
 contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic=
-size: initial; contain-intrinsic-inline-size: initial; container: initial;=
 content: initial; content-visibility: initial; counter-increment: initial;=
 counter-reset: initial; counter-set: initial; cursor: initial; cx: initial=
; cy: initial; d: initial; display: initial; dominant-baseline: initial; em=
pty-cells: initial; field-sizing: initial; fill: initial; fill-opacity: ini=
tial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initia=
l; float: initial; flood-color: initial; flood-opacity: initial; grid: init=
ial; grid-area: initial; height: initial; hyphenate-character: initial; hyp=
henate-limit-chars: initial; hyphens: initial; image-orientation: initial; =
image-rendering: initial; initial-letter: initial; inline-size: initial; in=
set-block: initial; inset-inline: initial; interpolate-size: initial; isola=
tion: initial; letter-spacing: initial; lighting-color: initial; line-break=
: initial; list-style: initial; margin-block: initial; margin: initial; mar=
gin-inline: initial; marker: initial; mask-type: initial; math-shift: initi=
al; math-style: initial; max-block-size: initial; max-height: initial; max-=
inline-size: initial; max-width: initial; min-block-size: initial; min-heig=
ht: initial; min-inline-size: initial; min-width: initial; mix-blend-mode: =
initial; object-fit: initial; object-position: initial; object-view-box: in=
itial; offset: initial; opacity: initial; order: initial; orphans: initial;=
 outline: initial; outline-offset: initial; overflow-anchor: initial; overf=
low-clip-margin: initial; overflow-wrap: initial; overflow: initial; overla=
y: initial; overscroll-behavior-block: initial; overscroll-behavior-inline:=
 initial; overscroll-behavior: initial; padding-block: initial; padding: in=
itial; padding-inline: initial; page: initial; page-orientation: initial; p=
aint-order: initial; perspective: initial; perspective-origin: initial; poi=
nter-events: initial; position-try: initial; position-visibility: initial; =
quotes: initial; r: initial; resize: initial; rotate: initial; ruby-align: =
initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; =
scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: init=
ial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-p=
adding: initial; scroll-padding-inline: initial; scroll-snap-align: initial=
; scroll-snap-stop: initial; scroll-snap-type: initial; scroll-timeline: in=
itial; scrollbar-color: initial; scrollbar-gutter: initial; scrollbar-width=
: initial; shape-image-threshold: initial; shape-margin: initial; shape-out=
side: initial; shape-rendering: initial; size: initial; speak: initial; sto=
p-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray:=
 initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linej=
oin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-w=
idth: initial; tab-size: initial; table-layout: initial; text-align: initia=
l; text-align-last: initial; text-anchor: initial; text-combine-upright: in=
itial; text-decoration: initial; text-decoration-skip-ink: initial; text-em=
phasis: initial; text-emphasis-position: initial; text-indent: initial; tex=
t-overflow: initial; text-shadow: initial; text-transform: initial; text-un=
derline-offset: initial; text-underline-position: initial; text-wrap: initi=
al; timeline-scope: initial; touch-action: initial; transform: initial; tra=
nsform-box: initial; transform-origin: initial; transform-style: initial; t=
ransition: initial; translate: initial; user-select: initial; vector-effect=
: initial; vertical-align: initial; view-timeline: initial; view-transition=
-class: initial; view-transition-name: initial; visibility: initial; border=
-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break=
: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webk=
it-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pac=
k: initial; -webkit-box-reflect: initial; -webkit-line-break: initial; -web=
kit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-print-col=
or-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: i=
nitial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial=
; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: ini=
tial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit=
-user-drag: initial; white-space-collapse: initial; widows: initial; width:=
 initial; will-change: initial; word-break: initial; word-spacing: initial;=
 x: initial; y: initial; z-index: 2147483647;"><link rel=3D"stylesheet" hre=
f=3D"chrome-extension://gpaiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons=
.css"></div><div style=3D"color-scheme: initial; forced-color-adjust: initi=
al; mask: initial; math-depth: initial; position: absolute; position-anchor=
: initial; text-size-adjust: initial; appearance: initial; color: initial; =
font: initial; font-palette: initial; font-synthesis: initial; position-are=
a: initial; text-orientation: initial; text-rendering: initial; text-spacin=
g-trim: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; =
-webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-m=
ode: initial; zoom: initial; accent-color: initial; place-content: initial;=
 place-items: initial; place-self: initial; alignment-baseline: initial; an=
chor-name: initial; anchor-scope: initial; animation-composition: initial; =
animation: initial; app-region: initial; aspect-ratio: initial; backdrop-fi=
lter: initial; backface-visibility: initial; background: initial; backgroun=
d-blend-mode: initial; baseline-shift: initial; baseline-source: initial; b=
lock-size: initial; border-block: initial; border: initial; border-radius: =
initial; border-collapse: initial; border-end-end-radius: initial; border-e=
nd-start-radius: initial; border-inline: initial; border-start-end-radius: =
initial; border-start-start-radius: initial; inset: initial; box-decoration=
-break: initial; box-shadow: initial; box-sizing: initial; break-after: ini=
tial; break-before: initial; break-inside: initial; buffered-rendering: ini=
tial; caption-side: initial; caret-color: initial; clear: initial; clip: in=
itial; clip-path: initial; clip-rule: initial; color-interpolation: initial=
; color-interpolation-filters: initial; color-rendering: initial; columns: =
initial; column-fill: initial; gap: initial; column-rule: initial; column-s=
pan: initial; contain: initial; contain-intrinsic-block-size: initial; cont=
ain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; contai=
ner: initial; content: initial; content-visibility: initial; counter-increm=
ent: initial; counter-reset: initial; counter-set: initial; cursor: initial=
; cx: initial; cy: initial; d: initial; display: initial; dominant-baseline=
: initial; empty-cells: initial; field-sizing: initial; fill: initial; fill=
-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex=
-flow: initial; float: initial; flood-color: initial; flood-opacity: initia=
l; grid: initial; grid-area: initial; height: initial; hyphenate-character:=
 initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientati=
on: initial; image-rendering: initial; initial-letter: initial; inline-size=
: initial; inset-block: initial; inset-inline: initial; interpolate-size: i=
nitial; isolation: initial; letter-spacing: initial; lighting-color: initia=
l; line-break: initial; list-style: initial; margin-block: initial; margin:=
 initial; margin-inline: initial; marker: initial; mask-type: initial; math=
-shift: initial; math-style: initial; max-block-size: initial; max-height: =
initial; max-inline-size: initial; max-width: initial; min-block-size: init=
ial; min-height: initial; min-inline-size: initial; min-width: initial; mix=
-blend-mode: initial; object-fit: initial; object-position: initial; object=
-view-box: initial; offset: initial; opacity: initial; order: initial; orph=
ans: initial; outline: initial; outline-offset: initial; overflow-anchor: i=
nitial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: in=
itial; overlay: initial; overscroll-behavior-block: initial; overscroll-beh=
avior-inline: initial; overscroll-behavior: initial; padding-block: initial=
; padding: initial; padding-inline: initial; page: initial; page-orientatio=
n: initial; paint-order: initial; perspective: initial; perspective-origin:=
 initial; pointer-events: initial; position-try: initial; position-visibili=
ty: initial; quotes: initial; r: initial; resize: initial; rotate: initial;=
 ruby-align: initial; ruby-position: initial; rx: initial; ry: initial; sca=
le: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll=
-margin: initial; scroll-margin-inline: initial; scroll-padding-block: init=
ial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-a=
lign: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scroll=
-timeline: initial; scrollbar-color: initial; scrollbar-gutter: initial; sc=
rollbar-width: initial; shape-image-threshold: initial; shape-margin: initi=
al; shape-outside: initial; shape-rendering: initial; size: initial; speak:=
 initial; stop-color: initial; stop-opacity: initial; stroke: initial; stro=
ke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial;=
 stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: init=
ial; stroke-width: initial; tab-size: initial; table-layout: initial; text-=
align: initial; text-align-last: initial; text-anchor: initial; text-combin=
e-upright: initial; text-decoration: initial; text-decoration-skip-ink: ini=
tial; text-emphasis: initial; text-emphasis-position: initial; text-indent:=
 initial; text-overflow: initial; text-shadow: initial; text-transform: ini=
tial; text-underline-offset: initial; text-underline-position: initial; tex=
t-wrap: initial; timeline-scope: initial; touch-action: initial; transform:=
 initial; transform-box: initial; transform-origin: initial; transform-styl=
e: initial; transition: initial; translate: initial; user-select: initial; =
vector-effect: initial; vertical-align: initial; view-timeline: initial; vi=
ew-transition-class: initial; view-transition-name: initial; visibility: in=
itial; border-spacing: initial; -webkit-box-align: initial; -webkit-box-dec=
oration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: i=
nitial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -w=
ebkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-line-break: =
initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -web=
kit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-rub=
y-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-com=
bine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fi=
ll-color: initial; -webkit-text-security: initial; -webkit-text-stroke: ini=
tial; -webkit-user-drag: initial; white-space-collapse: initial; widows: in=
itial; width: initial; will-change: initial; word-break: initial; word-spac=
ing: initial; x: initial; y: initial; z-index: 2147483647;"><link rel=3D"st=
ylesheet" href=3D"chrome-extension://gpaiobkfhnonedkhhfjpmhdalgeoebfa/fonts=
/fabric-icons.css"></div><div style=3D"color-scheme: initial; forced-color-=
adjust: initial; mask: initial; math-depth: initial; position: absolute; po=
sition-anchor: initial; text-size-adjust: initial; appearance: initial; col=
or: initial; font: initial; font-palette: initial; font-synthesis: initial;=
 position-area: initial; text-orientation: initial; text-rendering: initial=
; text-spacing-trim: initial; -webkit-font-smoothing: initial; -webkit-loca=
le: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initi=
al; writing-mode: initial; zoom: initial; accent-color: initial; place-cont=
ent: initial; place-items: initial; place-self: initial; alignment-baseline=
: initial; anchor-name: initial; anchor-scope: initial; animation-compositi=
on: initial; animation: initial; app-region: initial; aspect-ratio: initial=
; backdrop-filter: initial; backface-visibility: initial; background: initi=
al; background-blend-mode: initial; baseline-shift: initial; baseline-sourc=
e: initial; block-size: initial; border-block: initial; border: initial; bo=
rder-radius: initial; border-collapse: initial; border-end-end-radius: init=
ial; border-end-start-radius: initial; border-inline: initial; border-start=
-end-radius: initial; border-start-start-radius: initial; inset: initial; b=
ox-decoration-break: initial; box-shadow: initial; box-sizing: initial; bre=
ak-after: initial; break-before: initial; break-inside: initial; buffered-r=
endering: initial; caption-side: initial; caret-color: initial; clear: init=
ial; clip: initial; clip-path: initial; clip-rule: initial; color-interpola=
tion: initial; color-interpolation-filters: initial; color-rendering: initi=
al; columns: initial; column-fill: initial; gap: initial; column-rule: init=
ial; column-span: initial; contain: initial; contain-intrinsic-block-size: =
initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: in=
itial; container: initial; content: initial; content-visibility: initial; c=
ounter-increment: initial; counter-reset: initial; counter-set: initial; cu=
rsor: initial; cx: initial; cy: initial; d: initial; display: initial; domi=
nant-baseline: initial; empty-cells: initial; field-sizing: initial; fill: =
initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: =
initial; flex-flow: initial; float: initial; flood-color: initial; flood-op=
acity: initial; grid: initial; grid-area: initial; height: initial; hyphena=
te-character: initial; hyphenate-limit-chars: initial; hyphens: initial; im=
age-orientation: initial; image-rendering: initial; initial-letter: initial=
; inline-size: initial; inset-block: initial; inset-inline: initial; interp=
olate-size: initial; isolation: initial; letter-spacing: initial; lighting-=
color: initial; line-break: initial; list-style: initial; margin-block: ini=
tial; margin: initial; margin-inline: initial; marker: initial; mask-type: =
initial; math-shift: initial; math-style: initial; max-block-size: initial;=
 max-height: initial; max-inline-size: initial; max-width: initial; min-blo=
ck-size: initial; min-height: initial; min-inline-size: initial; min-width:=
 initial; mix-blend-mode: initial; object-fit: initial; object-position: in=
itial; object-view-box: initial; offset: initial; opacity: initial; order: =
initial; orphans: initial; outline: initial; outline-offset: initial; overf=
low-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial;=
 overflow: initial; overlay: initial; overscroll-behavior-block: initial; o=
verscroll-behavior-inline: initial; overscroll-behavior: initial; padding-b=
lock: initial; padding: initial; padding-inline: initial; page: initial; pa=
ge-orientation: initial; paint-order: initial; perspective: initial; perspe=
ctive-origin: initial; pointer-events: initial; position-try: initial; posi=
tion-visibility: initial; quotes: initial; r: initial; resize: initial; rot=
ate: initial; ruby-align: initial; ruby-position: initial; rx: initial; ry:=
 initial; scale: initial; scroll-behavior: initial; scroll-margin-block: in=
itial; scroll-margin: initial; scroll-margin-inline: initial; scroll-paddin=
g-block: initial; scroll-padding: initial; scroll-padding-inline: initial; =
scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: in=
itial; scroll-timeline: initial; scrollbar-color: initial; scrollbar-gutter=
: initial; scrollbar-width: initial; shape-image-threshold: initial; shape-=
margin: initial; shape-outside: initial; shape-rendering: initial; size: in=
itial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: =
initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-line=
cap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-=
opacity: initial; stroke-width: initial; tab-size: initial; table-layout: i=
nitial; text-align: initial; text-align-last: initial; text-anchor: initial=
; text-combine-upright: initial; text-decoration: initial; text-decoration-=
skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial;=
 text-indent: initial; text-overflow: initial; text-shadow: initial; text-t=
ransform: initial; text-underline-offset: initial; text-underline-position:=
 initial; text-wrap: initial; timeline-scope: initial; touch-action: initia=
l; transform: initial; transform-box: initial; transform-origin: initial; t=
ransform-style: initial; transition: initial; translate: initial; user-sele=
ct: initial; vector-effect: initial; vertical-align: initial; view-timeline=
: initial; view-transition-class: initial; view-transition-name: initial; v=
isibility: initial; border-spacing: initial; -webkit-box-align: initial; -w=
ebkit-box-decoration-break: initial; -webkit-box-direction: initial; -webki=
t-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient=
: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit=
-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: =
initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial=
; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -we=
bkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -w=
ebkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-tex=
t-stroke: initial; -webkit-user-drag: initial; white-space-collapse: initia=
l; widows: initial; width: initial; will-change: initial; word-break: initi=
al; word-spacing: initial; x: initial; y: initial; z-index: 2147483647;"><l=
ink rel=3D"stylesheet" href=3D"chrome-extension://gpaiobkfhnonedkhhfjpmhdal=
geoebfa/fonts/fabric-icons.css"></div></div></editor-card></html>
------Daniela Mahecha----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: cid:css-dab92b5b-4317-47b2-8f61-f6e914c37a3b@mhtml.blink

@charset "utf-8";

@keyframes editorbx-css-0 {=20
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@keyframes editorbx-css-1 {=20
  0% { opacity: 1; }
  100% { opacity: 0; visibility: hidden; }
}

@keyframes editorbx-css-2 {=20
  0% { transform: translate3d(-10px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-3 {=20
  0% { transform: translate3d(-20px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-4 {=20
  0% { transform: translate3d(-40px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-5 {=20
  0% { transform: translate3d(-400px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-6 {=20
  0% { transform: translate3d(10px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-7 {=20
  0% { transform: translate3d(20px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-8 {=20
  0% { transform: translate3d(40px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-9 {=20
  0% { transform: translate3d(400px, 0px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-10 {=20
  0% { transform: translate3d(0px, 10px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-11 {=20
  0% { transform: translate3d(0px, 20px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-12 {=20
  0% { transform: translate3d(0px, -10px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-13 {=20
  0% { transform: translate3d(0px, -20px, 0px); pointer-events: none; }
  100% { transform: translate3d(0px, 0px, 0px); pointer-events: auto; }
}

@keyframes editorbx-css-14 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(10px, 0px, 0px); }
}

@keyframes editorbx-css-15 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(20px, 0px, 0px); }
}

@keyframes editorbx-css-16 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(40px, 0px, 0px); }
}

@keyframes editorbx-css-17 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(400px, 0px, 0px); }
}

@keyframes editorbx-css-18 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(-10px, 0px, 0px); }
}

@keyframes editorbx-css-19 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(-20px, 0px, 0px); }
}

@keyframes editorbx-css-20 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(-40px, 0px, 0px); }
}

@keyframes editorbx-css-21 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(-400px, 0px, 0px); }
}

@keyframes editorbx-css-22 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(0px, -10px, 0px); }
}

@keyframes editorbx-css-23 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(0px, -20px, 0px); }
}

@keyframes editorbx-css-24 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(0px, 10px, 0px); }
}

@keyframes editorbx-css-25 {=20
  0% { transform: translate3d(0px, 0px, 0px); }
  100% { transform: translate3d(0px, 20px, 0px); }
}

@keyframes editorbx-css-26 {=20
  0% { transform: scale3d(0.98, 0.98, 1); }
  100% { transform: scale3d(1, 1, 1); }
}

@keyframes editorbx-css-27 {=20
  0% { transform: scale3d(1, 1, 1); }
  100% { transform: scale3d(0.98, 0.98, 1); }
}

@keyframes editorbx-css-28 {=20
  0% { transform: scale3d(1.03, 1.03, 1); }
  100% { transform: scale3d(1, 1, 1); }
}

@keyframes editorbx-css-29 {=20
  0% { transform: scale3d(1, 1, 1); }
  100% { transform: scale3d(1.03, 1.03, 1); }
}

@keyframes editorbx-css-30 {=20
  0% { transform: rotateZ(0deg); }
  100% { transform: rotateZ(90deg); }
}

@keyframes editorbx-css-31 {=20
  0% { transform: rotateZ(0deg); }
  100% { transform: rotateZ(-90deg); }
}

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-light.woff2") format("woff2"), url("https://res-1.cdn.office=
.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/leel=
awadeeui-light.woff") format("woff"); font-weight: 100; font-style: normal;=
 font-display: swap; }

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.of=
fice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/=
leelawadeeui-semilight.woff") format("woff"); font-weight: 300; font-style:=
 normal; font-display: swap; }

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-regular.woff2") format("woff2"), url("https://res-1.cdn.offi=
ce.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/le=
elawadeeui-regular.woff") format("woff"); font-weight: 400; font-style: nor=
mal; font-display: swap; }

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.off=
ice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/l=
eelawadeeui-semibold.woff") format("woff"); font-weight: 600; font-style: n=
ormal; font-display: swap; }

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/leela=
wadeeui-bold.woff") format("woff"); font-weight: 700; font-style: normal; f=
ont-display: swap; }

@font-face { font-family: "Segoe UI Web (Arabic)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arab=
ic/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.office.net=
/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arabic/segoeui-lig=
ht.woff") format("woff"); font-weight: 100; font-style: normal; font-displa=
y: swap; }

@font-face { font-family: "Segoe UI Web (Arabic)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arab=
ic/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.office=
.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arabic/segoeui=
-semilight.woff") format("woff"); font-weight: 300; font-style: normal; fon=
t-display: swap; }

@font-face { font-family: "Segoe UI Web (Arabic)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arab=
ic/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.office.n=
et/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arabic/segoeui-r=
egular.woff") format("woff"); font-weight: 400; font-style: normal; font-di=
splay: swap; }

@font-face { font-family: "Segoe UI Web (Arabic)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arab=
ic/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arabic/segoeui-=
semibold.woff") format("woff"); font-weight: 600; font-style: normal; font-=
display: swap; }

@font-face { font-family: "Segoe UI Web (Arabic)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arab=
ic/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.net/=
files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-arabic/segoeui-bold=
.woff") format("woff"); font-weight: 700; font-style: normal; font-display:=
 swap; }

@font-face { font-family: "Segoe UI Web (Cyrillic)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cy=
rillic/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.office=
.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cyrillic/segoe=
ui-light.woff") format("woff"); font-weight: 100; font-style: normal; font-=
display: swap; }

@font-face { font-family: "Segoe UI Web (Cyrillic)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cy=
rillic/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.of=
fice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cyrillic/s=
egoeui-semilight.woff") format("woff"); font-weight: 300; font-style: norma=
l; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Cyrillic)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cy=
rillic/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.offi=
ce.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cyrillic/seg=
oeui-regular.woff") format("woff"); font-weight: 400; font-style: normal; f=
ont-display: swap; }

@font-face { font-family: "Segoe UI Web (Cyrillic)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cy=
rillic/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.off=
ice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cyrillic/se=
goeui-semibold.woff") format("woff"); font-weight: 600; font-style: normal;=
 font-display: swap; }

@font-face { font-family: "Segoe UI Web (Cyrillic)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cy=
rillic/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-cyrillic/segoeu=
i-bold.woff") format("woff"); font-weight: 700; font-style: normal; font-di=
splay: swap; }

@font-face { font-family: "Segoe UI Web (East European)"; src: url("https:/=
/res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoe=
ui-easteuropean/segoeui-light.woff2") format("woff2"), url("https://res-1.c=
dn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-easte=
uropean/segoeui-light.woff") format("woff"); font-weight: 100; font-style: =
normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (East European)"; src: url("https:/=
/res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoe=
ui-easteuropean/segoeui-semilight.woff2") format("woff2"), url("https://res=
-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-e=
asteuropean/segoeui-semilight.woff") format("woff"); font-weight: 300; font=
-style: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (East European)"; src: url("https:/=
/res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoe=
ui-easteuropean/segoeui-regular.woff2") format("woff2"), url("https://res-1=
.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-eas=
teuropean/segoeui-regular.woff") format("woff"); font-weight: 400; font-sty=
le: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (East European)"; src: url("https:/=
/res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoe=
ui-easteuropean/segoeui-semibold.woff2") format("woff2"), url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ea=
steuropean/segoeui-semibold.woff") format("woff"); font-weight: 600; font-s=
tyle: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (East European)"; src: url("https:/=
/res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoe=
ui-easteuropean/segoeui-bold.woff2") format("woff2"), url("https://res-1.cd=
n.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-easteu=
ropean/segoeui-bold.woff") format("woff"); font-weight: 700; font-style: no=
rmal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Greek)"; src: url("https://res-1.c=
dn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek=
/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.office.net/f=
iles/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek/segoeui-light.=
woff") format("woff"); font-weight: 100; font-style: normal; font-display: =
swap; }

@font-face { font-family: "Segoe UI Web (Greek)"; src: url("https://res-1.c=
dn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek=
/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.office.n=
et/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek/segoeui-se=
milight.woff") format("woff"); font-weight: 300; font-style: normal; font-d=
isplay: swap; }

@font-face { font-family: "Segoe UI Web (Greek)"; src: url("https://res-1.c=
dn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek=
/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.office.net=
/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek/segoeui-regu=
lar.woff") format("woff"); font-weight: 400; font-style: normal; font-displ=
ay: swap; }

@font-face { font-family: "Segoe UI Web (Greek)"; src: url("https://res-1.c=
dn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek=
/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.office.ne=
t/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek/segoeui-sem=
ibold.woff") format("woff"); font-weight: 600; font-style: normal; font-dis=
play: swap; }

@font-face { font-family: "Segoe UI Web (Greek)"; src: url("https://res-1.c=
dn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek=
/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.net/fi=
les/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-greek/segoeui-bold.wo=
ff") format("woff"); font-weight: 700; font-style: normal; font-display: sw=
ap; }

@font-face { font-family: "Segoe UI Web (Hebrew)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebr=
ew/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.office.net=
/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebrew/segoeui-lig=
ht.woff") format("woff"); font-weight: 100; font-style: normal; font-displa=
y: swap; }

@font-face { font-family: "Segoe UI Web (Hebrew)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebr=
ew/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.office=
.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebrew/segoeui=
-semilight.woff") format("woff"); font-weight: 300; font-style: normal; fon=
t-display: swap; }

@font-face { font-family: "Segoe UI Web (Hebrew)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebr=
ew/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.office.n=
et/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebrew/segoeui-r=
egular.woff") format("woff"); font-weight: 400; font-style: normal; font-di=
splay: swap; }

@font-face { font-family: "Segoe UI Web (Hebrew)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebr=
ew/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebrew/segoeui-=
semibold.woff") format("woff"); font-weight: 600; font-style: normal; font-=
display: swap; }

@font-face { font-family: "Segoe UI Web (Hebrew)"; src: url("https://res-1.=
cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebr=
ew/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.net/=
files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-hebrew/segoeui-bold=
.woff") format("woff"); font-weight: 700; font-style: normal; font-display:=
 swap; }

@font-face { font-family: "Segoe UI Web (Vietnamese)"; src: url("https://re=
s-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-=
vietnamese/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.of=
fice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-vietnamese=
/segoeui-light.woff") format("woff"); font-weight: 100; font-style: normal;=
 font-display: swap; }

@font-face { font-family: "Segoe UI Web (Vietnamese)"; src: url("https://re=
s-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-=
vietnamese/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cd=
n.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-vietna=
mese/segoeui-semilight.woff") format("woff"); font-weight: 300; font-style:=
 normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Vietnamese)"; src: url("https://re=
s-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-=
vietnamese/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-vietname=
se/segoeui-regular.woff") format("woff"); font-weight: 400; font-style: nor=
mal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Vietnamese)"; src: url("https://re=
s-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-=
vietnamese/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn=
.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-vietnam=
ese/segoeui-semibold.woff") format("woff"); font-weight: 600; font-style: n=
ormal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Vietnamese)"; src: url("https://re=
s-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-=
vietnamese/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.off=
ice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-vietnamese/=
segoeui-bold.woff") format("woff"); font-weight: 700; font-style: normal; f=
ont-display: swap; }

@font-face { font-family: "Segoe UI Web (West European)"; src: local("Segoe=
 UI Light"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_202308=
15.002/assets/fonts/segoeui-westeuropean/segoeui-light.woff2") format("woff=
2"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/a=
ssets/fonts/segoeui-westeuropean/segoeui-light.woff") format("woff"); font-=
weight: 100; font-style: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (West European)"; src: local("Segoe=
 UI SemiLight"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20=
230815.002/assets/fonts/segoeui-westeuropean/segoeui-semilight.woff2") form=
at("woff2"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_202308=
15.002/assets/fonts/segoeui-westeuropean/segoeui-semilight.woff") format("w=
off"); font-weight: 300; font-style: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (West European)"; src: local("Segoe=
 UI"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002=
/assets/fonts/segoeui-westeuropean/segoeui-regular.woff2") format("woff2"),=
 url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/asset=
s/fonts/segoeui-westeuropean/segoeui-regular.woff") format("woff"); font-we=
ight: 400; font-style: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (West European)"; src: local("Segoe=
 UI SemiBold"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_202=
30815.002/assets/fonts/segoeui-westeuropean/segoeui-semibold.woff2") format=
("woff2"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815=
.002/assets/fonts/segoeui-westeuropean/segoeui-semibold.woff") format("woff=
"); font-weight: 600; font-style: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (West European)"; src: local("Segoe=
 UI Bold"), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_2023081=
5.002/assets/fonts/segoeui-westeuropean/segoeui-bold.woff2") format("woff2"=
), url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/ass=
ets/fonts/segoeui-westeuropean/segoeui-bold.woff") format("woff"); font-wei=
ght: 700; font-style: normal; font-display: swap; }

@font-face { src: url("https://res-1.cdn.office.net/files/fabric-cdn-prod_2=
0230815.002/assets/fonts/selawik/selawik-light.woff2") format("woff2"), url=
("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fo=
nts/selawik/selawik-light.woff") format("woff"); font-weight: 100; font-sty=
le: normal; font-display: swap; }

@font-face { src: url("https://res-1.cdn.office.net/files/fabric-cdn-prod_2=
0230815.002/assets/fonts/selawik/selawik-semilight.woff2") format("woff2"),=
 url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/asset=
s/fonts/selawik/selawik-semilight.woff") format("woff"); font-weight: 300; =
font-style: normal; font-display: swap; }

@font-face { src: url("https://res-1.cdn.office.net/files/fabric-cdn-prod_2=
0230815.002/assets/fonts/selawik/selawik-regular.woff2") format("woff2"), u=
rl("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/=
fonts/selawik/selawik-regular.woff") format("woff"); font-weight: 400; font=
-style: normal; font-display: swap; }

@font-face { src: url("https://res-1.cdn.office.net/files/fabric-cdn-prod_2=
0230815.002/assets/fonts/selawik/selawik-semibold.woff2") format("woff2"), =
url("https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets=
/fonts/selawik/selawik-semibold.woff") format("woff"); font-weight: 600; fo=
nt-style: normal; font-display: swap; }

@font-face { src: url("https://res-1.cdn.office.net/files/fabric-cdn-prod_2=
0230815.002/assets/fonts/selawik/selawik-bold.woff2") format("woff2"), url(=
"https://res-1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fon=
ts/selawik/selawik-bold.woff") format("woff"); font-weight: 700; font-style=
: normal; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Armenian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ar=
menian/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.office=
.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-armenian/segoe=
ui-light.woff") format("woff"); font-weight: 100; font-style: normal; font-=
display: swap; }

@font-face { font-family: "Segoe UI Web (Armenian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ar=
menian/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.of=
fice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-armenian/s=
egoeui-semilight.woff") format("woff"); font-weight: 300; font-style: norma=
l; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Armenian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ar=
menian/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.offi=
ce.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-armenian/seg=
oeui-regular.woff") format("woff"); font-weight: 400; font-style: normal; f=
ont-display: swap; }

@font-face { font-family: "Segoe UI Web (Armenian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ar=
menian/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.off=
ice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-armenian/se=
goeui-semibold.woff") format("woff"); font-weight: 600; font-style: normal;=
 font-display: swap; }

@font-face { font-family: "Segoe UI Web (Armenian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ar=
menian/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-armenian/segoeu=
i-bold.woff") format("woff"); font-weight: 700; font-style: normal; font-di=
splay: swap; }

@font-face { font-family: "Segoe UI Web (Georgian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ge=
orgian/segoeui-light.woff2") format("woff2"), url("https://res-1.cdn.office=
.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-georgian/segoe=
ui-light.woff") format("woff"); font-weight: 100; font-style: normal; font-=
display: swap; }

@font-face { font-family: "Segoe UI Web (Georgian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ge=
orgian/segoeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.of=
fice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-georgian/s=
egoeui-semilight.woff") format("woff"); font-weight: 300; font-style: norma=
l; font-display: swap; }

@font-face { font-family: "Segoe UI Web (Georgian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ge=
orgian/segoeui-regular.woff2") format("woff2"), url("https://res-1.cdn.offi=
ce.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-georgian/seg=
oeui-regular.woff") format("woff"); font-weight: 400; font-style: normal; f=
ont-display: swap; }

@font-face { font-family: "Segoe UI Web (Georgian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ge=
orgian/segoeui-semibold.woff2") format("woff2"), url("https://res-1.cdn.off=
ice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-georgian/se=
goeui-semibold.woff") format("woff"); font-weight: 600; font-style: normal;=
 font-display: swap; }

@font-face { font-family: "Segoe UI Web (Georgian)"; src: url("https://res-=
1.cdn.office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-ge=
orgian/segoeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/segoeui-georgian/segoeu=
i-bold.woff") format("woff"); font-weight: 700; font-style: normal; font-di=
splay: swap; }

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-semilight.woff2") format("woff2"), url("https://res-1.cdn.of=
fice.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/=
leelawadeeui-semilight.woff") format("woff"); font-weight: 100; font-style:=
 normal; font-display: swap; }

@font-face { font-family: "Leelawadee UI Web"; src: url("https://res-1.cdn.=
office.net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-tha=
i/leelawadeeui-bold.woff2") format("woff2"), url("https://res-1.cdn.office.=
net/files/fabric-cdn-prod_20230815.002/assets/fonts/leelawadeeui-thai/leela=
wadeeui-bold.woff") format("woff"); font-weight: 600; font-style: normal; f=
ont-display: swap; }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: cid:css-3f7975b2-32a2-4392-be39-52ba13ed1912@mhtml.blink

@charset "utf-8";

.editorbx-css-0 { overflow: hidden !important; }

.editorbx-css-1 { animation-name: editorbx-css-0, editorbx-css-10; animatio=
n-duration: 0.367s; animation-timing-function: cubic-bezier(0.1, 0.9, 0.2, =
1); animation-fill-mode: both; }

.editorbx-css-2 { animation-name: editorbx-css-0, editorbx-css-12; animatio=
n-duration: 0.367s; animation-timing-function: cubic-bezier(0.1, 0.9, 0.2, =
1); animation-fill-mode: both; }

.editorbx-css-3 { animation-name: editorbx-css-0, editorbx-css-6; animation=
-duration: 0.367s; animation-timing-function: cubic-bezier(0.1, 0.9, 0.2, 1=
); animation-fill-mode: both; }

.editorbx-css-4 { animation-name: editorbx-css-0, editorbx-css-2; animation=
-duration: 0.367s; animation-timing-function: cubic-bezier(0.1, 0.9, 0.2, 1=
); animation-fill-mode: both; }

.editorbx-root-5 { display: inline-block; }

.editorbx-placeholder-6 { width: 1em; }

.editorbx-image-7 { overflow: hidden; }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: cid:css-b36d6269-a772-4896-a205-40ef42376e56@mhtml.blink

@charset "utf-8";

.editorbx-body-8 { color: rgb(50, 49, 48); background: rgb(255, 255, 255); =
font-family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple=
-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; font-wei=
ght: 400; font-size: 14px; -webkit-font-smoothing: antialiased; }

.editorbx-container-9 { position: relative; }

.editorbx-root-10 { font-family: "Segoe UI Web (West European)", "Segoe UI"=
, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; =
-webkit-font-smoothing: antialiased; font-size: 14px; font-weight: 400; pos=
ition: absolute; display: flex; z-index: 1000000; box-sizing: border-box; b=
order-radius: 2px; box-shadow: rgba(0, 0, 0, 0.133) 0px 6.4px 14.4px 0px, r=
gba(0, 0, 0, 0.11) 0px 1.2px 3.6px 0px; outline: transparent; max-width: 45=
0px; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-10 { border-width: 1px; border-style: solid; border-color:=
 windowtext; }
}

.editorbx-beak-11 { position: absolute; background-color: rgb(255, 255, 255=
); box-shadow: inherit; border: inherit; box-sizing: border-box; transform:=
 rotate(45deg); height: 16px; width: 16px; }

.editorbx-beakCurtain-12 { position: absolute; inset: 0px; background-color=
: rgb(255, 255, 255); border-radius: 2px; }

.editorbx-calloutMain-13 { background-color: rgb(255, 255, 255); overflow: =
hidden auto; position: relative; width: 100%; border-radius: 2px; min-width=
: 288px; padding-top: 14px; font-family: "Segoe UI Web (West European)", "S=
egoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans=
-serif; }

@font-face { font-family: FabricMDL2Icons-3; src: url("chrome-extension://g=
paiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.cssfabric-icons-3-089e21=
7a.woff") format("woff"); }

.editorbx-css-15 { -webkit-font-smoothing: antialiased; font-style: normal;=
 font-weight: normal; speak: none; font-family: FabricMDL2Icons-3; }

.editorbx-root-16 { display: inline-block; -webkit-font-smoothing: antialia=
sed; font-style: normal; font-weight: normal; speak: none; font-family: Fab=
ricMDL2Icons; color: rgb(90, 78, 188); font-size: 7px; line-height: 18px; w=
idth: auto; height: auto; }

@font-face { font-family: FabricMDL2Icons-0; src: url("chrome-extension://g=
paiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.cssfabric-icons-0-467ee2=
7f.woff") format("woff"); }

.editorbx-css-18 { -webkit-font-smoothing: antialiased; font-style: normal;=
 font-weight: normal; speak: none; font-family: FabricMDL2Icons-0; }

.editorbx-root-19 { display: inline-block; -webkit-font-smoothing: antialia=
sed; font-style: normal; font-weight: 700; speak: none; font-family: Fabric=
MDL2Icons; font-size: 10px; width: auto; height: auto; padding-right: 5px; =
}

.editorbx-root-20 { font-family: "Segoe UI", "Segoe UI Web (West European)"=
, "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", =
sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; font-weig=
ht: 600; color: rgb(50, 49, 48); box-sizing: border-box; box-shadow: none; =
margin: 0px; display: block; padding: 5px 0px; overflow-wrap: break-word; }

.editorbx-root-21 { font-family: "Segoe UI Web (West European)", "Segoe UI"=
, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; =
-webkit-font-smoothing: antialiased; font-size: 12px; font-weight: 400; col=
or: rgb(59, 58, 57); box-sizing: border-box; box-shadow: none; margin: 0px =
0px 8px; display: block; padding: 0px 12px; overflow-wrap: break-word; user=
-select: none; }

@media screen and (forced-colors: active) {
  .editorbx-root-21 { color: windowtext; }
}

.editorbx-root-22 { outline: transparent; position: relative; font-family: =
"Segoe UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFo=
nt, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothing: antialias=
ed; font-size: 14px; font-weight: 400; border: none; border-radius: 2px; bo=
x-sizing: border-box; cursor: pointer; display: inline-block; padding: 7px =
6px 9px; text-decoration: none; text-align: center; max-width: 400px; min-h=
eight: 36px; height: auto; background-color: transparent; color: rgb(50, 49=
, 48); flex-grow: 1; user-select: none; width: 100% !important; }

.ms-Fabric--isFocusVisible .editorbx-root-22:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-22:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-22:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-22.ms-editor-focus { background-color: transparent; border: =
1px solid rgb(96, 94, 92); padding: 6px 5px 8px; }

.editorbx-root-22:hover { background-color: rgb(243, 242, 241); color: rgb(=
32, 31, 30); border: none; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-22:hover { border-color: highlight; color: highlight; }
}

.editorbx-root-22:hover .ms-Button-description { color: rgb(32, 31, 30); }

.editorbx-root-22:focus { background-color: transparent; border: 1px solid =
rgb(96, 94, 92); padding: 6px 5px 8px; }

.editorbx-root-22:active { background-color: rgb(237, 235, 233); color: rgb=
(32, 31, 30); }

.editorbx-root-22:active .ms-Button-description { color: inherit; }

.editorbx-flexContainer-23 { display: flex; height: 100%; flex-flow: row; j=
ustify-content: center; align-items: flex-start; min-width: 100%; }

.editorbx-textContainer-24 { flex-grow: 1; display: block; text-align: left=
; }

.editorbx-icon-25 { font-size: 2em; margin: 0px 8px 0px 0px; height: 1em; l=
ine-height: 1em; text-align: center; flex-shrink: 0; flex-basis: 1em; }

.editorbx-label-26 { margin: 0px 0px 5px; line-height: 100%; display: block=
; font-weight: 600; }

.editorbx-menuIcon-27 { font-size: 12px; margin: 0px 4px; height: 16px; lin=
e-height: 16px; text-align: center; flex-shrink: 0; }

.editorbx-description-28 { display: block; font-family: "Segoe UI", "Segoe =
UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFont, Rob=
oto, "Helvetica Neue", sans-serif; -webkit-font-smoothing: antialiased; fon=
t-size: 12px; font-weight: 400; line-height: 100%; color: rgb(59, 58, 57); =
}

.editorbx-screenReaderText-29 { position: absolute; width: 1px; height: 1px=
; margin: -1px; padding: 0px; border: 0px; overflow: hidden; white-space: n=
owrap; }

.editorbx-root-30 { outline: transparent; position: relative; font-family: =
"Segoe UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFo=
nt, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothing: antialias=
ed; font-size: 14px; font-weight: 400; border: none rgb(243, 242, 241); bor=
der-radius: 2px; box-sizing: border-box; cursor: default; display: inline-b=
lock; padding: 7px 6px 9px; text-decoration: none; text-align: center; max-=
width: 400px; min-height: 36px; height: auto; background-color: transparent=
; color: rgb(161, 159, 157); flex-grow: 1; user-select: none; width: 100% !=
important; }

.ms-Fabric--isFocusVisible .editorbx-root-30:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-30:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-30:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-30.ms-editor-focus { background-color: transparent; border: =
1px solid rgb(96, 94, 92); padding: 6px 5px 8px; }

.editorbx-root-30:hover { outline: 0px; }

.editorbx-root-30:focus { outline: 0px; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-30 { color: graytext; border-color: graytext; background-c=
olor: window; }
}

.editorbx-icon-31 { font-size: 2em; margin: 0px 8px 0px 0px; height: 1em; l=
ine-height: 1em; text-align: center; flex-shrink: 0; flex-basis: 1em; color=
: rgb(161, 159, 157); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-icon-31 { color: graytext; }
}

.editorbx-menuIcon-32 { font-size: 12px; margin: 0px 4px; height: 16px; lin=
e-height: 16px; text-align: center; flex-shrink: 0; color: rgb(161, 159, 15=
7); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-menuIcon-32 { color: graytext; }
}

.editorbx-description-33 { display: block; font-family: "Segoe UI", "Segoe =
UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFont, Rob=
oto, "Helvetica Neue", sans-serif; -webkit-font-smoothing: antialiased; fon=
t-size: 12px; font-weight: 400; line-height: 100%; color: inherit; }

.editorbx-root-34 { outline: transparent; position: relative; font-family: =
"Segoe UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFo=
nt, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothing: antialias=
ed; font-size: 14px; font-weight: 400; border: 1px solid rgb(96, 94, 92); b=
order-radius: 2px; box-sizing: border-box; cursor: default; display: inline=
-block; padding: 7px 6px 9px; text-decoration: none; text-align: center; ma=
x-width: 400px; min-height: 36px; height: auto; background-color: transpare=
nt; color: rgb(161, 159, 157); flex-grow: 1; user-select: none; width: 100%=
 !important; }

.ms-Fabric--isFocusVisible .editorbx-root-34:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-34:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-34:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-34.ms-editor-focus { background-color: transparent; border: =
1px solid rgb(96, 94, 92); padding: 6px 5px 8px; }

.editorbx-root-34:hover { outline: 0px; }

.editorbx-root-34:focus { outline: 0px; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-34 { color: graytext; border-color: graytext; background-c=
olor: window; }
}

.editorbx-textContainer-35 { flex-grow: 1; display: block; text-align: righ=
t; }

.editorbx-root-36 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; border: none; border-rad=
ius: 2px; box-sizing: border-box; cursor: pointer; display: inline-block; p=
adding: 0px; text-decoration: none; text-align: left; min-width: auto; heig=
ht: 24px; background-color: rgb(255, 255, 255); color: rgb(59, 58, 57); poi=
nter-events: all; margin: 0px 8px 0px 0px; max-height: 24px; min-height: 24=
px; flex-grow: 0; white-space: nowrap; overflow: visible; user-select: none=
; }

.ms-Fabric--isFocusVisible .editorbx-root-36:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-36:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-36:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-36.ms-editor-focus { background-color: transparent; outline:=
 rgb(96, 94, 92) solid 1px; }

.editorbx-root-36:hover { background-color: rgb(243, 242, 241); color: rgb(=
32, 31, 30); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-36:hover { border-color: highlight; color: highlight; }
}

.editorbx-root-36:focus { outline: rgb(96, 94, 92) solid 1px; }

.editorbx-root-36:active { background-color: rgb(219, 219, 219); color: rgb=
(32, 31, 30); }

.editorbx-flexContainer-37 { display: flex; height: 100%; flex-wrap: nowrap=
; justify-content: center; align-items: center; pointer-events: all; }

.editorbx-textContainer-38 { flex-grow: 1; display: block; }

.editorbx-icon-39 { font-size: 16px; margin: 0px 4px; height: 16px; line-he=
ight: 16px; text-align: center; flex-shrink: 0; }

.editorbx-label-40 { margin: 0px 4px; line-height: 100%; display: block; fo=
nt-weight: 400; }

.editorbx-description-41 { display: block; }

.editorbx-root-42 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; border: none; border-rad=
ius: 2px; box-sizing: border-box; cursor: pointer; display: inline-block; p=
adding: 3px 0px 0px; text-decoration: none; text-align: center; min-width: =
auto; height: 24px; background-color: rgb(255, 255, 255); color: rgb(50, 49=
, 48); margin: 0px 8px 0px 0px; max-height: 24px; min-height: 24px; flex-gr=
ow: 0; white-space: nowrap; user-select: none; }

.ms-Fabric--isFocusVisible .editorbx-root-42:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-42:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-42:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-42.ms-editor-focus { background-color: transparent; outline:=
 rgb(96, 94, 92) solid 1px; }

.editorbx-root-42:hover { background-color: rgb(243, 242, 241); color: rgb(=
32, 31, 30); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-42:hover { border-color: highlight; color: highlight; }
}

.editorbx-root-42:focus { outline: rgb(96, 94, 92) solid 1px; }

.editorbx-root-42:active { background-color: rgb(219, 219, 219); color: rgb=
(32, 31, 30); }

.editorbx-flexContainer-43 { display: flex; height: 100%; flex-wrap: nowrap=
; justify-content: center; align-items: center; }

.editorbx-label-44 { margin: 0px 4px; line-height: 100%; display: block; fo=
nt-weight: 600; }

@font-face { font-family: FabricMDL2Icons; src: url("chrome-extension://gpa=
iobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.cssfabric-icons-a13498cf.w=
off") format("woff"); }

.editorbx-css-46 { -webkit-font-smoothing: antialiased; font-style: normal;=
 font-weight: normal; speak: none; font-family: FabricMDL2Icons; }

.editorbx-root-47 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; border: none; border-rad=
ius: 2px; box-sizing: border-box; cursor: pointer; display: inline-block; p=
adding: 0px; text-decoration: none; text-align: center; min-width: 25px; he=
ight: 24px; background-color: rgb(255, 255, 255); color: rgb(50, 49, 48); w=
idth: 25px; margin: 0px; max-height: 24px; min-height: 24px; flex-grow: 0; =
user-select: none; }

.ms-Fabric--isFocusVisible .editorbx-root-47:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-47:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-47:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-47.ms-editor-focus { background-color: transparent; outline:=
 rgb(96, 94, 92) solid 1px; }

.editorbx-root-47:hover { background-color: rgb(243, 242, 241); color: rgb(=
32, 31, 30); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-47:hover { border-color: highlight; color: highlight; }
}

.editorbx-root-47:focus { outline: rgb(96, 94, 92) solid 1px; }

.editorbx-root-47:active { background-color: rgb(219, 219, 219); color: rgb=
(32, 31, 30); }

.editorbx-root-48 { font-family: "Segoe UI", "Segoe UI Web (West European)"=
, "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", =
sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; font-weig=
ht: 400; background-color: rgb(255, 255, 255); min-width: 180px; }

.editorbx-container-49:focus { outline: 0px; }

.editorbx-list-50 { list-style-type: none; margin: 0px; padding: 0px; }

.editorbx-header-51 { font-family: "Segoe UI", "Segoe UI Web (West European=
)", "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue"=
, sans-serif; -webkit-font-smoothing: antialiased; font-size: 12px; font-we=
ight: 600; color: rgb(0, 120, 212); background: none transparent; border: n=
one; height: 36px; line-height: 36px; cursor: default; padding: 0px 6px; te=
xt-align: left; user-select: none; }

.editorbx-title-52 { font-size: 16px; padding: 5px 14px; background-color: =
rgb(237, 235, 233); }

.editorbx-item-53 { font-family: "Segoe UI", "Segoe UI Web (West European)"=
, "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", =
sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; font-weig=
ht: 400; color: rgb(50, 49, 48); position: relative; box-sizing: border-box=
; }

.editorbx-divider-54 { display: block; height: 1px; background-color: rgb(2=
37, 235, 233); position: relative; }

.editorbx-root-55 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; color: rgb(161, 159, 157=
); background-color: transparent; border: none; width: 100%; height: 36px; =
line-height: 36px; display: block; cursor: default; padding: 0px 8px 0px 4p=
x; text-align: left; pointer-events: none; }

.ms-Fabric--isFocusVisible .editorbx-root-55:focus::after { content: ""; po=
sition: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255); outline=
: rgb(96, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-55 { color: graytext; opacity: 1; }
}

.editorbx-splitPrimary-56 { outline: transparent; position: relative; font-=
family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-syst=
em, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-=
smoothing: antialiased; font-size: 14px; font-weight: 400; color: rgb(161, =
159, 157); background-color: transparent; border: none; width: calc(100% - =
28px); height: 36px; line-height: 36px; display: block; cursor: default; pa=
dding: 0px 8px 0px 4px; text-align: left; pointer-events: none; }

.ms-Fabric--isFocusVisible .editorbx-splitPrimary-56:focus::after { content=
: ""; position: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255);=
 outline: rgb(96, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-splitPrimary-56 { color: graytext; opacity: 1; }
}

.editorbx-splitMenu-57 { outline: transparent; position: relative; font-fam=
ily: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system,=
 BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smo=
othing: antialiased; font-size: 14px; font-weight: 400; color: rgb(161, 159=
, 157); background-color: transparent; border: none; width: 100%; height: 3=
6px; line-height: 36px; display: block; cursor: default; padding: 0px 8px; =
text-align: left; flex-basis: 0px; min-width: 28px; pointer-events: none; }

.ms-Fabric--isFocusVisible .editorbx-splitMenu-57:focus::after { content: "=
"; position: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255); ou=
tline: rgb(96, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-splitMenu-57 { color: graytext; opacity: 1; }
}

.editorbx-anchorLink-58 { padding: 0px 8px 0px 4px; text-rendering: auto; c=
olor: inherit; letter-spacing: normal; word-spacing: normal; text-transform=
: none; text-indent: 0px; text-shadow: none; text-decoration: none; box-siz=
ing: border-box; }

.editorbx-linkContent-59 { white-space: nowrap; height: inherit; display: f=
lex; align-items: center; max-width: 100%; }

.editorbx-linkContentMenu-60 { white-space: nowrap; height: inherit; displa=
y: flex; align-items: center; max-width: 100%; justify-content: center; }

.editorbx-icon-61 { display: inline-block; min-height: 1px; max-height: 36p=
x; font-size: 16px; width: 16px; margin: 0px 4px; vertical-align: middle; f=
lex-shrink: 0; color: rgb(161, 159, 157); }

@media only screen and (min-width: 0px) and (max-width: 639px) {
  .editorbx-icon-61 { font-size: 20px; width: 20px; }
}

.editorbx-iconColor-62 { color: rgb(0, 120, 212); }

.editorbx-checkmarkIcon-63 { display: inline-block; min-height: 1px; max-he=
ight: 36px; font-size: 16px; width: 16px; margin: 0px 4px; vertical-align: =
middle; flex-shrink: 0; }

@media only screen and (min-width: 0px) and (max-width: 639px) {
  .editorbx-checkmarkIcon-63 { font-size: 20px; width: 20px; }
}

.editorbx-subMenuIcon-64 { height: 36px; line-height: 36px; color: rgb(161,=
 159, 157); text-align: center; display: inline-block; vertical-align: midd=
le; flex-shrink: 0; font-size: 12px; }

.editorbx-subMenuIcon-64:hover { color: rgb(50, 49, 48); }

.editorbx-subMenuIcon-64:active { color: rgb(50, 49, 48); }

@media only screen and (min-width: 0px) and (max-width: 639px) {
  .editorbx-subMenuIcon-64 { font-size: 16px; }
}

.editorbx-label-65 { margin: 0px 4px; vertical-align: middle; display: inli=
ne-block; flex-grow: 1; text-overflow: ellipsis; white-space: nowrap; overf=
low: hidden; }

.editorbx-secondaryText-66 { color: rgb(96, 94, 92); padding-left: 20px; te=
xt-align: right; }

.editorbx-splitContainer-67 { outline: transparent; position: relative; dis=
play: flex; height: 36px; flex-wrap: nowrap; justify-content: center; align=
-items: flex-start; }

.ms-Fabric--isFocusVisible .editorbx-splitContainer-67:focus::after { conte=
nt: ""; position: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255=
); outline: rgb(96, 94, 92) solid 1px; z-index: 1; }

.editorbx-screenReaderText-68 { position: absolute; width: 1px; height: 1px=
; margin: -1px; padding: 0px; border: 0px; overflow: hidden; white-space: n=
owrap; visibility: hidden; }

.editorbx-root-69 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; color: rgb(161, 159, 157=
); background-color: transparent; border: none; width: 100%; height: 36px; =
line-height: 36px; display: block; cursor: default; padding: 0px 8px 0px 4p=
x; text-align: left; pointer-events: none; }

.ms-Fabric--isFocusVisible .editorbx-root-69:focus::after { content: ""; po=
sition: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255); outline=
: rgb(96, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-69 { color: graytext; opacity: 1; }
}

.editorbx-root-69:hover { background-color: rgb(243, 242, 241); }

.editorbx-root-69:active { background-color: rgb(225, 223, 221); }

.editorbx-root-70 { font-family: "Segoe UI", "Segoe UI Web (West European)"=
, "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", =
sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; font-weig=
ht: 400; position: absolute; display: flex; z-index: 1000000; box-sizing: b=
order-box; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.133) 0px 6.4px 1=
4.4px 0px, rgba(0, 0, 0, 0.11) 0px 1.2px 3.6px 0px; outline: transparent; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-70 { border-width: 1px; border-style: solid; border-color:=
 windowtext; }
}

.editorbx-calloutMain-71 { background-color: rgb(255, 255, 255); overflow: =
hidden; position: relative; width: 100%; border-radius: 2px; }

.editorbx-css-72:focus { outline: none; }

.editorbx-root-73 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; color: rgb(50, 49, 48); =
background-color: transparent; border: none; width: 100%; height: 36px; lin=
e-height: 36px; display: block; cursor: pointer; padding: 0px 8px 0px 4px; =
text-align: left; }

.ms-Fabric--isFocusVisible .editorbx-root-73:focus::after { content: ""; po=
sition: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255); outline=
: rgb(96, 94, 92) solid 1px; z-index: 1; }

.editorbx-root-73:hover { background-color: rgb(243, 242, 241); color: rgb(=
32, 31, 30); }

.editorbx-root-73:hover .ms-ContextualMenu-icon { color: rgb(16, 110, 190);=
 }

.editorbx-root-73:hover .ms-ContextualMenu-submenuIcon { color: rgb(50, 49,=
 48); }

.editorbx-root-73:active { background-color: rgb(237, 235, 233); }

.editorbx-root-73:active .ms-ContextualMenu-icon { color: rgb(0, 90, 158); =
}

.editorbx-root-73:active .ms-ContextualMenu-submenuIcon { color: rgb(50, 49=
, 48); }

.ms-Fabric--isFocusVisible .editorbx-root-73:focus { background-color: rgb(=
255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-root-73:focus:hover { background-color=
: rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-root-73:hover { background: inherit; }

.editorbx-splitPrimary-74 { outline: transparent; position: relative; font-=
family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-syst=
em, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-=
smoothing: antialiased; font-size: 14px; font-weight: 400; color: rgb(50, 4=
9, 48); background-color: transparent; border: none; width: calc(100% - 28p=
x); height: 36px; line-height: 36px; display: block; cursor: pointer; paddi=
ng: 0px 8px 0px 4px; text-align: left; }

.ms-Fabric--isFocusVisible .editorbx-splitPrimary-74:focus::after { content=
: ""; position: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255);=
 outline: rgb(96, 94, 92) solid 1px; z-index: 1; }

.editorbx-splitPrimary-74:hover { background-color: rgb(243, 242, 241); col=
or: rgb(32, 31, 30); }

.editorbx-splitPrimary-74:hover .ms-ContextualMenu-icon { color: rgb(16, 11=
0, 190); }

.editorbx-splitPrimary-74:hover .ms-ContextualMenu-submenuIcon { color: rgb=
(50, 49, 48); }

.editorbx-splitPrimary-74:hover ~ .ms-ContextualMenu-splitMenu { background=
-color: rgb(243, 242, 241); color: rgb(32, 31, 30); }

.editorbx-splitPrimary-74:hover ~ .ms-ContextualMenu-splitMenu .ms-Contextu=
alMenu-icon { color: rgb(16, 110, 190); }

.editorbx-splitPrimary-74:hover ~ .ms-ContextualMenu-splitMenu .ms-Contextu=
alMenu-submenuIcon { color: rgb(50, 49, 48); }

.editorbx-splitPrimary-74:active { background-color: rgb(237, 235, 233); }

.editorbx-splitPrimary-74:active .ms-ContextualMenu-icon { color: rgb(0, 90=
, 158); }

.editorbx-splitPrimary-74:active .ms-ContextualMenu-submenuIcon { color: rg=
b(50, 49, 48); }

.ms-Fabric--isFocusVisible .editorbx-splitPrimary-74:focus { background-col=
or: rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-splitPrimary-74:focus:hover { backgrou=
nd-color: rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-splitPrimary-74:hover { background: in=
herit; }

.editorbx-splitMenu-75 { outline: transparent; position: relative; font-fam=
ily: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system,=
 BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smo=
othing: antialiased; font-size: 14px; font-weight: 400; color: rgb(50, 49, =
48); background-color: transparent; border: none; width: 100%; height: 36px=
; line-height: 36px; display: block; cursor: pointer; padding: 0px 8px; tex=
t-align: left; flex-basis: 0px; min-width: 28px; }

.ms-Fabric--isFocusVisible .editorbx-splitMenu-75:focus::after { content: "=
"; position: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255); ou=
tline: rgb(96, 94, 92) solid 1px; z-index: 1; }

.editorbx-splitMenu-75:hover { background-color: rgb(243, 242, 241); color:=
 rgb(32, 31, 30); }

.editorbx-splitMenu-75:hover .ms-ContextualMenu-icon { color: rgb(16, 110, =
190); }

.editorbx-splitMenu-75:hover .ms-ContextualMenu-submenuIcon { color: rgb(50=
, 49, 48); }

.editorbx-splitMenu-75:active { background-color: rgb(237, 235, 233); }

.editorbx-splitMenu-75:active .ms-ContextualMenu-icon { color: rgb(0, 90, 1=
58); }

.editorbx-splitMenu-75:active .ms-ContextualMenu-submenuIcon { color: rgb(5=
0, 49, 48); }

.ms-Fabric--isFocusVisible .editorbx-splitMenu-75:focus { background-color:=
 rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-splitMenu-75:focus:hover { background-=
color: rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-splitMenu-75:hover { background: inher=
it; }

.editorbx-icon-76 { display: inline-block; min-height: 1px; max-height: 36p=
x; font-size: 16px; width: 16px; margin: 0px 4px; vertical-align: middle; f=
lex-shrink: 0; }

@media only screen and (min-width: 0px) and (max-width: 639px) {
  .editorbx-icon-76 { font-size: 20px; width: 20px; }
}

.editorbx-subMenuIcon-77 { height: 36px; line-height: 36px; color: rgb(96, =
94, 92); text-align: center; display: inline-block; vertical-align: middle;=
 flex-shrink: 0; font-size: 12px; }

.editorbx-subMenuIcon-77:hover { color: rgb(50, 49, 48); }

.editorbx-subMenuIcon-77:active { color: rgb(50, 49, 48); }

@media only screen and (min-width: 0px) and (max-width: 639px) {
  .editorbx-subMenuIcon-77 { font-size: 16px; }
}

.editorbx-splitContainer-78 { outline: transparent; position: relative; dis=
play: flex; height: 36px; flex-wrap: nowrap; justify-content: center; align=
-items: flex-start; }

.ms-Fabric--isFocusVisible .editorbx-splitContainer-78:focus::after { conte=
nt: ""; position: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255=
); outline: rgb(96, 94, 92) solid 1px; z-index: 1; }

.ms-Fabric--isFocusVisible .editorbx-splitContainer-78:focus { background-c=
olor: rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-splitContainer-78:focus:hover { backgr=
ound-color: rgb(255, 255, 255); }

.editorbx-root-79 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; color: rgb(50, 49, 48); =
background-color: transparent; border: none; width: 100%; height: 36px; lin=
e-height: 36px; display: block; cursor: pointer; padding: 0px 8px 0px 4px; =
text-align: left; }

.ms-Fabric--isFocusVisible .editorbx-root-79:focus::after { content: ""; po=
sition: absolute; inset: 1px; border: 1px solid rgb(255, 255, 255); outline=
: rgb(96, 94, 92) solid 1px; z-index: 1; }

.editorbx-root-79:hover { background-color: rgb(243, 242, 241); color: rgb(=
32, 31, 30); }

.editorbx-root-79:hover .ms-ContextualMenu-icon { color: rgb(16, 110, 190);=
 }

.editorbx-root-79:hover .ms-ContextualMenu-submenuIcon { color: rgb(50, 49,=
 48); }

.editorbx-root-79:active { background-color: rgb(225, 223, 221); }

.editorbx-root-79:active .ms-ContextualMenu-icon { color: rgb(0, 90, 158); =
}

.editorbx-root-79:active .ms-ContextualMenu-submenuIcon { color: rgb(50, 49=
, 48); }

.ms-Fabric--isFocusVisible .editorbx-root-79:focus { background-color: rgb(=
255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-root-79:focus:hover { background-color=
: rgb(255, 255, 255); }

.ms-Fabric--isFocusVisible .editorbx-root-79:hover { background: inherit; }

.editorbx-css-80 { display: flex; flex-flow: row; width: auto; height: auto=
; box-sizing: border-box; }

.editorbx-css-80 > * { text-overflow: ellipsis; }

.editorbx-css-81 { font-family: "Segoe UI", "Segoe UI Web (West European)",=
 "Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", s=
ans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; font-weigh=
t: 400; color: rgb(50, 49, 48); display: inline; }

.editorbx-root-82 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 12px; border: 1px solid transparent; border-radi=
us: 0px; box-sizing: border-box; cursor: pointer; display: inline-block; pa=
dding: 2px 4px 0px; text-decoration: none; text-align: center; height: 36px=
; color: rgb(164, 38, 44); background-color: transparent; width: max-conten=
t; user-select: none; font-weight: 600 !important; }

.ms-Fabric--isFocusVisible .editorbx-root-82:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-82:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-82:active > span { position: relative; left: 0px; top: 0px; =
}

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-82 { border-color: window; }
}

.editorbx-root-82:hover { color: rgb(0, 120, 212); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-82:hover { color: highlight; }
}

.editorbx-root-82:hover .ms-Button-icon { color: rgb(0, 120, 212); }

.editorbx-root-82:active { color: rgb(0, 0, 0); }

.editorbx-root-82:active .ms-Button-icon { color: rgb(0, 69, 120); }

.editorbx-flexContainer-83 { display: flex; height: 100%; flex-wrap: nowrap=
; justify-content: flex-start; align-items: center; }

.editorbx-textContainer-84 { flex-grow: 0; display: block; }

.editorbx-icon-85 { font-size: 12px; margin: 0px 4px; height: 16px; line-he=
ight: 16px; text-align: center; flex-shrink: 0; color: rgb(164, 38, 44); fo=
nt-family: FabricMDL2Icons !important; font-weight: 600 !important; }

.editorbx-label-86 { margin: 0px 4px; line-height: 100%; display: block; }

.editorbx-menuIcon-87 { font-size: 12px; margin: 0px 4px; height: 16px; lin=
e-height: 16px; text-align: center; flex-shrink: 0; color: rgb(96, 94, 92);=
 }

@font-face { font-family: FabricMDL2Icons-1; src: url("chrome-extension://g=
paiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.cssfabric-icons-1-4d5216=
95.woff") format("woff"); }

.editorbx-css-89 { -webkit-font-smoothing: antialiased; font-style: normal;=
 font-weight: normal; speak: none; font-family: FabricMDL2Icons-1; }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: cid:css-62deff78-a14b-4499-b506-938d066142f7@mhtml.blink

@charset "utf-8";

.editorbx-container-90 { position: relative; }

.editorbx-calloutMain-91 { background-color: rgb(255, 255, 255); overflow: =
hidden auto; position: relative; width: 100%; border-radius: 2px; }

.editorbx-css-92 { display: flex; flex-flow: row; width: auto; height: auto=
; box-sizing: border-box; }

.editorbx-css-92 > * { text-overflow: ellipsis; }

.editorbx-css-92 > :not(:first-child) { margin-left: 2px; }

.editorbx-root-93 { outline: transparent; position: relative; font-family: =
"Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Blin=
kMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothin=
g: antialiased; font-size: 14px; font-weight: 400; border: none; border-rad=
ius: 2px; box-sizing: border-box; cursor: pointer; display: inline-block; p=
adding: 0px 4px; text-decoration: none; text-align: center; width: 32px; he=
ight: 32px; background-color: transparent; color: rgb(0, 120, 212); user-se=
lect: none; }

.ms-Fabric--isFocusVisible .editorbx-root-93:focus::after { content: ""; po=
sition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(9=
6, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-93:focus::after { inset: -2px; =
outline-color: buttontext; }
}

.editorbx-root-93:active > span { position: relative; left: 0px; top: 0px; =
}

.editorbx-root-93.ms-editor-focus { border: 1px solid rgb(96, 94, 92); }

.editorbx-root-93:hover { color: rgb(16, 110, 190); background-color: rgb(2=
43, 242, 241); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-93:hover { border-color: highlight; color: highlight; }
}

.editorbx-root-93:active { color: rgb(0, 90, 158); background-color: rgb(23=
7, 235, 233); }

.editorbx-icon-94 { font-size: 16px; margin: 0px 4px; height: 16px; line-he=
ight: 16px; text-align: center; flex-shrink: 0; color: rgb(0, 0, 0); }

.editorbx-root-95 { font-family: "Segoe UI Web (West European)", "Segoe UI"=
, -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; =
-webkit-font-smoothing: antialiased; font-size: 14px; font-weight: 400; pos=
ition: absolute; display: flex; z-index: 1000000; box-sizing: border-box; b=
order-radius: 2px; box-shadow: rgba(0, 0, 0, 0.133) 0px 6.4px 14.4px 0px, r=
gba(0, 0, 0, 0.11) 0px 1.2px 3.6px 0px; outline: transparent; min-width: 27=
4px; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-95 { border-width: 1px; border-style: solid; border-color:=
 windowtext; }
}

.editorbx-calloutMain-96 { background-color: rgb(255, 255, 255); overflow: =
hidden auto; position: relative; width: 100%; border-radius: 2px; min-width=
: 240px; padding: 20px 16px; font-family: "Segoe UI Web (West European)", "=
Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, "Helvetica Neue", san=
s-serif; }

@font-face { font-family: FabricMDL2Icons-2; src: url("chrome-extension://g=
paiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.cssfabric-icons-2-63c99a=
bf.woff") format("woff"); }

.editorbx-css-98 { -webkit-font-smoothing: antialiased; font-style: normal;=
 font-weight: normal; speak: none; font-family: FabricMDL2Icons-2; }

.editorbx-root-99 { display: inline-block; -webkit-font-smoothing: antialia=
sed; font-style: normal; font-weight: normal; speak: none; font-family: Fab=
ricMDL2Icons; font-size: 14px; max-height: 14px; min-height: 14px; height: =
14px; max-width: 14px; min-width: 14px; width: 14px; margin: 5px 8px 0px 0p=
x; }

.editorbx-root-100 { outline: transparent; position: relative; font-family:=
 "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, Bli=
nkMacSystemFont, Roboto, "Helvetica Neue", sans-serif; -webkit-font-smoothi=
ng: antialiased; font-size: 14px; font-weight: 600; border: none; border-ra=
dius: 2px; box-sizing: border-box; cursor: pointer; display: inline-block; =
padding: 0px; text-decoration: none; text-align: center; min-width: 0px; he=
ight: 24px; background-color: rgb(255, 255, 255); color: rgb(0, 120, 212); =
margin: 0px; user-select: none; }

.ms-Fabric--isFocusVisible .editorbx-root-100:focus::after { content: ""; p=
osition: absolute; inset: 2px; border: 1px solid transparent; outline: rgb(=
96, 94, 92) solid 1px; z-index: 1; }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .ms-Fabric--isFocusVisible .editorbx-root-100:focus::after { inset: -2px;=
 outline-color: buttontext; }
}

.editorbx-root-100:active > span { position: relative; left: 0px; top: 0px;=
 }

.editorbx-root-100.ms-editor-focus { background-color: transparent; outline=
: rgb(96, 94, 92) solid 1px; }

.editorbx-root-100:hover { background-color: transparent; color: rgb(32, 31=
, 30); }

@media screen and (-ms-high-contrast: active), screen and (forced-colors: a=
ctive) {
  .editorbx-root-100:hover { border-color: highlight; color: highlight; }
}

.editorbx-root-100:hover .ms-Button-icon { color: rgb(17, 16, 15); }

.editorbx-root-100:focus { outline: rgb(96, 94, 92) solid 1px; }

.editorbx-root-100:active { background-color: transparent; color: rgb(32, 3=
1, 30); }

.editorbx-icon-101 { font-size: 18px; margin: 0px 4px; height: 16px; line-h=
eight: 16px; text-align: center; flex-shrink: 0; color: rgb(0, 120, 212); }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: cid:css-729e5bfb-a8f3-4704-9292-ba361f631128@mhtml.blink

@charset "utf-8";

.react-scroll-to-bottom--css-whzmt-79elbk { position: relative; }

.react-scroll-to-bottom--css-whzmt-1n7m0yu { height: 100%; overflow-y: auto=
; width: 100%; }

.react-scroll-to-bottom--css-whzmt-1tj0vk3 { background-color: rgba(0, 0, 0=
, 0.2); border-radius: 10px; border-width: 0px; bottom: 5px; cursor: pointe=
r; height: 20px; outline: 0px; position: absolute; right: 20px; width: 20px=
; }

.react-scroll-to-bottom--css-whzmt-1tj0vk3:hover { background-color: rgba(0=
, 0, 0, 0.4); }

.react-scroll-to-bottom--css-whzmt-1tj0vk3:active { background-color: rgba(=
0, 0, 0, 0.6); }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: https://cdn.oaistatic.com/assets/root-msgf0obc.css

@charset "utf-8";

._screen_cundf_1 { display: var(--screen-display,grid); grid-template: "lea=
ding" max-content "content" 1fr "trailing" max-content "keyboard" / minmax(=
0px, 1fr); }

@supports not (overflow:clip) {
  ._screen_cundf_1 { overflow: var(--screen-overflow,hidden auto); }
}

@supports (overflow:clip) {
  ._screen_cundf_1 { overflow: var(--screen-overflow,clip auto); }
}

@supports not (height:100cqh) {
  ._screen_cundf_1:not(._cssOnlyKeyboard_cundf_17) { height: var( --screen-=
height-override,var( --screen-height,calc(100dvh - var(--screen-height-offs=
et, env(keyboard-inset-height, 0px))) ) ); }
}

@supports (height:100cqh) {
  ._screen_cundf_1:not(._cssOnlyKeyboard_cundf_17) { height: var( --screen-=
height-override,var( --screen-height,calc(100cqh - var(--screen-height-offs=
et, env(keyboard-inset-height, 0px))) ) ); }
}

@supports not (height:100cqh) {
  ._screen_cundf_1._cssOnlyKeyboard_cundf_17 { height: var( --screen-height=
-override,var( --screen-height,calc(100dvh - var(--screen-height-offset, 0p=
x) - env(keyboard-inset-height, 0px)) ) ); }
}

@supports (height:100cqh) {
  ._screen_cundf_1._cssOnlyKeyboard_cundf_17 { height: var( --screen-height=
-override,var( --screen-height,calc(100cqh - var(--screen-height-offset, 0p=
x) - env(keyboard-inset-height, 0px)) ) ); }
}

._screen_cundf_1 { padding-bottom: calc(var(--screen-anchor-bottom, 0px) - =
var(--screen-bottom-offset, 0px)); padding-top: calc(var(--screen-anchor-to=
p) + var(--screen-top-offset, 0px)); scrollbar-gutter: var(--screen-scrollb=
ar-gutter-override,stable); width: 100%; }

._screen_cundf_1 [slot=3D"content"] { grid-area: content; padding-inline: v=
ar( --screen-content-inline-padding,var(--screen-inline-padding) ); positio=
n: var(--screen-content-position,relative); }

._screen_cundf_1 [slot=3D"leading"] { grid-area: leading; min-width: var(--=
screen-leading-slot-min-width); overflow: var(--screen-leading-slot-overflo=
w); position: sticky; top: var(--screen-leading-slot-top,0); z-index: var(-=
-screen-leading-slot-z-index,20); }

._screen_cundf_1 [slot=3D"trailing"] { bottom: var(--keyboard-safe-area-bot=
tom,0); grid-area: trailing; padding-inline: var( --screen-trailing-inline-=
padding,var(--screen-inline-padding) ); position: sticky; z-index: var(--sc=
reen-leading-slot-z-index,20); }

._screen_cundf_1 [slot=3D"keyboard"] { background: rgb(252, 252, 252); bott=
om: 0px; grid-area: keyboard; height: var(--keyboard-safe-area-bottom,0); p=
osition: sticky; }

._screen_cundf_1:where([screen-anchor=3D"vertical"], [screen-anchor=3D"top"=
]) { --safe-area-top: calc(env(titlebar-area-y, 0px) + env(safe-area-inset-=
top, 0px)); --screen-anchor-top: var(--safe-area-top); }

._screen_cundf_1:where([screen-anchor=3D"vertical"], [screen-anchor=3D"bott=
om"]) { --safe-area-bottom: env(safe-area-inset-bottom,0px); --keyboard-saf=
e-area-bottom: max(var(--screen-keyboard-height),env(keyboard-inset-height,=
0px)); --screen-anchor-bottom: var(--safe-area-bottom); }

._parent_1862s_1 { container: screen-composer / inline-size; display: flex;=
 height: var(--screen-height,100%); width: var(--screen-width,100%); }

._screenComposer_1862s_8 { --screen-content_sidebar-width: var(--sidebar_is=
_closed,0) var(--sidebar_is_open,minmax(0,auto)); display: grid; flex: 1 1 =
0%; grid-template-areas: "banner banner banner banner debugger" "sidebar he=
ader header header debugger" "sidebar thread thread-extended-info details d=
ebugger" "footer footer footer footer debugger"; }

@supports not (width:100cqw) {
  ._screenComposer_1862s_8 { grid-template-columns: [sidebar-start] var(--s=
creen-content_sidebar-width,minmax(0,auto)) [sidebar-end thread-start] minm=
ax(min(var(--screen-thread_min-width),100vw),1fr) [thread-end thread-extend=
ed-info-start] minmax(0,var(--screen-thread-extended-info_width,auto)) [thr=
ead-extended-info-end details-start] minmax(0,var(--screen-details_width,au=
to)) [details-end debugger-start] minmax(0,min-content) [debugger-end]; }
}

@supports (width:100cqw) {
  ._screenComposer_1862s_8 { grid-template-columns: [sidebar-start] var(--s=
creen-content_sidebar-width,minmax(0,auto)) [sidebar-end thread-start] minm=
ax(min(var(--screen-thread_min-width),100cqw),1fr) [thread-end thread-exten=
ded-info-start] minmax(0,var(--screen-thread-extended-info_width,auto)) [th=
read-extended-info-end details-start] minmax(0,var(--screen-details_width,a=
uto)) [details-end debugger-start] minmax(0,min-content) [debugger-end]; }
}

._screenComposer_1862s_8 { grid-template-rows: [banner-start] auto [banner-=
end header-start] auto [header-end content-start] 1fr [content-end footer-s=
tart] auto [footer-end]; transition-duration: ; transition-timing-function:=
 ; transition-delay: ; transition-behavior: ; transition-property: grid-tem=
plate-columns; }

@media (prefers-reduced-motion: reduce) {
  ._screenComposer_1862s_8 { transition: none; }
}

._screenComposer_1862s_8:has(._details_1862s_58:empty) { --screen-details_w=
idth: 0; }

._screenComposer_1862s_8:has(._threadExtendedInfo_1862s_62:empty) { --scree=
n-thread-extended-info_width: 0; }

._banner_1862s_66 { grid-area: banner; }

._sidebar_1862s_70 { --bg-lightness: var( --sidebar_is_floating,var(--sideb=
ar-surface-floating-lightness) ) var(--sidebar_is_pinned,var(--sidebar-surf=
ace-pinned-lightness)); --bg-alpha: var(--sidebar_is_floating,var(--sidebar=
-surface-floating-alpha)) var(--sidebar_is_pinned,var(--sidebar-surface-pin=
ned-alpha)); --sidebar-surface: oklch(var(--bg-lightness) 0 0/var(--bg-alph=
a)); --shadow-alpha: var(--sidebar_is_floating,.1) var(--sidebar_is_pinned,=
0); --default-blur: var( --sidebar_is_floating,blur(0px) ); }

@supports not (color:oklch(.99 0 0)) {
  ._sidebar_1862s_70 { --sidebar-surface: var(--sidebar-surface-primary); }
}

._sidebar_1862s_70 { background-color: var(--sidebar-surface); box-shadow: =
0 20px 25px -5px rgb(0 0 0/var(--shadow-alpha)),0 8px 10px -6px rgb(0 0 0/v=
ar(--shadow-alpha)); display: var(--sidebar_is_closed,none) var(--sidebar_i=
s_open,var(--sidebar-display,flex)); flex-direction: column; grid-area: var=
(--sidebar_is_pinned,sidebar) var(--sidebar_is_floating,thread); }

@supports not (height:100cqh) {
  ._sidebar_1862s_70 { height: var(--screen-sidebar-height,100vh); }
}

@supports (height:100cqh) {
  ._sidebar_1862s_70 { height: var(--screen-sidebar-height,100cqh); }
}

._sidebar_1862s_70 { overflow-clip-margin: 20px; view-transition-name: var(=
--sidebar-transition-name,sidebar); --sidebar_should_light_dismiss: var(--s=
idebar_is_floating,1); max-width: var(--screen-sidebar-max-width,280px); op=
acity: var( --vt-disable-sidebar-transition,var(--sidebar_is_closed,0) var(=
--sidebar_is_open,1) ); overflow: clip; pointer-events: var(--sidebar_is_cl=
osed,none); transition: var( --vt-disable-sidebar-transition,translate .3s =
var(--easing-common),box-shadow .2s var(--easing-common),background-color .=
1s var(--easing-common),--shadow-alpha .2s var(--easing-common),--bg-alpha =
.2s var(--easing-common),--bg-lightness .2s var(--easing-common),--sidebar-=
surface .2s var(--easing-common),opacity var(--sidebar_is_closed,.1s) var(-=
-sidebar_is_open,75ms) linear ); translate: var(--sidebar_is_closed,-100%) =
var(--sidebar_is_open,0); z-index: var(--slot-sidebar-z-index,22); }

@media (prefers-reduced-motion: reduce) {
  ._sidebar_1862s_70 { transition: none; }
}

._registeredScreenProperties_1862s_139 { }

._header_1862s_165 { display: var(--slot-header-display,block); grid-area: =
header; }

._thread_1862s_62 { view-transition-name: var(--thread-transition-name,thre=
ad); display: var(--slot-thread-display,flex); grid-area: thread; position:=
 relative; transition: .45s var(--easing-common) translate; translate: var(=
--screen-thread-translate); }

._details_1862s_58 { view-transition-name: var(--details-transition-name,de=
tails); display: var(--slot-details-display,block); grid-area: details; }

._threadExtendedInfo_1862s_62 { view-transition-name: var( --thread-extende=
d-info-transition-name,threadExtendedInfo ); display: block; grid-area: thr=
ead-extended-info; min-width: var( --screen-thread-extended-info_width,var(=
--screen-thread-extended-info_min-width) ); position: relative; }

._footer_1862s_199 { display: var(--slot-footer-display,block); grid-area: =
footer; }

._debugger_1862s_204 { grid-area: debugger; max-height: 100%; overflow-y: a=
uto; }

._debugger_1862s_204:not(:empty) { z-index: 1; }

@container screen-composer (max-width: 700px) {
  ._screenComposer_1862s_8 { grid-template-areas: "banner banner" "sidebar =
header" "sidebar thread" "sidebar details" "thread-extended-info thread-ext=
ended-info" "footer footer"; }
  ._screenComposer_1862s_8:has(input[type=3D"checkbox"][name=3D"thread-exte=
nded-info-sidebar-state"]:not(:checked)) { grid-template-columns: minmax(0p=
x, auto) minmax(0px, 1fr); }
  ._thread_1862s_62 { grid-row: thread; }
  ._details_1862s_58 { display: none; }
  ._details_1862s_58, ._header_1862s_165 { grid-row: 2 / span 2; }
  ._header_1862s_165 { align-self: start; z-index: 10; }
}

@container screen-composer (max-width: 1024px) {
  :scope:has(input[type=3D"checkbox"][name=3D"thread-extended-info-sidebar-=
state"]:checked) ._screenComposer_1862s_8 { grid-template: "thread-extended=
-info" minmax(0px, 1fr) / minmax(0px, 1fr); }
  :scope:has(input[type=3D"checkbox"][name=3D"thread-extended-info-sidebar-=
state"]:checked) ._sidebar_1862s_70 { --screen-sidebar_min-width: 0; transi=
tion-duration: ; transition-timing-function: ; transition-delay: ; transiti=
on-behavior: ; transition-property: transform, min-width; }
  [dir=3D"ltr"] :scope:has(input[type=3D"checkbox"][name=3D"thread-extended=
-info-sidebar-state"]:checked) ._sidebar_1862s_70 { transform: translate(-1=
00%); }
  [dir=3D"rtl"] :scope:has(input[type=3D"checkbox"][name=3D"thread-extended=
-info-sidebar-state"]:checked) ._sidebar_1862s_70 { transform: translate(10=
0%); }
  :scope:has(input[type=3D"checkbox"][name=3D"thread-extended-info-sidebar-=
state"]:checked) ._thread_1862s_62 { display: none; }
}

._wrapper_1i27t_1 { border-radius: 8px; cursor: pointer; display: inline-fl=
ex; height: 44px; user-select: none; width: 44px; }

._wrapper_1i27t_1 > input[type=3D"checkbox"] { display: none; }

._wrapper_1i27t_1 { color: var(--icon-secondary); }

._wrapper_1i27t_1:hover { --hover-background: var(--main-surface-secondary)=
; }

._label_1i27t_20 { align-items: center; background-color: var(--hover-backg=
round); border-radius: 8px; color: var(--text-secondary); display: flex; fl=
ex: 1 1 0%; justify-content: center; transition: background-color 0.1s line=
ar; }

._application_w1fgq_1 { --screen-thread_min-width: 400px; --screen-sidebar_=
min-width: 280px; --screen-sidebar-panel-width: 0px; }

@supports not (width:100cqw) {
  ._application_w1fgq_1 { --screen-thread-extended-info_min-width: min(400p=
x,100dvw); }
}

@supports (width:100cqw) {
  ._application_w1fgq_1 { --screen-thread-extended-info_min-width: min(400p=
x,100cqw); }
}

._application_w1fgq_1 { --thread-aside-panel_min-width: 0px; --screen-threa=
d-header-min-height: 60px; --screen-sidebar-popover-min-width: calc(var(--s=
creen-sidebar_min-width) - 24px); --sidebar_open_state: var(--sidebar_is_cl=
osed); --sidebar_is_closed: var(--sidebar_open_state,); --sidebar_is_open: =
var(--sidebar_open_state,); --sidebar_pinned_state: var(--sidebar_pinned_of=
f); --sidebar_pinned_off: var(--sidebar_pinned_state,); --sidebar_pinned_on=
: var(--sidebar_pinned_state,); --sidebar_pin_availability: var(--sidebar_p=
in_enabled); --sidebar_pin_enabled: var(--sidebar_pin_availability,); --sid=
ebar_pin_disabled: var(--sidebar_pin_availability,); --sidebar_is_pinned: v=
ar(--sidebar_pinned_on,var(--sidebar_pin_enabled)); --sidebar_is_floating: =
var(--sidebar_pinned_off) var(--sidebar_pin_disabled); --sidebar_is_open_an=
d_pinned: var( --sidebar_is_open,var(--sidebar_is_pinned) ); --sidebar_is_c=
losed_or_floating: var( --sidebar_is_closed,var(--sidebar_is_floating) ); -=
-thread_scrolled_to_bottom: var(--thread_is_not_scrolled_to_bottom); --thre=
ad_is_scrolled_to_bottom: var(--thread_scrolled_to_bottom,); --thread_is_no=
t_scrolled_to_bottom: var(--thread_scrolled_to_bottom,); --screen-sidebar-c=
onsumed-width: var(--sidebar_is_closed_or_floating,0px) var(--sidebar_is_op=
en_and_pinned,var(--screen-sidebar-panel-width)); }

@supports not (width:100cqw) {
  ._application_w1fgq_1 { --available-details-width: calc(100% - var(--scre=
en-thread_min-width) - var(--screen-sidebar-consumed-width) - var(--thread-=
aside-panel_min-width)); }
}

@supports (width:100cqw) {
  ._application_w1fgq_1 { --available-details-width: calc(100cqw - var(--sc=
reen-thread_min-width) - var(--screen-sidebar-consumed-width) - var(--threa=
d-aside-panel_min-width)); }
}

._application_w1fgq_1:has(input[name=3D"sidebar_opened"]:checked) { --sideb=
ar_open_state: var(--sidebar_is_open); --screen-sidebar-panel-width: var(--=
screen-sidebar_min-width); }

._application_w1fgq_1:has(input[name=3D"sidebar_pinned"]:checked) { --sideb=
ar_pinned_state: var(--sidebar_pinned_on); }

._application_w1fgq_1:has(input[name=3D"thread_is_scrolled_to_bottom"]:chec=
ked) { --thread_scrolled_to_bottom: var(--thread_is_scrolled_to_bottom); }

._application_w1fgq_1:has(input[name=3D"thread-extended-info-sidebar-state"=
]:checked) { --thread-aside-panel_min-width: 400px; }

@container screen-composer (max-width: 768px) {
  ._application_w1fgq_1._withCanvasFocusedView_w1fgq_81 { --sidebar_pin_ava=
ilability: var(--sidebar_pin_disabled); }
}

._application_w1fgq_1._withEmbeddedFocusedView_w1fgq_88._withEmbeddedFocuse=
dView_w1fgq_88._withEmbeddedFocusedView_w1fgq_88 { --sidebar_open_state: va=
r(--sidebar_is_closed); }

@container screen-composer (max-width: 768px) {
  ._application_w1fgq_1 { --sidebar_pin_availability: var(--sidebar_pin_dis=
abled); }
}

._screen_1kiuw_1 { --sidebar-sticky-header-height: 40px; --screen-content-p=
osition: static; --sidebar-leading-slot-height: var(--sidebar-leading-heigh=
t,152px); --sidebar-sticky-threshold: calc(var(--sidebar-leading-slot-heigh=
t) - var(--sidebar-sticky-header-height)); }

._screen_1kiuw_1 ._text-sm_1kiuw_9 { font-size: 15px; }

._screen_1kiuw_1 [slot=3D"content"] { margin-top: -20px; padding-block-end:=
 5svh; padding-inline-start: 6px; }

._screen_1kiuw_1 { --occluding-background: var( --sidebar_is_floating,oklch=
(var(--sidebar-surface-floating-lightness) 0 0/.98) ) var(--sidebar_is_pinn=
ed,var(--sidebar-surface)); --occluding-gradient: linear-gradient(90deg,var=
(--occluding-background) 0%,var(--occluding-background) 70%,var(--occluding=
-background) 100%); --sticky-title-offset: calc(var(--sidebar-leading-slot-=
height) - var(--sidebar-sticky-header-height, 40px) + 4px); }

._screen_1kiuw_1 [slot=3D"leading"] { --slot-offset: 4px; --floating-backgr=
ound: linear-gradient(180deg,oklch(var(--sidebar-surface-floating-lightness=
) 0 0/.95) calc(var(--sidebar-leading-slot-height) - var(--slot-offset)),tr=
ansparent calc(var(--sidebar-leading-slot-height) - var(--slot-offset))); -=
-primary-background: linear-gradient(180deg,var(--sidebar-surface) calc(var=
(--sidebar-leading-slot-height) - var(--slot-offset)),transparent calc(var(=
--sidebar-leading-slot-height) - var(--slot-offset))); backdrop-filter: blu=
r(30px); background-image: var(--sidebar_is_floating,var(--floating-backgro=
und)) var(--sidebar_is_pinned,var(--primary-background)); mask-image: linea=
r-gradient(0deg, transparent 4px, rgb(0, 0, 0) 0px); }

._togglePinWrapper_1kiuw_56 { align-self: center; display: var(--sidebar_pi=
n_disabled,none) var(--sidebar_pin_enabled,grid); }

._closeSidebarAction_1kiuw_61 { view-transition-name: var(--sidebar_is_pinn=
ed,toggle-sidebar-icon); color: var(--icon-secondary); display: var(--sideb=
ar_is_closed,none) var(--sidebar_is_open,inline-flex); grid-area: 1 / 1; }

._sidebarIcon_1kiuw_69 { stroke-width: 1.5px; height: 24px; width: 24px; }

._pinSidebarAction_1kiuw_75 { color: var(--icon-secondary); display: inline=
-flex; }

._searchAction_1kiuw_80 { display: inline-flex; }

._screenHeader_1kiuw_84 { --bar-background-color: transparent; align-items:=
 flex-start; display: flex; flex-direction: column; gap: 5px; margin-inline=
: var(--sidebar-inline-padding); position: sticky; top: 0px; }

._bucketBar_1kiuw_96 { --bar-background-color: transparent; min-height: var=
(--sidebar-sticky-header-height); }

._screenContent_1kiuw_101 { color: var(--sidebar-body-primary); margin-bloc=
k-start: calc(var(--sidebar-sticky-header-height)*-1); padding-block-start:=
 20px; padding-inline: var(--sidebar-inline-padding); }

._screenTrailingBarContainer_1kiuw_109 { --bar-gap: 2px; backdrop-filter: v=
ar(--sidebar_is_floating,blur(30px)); background: var(--sidebar_is_pinned,v=
ar(--sidebar-surface)) var(--sidebar_is_floating,oklch(var(--bg-lightness) =
0 0/.99)); padding-block: 0.25rem 8px; }

._screen_hu1v5_1 { --screen-inline-padding: var(--screen-inline-padding-ove=
rride,12px); --screen-block-padding: 12px; --previous-turn-min-height: 120p=
x; --screen-combined-inline-padding: calc(var(--screen-inline-padding)*2); =
--screen-content-inline-padding: 0; --screen-leading-slot-z-index: 21; --sc=
reen-optical-offset-amount: -5cqh; --conversation-state: var(--conversation=
-state--existing); --conversation-state--empty: var(--conversation-state,);=
 --conversation-state--existing: var(--conversation-state,); flex: 1 1 0%; =
position: relative; }

@supports not (width:100cqw) {
  ._screen_hu1v5_1 { --container-w-except-padding: calc(100% - var(--screen=
-combined-inline-padding)); }
}

@supports (width:100cqw) {
  ._screen_hu1v5_1 { --container-w-except-padding: calc(100cqw - var(--scre=
en-combined-inline-padding)); }
}

._screen_hu1v5_1 [slot=3D"content"], ._screen_hu1v5_1 [slot=3D"leading"], .=
_screen_hu1v5_1 [slot=3D"trailing"] { --screen-content-ideal-size: 40rem; }

@container thread (min-width: 800px) {
  ._screen_hu1v5_1 [slot=3D"content"], ._screen_hu1v5_1 [slot=3D"leading"],=
 ._screen_hu1v5_1 [slot=3D"trailing"] { --screen-content-ideal-size: 48rem;=
 --screen-inline-padding: 0; }
}

@container thread (max-width: 600px) {
  ._screen_hu1v5_1 [slot=3D"content"], ._screen_hu1v5_1 [slot=3D"leading"],=
 ._screen_hu1v5_1 [slot=3D"trailing"] { --screen-inline-padding: var(--scre=
en-inline-padding-override,8px); --screen-inline-padding-offset: var( --scr=
een-inline-padding-offset-override,18px ); }
}

._screen_hu1v5_1 [slot=3D"content"], ._screen_hu1v5_1 [slot=3D"trailing"] {=
 display: grid; grid-template-columns: minmax(0px, 1fr); justify-self: cent=
er; }

._screen_hu1v5_1 [slot=3D"content"] { align-self: var(--conversation-state-=
-empty,center) var(--conversation-state--existing,auto); margin-block-start=
: var( --conversation-state--empty,calc(var(--screen-block-padding) - var(-=
-thread-leading-height)) ) var(--conversation-state--existing,var(--screen-=
block-padding)); overscroll-behavior: contain; scroll-margin-bottom: var(--=
thread-trailing-height); width: 100%; }

._screen_hu1v5_1._screenEmbedded_hu1v5_64 { height: 100%; }

._screen_hu1v5_1._screenEmptyState_hu1v5_69, ._screen_hu1v5_1:has([name=3D"=
temporary-chat-checkbox"]:checked) { --screen-optical-offset-amount: 0; --s=
creen-optical-compact-offset-amount: calc(var(--osk-height-multiplier, -1)*=
var(--thread-leading-height, 60px)); height: var( --screen-height,calc(var(=
--screen-height-override, 100%) - var(--screen-height-offset, env(keyboard-=
inset-height, 0px))) ); }

@container thread-container (min-width: 1024px) {
  ._screen_hu1v5_1._screenEmptyState_hu1v5_69, ._screen_hu1v5_1:has([name=
=3D"temporary-chat-checkbox"]:checked) { --screen-optical-offset-amount: ca=
lc(var(--thread-leading-height, 60px)*-1); --screen-optical-compact-offset-=
amount: 0; }
}

._screen_hu1v5_1._screenEmptyState_hu1v5_69 [slot=3D"content"], ._screen_hu=
1v5_1:has([name=3D"temporary-chat-checkbox"]:checked) [slot=3D"content"] { =
height: 100%; margin-block-start: 0px; }

._screen_hu1v5_1._screenEmptyState_hu1v5_69 { grid-template-rows: max-conte=
nt 1fr 0px auto; }

._screen_hu1v5_1 [slot=3D"trailing"] { --composer-bar-half-height: calc(var=
(--composer-bar-height, 120px)/2); width: 100%; }

._screen_hu1v5_1 [slot=3D"trailing"]::before { --content-gradient: linear-g=
radient(0deg,#d9d9d9,hsla(0,0%,85%,.99) 8.07%,hsla(0,0%,84%,.98) 15.54%,hsl=
a(0,0%,83%,.95) 22.5%,hsla(0,0%,82%,.92) 29.04%,hsla(0,0%,80%,.87) 35.26%,h=
sla(0,0%,78%,.82) 41.25%,hsla(0,0%,75%,.75) 47.1%,hsla(0,0%,72%,.68) 52.9%,=
hsla(0,0%,69%,.6) 58.75%,hsla(0,0%,66%,.52) 64.74%,hsla(0,0%,62%,.42) 70.96=
%,hsla(0,0%,58%,.33) 77.5%,hsla(0,0%,54%,.22) 84.46%,hsla(0,0%,50%,.11) 91.=
93%,hsla(0,0%,45%,0)); }

@supports (color:oklch(.89 0 0)) {
  ._screen_hu1v5_1 [slot=3D"trailing"]::before { --content-gradient: linear=
-gradient(0deg,oklch(.89 0 0),oklch(.88 0 0/.99) 8.07%,oklch(.88 0 0/.98) 1=
5.54%,oklch(.87 0 0/.95) 22.5%,oklch(.86 0 0/.92) 29.04%,oklch(.85 0 0/.87)=
 35.26%,oklch(.83 0 0/.82) 41.25%,oklch(.81 0 0/.75) 47.1%,oklch(.78 0 0/.6=
8) 52.9%,oklch(.76 0 0/.6) 58.75%,oklch(.73 0 0/.52) 64.74%,oklch(.7 0 0/.4=
2) 70.96%,oklch(.67 0 0/.33) 77.5%,oklch(.63 0 0/.22) 84.46%,oklch(.6 0 0/.=
11) 91.93%,oklch(.55 0 0/0)); }
}

._screen_hu1v5_1 [slot=3D"trailing"]::before { bottom: calc(var(--thread-tr=
ailing-height) - var(--composer-bar-half-height)); display: var(--conversat=
ion-state--empty,none) var(--conversation-state--existing,block); height: c=
alc(var(--composer-bar-height, 120px) - 35px); mask-image: var(--content-gr=
adient); mask-mode: luminance; opacity: var(--composer-mask-opacity,1); poi=
nter-events: none; }

._screen_hu1v5_1 [slot=3D"trailing"]::after, ._screen_hu1v5_1 [slot=3D"trai=
ling"]::before { background: var( --chat-screen-thread-parent-background,va=
r(--main-surface-primary) ); content: ""; left: 0px; position: absolute; ri=
ght: 0px; width: 100%; z-index: -1; }

._screen_hu1v5_1 [slot=3D"trailing"]::after { bottom: 0px; display: block; =
height: calc(var(--thread-trailing-height) - var(--composer-bar-half-height=
)); top: var(--composer-bar-half-height); }

._scrollButton_hu1v5_187 { opacity: var(--thread_is_scrolled_to_bottom,0); =
transform-origin: center bottom; transition: all .1s var(--spring-fast); tr=
anslate: var(--thread_is_scrolled_to_bottom,0 6px); visibility: var(--threa=
d_is_scrolled_to_bottom,hidden); }

@starting-style {
  ._scrollButton_hu1v5_187 { display: none; }
}

._conversationTurnList_hu1v5_199 { margin-bottom: 2.5rem; width: 100%; }

._conversationTurnList_hu1v5_199, ._staticSharedThreadHeader_hu1v5_203 { al=
ign-items: center; display: flex; flex-direction: column; gap: 1rem; }

@supports not (width:100cqw) {
  ._staticSharedThreadHeader_hu1v5_203 > * { width: var( --conversation-wid=
th,min(var(--screen-content-ideal-size,40rem),calc(100% - var(--screen-comb=
ined-inline-padding) + var(--screen-inline-padding-offset, 0px))) ); }
}

@supports (width:100cqw) {
  ._staticSharedThreadHeader_hu1v5_203 > * { width: var( --conversation-wid=
th,min(var(--screen-content-ideal-size,40rem),calc(100cqw - var(--screen-co=
mbined-inline-padding) + var(--screen-inline-padding-offset, 0px))) ); }
}

._conversationTurnWrapper_hu1v5_234 { --tw-contain-size: inline-size; conta=
in: var(--tw-contain-size) var(--tw-contain-layout) var(--tw-contain-paint)=
 var(--tw-contain-style); }

._conversationTurnWrapper_hu1v5_234:empty { display: none; }

[dir=3D"ltr"] ._conversationTurnWrapper_hu1v5_234 { padding-left: var( --co=
nversation-turn-wrapper-padding-left-override,1.25rem ); padding-right: var=
( --conversation-turn-wrapper-padding-right-override,1.25rem ); }

[dir=3D"rtl"] ._conversationTurnWrapper_hu1v5_234 { padding-left: var( --co=
nversation-turn-wrapper-padding-right-override,1.25rem ); padding-right: va=
r( --conversation-turn-wrapper-padding-left-override,1.25rem ); }

@supports not (width:100cqw) {
  ._conversationTurnWrapper_hu1v5_234 { width: var( --conversation-width,mi=
n(var(--screen-content-ideal-size,40rem),calc(100% - var(--screen-combined-=
inline-padding) + var(--screen-inline-padding-offset, 0px))) ); }
}

@supports (width:100cqw) {
  ._conversationTurnWrapper_hu1v5_234 { width: var( --conversation-width,mi=
n(var(--screen-content-ideal-size,40rem),calc(100cqw - var(--screen-combine=
d-inline-padding) + var(--screen-inline-padding-offset, 0px))) ); }
}

._conversationTurnWrapper_hu1v5_234:has([data-paragen-root]) { width: 100cq=
w; }

@container (max-width: 600px) {
  [dir=3D"ltr"] ._conversationTurnWrapper_hu1v5_234 { padding-left: var( --=
conversation-turn-wrapper-padding-left-override,1.75rem ); padding-right: v=
ar( --conversation-turn-wrapper-padding-right-override,1.75rem ); }
  [dir=3D"rtl"] ._conversationTurnWrapper_hu1v5_234 { padding-left: var( --=
conversation-turn-wrapper-padding-right-override,1.75rem ); padding-right: =
var( --conversation-turn-wrapper-padding-left-override,1.75rem ); }
}

._newThread_hu1v5_287 { border-radius: 0.5rem; display: var(--sidebar_is_op=
en_and_pinned,none); }

._screenEmptyState_hu1v5_69 { --conversation-state: var(--conversation-stat=
e--empty); }

._openSidebar_hu1v5_296 { view-transition-name: var(--sidebar_is_closed,tog=
gle-sidebar-icon); display: inline-flex; pointer-events: var(--sidebar_is_o=
pen,none); position: var(--sidebar_is_open_and_pinned,absolute); visibility=
: var(--sidebar_is_open_and_pinned,hidden); }

[dir=3D"ltr"] ._openSidebar_hu1v5_296 { margin-right: 0px; }

[dir=3D"rtl"] ._openSidebar_hu1v5_296 { margin-left: 0px; }

._threadDropdown_hu1v5_305 { view-transition-name: var(--vt_model_picker); =
display: flex; justify-content: center; width: 100%; }

[dir=3D"ltr"] ._threadDropdown_hu1v5_305 { margin-left: 2px; }

[dir=3D"rtl"] ._threadDropdown_hu1v5_305 { margin-right: 2px; }

._profileInContent_hu1v5_313 { bottom: 18px; display: var(--sidebar_is_open=
,none); opacity: var(--sidebar_is_closed,1); position: fixed; z-index: 30; =
}

[dir=3D"ltr"] ._profileInContent_hu1v5_313 { left: 16px; }

[dir=3D"rtl"] ._profileInContent_hu1v5_313 { right: 16px; }

@container thread-container (max-width: 870px) {
  ._profileInContent_hu1v5_313 { display: none; }
}

._screenCompanionWindow_hu1v5_328 { --screen-block-padding: 0; position: fi=
xed; top: var(--screen-titlebar-height,32px); }

._screenInstalledApp_hu1v5_334 { --screen-optical-offset-amount: 0; }

._header_hu1v5_338 { background: var(--main-surface-primary); display: grid=
; grid-template-areas: "leading center trailing"; grid-template-columns: mi=
nmax(0px, auto) minmax(0px, 2fr) minmax(0px, auto); justify-content: space-=
between; min-height: calc(var(--screen-thread-header-min-height, 60px) + 1p=
x); padding-inline: var(--sidebar-inline-padding); }

@container thread-container (max-width: 600px) {
  ._header_hu1v5_338 { grid-template-columns: minmax(0px, 1fr) minmax(0px, =
auto) minmax(0px, auto); }
}

._headerLeading_hu1v5_353 { align-items: center; display: flex; gap: 0px; g=
rid-area: leading; overflow-x: clip; }

._headerTrailing_hu1v5_361 { display: flex; grid-area: trailing; }

._headerCenter_hu1v5_366 { align-items: center; display: flex; grid-area: c=
enter; justify-content: center; }

._footer_hu1v5_373 { display: var(--conversation-state--empty,none); justif=
y-self: center; padding-block-end: var(--screen-block-padding); padding-inl=
ine: var(--screen-inline-padding); width: min(var(--screen-content-ideal-si=
ze,40rem),var(--container-w-except-padding)); }

@media (prefers-reduced-motion: reduce) {
  ._btn_5l021_1 svg path { transition: none; }
}

._btn_5l021_1 svg > path { stroke: currentcolor; transition: 0.3s; }

[dir=3D"ltr"] ._btn_5l021_1 svg > path { transform: var(--sidebar_is_pinned=
,translateX(16px)) var(--sidebar_is_floating,translateX(0)); }

[dir=3D"rtl"] ._btn_5l021_1 svg > path { transform: var(--sidebar_is_pinned=
,translateX(-16px)) var(--sidebar_is_floating,translateX(0)); }

@media (prefers-reduced-motion: reduce) {
  ._btn_5l021_1 svg > path { transition: none; }
}

._btn_5l021_1 svg { stroke: currentcolor; stroke-width: 2; stroke-linecap: =
round; stroke-linejoin: round; transition: 0.3s; }

@media (prefers-reduced-motion: reduce) {
  ._btn_5l021_1 svg { transition: none; }
}

._rightArrow_5l021_28 { opacity: var(--sidebar_is_pinned,0) var(--sidebar_i=
s_floating,1); transform-origin: center center; transition: 0.3s; }

[dir=3D"ltr"] ._rightArrow_5l021_28 { transform: var(--sidebar_is_floating,=
translateX(0)) var(--sidebar_is_pinned,translateX(-6px) scale(0)); }

[dir=3D"rtl"] ._rightArrow_5l021_28 { transform: var(--sidebar_is_floating,=
translateX(0)) var(--sidebar_is_pinned,translateX(6px) scale(0)); }

@media (prefers-reduced-motion: reduce) {
  ._rightArrow_5l021_28 { transition: none; }
}

._leftArrow_5l021_39 { opacity: var(--sidebar_is_pinned,1) var(--sidebar_is=
_floating,0); transform-origin: center center; }

[dir=3D"ltr"] ._leftArrow_5l021_39 { transform: var(--sidebar_is_pinned,tra=
nslateX(0) scale(1)) var(--sidebar_is_floating,translateX(6px) scale(0)); }

[dir=3D"rtl"] ._leftArrow_5l021_39 { transform: var(--sidebar_is_pinned,tra=
nslateX(0) scale(1)) var(--sidebar_is_floating,translateX(-6px) scale(0)); =
}

@media (prefers-reduced-motion: reduce) {
  ._leftArrow_5l021_39 { transition: none; }
}

.composer-parent { --composer-footer_height: var(--composer-bar_footer-curr=
ent-height,32px); --composer-bar_height: var(--composer-bar_current-height,=
52px); --composer-bar_width: var(--composer-bar_current-width,768px); --mas=
k-fill: linear-gradient(180deg,#fff 0%,#fff); --mask-erase: linear-gradient=
(180deg,#000 0%,#000); }

.masked-content { --content-gradient: linear-gradient(0deg,#d9d9d9,hsla(0,0=
%,85%,.99) 8.07%,hsla(0,0%,84%,.98) 15.54%,hsla(0,0%,83%,.95) 22.5%,hsla(0,=
0%,82%,.92) 29.04%,hsla(0,0%,80%,.87) 35.26%,hsla(0,0%,78%,.82) 41.25%,hsla=
(0,0%,75%,.75) 47.1%,hsla(0,0%,72%,.68) 52.9%,hsla(0,0%,69%,.6) 58.75%,hsla=
(0,0%,66%,.52) 64.74%,hsla(0,0%,62%,.42) 70.96%,hsla(0,0%,58%,.33) 77.5%,hs=
la(0,0%,54%,.22) 84.46%,hsla(0,0%,50%,.11) 91.93%,hsla(0,0%,45%,0)); --comp=
oser-bar_safe-margins: 20px; mask-composite: subtract; mask-image: var(--ma=
sk-fill),var(--content-gradient),var(--composer-bar_skeleton); mask-mode: l=
uminance; mask-position: top center,center calc(100% - var(--composer-foote=
r_height)),center calc(100% - var(--composer-footer_height)); mask-repeat: =
no-repeat; mask-size: auto,calc(100% - var(--composer-bar_safe-margins)) ca=
lc(var(--composer-bar_height) + var(--composer-bar_mask-grace-area)),var(--=
composer-bar_width) var(--composer-bar_height); }

@media (prefers-reduced-transparency: reduce) {
  .masked-content { mask-image: none; }
}

.mask-scrollbars { --scrollbar-width: 10px; clip-path: inset(-100svh var(--=
scrollbar-width) 0 0); }

.bg-thread--header { background: linear-gradient(to bottom,transparent 0,tr=
ansparent 50%,var(--main-surface-primary) 50%,var(--main-surface-primary) 1=
00%); height: var(--composer-bar_height); mask-composite: subtract; mask-im=
age: var(--mask-fill),var(--composer-bar_skeleton); mask-mode: luminance; m=
ask-position: center top, center top; mask-repeat: no-repeat; mask-size: au=
to; }

@media (prefers-reduced-transparency: reduce) {
  .bg-thread--header { mask-image: none; }
}

.bg-thread--footer { background: var(--main-surface-primary); flex: 1 1 0%;=
 }

@font-face { font-display: swap; font-family: Circle; font-style: normal; f=
ont-weight: 400; src: url("data:font/woff2;base64,d09GMk9UVE8AAAM0AAkAAAAAB=
cgAAALuAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADYJIBmAAfgE2AiQDDAQGBYRyByAbIwVRlKvJ=
FsDPBJtObcFDgzooFmKOOuZpZMG4Jg7aB8Nn8fzDvXrufz9r8tgCAU4XFVvjosSo0yqWv9Z+b8+=
+or6Y3y3ikk0laqIkfBkSQzINien2vweAH79N8JdohCbbWndr/HZ5v86kXxrEqV+cqnlKNBcLjY=
0Bj8Ka512LSgsolgt1Wa1Wr27atM/jBW21RrW55g21jw81IoJNHn2c/z24BlCQTVVvW09zVvtAY=
1dzeOZwYxugoDCNO2g8kMZDDRpPRuPFajC3qWY31RzV9+loj/h/e6ud/0/bfxcbEILkKpVrQNhw=
TzuJycoVI0S9RjZZES7WjkQvApCsAhsUn3SuWdP3UZ0zRZT+X1OW1h0OGr9NflM3xRvmiClHqQO=
Rzvz/tQbQb7L8b7XUFdZrb+h13MhqctFw/8PP+snI1CnebrExOvET/Fh/hn+knPwQZw89wnNvi+=
62ERUZoHLr9BC1nCwROqghul1go6hTCVTs54ZppNw6x+jkYtzYdoEMTuGT8KCP/A/hDIeWUloqM=
4VXWm2g5T0CrvPF5g3kAs04zXJGkI7P96za7LmtKwgBAmhGzB07gBpPeEUAKyzEwwWJxIBzFaQe=
HZwg6BYQxo6W2Qwz739fUTpv+v/c+Xy3Sv6VF/uN3w8uFpdbNkDuXnWVGkBhvGn75R1LYEgq295=
Z+QHimbpBIbxAAQtPAhA2QAAaMjYQQHHzONnK8R1EFN9lrZmfUxvmFzjzl5dsLLNQqwDEx+49z7=
B0yrNi3SQ58LwmAy/AqeOtOWduzoY8+2s/wMFgbxAWiEesMNZAalIE2r8JllitrXeokZEbwVJpR=
0hSXFLwa+wftjSPNWMSERMRGxMrEi0DVYcfdnhxQ66Eqt62nmYsq32gsaspM4cb2ypPtQ531Q+I=
Ioj9J0lKy0pzkjTFKxoOtd8ODLb39mD0t/UONT71Ry6QDBlaIonr767vbJaUtzSPNQOBmOXFihF=
LROyYXvXnrUOTszoAAA=3D=3D") format("woff2"); }

@font-face { font-display: swap; font-family: Circle; font-style: normal; f=
ont-weight: 600; src: url("data:font/woff2;base64,d09GMk9UVE8AAANIAAkAAAAAB=
kwAAAMCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADYJQBmAAfgE2AiQDDAQGBYVwByAbqQVRlMVN=
BfiRkLl5oxlVNKr4xQKiOJqYMp0zZd4iyiabvWs/aWpaEhyiBiMQGoNCIoys0xiDZnJteLRGXET=
3IpoQq697VFOmBlImcVhpy3pWuy6ZGDJnDoFpIwM96olCINQDUebsKzfc8cml+mMBP82Lfx5kKv=
x3Td2DFtCONwWq1Ru/VIs7/gTVpl7hgkiHscva/P1RKvnkOj2uDshaX5Id6vvRLs7Q7ZY7RUIph=
hAYQskQ6gJDmGIIZ4YIVbgw4aJK86iJ8ai2EeK+a2PFayPSEw4h7uwclpQxdejLyi11M9Iy2h0j=
4eJMBI28mehJINkCFioovm/Yah6VpgBJUm48kUyWnPA1xAhNmKY1S5qwFaT01WKAtvHEg6QZc9t=
odjOVtRlP+hmjzDDS5vtMPD748Cgn0q2zV69y9Mytow/50QcHH4tnHBQWHuslA/3B8O2e6uPdV9=
vO1B/lSKo5WCl4o2ahQUcDvW2kuxvh3SOtegPX6+drRCVHhYM1R9HgaP3ZtqvIQwHcGn6o8wf64=
4VngrsJ4QBWcbQHGrW2K7XgmT5uPpAHTOivlgPGIeL+mbnYY7xhj5AEAtSqfMIBaNDgjWfcMFRm=
HIrAIqAO7J4cqgRylIjSHx27HeBe+8o/qp1Xbb/IqsC9ZI03+w/fbWoexLpPI+sf04PMBbjGKDw=
6XInbdQiytiHo/3RWkeUd9IkyXjTYfUMA4QsCKCpfBGjhAhFgEqQAAWZZygUw+FhGgI2LIwiw40=
4iwEWQixiaHEGSvMqDgqv5QpHqDyV0WChLs4GKVj5Q18zvoKFe1Xk/BxaI0I2NKfxfK8J/W710U=
VzebArQ6NFEpCWN1fGWFBQegKAjSBCctI7wij+coRcCJGQgy7A42Q3Te14v7+6FuamjlQMEsKxd=
JHYlel9kJ5adv7kxHe2kcBAeviIZGBpwSO2aZ7b9TXUzD/i7C8jF1drRAeiL2ZWjm6Rq8sFp4jK=
IQOBI9iJbyNGt7alX974oJIgBsRgsHDkMjr/FbPeiAAAA") format("woff2"); }

*, ::after, ::before { border: 0px solid rgb(227, 227, 227); box-sizing: bo=
rder-box; }

::after, ::before { --tw-content: ""; }

:host, html { text-size-adjust: 100%; font-feature-settings: normal; -webki=
t-tap-highlight-color: transparent; font-family: ui-sans-serif, -apple-syst=
em, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-seri=
f, "Segoe UI Emoji", "Segoe UI Symbol"; font-variation-settings: normal; li=
ne-height: 1.5; tab-size: 4; }

body { line-height: inherit; margin: 0px; }

hr { border-top-width: 1px; color: inherit; height: 0px; }

abbr:where([title]) { text-decoration: underline dotted; }

h1, h2, h3, h4, h5, h6 { font-size: inherit; font-weight: inherit; }

a { color: inherit; text-decoration: inherit; }

b, strong { font-weight: bolder; }

code, kbd, pre, samp { font-feature-settings: normal; font-family: ui-monos=
pace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monosp=
ace; font-size: 1em; font-variation-settings: normal; }

small { font-size: 80%; }

sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-ali=
gn: baseline; }

sub { bottom: -0.25em; }

sup { top: -0.5em; }

table { border-collapse: collapse; border-color: inherit; text-indent: 0px;=
 }

button, input, optgroup, select, textarea { font-feature-settings: inherit;=
 color: inherit; font-family: inherit; font-size: 100%; font-variation-sett=
ings: inherit; font-weight: inherit; letter-spacing: inherit; line-height: =
inherit; margin: 0px; padding: 0px; }

button, select { text-transform: none; }

button, input:where([type=3D"button"]), input:where([type=3D"reset"]), inpu=
t:where([type=3D"submit"]) { appearance: button; background-color: transpar=
ent; background-image: none; }

progress { vertical-align: baseline; }

::-webkit-inner-spin-button, ::-webkit-outer-spin-button { height: auto; }

[type=3D"search"] { appearance: textfield; outline-offset: -2px; }

::-webkit-search-decoration { appearance: none; }

::-webkit-file-upload-button { appearance: button; font: inherit; }

summary { display: list-item; }

blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre { margin: 0p=
x; }

fieldset { margin: 0px; }

fieldset, legend { padding: 0px; }

menu, ol, ul { list-style: none; margin: 0px; padding: 0px; }

dialog { padding: 0px; }

textarea { resize: vertical; }

input::placeholder, textarea::placeholder { color: rgb(180, 180, 180); opac=
ity: 1; }

[role=3D"button"], button { cursor: pointer; }

:disabled { cursor: default; }

audio, canvas, embed, iframe, img, object, svg, video { display: block; ver=
tical-align: middle; }

img, video { height: auto; max-width: 100%; }

[hidden] { display: none; }

[multiple], [type=3D"date"], [type=3D"datetime-local"], [type=3D"email"], [=
type=3D"month"], [type=3D"number"], [type=3D"password"], [type=3D"search"],=
 [type=3D"tel"], [type=3D"text"], [type=3D"time"], [type=3D"url"], [type=3D=
"week"], select, textarea { --tw-shadow: 0 0 #0000; appearance: none; backg=
round-color: rgb(255, 255, 255); border-color: rgb(155, 155, 155); border-r=
adius: 0px; border-width: 1px; font-size: 1rem; line-height: 1.5rem; paddin=
g: 0.5rem 0.75rem; }

[multiple]:focus, [type=3D"date"]:focus, [type=3D"datetime-local"]:focus, [=
type=3D"email"]:focus, [type=3D"month"]:focus, [type=3D"number"]:focus, [ty=
pe=3D"password"]:focus, [type=3D"search"]:focus, [type=3D"tel"]:focus, [typ=
e=3D"text"]:focus, [type=3D"time"]:focus, [type=3D"url"]:focus, [type=3D"we=
ek"]:focus, select:focus, textarea:focus { --tw-ring-offset-width: 0px; --t=
w-ring-offset-color: #fff; --tw-ring-color: #2563eb; --tw-ring-offset-shado=
w: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-off=
set-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--t=
w-ring-offset-width)) var(--tw-ring-color); border-color: rgb(37, 99, 235);=
 box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-sh=
adow); outline: transparent solid 2px; outline-offset: 2px; }

[dir=3D"ltr"] [multiple]:focus, [dir=3D"ltr"] [type=3D"date"]:focus, [dir=
=3D"ltr"] [type=3D"datetime-local"]:focus, [dir=3D"ltr"] [type=3D"email"]:f=
ocus, [dir=3D"ltr"] [type=3D"month"]:focus, [dir=3D"ltr"] [type=3D"number"]=
:focus, [dir=3D"ltr"] [type=3D"password"]:focus, [dir=3D"ltr"] [type=3D"sea=
rch"]:focus, [dir=3D"ltr"] [type=3D"tel"]:focus, [dir=3D"ltr"] [type=3D"tex=
t"]:focus, [dir=3D"ltr"] [type=3D"time"]:focus, [dir=3D"ltr"] [type=3D"url"=
]:focus, [dir=3D"ltr"] [type=3D"week"]:focus, [dir=3D"ltr"] select:focus, [=
dir=3D"ltr"] textarea:focus { --tw-ring-inset: var(--tw-empty, ); }

[dir=3D"rtl"] [multiple]:focus, [dir=3D"rtl"] [type=3D"date"]:focus, [dir=
=3D"rtl"] [type=3D"datetime-local"]:focus, [dir=3D"rtl"] [type=3D"email"]:f=
ocus, [dir=3D"rtl"] [type=3D"month"]:focus, [dir=3D"rtl"] [type=3D"number"]=
:focus, [dir=3D"rtl"] [type=3D"password"]:focus, [dir=3D"rtl"] [type=3D"sea=
rch"]:focus, [dir=3D"rtl"] [type=3D"tel"]:focus, [dir=3D"rtl"] [type=3D"tex=
t"]:focus, [dir=3D"rtl"] [type=3D"time"]:focus, [dir=3D"rtl"] [type=3D"url"=
]:focus, [dir=3D"rtl"] [type=3D"week"]:focus, [dir=3D"rtl"] select:focus, [=
dir=3D"rtl"] textarea:focus { --tw-ring-inset: var(--tw-empty, ); }

input::placeholder, textarea::placeholder { color: rgb(155, 155, 155); opac=
ity: 1; }

::-webkit-datetime-edit-fields-wrapper { padding: 0px; }

::-webkit-date-and-time-value { min-height: 1.5em; }

::-webkit-datetime-edit, ::-webkit-datetime-edit-day-field, ::-webkit-datet=
ime-edit-hour-field, ::-webkit-datetime-edit-meridiem-field, ::-webkit-date=
time-edit-millisecond-field, ::-webkit-datetime-edit-minute-field, ::-webki=
t-datetime-edit-month-field, ::-webkit-datetime-edit-second-field, ::-webki=
t-datetime-edit-year-field { padding-bottom: 0px; padding-top: 0px; }

select { background-image: url("data:image/svg+xml;charset=3Dutf-8,%3Csvg x=
mlns=3D'http://www.w3.org/2000/svg' fill=3D'none' viewBox=3D'0 0 20 20'%3E%=
3Cpath stroke=3D'%239B9B9B' stroke-linecap=3D'round' stroke-linejoin=3D'rou=
nd' stroke-width=3D'1.5' d=3D'm6 8 4 4 4-4'/%3E%3C/svg%3E"); background-rep=
eat: no-repeat; background-size: 1.5em 1.5em; -webkit-print-color-adjust: e=
xact; }

[dir=3D"ltr"] select { background-position: right 0.5rem center; padding-ri=
ght: 2.5rem; }

[dir=3D"rtl"] select { background-position: left 0.5rem center; padding-lef=
t: 2.5rem; }

[multiple] { background-image: none; background-position: 0px 0px; backgrou=
nd-repeat: unset; background-size: initial; -webkit-print-color-adjust: uns=
et; }

[dir=3D"ltr"] [multiple] { padding-right: 0.75rem; }

[dir=3D"rtl"] [multiple] { padding-left: 0.75rem; }

[type=3D"checkbox"], [type=3D"radio"] { --tw-shadow: 0 0 #0000; appearance:=
 none; background-color: rgb(255, 255, 255); background-origin: border-box;=
 border-color: rgb(155, 155, 155); border-width: 1px; color: rgb(37, 99, 23=
5); display: inline-block; flex-shrink: 0; height: 1rem; padding: 0px; -web=
kit-print-color-adjust: exact; user-select: none; vertical-align: middle; w=
idth: 1rem; }

[type=3D"checkbox"] { border-radius: 0px; }

[type=3D"radio"] { border-radius: 100%; }

[type=3D"checkbox"]:focus, [type=3D"radio"]:focus { --tw-ring-offset-width:=
 2px; --tw-ring-offset-color: #fff; --tw-ring-color: #2563eb; --tw-ring-off=
set-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw=
-ring-offset-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px =
+ var(--tw-ring-offset-width)) var(--tw-ring-color); box-shadow: var(--tw-r=
ing-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow); outline: transpa=
rent solid 2px; outline-offset: 2px; }

[dir=3D"ltr"] [type=3D"checkbox"]:focus, [dir=3D"ltr"] [type=3D"radio"]:foc=
us { --tw-ring-inset: var(--tw-empty, ); }

[dir=3D"rtl"] [type=3D"checkbox"]:focus, [dir=3D"rtl"] [type=3D"radio"]:foc=
us { --tw-ring-inset: var(--tw-empty, ); }

[type=3D"checkbox"]:checked, [type=3D"radio"]:checked { background-color: c=
urrentcolor; background-position: 50% center; background-repeat: no-repeat;=
 background-size: 100% 100%; border-color: transparent; }

[type=3D"checkbox"]:checked { background-image: url("data:image/svg+xml;cha=
rset=3Dutf-8,%3Csvg viewBox=3D'0 0 16 16' fill=3D'%23fff' xmlns=3D'http://w=
ww.w3.org/2000/svg'%3E%3Cpath d=3D'M12.207 4.793a1 1 0 0 1 0 1.414l-5 5a1 1=
 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L6.5 9.086l4.293-4.293a1 1 0 0 1 1=
.414 0z'/%3E%3C/svg%3E"); }

[type=3D"radio"]:checked { background-image: url("data:image/svg+xml;charse=
t=3Dutf-8,%3Csvg viewBox=3D'0 0 16 16' fill=3D'%23fff' xmlns=3D'http://www.=
w3.org/2000/svg'%3E%3Ccircle cx=3D'8' cy=3D'8' r=3D'3'/%3E%3C/svg%3E"); }

[type=3D"checkbox"]:checked:focus, [type=3D"checkbox"]:checked:hover, [type=
=3D"radio"]:checked:focus, [type=3D"radio"]:checked:hover { background-colo=
r: currentcolor; border-color: transparent; }

[type=3D"checkbox"]:indeterminate { background-color: currentcolor; backgro=
und-image: url("data:image/svg+xml;charset=3Dutf-8,%3Csvg xmlns=3D'http://w=
ww.w3.org/2000/svg' fill=3D'none' viewBox=3D'0 0 16 16'%3E%3Cpath stroke=3D=
'%23fff' stroke-linecap=3D'round' stroke-linejoin=3D'round' stroke-width=3D=
'2' d=3D'M4 8h8'/%3E%3C/svg%3E"); background-position: 50% center; backgrou=
nd-repeat: no-repeat; background-size: 100% 100%; border-color: transparent=
; }

[type=3D"checkbox"]:indeterminate:focus, [type=3D"checkbox"]:indeterminate:=
hover { background-color: currentcolor; border-color: transparent; }

[type=3D"file"] { background: unset; border-color: inherit; border-radius: =
0px; border-width: 0px; font-size: unset; line-height: inherit; padding: 0p=
x; }

[type=3D"file"]:focus { outline: -webkit-focus-ring-color auto 1px; }

h1 { font-size: 1.875rem; font-weight: 600; line-height: 2.25rem; }

h2, h3 { font-size: 1.5rem; font-weight: 600; line-height: 2rem; }

input[type=3D"number"]::-webkit-inner-spin-button, input[type=3D"number"]::=
-webkit-outer-spin-button { appearance: none; margin: 0px; }

*, ::after, ::before { --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; =
--tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; -=
-tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: =
; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-=
from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ;=
 --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-s=
pacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-widt=
h: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); =
--tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shado=
w: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness:=
 ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --t=
w-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-=
backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ;=
 --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity:=
 ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --=
tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; }

::backdrop { --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-trans=
late-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y=
: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pin=
ch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-posit=
ion: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordi=
nal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; =
--tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --=
tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-=
offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #00=
00; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-co=
ntrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate=
: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-b=
rightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-back=
drop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-ba=
ckdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain=
-layout: ; --tw-contain-paint: ; --tw-contain-style: ; }

:root { --spring-fast-duration: 667ms; --spring-fast: linear(0,.01942 1.83%=
,.07956 4.02%,.47488 13.851%,.65981 19.572%,.79653 25.733%,.84834 29.083%,.=
89048 32.693%,.9246 36.734%,.95081 41.254%,.97012 46.425%,.98361 52.535%,.9=
9665 68.277%,.99988); --spring-common-duration: 667ms; --spring-common: lin=
ear(0,.00506 1.18%,.02044 2.46%,.08322 5.391%,.46561 17.652%,.63901 24.342%=
,.76663 31.093%,.85981 38.454%,.89862 42.934%,.92965 47.845%,.95366 53.305%=
,.97154 59.516%,.99189 74.867%,.9991); --spring-slow-bounce-duration: 1167m=
s; --spring-slow-bounce: linear(0,.00172 .51%,.00682 1.03%,.02721 2.12%,.06=
135 3.29%,.11043 4.58%,.21945 6.911%,.59552 14.171%,.70414 16.612%,.79359 1=
8.962%,.86872 21.362%,.92924 23.822%,.97589 26.373%,1.01 29.083%,1.0264 31.=
043%,1.03767 33.133%,1.04411 35.404%,1.04597 37.944%,1.04058 42.454%,1.0111=
9 55.646%,1.00137 63.716%,.99791 74.127%,.99988); --spring-bounce-duration:=
 833ms; --spring-bounce: linear(0,.00541 1.29%,.02175 2.68%,.04923 4.19%,.0=
8852 5.861%,.17388 8.851%,.48317 18.732%,.57693 22.162%,.65685 25.503%,.724=
32 28.793%,.78235 32.163%,.83182 35.664%,.87356 39.354%,.91132 43.714%,.941=
05 48.455%,.96361 53.705%,.97991 59.676%,.9903 66.247%,.99664 74.237%,.9996=
8 84.358%,1.00048); --spring-fast-bounce-duration: 1s; --spring-fast-bounce=
: linear(0,.00683 1.14%,.02731 2.35%,.11137 5.091%,.59413 15.612%,.78996 20=
.792%,.92396 25.953%,.97109 28.653%,1.00624 31.503%,1.03801 36.154%,1.0477 =
41.684%,1.00242 68.787%,.99921); --easing-common: linear(0,0,.0001,.0002,.0=
003,.0005,.0007,.001,.0013,.0016,.002,.0024,.0029,.0033,.0039,.0044,.005,.0=
057,.0063,.007,.0079,.0086,.0094,.0103,.0112,.0121,.0132 1.84%,.0153,.0175,=
.0201,.0226,.0253,.0283,.0313,.0345,.038,.0416,.0454,.0493,.0535,.0576,.062=
1,.0667,.0714,.0764,.0816 5.04%,.0897,.098 5.62%,.1071,.1165,.1263 6.56%,.1=
37,.1481 7.25%,.1601 7.62%,.1706 7.94%,.1819 8.28%,.194,.2068 9.02%,.2331 9=
.79%,.2898 11.44%,.3151 12.18%,.3412 12.95%,.3533,.365 13.66%,.3786,.3918,.=
4045,.4167,.4288,.4405,.452,.4631 16.72%,.4759,.4884,.5005,.5124,.5242,.535=
4,.5467,.5576,.5686,.5791,.5894,.5995,.6094,.6194,.6289,.6385,.6477,.6569,.=
6659 24.45%,.6702,.6747,.6789,.6833,.6877,.6919,.696,.7002,.7043,.7084,.712=
5,.7165,.7205,.7244,.7283,.7321,.7358,.7396,.7433,.7471,.7507,.7544,.7579,.=
7615,.7649,.7685,.7718,.7752,.7786,.782,.7853,.7885,.7918,.7951,.7982,.8013=
,.8043,.8075,.8104,.8135,.8165,.8195,.8224,.8253,.8281,.8309,.8336,.8365,.8=
391,.8419,.8446,.8472,.8499,.8524,.855,.8575,.8599,.8625 37.27%,.8651,.8678=
,.8703,.8729,.8754,.8779,.8803,.8827,.8851,.8875,.8898,.892,.8942,.8965,.89=
87,.9009,.903,.9051,.9071,.9092,.9112,.9132,.9151,.9171,.919,.9209,.9227,.9=
245,.9262,.928,.9297,.9314,.9331,.9347,.9364,.9379,.9395,.941,.9425,.944,.9=
454,.9469,.9483,.9497,.951,.9524,.9537,.955,.9562,.9574,.9586,.9599,.961,.9=
622,.9633,.9644,.9655,.9665,.9676,.9686,.9696,.9705,.9715,.9724,.9733,.9742=
,.975,.9758,.9766,.9774,.9782,.9789,.9796,.9804,.9811,.9817,.9824,.9831,.98=
37,.9843,.9849,.9855,.986,.9866,.9871,.9877,.9882,.9887,.9892,.9896 70.56%,=
.9905 71.67%,.9914 72.82%,.9922,.9929 75.2%,.9936 76.43%,.9942 77.71%,.9948=
 79.03%,.9954 80.39%,.9959 81.81%,.9963 83.28%,.9968 84.82%,.9972 86.41%,.9=
975 88.07%,.9979 89.81%,.9982 91.64%,.9984 93.56%,.9987 95.58%,.9989 97.72%=
,.9991); --sidebar-inline-padding: 12px; --sidebar-mask: linear-gradient(90=
deg,#000,#000 84%,transparent 89%,transparent); --white: #fff; --black: #00=
0; --gray-50: #f9f9f9; --gray-100: #ececec; --gray-200: #e3e3e3; --gray-300=
: #cdcdcd; --gray-400: #b4b4b4; --gray-500: #9b9b9b; --gray-600: #676767; -=
-gray-700: #424242; --gray-750: #2f2f2f; --gray-800: #212121; --gray-900: #=
171717; --gray-950: #0d0d0d; --red-500: #ef4444; --red-700: #b91c1c; --bran=
d-purple: #ab68ff; }

@media (-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio:2), (mi=
n-resolution: 192dpi), (min-resolution: 2dppx) {
  :root { -webkit-font-smoothing: antialiased; }
}

html { --main-surface-background: hsla(0,0%,100%,.95); --message-surface: h=
sla(0,0%,91%,.5); --composer-surface: var(--message-surface); --dot-color: =
var(--black); --text-primary: var(--gray-950); --text-secondary: #5d5d5d; -=
-text-tertiary: var(--gray-400); --text-quaternary: var(--gray-300); --tag-=
blue: #08f; --tag-blue-light: #0af; --text-error: #f93a37; --text-danger: v=
ar(--red-500); --text-placeholder: rgba(0,0,0,.7); --surface-error: 249 58 =
55; --border-xlight: rgb(0 0 0/5%); --border-light: rgba(0,0,0,.1); --borde=
r-medium: rgba(0,0,0,.15); --border-heavy: rgba(0,0,0,.2); --border-xheavy:=
 rgba(0,0,0,.25); --hint-text: #08f; --hint-bg: #b3dbff; --border-sharp: rg=
b(0 0 0/5%); --icon-secondary: #676767; --main-surface-primary: var(--white=
); --main-surface-primary-inverse: var(--gray-800); --main-surface-secondar=
y: var(--gray-50); --main-surface-tertiary: var(--gray-100); --sidebar-surf=
ace-primary: var(--gray-50); --sidebar-surface-secondary: var(--gray-100); =
--sidebar-surface-tertiary: var(--gray-200); --sidebar-title-primary: rgba(=
40,40,40,.5); --sidebar-body-primary: #0d0d0d; --sidebar-icon: #7d7d7d; --l=
ink: #2964aa; --link-hover: #749ac8; --selection: #007aff; }

@supports (color:oklch(.99 0 0)) {
  html { --sidebar-surface-floating-lightness: 1; --sidebar-surface-floatin=
g-alpha: 1; --sidebar-surface-pinned-lightness: .99; --sidebar-surface-pinn=
ed-alpha: 1; }
}

@media (prefers-reduced-transparency: reduce) {
  html { --message-surface: #f4f4f4; }
}

.dark { --main-surface-background: rgba(33,33,33,.9); --message-surface: rg=
ba(50,50,50,.85); --dot-color: var(--white); --text-primary: var(--gray-100=
); --text-secondary: var(--gray-400); --text-tertiary: var(--gray-500); --t=
ext-quaternary: var(--gray-600); --text-placeholder: hsla(0,0%,100%,.8); --=
text-error: #f93a37; --border-xlight: hsla(0,0%,100%,.05); --border-light: =
hsla(0,0%,100%,.1); --border-medium: hsla(0,0%,100%,.15); --border-heavy: h=
sla(0,0%,100%,.2); --border-xheavy: hsla(0,0%,100%,.25); --border-sharp: hs=
la(0,0%,100%,.05); --main-surface-primary: var(--gray-800); --main-surface-=
primary-inverse: var(--white); --main-surface-secondary: var(--gray-750); -=
-main-surface-tertiary: var(--gray-700); --sidebar-surface-primary: var(--g=
ray-900); --sidebar-surface-secondary: var(--gray-800); --sidebar-surface-t=
ertiary: var(--gray-750); --sidebar-title-primary: hsla(0,0%,94%,.5); --sid=
ebar-body-primary: #ededed; --sidebar-icon: #a4a4a4; --link: #7ab7ff; --lin=
k-hover: #5e83b3; --surface-error: 249 58 55; }

@supports (color:oklch(.99 0 0)) {
  .dark { --sidebar-surface-floating-lightness: .3; --sidebar-surface-float=
ing-alpha: 1; --sidebar-surface-pinned-lightness: .29; --sidebar-surface-pi=
nned-alpha: 1; }
}

@media (prefers-reduced-transparency: reduce) {
  .dark { --message-surface: #2f2f2f; }
}

.popover { --main-surface-primary: var(--white) !important; --main-surface-=
secondary: var(--gray-100) !important; --main-surface-tertiary: var(--gray-=
200) !important; --sidebar-surface-primary: var(--white) !important; }

.dark .popover, .dark.popover, .popover .dark { --main-surface-primary: var=
(--gray-750) !important; --main-surface-secondary: var(--gray-700) !importa=
nt; --main-surface-tertiary: var(--gray-600) !important; --text-primary: va=
r(--gray-50) !important; --text-secondary: var(--gray-200) !important; --te=
xt-tertiary: var(--gray-400) !important; --text-quaternary: var(--gray-500)=
 !important; --sidebar-surface-primary: var(--gray-750) !important; }

.light:has(input#canvas-state:checked) { --main-surface-primary: #f9f9f9; -=
-message-surface: #eee; }

.light #thread { background: var(--main-surface-primary); }

textarea:focus { border-color: inherit; box-shadow: none; outline: none; }

.container { width: 100%; }

@media (min-width: 480px) {
  .container { max-width: 480px; }
}

@media (min-width: 640px) {
  .container { max-width: 640px; }
}

@media (min-width: 768px) {
  .container { max-width: 768px; }
}

@media (min-width: 1024px) {
  .container { max-width: 1024px; }
}

@media (min-width: 1280px) {
  .container { max-width: 1280px; }
}

@media (min-width: 1536px) {
  .container { max-width: 1536px; }
}

.prose { color: var(--tw-prose-body); max-width: 65ch; }

.prose :where([class~=3D"lead"]):not(:where([class~=3D"not-prose"] *)) { co=
lor: var(--tw-prose-lead); font-size: 1.25em; line-height: 1.6; margin-bott=
om: 1.2em; margin-top: 1.2em; }

.prose :where(a):not(:where([class~=3D"not-prose"] *)) { color: var(--tw-pr=
ose-links); font-weight: 500; text-decoration: underline; }

.prose :where(strong):not(:where([class~=3D"not-prose"] *)) { color: var(--=
tw-prose-bold); font-weight: 600; }

.prose :where(a strong):not(:where([class~=3D"not-prose"] *)) { color: inhe=
rit; }

.prose :where(blockquote strong):not(:where([class~=3D"not-prose"] *)) { co=
lor: inherit; }

.prose :where(thead th strong):not(:where([class~=3D"not-prose"] *)) { colo=
r: inherit; }

.prose :where(ol):not(:where([class~=3D"not-prose"] *)) { list-style-type: =
decimal; margin-bottom: 1.25em; margin-top: 1.25em; }

[dir=3D"ltr"] .prose :where(ol):not(:where([class~=3D"not-prose"] *)) { pad=
ding-left: 1.625em; }

[dir=3D"rtl"] .prose :where(ol):not(:where([class~=3D"not-prose"] *)) { pad=
ding-right: 1.625em; }

.prose :where(ol[type=3D"A"]):not(:where([class~=3D"not-prose"] *)) { list-=
style-type: upper-alpha; }

.prose :where(ol[type=3D"a"]):not(:where([class~=3D"not-prose"] *)) { list-=
style-type: lower-alpha; }

.prose :where():not(:where([class~=3D"not-prose"] *)) { list-style-type: up=
per-alpha; }

.prose :where():not(:where([class~=3D"not-prose"] *)) { list-style-type: lo=
wer-alpha; }

.prose :where(ol[type=3D"I"]):not(:where([class~=3D"not-prose"] *)) { list-=
style-type: upper-roman; }

.prose :where(ol[type=3D"i"]):not(:where([class~=3D"not-prose"] *)) { list-=
style-type: lower-roman; }

.prose :where():not(:where([class~=3D"not-prose"] *)) { list-style-type: up=
per-roman; }

.prose :where():not(:where([class~=3D"not-prose"] *)) { list-style-type: lo=
wer-roman; }

.prose :where(ol[type=3D"1"]):not(:where([class~=3D"not-prose"] *)) { list-=
style-type: decimal; }

.prose :where(ul):not(:where([class~=3D"not-prose"] *)) { list-style-type: =
disc; margin-bottom: 1.25em; margin-top: 1.25em; }

[dir=3D"ltr"] .prose :where(ul):not(:where([class~=3D"not-prose"] *)) { pad=
ding-left: 1.625em; }

[dir=3D"rtl"] .prose :where(ul):not(:where([class~=3D"not-prose"] *)) { pad=
ding-right: 1.625em; }

.prose :where(ol > li):not(:where([class~=3D"not-prose"] *))::marker { colo=
r: var(--tw-prose-counters); font-weight: 400; }

.prose :where(ul > li):not(:where([class~=3D"not-prose"] *))::marker { colo=
r: var(--tw-prose-bullets); }

.prose :where(hr):not(:where([class~=3D"not-prose"] *)) { border-color: var=
(--tw-prose-hr); border-top-width: 1px; margin-bottom: 3em; margin-top: 3em=
; }

.prose :where(blockquote):not(:where([class~=3D"not-prose"] *)) { color: va=
r(--tw-prose-quotes); font-style: normal; font-weight: 500; margin-bottom: =
1.6em; margin-top: 1.6em; quotes: "=E2=80=9C" "=E2=80=9D" "=E2=80=98" "=E2=
=80=99"; }

[dir=3D"ltr"] .prose :where(blockquote):not(:where([class~=3D"not-prose"] *=
)) { border-left-color: var(--tw-prose-quote-borders); border-left-width: 0=
.25rem; padding-left: 1em; }

[dir=3D"rtl"] .prose :where(blockquote):not(:where([class~=3D"not-prose"] *=
)) { border-right-color: var(--tw-prose-quote-borders); border-right-width:=
 0.25rem; padding-right: 1em; }

.prose :where(blockquote p:first-of-type):not(:where([class~=3D"not-prose"]=
 *))::before { content: open-quote; }

.prose :where(blockquote p:last-of-type):not(:where([class~=3D"not-prose"] =
*))::after { content: close-quote; }

.prose :where(h1):not(:where([class~=3D"not-prose"] *)) { color: var(--tw-p=
rose-headings); font-size: 2.25em; font-weight: 800; line-height: 1.11111; =
margin-bottom: 0.888889em; margin-top: 0px; }

.prose :where(h1 strong):not(:where([class~=3D"not-prose"] *)) { color: inh=
erit; font-weight: 900; }

.prose :where(h2):not(:where([class~=3D"not-prose"] *)) { color: var(--tw-p=
rose-headings); font-size: 1.5em; font-weight: 700; line-height: 1.33333; m=
argin-bottom: 1em; margin-top: 2em; }

.prose :where(h2 strong):not(:where([class~=3D"not-prose"] *)) { color: inh=
erit; font-weight: 800; }

.prose :where(h3):not(:where([class~=3D"not-prose"] *)) { color: var(--tw-p=
rose-headings); font-size: 1.25em; font-weight: 600; line-height: 1.6; marg=
in-bottom: 0.6em; margin-top: 1.6em; }

.prose :where(h3 strong):not(:where([class~=3D"not-prose"] *)) { color: inh=
erit; font-weight: 700; }

.prose :where(h4):not(:where([class~=3D"not-prose"] *)) { color: var(--tw-p=
rose-headings); font-weight: 600; line-height: 1.5; margin-bottom: 0.5em; m=
argin-top: 1.5em; }

.prose :where(h4 strong):not(:where([class~=3D"not-prose"] *)) { color: inh=
erit; font-weight: 700; }

.prose :where(img):not(:where([class~=3D"not-prose"] *)) { margin-bottom: 2=
em; margin-top: 2em; }

.prose :where(figure > *):not(:where([class~=3D"not-prose"] *)) { margin-bo=
ttom: 0px; margin-top: 0px; }

.prose :where(figcaption):not(:where([class~=3D"not-prose"] *)) { color: va=
r(--tw-prose-captions); font-size: 0.875em; line-height: 1.42857; margin-to=
p: 0.857143em; }

.prose :where(code):not(:where([class~=3D"not-prose"] *)) { background-colo=
r: var(--gray-100); border-radius: 0.25rem; color: var(--tw-prose-code); fo=
nt-size: 0.875em; font-weight: 500; padding: 0.15rem 0.3rem; }

.prose :where(code):not(:where([class~=3D"not-prose"] *))::before { content=
: none; }

.prose :where(code):not(:where([class~=3D"not-prose"] *))::after { content:=
 none; }

.prose :where(a code):not(:where([class~=3D"not-prose"] *)) { color: inheri=
t; }

.prose :where(h1 code):not(:where([class~=3D"not-prose"] *)) { color: inher=
it; }

.prose :where(h2 code):not(:where([class~=3D"not-prose"] *)) { color: inher=
it; font-size: 0.875em; }

.prose :where(h3 code):not(:where([class~=3D"not-prose"] *)) { color: inher=
it; font-size: 0.9em; }

.prose :where(h4 code):not(:where([class~=3D"not-prose"] *)) { color: inher=
it; }

.prose :where(blockquote code):not(:where([class~=3D"not-prose"] *)) { colo=
r: inherit; }

.prose :where(thead th code):not(:where([class~=3D"not-prose"] *)) { color:=
 inherit; }

.prose :where(pre):not(:where([class~=3D"not-prose"] *)) { background-color=
: transparent; border-radius: 0.375rem; color: currentcolor; font-size: 0.8=
75em; font-weight: 400; line-height: 1.71429; margin: 0px; overflow-x: auto=
; padding: 0px; }

.prose :where(pre code):not(:where([class~=3D"not-prose"] *)) { background-=
color: transparent; border-radius: 0px; border-width: 0px; color: inherit; =
font-family: inherit; font-size: inherit; font-weight: inherit; line-height=
: inherit; padding: 0px; }

.prose :where(pre code):not(:where([class~=3D"not-prose"] *))::before { con=
tent: none; }

.prose :where(pre code):not(:where([class~=3D"not-prose"] *))::after { cont=
ent: none; }

.prose :where(table):not(:where([class~=3D"not-prose"] *)) { font-size: 0.8=
75em; line-height: 1.71429; margin-bottom: 2em; margin-top: 2em; table-layo=
ut: auto; width: 100%; }

[dir=3D"ltr"] .prose :where(table):not(:where([class~=3D"not-prose"] *)) { =
text-align: left; }

[dir=3D"rtl"] .prose :where(table):not(:where([class~=3D"not-prose"] *)) { =
text-align: right; }

.prose :where(thead):not(:where([class~=3D"not-prose"] *)) { border-bottom-=
color: var(--tw-prose-th-borders); border-bottom-width: 1px; }

.prose :where(thead th):not(:where([class~=3D"not-prose"] *)) { color: var(=
--tw-prose-headings); font-weight: 600; padding-bottom: 0.571429em; padding=
-left: 0.571429em; padding-right: 0.571429em; vertical-align: bottom; }

.prose :where(tbody tr):not(:where([class~=3D"not-prose"] *)) { border-bott=
om-color: var(--tw-prose-td-borders); border-bottom-width: 1px; }

.prose :where(tbody tr:last-child):not(:where([class~=3D"not-prose"] *)) { =
border-bottom-width: 0px; }

.prose :where(tbody td):not(:where([class~=3D"not-prose"] *)) { vertical-al=
ign: baseline; }

.prose :where(tfoot):not(:where([class~=3D"not-prose"] *)) { border-top-col=
or: var(--tw-prose-th-borders); border-top-width: 1px; }

.prose :where(tfoot td):not(:where([class~=3D"not-prose"] *)) { vertical-al=
ign: top; }

.prose { --tw-prose-body: var(--text-primary); --tw-prose-headings: var(--t=
ext-primary); --tw-prose-lead: var(--text-primary); --tw-prose-links: var(-=
-text-primary); --tw-prose-bold: var(--text-primary); --tw-prose-counters: =
var(--text-primary); --tw-prose-bullets: var(--text-primary); --tw-prose-hr=
: var(--border-xheavy); --tw-prose-quotes: var(--text-primary); --tw-prose-=
quote-borders: #e5e7eb; --tw-prose-captions: var(--text-secondary); --tw-pr=
ose-code: var(--text-primary); --tw-prose-pre-code: #e5e7eb; --tw-prose-pre=
-bg: #1f2937; --tw-prose-th-borders: #d1d5db; --tw-prose-td-borders: #e5e7e=
b; --tw-prose-invert-body: var(--text-primary); --tw-prose-invert-headings:=
 var(--text-primary); --tw-prose-invert-lead: var(--text-primary); --tw-pro=
se-invert-links: var(--text-primary); --tw-prose-invert-bold: var(--text-pr=
imary); --tw-prose-invert-counters: var(--text-primary); --tw-prose-invert-=
bullets: var(--text-primary); --tw-prose-invert-hr: var(--border-xheavy); -=
-tw-prose-invert-quotes: var(--text-primary); --tw-prose-invert-quote-borde=
rs: #374151; --tw-prose-invert-captions: var(--text-secondary); --tw-prose-=
invert-code: var(--text-primary); --tw-prose-invert-pre-code: #d1d5db; --tw=
-prose-invert-pre-bg: rgba(0,0,0,.5); --tw-prose-invert-th-borders: #4b5563=
; --tw-prose-invert-td-borders: #374151; font-size: 1rem; line-height: 1.75=
; }

.prose :where(p):not(:where([class~=3D"not-prose"] *)) { margin-bottom: 1.2=
5em; margin-top: 1.25em; }

.prose :where(video):not(:where([class~=3D"not-prose"] *)) { margin-bottom:=
 2em; margin-top: 2em; }

.prose :where(figure):not(:where([class~=3D"not-prose"] *)) { margin-bottom=
: 2em; margin-top: 2em; }

.prose :where(li):not(:where([class~=3D"not-prose"] *)) { margin-bottom: 0.=
5em; margin-top: 0.5em; }

[dir=3D"ltr"] .prose :where(ol > li):not(:where([class~=3D"not-prose"] *)) =
{ padding-left: 0.375em; }

[dir=3D"rtl"] .prose :where(ol > li):not(:where([class~=3D"not-prose"] *)) =
{ padding-right: 0.375em; }

[dir=3D"ltr"] .prose :where(ul > li):not(:where([class~=3D"not-prose"] *)) =
{ padding-left: 0.375em; }

[dir=3D"rtl"] .prose :where(ul > li):not(:where([class~=3D"not-prose"] *)) =
{ padding-right: 0.375em; }

.prose :where(.prose > ul > li p):not(:where([class~=3D"not-prose"] *)) { m=
argin-bottom: 0.75em; margin-top: 0.75em; }

.prose :where(.prose > ul > li > :first-child):not(:where([class~=3D"not-pr=
ose"] *)) { margin-top: 1.25em; }

.prose :where(.prose > ul > li > :last-child):not(:where([class~=3D"not-pro=
se"] *)) { margin-bottom: 1.25em; }

.prose :where(.prose > ol > li > :first-child):not(:where([class~=3D"not-pr=
ose"] *)) { margin-top: 1.25em; }

.prose :where(.prose > ol > li > :last-child):not(:where([class~=3D"not-pro=
se"] *)) { margin-bottom: 1.25em; }

.prose :where(ul ul, ul ol, ol ul, ol ol):not(:where([class~=3D"not-prose"]=
 *)) { margin-bottom: 0.75em; margin-top: 0.75em; }

.prose :where(hr + *):not(:where([class~=3D"not-prose"] *)) { margin-top: 0=
px; }

.prose :where(h2 + *):not(:where([class~=3D"not-prose"] *)) { margin-top: 0=
px; }

.prose :where(h3 + *):not(:where([class~=3D"not-prose"] *)) { margin-top: 0=
px; }

.prose :where(h4 + *):not(:where([class~=3D"not-prose"] *)) { margin-top: 0=
px; }

[dir=3D"ltr"] .prose :where(thead th:first-child):not(:where([class~=3D"not=
-prose"] *)) { padding-left: 0px; }

[dir=3D"rtl"] .prose :where(thead th:first-child):not(:where([class~=3D"not=
-prose"] *)) { padding-right: 0px; }

[dir=3D"ltr"] .prose :where(thead th:last-child):not(:where([class~=3D"not-=
prose"] *)) { padding-right: 0px; }

[dir=3D"rtl"] .prose :where(thead th:last-child):not(:where([class~=3D"not-=
prose"] *)) { padding-left: 0px; }

.prose :where(tbody td, tfoot td):not(:where([class~=3D"not-prose"] *)) { p=
adding: 0.571429em; }

[dir=3D"ltr"] .prose :where(tbody td:first-child, tfoot td:first-child):not=
(:where([class~=3D"not-prose"] *)) { padding-left: 0px; }

[dir=3D"rtl"] .prose :where(tbody td:first-child, tfoot td:first-child):not=
(:where([class~=3D"not-prose"] *)) { padding-right: 0px; }

[dir=3D"ltr"] .prose :where(tbody td:last-child, tfoot td:last-child):not(:=
where([class~=3D"not-prose"] *)) { padding-right: 0px; }

[dir=3D"rtl"] .prose :where(tbody td:last-child, tfoot td:last-child):not(:=
where([class~=3D"not-prose"] *)) { padding-left: 0px; }

.prose :where(.prose > :first-child):not(:where([class~=3D"not-prose"] *)) =
{ margin-top: 0px; }

.prose :where(.prose > :last-child):not(:where([class~=3D"not-prose"] *)) {=
 margin-bottom: 0px; }

.prose-sm :where(.prose > ul > li p):not(:where([class~=3D"not-prose"] *)) =
{ margin-bottom: 0.571429em; margin-top: 0.571429em; }

.prose-sm :where(.prose > ul > li > :first-child):not(:where([class~=3D"not=
-prose"] *)) { margin-top: 1.14286em; }

.prose-sm :where(.prose > ul > li > :last-child):not(:where([class~=3D"not-=
prose"] *)) { margin-bottom: 1.14286em; }

.prose-sm :where(.prose > ol > li > :first-child):not(:where([class~=3D"not=
-prose"] *)) { margin-top: 1.14286em; }

.prose-sm :where(.prose > ol > li > :last-child):not(:where([class~=3D"not-=
prose"] *)) { margin-bottom: 1.14286em; }

.prose-sm :where(.prose > :first-child):not(:where([class~=3D"not-prose"] *=
)) { margin-top: 0px; }

.prose-sm :where(.prose > :last-child):not(:where([class~=3D"not-prose"] *)=
) { margin-bottom: 0px; }

.prose-base :where(.prose > ul > li p):not(:where([class~=3D"not-prose"] *)=
) { margin-bottom: 0.75em; margin-top: 0.75em; }

.prose-base :where(.prose > ul > li > :first-child):not(:where([class~=3D"n=
ot-prose"] *)) { margin-top: 1.25em; }

.prose-base :where(.prose > ul > li > :last-child):not(:where([class~=3D"no=
t-prose"] *)) { margin-bottom: 1.25em; }

.prose-base :where(.prose > ol > li > :first-child):not(:where([class~=3D"n=
ot-prose"] *)) { margin-top: 1.25em; }

.prose-base :where(.prose > ol > li > :last-child):not(:where([class~=3D"no=
t-prose"] *)) { margin-bottom: 1.25em; }

.prose-base :where(.prose > :first-child):not(:where([class~=3D"not-prose"]=
 *)) { margin-top: 0px; }

.prose-base :where(.prose > :last-child):not(:where([class~=3D"not-prose"] =
*)) { margin-bottom: 0px; }

.prose-lg :where(.prose > ul > li p):not(:where([class~=3D"not-prose"] *)) =
{ margin-bottom: 0.888889em; margin-top: 0.888889em; }

.prose-lg :where(.prose > ul > li > :first-child):not(:where([class~=3D"not=
-prose"] *)) { margin-top: 1.33333em; }

.prose-lg :where(.prose > ul > li > :last-child):not(:where([class~=3D"not-=
prose"] *)) { margin-bottom: 1.33333em; }

.prose-lg :where(.prose > ol > li > :first-child):not(:where([class~=3D"not=
-prose"] *)) { margin-top: 1.33333em; }

.prose-lg :where(.prose > ol > li > :last-child):not(:where([class~=3D"not-=
prose"] *)) { margin-bottom: 1.33333em; }

.prose-lg :where(.prose > :first-child):not(:where([class~=3D"not-prose"] *=
)) { margin-top: 0px; }

.prose-lg :where(.prose > :last-child):not(:where([class~=3D"not-prose"] *)=
) { margin-bottom: 0px; }

.prose-xl :where(.prose > ul > li p):not(:where([class~=3D"not-prose"] *)) =
{ margin-bottom: 0.8em; margin-top: 0.8em; }

.prose-xl :where(.prose > ul > li > :first-child):not(:where([class~=3D"not=
-prose"] *)) { margin-top: 1.2em; }

.prose-xl :where(.prose > ul > li > :last-child):not(:where([class~=3D"not-=
prose"] *)) { margin-bottom: 1.2em; }

.prose-xl :where(.prose > ol > li > :first-child):not(:where([class~=3D"not=
-prose"] *)) { margin-top: 1.2em; }

.prose-xl :where(.prose > ol > li > :last-child):not(:where([class~=3D"not-=
prose"] *)) { margin-bottom: 1.2em; }

.prose-xl :where(.prose > :first-child):not(:where([class~=3D"not-prose"] *=
)) { margin-top: 0px; }

.prose-xl :where(.prose > :last-child):not(:where([class~=3D"not-prose"] *)=
) { margin-bottom: 0px; }

.prose-2xl :where(.prose > ul > li p):not(:where([class~=3D"not-prose"] *))=
 { margin-bottom: 0.833333em; margin-top: 0.833333em; }

.prose-2xl :where(.prose > ul > li > :first-child):not(:where([class~=3D"no=
t-prose"] *)) { margin-top: 1.33333em; }

.prose-2xl :where(.prose > ul > li > :last-child):not(:where([class~=3D"not=
-prose"] *)) { margin-bottom: 1.33333em; }

.prose-2xl :where(.prose > ol > li > :first-child):not(:where([class~=3D"no=
t-prose"] *)) { margin-top: 1.33333em; }

.prose-2xl :where(.prose > ol > li > :last-child):not(:where([class~=3D"not=
-prose"] *)) { margin-bottom: 1.33333em; }

.prose-2xl :where(.prose > :first-child):not(:where([class~=3D"not-prose"] =
*)) { margin-top: 0px; }

.prose-2xl :where(.prose > :last-child):not(:where([class~=3D"not-prose"] *=
)) { margin-bottom: 0px; }

.form-input, .form-multiselect, .form-select, .form-textarea { --tw-shadow:=
 0 0 #0000; appearance: none; background-color: rgb(255, 255, 255); border-=
color: rgb(155, 155, 155); border-radius: 0px; border-width: 1px; font-size=
: 1rem; line-height: 1.5rem; padding: 0.5rem 0.75rem; }

.form-input:focus, .form-multiselect:focus, .form-select:focus, .form-texta=
rea:focus { --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw=
-ring-color: #2563eb; --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 v=
ar(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: v=
ar(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-=
ring-color); border-color: rgb(37, 99, 235); box-shadow: var(--tw-ring-offs=
et-shadow),var(--tw-ring-shadow),var(--tw-shadow); outline: transparent sol=
id 2px; outline-offset: 2px; }

[dir=3D"ltr"] .form-input:focus, [dir=3D"ltr"] .form-multiselect:focus, [di=
r=3D"ltr"] .form-select:focus, [dir=3D"ltr"] .form-textarea:focus { --tw-ri=
ng-inset: var(--tw-empty, ); }

[dir=3D"rtl"] .form-input:focus, [dir=3D"rtl"] .form-multiselect:focus, [di=
r=3D"rtl"] .form-select:focus, [dir=3D"rtl"] .form-textarea:focus { --tw-ri=
ng-inset: var(--tw-empty, ); }

.form-input::placeholder, .form-textarea::placeholder { color: rgb(155, 155=
, 155); opacity: 1; }

.form-input::-webkit-datetime-edit-fields-wrapper { padding: 0px; }

.form-input::-webkit-date-and-time-value { min-height: 1.5em; }

.form-input::-webkit-datetime-edit, .form-input::-webkit-datetime-edit-day-=
field, .form-input::-webkit-datetime-edit-hour-field, .form-input::-webkit-=
datetime-edit-meridiem-field, .form-input::-webkit-datetime-edit-millisecon=
d-field, .form-input::-webkit-datetime-edit-minute-field, .form-input::-web=
kit-datetime-edit-month-field, .form-input::-webkit-datetime-edit-second-fi=
eld, .form-input::-webkit-datetime-edit-year-field { padding-bottom: 0px; p=
adding-top: 0px; }

.btn { align-items: center; border-color: transparent; border-radius: 9999p=
x; border-width: 1px; display: inline-flex; flex-shrink: 0; font-size: 0.87=
5rem; font-weight: 500; justify-content: center; line-height: 1.25rem; min-=
height: 38px; padding: 0.5rem 0.875rem; pointer-events: auto; }

.btn:focus { outline: transparent solid 2px; outline-offset: 2px; }

.btn:focus-visible { outline: transparent solid 2px; outline-offset: 2px; }

.btn:disabled { cursor: not-allowed; opacity: 0.5; }

.btn:active { opacity: 0.8; }

.btn-green { --tw-bg-opacity: 1; --tw-text-opacity: 1; background-color: rg=
b(16 163 127/var(--tw-bg-opacity)); color: rgb(255 255 255/var(--tw-text-op=
acity)); }

@media (hover: hover) and (pointer: fine) {
  .btn-green:hover { --tw-bg-opacity: 1; background-color: rgb(26 127 100/v=
ar(--tw-bg-opacity)); }
}

.btn-green:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 =
0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shad=
ow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(=
--tw-ring-color); --tw-ring-opacity: 1; --tw-ring-color: rgb(25 195 125/var=
(--tw-ring-opacity)); --tw-ring-offset-width: 2px; box-shadow: var(--tw-rin=
g-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

.btn-blue { --tw-bg-opacity: 1; --tw-text-opacity: 1; background-color: rgb=
(0 102 222/var(--tw-bg-opacity)); color: rgb(255 255 255/var(--tw-text-opac=
ity)); }

@media (hover: hover) and (pointer: fine) {
  .btn-blue:hover { --tw-bg-opacity: 1; background-color: rgb(29 78 216/var=
(--tw-bg-opacity)); }
}

.btn-blue:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0=
 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shado=
w: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(-=
-tw-ring-color); --tw-ring-opacity: 1; --tw-ring-color: rgb(29 78 216/var(-=
-tw-ring-opacity)); --tw-ring-offset-width: 2px; box-shadow: var(--tw-ring-=
offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

.btn-primary { --tw-bg-opacity: 1; --tw-text-opacity: 1; background-color: =
rgb(13 13 13/var(--tw-bg-opacity)); color: rgb(255 255 255/var(--tw-text-op=
acity)); }

@media (hover: hover) and (pointer: fine) {
  .btn-primary:hover { --tw-bg-opacity: 1; background-color: rgb(33 33 33/v=
ar(--tw-bg-opacity)); }
}

.btn-primary:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset) =
0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-sh=
adow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) va=
r(--tw-ring-color); --tw-ring-opacity: 1; --tw-ring-color: rgb(155 155 155/=
var(--tw-ring-opacity)); --tw-ring-offset-width: 2px; box-shadow: var(--tw-=
ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

.btn-primary:is(.dark *) { --tw-bg-opacity: 1; --tw-text-opacity: 1; backgr=
ound-color: rgb(249 249 249/var(--tw-bg-opacity)); color: rgb(13 13 13/var(=
--tw-text-opacity)); }

@media (hover: hover) and (pointer: fine) {
  .btn-primary:hover:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(236 236 236/var(--tw-bg-opacity)); }
}

.btn-danger { --tw-bg-opacity: 1; --tw-text-opacity: 1; background-color: r=
gb(239 68 68/var(--tw-bg-opacity)); color: rgb(255 255 255/var(--tw-text-op=
acity)); }

@media (hover: hover) and (pointer: fine) {
  .btn-danger:hover { --tw-bg-opacity: 1; background-color: rgb(185 28 28/v=
ar(--tw-bg-opacity)); }
}

.btn-danger:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset) 0=
 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-sha=
dow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var=
(--tw-ring-color); --tw-ring-opacity: 1; --tw-ring-color: rgb(248 113 113/v=
ar(--tw-ring-opacity)); --tw-ring-offset-width: 2px; box-shadow: var(--tw-r=
ing-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

@media (hover: hover) and (pointer: fine) {
  .btn-danger:disabled:hover { --tw-bg-opacity: 1; background-color: rgb(18=
5 28 28/var(--tw-bg-opacity)); }
}

.btn-danger-outline { --tw-border-opacity: 1; --tw-text-opacity: 1; backgro=
und-color: var(--main-surface-primary); border-color: rgb(220 38 38/var(--t=
w-border-opacity)); border-width: 1px; color: rgb(220 38 38/var(--tw-text-o=
pacity)); }

@media (hover: hover) and (pointer: fine) {
  .btn-danger-outline:hover { background-color: var(--main-surface-secondar=
y); }
}

.btn-danger-outline:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-=
inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-=
ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-wid=
th)) var(--tw-ring-color); --tw-ring-opacity: 1; --tw-ring-color: rgb(220 3=
8 38/var(--tw-ring-opacity)); --tw-ring-offset-width: 2px; box-shadow: var(=
--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); =
}

.btn-secondary { background-color: var(--main-surface-primary); border-colo=
r: var(--border-medium); border-width: 1px; color: var(--text-primary); fon=
t-size: 0.875rem; line-height: 1.25rem; }

@media (hover: hover) and (pointer: fine) {
  .btn-secondary:hover { background-color: var(--main-surface-secondary); }
}

.btn-secondary:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset=
) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-=
shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) =
var(--tw-ring-color); --tw-ring-opacity: 1; --tw-ring-color: rgb(103 103 10=
3/var(--tw-ring-opacity)); --tw-ring-offset-width: 2px; box-shadow: var(--t=
w-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

@media (hover: hover) and (pointer: fine) {
  .btn-ghost:hover { background-color: rgba(0, 0, 0, 0.05); }
}

.btn-ghost:focus-visible { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 =
0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shad=
ow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(=
--tw-ring-color); --tw-ring-color: rgba(0,0,0,.05); box-shadow: var(--tw-ri=
ng-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); outline=
: transparent solid 2px; outline-offset: 2px; }

@media (hover: hover) and (pointer: fine) {
  .btn-ghost:hover:is(.dark *) { background-color: rgba(255, 255, 255, 0.1)=
; }
}

.text-danger { --tw-text-opacity: 1; color: rgb(239 68 68/var(--tw-text-opa=
city)); }

.btn-xs { font-size: 0.75rem; line-height: 1rem; min-height: 26px; padding:=
 0.25rem 0.75rem; }

.btn-small { min-height: 30px; padding: 0.25rem 0.75rem; }

.btn-giant, .btn-large { min-height: 46px; }

.btn-large { padding: 0.75rem 1rem; }

.btn-giant { font-size: 1rem; font-weight: 600; line-height: 1.5rem; paddin=
g: 0.625rem 1.5rem; }

body, html { background-color: var(--main-surface-primary); }

#__next, #root, body, html { height: 100%; }

.markdown { max-width: unset; }

.markdown pre { margin-top: 0.5rem; }

.markdown h1 { font-weight: 700; letter-spacing: -0.04rem; }

.markdown h1:first-child { margin-top: 0px; }

.markdown h2 { font-weight: 600; margin-bottom: 1rem; margin-top: 2rem; }

.markdown h2:first-child { margin-top: 0px; }

.markdown h3 { font-weight: 600; margin-bottom: 0.5rem; margin-top: 1rem; }

.markdown h3:first-child { margin-top: 0px; }

.markdown h4 { font-weight: 600; margin-bottom: 0.5rem; margin-top: 1rem; }

.markdown h4:first-child { margin-top: 0px; }

.markdown h5 { font-weight: 600; }

.markdown h5:first-child { margin-top: 0px; }

.markdown blockquote { --tw-border-opacity: 1; border-color: rgb(155 155 15=
5/var(--tw-border-opacity)); line-height: 1.5rem; margin: 0px; padding-bott=
om: 0.5rem; padding-top: 0.5rem; }

[dir=3D"ltr"] .markdown blockquote { border-left-width: 2px; padding-left: =
1rem; }

[dir=3D"rtl"] .markdown blockquote { border-right-width: 2px; padding-right=
: 1rem; }

.markdown blockquote > p { margin: 0px; }

.markdown blockquote > p::after, .markdown blockquote > p::before { display=
: none; }

.markdown table { --tw-border-spacing-x: 0px; --tw-border-spacing-y: 0px; b=
order-collapse: separate; border-spacing: var(--tw-border-spacing-x) var(--=
tw-border-spacing-y); margin-bottom: 0.25rem; margin-top: 0.25rem; width: 1=
00%; }

.markdown p { margin-bottom: 0.5rem; }

.markdown p:not(:first-child) { margin-top: 0.5rem; }

.markdown p + :where(ol, ul) { margin-top: 0px; }

.markdown :where(ol, ul) > li > :last-child { margin-bottom: 0px; }

.markdown :where(ol, ul) > li > :first-child { margin-bottom: 0px; margin-t=
op: 0px; }

.markdown th { background-color: var(--border-light); border-bottom-width: =
1px; border-color: var(--border-medium); border-top-width: 1px; padding: 0.=
25rem 0.75rem; }

[dir=3D"ltr"] .markdown th { border-left-width: 1px; }

[dir=3D"rtl"] .markdown th { border-right-width: 1px; }

[dir=3D"ltr"] .markdown th:first-child { border-top-left-radius: 0.375rem; =
padding-left: 0.75rem; }

[dir=3D"rtl"] .markdown th:first-child { border-top-right-radius: 0.375rem;=
 padding-right: 0.75rem; }

[dir=3D"ltr"] .markdown th:last-child { border-right-width: 1px; border-top=
-right-radius: 0.375rem; padding-right: 0.75rem; }

[dir=3D"rtl"] .markdown th:last-child { border-left-width: 1px; border-top-=
left-radius: 0.375rem; padding-left: 0.75rem; }

.markdown td { border-bottom-width: 1px; border-color: var(--border-medium)=
; padding: 0.25rem 0.75rem; }

[dir=3D"ltr"] .markdown td { border-left-width: 1px; }

[dir=3D"rtl"] .markdown td { border-right-width: 1px; }

[dir=3D"ltr"] .markdown td:first-child { padding-left: 0.75rem; }

[dir=3D"rtl"] .markdown td:first-child { padding-right: 0.75rem; }

[dir=3D"ltr"] .markdown td:last-child { border-right-width: 1px; padding-ri=
ght: 0.75rem; }

[dir=3D"rtl"] .markdown td:last-child { border-left-width: 1px; padding-lef=
t: 0.75rem; }

[dir=3D"ltr"] .markdown tbody tr:last-child td:first-child { border-bottom-=
left-radius: 0.375rem; }

[dir=3D"rtl"] .markdown tbody tr:last-child td:first-child { border-bottom-=
right-radius: 0.375rem; }

[dir=3D"ltr"] .markdown tbody tr:last-child td:last-child { border-bottom-r=
ight-radius: 0.375rem; }

[dir=3D"rtl"] .markdown tbody tr:last-child td:last-child { border-bottom-l=
eft-radius: 0.375rem; }

.markdown a { color: var(--link); font-weight: 400; text-decoration-line: n=
one; }

@media (hover: hover) and (pointer: fine) {
  .markdown a:hover { color: var(--link-hover); }
}

.gizmo .markdown > :not(pre), .gizmo .markdown > :not(pre) > :not(a) { colo=
r: var(--text-primary); }

.markdown .float-image + p { margin-top: 0px; }

@keyframes fade-in {=20
  0% { opacity: var(--fade-in-from,0); }
  100% { opacity: 1; }
}

@keyframes fade-in-marker {=20
  0% { color: var(--fade-in-marker-from,transparent); }
}

.streaming-response a span, .streaming-response h1 span, .streaming-respons=
e h2 span, .streaming-response h3 span, .streaming-response h4 span, .strea=
ming-response h5 span, .streaming-response h6 span, .streaming-response li =
span:not([class^=3D"hljs-"]), .streaming-response p a, .streaming-response =
p span { --animation-duration: .5s; animation-duration: ; animation-timing-=
function: ; animation-iteration-count: ; animation-direction: ; animation-f=
ill-mode: ; animation-name: ; animation-timeline: ; animation-range-start: =
; animation-range-end: ; animation-delay: calc((var(--animation-count, 0) -=
 var(--animation-catch-up, 0))*var(--animation-rate, 70ms)); animation-play=
-state: var(--streaming-animation-state,paused); opacity: var(--turn-block-=
opacity,var(--turn-block-default-opacity,0)); }

.streaming-response li::marker { color: var(--marker-color); transition-pro=
perty: ; transition-duration: ; transition-timing-function: ; transition-be=
havior: ; transition-delay: calc((var(--animation-marker-count, 0) - var(--=
animation-catch-up, 0))*var(--animation-rate, 70ms)); }

@keyframes blink {=20
  100% { visibility: hidden; }
}

.result-streaming > :not(ol):not(ul):not(pre):not(div):last-child::after, .=
result-streaming > pre:last-child code::after { content: "=E2=97=8F"; font-=
family: Circle, system-ui, sans-serif; line-height: normal; vertical-align:=
 baseline; }

.result-streaming.no-flow > :not(ol):not(ul):not(pre):last-child::after, .r=
esult-streaming.no-flow > pre:last-child code::after { margin-top: 0.25rem;=
 position: absolute; }

textarea::placeholder { color: var(--text-placeholder); }

.result-thinking:empty:last-child::after { -webkit-font-smoothing: subpixel=
-antialiased; animation: 1.25s ease-in-out 0s infinite normal none running =
pulseSize; backface-visibility: hidden; background-color: var(--text-primar=
y); border-radius: 50%; box-sizing: border-box; content: " "; display: bloc=
k; height: 12px; position: absolute; top: 7px; transform: translateZ(0px); =
transform-origin: center center; width: 12px; will-change: transform; }

@supports (selector(:has(*))) {
  .result-streaming:not(.streaming-response) > :is(ul, ol):last-child > li:=
last-child:not(:has(* > li))::after, .result-streaming:not(.streaming-respo=
nse) > :is(ul, ol):last-child > li:last-child > :is(ul, ol):last-child > li=
:last-child::after, .result-streaming:not(.streaming-response) > :is(ul, ol=
):last-child > li:last-child > :is(ul, ol):last-child > li:last-child > :is=
(ul, ol):last-child > li:last-child::after { content: "=E2=97=8F"; font-fam=
ily: Circle, system-ui, sans-serif; line-height: normal; vertical-align: ba=
seline; }
  [dir=3D"ltr"] .result-streaming:not(.streaming-response) > :is(ul, ol):la=
st-child > li:last-child:not(:has(* > li))::after, [dir=3D"ltr"] .result-st=
reaming:not(.streaming-response) > :is(ul, ol):last-child > li:last-child >=
 :is(ul, ol):last-child > li:last-child::after, [dir=3D"ltr"] .result-strea=
ming:not(.streaming-response) > :is(ul, ol):last-child > li:last-child > :i=
s(ul, ol):last-child > li:last-child > :is(ul, ol):last-child > li:last-chi=
ld::after { margin-left: 0.25rem; }
  [dir=3D"rtl"] .result-streaming:not(.streaming-response) > :is(ul, ol):la=
st-child > li:last-child:not(:has(* > li))::after, [dir=3D"rtl"] .result-st=
reaming:not(.streaming-response) > :is(ul, ol):last-child > li:last-child >=
 :is(ul, ol):last-child > li:last-child::after, [dir=3D"rtl"] .result-strea=
ming:not(.streaming-response) > :is(ul, ol):last-child > li:last-child > :i=
s(ul, ol):last-child > li:last-child > :is(ul, ol):last-child > li:last-chi=
ld::after { margin-right: 0.25rem; }
}

@supports not (selector(:has(*))) {
  .result-streaming:not(.streaming-response) > ol:last-child > li:last-chil=
d::after, .result-streaming:not(.streaming-response) > ul:last-child > li:l=
ast-child::after { content: "=E2=97=8F"; font-family: Circle, system-ui, sa=
ns-serif; line-height: normal; vertical-align: baseline; }
  [dir=3D"ltr"] .result-streaming:not(.streaming-response) > ol:last-child =
> li:last-child::after, [dir=3D"ltr"] .result-streaming:not(.streaming-resp=
onse) > ul:last-child > li:last-child::after { margin-left: 0.25rem; }
  [dir=3D"rtl"] .result-streaming:not(.streaming-response) > ol:last-child =
> li:last-child::after, [dir=3D"rtl"] .result-streaming:not(.streaming-resp=
onse) > ul:last-child > li:last-child::after { margin-right: 0.25rem; }
}

.result-streaming .katex-error, .streaming-response .katex-error { display:=
 none; }

@keyframes pulse-dot {=20
  100% { transform: scale(var(--pulse-scale,1.3)); }
}

@keyframes float-sidebar-in {=20
  0% { opacity: 0; translate: -60%; }
  70% { opacity: 1; }
  100% { translate: 0px; }
}

@keyframes float-sidebar-out {=20
  0% { translate: 0px; }
  30% { opacity: 1; }
  100% { opacity: 0; translate: -60%; }
}

.pulsing-dot { aspect-ratio: 1 / 1; background: var(--dot-color); border-ra=
dius: 50%; opacity: var(--dot-opacity,1); width: 1rem; }

@media (prefers-reduced-motion: no-preference) {
  .pulsing-dot { animation: pulse-dot 1s infinite var(--easing-common) alte=
rnate-reverse; transition: .2s opacity var(--easing-common); translate: 0px=
 3px; }
}

@keyframes pulseSize {=20
  0%, 100% { transform: scaleX(1); }
  50% { transform: scale3d(1.25, 1.25, 1); }
}

@keyframes toast-open {=20
  0% { opacity: 0; transform: translateY(-100%); }
  100% { transform: translateY(0px); }
}

@keyframes toast-close {=20
  0% { opacity: 1; }
  100% { opacity: 0; }
}

.toast-root { align-items: center; display: flex; flex-direction: column; h=
eight: 0px; transition: 0.24s cubic-bezier(0, 0, 0.2, 1); }

.toast-root[data-state=3D"entered"], .toast-root[data-state=3D"entering"] {=
 animation: 0.24s cubic-bezier(0.175, 0.885, 0.32, 1) 0s 1 normal both runn=
ing toast-open; }

.toast-root[data-state=3D"exiting"] { animation: 0.12s cubic-bezier(0.4, 0,=
 1, 1) 0s 1 normal both running toast-close; }

.toast-root .alert-root { box-shadow: rgba(67, 90, 111, 0.3) 0px 0px 1px, r=
gba(67, 90, 111, 0.3) 0px 5px 8px -4px; flex-shrink: 0; pointer-events: all=
; }

.title { font-feature-settings: normal; font-family: ui-sans-serif, system-=
ui, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color E=
moji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; font-variat=
ion-settings: normal; }

.icon-xs { stroke-width: 1.5; flex-shrink: 0; height: 0.75rem; width: 0.75r=
em; }

.icon-sm { stroke-width: 2; flex-shrink: 0; height: 1rem; width: 1rem; }

.icon-sm-adaptive { height: 1.25rem; width: 1.25rem; }

@media (min-width: 768px) {
  .icon-sm-adaptive { height: 1rem; width: 1rem; }
}

.icon-sm-heavy { stroke-width: 2.5; flex-shrink: 0; height: 1rem; width: 1r=
em; }

.icon-md { height: 18px; width: 18px; }

.icon-md, .icon-sidebar { stroke-width: 1.5; flex-shrink: 0; }

.icon-sidebar { height: 20px; width: 20px; }

.icon-md-heavy { stroke-width: 2.5; flex-shrink: 0; height: 18px; width: 18=
px; }

.icon-lg { stroke-width: 1.5; flex-shrink: 0; height: 1.5rem; width: 1.5rem=
; }

.icon-lg-heavy { stroke-width: 2; flex-shrink: 0; height: 22px; width: 22px=
; }

.icon-xl { stroke-width: 1.5; flex-shrink: 0; height: 1.75rem; width: 1.75r=
em; }

.icon-xl-heavy { stroke-width: 2; flex-shrink: 0; height: 24px; width: 24px=
; }

.icon-2xl { stroke-width: 1.5; flex-shrink: 0; height: 2rem; width: 2rem; }

.icon-workspace-avatar-preview { stroke-width: 1.5; height: 96px; width: 96=
px; }

.icon-cover { stroke-width: 1.5; height: 234px; width: 234px; }

.icon-shimmer { animation: 5s cubic-bezier(0.2, 0.44, 0.38, 1.02) 0s infini=
te normal none running icon-shimmer; background-repeat: no-repeat; mask: li=
near-gradient(80deg, currentcolor 30%, rgba(0, 0, 0, 0.333), currentcolor 7=
0%) right center / 300% 100%; }

@keyframes icon-shimmer {=20
  0% { mask-position: right center; }
  20% { mask-position: left center; }
  100% { mask-position: left center; }
}

.loading-results-shimmer { animation: 3s linear 0s infinite normal none run=
ning loading-results-shimmer; background-image: ; background-position-x: ; =
background-position-y: ; background-repeat: ; background-attachment: ; back=
ground-origin: ; background-clip: ; background-color: ; background-size: 10=
00px 100%; }

@keyframes loading-results-shimmer {=20
  0% { background-position: -1000px 0px; }
  100% { background-position: 1000px 0px; }
}

.loading-shimmer-pure-text { -webkit-text-fill-color: transparent; animatio=
n-delay: 0.5s; animation-duration: 3s; animation-iteration-count: infinite;=
 animation-name: loading-shimmer; background-image: ; background-position-x=
: ; background-position-y: ; background-attachment: ; background-origin: ; =
background-color: ; background-clip: text; background-repeat: no-repeat; ba=
ckground-size: 50% 200%; display: inline-block; }

[dir=3D"ltr"] .loading-shimmer-pure-text { background-position: -100% top; =
}

[dir=3D"rtl"] .loading-shimmer-pure-text { background-position: 200% top; }

.loading-shimmer { -webkit-text-fill-color: transparent; animation-delay: 0=
.5s; animation-duration: 3s; animation-iteration-count: infinite; animation=
-name: loading-shimmer; background-image: ; background-position-x: ; backgr=
ound-position-y: ; background-attachment: ; background-origin: ; background=
-color: ; background-clip: text; background-repeat: no-repeat; background-s=
ize: 50% 200%; display: inline-block; }

[dir=3D"ltr"] .loading-shimmer { background-position: -100% top; }

[dir=3D"rtl"] .loading-shimmer { background-position: 200% top; }

.loading-shimmer:hover { -webkit-text-fill-color: var(--text-primary); anim=
ation: auto ease 0s 1 normal none running none; background: transparent; }

.hint-pill { color: var(--hint-text); font-weight: 600; }

@keyframes loading-shimmer {=20
  0% { background-position: -100% top; }
  100% { background-position: 250% top; }
}

.gizmo-shadow-stroke { position: relative; }

.gizmo-shadow-stroke::after { --tw-shadow: inset 0 0 0 1px rgba(0,0,0,.1); =
--tw-shadow-colored: inset 0 0 0 1px var(--tw-shadow-color); border-radius:=
 9999px; content: ""; inset: 0px; position: absolute; }

.dark .gizmo-shadow-stroke::after, .gizmo-shadow-stroke::after { box-shadow=
: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),va=
r(--tw-shadow); }

.dark .gizmo-shadow-stroke::after { --tw-shadow: inset 0 0 0 1px hsla(0,0%,=
100%,.2); --tw-shadow-colored: inset 0 0 0 1px var(--tw-shadow-color); }

* { scrollbar-color: var(--main-surface-tertiary) transparent; }

:hover { scrollbar-color: var(--gray-200) transparent; }

.dark :hover { scrollbar-color: var(--gray-600) transparent; }

.no-scrollbar::-webkit-scrollbar { display: none; }

.no-scrollbar { scrollbar-width: none; }

.gizmo-bot-avatar { outline: solid 1px var(--main-surface-tertiary); }

[dir=3D"ltr"] div[data-radix-popper-content-wrapper]:has(> div[data-side=3D=
"right"]) { left: min(0px,var(--radix-popper-available-width) + (-1 * var(-=
-radix-popper-anchor-width))) !important; }

[dir=3D"rtl"] div[data-radix-popper-content-wrapper]:has(> div[data-side=3D=
"right"]) { right: min(0px,var(--radix-popper-available-width) + (-1 * var(=
--radix-popper-anchor-width))) !important; }

[dir=3D"ltr"] div[data-radix-popper-content-wrapper]:has(> div[data-side=3D=
"left"]) { left: max(0px,(-1 * var(--radix-popper-available-width)) + var(-=
-radix-popper-anchor-width)) !important; }

[dir=3D"rtl"] div[data-radix-popper-content-wrapper]:has(> div[data-side=3D=
"left"]) { right: max(0px,(-1 * var(--radix-popper-available-width)) + var(=
--radix-popper-anchor-width)) !important; }

#sidebar-summarizer p:not(:first-child) { margin-top: 0px; }

.dark\:prose-invert:is(.dark *) { --tw-prose-body: var(--tw-prose-invert-bo=
dy); --tw-prose-headings: var(--tw-prose-invert-headings); --tw-prose-lead:=
 var(--tw-prose-invert-lead); --tw-prose-links: var(--tw-prose-invert-links=
); --tw-prose-bold: var(--tw-prose-invert-bold); --tw-prose-counters: var(-=
-tw-prose-invert-counters); --tw-prose-bullets: var(--tw-prose-invert-bulle=
ts); --tw-prose-hr: var(--tw-prose-invert-hr); --tw-prose-quotes: var(--tw-=
prose-invert-quotes); --tw-prose-quote-borders: var(--tw-prose-invert-quote=
-borders); --tw-prose-captions: var(--tw-prose-invert-captions); --tw-prose=
-code: var(--tw-prose-invert-code); --tw-prose-pre-code: var(--tw-prose-inv=
ert-pre-code); --tw-prose-pre-bg: var(--tw-prose-invert-pre-bg); --tw-prose=
-th-borders: var(--tw-prose-invert-th-borders); --tw-prose-td-borders: var(=
--tw-prose-invert-td-borders); }

.dark\:prose-invert:is(.dark *) :where(pre):not(:where([class~=3D"not-prose=
"] *)) code { background-color: transparent; }

.dark\:prose-invert:is(.dark *) :where(code):not(:where([class~=3D"not-pros=
e"] *)) { background-color: var(--gray-700); }

@media (min-width: 640px) {
  .sm\:absolute { position: absolute; }
  .sm\:inset-x-4 { left: 1rem; right: 1rem; }
  .sm\:bottom-snc-1 { bottom: var(--snc-1); }
  [dir=3D"ltr"] .sm\:left-1\/2 { left: 50%; }
  [dir=3D"rtl"] .sm\:left-1\/2 { right: 50%; }
  [dir=3D"ltr"] .sm\:left-6 { left: 1.5rem; }
  [dir=3D"ltr"] .sm\:right-6, [dir=3D"rtl"] .sm\:left-6 { right: 1.5rem; }
  [dir=3D"rtl"] .sm\:right-6 { left: 1.5rem; }
  .sm\:top-6 { top: 1.5rem; }
  .sm\:col-span-2 { grid-column: span 2 / span 2; }
  .sm\:-mx-6 { margin-left: -1.5rem; margin-right: -1.5rem; }
  .sm\:mx-16 { margin-left: 4rem; margin-right: 4rem; }
  .sm\:-mt-12 { margin-top: -3rem; }
  .sm\:mb-0 { margin-bottom: 0px; }
  .sm\:mb-2 { margin-bottom: 0.5rem; }
  .sm\:mb-2\.5 { margin-bottom: 0.625rem; }
  .sm\:mb-3 { margin-bottom: 0.75rem; }
  .sm\:mb-4 { margin-bottom: 1rem; }
  .sm\:mb-6 { margin-bottom: 1.5rem; }
  [dir=3D"ltr"] .sm\:ml-7 { margin-left: 1.75rem; }
  [dir=3D"rtl"] .sm\:ml-7 { margin-right: 1.75rem; }
  .sm\:mt-0 { margin-top: 0px; }
  .sm\:mt-4 { margin-top: 1rem; }
  .sm\:mt-5 { margin-top: 1.25rem; }
  .sm\:mt-auto { margin-top: auto; }
  .sm\:line-clamp-3 { -webkit-box-orient: vertical; -webkit-line-clamp: 3; =
display: -webkit-box; overflow: hidden; }
  .sm\:block { display: block; }
  .sm\:inline-block { display: inline-block; }
  .sm\:flex { display: flex; }
  .sm\:grid { display: grid; }
  .sm\:hidden { display: none; }
  .sm\:h-10 { height: 2.5rem; }
  .sm\:h-32 { height: 8rem; }
  .sm\:h-\[172px\] { height: 172px; }
  .sm\:h-full { height: 100%; }
  .sm\:h-snc-input-height { height: var(--snc-input-height); }
  .sm\:w-10 { width: 2.5rem; }
  .sm\:w-32 { width: 8rem; }
  .sm\:w-\[384px\] { width: 384px; }
  .sm\:w-\[calc\(\(100\%-1rem\)\/4\)\] { width: calc(25% - 0.25rem); }
  .sm\:w-\[calc\(100cqw-62px\)\] { width: calc(100cqw - 62px); }
  .sm\:max-w-100 { max-width: 25rem; }
  .sm\:max-w-2xl { max-width: 42rem; }
  .sm\:max-w-\[400px\] { max-width: 400px; }
  .sm\:max-w-\[552px\] { max-width: 552px; }
  .sm\:max-w-\[700px\] { max-width: 700px; }
  .sm\:max-w-\[calc\(100vw-10rem\)\] { max-width: calc(-10rem + 100vw); }
  .sm\:max-w-xs { max-width: 20rem; }
  .sm\:grow { flex-grow: 1; }
  .sm\:-translate-x-1\/2 { --tw-translate-x: -50%; transform: translate(var=
(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var=
(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var=
(--tw-scale-y)); }
  .sm\:grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }
  .sm\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .sm\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0px, 1fr)); }
  .sm\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0px, 1fr)); }
  .sm\:flex-row { flex-direction: row; }
  .sm\:flex-row-reverse { flex-direction: row-reverse; }
  .sm\:items-center { align-items: center; }
  .sm\:justify-start { justify-content: flex-start; }
  .sm\:justify-center { justify-content: center; }
  .sm\:gap-1 { gap: 0.25rem; }
  .sm\:gap-2 { gap: 0.5rem; }
  .sm\:gap-2\.5 { gap: 0.625rem; }
  .sm\:gap-3 { gap: 0.75rem; }
  .sm\:gap-4 { gap: 1rem; }
  .sm\:gap-6 { gap: 1.5rem; }
  .sm\:gap-x-16 { column-gap: 4rem; }
  .sm\:gap-x-2 { column-gap: 0.5rem; }
  .sm\:gap-x-2\.5 { column-gap: 0.625rem; }
  .sm\:gap-y-0 { row-gap: 0px; }
  .sm\:gap-y-2 { row-gap: 0.5rem; }
  .sm\:gap-y-4 { row-gap: 1rem; }
  .sm\:gap-y-5 { row-gap: 1.25rem; }
  .sm\:overflow-hidden { overflow: hidden; }
  .sm\:rounded-full { border-radius: 9999px; }
  .sm\:rounded-lg { border-radius: 0.5rem; }
  .sm\:rounded-md { border-radius: 0.375rem; }
  .sm\:rounded-t-\[30px\] { border-top-left-radius: 30px; border-top-right-=
radius: 30px; }
  [dir=3D"ltr"] .sm\:rounded-bl-xl { border-bottom-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-br-xl, [dir=3D"rtl"] .sm\:rounded-bl-xl { bord=
er-bottom-right-radius: 0.75rem; }
  [dir=3D"rtl"] .sm\:rounded-br-xl { border-bottom-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-tl-xl { border-top-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-tr-xl, [dir=3D"rtl"] .sm\:rounded-tl-xl { bord=
er-top-right-radius: 0.75rem; }
  [dir=3D"rtl"] .sm\:rounded-tr-xl { border-top-left-radius: 0.75rem; }
  .sm\:border-none { border-style: none; }
  .sm\:bg-token-main-surface-tertiary { background-color: var(--main-surfac=
e-tertiary); }
  .sm\:p-0 { padding: 0px; }
  .sm\:p-10 { padding: 2.5rem; }
  .sm\:p-2 { padding: 0.5rem; }
  .sm\:p-3 { padding: 0.75rem; }
  .sm\:p-6 { padding: 1.5rem; }
  .sm\:px-0 { padding-left: 0px; padding-right: 0px; }
  .sm\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .sm\:px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
  .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
  .sm\:px-8 { padding-left: 2rem; padding-right: 2rem; }
  .sm\:px-snc-results-padding { padding-left: var(--snc-results-padding); p=
adding-right: var(--snc-results-padding); }
  .sm\:py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }
  .sm\:py-2\.5 { padding-bottom: 0.625rem; padding-top: 0.625rem; }
  .sm\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .sm\:py-6 { padding-bottom: 1.5rem; padding-top: 1.5rem; }
  .sm\:pb-0 { padding-bottom: 0px; }
  .sm\:pb-10 { padding-bottom: 2.5rem; }
  .sm\:pb-6 { padding-bottom: 1.5rem; }
  .sm\:pb-8 { padding-bottom: 2rem; }
  [dir=3D"ltr"] .sm\:pl-3 { padding-left: 0.75rem; }
  [dir=3D"rtl"] .sm\:pl-3 { padding-right: 0.75rem; }
  [dir=3D"ltr"] .sm\:pl-5 { padding-left: 1.25rem; }
  [dir=3D"rtl"] .sm\:pl-5 { padding-right: 1.25rem; }
  [dir=3D"ltr"] .sm\:pl-\[3\.25rem\] { padding-left: 3.25rem; }
  [dir=3D"rtl"] .sm\:pl-\[3\.25rem\] { padding-right: 3.25rem; }
  [dir=3D"ltr"] .sm\:pr-2 { padding-right: 0.5rem; }
  [dir=3D"rtl"] .sm\:pr-2 { padding-left: 0.5rem; }
  [dir=3D"ltr"] .sm\:pr-5 { padding-right: 1.25rem; }
  [dir=3D"rtl"] .sm\:pr-5 { padding-left: 1.25rem; }
  .sm\:pt-12 { padding-top: 3rem; }
  .sm\:pt-4 { padding-top: 1rem; }
  .sm\:pt-8 { padding-top: 2rem; }
  .sm\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
  .sm\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
  .sm\:text-6xl { font-size: 3.75rem; line-height: 1; }
  .sm\:text-base { font-size: 1rem; line-height: 1.5rem; }
  .sm\:text-sm { font-size: 0.875rem; line-height: 1.25rem; }
  .sm\:text-token-main-surface-tertiary { color: var(--main-surface-tertiar=
y); }
  .sm\:duration-300 { transition-duration: 0.3s; }
  .sm\:duration-500 { transition-duration: 0.5s; }
  @supports (min-height:100dvh) {
  .sm\:supports-\[min-height\:100dvh\]\:min-h-\[100dvh\] { min-height: 100d=
vh; }
}
}

@media (min-width: 768px) {
  .md\:sr-only { clip: rect(0px, 0px, 0px, 0px); border-width: 0px; height:=
 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; whi=
te-space: nowrap; width: 1px; }
  .md\:invisible { visibility: hidden; }
  .md\:static { position: static; }
  .md\:absolute { position: absolute; }
  .md\:bottom-4 { bottom: 1rem; }
  [dir=3D"ltr"] .md\:left-\[-250px\] { left: -250px; }
  [dir=3D"rtl"] .md\:left-\[-250px\] { right: -250px; }
  [dir=3D"ltr"] .md\:right-12 { right: 3rem; }
  [dir=3D"rtl"] .md\:right-12 { left: 3rem; }
  [dir=3D"ltr"] .md\:right-6 { right: 1.5rem; }
  [dir=3D"rtl"] .md\:right-6 { left: 1.5rem; }
  .md\:top-6 { top: 1.5rem; }
  .md\:top-\[22px\] { top: 22px; }
  .md\:top-\[5\.75rem\] { top: 5.75rem; }
  .md\:top-header-height { top: 3.5rem; }
  .md\:col-span-1 { grid-column: span 1 / span 1; }
  .md\:col-span-2 { grid-column: span 2 / span 2; }
  .md\:m-0 { margin: 0px; }
  .md\:m-auto { margin: auto; }
  .md\:mx-4 { margin-left: 1rem; margin-right: 1rem; }
  .md\:my-4 { margin-bottom: 1rem; margin-top: 1rem; }
  .md\:mb-0 { margin-bottom: 0px; }
  .md\:mb-10 { margin-bottom: 2.5rem; }
  .md\:mb-2 { margin-bottom: 0.5rem; }
  .md\:mb-3 { margin-bottom: 0.75rem; }
  .md\:mb-4 { margin-bottom: 1rem; }
  .md\:mb-8 { margin-bottom: 2rem; }
  [dir=3D"ltr"] .md\:ml-0 { margin-left: 0px; }
  [dir=3D"rtl"] .md\:ml-0 { margin-right: 0px; }
  [dir=3D"ltr"] .md\:ml-8 { margin-left: 2rem; }
  [dir=3D"rtl"] .md\:ml-8 { margin-right: 2rem; }
  [dir=3D"ltr"] .md\:ml-\[-8px\] { margin-left: -8px; }
  [dir=3D"rtl"] .md\:ml-\[-8px\] { margin-right: -8px; }
  .md\:mt-0 { margin-top: 0px; }
  .md\:mt-2 { margin-top: 0.5rem; }
  .md\:mt-3 { margin-top: 0.75rem; }
  .md\:mt-5 { margin-top: 1.25rem; }
  .md\:mt-7 { margin-top: 1.75rem; }
  .md\:mt-8 { margin-top: 2rem; }
  .md\:mt-px { margin-top: 1px; }
  .md\:line-clamp-3 { -webkit-box-orient: vertical; -webkit-line-clamp: 3; =
display: -webkit-box; overflow: hidden; }
  .md\:block { display: block; }
  .md\:flex { display: flex; }
  .md\:inline-flex { display: inline-flex; }
  .md\:grid { display: grid; }
  .md\:hidden { display: none; }
  .md\:aspect-\[140\/67\] { aspect-ratio: 140 / 67; }
  .md\:h-14 { height: 3.5rem; }
  .md\:h-24 { height: 6rem; }
  .md\:h-32 { height: 8rem; }
  .md\:h-\[30rem\] { height: 30rem; }
  .md\:h-header-height { height: 3.5rem; }
  .md\:max-h-\[80vh\] { max-height: 80vh; }
  .md\:max-h-\[calc\(100vh-300px\)\] { max-height: calc(-300px + 100vh); }
  .md\:min-h-\[20rem\] { min-height: 20rem; }
  .md\:min-h-\[30rem\] { min-height: 30rem; }
  .md\:min-h-\[380px\] { min-height: 380px; }
  .md\:w-1\/2 { width: 50%; }
  .md\:w-1\/3 { width: 33.3333%; }
  .md\:w-24 { width: 6rem; }
  .md\:w-3\/5 { width: 60%; }
  .md\:w-\[100px\] { width: 100px; }
  .md\:w-\[250px\] { width: 250px; }
  .md\:w-\[500px\] { width: 500px; }
  .md\:w-\[720px\] { width: 720px; }
  .md\:w-\[85\%\] { width: 85%; }
  .md\:w-\[calc\(100\%-\.5rem\)\] { width: calc(100% - 0.5rem); }
  .md\:w-\[calc\(100\%-16rem\)\] { width: calc(100% - 16rem); }
  .md\:w-auto { width: auto; }
  .md\:w-full { width: 100%; }
  .md\:min-w-\[180px\] { min-width: 180px; }
  .md\:min-w-\[680px\] { min-width: 680px; }
  .md\:max-w-3xl { max-width: 48rem; }
  .md\:max-w-4xl { max-width: 56rem; }
  .md\:max-w-5xl { max-width: 64rem; }
  .md\:max-w-96 { max-width: 24rem; }
  .md\:max-w-\[672px\] { max-width: 672px; }
  .md\:max-w-\[680px\] { max-width: 680px; }
  .md\:max-w-\[80\%\] { max-width: 80%; }
  .md\:max-w-lg { max-width: 32rem; }
  .md\:max-w-none { max-width: none; }
  .md\:flex-1 { flex: 1 1 0%; }
  .md\:shrink { flex-shrink: 1; }
  .md\:grow-0 { flex-grow: 0; }
  .md\:basis-0 { flex-basis: 0px; }
  .md\:basis-\[25vw\] { flex-basis: 25vw; }
  .md\:basis-\[75vw\] { flex-basis: 75vw; }
  .md\:translate-y-\[30px\] { --tw-translate-y: 30px; transform: translate(=
var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(=
var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(=
var(--tw-scale-y)); }
  .md\:columns-3 { column-count: 3; }
  .md\:grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }
  .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .md\:grid-rows-1 { grid-template-rows: repeat(1, minmax(0px, 1fr)); }
  .md\:grid-rows-\[minmax\(20px\,_1fr\)_auto_20px\] { grid-template-rows: m=
inmax(20px, 1fr) auto 20px; }
  .md\:grid-rows-\[minmax\(20px\,_1fr\)_auto_minmax\(20px\,_1fr\)\] { grid-=
template-rows: minmax(20px, 1fr) auto minmax(20px, 1fr); }
  .md\:flex-row { flex-direction: row; }
  .md\:flex-row-reverse { flex-direction: row-reverse; }
  .md\:items-start { align-items: flex-start; }
  .md\:items-center { align-items: center; }
  .md\:justify-center { justify-content: center; }
  .md\:justify-between { justify-content: space-between; }
  .md\:gap-0 { gap: 0px; }
  .md\:gap-2 { gap: 0.5rem; }
  .md\:gap-3 { gap: 0.75rem; }
  .md\:gap-5 { gap: 1.25rem; }
  .md\:gap-8 { gap: 2rem; }
  .md\:gap-x-2 { column-gap: 0.5rem; }
  .md\:gap-y-1 { row-gap: 0.25rem; }
  .md\:gap-y-1\.5 { row-gap: 0.375rem; }
  .md\:self-end { align-self: flex-end; }
  .md\:overflow-hidden { overflow: hidden; }
  .md\:overflow-visible { overflow: visible; }
  .md\:whitespace-normal { white-space: normal; }
  .md\:rounded-lg { border-radius: 0.5rem; }
  .md\:rounded-none { border-radius: 0px; }
  .md\:border-b-2 { border-bottom-width: 2px; }
  [dir=3D"ltr"] .md\:border-l { border-left-width: 1px; }
  [dir=3D"ltr"] .md\:border-r, [dir=3D"rtl"] .md\:border-l { border-right-w=
idth: 1px; }
  [dir=3D"rtl"] .md\:border-r { border-left-width: 1px; }
  [dir=3D"ltr"] .md\:border-r-0 { border-right-width: 0px; }
  [dir=3D"rtl"] .md\:border-r-0 { border-left-width: 0px; }
  .md\:border-t-0 { border-top-width: 0px; }
  .md\:border-gray-100 { --tw-border-opacity: 1; border-color: rgb(236 236 =
236/var(--tw-border-opacity)); }
  .md\:border-transparent { border-color: transparent; }
  .md\:\!bg-transparent { background-color: transparent !important; }
  .md\:bg-transparent { background-color: transparent; }
  [dir=3D"ltr"] .md\:bg-vert-light-gradient { background-image: linear-grad=
ient(rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }
  [dir=3D"rtl"] .md\:bg-vert-light-gradient { background-image: linear-grad=
ient(-180deg, rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }
  .md\:p-20 { padding: 5rem; }
  .md\:p-4 { padding: 1rem; }
  .md\:p-6 { padding: 1.5rem; }
  .md\:px-0 { padding-left: 0px; padding-right: 0px; }
  .md\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .md\:px-12 { padding-left: 3rem; padding-right: 3rem; }
  .md\:px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
  .md\:px-20 { padding-left: 5rem; padding-right: 5rem; }
  .md\:px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
  .md\:px-4 { padding-left: 1rem; padding-right: 1rem; }
  .md\:px-5 { padding-left: 1.25rem; padding-right: 1.25rem; }
  .md\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
  .md\:px-\[60px\] { padding-left: 60px; padding-right: 60px; }
  .md\:py-0 { padding-bottom: 0px; padding-top: 0px; }
  .md\:py-1 { padding-bottom: 0.25rem; padding-top: 0.25rem; }
  .md\:py-1\.5 { padding-bottom: 0.375rem; padding-top: 0.375rem; }
  .md\:py-16 { padding-bottom: 4rem; padding-top: 4rem; }
  .md\:py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }
  .md\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .md\:py-4 { padding-bottom: 1rem; padding-top: 1rem; }
  .md\:py-\[22px\] { padding-bottom: 22px; padding-top: 22px; }
  .md\:\!pt-0 { padding-top: 0px !important; }
  .md\:pb-0 { padding-bottom: 0px; }
  .md\:pb-10 { padding-bottom: 2.5rem; }
  .md\:pb-5 { padding-bottom: 1.25rem; }
  .md\:pb-6 { padding-bottom: 1.5rem; }
  .md\:pb-9 { padding-bottom: 2.25rem; }
  [dir=3D"ltr"] .md\:pl-2 { padding-left: 0.5rem; }
  [dir=3D"rtl"] .md\:pl-2 { padding-right: 0.5rem; }
  [dir=3D"ltr"] .md\:pl-4 { padding-left: 1rem; }
  [dir=3D"rtl"] .md\:pl-4 { padding-right: 1rem; }
  [dir=3D"ltr"] .md\:pl-6 { padding-left: 1.5rem; }
  [dir=3D"rtl"] .md\:pl-6 { padding-right: 1.5rem; }
  [dir=3D"ltr"] .md\:pr-3 { padding-right: 0.75rem; }
  [dir=3D"rtl"] .md\:pr-3 { padding-left: 0.75rem; }
  [dir=3D"ltr"] .md\:pr-8 { padding-right: 2rem; }
  [dir=3D"rtl"] .md\:pr-8 { padding-left: 2rem; }
  .md\:ps-0 { padding-inline-start: 0px; }
  .md\:pt-0 { padding-top: 0px; }
  .md\:pt-4 { padding-top: 1rem; }
  .md\:pt-5 { padding-top: 1.25rem; }
  .md\:pt-\[3px\] { padding-top: 3px; }
  .md\:pt-\[4\.5rem\] { padding-top: 4.5rem; }
  [dir=3D"ltr"] .md\:text-left { text-align: left; }
  [dir=3D"rtl"] .md\:text-left { text-align: right; }
  .md\:text-justify { text-align: justify; }
  .md\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
  .md\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
  .md\:text-5xl { font-size: 3rem; line-height: 1; }
  .md\:text-7xl { font-size: 4.5rem; line-height: 1; }
  .md\:text-\[32px\] { font-size: 32px; }
  .md\:text-\[40px\] { font-size: 40px; }
  .md\:text-base { font-size: 1rem; line-height: 1.5rem; }
  .md\:text-lg { font-size: 1.125rem; line-height: 1.75rem; }
  .md\:text-xs { font-size: 0.75rem; line-height: 1rem; }
  .md\:leading-8 { line-height: 2rem; }
  .md\:leading-tight { line-height: 1.25; }
  .md\:text-token-text-primary { color: var(--text-primary); }
  .md\:text-token-text-tertiary { color: var(--text-tertiary); }
  .md\:opacity-0 { opacity: 0; }
  [dir=3D"ltr"] .md\:first\:ml-0:first-child { margin-left: 0px; }
  [dir=3D"rtl"] .md\:first\:ml-0:first-child { margin-right: 0px; }
  [dir=3D"ltr"] .md\:first\:rounded-bl-xl:first-child { border-bottom-left-=
radius: 0.75rem; }
  [dir=3D"rtl"] .md\:first\:rounded-bl-xl:first-child { border-bottom-right=
-radius: 0.75rem; }
  [dir=3D"ltr"] .md\:first\:rounded-tl-xl:first-child { border-top-left-rad=
ius: 0.75rem; }
  [dir=3D"rtl"] .md\:first\:rounded-tl-xl:first-child { border-top-right-ra=
dius: 0.75rem; }
  .md\:last\:mb-6:last-child { margin-bottom: 1.5rem; }
  [dir=3D"ltr"] .md\:last\:mr-0:last-child { margin-right: 0px; }
  [dir=3D"rtl"] .md\:last\:mr-0:last-child { margin-left: 0px; }
  [dir=3D"ltr"] .md\:last\:rounded-br-xl:last-child { border-bottom-right-r=
adius: 0.75rem; }
  [dir=3D"rtl"] .md\:last\:rounded-br-xl:last-child { border-bottom-left-ra=
dius: 0.75rem; }
  [dir=3D"ltr"] .md\:last\:rounded-tr-xl:last-child { border-top-right-radi=
us: 0.75rem; }
  [dir=3D"rtl"] .md\:last\:rounded-tr-xl:last-child { border-top-left-radiu=
s: 0.75rem; }
  [dir=3D"ltr"] .md\:last\:border-r:last-child { border-right-width: 1px; }
  [dir=3D"rtl"] .md\:last\:border-r:last-child { border-left-width: 1px; }
  @media (hover: hover) and (pointer: fine) {
  .md\:hover\:bg-gray-50:hover { --tw-bg-opacity: 1; background-color: rgb(=
249 249 249/var(--tw-bg-opacity)); }
}
  .md\:radix-state-active\:bg-token-main-surface-secondary[data-state=3D"ac=
tive"] { background-color: var(--main-surface-secondary); }
  .md\:radix-state-active\:bg-token-main-surface-tertiary[data-state=3D"act=
ive"] { background-color: var(--main-surface-tertiary); }
  .md\:radix-state-active\:text-token-text-primary[data-state=3D"active"] {=
 color: var(--text-primary); }
  .md\:dark\:border-gray-700:is(.dark *) { --tw-border-opacity: 1; border-c=
olor: rgb(66 66 66/var(--tw-border-opacity)); }
  .md\:dark\:border-transparent:is(.dark *) { border-color: transparent; }
  .dark\:md\:bg-transparent:is(.dark *) { background-color: transparent; }
  @media (hover: hover) and (pointer: fine) {
  .dark\:md\:hover\:bg-gray-700:hover:is(.dark *) { --tw-bg-opacity: 1; bac=
kground-color: rgb(66 66 66/var(--tw-bg-opacity)); }
}
}

@media (min-width: 1536px) {
  [dir=3D"ltr"] .\32 xl\:left-\[-400px\] { left: -400px; }
  [dir=3D"rtl"] .\32 xl\:left-\[-400px\] { right: -400px; }
  .\32 xl\:w-\[400px\] { width: 400px; }
  .\32 xl\:max-w-\[800px\] { max-width: 800px; }
  .\32 xl\:pt-12 { padding-top: 3rem; }
  .\32 xl\:text-xl { font-size: 1.25rem; line-height: 1.75rem; }
}

@font-face { font-family: KaTeX_AMS; font-style: normal; font-weight: 400; =
src: url("https://cdn.oaistatic.com/assets/KaTeX_AMS-Regular-e1why8ff.woff2=
") format("woff2"); }

@font-face { font-family: KaTeX_Caligraphic; font-style: normal; font-weigh=
t: 700; src: url("https://cdn.oaistatic.com/assets/KaTeX_Caligraphic-Bold-n=
63xiolk.woff2") format("woff2"); }

@font-face { font-family: KaTeX_Caligraphic; font-style: normal; font-weigh=
t: 400; src: url("https://cdn.oaistatic.com/assets/KaTeX_Caligraphic-Regula=
r-npwmqylf.woff2") format("woff2"); }

@font-face { font-family: KaTeX_Fraktur; font-style: normal; font-weight: 7=
00; src: url("https://cdn.oaistatic.com/assets/KaTeX_Fraktur-Bold-ikhebgtj.=
woff2") format("woff2"); }

@font-face { font-family: KaTeX_Fraktur; font-style: normal; font-weight: 4=
00; src: url("https://cdn.oaistatic.com/assets/KaTeX_Fraktur-Regular-i0egur=
y6.woff2") format("woff2"); }

@font-face { font-family: KaTeX_Main; font-style: normal; font-weight: 700;=
 src: url("https://cdn.oaistatic.com/assets/KaTeX_Main-Bold-ktk38ybk.woff2"=
) format("woff2"); }

@font-face { font-family: KaTeX_Main; font-style: italic; font-weight: 700;=
 src: url("https://cdn.oaistatic.com/assets/KaTeX_Main-BoldItalic-oj033t4i.=
woff2") format("woff2"); }

@font-face { font-family: KaTeX_Main; font-style: italic; font-weight: 400;=
 src: url("https://cdn.oaistatic.com/assets/KaTeX_Main-Italic-2p4bq1jf.woff=
2") format("woff2"); }

@font-face { font-family: KaTeX_Main; font-style: normal; font-weight: 400;=
 src: url("https://cdn.oaistatic.com/assets/KaTeX_Main-Regular-hbkzldb8.wof=
f2") format("woff2"); }

@font-face { font-family: KaTeX_Math; font-style: italic; font-weight: 700;=
 src: url("https://cdn.oaistatic.com/assets/KaTeX_Math-BoldItalic-jdo1yxu8.=
woff2") format("woff2"); }

@font-face { font-family: KaTeX_Math; font-style: italic; font-weight: 400;=
 src: url("https://cdn.oaistatic.com/assets/KaTeX_Math-Italic-cz4b2ure.woff=
2") format("woff2"); }

@font-face { font-family: KaTeX_SansSerif; font-style: normal; font-weight:=
 700; src: url("https://cdn.oaistatic.com/assets/KaTeX_SansSerif-Bold-otxc8=
itm.woff2") format("woff2"); }

@font-face { font-family: KaTeX_SansSerif; font-style: italic; font-weight:=
 400; src: url("https://cdn.oaistatic.com/assets/KaTeX_SansSerif-Italic-k4k=
ksncm.woff2") format("woff2"); }

@font-face { font-family: KaTeX_SansSerif; font-style: normal; font-weight:=
 400; src: url("https://cdn.oaistatic.com/assets/KaTeX_SansSerif-Regular-lt=
w53ck4.woff2") format("woff2"); }

@font-face { font-family: KaTeX_Script; font-style: normal; font-weight: 40=
0; src: url("https://cdn.oaistatic.com/assets/KaTeX_Script-Regular-oybd33cp=
.woff2") format("woff2"); }

@font-face { font-family: KaTeX_Size1; font-style: normal; font-weight: 400=
; src: url("https://cdn.oaistatic.com/assets/KaTeX_Size1-Regular-cjccv44r.w=
off2") format("woff2"); }

@font-face { font-family: KaTeX_Size2; font-style: normal; font-weight: 400=
; src: url("https://cdn.oaistatic.com/assets/KaTeX_Size2-Regular-onxq3bzc.w=
off2") format("woff2"); }

@font-face { font-family: KaTeX_Size3; font-style: normal; font-weight: 400=
; src: url("data:font/woff2;base64,d09GMgABAAAAAA4oAA4AAAAAHbQAAA3TAAEAAAAA=
AAAAAAAAAAAAAAAAAAAAAAAABmAAgRQIDgmcDBEICo1oijYBNgIkA14LMgAEIAWJAAeBHAyBHBv=
bGiMRdnO0IkRRkiYDgr9KsJ1NUAf2kILNxgUmgqIgq1P89vcbIcmsQbRps3vCcXdYOKSWEPEKgZ=
gQkprQQsxIXUgq0DqpGKmIvrgkeVGtEQD9DzAO29fM9jYhxZEsL2FeURH2JN4MIcTdO049NCVdx=
Q/w9NrSYFEBKTDKpLKfNkCGDc1RwjZLQcm3vqJ2UW9Xfa3tgAHz6ivp6vgC2yD4/6352ndnN0X0=
TL7seypkjZlMsjmZnf0Mm5Q+JykRWQBKCVCVPbARPXWyQtb5VgLB6Biq7/Uixcj2WGqdI8tGSgk=
uRG+t910GKP2D7AQH0DB9FMDW/obJZ8giFI3Wg8Cvevz0M+5m0rTh7XDBlvo9Y4vm13EXmfttwI=
4mBo1EG15fxJhUiCLbiiyCf/ZA6MFAhg3pGIZGdGIVjtPn6UcMk9A/UUr9PhoNsCENw1APAq0gp=
H73e+M+0ueyHbabc3vkbcdtzcf/fiy+NxQEjf9ud/ELBHAXJ0nk4z+MXH2Ev/kWyV4k7SkvpPc9=
Qr38F6RPWnM9cN6DJ0AdD1BhtgABtmoRoFCvPsBAumNm6soZG2Gk5GyVTo2sJncSyp0jQTYoR6W=
DvTwaaEcHsxHfvuWhHA3a6bN7twRKtcGok6NsCi7jYRrM2jExsUFMxMQYuJbMhuWNOumEJy9hi2=
9Dmg5zMp/A5+hhPG19j1vBrq8JTLr8ki5VLPmG/PynJHVul440bxg5xuymHUFPBshC+nA9I1Fmw=
bRBTNHAcik3Oae0cxKoI3MOriM42UrPe51nsaGxJ+WfXubAsP84aabUlQSJ1IiE0iPETLUU4CAT=
gfXSCSpuRFRmCGbO+wSpAnzaeaCYW1VNEysRtuXCEL1kUFUbbtMv3Tilt/1c11jt3Q5bbMa84cp=
Wipp8Elw3MZhOHsOlwwVUQM3lAR35JiFQbaYCRnMF2lxAWoOg2gyoIV4PouX8HytNIfLhqpJtXB=
4vjiViUI8IJ7bkC4ikkQvKksnOTKICwnqWSZ9YS5f0WCxmpgjbIq7EJcM4aI2nmhLNY2JIUgOjX=
ZFWBHb+x5oh6cwb0Tv1ackHdKi0I9OO2wE9aogIOn540CCCziyhN+IaejtgAONKznHlHyutPrHG=
wCx9S6B8kfS4Mfi4Eyv7OU730bT1SCBjt834cXsf43zVjPUqqJjgrjeGnBxSG4aYAKFuVbeCfkD=
IjAqMb6yLNIbCuvXhMH2/+k2vkNpkORhR59N1CkzoOENvneIosjYmuTxlhUzaGEJQ/iWqx4dmwp=
mKjrwTiTGTCVozNAYqk/zXOndWxuWSmJkQpJw3pK5KX6QrLt5LATMqpmPAQhkhK6PUjzHUn7E0g=
HE0kPE0iKkolgkUx9SZmVAdDgpffdyJKg3k7VmzYGCwVXGz/tXmkOIp+vcWs+EMuhhvN0h9uhfz=
WJziBQmCREGSIFmQIkgVpAnSBRmC//6hkLZwaVhwxlrJSOdqlFtOYxlau9F2QN5Y98xmIAsiM1H=
Vp2VFX+DHHGg6Ecjh3vmqtidX3qHI2qycTk/iwxSt5UzTmEP92ZBnEWTk4Mx8Mpl78ZDokxg/KW=
b+Q0QkvdKVmq3TMW+RXEgrsziSAfNXFMhDc60N5N9jQzjfO0kBKpUZl0ZmwJ41j/B9Hz6wmRaJB=
84niNmQrzp9eSlQCDDzazGDdVi3P36VZQ+Jy4f9UBNp+3zTjqI4abaFAm+GShVaXlsGdF3FYzZc=
DI6cori4kMxUECl9IjJZpzkvitAoxKue+90pDMvcKRxLl53TmOKCmV/xRolNKSqqUxc6LStOETm=
FOiLZZptlZepcKiAzteG8PEdpnQpbOMNcMsR4RR2Bs0cKFEvSmIjAFcnarqwUL4lDhHmnVkwu1I=
wshbiCcgvOheZuYyOteufZZwlcTlLgnZ3o/WcYdzZHW/WGaqaVfmTZ1aWCceJjkbZqsfbkOtcFl=
UZM/jy+hXHDbaUobWqqXaeWobbLO99yG5N3U4wxco0rQGGcOLASFMXeJoham8M+/x6O2WywK2l4=
HGbq1CoUyC/IZikQhdq3SiuNrvAEj0AVu9x2x3lp/xWzahaxidezFVtdcb5uEnzyl0ZmYiuKI0e=
xvCd4Xc9CV1KB0db00z92wDPde0kukbvZIWN6jUWFTmPIC/Y4UPCm8UfDTFZpZNon1qLFTkBhxz=
B+FjQRA2Q/YRJT8pQigslMaUpFyAG8TMlXigiqmAZX4xgijKjRlGpLE0GdplRfCaJo0JQaSxNBk=
6ZmMzcya0FmrcisDdn0Q3HI2sWSppYigmlM1XT/kLQZSNpMJG0WkjYbSZuDpM1F0uYhFc1HxU4m=
1QJjDK6iL0S5uSj5rgXc3RejEigtcRBtqYPQsiTskmO5vosV+q4VGIKbOkDg0jtRrq+Em1YloaT=
Far3EGr1EUC8R0kus1Uus00usL97ABr2BjXoDm/QGNhuWtMVBKOwg/i78lT7hBsAvDmwHc/ao3v=
mUbBmhjeYySZNWvGkfZAgISDSaDo1SVpzGDsAEkF8B+gEapViUoZgUWXcRIGFZNm6gWbAKk0bp0=
k1MHG9fLYtV4iS2SmLEQFARzRcnf9PUS0LVn05/J9MiRRBU3v2IrvW974v4N00L7ZMk0wXP1409=
CHo/an8zTRHD3eSJ6m8D4YMkZNl3M79sqeuAsr/m3f+8/yl7A50aiAEJgeBeMWzu7ui9UfUBCe2=
TIqZIoOd/3/udRBOQidQZUERzb2/VwZN1H/Sju82ew2H2Wfr6qvfVf3hqwDvAIpkQVFy4B9Pe9e=
4/XvPeceu7h3dvO56iJPf0+A6cqA2ip18ER+iFgggiuOkvj24bby0N9j2UHIkgqIt+sVgfodC4Y=
ghLSMjSZbH0VR/6dMDrYJeKHilKTemt6v6kvzvn3/RrdWtr0GoN/xL+Sex/cPYLUpepx9cz/D46=
UPU5KXgAQa+NDps1v6J3xP1i2HtaDB0M9aX2deA7SYff//+gUCovMmIK/qfsFcOk+4Y5ZN97XlG=
6zebqtMbKgeRFi51vnxTQYBUik2rS/Cn6PC8ADR8FGxsRPB82dzfND90gIcshOcYUkfjherBz53=
odpm6TP8txlwOZ71xmfHHOvq053qFF/MRlS3jP0ELudrf2OeN8DHvp6ZceLe8qKYvWz/7yp0u4d=
KPfli3CYq0O13Ih71mylJ80tOi10On8wi+F4+LWgDPeJ30msSQt9/vkmHq9/Lvo2b461mP801v3=
W4xTcs6CbvF9UDdrSt+A8OUbpSh55qAUFXWznBBfdeJ8a4d7ugT5tvxUza3h9m4H7ptTqiG4z0g=
5dc0X29OcGlhpGFMpQo9ytTS+NViZpNdvU4kWx+LKxNY10kQ1yqGXrhe4/1nvP7E+nd5A92TtaR=
plbHSqoIdOqtRWti+fkB5/n1+/VvCmz12pG1kpQWsfi1ftlBobm0bpngs16CHkbIwdLnParxtTV=
3QYRlfJ0KFskH7pdN/YDn+yRuSd7sNH3aO0DYPggk6uWuXrfOc+fa3VTxFVvKaNxHsiHmsXyCLI=
E5yuOeN3/Jdf8HBL/5M6shjyhxHx9BjB1O0+4NLOnjLLSxwO7ukN4jMbOIcD879KLSi6Pk61Oqm=
2377n8079PXEEQ7cy7OKEC9nbpet118fxweTafpt69x/Bt8UqGzNQt7aelpc44dn5cqhwf71+qK=
p/Zf/+a0zcizOUWpl/iBcSXip0pplkatCchoH5c5aUM8I7/dWxAej8WicPL1URFZ9BDJelUwEwT=
kGqUhgSlydVes95YdXvhh9Gfz/aeFWvgVb4tuLbcv4+wLdutVZv/cUonwBD/6eDlE0aSiKK/uoH=
3+J1wDE/jMVqY2ysGufN84oIXB0sPzy8ollX/LegY74DgJXJR57sn+VGza0x3DnuIgABFM15Lma=
jjjsNlYj+JEZGbuRYcAMOWxFkPN2w6Wd46xo4gVWQR/X4lyI/R6K/YK0110GzudPRW7Y+UOBGTf=
NNzHeYT0fiH0taunBpq9HEW8OKSaBGj21L0MqenEmNRWBAWDWAk4CpNoEZJ2tTaPFgbQYj8HxtF=
ilErs3BTRwT8uO1NXQaWfIotchmPkAF5mMBAliEmZiOGVgCG9LgRzpscMAOOwowlT3JhusdazXG=
SC/hxR3UlmWVwWHpOIKheqONvjyhSiTHIkVUco5bnji8m//zL7PKaT1Vl5I6UE609f+gkr6MZKV=
yKc7zJRmCahLsdlyA5fdQkRSan9LgnnLEyGSkaKJCJog0wAgvepWBt80+1yKln1bMVtCljfNWDu=
eKLsWwaEbBSfSPTEmVRsUcYYMnEjcjeyCZzBXK9E9BYBXLKjOSpUDR+nEV3TFSUdQaz+ot98Qxg=
Xwx0GQ+EEUAKB2qZPkQQ0GqFD8UPFMqyaCHM24BZmSGic9EYMagKizOw9Hz50DMrDLrqqLkTAhp=
lMictiCAx5S3BIUQdeJeLnBy2CNtMfz6cV4u8XKoFZQesbf9YZiIERiHjaNodDW6LgcirX/mPnJ=
IkBGDUpTBhSa0EIr38D5hCIszhCM8URGBqImoWjpvpt1ebu/v3Gl3qJfMnNM+9V+kiRFyROTPHQ=
WOcs1dNW94/ukKMPZBvDi55i5CttdeJz84DLngLqjcdwEZ87bFFR8CIG35OAkDVN6VRDZ7aq67N=
teYqZ2lpT8oYB2CytoBd6VuAx4WgiAsnuj3WohG+LugzXiQRDeM3XYXlULv4dp5VFYC") forma=
t("woff2"); }

@font-face { font-family: KaTeX_Size4; font-style: normal; font-weight: 400=
; src: url("https://cdn.oaistatic.com/assets/KaTeX_Size4-Regular-nv9nppzf.w=
off2") format("woff2"); }

@font-face { font-family: KaTeX_Typewriter; font-style: normal; font-weight=
: 400; src: url("https://cdn.oaistatic.com/assets/KaTeX_Typewriter-Regular-=
iqvr3vwu.woff2") format("woff2"); }

.katex { font: 1.21em / 1.2 KaTeX_Main, "Times New Roman", serif; text-inde=
nt: 0px; text-rendering: auto; }

.katex * { border-color: currentcolor; }

.katex .katex-version::after { content: "0.16.0"; }

.katex .katex-mathml { clip: rect(1px, 1px, 1px, 1px); border: 0px; height:=
 1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; }

.katex .katex-html > .newline { display: block; }

.katex .base { position: relative; white-space: nowrap; width: min-content;=
 }

.katex .base, .katex .strut { display: inline-block; }

.katex .textbf { font-weight: 700; }

.katex .textit { font-style: italic; }

.katex .textrm { font-family: KaTeX_Main; }

.katex .textsf { font-family: KaTeX_SansSerif; }

.katex .texttt { font-family: KaTeX_Typewriter; }

.katex .mathnormal { font-family: KaTeX_Math; font-style: italic; }

.katex .mathit { font-family: KaTeX_Main; font-style: italic; }

.katex .mathrm { font-style: normal; }

.katex .mathbf { font-family: KaTeX_Main; font-weight: 700; }

.katex .boldsymbol { font-family: KaTeX_Math; font-style: italic; font-weig=
ht: 700; }

.katex .amsrm, .katex .mathbb, .katex .textbb { font-family: KaTeX_AMS; }

.katex .mathcal { font-family: KaTeX_Caligraphic; }

.katex .mathfrak, .katex .textfrak { font-family: KaTeX_Fraktur; }

.katex .mathtt { font-family: KaTeX_Typewriter; }

.katex .mathscr, .katex .textscr { font-family: KaTeX_Script; }

.katex .mathsf, .katex .textsf { font-family: KaTeX_SansSerif; }

.katex .mathboldsf, .katex .textboldsf { font-family: KaTeX_SansSerif; font=
-weight: 700; }

.katex .mathitsf, .katex .textitsf { font-family: KaTeX_SansSerif; font-sty=
le: italic; }

.katex .mainrm { font-family: KaTeX_Main; font-style: normal; }

.katex .vlist-t { border-collapse: collapse; display: inline-table; table-l=
ayout: fixed; }

.katex .vlist-r { display: table-row; }

.katex .vlist { display: table-cell; position: relative; vertical-align: bo=
ttom; }

.katex .vlist > span { display: block; height: 0px; position: relative; }

.katex .vlist > span > span { display: inline-block; }

.katex .vlist > span > .pstrut { overflow: hidden; width: 0px; }

[dir=3D"ltr"] .katex .vlist-t2 { margin-right: -2px; }

[dir=3D"rtl"] .katex .vlist-t2 { margin-left: -2px; }

.katex .vlist-s { display: table-cell; font-size: 1px; min-width: 2px; vert=
ical-align: bottom; width: 2px; }

.katex .vbox { align-items: baseline; display: inline-flex; flex-direction:=
 column; }

.katex .hbox { width: 100%; }

.katex .hbox, .katex .thinbox { display: inline-flex; flex-direction: row; =
}

.katex .thinbox { max-width: 0px; width: 0px; }

[dir=3D"ltr"] .katex .msupsub { text-align: left; }

[dir=3D"rtl"] .katex .msupsub { text-align: right; }

.katex .mfrac > span > span { text-align: center; }

.katex .mfrac .frac-line { border-bottom-style: solid; display: inline-bloc=
k; width: 100%; }

.katex .hdashline, .katex .hline, .katex .mfrac .frac-line, .katex .overlin=
e .overline-line, .katex .rule, .katex .underline .underline-line { min-hei=
ght: 1px; }

.katex .mspace { display: inline-block; }

.katex .clap, .katex .llap, .katex .rlap { position: relative; width: 0px; =
}

.katex .clap > .inner, .katex .llap > .inner, .katex .rlap > .inner { posit=
ion: absolute; }

.katex .clap > .fix, .katex .llap > .fix, .katex .rlap > .fix { display: in=
line-block; }

[dir=3D"ltr"] .katex .llap > .inner { right: 0px; }

[dir=3D"ltr"] .katex .clap > .inner, [dir=3D"ltr"] .katex .rlap > .inner, [=
dir=3D"rtl"] .katex .llap > .inner { left: 0px; }

[dir=3D"rtl"] .katex .clap > .inner, [dir=3D"rtl"] .katex .rlap > .inner { =
right: 0px; }

[dir=3D"ltr"] .katex .clap > .inner > span { margin-left: -50%; margin-righ=
t: 50%; }

[dir=3D"rtl"] .katex .clap > .inner > span { margin-left: 50%; margin-right=
: -50%; }

.katex .rule { border: 0px solid; display: inline-block; position: relative=
; }

.katex .hline, .katex .overline .overline-line, .katex .underline .underlin=
e-line { border-bottom-style: solid; display: inline-block; width: 100%; }

.katex .hdashline { border-bottom-style: dashed; display: inline-block; wid=
th: 100%; }

[dir=3D"ltr"] .katex .sqrt > .root { margin-left: 0.277778em; margin-right:=
 -0.555556em; }

[dir=3D"rtl"] .katex .sqrt > .root { margin-left: -0.555556em; margin-right=
: 0.277778em; }

.katex .fontsize-ensurer.reset-size1.size1, .katex .sizing.reset-size1.size=
1 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size1.size2, .katex .sizing.reset-size1.size=
2 { font-size: 1.2em; }

.katex .fontsize-ensurer.reset-size1.size3, .katex .sizing.reset-size1.size=
3 { font-size: 1.4em; }

.katex .fontsize-ensurer.reset-size1.size4, .katex .sizing.reset-size1.size=
4 { font-size: 1.6em; }

.katex .fontsize-ensurer.reset-size1.size5, .katex .sizing.reset-size1.size=
5 { font-size: 1.8em; }

.katex .fontsize-ensurer.reset-size1.size6, .katex .sizing.reset-size1.size=
6 { font-size: 2em; }

.katex .fontsize-ensurer.reset-size1.size7, .katex .sizing.reset-size1.size=
7 { font-size: 2.4em; }

.katex .fontsize-ensurer.reset-size1.size8, .katex .sizing.reset-size1.size=
8 { font-size: 2.88em; }

.katex .fontsize-ensurer.reset-size1.size9, .katex .sizing.reset-size1.size=
9 { font-size: 3.456em; }

.katex .fontsize-ensurer.reset-size1.size10, .katex .sizing.reset-size1.siz=
e10 { font-size: 4.148em; }

.katex .fontsize-ensurer.reset-size1.size11, .katex .sizing.reset-size1.siz=
e11 { font-size: 4.976em; }

.katex .fontsize-ensurer.reset-size2.size1, .katex .sizing.reset-size2.size=
1 { font-size: 0.833333em; }

.katex .fontsize-ensurer.reset-size2.size2, .katex .sizing.reset-size2.size=
2 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size2.size3, .katex .sizing.reset-size2.size=
3 { font-size: 1.16667em; }

.katex .fontsize-ensurer.reset-size2.size4, .katex .sizing.reset-size2.size=
4 { font-size: 1.33333em; }

.katex .fontsize-ensurer.reset-size2.size5, .katex .sizing.reset-size2.size=
5 { font-size: 1.5em; }

.katex .fontsize-ensurer.reset-size2.size6, .katex .sizing.reset-size2.size=
6 { font-size: 1.66667em; }

.katex .fontsize-ensurer.reset-size2.size7, .katex .sizing.reset-size2.size=
7 { font-size: 2em; }

.katex .fontsize-ensurer.reset-size2.size8, .katex .sizing.reset-size2.size=
8 { font-size: 2.4em; }

.katex .fontsize-ensurer.reset-size2.size9, .katex .sizing.reset-size2.size=
9 { font-size: 2.88em; }

.katex .fontsize-ensurer.reset-size2.size10, .katex .sizing.reset-size2.siz=
e10 { font-size: 3.45667em; }

.katex .fontsize-ensurer.reset-size2.size11, .katex .sizing.reset-size2.siz=
e11 { font-size: 4.14667em; }

.katex .fontsize-ensurer.reset-size3.size1, .katex .sizing.reset-size3.size=
1 { font-size: 0.714286em; }

.katex .fontsize-ensurer.reset-size3.size2, .katex .sizing.reset-size3.size=
2 { font-size: 0.857143em; }

.katex .fontsize-ensurer.reset-size3.size3, .katex .sizing.reset-size3.size=
3 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size3.size4, .katex .sizing.reset-size3.size=
4 { font-size: 1.14286em; }

.katex .fontsize-ensurer.reset-size3.size5, .katex .sizing.reset-size3.size=
5 { font-size: 1.28571em; }

.katex .fontsize-ensurer.reset-size3.size6, .katex .sizing.reset-size3.size=
6 { font-size: 1.42857em; }

.katex .fontsize-ensurer.reset-size3.size7, .katex .sizing.reset-size3.size=
7 { font-size: 1.71429em; }

.katex .fontsize-ensurer.reset-size3.size8, .katex .sizing.reset-size3.size=
8 { font-size: 2.05714em; }

.katex .fontsize-ensurer.reset-size3.size9, .katex .sizing.reset-size3.size=
9 { font-size: 2.46857em; }

.katex .fontsize-ensurer.reset-size3.size10, .katex .sizing.reset-size3.siz=
e10 { font-size: 2.96286em; }

.katex .fontsize-ensurer.reset-size3.size11, .katex .sizing.reset-size3.siz=
e11 { font-size: 3.55429em; }

.katex .fontsize-ensurer.reset-size4.size1, .katex .sizing.reset-size4.size=
1 { font-size: 0.625em; }

.katex .fontsize-ensurer.reset-size4.size2, .katex .sizing.reset-size4.size=
2 { font-size: 0.75em; }

.katex .fontsize-ensurer.reset-size4.size3, .katex .sizing.reset-size4.size=
3 { font-size: 0.875em; }

.katex .fontsize-ensurer.reset-size4.size4, .katex .sizing.reset-size4.size=
4 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size4.size5, .katex .sizing.reset-size4.size=
5 { font-size: 1.125em; }

.katex .fontsize-ensurer.reset-size4.size6, .katex .sizing.reset-size4.size=
6 { font-size: 1.25em; }

.katex .fontsize-ensurer.reset-size4.size7, .katex .sizing.reset-size4.size=
7 { font-size: 1.5em; }

.katex .fontsize-ensurer.reset-size4.size8, .katex .sizing.reset-size4.size=
8 { font-size: 1.8em; }

.katex .fontsize-ensurer.reset-size4.size9, .katex .sizing.reset-size4.size=
9 { font-size: 2.16em; }

.katex .fontsize-ensurer.reset-size4.size10, .katex .sizing.reset-size4.siz=
e10 { font-size: 2.5925em; }

.katex .fontsize-ensurer.reset-size4.size11, .katex .sizing.reset-size4.siz=
e11 { font-size: 3.11em; }

.katex .fontsize-ensurer.reset-size5.size1, .katex .sizing.reset-size5.size=
1 { font-size: 0.555556em; }

.katex .fontsize-ensurer.reset-size5.size2, .katex .sizing.reset-size5.size=
2 { font-size: 0.666667em; }

.katex .fontsize-ensurer.reset-size5.size3, .katex .sizing.reset-size5.size=
3 { font-size: 0.777778em; }

.katex .fontsize-ensurer.reset-size5.size4, .katex .sizing.reset-size5.size=
4 { font-size: 0.888889em; }

.katex .fontsize-ensurer.reset-size5.size5, .katex .sizing.reset-size5.size=
5 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size5.size6, .katex .sizing.reset-size5.size=
6 { font-size: 1.11111em; }

.katex .fontsize-ensurer.reset-size5.size7, .katex .sizing.reset-size5.size=
7 { font-size: 1.33333em; }

.katex .fontsize-ensurer.reset-size5.size8, .katex .sizing.reset-size5.size=
8 { font-size: 1.6em; }

.katex .fontsize-ensurer.reset-size5.size9, .katex .sizing.reset-size5.size=
9 { font-size: 1.92em; }

.katex .fontsize-ensurer.reset-size5.size10, .katex .sizing.reset-size5.siz=
e10 { font-size: 2.30444em; }

.katex .fontsize-ensurer.reset-size5.size11, .katex .sizing.reset-size5.siz=
e11 { font-size: 2.76444em; }

.katex .fontsize-ensurer.reset-size6.size1, .katex .sizing.reset-size6.size=
1 { font-size: 0.5em; }

.katex .fontsize-ensurer.reset-size6.size2, .katex .sizing.reset-size6.size=
2 { font-size: 0.6em; }

.katex .fontsize-ensurer.reset-size6.size3, .katex .sizing.reset-size6.size=
3 { font-size: 0.7em; }

.katex .fontsize-ensurer.reset-size6.size4, .katex .sizing.reset-size6.size=
4 { font-size: 0.8em; }

.katex .fontsize-ensurer.reset-size6.size5, .katex .sizing.reset-size6.size=
5 { font-size: 0.9em; }

.katex .fontsize-ensurer.reset-size6.size6, .katex .sizing.reset-size6.size=
6 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size6.size7, .katex .sizing.reset-size6.size=
7 { font-size: 1.2em; }

.katex .fontsize-ensurer.reset-size6.size8, .katex .sizing.reset-size6.size=
8 { font-size: 1.44em; }

.katex .fontsize-ensurer.reset-size6.size9, .katex .sizing.reset-size6.size=
9 { font-size: 1.728em; }

.katex .fontsize-ensurer.reset-size6.size10, .katex .sizing.reset-size6.siz=
e10 { font-size: 2.074em; }

.katex .fontsize-ensurer.reset-size6.size11, .katex .sizing.reset-size6.siz=
e11 { font-size: 2.488em; }

.katex .fontsize-ensurer.reset-size7.size1, .katex .sizing.reset-size7.size=
1 { font-size: 0.416667em; }

.katex .fontsize-ensurer.reset-size7.size2, .katex .sizing.reset-size7.size=
2 { font-size: 0.5em; }

.katex .fontsize-ensurer.reset-size7.size3, .katex .sizing.reset-size7.size=
3 { font-size: 0.583333em; }

.katex .fontsize-ensurer.reset-size7.size4, .katex .sizing.reset-size7.size=
4 { font-size: 0.666667em; }

.katex .fontsize-ensurer.reset-size7.size5, .katex .sizing.reset-size7.size=
5 { font-size: 0.75em; }

.katex .fontsize-ensurer.reset-size7.size6, .katex .sizing.reset-size7.size=
6 { font-size: 0.833333em; }

.katex .fontsize-ensurer.reset-size7.size7, .katex .sizing.reset-size7.size=
7 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size7.size8, .katex .sizing.reset-size7.size=
8 { font-size: 1.2em; }

.katex .fontsize-ensurer.reset-size7.size9, .katex .sizing.reset-size7.size=
9 { font-size: 1.44em; }

.katex .fontsize-ensurer.reset-size7.size10, .katex .sizing.reset-size7.siz=
e10 { font-size: 1.72833em; }

.katex .fontsize-ensurer.reset-size7.size11, .katex .sizing.reset-size7.siz=
e11 { font-size: 2.07333em; }

.katex .fontsize-ensurer.reset-size8.size1, .katex .sizing.reset-size8.size=
1 { font-size: 0.347222em; }

.katex .fontsize-ensurer.reset-size8.size2, .katex .sizing.reset-size8.size=
2 { font-size: 0.416667em; }

.katex .fontsize-ensurer.reset-size8.size3, .katex .sizing.reset-size8.size=
3 { font-size: 0.486111em; }

.katex .fontsize-ensurer.reset-size8.size4, .katex .sizing.reset-size8.size=
4 { font-size: 0.555556em; }

.katex .fontsize-ensurer.reset-size8.size5, .katex .sizing.reset-size8.size=
5 { font-size: 0.625em; }

.katex .fontsize-ensurer.reset-size8.size6, .katex .sizing.reset-size8.size=
6 { font-size: 0.694444em; }

.katex .fontsize-ensurer.reset-size8.size7, .katex .sizing.reset-size8.size=
7 { font-size: 0.833333em; }

.katex .fontsize-ensurer.reset-size8.size8, .katex .sizing.reset-size8.size=
8 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size8.size9, .katex .sizing.reset-size8.size=
9 { font-size: 1.2em; }

.katex .fontsize-ensurer.reset-size8.size10, .katex .sizing.reset-size8.siz=
e10 { font-size: 1.44028em; }

.katex .fontsize-ensurer.reset-size8.size11, .katex .sizing.reset-size8.siz=
e11 { font-size: 1.72778em; }

.katex .fontsize-ensurer.reset-size9.size1, .katex .sizing.reset-size9.size=
1 { font-size: 0.289352em; }

.katex .fontsize-ensurer.reset-size9.size2, .katex .sizing.reset-size9.size=
2 { font-size: 0.347222em; }

.katex .fontsize-ensurer.reset-size9.size3, .katex .sizing.reset-size9.size=
3 { font-size: 0.405093em; }

.katex .fontsize-ensurer.reset-size9.size4, .katex .sizing.reset-size9.size=
4 { font-size: 0.462963em; }

.katex .fontsize-ensurer.reset-size9.size5, .katex .sizing.reset-size9.size=
5 { font-size: 0.520833em; }

.katex .fontsize-ensurer.reset-size9.size6, .katex .sizing.reset-size9.size=
6 { font-size: 0.578704em; }

.katex .fontsize-ensurer.reset-size9.size7, .katex .sizing.reset-size9.size=
7 { font-size: 0.694444em; }

.katex .fontsize-ensurer.reset-size9.size8, .katex .sizing.reset-size9.size=
8 { font-size: 0.833333em; }

.katex .fontsize-ensurer.reset-size9.size9, .katex .sizing.reset-size9.size=
9 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size9.size10, .katex .sizing.reset-size9.siz=
e10 { font-size: 1.20023em; }

.katex .fontsize-ensurer.reset-size9.size11, .katex .sizing.reset-size9.siz=
e11 { font-size: 1.43981em; }

.katex .fontsize-ensurer.reset-size10.size1, .katex .sizing.reset-size10.si=
ze1 { font-size: 0.24108em; }

.katex .fontsize-ensurer.reset-size10.size2, .katex .sizing.reset-size10.si=
ze2 { font-size: 0.289296em; }

.katex .fontsize-ensurer.reset-size10.size3, .katex .sizing.reset-size10.si=
ze3 { font-size: 0.337512em; }

.katex .fontsize-ensurer.reset-size10.size4, .katex .sizing.reset-size10.si=
ze4 { font-size: 0.385728em; }

.katex .fontsize-ensurer.reset-size10.size5, .katex .sizing.reset-size10.si=
ze5 { font-size: 0.433944em; }

.katex .fontsize-ensurer.reset-size10.size6, .katex .sizing.reset-size10.si=
ze6 { font-size: 0.48216em; }

.katex .fontsize-ensurer.reset-size10.size7, .katex .sizing.reset-size10.si=
ze7 { font-size: 0.578592em; }

.katex .fontsize-ensurer.reset-size10.size8, .katex .sizing.reset-size10.si=
ze8 { font-size: 0.694311em; }

.katex .fontsize-ensurer.reset-size10.size9, .katex .sizing.reset-size10.si=
ze9 { font-size: 0.833173em; }

.katex .fontsize-ensurer.reset-size10.size10, .katex .sizing.reset-size10.s=
ize10 { font-size: 1em; }

.katex .fontsize-ensurer.reset-size10.size11, .katex .sizing.reset-size10.s=
ize11 { font-size: 1.19961em; }

.katex .fontsize-ensurer.reset-size11.size1, .katex .sizing.reset-size11.si=
ze1 { font-size: 0.200965em; }

.katex .fontsize-ensurer.reset-size11.size2, .katex .sizing.reset-size11.si=
ze2 { font-size: 0.241158em; }

.katex .fontsize-ensurer.reset-size11.size3, .katex .sizing.reset-size11.si=
ze3 { font-size: 0.28135em; }

.katex .fontsize-ensurer.reset-size11.size4, .katex .sizing.reset-size11.si=
ze4 { font-size: 0.321543em; }

.katex .fontsize-ensurer.reset-size11.size5, .katex .sizing.reset-size11.si=
ze5 { font-size: 0.361736em; }

.katex .fontsize-ensurer.reset-size11.size6, .katex .sizing.reset-size11.si=
ze6 { font-size: 0.401929em; }

.katex .fontsize-ensurer.reset-size11.size7, .katex .sizing.reset-size11.si=
ze7 { font-size: 0.482315em; }

.katex .fontsize-ensurer.reset-size11.size8, .katex .sizing.reset-size11.si=
ze8 { font-size: 0.578778em; }

.katex .fontsize-ensurer.reset-size11.size9, .katex .sizing.reset-size11.si=
ze9 { font-size: 0.694534em; }

.katex .fontsize-ensurer.reset-size11.size10, .katex .sizing.reset-size11.s=
ize10 { font-size: 0.833601em; }

.katex .fontsize-ensurer.reset-size11.size11, .katex .sizing.reset-size11.s=
ize11 { font-size: 1em; }

.katex .delimsizing.size1 { font-family: KaTeX_Size1; }

.katex .delimsizing.size2 { font-family: KaTeX_Size2; }

.katex .delimsizing.size3 { font-family: KaTeX_Size3; }

.katex .delimsizing.size4 { font-family: KaTeX_Size4; }

.katex .delimsizing.mult .delim-size1 > span { font-family: KaTeX_Size1; }

.katex .delimsizing.mult .delim-size4 > span { font-family: KaTeX_Size4; }

.katex .nulldelimiter { display: inline-block; width: 0.12em; }

.katex .delimcenter, .katex .op-symbol { position: relative; }

.katex .op-symbol.small-op { font-family: KaTeX_Size1; }

.katex .op-symbol.large-op { font-family: KaTeX_Size2; }

.katex .accent > .vlist-t, .katex .op-limits > .vlist-t { text-align: cente=
r; }

.katex .accent .accent-body { position: relative; }

.katex .accent .accent-body:not(.accent-full) { width: 0px; }

.katex .overlay { display: block; }

.katex .mtable .vertical-separator { display: inline-block; min-width: 1px;=
 }

.katex .mtable .arraycolsep { display: inline-block; }

.katex .mtable .col-align-c > .vlist-t { text-align: center; }

[dir=3D"ltr"] .katex .mtable .col-align-l > .vlist-t { text-align: left; }

[dir=3D"ltr"] .katex .mtable .col-align-r > .vlist-t, [dir=3D"rtl"] .katex =
.mtable .col-align-l > .vlist-t { text-align: right; }

[dir=3D"ltr"] .katex .svg-align, [dir=3D"rtl"] .katex .mtable .col-align-r =
> .vlist-t { text-align: left; }

[dir=3D"rtl"] .katex .svg-align { text-align: right; }

.katex svg { fill: currentcolor; stroke: currentcolor; fill-rule: nonzero; =
fill-opacity: 1; stroke-width: 1; stroke-linecap: butt; stroke-linejoin: mi=
ter; stroke-miterlimit: 4; stroke-dasharray: none; stroke-dashoffset: 0; st=
roke-opacity: 1; display: block; height: inherit; position: absolute; width=
: 100%; }

.katex svg path { stroke: none; }

.katex img { border-style: none; max-height: none; max-width: none; min-hei=
ght: 0px; min-width: 0px; }

.katex .stretchy { display: block; overflow: hidden; position: relative; wi=
dth: 100%; }

.katex .stretchy::after, .katex .stretchy::before { content: ""; }

.katex .hide-tail { overflow: hidden; position: relative; width: 100%; }

.katex .halfarrow-left { overflow: hidden; position: absolute; width: 50.2%=
; }

[dir=3D"ltr"] .katex .halfarrow-left { left: 0px; }

[dir=3D"rtl"] .katex .halfarrow-left { right: 0px; }

.katex .halfarrow-right { overflow: hidden; position: absolute; width: 50.2=
%; }

[dir=3D"ltr"] .katex .halfarrow-right { right: 0px; }

[dir=3D"rtl"] .katex .halfarrow-right { left: 0px; }

.katex .brace-left { overflow: hidden; position: absolute; width: 25.1%; }

[dir=3D"ltr"] .katex .brace-left { left: 0px; }

[dir=3D"rtl"] .katex .brace-left { right: 0px; }

.katex .brace-center { overflow: hidden; position: absolute; width: 50%; }

[dir=3D"ltr"] .katex .brace-center { left: 25%; }

[dir=3D"rtl"] .katex .brace-center { right: 25%; }

.katex .brace-right { overflow: hidden; position: absolute; width: 25.1%; }

[dir=3D"ltr"] .katex .brace-right { right: 0px; }

[dir=3D"rtl"] .katex .brace-right { left: 0px; }

.katex .x-arrow-pad { padding: 0px 0.5em; }

[dir=3D"ltr"] .katex .cd-arrow-pad { padding: 0px 0.55556em 0px 0.27778em; =
}

[dir=3D"rtl"] .katex .cd-arrow-pad { padding: 0px 0.27778em 0px 0.55556em; =
}

.katex .mover, .katex .munder, .katex .x-arrow { text-align: center; }

.katex .boxpad { padding: 0px 0.3em; }

.katex .fbox, .katex .fcolorbox { border: 0.04em solid; box-sizing: border-=
box; }

.katex .cancel-pad { padding: 0px 0.2em; }

.katex .cancel-lap { margin-left: -0.2em; margin-right: -0.2em; }

.katex .sout { border-bottom-style: solid; border-bottom-width: 0.08em; }

.katex .angl { border-top: 0.049em solid; box-sizing: border-box; }

[dir=3D"ltr"] .katex .angl { border-right: 0.049em solid; margin-right: 0.0=
3889em; }

[dir=3D"rtl"] .katex .angl { border-left: 0.049em solid; margin-left: 0.038=
89em; }

.katex .anglpad { padding: 0px 0.03889em; }

.katex .eqn-num::before { content: "(" counter(katexEqnNo) ")"; counter-inc=
rement: katexEqnNo 1; }

.katex .mml-eqn-num::before { content: "(" counter(mmlEqnNo) ")"; counter-i=
ncrement: mmlEqnNo 1; }

.katex .mtr-glue { width: 50%; }

.katex .cd-vert-arrow { display: inline-block; position: relative; }

.katex .cd-label-left { display: inline-block; position: absolute; }

[dir=3D"ltr"] .katex .cd-label-left { right: calc(50% + 0.3em); text-align:=
 left; }

[dir=3D"rtl"] .katex .cd-label-left { left: calc(50% + 0.3em); text-align: =
right; }

.katex .cd-label-right { display: inline-block; position: absolute; }

[dir=3D"ltr"] .katex .cd-label-right { left: calc(50% + 0.3em); text-align:=
 right; }

[dir=3D"rtl"] .katex .cd-label-right { right: calc(50% + 0.3em); text-align=
: left; }

.katex-display { display: block; margin: 1em 0px; text-align: center; }

.katex-display > .katex { display: block; text-align: center; white-space: =
nowrap; }

.katex-display > .katex > .katex-html { display: block; position: relative;=
 }

.katex-display > .katex > .katex-html > .tag { position: absolute; }

[dir=3D"ltr"] .katex-display > .katex > .katex-html > .tag { right: 0px; }

[dir=3D"rtl"] .katex-display > .katex > .katex-html > .tag { left: 0px; }

[dir=3D"ltr"] .katex-display.leqno > .katex > .katex-html > .tag { left: 0p=
x; right: auto; }

[dir=3D"rtl"] .katex-display.leqno > .katex > .katex-html > .tag { left: au=
to; right: 0px; }

[dir=3D"ltr"] .katex-display.fleqn > .katex { padding-left: 2em; text-align=
: left; }

[dir=3D"rtl"] .katex-display.fleqn > .katex { padding-right: 2em; text-alig=
n: right; }

body { counter-reset: katexEqnNo 0 mmlEqnNo 0; }

.sdtrn-root { font-size: 14px; line-height: 20px; background: unset !import=
ant; }

.sdtrn-root .draggable { app-region: drag; }

.sdtrn-root .no-draggable { app-region: no-drag; }

.sdtrn-root .no-draggable-children * { app-region: no-drag; user-select: no=
ne; }

.sdtrn-root [data-radix-popper-content-wrapper], .sdtrn-root [role=3D"dialo=
g"] { app-region: no-drag; }

.sdtrn-root [role=3D"button"], .sdtrn-root button, .sdtrn-root div[role=3D"=
menu"], .sdtrn-root input[type=3D"button"], .sdtrn-root input[type=3D"reset=
"], .sdtrn-root input[type=3D"submit"] { cursor: default; }

.sdtrn-root nav a { cursor: default; user-select: none; }

.sdtrn-root { font-family: "Segoe UI Variable Text", ui-sans-serif, -apple-=
system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-=
serif, "Segoe UI Emoji", "Segoe UI Symbol"; }

.sdtrn-root .text-xs { font-family: "Segoe UI Variable Small", ui-sans-seri=
f, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji", Ar=
ial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; font-size: 12px; line=
-height: 16px; }

.sdtrn-root .text-base, .sdtrn-root .text-sm { font-family: "Segoe UI Varia=
ble Text", ui-sans-serif, -apple-system, system-ui, "Segoe UI", Helvetica, =
"Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"=
; font-size: 14px; line-height: 20px; }

.sdtrn-root .\!text-base { font-family: "Segoe UI Variable Text", ui-sans-s=
erif, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji",=
 Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol" !important; font-si=
ze: 14px !important; line-height: 20px !important; }

.sdtrn-root .text-lg { font-family: "Segoe UI Variable Text", ui-sans-serif=
, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoji", Ari=
al, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }

.sdtrn-root .text-2xl, .sdtrn-root .text-3xl, .sdtrn-root .text-xl { font-f=
amily: "Segoe UI Variable Display", ui-sans-serif, -apple-system, system-ui=
, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI =
Emoji", "Segoe UI Symbol"; }

.sdtrn-root .cursor-pointer { cursor: default; user-select: none; }

@media (hover: hover) and (pointer: fine) {
  .hover\:z-50:hover { z-index: 50; }
  .hover\:scale-110:hover { --tw-scale-x: 1.1; --tw-scale-y: 1.1; }
  .hover\:scale-110:hover, .hover\:scale-\[103\%\]:hover { transform: trans=
late(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) =
skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) sc=
aleY(var(--tw-scale-y)); }
  .hover\:scale-\[103\%\]:hover { --tw-scale-x: 103%; --tw-scale-y: 103%; }
  .hover\:cursor-default:hover { cursor: default; }
  .hover\:cursor-pointer:hover { cursor: pointer; }
  .hover\:rounded-xl:hover { border-radius: 0.75rem; }
  .hover\:border:hover { border-width: 1px; }
  .hover\:border-gray-100:hover { --tw-border-opacity: 1; border-color: rgb=
(236 236 236/var(--tw-border-opacity)); }
  .hover\:border-red-500\/50:hover { border-color: rgba(239, 68, 68, 0.5); =
}
  .hover\:border-token-border-heavy:hover { border-color: var(--border-heav=
y); }
  .hover\:border-token-border-medium:hover { border-color: var(--border-med=
ium); }
  .hover\:bg-\[\#0077FF\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(0 119 255/var(--tw-bg-opacity)); }
  .hover\:bg-\[\#BDDCF4\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(189 220 244/var(--tw-bg-opacity)); }
  .hover\:bg-\[\#E4EAF7\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(228 234 247/var(--tw-bg-opacity)); }
  .hover\:bg-\[\#f5f5f5\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(245 245 245/var(--tw-bg-opacity)); }
  .hover\:bg-\[var\(--snc-hover\)\]:hover { background-color: var(--snc-hov=
er); }
  .hover\:bg-black:hover { --tw-bg-opacity: 1; background-color: rgb(0 0 0/=
var(--tw-bg-opacity)); }
  .hover\:bg-black\/10:hover { background-color: rgba(0, 0, 0, 0.1); }
  .hover\:bg-black\/75:hover { background-color: rgba(0, 0, 0, 0.75); }
  .hover\:bg-blue-600:hover { --tw-bg-opacity: 1; background-color: rgb(37 =
99 235/var(--tw-bg-opacity)); }
  .hover\:bg-blue-700:hover { --tw-bg-opacity: 1; background-color: rgb(29 =
78 216/var(--tw-bg-opacity)); }
  .hover\:bg-blue-800:hover { --tw-bg-opacity: 1; background-color: rgb(30 =
64 175/var(--tw-bg-opacity)); }
  .hover\:bg-brand-purple-600:hover { --tw-bg-opacity: 1; background-color:=
 rgb(113 95 222/var(--tw-bg-opacity)); }
  .hover\:bg-gray-100:hover { --tw-bg-opacity: 1; background-color: rgb(236=
 236 236/var(--tw-bg-opacity)); }
  .hover\:bg-gray-100\/75:hover { background-color: rgba(237, 237, 237, 0.7=
5); }
  .hover\:bg-gray-200:hover { --tw-bg-opacity: 1; background-color: rgb(227=
 227 227/var(--tw-bg-opacity)); }
  .hover\:bg-gray-50:hover { --tw-bg-opacity: 1; background-color: rgb(249 =
249 249/var(--tw-bg-opacity)); }
  .hover\:bg-gray-500\/10:hover { background-color: rgba(156, 156, 156, 0.1=
); }
  .hover\:bg-gray-800:hover { --tw-bg-opacity: 1; background-color: rgb(33 =
33 33/var(--tw-bg-opacity)); }
  .hover\:bg-orange-400\/10:hover { background-color: rgba(255, 96, 0, 0.1)=
; }
  .hover\:bg-red-500:hover { --tw-bg-opacity: 1; background-color: rgb(239 =
68 68/var(--tw-bg-opacity)); }
  .hover\:bg-red-500\/10:hover { background-color: rgba(239, 68, 68, 0.1); =
}
  .hover\:bg-red-500\/15:hover { background-color: rgba(239, 68, 68, 0.15);=
 }
  .hover\:bg-token-hint-text:hover { background-color: var(--hint-text); }
  .hover\:bg-token-main-surface-secondary:hover { background-color: var(--m=
ain-surface-secondary); }
  .hover\:bg-token-main-surface-tertiary:hover { background-color: var(--ma=
in-surface-tertiary); }
  .hover\:bg-token-sidebar-surface-secondary:hover { background-color: var(=
--sidebar-surface-secondary); }
  .hover\:bg-token-sidebar-surface-tertiary:hover { background-color: var(-=
-sidebar-surface-tertiary); }
  .hover\:bg-token-surface-error\/10:hover { background-color: rgb(var(--su=
rface-error)/.1); }
  .hover\:bg-token-text-primary:hover { background-color: var(--text-primar=
y); }
  .hover\:bg-transparent:hover { background-color: transparent; }
  .hover\:bg-white:hover { --tw-bg-opacity: 1; background-color: rgb(255 25=
5 255/var(--tw-bg-opacity)); }
  .hover\:bg-white\/40:hover { background-color: rgba(255, 255, 255, 0.4); =
}
  .hover\:bg-opacity-30:hover { --tw-bg-opacity: .3; }
  .hover\:\!text-token-main-surface-secondary:hover { color: var(--main-sur=
face-secondary) !important; }
  .hover\:text-red-500:hover { --tw-text-opacity: 1; color: rgb(239 68 68/v=
ar(--tw-text-opacity)); }
  .hover\:text-red-700:hover { --tw-text-opacity: 1; color: rgb(185 28 28/v=
ar(--tw-text-opacity)); }
  .hover\:text-token-link-hover:hover { color: var(--link-hover); }
  .hover\:text-token-main-surface-tertiary:hover { color: var(--main-surfac=
e-tertiary); }
  .hover\:text-token-text-primary:hover { color: var(--text-primary); }
  .hover\:text-token-text-quaternary:hover { color: var(--text-quaternary);=
 }
  .hover\:text-token-text-secondary:hover { color: var(--text-secondary); }
  .hover\:text-token-text-tertiary:hover { color: var(--text-tertiary); }
  .hover\:text-white:hover { --tw-text-opacity: 1; color: rgb(255 255 255/v=
ar(--tw-text-opacity)); }
  .hover\:text-white\/40:hover { color: rgba(255, 255, 255, 0.4); }
  .hover\:underline:hover { text-decoration-line: underline; }
  .hover\:no-underline:hover { text-decoration-line: none; }
  .hover\:opacity-100:hover { opacity: 1; }
  .hover\:opacity-65:hover { opacity: 0.65; }
  .hover\:opacity-70:hover { opacity: 0.7; }
  .hover\:opacity-75:hover { opacity: 0.75; }
  .hover\:opacity-80:hover { opacity: 0.8; }
  .hover\:opacity-85:hover { opacity: 0.85; }
  .hover\:opacity-90:hover { opacity: 0.9; }
  .hover\:delay-0:hover { transition-delay: 0s; }
  .sdtrn-root .hover\:cursor-pointer:hover { cursor: default; user-select: =
none; }
}

@media (min-width: 640px) {
  .sm\:absolute { position: absolute; }
  .sm\:inset-x-4 { left: 1rem; right: 1rem; }
  .sm\:bottom-snc-1 { bottom: var(--snc-1); }
  [dir=3D"ltr"] .sm\:left-1\/2 { left: 50%; }
  [dir=3D"rtl"] .sm\:left-1\/2 { right: 50%; }
  [dir=3D"ltr"] .sm\:left-6 { left: 1.5rem; }
  [dir=3D"ltr"] .sm\:right-6, [dir=3D"rtl"] .sm\:left-6 { right: 1.5rem; }
  [dir=3D"rtl"] .sm\:right-6 { left: 1.5rem; }
  .sm\:top-6 { top: 1.5rem; }
  .sm\:col-span-2 { grid-column: span 2 / span 2; }
  .sm\:-mx-6 { margin-left: -1.5rem; margin-right: -1.5rem; }
  .sm\:mx-16 { margin-left: 4rem; margin-right: 4rem; }
  .sm\:-mt-12 { margin-top: -3rem; }
  .sm\:mb-0 { margin-bottom: 0px; }
  .sm\:mb-2 { margin-bottom: 0.5rem; }
  .sm\:mb-2\.5 { margin-bottom: 0.625rem; }
  .sm\:mb-3 { margin-bottom: 0.75rem; }
  .sm\:mb-4 { margin-bottom: 1rem; }
  .sm\:mb-6 { margin-bottom: 1.5rem; }
  [dir=3D"ltr"] .sm\:ml-7 { margin-left: 1.75rem; }
  [dir=3D"rtl"] .sm\:ml-7 { margin-right: 1.75rem; }
  .sm\:mt-0 { margin-top: 0px; }
  .sm\:mt-4 { margin-top: 1rem; }
  .sm\:mt-5 { margin-top: 1.25rem; }
  .sm\:mt-auto { margin-top: auto; }
  .sm\:line-clamp-3 { -webkit-box-orient: vertical; -webkit-line-clamp: 3; =
display: -webkit-box; overflow: hidden; }
  .sm\:block { display: block; }
  .sm\:inline-block { display: inline-block; }
  .sm\:flex { display: flex; }
  .sm\:grid { display: grid; }
  .sm\:hidden { display: none; }
  .sm\:h-10 { height: 2.5rem; }
  .sm\:h-32 { height: 8rem; }
  .sm\:h-\[172px\] { height: 172px; }
  .sm\:h-full { height: 100%; }
  .sm\:h-snc-input-height { height: var(--snc-input-height); }
  .sm\:w-10 { width: 2.5rem; }
  .sm\:w-32 { width: 8rem; }
  .sm\:w-\[384px\] { width: 384px; }
  .sm\:w-\[calc\(\(100\%-1rem\)\/4\)\] { width: calc(25% - 0.25rem); }
  .sm\:w-\[calc\(100cqw-62px\)\] { width: calc(100cqw - 62px); }
  .sm\:max-w-100 { max-width: 25rem; }
  .sm\:max-w-2xl { max-width: 42rem; }
  .sm\:max-w-\[400px\] { max-width: 400px; }
  .sm\:max-w-\[552px\] { max-width: 552px; }
  .sm\:max-w-\[700px\] { max-width: 700px; }
  .sm\:max-w-\[calc\(100vw-10rem\)\] { max-width: calc(-10rem + 100vw); }
  .sm\:max-w-xs { max-width: 20rem; }
  .sm\:grow { flex-grow: 1; }
  .sm\:-translate-x-1\/2 { --tw-translate-x: -50%; transform: translate(var=
(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var=
(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var=
(--tw-scale-y)); }
  .sm\:grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }
  .sm\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .sm\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0px, 1fr)); }
  .sm\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0px, 1fr)); }
  .sm\:flex-row { flex-direction: row; }
  .sm\:flex-row-reverse { flex-direction: row-reverse; }
  .sm\:items-center { align-items: center; }
  .sm\:justify-start { justify-content: flex-start; }
  .sm\:justify-center { justify-content: center; }
  .sm\:gap-1 { gap: 0.25rem; }
  .sm\:gap-2 { gap: 0.5rem; }
  .sm\:gap-2\.5 { gap: 0.625rem; }
  .sm\:gap-3 { gap: 0.75rem; }
  .sm\:gap-4 { gap: 1rem; }
  .sm\:gap-6 { gap: 1.5rem; }
  .sm\:gap-x-16 { column-gap: 4rem; }
  .sm\:gap-x-2 { column-gap: 0.5rem; }
  .sm\:gap-x-2\.5 { column-gap: 0.625rem; }
  .sm\:gap-y-0 { row-gap: 0px; }
  .sm\:gap-y-2 { row-gap: 0.5rem; }
  .sm\:gap-y-4 { row-gap: 1rem; }
  .sm\:gap-y-5 { row-gap: 1.25rem; }
  .sm\:overflow-hidden { overflow: hidden; }
  .sm\:rounded-full { border-radius: 9999px; }
  .sm\:rounded-lg { border-radius: 0.5rem; }
  .sm\:rounded-md { border-radius: 0.375rem; }
  .sm\:rounded-t-\[30px\] { border-top-left-radius: 30px; border-top-right-=
radius: 30px; }
  [dir=3D"ltr"] .sm\:rounded-bl-xl { border-bottom-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-br-xl, [dir=3D"rtl"] .sm\:rounded-bl-xl { bord=
er-bottom-right-radius: 0.75rem; }
  [dir=3D"rtl"] .sm\:rounded-br-xl { border-bottom-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-tl-xl { border-top-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-tr-xl, [dir=3D"rtl"] .sm\:rounded-tl-xl { bord=
er-top-right-radius: 0.75rem; }
  [dir=3D"rtl"] .sm\:rounded-tr-xl { border-top-left-radius: 0.75rem; }
  .sm\:border-none { border-style: none; }
  .sm\:bg-token-main-surface-tertiary { background-color: var(--main-surfac=
e-tertiary); }
  .sm\:p-0 { padding: 0px; }
  .sm\:p-10 { padding: 2.5rem; }
  .sm\:p-2 { padding: 0.5rem; }
  .sm\:p-3 { padding: 0.75rem; }
  .sm\:p-6 { padding: 1.5rem; }
  .sm\:px-0 { padding-left: 0px; padding-right: 0px; }
  .sm\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .sm\:px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
  .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
  .sm\:px-8 { padding-left: 2rem; padding-right: 2rem; }
  .sm\:px-snc-results-padding { padding-left: var(--snc-results-padding); p=
adding-right: var(--snc-results-padding); }
  .sm\:py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }
  .sm\:py-2\.5 { padding-bottom: 0.625rem; padding-top: 0.625rem; }
  .sm\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .sm\:py-6 { padding-bottom: 1.5rem; padding-top: 1.5rem; }
  .sm\:pb-0 { padding-bottom: 0px; }
  .sm\:pb-10 { padding-bottom: 2.5rem; }
  .sm\:pb-6 { padding-bottom: 1.5rem; }
  .sm\:pb-8 { padding-bottom: 2rem; }
  [dir=3D"ltr"] .sm\:pl-3 { padding-left: 0.75rem; }
  [dir=3D"rtl"] .sm\:pl-3 { padding-right: 0.75rem; }
  [dir=3D"ltr"] .sm\:pl-5 { padding-left: 1.25rem; }
  [dir=3D"rtl"] .sm\:pl-5 { padding-right: 1.25rem; }
  [dir=3D"ltr"] .sm\:pl-\[3\.25rem\] { padding-left: 3.25rem; }
  [dir=3D"rtl"] .sm\:pl-\[3\.25rem\] { padding-right: 3.25rem; }
  [dir=3D"ltr"] .sm\:pr-2 { padding-right: 0.5rem; }
  [dir=3D"rtl"] .sm\:pr-2 { padding-left: 0.5rem; }
  [dir=3D"ltr"] .sm\:pr-5 { padding-right: 1.25rem; }
  [dir=3D"rtl"] .sm\:pr-5 { padding-left: 1.25rem; }
  .sm\:pt-12 { padding-top: 3rem; }
  .sm\:pt-4 { padding-top: 1rem; }
  .sm\:pt-8 { padding-top: 2rem; }
  .sm\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
  .sm\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
  .sm\:text-6xl { font-size: 3.75rem; line-height: 1; }
  .sm\:text-base { font-size: 1rem; line-height: 1.5rem; }
  .sm\:text-sm { font-size: 0.875rem; line-height: 1.25rem; }
  .sm\:text-token-main-surface-tertiary { color: var(--main-surface-tertiar=
y); }
  .sm\:duration-300 { transition-duration: 0.3s; }
  .sm\:duration-500 { transition-duration: 0.5s; }
  .sdtrn-root .sm\:text-base, .sdtrn-root .sm\:text-sm { font-family: "Sego=
e UI Variable Text", ui-sans-serif, -apple-system, system-ui, "Segoe UI", H=
elvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe =
UI Symbol"; font-size: 14px; line-height: 20px; }
  .sdtrn-root .sm\:text-2xl { font-family: "Segoe UI Variable Display", ui-=
sans-serif, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color E=
moji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
  @supports (min-height:100dvh) {
  .sm\:supports-\[min-height\:100dvh\]\:min-h-\[100dvh\] { min-height: 100d=
vh; }
}
}

@media (min-width: 768px) {
  .md\:sr-only { clip: rect(0px, 0px, 0px, 0px); border-width: 0px; height:=
 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; whi=
te-space: nowrap; width: 1px; }
  .md\:invisible { visibility: hidden; }
  .md\:static { position: static; }
  .md\:absolute { position: absolute; }
  .md\:bottom-4 { bottom: 1rem; }
  [dir=3D"ltr"] .md\:left-\[-250px\] { left: -250px; }
  [dir=3D"rtl"] .md\:left-\[-250px\] { right: -250px; }
  [dir=3D"ltr"] .md\:right-12 { right: 3rem; }
  [dir=3D"rtl"] .md\:right-12 { left: 3rem; }
  [dir=3D"ltr"] .md\:right-6 { right: 1.5rem; }
  [dir=3D"rtl"] .md\:right-6 { left: 1.5rem; }
  .md\:top-6 { top: 1.5rem; }
  .md\:top-\[22px\] { top: 22px; }
  .md\:top-\[5\.75rem\] { top: 5.75rem; }
  .md\:top-header-height { top: 3.5rem; }
  .md\:col-span-1 { grid-column: span 1 / span 1; }
  .md\:col-span-2 { grid-column: span 2 / span 2; }
  .md\:m-0 { margin: 0px; }
  .md\:m-auto { margin: auto; }
  .md\:mx-4 { margin-left: 1rem; margin-right: 1rem; }
  .md\:my-4 { margin-bottom: 1rem; margin-top: 1rem; }
  .md\:mb-0 { margin-bottom: 0px; }
  .md\:mb-10 { margin-bottom: 2.5rem; }
  .md\:mb-2 { margin-bottom: 0.5rem; }
  .md\:mb-3 { margin-bottom: 0.75rem; }
  .md\:mb-4 { margin-bottom: 1rem; }
  .md\:mb-8 { margin-bottom: 2rem; }
  [dir=3D"ltr"] .md\:ml-0 { margin-left: 0px; }
  [dir=3D"rtl"] .md\:ml-0 { margin-right: 0px; }
  [dir=3D"ltr"] .md\:ml-8 { margin-left: 2rem; }
  [dir=3D"rtl"] .md\:ml-8 { margin-right: 2rem; }
  [dir=3D"ltr"] .md\:ml-\[-8px\] { margin-left: -8px; }
  [dir=3D"rtl"] .md\:ml-\[-8px\] { margin-right: -8px; }
  .md\:mt-0 { margin-top: 0px; }
  .md\:mt-2 { margin-top: 0.5rem; }
  .md\:mt-3 { margin-top: 0.75rem; }
  .md\:mt-5 { margin-top: 1.25rem; }
  .md\:mt-7 { margin-top: 1.75rem; }
  .md\:mt-8 { margin-top: 2rem; }
  .md\:mt-px { margin-top: 1px; }
  .md\:line-clamp-3 { -webkit-box-orient: vertical; -webkit-line-clamp: 3; =
display: -webkit-box; overflow: hidden; }
  .md\:block { display: block; }
  .md\:flex { display: flex; }
  .md\:inline-flex { display: inline-flex; }
  .md\:grid { display: grid; }
  .md\:hidden { display: none; }
  .md\:aspect-\[140\/67\] { aspect-ratio: 140 / 67; }
  .md\:h-14 { height: 3.5rem; }
  .md\:h-24 { height: 6rem; }
  .md\:h-32 { height: 8rem; }
  .md\:h-\[30rem\] { height: 30rem; }
  .md\:h-header-height { height: 3.5rem; }
  .md\:max-h-\[80vh\] { max-height: 80vh; }
  .md\:max-h-\[calc\(100vh-300px\)\] { max-height: calc(-300px + 100vh); }
  .md\:min-h-\[20rem\] { min-height: 20rem; }
  .md\:min-h-\[30rem\] { min-height: 30rem; }
  .md\:min-h-\[380px\] { min-height: 380px; }
  .md\:w-1\/2 { width: 50%; }
  .md\:w-1\/3 { width: 33.3333%; }
  .md\:w-24 { width: 6rem; }
  .md\:w-3\/5 { width: 60%; }
  .md\:w-\[100px\] { width: 100px; }
  .md\:w-\[250px\] { width: 250px; }
  .md\:w-\[500px\] { width: 500px; }
  .md\:w-\[720px\] { width: 720px; }
  .md\:w-\[85\%\] { width: 85%; }
  .md\:w-\[calc\(100\%-\.5rem\)\] { width: calc(100% - 0.5rem); }
  .md\:w-\[calc\(100\%-16rem\)\] { width: calc(100% - 16rem); }
  .md\:w-auto { width: auto; }
  .md\:w-full { width: 100%; }
  .md\:min-w-\[180px\] { min-width: 180px; }
  .md\:min-w-\[680px\] { min-width: 680px; }
  .md\:max-w-3xl { max-width: 48rem; }
  .md\:max-w-4xl { max-width: 56rem; }
  .md\:max-w-5xl { max-width: 64rem; }
  .md\:max-w-96 { max-width: 24rem; }
  .md\:max-w-\[672px\] { max-width: 672px; }
  .md\:max-w-\[680px\] { max-width: 680px; }
  .md\:max-w-\[80\%\] { max-width: 80%; }
  .md\:max-w-lg { max-width: 32rem; }
  .md\:max-w-none { max-width: none; }
  .md\:flex-1 { flex: 1 1 0%; }
  .md\:shrink { flex-shrink: 1; }
  .md\:grow-0 { flex-grow: 0; }
  .md\:basis-0 { flex-basis: 0px; }
  .md\:basis-\[25vw\] { flex-basis: 25vw; }
  .md\:basis-\[75vw\] { flex-basis: 75vw; }
  .md\:translate-y-\[30px\] { --tw-translate-y: 30px; transform: translate(=
var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(=
var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(=
var(--tw-scale-y)); }
  .md\:columns-3 { column-count: 3; }
  .md\:grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }
  .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .md\:grid-rows-1 { grid-template-rows: repeat(1, minmax(0px, 1fr)); }
  .md\:grid-rows-\[minmax\(20px\,_1fr\)_auto_20px\] { grid-template-rows: m=
inmax(20px, 1fr) auto 20px; }
  .md\:grid-rows-\[minmax\(20px\,_1fr\)_auto_minmax\(20px\,_1fr\)\] { grid-=
template-rows: minmax(20px, 1fr) auto minmax(20px, 1fr); }
  .md\:flex-row { flex-direction: row; }
  .md\:flex-row-reverse { flex-direction: row-reverse; }
  .md\:items-start { align-items: flex-start; }
  .md\:items-center { align-items: center; }
  .md\:justify-center { justify-content: center; }
  .md\:justify-between { justify-content: space-between; }
  .md\:gap-0 { gap: 0px; }
  .md\:gap-2 { gap: 0.5rem; }
  .md\:gap-3 { gap: 0.75rem; }
  .md\:gap-5 { gap: 1.25rem; }
  .md\:gap-8 { gap: 2rem; }
  .md\:gap-x-2 { column-gap: 0.5rem; }
  .md\:gap-y-1 { row-gap: 0.25rem; }
  .md\:gap-y-1\.5 { row-gap: 0.375rem; }
  .md\:self-end { align-self: flex-end; }
  .md\:overflow-hidden { overflow: hidden; }
  .md\:overflow-visible { overflow: visible; }
  .md\:whitespace-normal { white-space: normal; }
  .md\:rounded-lg { border-radius: 0.5rem; }
  .md\:rounded-none { border-radius: 0px; }
  .md\:border-b-2 { border-bottom-width: 2px; }
  [dir=3D"ltr"] .md\:border-l { border-left-width: 1px; }
  [dir=3D"ltr"] .md\:border-r, [dir=3D"rtl"] .md\:border-l { border-right-w=
idth: 1px; }
  [dir=3D"rtl"] .md\:border-r { border-left-width: 1px; }
  [dir=3D"ltr"] .md\:border-r-0 { border-right-width: 0px; }
  [dir=3D"rtl"] .md\:border-r-0 { border-left-width: 0px; }
  .md\:border-t-0 { border-top-width: 0px; }
  .md\:border-gray-100 { --tw-border-opacity: 1; border-color: rgb(236 236 =
236/var(--tw-border-opacity)); }
  .md\:border-transparent { border-color: transparent; }
  .md\:\!bg-transparent { background-color: transparent !important; }
  .md\:bg-transparent { background-color: transparent; }
  [dir=3D"ltr"] .md\:bg-vert-light-gradient { background-image: linear-grad=
ient(rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }
  [dir=3D"rtl"] .md\:bg-vert-light-gradient { background-image: linear-grad=
ient(-180deg, rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }
  .md\:p-20 { padding: 5rem; }
  .md\:p-4 { padding: 1rem; }
  .md\:p-6 { padding: 1.5rem; }
  .md\:px-0 { padding-left: 0px; padding-right: 0px; }
  .md\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .md\:px-12 { padding-left: 3rem; padding-right: 3rem; }
  .md\:px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
  .md\:px-20 { padding-left: 5rem; padding-right: 5rem; }
  .md\:px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
  .md\:px-4 { padding-left: 1rem; padding-right: 1rem; }
  .md\:px-5 { padding-left: 1.25rem; padding-right: 1.25rem; }
  .md\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
  .md\:px-\[60px\] { padding-left: 60px; padding-right: 60px; }
  .md\:py-0 { padding-bottom: 0px; padding-top: 0px; }
  .md\:py-1 { padding-bottom: 0.25rem; padding-top: 0.25rem; }
  .md\:py-1\.5 { padding-bottom: 0.375rem; padding-top: 0.375rem; }
  .md\:py-16 { padding-bottom: 4rem; padding-top: 4rem; }
  .md\:py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }
  .md\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .md\:py-4 { padding-bottom: 1rem; padding-top: 1rem; }
  .md\:py-\[22px\] { padding-bottom: 22px; padding-top: 22px; }
  .md\:\!pt-0 { padding-top: 0px !important; }
  .md\:pb-0 { padding-bottom: 0px; }
  .md\:pb-10 { padding-bottom: 2.5rem; }
  .md\:pb-5 { padding-bottom: 1.25rem; }
  .md\:pb-6 { padding-bottom: 1.5rem; }
  .md\:pb-9 { padding-bottom: 2.25rem; }
  [dir=3D"ltr"] .md\:pl-2 { padding-left: 0.5rem; }
  [dir=3D"rtl"] .md\:pl-2 { padding-right: 0.5rem; }
  [dir=3D"ltr"] .md\:pl-4 { padding-left: 1rem; }
  [dir=3D"rtl"] .md\:pl-4 { padding-right: 1rem; }
  [dir=3D"ltr"] .md\:pl-6 { padding-left: 1.5rem; }
  [dir=3D"rtl"] .md\:pl-6 { padding-right: 1.5rem; }
  [dir=3D"ltr"] .md\:pr-3 { padding-right: 0.75rem; }
  [dir=3D"rtl"] .md\:pr-3 { padding-left: 0.75rem; }
  [dir=3D"ltr"] .md\:pr-8 { padding-right: 2rem; }
  [dir=3D"rtl"] .md\:pr-8 { padding-left: 2rem; }
  .md\:ps-0 { padding-inline-start: 0px; }
  .md\:pt-0 { padding-top: 0px; }
  .md\:pt-4 { padding-top: 1rem; }
  .md\:pt-5 { padding-top: 1.25rem; }
  .md\:pt-\[3px\] { padding-top: 3px; }
  .md\:pt-\[4\.5rem\] { padding-top: 4.5rem; }
  [dir=3D"ltr"] .md\:text-left { text-align: left; }
  [dir=3D"rtl"] .md\:text-left { text-align: right; }
  .md\:text-justify { text-align: justify; }
  .md\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
  .md\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
  .md\:text-5xl { font-size: 3rem; line-height: 1; }
  .md\:text-7xl { font-size: 4.5rem; line-height: 1; }
  .md\:text-\[32px\] { font-size: 32px; }
  .md\:text-\[40px\] { font-size: 40px; }
  .md\:text-base { font-size: 1rem; line-height: 1.5rem; }
  .md\:text-lg { font-size: 1.125rem; line-height: 1.75rem; }
  .md\:text-xs { font-size: 0.75rem; line-height: 1rem; }
  .md\:leading-8 { line-height: 2rem; }
  .md\:leading-tight { line-height: 1.25; }
  .md\:text-token-text-primary { color: var(--text-primary); }
  .md\:text-token-text-tertiary { color: var(--text-tertiary); }
  .md\:opacity-0 { opacity: 0; }
  .sdtrn-root .md\:text-xs { font-family: "Segoe UI Variable Small", ui-san=
s-serif, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Color Emoj=
i", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; font-size: 12px=
; line-height: 16px; }
  .sdtrn-root .md\:text-base { font-size: 14px; line-height: 20px; }
  .sdtrn-root .md\:text-base, .sdtrn-root .md\:text-lg { font-family: "Sego=
e UI Variable Text", ui-sans-serif, -apple-system, system-ui, "Segoe UI", H=
elvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe =
UI Symbol"; }
  .sdtrn-root .md\:text-2xl, .sdtrn-root .md\:text-3xl { font-family: "Sego=
e UI Variable Display", ui-sans-serif, -apple-system, system-ui, "Segoe UI"=
, Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Seg=
oe UI Symbol"; }
  [dir=3D"ltr"] .md\:first\:ml-0:first-child { margin-left: 0px; }
  [dir=3D"rtl"] .md\:first\:ml-0:first-child { margin-right: 0px; }
  [dir=3D"ltr"] .md\:first\:rounded-bl-xl:first-child { border-bottom-left-=
radius: 0.75rem; }
  [dir=3D"rtl"] .md\:first\:rounded-bl-xl:first-child { border-bottom-right=
-radius: 0.75rem; }
  [dir=3D"ltr"] .md\:first\:rounded-tl-xl:first-child { border-top-left-rad=
ius: 0.75rem; }
  [dir=3D"rtl"] .md\:first\:rounded-tl-xl:first-child { border-top-right-ra=
dius: 0.75rem; }
  .md\:last\:mb-6:last-child { margin-bottom: 1.5rem; }
  [dir=3D"ltr"] .md\:last\:mr-0:last-child { margin-right: 0px; }
  [dir=3D"rtl"] .md\:last\:mr-0:last-child { margin-left: 0px; }
  [dir=3D"ltr"] .md\:last\:rounded-br-xl:last-child { border-bottom-right-r=
adius: 0.75rem; }
  [dir=3D"rtl"] .md\:last\:rounded-br-xl:last-child { border-bottom-left-ra=
dius: 0.75rem; }
  [dir=3D"ltr"] .md\:last\:rounded-tr-xl:last-child { border-top-right-radi=
us: 0.75rem; }
  [dir=3D"rtl"] .md\:last\:rounded-tr-xl:last-child { border-top-left-radiu=
s: 0.75rem; }
  [dir=3D"ltr"] .md\:last\:border-r:last-child { border-right-width: 1px; }
  [dir=3D"rtl"] .md\:last\:border-r:last-child { border-left-width: 1px; }
  @media (hover: hover) and (pointer: fine) {
  .md\:hover\:bg-gray-50:hover { --tw-bg-opacity: 1; background-color: rgb(=
249 249 249/var(--tw-bg-opacity)); }
}
  .md\:radix-state-active\:bg-token-main-surface-secondary[data-state=3D"ac=
tive"] { background-color: var(--main-surface-secondary); }
  .md\:radix-state-active\:bg-token-main-surface-tertiary[data-state=3D"act=
ive"] { background-color: var(--main-surface-tertiary); }
  .md\:radix-state-active\:text-token-text-primary[data-state=3D"active"] {=
 color: var(--text-primary); }
  .md\:dark\:border-gray-700:is(.dark *) { --tw-border-opacity: 1; border-c=
olor: rgb(66 66 66/var(--tw-border-opacity)); }
  .md\:dark\:border-transparent:is(.dark *) { border-color: transparent; }
  .dark\:md\:bg-transparent:is(.dark *) { background-color: transparent; }
  @media (hover: hover) and (pointer: fine) {
  .dark\:md\:hover\:bg-gray-700:hover:is(.dark *) { --tw-bg-opacity: 1; bac=
kground-color: rgb(66 66 66/var(--tw-bg-opacity)); }
}
}

@media (min-width: 1536px) {
  [dir=3D"ltr"] .\32 xl\:left-\[-400px\] { left: -400px; }
  [dir=3D"rtl"] .\32 xl\:left-\[-400px\] { right: -400px; }
  .\32 xl\:w-\[400px\] { width: 400px; }
  .\32 xl\:max-w-\[800px\] { max-width: 800px; }
  .\32 xl\:pt-12 { padding-top: 3rem; }
  .\32 xl\:text-xl { font-size: 1.25rem; line-height: 1.75rem; }
  .sdtrn-root .\32 xl\:text-xl { font-family: "Segoe UI Variable Display", =
ui-sans-serif, -apple-system, system-ui, "Segoe UI", Helvetica, "Apple Colo=
r Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
}

.snc-root { font-size: var(--snc-text-base); }

.snc { --snc-1: 1.5rem; --snc-2: 1.75rem; --snc-3: 3rem; --snc-results-padd=
ing: 1rem; --snc-input-height: 2.875rem; --snc-text-base: 16px; --snc-hover=
: rgb(0 0 0/3%); --main-surface-secondary: #f7f7f7; --main-surface-tertiary=
: #f1f1f1; --text-secondary: var(--gray-600); --text-tertiary: var(--gray-5=
00); }

.snc .snc-accent-border { border: 0px; }

.snc { --snc-result-search-input-shadow: 0 12px 20px -8px; --snc-answer-fol=
lowup-input-shadow: 0 -12px 20px -8px; --snc-input-shadow-mult: 0; }

.snc ::-webkit-scrollbar { background: transparent; width: 16px; }

.snc ::-webkit-scrollbar-thumb { background: var(--main-surface-tertiary); =
border: 4px solid var(--main-surface-primary); border-radius: 8px; }

.snc ::-webkit-scrollbar-thumb:hover { background: var(--gray-200); }

.dark .snc ::-webkit-scrollbar-thumb:hover { background: var(--gray-600); }

@media (min-width: 640px) {
  .snc { --snc-input-shadow-mult: .1; --snc-input-height: 3.25rem; }
}

.dark .snc, .dark .snc .dark { --snc-hover: hsla(0,0%,100%,.03); --snc-focu=
s-border: hsla(0,0%,100%,.75); --main-surface-primary: var(--gray-950); --m=
ain-surface-secondary: var(--gray-900); --main-surface-tertiary: var(--gray=
-700); --text-secondary: var(--gray-300); --text-tertiary: var(--gray-500);=
 --border-light: hsla(0,0%,100%,.05); --border-medium: hsla(0,0%,100%,.12);=
 --border-xheavy: hsla(0,0%,100%,.2); --gray-950: #141414; }

.dark .snc .dark .snc-accent-border, .dark .snc .snc-accent-border { border=
: .5px solid var(--border-xheavy); }

.dark .snc, .dark .snc .dark { --snc-result-search-input-shadow: 0 8px 12px=
 -8px; --snc-answer-followup-input-shadow: 0 -8px 12px -8px; }

@media (min-width: 640px) {
  .dark .snc, .dark .snc .dark { --snc-input-shadow-mult: 1; }
}

.snc .user-query .prose p:first-child { margin-bottom: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) { max-width: 100%; }

.snc .prose :not(.not-prose):not(.not-prose *) a { color: var(--link); font=
-weight: 400; text-decoration-line: none; text-underline-offset: 2px; }

.snc .prose :not(.not-prose):not(.not-prose *) > h1:first-child { font-size=
: 1.125rem; }

@media (min-width: 1536px) {
  .snc .prose :not(.not-prose):not(.not-prose *) > h1:first-child { font-si=
ze: 1.25rem; }
}

.snc .prose :not(.not-prose):not(.not-prose *) h1, .snc .prose :not(.not-pr=
ose):not(.not-prose *) h2, .snc .prose :not(.not-prose):not(.not-prose *) h=
3, .snc .prose :not(.not-prose):not(.not-prose *) h4, .snc .prose :not(.not=
-prose):not(.not-prose *) h5 { font-size: 1rem; font-weight: 600; }

.snc .prose :not(.not-prose):not(.not-prose *) h3, .snc .prose :not(.not-pr=
ose):not(.not-prose *) h4 { margin-bottom: 0.25rem; }

.snc .prose :not(.not-prose):not(.not-prose *) h3:first-child a { font-size=
: 1.25rem; font-weight: 500; }

.snc .prose :not(.not-prose):not(.not-prose *) ol, .snc .prose :not(.not-pr=
ose):not(.not-prose *) p, .snc .prose :not(.not-prose):not(.not-prose *) ul=
 { margin-bottom: 1rem; }

.snc .prose :not(.not-prose):not(.not-prose *) ol:last-child, .snc .prose :=
not(.not-prose):not(.not-prose *) p:last-child, .snc .prose :not(.not-prose=
):not(.not-prose *) ul:last-child { margin-bottom: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) ol, .snc .prose :not(.not-pr=
ose):not(.not-prose *) ul { display: contents; list-style-position: inside;=
 list-style-type: none; margin-top: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li, .snc .prose :not(.n=
ot-prose):not(.not-prose *) ul > li { position: relative; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li:has(.title-citation)=
, .snc .prose :not(.not-prose):not(.not-prose *) ul > li:has(.title-citatio=
n) { margin-bottom: 0.75rem; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li:has(.title-citation)=
:last-child, .snc .prose :not(.not-prose):not(.not-prose *) ul > li:has(.ti=
tle-citation):last-child { margin-bottom: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li::before, .snc .prose=
 :not(.not-prose):not(.not-prose *) ul > li::before { position: absolute; }

[dir=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li::befor=
e, [dir=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li::be=
fore { left: 0px; }

[dir=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li::befor=
e, [dir=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li::be=
fore { right: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li button, .snc .prose =
:not(.not-prose):not(.not-prose *) ol > li > a, .snc .prose :not(.not-prose=
):not(.not-prose *) ul > li button, .snc .prose :not(.not-prose):not(.not-p=
rose *) ul > li > a { margin-bottom: 0px; margin-top: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li p, .snc .prose :not(=
.not-prose):not(.not-prose *) ul > li p { margin-bottom: 0.5rem; margin-top=
: 0px; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li ol, .snc .prose :not=
(.not-prose):not(.not-prose *) ol > li ul, .snc .prose :not(.not-prose):not=
(.not-prose *) ul > li ol, .snc .prose :not(.not-prose):not(.not-prose *) u=
l > li ul { display: block; margin-bottom: 0px; margin-top: 0px; padding: 0=
px; }

[dir=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li ol, [d=
ir=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li ul, [dir=
=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li ol, [dir=
=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li ul { margi=
n-left: 1rem; }

[dir=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li ol, [d=
ir=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li ul, [dir=
=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li ol, [dir=
=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li ul { margi=
n-right: 1rem; }

.snc .prose :not(.not-prose):not(.not-prose *) ol { counter-reset: list-cou=
nter 0; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li { counter-increment:=
 list-counter 1; }

[dir=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li { padd=
ing-left: 2rem; }

[dir=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ol > li { padd=
ing-right: 2rem; }

.snc .prose :not(.not-prose):not(.not-prose *) ol > li::before { color: var=
(--text-secondary); content: counter(list-counter) "."; }

[dir=3D"ltr"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li { padd=
ing-left: 1.5rem; }

[dir=3D"rtl"] .snc .prose :not(.not-prose):not(.not-prose *) ul > li { padd=
ing-right: 1.5rem; }

.snc .prose :not(.not-prose):not(.not-prose *) ul > li::before { content: "=
=E2=80=A2"; }

.snc .prose :not(.not-prose):not(.not-prose *) strong { font-weight: 500; }

.snc .prose.result-streaming .context-list:last-child:has(p)::after { displ=
ay: none; }

.snc .prose.result-streaming .context-list:last-child p:last-child::after {=
 content: "=E2=97=8F"; display: inline; font-family: Circle, system-ui, san=
s-serif; line-height: normal; vertical-align: baseline; }

[dir=3D"ltr"] .snc .prose.result-streaming .context-list:last-child p:last-=
child::after { margin-left: 0.25rem; }

[dir=3D"rtl"] .snc .prose.result-streaming .context-list:last-child p:last-=
child::after { margin-right: 0.25rem; }

.sr-only { clip: rect(0px, 0px, 0px, 0px); border-width: 0px; height: 1px; =
margin: -1px; overflow: hidden; padding: 0px; position: absolute; white-spa=
ce: nowrap; width: 1px; }

.pointer-events-none { pointer-events: none; }

.pointer-events-auto { pointer-events: auto; }

.visible { visibility: visible; }

.\!invisible { visibility: hidden !important; }

.invisible { visibility: hidden; }

.collapse { visibility: collapse; }

.\!static { position: static !important; }

.static { position: static; }

.fixed { position: fixed; }

.absolute { position: absolute; }

.relative { position: relative; }

.\!sticky { position: sticky !important; }

.sticky { position: sticky; }

.-inset-4 { inset: -1rem; }

.inset-0 { inset: 0px; }

.inset-x-0 { left: 0px; right: 0px; }

.inset-x-px { left: 1px; right: 1px; }

.inset-y-0 { bottom: 0px; top: 0px; }

.-bottom-5 { bottom: -1.25rem; }

.-bottom-px { bottom: -1px; }

[dir=3D"ltr"] .-left-1 { left: -0.25rem; }

[dir=3D"rtl"] .-left-1 { right: -0.25rem; }

[dir=3D"ltr"] .-left-2 { left: -0.5rem; }

[dir=3D"rtl"] .-left-2 { right: -0.5rem; }

[dir=3D"ltr"] .-left-4 { left: -1rem; }

[dir=3D"rtl"] .-left-4 { right: -1rem; }

[dir=3D"ltr"] .-left-96 { left: -24rem; }

[dir=3D"rtl"] .-left-96 { right: -24rem; }

[dir=3D"ltr"] .-right-1 { right: -0.25rem; }

[dir=3D"rtl"] .-right-1 { left: -0.25rem; }

[dir=3D"ltr"] .-right-1\.5 { right: -0.375rem; }

[dir=3D"rtl"] .-right-1\.5 { left: -0.375rem; }

[dir=3D"ltr"] .-right-4 { right: -1rem; }

[dir=3D"rtl"] .-right-4 { left: -1rem; }

.-top-0 { top: 0px; }

.-top-1 { top: -0.25rem; }

.-top-1\.5 { top: -0.375rem; }

.-top-4 { top: -1rem; }

.-top-5 { top: -1.25rem; }

.-top-96 { top: -24rem; }

.-top-px { top: -1px; }

.bottom-0 { bottom: 0px; }

.bottom-1 { bottom: 0.25rem; }

.bottom-12 { bottom: 3rem; }

.bottom-2 { bottom: 0.5rem; }

.bottom-24 { bottom: 6rem; }

.bottom-3 { bottom: 0.75rem; }

.bottom-4 { bottom: 1rem; }

.bottom-5 { bottom: 1.25rem; }

.bottom-6 { bottom: 1.5rem; }

.bottom-7 { bottom: 1.75rem; }

.bottom-8 { bottom: 2rem; }

.bottom-\[-2px\] { bottom: -2px; }

.bottom-\[-4px\] { bottom: -4px; }

.bottom-\[100\%\] { bottom: 100%; }

.bottom-\[1px\] { bottom: 1px; }

.bottom-\[20px\] { bottom: 20px; }

.bottom-\[3\.75rem\] { bottom: 3.75rem; }

.bottom-\[64px\] { bottom: 64px; }

.bottom-\[8px\] { bottom: 8px; }

.bottom-\[var\(--screen-keyboard-bottom\,env\(keyboard-inset-bottom\,0px\)\=
)\] { bottom: var(--screen-keyboard-bottom,env(keyboard-inset-bottom,0)); }

.bottom-full { bottom: 100%; }

.bottom-snc-1 { bottom: var(--snc-1); }

.end-2 { inset-inline-end: 0.5rem; }

[dir=3D"ltr"] .left-0 { left: 0px; }

[dir=3D"rtl"] .left-0 { right: 0px; }

[dir=3D"ltr"] .left-1 { left: 0.25rem; }

[dir=3D"rtl"] .left-1 { right: 0.25rem; }

[dir=3D"ltr"] .left-1\/2 { left: 50%; }

[dir=3D"rtl"] .left-1\/2 { right: 50%; }

[dir=3D"ltr"] .left-2 { left: 0.5rem; }

[dir=3D"rtl"] .left-2 { right: 0.5rem; }

[dir=3D"ltr"] .left-3 { left: 0.75rem; }

[dir=3D"rtl"] .left-3 { right: 0.75rem; }

[dir=3D"ltr"] .left-4 { left: 1rem; }

[dir=3D"rtl"] .left-4 { right: 1rem; }

[dir=3D"ltr"] .left-5 { left: 1.25rem; }

[dir=3D"rtl"] .left-5 { right: 1.25rem; }

[dir=3D"ltr"] .left-6 { left: 1.5rem; }

[dir=3D"rtl"] .left-6 { right: 1.5rem; }

[dir=3D"ltr"] .left-\[-2px\] { left: -2px; }

[dir=3D"rtl"] .left-\[-2px\] { right: -2px; }

[dir=3D"ltr"] .left-\[3\.25rem\] { left: 3.25rem; }

[dir=3D"rtl"] .left-\[3\.25rem\] { right: 3.25rem; }

[dir=3D"ltr"] .left-\[7px\] { left: 7px; }

[dir=3D"rtl"] .left-\[7px\] { right: 7px; }

[dir=3D"ltr"] .left-\[env\(titlebar-area-x\,0\)\] { left: env(titlebar-area=
-x,0); }

[dir=3D"rtl"] .left-\[env\(titlebar-area-x\,0\)\] { right: env(titlebar-are=
a-x,0); }

[dir=3D"ltr"] .left-full { left: 100%; }

[dir=3D"rtl"] .left-full { right: 100%; }

[dir=3D"ltr"] .right-0 { right: 0px; }

[dir=3D"rtl"] .right-0 { left: 0px; }

[dir=3D"ltr"] .right-1 { right: 0.25rem; }

[dir=3D"rtl"] .right-1 { left: 0.25rem; }

[dir=3D"ltr"] .right-1\/2 { right: 50%; }

[dir=3D"rtl"] .right-1\/2 { left: 50%; }

[dir=3D"ltr"] .right-14 { right: 3.5rem; }

[dir=3D"rtl"] .right-14 { left: 3.5rem; }

[dir=3D"ltr"] .right-2 { right: 0.5rem; }

[dir=3D"rtl"] .right-2 { left: 0.5rem; }

[dir=3D"ltr"] .right-3 { right: 0.75rem; }

[dir=3D"rtl"] .right-3 { left: 0.75rem; }

[dir=3D"ltr"] .right-4 { right: 1rem; }

[dir=3D"rtl"] .right-4 { left: 1rem; }

[dir=3D"ltr"] .right-5 { right: 1.25rem; }

[dir=3D"rtl"] .right-5 { left: 1.25rem; }

[dir=3D"ltr"] .right-8 { right: 2rem; }

[dir=3D"rtl"] .right-8 { left: 2rem; }

[dir=3D"ltr"] .right-\[-135px\] { right: -135px; }

[dir=3D"rtl"] .right-\[-135px\] { left: -135px; }

[dir=3D"ltr"] .right-\[-3px\] { right: -3px; }

[dir=3D"rtl"] .right-\[-3px\] { left: -3px; }

[dir=3D"ltr"] .right-\[12px\] { right: 12px; }

[dir=3D"rtl"] .right-\[12px\] { left: 12px; }

[dir=3D"ltr"] .right-\[calc\(100dvw-env\(titlebar-area-width\,100dvw\)-env\=
(titlebar-area-x\,0\)\)\] { right: calc(100dvw - env(titlebar-area-width,10=
0dvw) - env(titlebar-area-x,0)); }

[dir=3D"rtl"] .right-\[calc\(100dvw-env\(titlebar-area-width\,100dvw\)-env\=
(titlebar-area-x\,0\)\)\] { left: calc(100dvw - env(titlebar-area-width,100=
dvw) - env(titlebar-area-x,0)); }

[dir=3D"ltr"] .right-full { right: 100%; }

[dir=3D"rtl"] .right-full { left: 100%; }

[dir=3D"ltr"] .right-snc-1 { right: var(--snc-1); }

[dir=3D"rtl"] .right-snc-1 { left: var(--snc-1); }

.start-1\/2 { inset-inline-start: 50%; }

.top-0 { top: 0px; }

.top-1 { top: 0.25rem; }

.top-1\/2 { top: 50%; }

.top-11 { top: 2.75rem; }

.top-14 { top: 3.5rem; }

.top-2 { top: 0.5rem; }

.top-24 { top: 6rem; }

.top-3 { top: 0.75rem; }

.top-4 { top: 1rem; }

.top-48 { top: 12rem; }

.top-5 { top: 1.25rem; }

.top-6 { top: 1.5rem; }

.top-8 { top: 2rem; }

.top-9 { top: 2.25rem; }

.top-\[--sidebar-sticky-threshold\] { top: var(--sidebar-sticky-threshold);=
 }

.top-\[-0\.094rem\] { top: -0.094rem; }

.top-\[-1px\] { top: -1px; }

.top-\[-2px\] { top: -2px; }

.top-\[-3px\] { top: -3px; }

.top-\[-4px\] { top: -4px; }

.top-\[-6px\] { top: -6px; }

.top-\[0\.125rem\] { top: 0.125rem; }

.top-\[100vh\] { top: 100vh; }

.top-\[20px\] { top: 20px; }

.top-\[calc\(100\%-10px\)\] { top: calc(100% - 10px); }

.top-\[var\(--thread-leading-height\)\] { top: var(--thread-leading-height)=
; }

.isolate { isolation: isolate; }

.-z-10 { z-index: -10; }

.z-0 { z-index: 0; }

.z-10 { z-index: 10; }

.z-20 { z-index: 20; }

.z-30 { z-index: 30; }

.z-40 { z-index: 40; }

.z-50 { z-index: 50; }

.z-\[-1\] { z-index: -1; }

.z-\[1000\] { z-index: 1000; }

.z-\[15\] { z-index: 15; }

.z-\[1\] { z-index: 1; }

.z-\[21\] { z-index: 21; }

.z-\[60\] { z-index: 60; }

.z-\[70\] { z-index: 70; }

.order-10 { order: 10; }

.col-auto { grid-column: auto; }

.col-span-1 { grid-column: span 1 / span 1; }

.col-span-2 { grid-column: span 2 / span 2; }

.col-span-3 { grid-column: span 3 / span 3; }

.col-span-full { grid-column: 1 / -1; }

.col-start-1 { grid-column-start: 1; }

.col-start-2 { grid-column-start: 2; }

.col-end-2 { grid-column-end: 2; }

.row-auto { grid-row: auto; }

.row-span-4 { grid-row: span 4 / span 4; }

.row-start-1 { grid-row-start: 1; }

.row-start-2 { grid-row-start: 2; }

.row-end-2 { grid-row-end: 2; }

[dir=3D"ltr"] .float-right { float: right; }

[dir=3D"ltr"] .float-left, [dir=3D"rtl"] .float-right { float: left; }

[dir=3D"rtl"] .float-left { float: right; }

[dir=3D"ltr"] .clear-right { clear: right; }

[dir=3D"rtl"] .clear-right { clear: left; }

.-m-0 { margin: 0px; }

.-m-0\.5 { margin: -0.125rem; }

.m-0 { margin: 0px; }

.m-1 { margin: 0.25rem; }

.m-1\.5 { margin: 0.375rem; }

.m-2 { margin: 0.5rem; }

.m-4 { margin: 1rem; }

.m-6 { margin: 1.5rem; }

.m-8 { margin: 2rem; }

.m-\[24px\] { margin: 24px; }

.m-\[3px\] { margin: 3px; }

.m-auto { margin: auto; }

.-mx-2 { margin-left: -0.5rem; margin-right: -0.5rem; }

.-mx-3 { margin-left: -0.75rem; margin-right: -0.75rem; }

.-mx-4 { margin-left: -1rem; margin-right: -1rem; }

.-my-1 { margin-bottom: -0.25rem; margin-top: -0.25rem; }

.-my-2 { margin-bottom: -0.5rem; margin-top: -0.5rem; }

.mx-0 { margin-left: 0px; margin-right: 0px; }

.mx-1 { margin-left: 0.25rem; margin-right: 0.25rem; }

.mx-1\.5 { margin-left: 0.375rem; margin-right: 0.375rem; }

.mx-16 { margin-left: 4rem; margin-right: 4rem; }

.mx-2 { margin-left: 0.5rem; margin-right: 0.5rem; }

.mx-3 { margin-left: 0.75rem; margin-right: 0.75rem; }

.mx-4 { margin-left: 1rem; margin-right: 1rem; }

.mx-5 { margin-left: 1.25rem; margin-right: 1.25rem; }

.mx-6 { margin-left: 1.5rem; margin-right: 1.5rem; }

.mx-8 { margin-left: 2rem; margin-right: 2rem; }

.mx-\[-16px\] { margin-left: -16px; margin-right: -16px; }

.mx-\[32px\] { margin-left: 32px; margin-right: 32px; }

.mx-auto { margin-left: auto; margin-right: auto; }

.mx-snc-results-padding { margin-left: var(--snc-results-padding); margin-r=
ight: var(--snc-results-padding); }

.my-0 { margin-bottom: 0px; margin-top: 0px; }

.my-1 { margin-bottom: 0.25rem; margin-top: 0.25rem; }

.my-1\.5 { margin-bottom: 0.375rem; margin-top: 0.375rem; }

.my-10 { margin-bottom: 2.5rem; margin-top: 2.5rem; }

.my-16 { margin-bottom: 4rem; margin-top: 4rem; }

.my-2 { margin-bottom: 0.5rem; margin-top: 0.5rem; }

.my-2\.5 { margin-bottom: 0.625rem; margin-top: 0.625rem; }

.my-3 { margin-bottom: 0.75rem; margin-top: 0.75rem; }

.my-4 { margin-bottom: 1rem; margin-top: 1rem; }

.my-6 { margin-bottom: 1.5rem; margin-top: 1.5rem; }

.my-8 { margin-bottom: 2rem; margin-top: 2rem; }

.my-\[32px\] { margin-bottom: 32px; margin-top: 32px; }

.my-auto { margin-bottom: auto; margin-top: auto; }

.-mb-0 { margin-bottom: 0px; }

.-mb-0\.5 { margin-bottom: -0.125rem; }

.-mb-1 { margin-bottom: -0.25rem; }

.-mb-2 { margin-bottom: -0.5rem; }

.-mb-4 { margin-bottom: -1rem; }

[dir=3D"ltr"] .-ml-1 { margin-left: -0.25rem; }

[dir=3D"rtl"] .-ml-1 { margin-right: -0.25rem; }

[dir=3D"ltr"] .-ml-1\.5 { margin-left: -0.375rem; }

[dir=3D"rtl"] .-ml-1\.5 { margin-right: -0.375rem; }

[dir=3D"ltr"] .-ml-2 { margin-left: -0.5rem; }

[dir=3D"rtl"] .-ml-2 { margin-right: -0.5rem; }

[dir=3D"ltr"] .-ml-4 { margin-left: -1rem; }

[dir=3D"rtl"] .-ml-4 { margin-right: -1rem; }

[dir=3D"ltr"] .-mr-1 { margin-right: -0.25rem; }

[dir=3D"rtl"] .-mr-1 { margin-left: -0.25rem; }

[dir=3D"ltr"] .-mr-1\.5 { margin-right: -0.375rem; }

[dir=3D"rtl"] .-mr-1\.5 { margin-left: -0.375rem; }

[dir=3D"ltr"] .-mr-2 { margin-right: -0.5rem; }

[dir=3D"rtl"] .-mr-2 { margin-left: -0.5rem; }

[dir=3D"ltr"] .-mr-3 { margin-right: -0.75rem; }

[dir=3D"rtl"] .-mr-3 { margin-left: -0.75rem; }

[dir=3D"ltr"] .-mr-3\.5 { margin-right: -0.875rem; }

[dir=3D"rtl"] .-mr-3\.5 { margin-left: -0.875rem; }

.-ms-3 { margin-inline-start: -0.75rem; }

.-ms-3\.5 { margin-inline-start: -0.875rem; }

.-mt-0 { margin-top: 0px; }

.-mt-0\.5 { margin-top: -0.125rem; }

.-mt-1 { margin-top: -0.25rem; }

.-mt-2 { margin-top: -0.5rem; }

.-mt-3 { margin-top: -0.75rem; }

.-mt-4 { margin-top: -1rem; }

.-mt-5 { margin-top: -1.25rem; }

.mb-0 { margin-bottom: 0px; }

.mb-0\.5 { margin-bottom: 0.125rem; }

.mb-1 { margin-bottom: 0.25rem; }

.mb-1\.5 { margin-bottom: 0.375rem; }

.mb-10 { margin-bottom: 2.5rem; }

.mb-12 { margin-bottom: 3rem; }

.mb-14 { margin-bottom: 3.5rem; }

.mb-16 { margin-bottom: 4rem; }

.mb-2 { margin-bottom: 0.5rem; }

.mb-2\.5 { margin-bottom: 0.625rem; }

.mb-3 { margin-bottom: 0.75rem; }

.mb-32 { margin-bottom: 8rem; }

.mb-36 { margin-bottom: 9rem; }

.mb-4 { margin-bottom: 1rem; }

.mb-5 { margin-bottom: 1.25rem; }

.mb-6 { margin-bottom: 1.5rem; }

.mb-7 { margin-bottom: 1.75rem; }

.mb-8 { margin-bottom: 2rem; }

.mb-9 { margin-bottom: 2.25rem; }

.mb-\[-1px\] { margin-bottom: -1px; }

.mb-\[-2px\] { margin-bottom: -2px; }

.mb-\[-5px\] { margin-bottom: -5px; }

.mb-\[-6px\] { margin-bottom: -6px; }

.mb-\[0\.3125rem\] { margin-bottom: 0.3125rem; }

.mb-\[0\.5px\] { margin-bottom: 0.5px; }

.mb-\[1px\] { margin-bottom: 1px; }

.mb-bar-bottom { margin-bottom: var(--bar-gap,.25rem); }

.mb-snc-1 { margin-bottom: var(--snc-1); }

.me-1 { margin-inline-end: 0.25rem; }

[dir=3D"ltr"] .ml-0 { margin-left: 0px; }

[dir=3D"rtl"] .ml-0 { margin-right: 0px; }

[dir=3D"ltr"] .ml-0\.5 { margin-left: 0.125rem; }

[dir=3D"rtl"] .ml-0\.5 { margin-right: 0.125rem; }

[dir=3D"ltr"] .ml-1 { margin-left: 0.25rem; }

[dir=3D"rtl"] .ml-1 { margin-right: 0.25rem; }

[dir=3D"ltr"] .ml-1\.5 { margin-left: 0.375rem; }

[dir=3D"rtl"] .ml-1\.5 { margin-right: 0.375rem; }

[dir=3D"ltr"] .ml-10 { margin-left: 2.5rem; }

[dir=3D"rtl"] .ml-10 { margin-right: 2.5rem; }

[dir=3D"ltr"] .ml-2 { margin-left: 0.5rem; }

[dir=3D"rtl"] .ml-2 { margin-right: 0.5rem; }

[dir=3D"ltr"] .ml-2\.5 { margin-left: 0.625rem; }

[dir=3D"rtl"] .ml-2\.5 { margin-right: 0.625rem; }

[dir=3D"ltr"] .ml-3 { margin-left: 0.75rem; }

[dir=3D"rtl"] .ml-3 { margin-right: 0.75rem; }

[dir=3D"ltr"] .ml-4 { margin-left: 1rem; }

[dir=3D"rtl"] .ml-4 { margin-right: 1rem; }

[dir=3D"ltr"] .ml-5 { margin-left: 1.25rem; }

[dir=3D"rtl"] .ml-5 { margin-right: 1.25rem; }

[dir=3D"ltr"] .ml-6 { margin-left: 1.5rem; }

[dir=3D"rtl"] .ml-6 { margin-right: 1.5rem; }

[dir=3D"ltr"] .ml-7 { margin-left: 1.75rem; }

[dir=3D"rtl"] .ml-7 { margin-right: 1.75rem; }

[dir=3D"ltr"] .ml-8 { margin-left: 2rem; }

[dir=3D"rtl"] .ml-8 { margin-right: 2rem; }

[dir=3D"ltr"] .ml-\[-4px\] { margin-left: -4px; }

[dir=3D"rtl"] .ml-\[-4px\] { margin-right: -4px; }

[dir=3D"ltr"] .ml-\[21px\] { margin-left: 21px; }

[dir=3D"rtl"] .ml-\[21px\] { margin-right: 21px; }

[dir=3D"ltr"] .ml-\[2px\] { margin-left: 2px; }

[dir=3D"rtl"] .ml-\[2px\] { margin-right: 2px; }

[dir=3D"ltr"] .ml-\[3px\] { margin-left: 3px; }

[dir=3D"rtl"] .ml-\[3px\] { margin-right: 3px; }

[dir=3D"ltr"] .ml-auto { margin-left: auto; }

[dir=3D"rtl"] .ml-auto { margin-right: auto; }

[dir=3D"ltr"] .mr-0 { margin-right: 0px; }

[dir=3D"rtl"] .mr-0 { margin-left: 0px; }

[dir=3D"ltr"] .mr-0\.5 { margin-right: 0.125rem; }

[dir=3D"rtl"] .mr-0\.5 { margin-left: 0.125rem; }

[dir=3D"ltr"] .mr-1 { margin-right: 0.25rem; }

[dir=3D"rtl"] .mr-1 { margin-left: 0.25rem; }

[dir=3D"ltr"] .mr-1\.5 { margin-right: 0.375rem; }

[dir=3D"rtl"] .mr-1\.5 { margin-left: 0.375rem; }

[dir=3D"ltr"] .mr-12 { margin-right: 3rem; }

[dir=3D"rtl"] .mr-12 { margin-left: 3rem; }

[dir=3D"ltr"] .mr-2 { margin-right: 0.5rem; }

[dir=3D"rtl"] .mr-2 { margin-left: 0.5rem; }

[dir=3D"ltr"] .mr-2\.5 { margin-right: 0.625rem; }

[dir=3D"rtl"] .mr-2\.5 { margin-left: 0.625rem; }

[dir=3D"ltr"] .mr-3 { margin-right: 0.75rem; }

[dir=3D"rtl"] .mr-3 { margin-left: 0.75rem; }

[dir=3D"ltr"] .mr-4 { margin-right: 1rem; }

[dir=3D"rtl"] .mr-4 { margin-left: 1rem; }

[dir=3D"ltr"] .mr-5 { margin-right: 1.25rem; }

[dir=3D"rtl"] .mr-5 { margin-left: 1.25rem; }

[dir=3D"ltr"] .mr-8 { margin-right: 2rem; }

[dir=3D"rtl"] .mr-8 { margin-left: 2rem; }

[dir=3D"ltr"] .mr-9 { margin-right: 2.25rem; }

[dir=3D"rtl"] .mr-9 { margin-left: 2.25rem; }

[dir=3D"ltr"] .mr-\[0\.1875rem\] { margin-right: 0.1875rem; }

[dir=3D"rtl"] .mr-\[0\.1875rem\] { margin-left: 0.1875rem; }

[dir=3D"ltr"] .mr-px { margin-right: 1px; }

[dir=3D"rtl"] .mr-px { margin-left: 1px; }

.ms-1 { margin-inline-start: 0.25rem; }

.ms-2 { margin-inline-start: 0.5rem; }

.mt-0 { margin-top: 0px; }

.mt-0\.5 { margin-top: 0.125rem; }

.mt-1 { margin-top: 0.25rem; }

.mt-1\.5 { margin-top: 0.375rem; }

.mt-10 { margin-top: 2.5rem; }

.mt-12 { margin-top: 3rem; }

.mt-16 { margin-top: 4rem; }

.mt-2 { margin-top: 0.5rem; }

.mt-2\.5 { margin-top: 0.625rem; }

.mt-20 { margin-top: 5rem; }

.mt-3 { margin-top: 0.75rem; }

.mt-36 { margin-top: 9rem; }

.mt-4 { margin-top: 1rem; }

.mt-5 { margin-top: 1.25rem; }

.mt-6 { margin-top: 1.5rem; }

.mt-7 { margin-top: 1.75rem; }

.mt-8 { margin-top: 2rem; }

.mt-\[-10px\] { margin-top: -10px; }

.mt-\[-2px\] { margin-top: -2px; }

.mt-\[-4px\] { margin-top: -4px; }

.mt-\[0px\] { margin-top: 0px; }

.mt-\[1px\] { margin-top: 1px; }

.mt-\[2px\] { margin-top: 2px; }

.mt-\[calc\(var\(--threadFlyOut-leading-height\,57px\)\*-1\)\] { margin-top=
: calc(var(--threadFlyOut-leading-height,57px)*-1); }

.mt-\[var\(--screen-optical-compact-offset-amount\)\] { margin-top: var(--s=
creen-optical-compact-offset-amount); }

.mt-\[var\(--screen-optical-offset-amount\)\] { margin-top: var(--screen-op=
tical-offset-amount); }

.mt-auto { margin-top: auto; }

.mt-snc-1 { margin-top: var(--snc-1); }

.box-border { box-sizing: border-box; }

.line-clamp-1 { -webkit-line-clamp: 1; }

.line-clamp-1, .line-clamp-2 { -webkit-box-orient: vertical; display: -webk=
it-box; overflow: hidden; }

.line-clamp-2 { -webkit-line-clamp: 2; }

.line-clamp-3 { -webkit-line-clamp: 3; }

.line-clamp-3, .line-clamp-4 { -webkit-box-orient: vertical; display: -webk=
it-box; overflow: hidden; }

.line-clamp-4 { -webkit-line-clamp: 4; }

.line-clamp-6 { -webkit-box-orient: vertical; -webkit-line-clamp: 6; displa=
y: -webkit-box; overflow: hidden; }

.block { display: block; }

.inline-block { display: inline-block; }

.inline { display: inline; }

.flex { display: flex; }

.inline-flex { display: inline-flex; }

.table { display: table; }

.table-cell { display: table-cell; }

.table-row { display: table-row; }

.flow-root { display: flow-root; }

.grid { display: grid; }

.contents { display: contents; }

.list-item { display: list-item; }

.hidden { display: none; }

.aspect-\[4\/7\] { aspect-ratio: 4 / 7; }

.aspect-\[7\/4\] { aspect-ratio: 7 / 4; }

.aspect-square { aspect-ratio: 1 / 1; }

.aspect-video { aspect-ratio: 16 / 9; }

.size-3 { height: 0.75rem; width: 0.75rem; }

.\!h-20 { height: 5rem !important; }

.\!h-\[38px\] { height: 38px !important; }

.\!h-fit { height: fit-content !important; }

.h-0 { height: 0px; }

.h-1 { height: 0.25rem; }

.h-1\.5 { height: 0.375rem; }

.h-1\/4 { height: 25%; }

.h-10 { height: 2.5rem; }

.h-11 { height: 2.75rem; }

.h-12 { height: 3rem; }

.h-14 { height: 3.5rem; }

.h-16 { height: 4rem; }

.h-2 { height: 0.5rem; }

.h-2\.5 { height: 0.625rem; }

.h-2\/3 { height: 66.6667%; }

.h-20 { height: 5rem; }

.h-24 { height: 6rem; }

.h-3 { height: 0.75rem; }

.h-3\.5 { height: 0.875rem; }

.h-3\/4 { height: 75%; }

.h-32 { height: 8rem; }

.h-4 { height: 1rem; }

.h-4\/5 { height: 80%; }

.h-40 { height: 10rem; }

.h-44 { height: 11rem; }

.h-48 { height: 12rem; }

.h-5 { height: 1.25rem; }

.h-52 { height: 13rem; }

.h-56 { height: 14rem; }

.h-6 { height: 1.5rem; }

.h-7 { height: 1.75rem; }

.h-8 { height: 2rem; }

.h-9 { height: 2.25rem; }

.h-96 { height: 24rem; }

.h-\[0\.75rem\] { height: 0.75rem; }

.h-\[100dvh\] { height: 100dvh; }

.h-\[100vh\] { height: 100vh; }

.h-\[104px\] { height: 104px; }

.h-\[116px\] { height: 116px; }

.h-\[11px\] { height: 11px; }

.h-\[14px\] { height: 14px; }

.h-\[15px\] { height: 15px; }

.h-\[16px\] { height: 16px; }

.h-\[18px\] { height: 18px; }

.h-\[19px\] { height: 19px; }

.h-\[1px\] { height: 1px; }

.h-\[20px\] { height: 20px; }

.h-\[22px\] { height: 22px; }

.h-\[234px\] { height: 234px; }

.h-\[23px\] { height: 23px; }

.h-\[24rem\] { height: 24rem; }

.h-\[250px\] { height: 250px; }

.h-\[26px\] { height: 26px; }

.h-\[2px\] { height: 2px; }

.h-\[30px\] { height: 30px; }

.h-\[32px\] { height: 32px; }

.h-\[34px\] { height: 34px; }

.h-\[380px\] { height: 380px; }

.h-\[3px\] { height: 3px; }

.h-\[40px\] { height: 40px; }

.h-\[42px\] { height: 42px; }

.h-\[44px\] { height: 44px; }

.h-\[4px\] { height: 4px; }

.h-\[50dvh\] { height: 50dvh; }

.h-\[50px\] { height: 50px; }

.h-\[50vh\] { height: 50vh; }

.h-\[600px\] { height: 600px; }

.h-\[60px\] { height: 60px; }

.h-\[60vh\] { height: 60vh; }

.h-\[62px\] { height: 62px; }

.h-\[70px\] { height: 70px; }

.h-\[70vh\] { height: 70vh; }

.h-\[75vh\] { height: 75vh; }

.h-\[76px\] { height: 76px; }

.h-\[9rem\] { height: 9rem; }

.h-\[calc\(100\%\+var\(--snc-1\)\)\] { height: calc(100% + var(--snc-1)); }

.h-\[calc\(100\%-var\(--screen-thread-header-min-height\,60px\)\)\] { heigh=
t: calc(100% - var(--screen-thread-header-min-height,60px)); }

.h-\[calc\(100vh\+8rem\)\] { height: calc(8rem + 100vh); }

.h-\[calc\(100vh-25rem\)\] { height: calc(-25rem + 100vh); }

.h-\[calc\(var\(--screen-thread-header-min-height\,60px\)\+1px\)\] { height=
: calc(var(--screen-thread-header-min-height,60px) + 1px); }

.h-\[max\(3rem\,18vh\)\] { height: max(3rem, 18vh); }

.h-\[var\(--screen-thread-header-min-height\,60px\)\] { height: var(--scree=
n-thread-header-min-height,60px); }

.h-auto { height: auto; }

.h-dvh { height: 100dvh; }

.h-fit { height: fit-content; }

.h-full { height: 100%; }

.h-header-height { height: 3.5rem; }

.h-max { height: max-content; }

.h-px { height: 1px; }

.h-screen { height: 100vh; }

.h-snc-3 { height: var(--snc-3); }

.h-snc-input-height { height: var(--snc-input-height); }

.\!max-h-\[100vh\] { max-height: 100vh !important; }

.max-h-28 { max-height: 7rem; }

.max-h-32 { max-height: 8rem; }

.max-h-36 { max-height: 9rem; }

.max-h-40 { max-height: 10rem; }

.max-h-48 { max-height: 12rem; }

.max-h-52 { max-height: 13rem; }

.max-h-64 { max-height: 16rem; }

.max-h-96 { max-height: 24rem; }

.max-h-\[100cqh\] { max-height: 100cqh; }

.max-h-\[200px\] { max-height: 200px; }

.max-h-\[220px\] { max-height: 220px; }

.max-h-\[25dvh\] { max-height: 25dvh; }

.max-h-\[28rem\] { max-height: 28rem; }

.max-h-\[440px\] { max-height: 440px; }

.max-h-\[50dvh\] { max-height: 50dvh; }

.max-h-\[600px\] { max-height: 600px; }

.max-h-\[60vh\] { max-height: 60vh; }

.max-h-\[64px\] { max-height: 64px; }

.max-h-\[700px\] { max-height: 700px; }

.max-h-\[75vh\] { max-height: 75vh; }

.max-h-\[80vh\] { max-height: 80vh; }

.max-h-\[85vh\] { max-height: 85vh; }

.max-h-\[90vh\] { max-height: 90vh; }

.max-h-\[95\%\] { max-height: 95%; }

.max-h-\[calc\(100vh-150px\)\] { max-height: calc(-150px + 100vh); }

.max-h-\[calc\(100vh-300px\)\] { max-height: calc(-300px + 100vh); }

.max-h-\[calc\(100vh-46px\)\] { max-height: calc(-46px + 100vh); }

.max-h-full { max-height: 100%; }

.min-h-0 { min-height: 0px; }

.min-h-10 { min-height: 2.5rem; }

.min-h-12 { min-height: 3rem; }

.min-h-20 { min-height: 5rem; }

.min-h-36 { min-height: 9rem; }

.min-h-4 { min-height: 1rem; }

.min-h-5 { min-height: 1.25rem; }

.min-h-52 { min-height: 13rem; }

.min-h-6 { min-height: 1.5rem; }

.min-h-60 { min-height: 15rem; }

.min-h-8 { min-height: 2rem; }

.min-h-\[100dvh\] { min-height: 100dvh; }

.min-h-\[104px\] { min-height: 104px; }

.min-h-\[20px\] { min-height: 20px; }

.min-h-\[36px\] { min-height: 36px; }

.min-h-\[40px\] { min-height: 40px; }

.min-h-\[40vh\] { min-height: 40vh; }

.min-h-\[440px\] { min-height: 440px; }

.min-h-\[44px\] { min-height: 44px; }

.min-h-\[50dvh\] { min-height: 50dvh; }

.min-h-\[50vh\] { min-height: 50vh; }

.min-h-\[56px\] { min-height: 56px; }

.min-h-\[600px\] { min-height: 600px; }

.min-h-\[60px\] { min-height: 60px; }

.min-h-\[62px\] { min-height: 62px; }

.min-h-\[64px\] { min-height: 64px; }

.min-h-\[75vh\] { min-height: 75vh; }

.min-h-\[80vh\] { min-height: 80vh; }

.min-h-\[96px\] { min-height: 96px; }

.min-h-\[calc\(var\(--screen-thread-header-min-height\,60px\)\+1px\)\] { mi=
n-height: calc(var(--screen-thread-header-min-height,60px) + 1px); }

.min-h-\[var\(--screen-thread-header-min-height\,60px\)\] { min-height: var=
(--screen-thread-header-min-height,60px); }

.min-h-full { min-height: 100%; }

.min-h-screen { min-height: 100vh; }

.\!w-20 { width: 5rem !important; }

.\!w-3\/4 { width: 75% !important; }

.\!w-full { width: 100% !important; }

.w-0 { width: 0px; }

.w-1 { width: 0.25rem; }

.w-1\.5 { width: 0.375rem; }

.w-1\/2 { width: 50%; }

.w-1\/3 { width: 33.3333%; }

.w-1\/4 { width: 25%; }

.w-10 { width: 2.5rem; }

.w-11 { width: 2.75rem; }

.w-12 { width: 3rem; }

.w-14 { width: 3.5rem; }

.w-16 { width: 4rem; }

.w-2 { width: 0.5rem; }

.w-2\/12 { width: 16.6667%; }

.w-2\/3 { width: 66.6667%; }

.w-2\/5 { width: 40%; }

.w-20 { width: 5rem; }

.w-24 { width: 6rem; }

.w-28 { width: 7rem; }

.w-3 { width: 0.75rem; }

.w-3\.5 { width: 0.875rem; }

.w-3\/4 { width: 75%; }

.w-32 { width: 8rem; }

.w-36 { width: 9rem; }

.w-4 { width: 1rem; }

.w-4\/5 { width: 80%; }

.w-40 { width: 10rem; }

.w-44 { width: 11rem; }

.w-48 { width: 12rem; }

.w-5 { width: 1.25rem; }

.w-5\/12 { width: 41.6667%; }

.w-52 { width: 13rem; }

.w-6 { width: 1.5rem; }

.w-60 { width: 15rem; }

.w-64 { width: 16rem; }

.w-7 { width: 1.75rem; }

.w-8 { width: 2rem; }

.w-80 { width: 20rem; }

.w-9 { width: 2.25rem; }

.w-96 { width: 24rem; }

.w-\[0\.75rem\] { width: 0.75rem; }

.w-\[11px\] { width: 11px; }

.w-\[14px\] { width: 14px; }

.w-\[15px\] { width: 15px; }

.w-\[160px\] { width: 160px; }

.w-\[16px\] { width: 16px; }

.w-\[18px\] { width: 18px; }

.w-\[1px\] { width: 1px; }

.w-\[20px\] { width: 20px; }

.w-\[22px\] { width: 22px; }

.w-\[232px\] { width: 232px; }

.w-\[234px\] { width: 234px; }

.w-\[23px\] { width: 23px; }

.w-\[250px\] { width: 250px; }

.w-\[256px\] { width: 256px; }

.w-\[25vw\] { width: 25vw; }

.w-\[260px\] { width: 260px; }

.w-\[26px\] { width: 26px; }

.w-\[294px\] { width: 294px; }

.w-\[298px\] { width: 298px; }

.w-\[2rem\] { width: 2rem; }

.w-\[304px\] { width: 304px; }

.w-\[30px\] { width: 30px; }

.w-\[328px\] { width: 328px; }

.w-\[32px\] { width: 32px; }

.w-\[34px\] { width: 34px; }

.w-\[380px\] { width: 380px; }

.w-\[3px\] { width: 3px; }

.w-\[400px\] { width: 400px; }

.w-\[40px\] { width: 40px; }

.w-\[40rem\] { width: 40rem; }

.w-\[42px\] { width: 42px; }

.w-\[44px\] { width: 44px; }

.w-\[48\%\] { width: 48%; }

.w-\[4px\] { width: 4px; }

.w-\[50\%\] { width: 50%; }

.w-\[50px\] { width: 50px; }

.w-\[54px\] { width: 54px; }

.w-\[55\%\] { width: 55%; }

.w-\[60px\] { width: 60px; }

.w-\[64\%\] { width: 64%; }

.w-\[640px\] { width: 640px; }

.w-\[66\%\] { width: 66%; }

.w-\[7\.5rem\] { width: 7.5rem; }

.w-\[70\%\] { width: 70%; }

.w-\[700px\] { width: 700px; }

.w-\[75\%\] { width: 75%; }

.w-\[75px\] { width: 75px; }

.w-\[80\%\] { width: 80%; }

.w-\[800px\] { width: 800px; }

.w-\[88px\] { width: 88px; }

.w-\[90\%\] { width: 90%; }

.w-\[90px\] { width: 90px; }

.w-\[90vw\] { width: 90vw; }

.w-\[calc\(\(100\%-768px\)\/2\)\] { width: calc(50% - 384px); }

.w-\[calc\(100\%-1\.5rem\)\] { width: calc(100% - 1.5rem); }

.w-\[calc\(100\%-11rem\)\] { width: calc(100% - 11rem); }

.w-\[calc\(100\%-3rem\)\] { width: calc(100% - 3rem); }

.w-\[fit-content\] { width: fit-content; }

.w-\[var\(--screen-sidebar-popover-min-width\)\] { width: var(--screen-side=
bar-popover-min-width); }

.w-auto { width: auto; }

.w-fit { width: fit-content; }

.w-full { width: 100%; }

.w-max { width: max-content; }

.w-px { width: 1px; }

.w-screen { width: 100vw; }

.min-w-0 { min-width: 0px; }

.min-w-11 { min-width: 2.75rem; }

.min-w-20 { min-width: 5rem; }

.min-w-24 { min-width: 6rem; }

.min-w-32 { min-width: 8rem; }

.min-w-36 { min-width: 9rem; }

.min-w-40 { min-width: 10rem; }

.min-w-48 { min-width: 12rem; }

.min-w-52 { min-width: 13rem; }

.min-w-60 { min-width: 15rem; }

.min-w-64 { min-width: 16rem; }

.min-w-72 { min-width: 18rem; }

.min-w-8 { min-width: 2rem; }

.min-w-80 { min-width: 20rem; }

.min-w-\[100px\] { min-width: 100px; }

.min-w-\[125px\] { min-width: 125px; }

.min-w-\[180px\] { min-width: 180px; }

.min-w-\[200px\] { min-width: 200px; }

.min-w-\[220px\] { min-width: 220px; }

.min-w-\[224px\] { min-width: 224px; }

.min-w-\[256px\] { min-width: 256px; }

.min-w-\[25vw\] { min-width: 25vw; }

.min-w-\[280px\] { min-width: 280px; }

.min-w-\[32px\] { min-width: 32px; }

.min-w-\[340px\] { min-width: 340px; }

.min-w-\[360px\] { min-width: 360px; }

.min-w-\[50px\] { min-width: 50px; }

.min-w-\[62px\] { min-width: 62px; }

.min-w-\[680px\] { min-width: 680px; }

.min-w-\[7\.5rem\] { min-width: 7.5rem; }

.min-w-\[820px\] { min-width: 820px; }

.min-w-\[min\(450px\,80vw\)\] { min-width: min(450px, 80vw); }

.min-w-fit { min-width: fit-content; }

.min-w-full { min-width: 100%; }

.\!max-w-2xs { max-width: 240px !important; }

.\!max-w-\[80vw\] { max-width: 80vw !important; }

.max-w-100 { max-width: 25rem; }

.max-w-28 { max-width: 7rem; }

.max-w-2xl { max-width: 42rem; }

.max-w-2xs { max-width: 240px; }

.max-w-3xl { max-width: 48rem; }

.max-w-48 { max-width: 12rem; }

.max-w-4xl { max-width: 56rem; }

.max-w-52 { max-width: 13rem; }

.max-w-5xl { max-width: 64rem; }

.max-w-60 { max-width: 15rem; }

.max-w-64 { max-width: 16rem; }

.max-w-6xl { max-width: 72rem; }

.max-w-72 { max-width: 18rem; }

.max-w-7xl { max-width: 80rem; }

.max-w-80 { max-width: 20rem; }

.max-w-96 { max-width: 24rem; }

.max-w-\[100\%\] { max-width: 100%; }

.max-w-\[100px\] { max-width: 100px; }

.max-w-\[100vw\] { max-width: 100vw; }

.max-w-\[1200px\] { max-width: 1200px; }

.max-w-\[1300px\] { max-width: 1300px; }

.max-w-\[192px\] { max-width: 192px; }

.max-w-\[200px\] { max-width: 200px; }

.max-w-\[208px\] { max-width: 208px; }

.max-w-\[22\%\] { max-width: 22%; }

.max-w-\[220px\] { max-width: 220px; }

.max-w-\[256px\] { max-width: 256px; }

.max-w-\[280px\] { max-width: 280px; }

.max-w-\[30rem\] { max-width: 30rem; }

.max-w-\[320px\] { max-width: 320px; }

.max-w-\[328px\] { max-width: 328px; }

.max-w-\[36rem\] { max-width: 36rem; }

.max-w-\[372px\] { max-width: 372px; }

.max-w-\[373px\] { max-width: 373px; }

.max-w-\[400px\] { max-width: 400px; }

.max-w-\[40rem\] { max-width: 40rem; }

.max-w-\[440px\] { max-width: 440px; }

.max-w-\[480px\] { max-width: 480px; }

.max-w-\[48rem\] { max-width: 48rem; }

.max-w-\[500px\] { max-width: 500px; }

.max-w-\[550px\] { max-width: 550px; }

.max-w-\[552px\] { max-width: 552px; }

.max-w-\[555px\] { max-width: 555px; }

.max-w-\[560px\] { max-width: 560px; }

.max-w-\[60\%\] { max-width: 60%; }

.max-w-\[680px\] { max-width: 680px; }

.max-w-\[70\%\] { max-width: 70%; }

.max-w-\[700px\] { max-width: 700px; }

.max-w-\[70rem\] { max-width: 70rem; }

.max-w-\[75\%\] { max-width: 75%; }

.max-w-\[80\%\] { max-width: 80%; }

.max-w-\[800px\] { max-width: 800px; }

.max-w-\[820px\] { max-width: 820px; }

.max-w-\[90\%\] { max-width: 90%; }

.max-w-\[90vw\] { max-width: 90vw; }

.max-w-\[92px\] { max-width: 92px; }

.max-w-\[var\(--available-details-width\)\] { max-width: var(--available-de=
tails-width); }

.max-w-\[var\(--screen-content-ideal-size\)\] { max-width: var(--screen-con=
tent-ideal-size); }

.max-w-full { max-width: 100%; }

.max-w-lg { max-width: 32rem; }

.max-w-md { max-width: 28rem; }

.max-w-none { max-width: none; }

.max-w-screen-md { max-width: 768px; }

.max-w-sm { max-width: 24rem; }

.max-w-xl { max-width: 36rem; }

.max-w-xs { max-width: 20rem; }

.flex-1 { flex: 1 1 0%; }

.flex-auto { flex: 1 1 auto; }

.flex-initial { flex: 0 1 auto; }

.flex-none { flex: 0 0 auto; }

.flex-shrink { flex-shrink: 1; }

.flex-shrink-0 { flex-shrink: 0; }

.shrink { flex-shrink: 1; }

.shrink-0 { flex-shrink: 0; }

.flex-grow { flex-grow: 1; }

.flex-grow-0 { flex-grow: 0; }

.grow { flex-grow: 1; }

.grow-0 { flex-grow: 0; }

.basis-0 { flex-basis: 0px; }

.basis-\[32px\] { flex-basis: 32px; }

.table-auto { table-layout: auto; }

.table-fixed { table-layout: fixed; }

.border-separate { border-collapse: separate; }

.border-spacing-0 { --tw-border-spacing-x: 0px; --tw-border-spacing-y: 0px;=
 border-spacing: var(--tw-border-spacing-x) var(--tw-border-spacing-y); }

.origin-\[14px_50\%\] { transform-origin: 14px 50%; }

.origin-\[50\%_50\%\] { transform-origin: 50% 50%; }

.origin-bottom { transform-origin: center bottom; }

[dir=3D"ltr"] .origin-left { transform-origin: left center; }

[dir=3D"rtl"] .origin-left { transform-origin: right center; }

[dir=3D"ltr"] .origin-top-right { transform-origin: right top; }

[dir=3D"rtl"] .origin-top-right { transform-origin: left top; }

.-translate-x-1\/2 { --tw-translate-x: -50%; }

.-translate-x-1\/2, .-translate-x-2 { transform: translate(var(--tw-transla=
te-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)=
) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y=
)); }

.-translate-x-2 { --tw-translate-x: -.5rem; }

.-translate-x-52 { --tw-translate-x: -13rem; }

.-translate-x-52, .-translate-x-96 { transform: translate(var(--tw-translat=
e-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x))=
 skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)=
); }

.-translate-x-96 { --tw-translate-x: -24rem; }

.-translate-x-full { --tw-translate-x: -100%; }

.-translate-x-full, .-translate-y-1 { transform: translate(var(--tw-transla=
te-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)=
) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y=
)); }

.-translate-y-1 { --tw-translate-y: -.25rem; }

.-translate-y-1\/2 { --tw-translate-y: -50%; }

.-translate-y-1\/2, .-translate-y-2 { transform: translate(var(--tw-transla=
te-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)=
) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y=
)); }

.-translate-y-2 { --tw-translate-y: -.5rem; }

.-translate-y-full { --tw-translate-y: -100%; }

.-translate-y-full, .translate-x-0 { transform: translate(var(--tw-translat=
e-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x))=
 skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)=
); }

.translate-x-0 { --tw-translate-x: 0px; }

.translate-x-1 { --tw-translate-x: .25rem; }

.translate-x-1, .translate-x-1\/2 { transform: translate(var(--tw-translate=
-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) =
skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))=
; }

.translate-x-1\/2 { --tw-translate-x: 50%; }

.translate-x-52 { --tw-translate-x: 13rem; }

.translate-x-52, .translate-x-6 { transform: translate(var(--tw-translate-x=
),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) sk=
ewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); =
}

.translate-x-6 { --tw-translate-x: 1.5rem; }

.translate-x-96 { --tw-translate-x: 24rem; }

.translate-x-96, .translate-x-\[-100\%\] { transform: translate(var(--tw-tr=
anslate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-sk=
ew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-sc=
ale-y)); }

.translate-x-\[-100\%\] { --tw-translate-x: -100%; }

.translate-x-full { --tw-translate-x: 100%; }

.translate-x-full, .translate-y-0 { transform: translate(var(--tw-translate=
-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) =
skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))=
; }

.translate-y-0 { --tw-translate-y: 0px; }

.translate-y-0\.5 { --tw-translate-y: .125rem; }

.translate-y-0\.5, .translate-y-1 { transform: translate(var(--tw-translate=
-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) =
skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))=
; }

.translate-y-1 { --tw-translate-y: .25rem; }

.translate-y-1\/2 { --tw-translate-y: 50%; }

.translate-y-1\/2, .translate-y-\[-100\%\] { transform: translate(var(--tw-=
translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-=
skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-=
scale-y)); }

.translate-y-\[-100\%\] { --tw-translate-y: -100%; }

.translate-y-\[-10px\] { --tw-translate-y: -10px; }

.translate-y-\[-10px\], .translate-y-\[-50px\] { transform: translate(var(-=
-tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(-=
-tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(-=
-tw-scale-y)); }

.translate-y-\[-50px\] { --tw-translate-y: -50px; }

.translate-y-\[10px\] { --tw-translate-y: 10px; }

.translate-y-\[10px\], .translate-y-\[calc\(100\%-71px\)\] { transform: tra=
nslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)=
) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) =
scaleY(var(--tw-scale-y)); }

.translate-y-\[calc\(100\%-71px\)\] { --tw-translate-y: calc(100% - 71px); =
}

.-rotate-180 { --tw-rotate: -180deg; }

.-rotate-180, .-rotate-90 { transform: translate(var(--tw-translate-x),var(=
--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(va=
r(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.-rotate-90 { --tw-rotate: -90deg; }

.rotate-0 { --tw-rotate: 0deg; }

.rotate-0, .rotate-180 { transform: translate(var(--tw-translate-x),var(--t=
w-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(-=
-tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rotate-180 { --tw-rotate: 180deg; }

.rotate-45 { --tw-rotate: 45deg; }

.rotate-45, .rotate-90 { transform: translate(var(--tw-translate-x),var(--t=
w-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(-=
-tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rotate-90 { --tw-rotate: 90deg; }

.scale-0 { --tw-scale-x: 0; --tw-scale-y: 0; }

.scale-0, .scale-100 { transform: translate(var(--tw-translate-x),var(--tw-=
translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--t=
w-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.scale-100 { --tw-scale-x: 1; --tw-scale-y: 1; }

.-scale-x-100 { --tw-scale-x: -1; }

.-scale-x-100, .scale-x-75 { transform: translate(var(--tw-translate-x),var=
(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(v=
ar(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.scale-x-75 { --tw-scale-x: .75; }

.\!transform { transform: translate(var(--tw-translate-x),var(--tw-translat=
e-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y=
)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important; }

.transform { transform: translate(var(--tw-translate-x),var(--tw-translate-=
y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y))=
 scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

@keyframes blinkOnce {=20
  0% { opacity: 1; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}

.animate-blinkOnce { animation: 0.5s ease 0s 1 normal none running blinkOnc=
e; }

@keyframes bounce {=20
  0%, 100% { animation-timing-function: cubic-bezier(0.8, 0, 1, 1); transfo=
rm: translateY(-25%); }
  50% { animation-timing-function: cubic-bezier(0, 0, 0.2, 1); transform: n=
one; }
}

.animate-bounce { animation: 1s ease 0s infinite normal none running bounce=
; }

@keyframes pulse {=20
  50% { opacity: 0.5; }
}

.animate-pulse { animation: 2s cubic-bezier(0.4, 0, 0.6, 1) 0s infinite nor=
mal none running pulse; }

@keyframes pulsing {=20
  0% { opacity: 1; scale: 1; }
  50% { opacity: 0.9; scale: 0.875; }
  100% { opacity: 1; scale: 1; }
}

.animate-pulsing { animation: 2s ease-in-out 0s infinite normal forwards ru=
nning pulsing; }

.animate-slideLeftAndFade { animation: 0.2s cubic-bezier(0.16, 1, 0.3, 1) 0=
s 1 normal none running slideLeftAndFade; }

@keyframes spin {=20
  100% { transform: rotate(1turn); }
}

.animate-spin { animation: 1s linear 0s infinite normal none running spin; =
}

.cursor-auto { cursor: auto; }

.cursor-default { cursor: default; }

.cursor-e-resize { cursor: e-resize; }

.cursor-ew-resize { cursor: ew-resize; }

.cursor-grab { cursor: grab; }

.cursor-grabbing { cursor: grabbing; }

.cursor-none { cursor: none; }

.cursor-not-allowed { cursor: not-allowed; }

.cursor-ns-resize { cursor: ns-resize; }

.cursor-pointer { cursor: pointer; }

.cursor-progress { cursor: progress; }

.cursor-text { cursor: text; }

.cursor-w-resize { cursor: w-resize; }

.cursor-wait { cursor: wait; }

.select-none { user-select: none; }

.resize-none { resize: none; }

.resize { resize: both; }

.snap-x { scroll-snap-type: x var(--tw-scroll-snap-strictness); }

.snap-mandatory { --tw-scroll-snap-strictness: mandatory; }

.snap-center { scroll-snap-align: center; }

.scroll-m-5 { scroll-margin: 1.25rem; }

.scroll-mx-5 { scroll-margin-left: 1.25rem; scroll-margin-right: 1.25rem; }

.scroll-mb-\[var\(--thread-trailing-height\,150px\)\] { scroll-margin-botto=
m: var(--thread-trailing-height,150px); }

.scroll-mt-28 { scroll-margin-top: 7rem; }

.list-inside { list-style-position: inside; }

.list-decimal { list-style-type: decimal; }

.list-disc { list-style-type: disc; }

.list-none { list-style-type: none; }

.appearance-none { appearance: none; }

.columns-1 { column-count: 1; }

.break-inside-avoid { break-inside: avoid; }

.grid-flow-row { grid-auto-flow: row; }

.grid-flow-col { grid-auto-flow: column; }

.auto-rows-min { grid-auto-rows: min-content; }

.grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }

.grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }

.grid-cols-3 { grid-template-columns: repeat(3, minmax(0px, 1fr)); }

.grid-cols-4 { grid-template-columns: repeat(4, minmax(0px, 1fr)); }

.grid-cols-\[10px_1fr_10px\] { grid-template-columns: 10px 1fr 10px; }

.grid-cols-\[1fr\,auto\,1fr\] { grid-template-columns: 1fr auto 1fr; }

.grid-cols-\[1fr\,auto\] { grid-template-columns: 1fr auto; }

.grid-cols-\[1fr_auto_1fr\] { grid-template-columns: 1fr auto 1fr; }

.grid-cols-\[200px\,1fr\,1fr\] { grid-template-columns: 200px 1fr 1fr; }

.grid-cols-\[50\%\,50\%\] { grid-template-columns: 50% 50%; }

.grid-cols-\[auto\,1fr\] { grid-template-columns: auto 1fr; }

.grid-cols-\[auto\,auto\,1fr\] { grid-template-columns: auto auto 1fr; }

.grid-cols-\[auto\,auto\,auto\] { grid-template-columns: auto auto auto; }

.grid-cols-\[auto\,auto\] { grid-template-columns: auto auto; }

.grid-cols-\[auto_max-content\] { grid-template-columns: auto max-content; =
}

.grid-cols-\[minmax\(0\,1fr\)\] { grid-template-columns: minmax(0px, 1fr); =
}

.grid-cols-\[minmax\(0\,_1fr\)_auto\] { grid-template-columns: minmax(0px, =
1fr) auto; }

.grid-cols-\[repeat\(auto-fit\,minmax\(250px\,1fr\)\)\] { grid-template-col=
umns: repeat(auto-fit, minmax(250px, 1fr)); }

.grid-cols-\[repeat\(auto-fit\,minmax\(300px\,1fr\)\)\] { grid-template-col=
umns: repeat(auto-fit, minmax(300px, 1fr)); }

.grid-rows-2 { grid-template-rows: repeat(2, minmax(0px, 1fr)); }

.grid-rows-\[minmax\(10px\,_1fr\)_auto_10px\] { grid-template-rows: minmax(=
10px, 1fr) auto 10px; }

.grid-rows-\[minmax\(10px\,_1fr\)_auto_minmax\(10px\,_1fr\)\] { grid-templa=
te-rows: minmax(10px, 1fr) auto minmax(10px, 1fr); }

.flex-row { flex-direction: row; }

.flex-row-reverse { flex-direction: row-reverse; }

.flex-col { flex-direction: column; }

.flex-col-reverse { flex-direction: column-reverse; }

.flex-wrap { flex-wrap: wrap; }

.flex-wrap-reverse { flex-wrap: wrap-reverse; }

.flex-nowrap { flex-wrap: nowrap; }

.place-items-start { place-items: start; }

.content-center { align-content: center; }

.items-start { align-items: flex-start; }

.items-end { align-items: flex-end; }

.items-center { align-items: center; }

.items-baseline { align-items: baseline; }

.items-stretch { align-items: stretch; }

.justify-start { justify-content: flex-start; }

.justify-end { justify-content: flex-end; }

.justify-center { justify-content: center; }

.justify-between { justify-content: space-between; }

.justify-around { justify-content: space-around; }

.justify-stretch { justify-content: stretch; }

.justify-items-center { justify-items: center; }

.gap-0 { gap: 0px; }

.gap-0\.5 { gap: 0.125rem; }

.gap-1 { gap: 0.25rem; }

.gap-1\.5 { gap: 0.375rem; }

.gap-10 { gap: 2.5rem; }

.gap-2 { gap: 0.5rem; }

.gap-2\.5 { gap: 0.625rem; }

.gap-3 { gap: 0.75rem; }

.gap-3\.5 { gap: 0.875rem; }

.gap-32 { gap: 8rem; }

.gap-4 { gap: 1rem; }

.gap-5 { gap: 1.25rem; }

.gap-6 { gap: 1.5rem; }

.gap-7 { gap: 1.75rem; }

.gap-8 { gap: 2rem; }

.gap-\[10px\] { gap: 10px; }

.gap-\[2px\] { gap: 2px; }

.gap-bar { gap: var(--bar-gap,.25rem); }

.gap-snc-1 { gap: var(--snc-1); }

.gap-snc-results-padding { gap: var(--snc-results-padding); }

.gap-x-1 { column-gap: 0.25rem; }

.gap-x-1\.5 { column-gap: 0.375rem; }

.gap-x-2 { column-gap: 0.5rem; }

.gap-x-3 { column-gap: 0.75rem; }

.gap-x-4 { column-gap: 1rem; }

.gap-x-8 { column-gap: 2rem; }

.gap-x-9 { column-gap: 2.25rem; }

.gap-y-1 { row-gap: 0.25rem; }

.gap-y-2 { row-gap: 0.5rem; }

.gap-y-4 { row-gap: 1rem; }

.-space-y-px > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; m=
argin-bottom: calc(-1px*var(--tw-space-y-reverse)); margin-top: calc(-1px*(=
1 - var(--tw-space-y-reverse))); }

.space-x-1 > :not([hidden]) ~ :not([hidden]) { --tw-space-x-reverse: 0; }

[dir=3D"ltr"] .space-x-1 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(.25rem*(1 - var(--tw-space-x-reverse))); margin-right: calc(.25rem*var(=
--tw-space-x-reverse)); }

[dir=3D"rtl"] .space-x-1 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(.25rem*var(--tw-space-x-reverse)); margin-right: calc(.25rem*(1 - var(-=
-tw-space-x-reverse))); }

.space-x-1\.5 > :not([hidden]) ~ :not([hidden]) { --tw-space-x-reverse: 0; =
}

[dir=3D"ltr"] .space-x-1\.5 > :not([hidden]) ~ :not([hidden]) { margin-left=
: calc(.375rem*(1 - var(--tw-space-x-reverse))); margin-right: calc(.375rem=
*var(--tw-space-x-reverse)); }

[dir=3D"rtl"] .space-x-1\.5 > :not([hidden]) ~ :not([hidden]) { margin-left=
: calc(.375rem*var(--tw-space-x-reverse)); margin-right: calc(.375rem*(1 - =
var(--tw-space-x-reverse))); }

.space-x-14 > :not([hidden]) ~ :not([hidden]) { --tw-space-x-reverse: 0; }

[dir=3D"ltr"] .space-x-14 > :not([hidden]) ~ :not([hidden]) { margin-left: =
calc(3.5rem*(1 - var(--tw-space-x-reverse))); margin-right: calc(3.5rem*var=
(--tw-space-x-reverse)); }

[dir=3D"rtl"] .space-x-14 > :not([hidden]) ~ :not([hidden]) { margin-left: =
calc(3.5rem*var(--tw-space-x-reverse)); margin-right: calc(3.5rem*(1 - var(=
--tw-space-x-reverse))); }

.space-x-2 > :not([hidden]) ~ :not([hidden]) { --tw-space-x-reverse: 0; }

[dir=3D"ltr"] .space-x-2 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(.5rem*(1 - var(--tw-space-x-reverse))); margin-right: calc(.5rem*var(--=
tw-space-x-reverse)); }

[dir=3D"rtl"] .space-x-2 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(.5rem*var(--tw-space-x-reverse)); margin-right: calc(.5rem*(1 - var(--t=
w-space-x-reverse))); }

.space-x-3 > :not([hidden]) ~ :not([hidden]) { --tw-space-x-reverse: 0; }

[dir=3D"ltr"] .space-x-3 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(.75rem*(1 - var(--tw-space-x-reverse))); margin-right: calc(.75rem*var(=
--tw-space-x-reverse)); }

[dir=3D"rtl"] .space-x-3 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(.75rem*var(--tw-space-x-reverse)); margin-right: calc(.75rem*(1 - var(-=
-tw-space-x-reverse))); }

.space-x-4 > :not([hidden]) ~ :not([hidden]) { --tw-space-x-reverse: 0; }

[dir=3D"ltr"] .space-x-4 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(1rem*(1 - var(--tw-space-x-reverse))); margin-right: calc(1rem*var(--tw=
-space-x-reverse)); }

[dir=3D"rtl"] .space-x-4 > :not([hidden]) ~ :not([hidden]) { margin-left: c=
alc(1rem*var(--tw-space-x-reverse)); margin-right: calc(1rem*(1 - var(--tw-=
space-x-reverse))); }

.space-y-0 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(0px*var(--tw-space-y-reverse)); margin-top: calc(0px*(1 - =
var(--tw-space-y-reverse))); }

.space-y-1 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(.25rem*var(--tw-space-y-reverse)); margin-top: calc(.25rem=
*(1 - var(--tw-space-y-reverse))); }

.space-y-1\.5 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; =
margin-bottom: calc(.375rem*var(--tw-space-y-reverse)); margin-top: calc(.3=
75rem*(1 - var(--tw-space-y-reverse))); }

.space-y-2 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(.5rem*var(--tw-space-y-reverse)); margin-top: calc(.5rem*(=
1 - var(--tw-space-y-reverse))); }

.space-y-3 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(.75rem*var(--tw-space-y-reverse)); margin-top: calc(.75rem=
*(1 - var(--tw-space-y-reverse))); }

.space-y-4 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(1rem*var(--tw-space-y-reverse)); margin-top: calc(1rem*(1 =
- var(--tw-space-y-reverse))); }

.space-y-5 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(1.25rem*var(--tw-space-y-reverse)); margin-top: calc(1.25r=
em*(1 - var(--tw-space-y-reverse))); }

.space-y-6 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(1.5rem*var(--tw-space-y-reverse)); margin-top: calc(1.5rem=
*(1 - var(--tw-space-y-reverse))); }

.space-y-8 > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: 0; mar=
gin-bottom: calc(2rem*var(--tw-space-y-reverse)); margin-top: calc(2rem*(1 =
- var(--tw-space-y-reverse))); }

.space-y-reverse > :not([hidden]) ~ :not([hidden]) { --tw-space-y-reverse: =
1; }

.divide-x > :not([hidden]) ~ :not([hidden]) { --tw-divide-x-reverse: 0; }

[dir=3D"ltr"] .divide-x > :not([hidden]) ~ :not([hidden]) { border-left-wid=
th: calc(1px*(1 - var(--tw-divide-x-reverse))); border-right-width: calc(1p=
x*var(--tw-divide-x-reverse)); }

[dir=3D"rtl"] .divide-x > :not([hidden]) ~ :not([hidden]) { border-left-wid=
th: calc(1px*var(--tw-divide-x-reverse)); border-right-width: calc(1px*(1 -=
 var(--tw-divide-x-reverse))); }

.divide-y > :not([hidden]) ~ :not([hidden]) { --tw-divide-y-reverse: 0; bor=
der-bottom-width: calc(1px*var(--tw-divide-y-reverse)); border-top-width: c=
alc(1px*(1 - var(--tw-divide-y-reverse))); }

.divide-gray-200 > :not([hidden]) ~ :not([hidden]) { --tw-divide-opacity: 1=
; border-color: rgb(227 227 227/var(--tw-divide-opacity)); }

.divide-gray-700 > :not([hidden]) ~ :not([hidden]) { --tw-divide-opacity: 1=
; border-color: rgb(66 66 66/var(--tw-divide-opacity)); }

.divide-token-border-light > :not([hidden]) ~ :not([hidden]) { border-color=
: var(--border-light); }

.divide-token-border-medium > :not([hidden]) ~ :not([hidden]) { border-colo=
r: var(--border-medium); }

.divide-white\/10 > :not([hidden]) ~ :not([hidden]) { border-color: rgba(25=
5, 255, 255, 0.1); }

.self-start { align-self: flex-start; }

.self-end { align-self: flex-end; }

.self-center { align-self: center; }

.self-stretch { align-self: stretch; }

.justify-self-start { justify-self: start; }

.justify-self-end { justify-self: end; }

.justify-self-center { justify-self: center; }

.overflow-auto { overflow: auto; }

.overflow-hidden { overflow: hidden; }

.overflow-clip { overflow: clip; }

.\!overflow-visible { overflow: visible !important; }

.overflow-visible { overflow: visible; }

.overflow-scroll { overflow: scroll; }

.overflow-x-auto { overflow-x: auto; }

.overflow-y-auto { overflow-y: auto; }

.overflow-x-hidden { overflow-x: hidden; }

.overflow-y-hidden { overflow-y: hidden; }

.overflow-x-clip { overflow-x: clip; }

.\!overflow-y-scroll { overflow-y: scroll !important; }

.overflow-y-scroll { overflow-y: scroll; }

.scroll-smooth { scroll-behavior: smooth; }

.truncate { overflow: hidden; white-space: nowrap; }

.text-ellipsis, .truncate { text-overflow: ellipsis; }

.text-clip { text-overflow: clip; }

.whitespace-normal { white-space: normal; }

.whitespace-nowrap { white-space: nowrap; }

.\!whitespace-pre { white-space: pre !important; }

.whitespace-pre { white-space: pre; }

.whitespace-pre-line { white-space: pre-line; }

.\!whitespace-pre-wrap { white-space: pre-wrap !important; }

.whitespace-pre-wrap { white-space: pre-wrap; }

.whitespace-break-spaces { white-space: break-spaces; }

.text-wrap { text-wrap: wrap; }

.text-nowrap { text-wrap: nowrap; }

.text-balance { text-wrap: balance; }

.text-pretty { text-wrap: pretty; }

.break-words { overflow-wrap: break-word; }

.break-all { word-break: break-all; }

.\!rounded { border-radius: 0.25rem !important; }

.\!rounded-2xl { border-radius: 1rem !important; }

.\!rounded-full { border-radius: 9999px !important; }

.\!rounded-lg { border-radius: 0.5rem !important; }

.rounded { border-radius: 0.25rem; }

.rounded-2xl { border-radius: 1rem; }

.rounded-3xl { border-radius: 1.5rem; }

.rounded-\[0\.25rem\] { border-radius: 0.25rem; }

.rounded-\[20px\] { border-radius: 20px; }

.rounded-\[2px\] { border-radius: 2px; }

.rounded-\[30px\] { border-radius: 30px; }

.rounded-\[38px\] { border-radius: 38px; }

.rounded-\[4px\] { border-radius: 4px; }

.rounded-\[5px\] { border-radius: 5px; }

.rounded-full { border-radius: 9999px; }

.rounded-lg { border-radius: 0.5rem; }

.rounded-md { border-radius: 0.375rem; }

.rounded-none { border-radius: 0px; }

.rounded-sm { border-radius: 0.125rem; }

.rounded-xl { border-radius: 0.75rem; }

.rounded-b-lg { border-bottom-left-radius: 0.5rem; border-bottom-right-radi=
us: 0.5rem; }

.rounded-b-xl { border-bottom-left-radius: 0.75rem; border-bottom-right-rad=
ius: 0.75rem; }

[dir=3D"ltr"] .rounded-l { border-bottom-left-radius: 0.25rem; border-top-l=
eft-radius: 0.25rem; }

[dir=3D"rtl"] .rounded-l { border-bottom-right-radius: 0.25rem; border-top-=
right-radius: 0.25rem; }

[dir=3D"ltr"] .rounded-l-full { border-bottom-left-radius: 9999px; border-t=
op-left-radius: 9999px; }

[dir=3D"rtl"] .rounded-l-full { border-bottom-right-radius: 9999px; border-=
top-right-radius: 9999px; }

[dir=3D"ltr"] .rounded-l-md { border-bottom-left-radius: 0.375rem; border-t=
op-left-radius: 0.375rem; }

[dir=3D"rtl"] .rounded-l-md { border-bottom-right-radius: 0.375rem; border-=
top-right-radius: 0.375rem; }

[dir=3D"ltr"] .rounded-l-none { border-bottom-left-radius: 0px; border-top-=
left-radius: 0px; }

[dir=3D"rtl"] .rounded-l-none { border-bottom-right-radius: 0px; border-top=
-right-radius: 0px; }

[dir=3D"ltr"] .rounded-l-xl { border-bottom-left-radius: 0.75rem; border-to=
p-left-radius: 0.75rem; }

[dir=3D"rtl"] .rounded-l-xl { border-bottom-right-radius: 0.75rem; border-t=
op-right-radius: 0.75rem; }

[dir=3D"ltr"] .rounded-r { border-bottom-right-radius: 0.25rem; border-top-=
right-radius: 0.25rem; }

[dir=3D"rtl"] .rounded-r { border-bottom-left-radius: 0.25rem; border-top-l=
eft-radius: 0.25rem; }

[dir=3D"ltr"] .rounded-r-full { border-bottom-right-radius: 9999px; border-=
top-right-radius: 9999px; }

[dir=3D"rtl"] .rounded-r-full { border-bottom-left-radius: 9999px; border-t=
op-left-radius: 9999px; }

[dir=3D"ltr"] .rounded-r-md { border-bottom-right-radius: 0.375rem; border-=
top-right-radius: 0.375rem; }

[dir=3D"rtl"] .rounded-r-md { border-bottom-left-radius: 0.375rem; border-t=
op-left-radius: 0.375rem; }

[dir=3D"ltr"] .rounded-r-none { border-bottom-right-radius: 0px; border-top=
-right-radius: 0px; }

[dir=3D"rtl"] .rounded-r-none { border-bottom-left-radius: 0px; border-top-=
left-radius: 0px; }

[dir=3D"ltr"] .rounded-r-xl { border-bottom-right-radius: 0.75rem; border-t=
op-right-radius: 0.75rem; }

[dir=3D"rtl"] .rounded-r-xl { border-bottom-left-radius: 0.75rem; border-to=
p-left-radius: 0.75rem; }

.rounded-t-2xl { border-top-left-radius: 1rem; border-top-right-radius: 1re=
m; }

.rounded-t-\[20px\] { border-top-left-radius: 20px; border-top-right-radius=
: 20px; }

.rounded-t-\[30px\] { border-top-left-radius: 30px; border-top-right-radius=
: 30px; }

.rounded-t-lg { border-top-left-radius: 0.5rem; border-top-right-radius: 0.=
5rem; }

.rounded-t-md { border-top-left-radius: 0.375rem; border-top-right-radius: =
0.375rem; }

.rounded-t-none { border-top-left-radius: 0px; border-top-right-radius: 0px=
; }

.rounded-t-xl { border-top-left-radius: 0.75rem; border-top-right-radius: 0=
.75rem; }

[dir=3D"ltr"] .rounded-bl-2xl { border-bottom-left-radius: 1rem; }

[dir=3D"rtl"] .rounded-bl-2xl { border-bottom-right-radius: 1rem; }

[dir=3D"ltr"] .rounded-bl-lg { border-bottom-left-radius: 0.5rem; }

[dir=3D"rtl"] .rounded-bl-lg { border-bottom-right-radius: 0.5rem; }

[dir=3D"ltr"] .rounded-bl-xl { border-bottom-left-radius: 0.75rem; }

[dir=3D"rtl"] .rounded-bl-xl { border-bottom-right-radius: 0.75rem; }

[dir=3D"ltr"] .rounded-br-full { border-bottom-right-radius: 9999px; }

[dir=3D"rtl"] .rounded-br-full { border-bottom-left-radius: 9999px; }

[dir=3D"ltr"] .rounded-br-sm { border-bottom-right-radius: 0.125rem; }

[dir=3D"rtl"] .rounded-br-sm { border-bottom-left-radius: 0.125rem; }

[dir=3D"ltr"] .rounded-br-xl { border-bottom-right-radius: 0.75rem; }

[dir=3D"rtl"] .rounded-br-xl { border-bottom-left-radius: 0.75rem; }

[dir=3D"ltr"] .rounded-tl-2xl { border-top-left-radius: 1rem; }

[dir=3D"rtl"] .rounded-tl-2xl { border-top-right-radius: 1rem; }

[dir=3D"ltr"] .rounded-tl-xl { border-top-left-radius: 0.75rem; }

[dir=3D"rtl"] .rounded-tl-xl { border-top-right-radius: 0.75rem; }

[dir=3D"ltr"] .rounded-tr-2xl { border-top-right-radius: 1rem; }

[dir=3D"rtl"] .rounded-tr-2xl { border-top-left-radius: 1rem; }

[dir=3D"ltr"] .rounded-tr-lg { border-top-right-radius: 0.5rem; }

[dir=3D"rtl"] .rounded-tr-lg { border-top-left-radius: 0.5rem; }

[dir=3D"ltr"] .rounded-tr-xl { border-top-right-radius: 0.75rem; }

[dir=3D"rtl"] .rounded-tr-xl { border-top-left-radius: 0.75rem; }

.\!border-0 { border-width: 0px !important; }

.border { border-width: 1px; }

.border-0 { border-width: 0px; }

.border-2 { border-width: 2px; }

.border-\[0\.5px\] { border-width: 0.5px; }

.border-\[3px\] { border-width: 3px; }

.border-y { border-bottom-width: 1px; border-top-width: 1px; }

[dir=3D"ltr"] .\!border-l-0 { border-left-width: 0px !important; }

[dir=3D"ltr"] .\!border-r-0, [dir=3D"rtl"] .\!border-l-0 { border-right-wid=
th: 0px !important; }

[dir=3D"rtl"] .\!border-r-0 { border-left-width: 0px !important; }

.\!border-t-0 { border-top-width: 0px !important; }

.border-b { border-bottom-width: 1px; }

.border-b-0 { border-bottom-width: 0px; }

.border-b-2 { border-bottom-width: 2px; }

.border-b-\[0\.5px\] { border-bottom-width: 0.5px; }

[dir=3D"ltr"] .border-l { border-left-width: 1px; }

[dir=3D"rtl"] .border-l { border-right-width: 1px; }

[dir=3D"ltr"] .border-l-0 { border-left-width: 0px; }

[dir=3D"rtl"] .border-l-0 { border-right-width: 0px; }

[dir=3D"ltr"] .border-l-2 { border-left-width: 2px; }

[dir=3D"rtl"] .border-l-2 { border-right-width: 2px; }

[dir=3D"ltr"] .border-l-4 { border-left-width: 4px; }

[dir=3D"rtl"] .border-l-4 { border-right-width: 4px; }

[dir=3D"ltr"] .border-l-8 { border-left-width: 8px; }

[dir=3D"rtl"] .border-l-8 { border-right-width: 8px; }

[dir=3D"ltr"] .border-r { border-right-width: 1px; }

[dir=3D"rtl"] .border-r { border-left-width: 1px; }

[dir=3D"ltr"] .border-r-0 { border-right-width: 0px; }

[dir=3D"rtl"] .border-r-0 { border-left-width: 0px; }

[dir=3D"ltr"] .border-r-8 { border-right-width: 8px; }

[dir=3D"rtl"] .border-r-8 { border-left-width: 8px; }

[dir=3D"ltr"] .border-r-\[1px\] { border-right-width: 1px; }

[dir=3D"rtl"] .border-r-\[1px\] { border-left-width: 1px; }

.border-t { border-top-width: 1px; }

.border-t-0 { border-top-width: 0px; }

.border-t-8 { border-top-width: 8px; }

.border-t-\[0\.5px\] { border-top-width: 0.5px; }

.border-solid { border-style: solid; }

.border-dashed { border-style: dashed; }

.border-none { border-style: none; }

.\!border-token-border-light { border-color: var(--border-light) !important=
; }

.\!border-token-border-xlight { border-color: var(--border-xlight) !importa=
nt; }

.\!border-token-text-primary { border-color: var(--text-primary) !important=
; }

.border-\[\#EDEDF2\] { --tw-border-opacity: 1; border-color: rgb(237 237 24=
2/var(--tw-border-opacity)); }

.border-\[\#f4f4f4\] { --tw-border-opacity: 1; border-color: rgb(244 244 24=
4/var(--tw-border-opacity)); }

.border-\[rgba\(0\,0\,0\,0\.1\)\] { border-color: rgba(0, 0, 0, 0.1); }

.border-\[rgba\(0\,0\,0\,0\.18\)\] { border-color: rgba(0, 0, 0, 0.18); }

.border-black { --tw-border-opacity: 1; border-color: rgb(0 0 0/var(--tw-bo=
rder-opacity)); }

.border-black\/10 { border-color: rgba(0, 0, 0, 0.1); }

.border-black\/20 { border-color: rgba(0, 0, 0, 0.2); }

.border-black\/5 { border-color: rgba(0, 0, 0, 0.05); }

.border-blue-100 { --tw-border-opacity: 1; border-color: rgb(219 234 254/va=
r(--tw-border-opacity)); }

.border-blue-400\/15 { border-color: rgba(58, 136, 255, 0.15); }

.border-blue-selection\/\[\.3\] { border-color: rgba(0, 122, 255, 0.3); }

.border-brand-green { --tw-border-opacity: 1; border-color: rgb(25 195 125/=
var(--tw-border-opacity)); }

.border-brand-green-800 { --tw-border-opacity: 1; border-color: rgb(5 167 7=
0/var(--tw-border-opacity)); }

.border-brand-purple { --tw-border-opacity: 1; border-color: rgb(171 104 25=
5/var(--tw-border-opacity)); }

.border-gray-100 { --tw-border-opacity: 1; border-color: rgb(236 236 236/va=
r(--tw-border-opacity)); }

.border-gray-200 { --tw-border-opacity: 1; border-color: rgb(227 227 227/va=
r(--tw-border-opacity)); }

.border-gray-300 { --tw-border-opacity: 1; border-color: rgb(205 205 205/va=
r(--tw-border-opacity)); }

.border-gray-400 { --tw-border-opacity: 1; border-color: rgb(180 180 180/va=
r(--tw-border-opacity)); }

.border-gray-500 { --tw-border-opacity: 1; border-color: rgb(155 155 155/va=
r(--tw-border-opacity)); }

.border-gray-600 { --tw-border-opacity: 1; border-color: rgb(103 103 103/va=
r(--tw-border-opacity)); }

.border-gray-700 { --tw-border-opacity: 1; border-color: rgb(66 66 66/var(-=
-tw-border-opacity)); }

.border-gray-950 { --tw-border-opacity: 1; border-color: rgb(13 13 13/var(-=
-tw-border-opacity)); }

.border-green-500 { --tw-border-opacity: 1; border-color: rgb(25 195 125/va=
r(--tw-border-opacity)); }

.border-green-600 { --tw-border-opacity: 1; border-color: rgb(16 163 127/va=
r(--tw-border-opacity)); }

.border-orange-400 { --tw-border-opacity: 1; border-color: rgb(255 96 0/var=
(--tw-border-opacity)); }

.border-orange-400\/15 { border-color: rgba(255, 96, 0, 0.15); }

.border-orange-500 { --tw-border-opacity: 1; border-color: rgb(224 108 43/v=
ar(--tw-border-opacity)); }

.border-red-200 { --tw-border-opacity: 1; border-color: rgb(254 202 202/var=
(--tw-border-opacity)); }

.border-red-400 { --tw-border-opacity: 1; border-color: rgb(248 113 113/var=
(--tw-border-opacity)); }

.border-red-500 { --tw-border-opacity: 1; border-color: rgb(239 68 68/var(-=
-tw-border-opacity)); }

.border-red-600 { --tw-border-opacity: 1; border-color: rgb(220 38 38/var(-=
-tw-border-opacity)); }

.border-red-700 { --tw-border-opacity: 1; border-color: rgb(185 28 28/var(-=
-tw-border-opacity)); }

.border-token-border-heavy { border-color: var(--border-heavy); }

.border-token-border-light { border-color: var(--border-light); }

.border-token-border-medium { border-color: var(--border-medium); }

.border-token-border-sharp { border-color: var(--border-sharp); }

.border-token-border-xheavy { border-color: var(--border-xheavy); }

.border-token-border-xlight { border-color: var(--border-xlight); }

.border-token-composer-surface { border-color: var(--composer-surface); }

.border-token-main-surface-primary { border-color: var(--main-surface-prima=
ry); }

.border-token-main-surface-secondary { border-color: var(--main-surface-sec=
ondary); }

.border-token-main-surface-tertiary { border-color: var(--main-surface-tert=
iary); }

.border-token-surface-error\/15 { border-color: rgb(var(--surface-error)/.1=
5); }

.border-token-text-primary { border-color: var(--text-primary); }

.border-token-text-quaternary { border-color: var(--text-quaternary); }

.border-token-text-secondary { border-color: var(--text-secondary); }

.border-token-text-tertiary { border-color: var(--text-tertiary); }

.border-transparent { border-color: transparent; }

.border-white { --tw-border-opacity: 1; border-color: rgb(255 255 255/var(-=
-tw-border-opacity)); }

.border-white\/10 { border-color: rgba(255, 255, 255, 0.1); }

.border-white\/20 { border-color: rgba(255, 255, 255, 0.2); }

.border-y-token-border-medium { border-bottom-color: var(--border-medium); =
border-top-color: var(--border-medium); }

.border-b-black { --tw-border-opacity: 1; border-bottom-color: rgb(0 0 0/va=
r(--tw-border-opacity)); }

.border-b-transparent { border-bottom-color: transparent; }

[dir=3D"ltr"] .border-l-token-border-medium { border-left-color: var(--bord=
er-medium); }

[dir=3D"rtl"] .border-l-token-border-medium { border-right-color: var(--bor=
der-medium); }

[dir=3D"ltr"] .border-l-token-border-sharp { border-left-color: var(--borde=
r-sharp); }

[dir=3D"rtl"] .border-l-token-border-sharp { border-right-color: var(--bord=
er-sharp); }

[dir=3D"ltr"] .border-l-token-border-xlight { border-left-color: var(--bord=
er-xlight); }

[dir=3D"rtl"] .border-l-token-border-xlight { border-right-color: var(--bor=
der-xlight); }

[dir=3D"ltr"] .border-l-token-sidebar-surface-secondary { border-left-color=
: var(--sidebar-surface-secondary); }

[dir=3D"rtl"] .border-l-token-sidebar-surface-secondary { border-right-colo=
r: var(--sidebar-surface-secondary); }

[dir=3D"ltr"] .border-l-transparent { border-left-color: transparent; }

[dir=3D"rtl"] .border-l-transparent { border-right-color: transparent; }

[dir=3D"ltr"] .border-r-token-border-xlight { border-right-color: var(--bor=
der-xlight); }

[dir=3D"rtl"] .border-r-token-border-xlight { border-left-color: var(--bord=
er-xlight); }

[dir=3D"ltr"] .border-r-transparent { border-right-color: transparent; }

[dir=3D"rtl"] .border-r-transparent { border-left-color: transparent; }

.border-t-\[\#0077FF\] { --tw-border-opacity: 1; border-top-color: rgb(0 11=
9 255/var(--tw-border-opacity)); }

.border-opacity-10 { --tw-border-opacity: .1; }

.\!bg-\[Highlight\] { background-color: highlight !important; }

.\!bg-black { --tw-bg-opacity: 1 !important; background-color: rgb(0 0 0/va=
r(--tw-bg-opacity)) !important; }

.\!bg-black\/5 { background-color: rgba(0, 0, 0, 0.05) !important; }

.\!bg-gray-200 { --tw-bg-opacity: 1 !important; background-color: rgb(227 2=
27 227/var(--tw-bg-opacity)) !important; }

.\!bg-gray-300 { --tw-bg-opacity: 1 !important; background-color: rgb(205 2=
05 205/var(--tw-bg-opacity)) !important; }

.\!bg-green-100 { --tw-bg-opacity: 1 !important; background-color: rgb(210 =
244 211/var(--tw-bg-opacity)) !important; }

.\!bg-green-400 { --tw-bg-opacity: 1 !important; background-color: rgb(104 =
222 122/var(--tw-bg-opacity)) !important; }

.\!bg-red-100 { --tw-bg-opacity: 1 !important; background-color: rgb(254 22=
6 226/var(--tw-bg-opacity)) !important; }

.\!bg-red-400 { --tw-bg-opacity: 1 !important; background-color: rgb(248 11=
3 113/var(--tw-bg-opacity)) !important; }

.\!bg-token-main-surface-primary { background-color: var(--main-surface-pri=
mary) !important; }

.\!bg-token-text-primary { background-color: var(--text-primary) !important=
; }

.\!bg-transparent { background-color: transparent !important; }

.\!bg-white { --tw-bg-opacity: 1 !important; background-color: rgb(255 255 =
255/var(--tw-bg-opacity)) !important; }

.bg-\[\#0077FF\] { --tw-bg-opacity: 1; background-color: rgb(0 119 255/var(=
--tw-bg-opacity)); }

.bg-\[\#0088FF\] { --tw-bg-opacity: 1; background-color: rgb(0 136 255/var(=
--tw-bg-opacity)); }

.bg-\[\#080808\] { --tw-bg-opacity: 1; background-color: rgb(8 8 8/var(--tw=
-bg-opacity)); }

.bg-\[\#10A37F\] { --tw-bg-opacity: 1; background-color: rgb(16 163 127/var=
(--tw-bg-opacity)); }

.bg-\[\#129FBF\] { --tw-bg-opacity: 1; background-color: rgb(18 159 191/var=
(--tw-bg-opacity)); }

.bg-\[\#377fea\] { --tw-bg-opacity: 1; background-color: rgb(55 127 234/var=
(--tw-bg-opacity)); }

.bg-\[\#96bf48\] { --tw-bg-opacity: 1; background-color: rgb(150 191 72/var=
(--tw-bg-opacity)); }

.bg-\[\#A47EE726\] { background-color: rgba(164, 126, 231, 0.15); }

.bg-\[\#B161FD\] { --tw-bg-opacity: 1; background-color: rgb(177 97 253/var=
(--tw-bg-opacity)); }

.bg-\[\#EDF1FA\] { --tw-bg-opacity: 1; background-color: rgb(237 241 250/va=
r(--tw-bg-opacity)); }

.bg-\[\#F1F1F1\] { --tw-bg-opacity: 1; background-color: rgb(241 241 241/va=
r(--tw-bg-opacity)); }

.bg-\[\#F2F2F2\] { --tw-bg-opacity: 1; background-color: rgb(242 242 242/va=
r(--tw-bg-opacity)); }

.bg-\[\#F8CA27\] { --tw-bg-opacity: 1; background-color: rgb(248 202 39/var=
(--tw-bg-opacity)); }

.bg-\[\#F9F9F9\] { --tw-bg-opacity: 1; background-color: rgb(249 249 249/va=
r(--tw-bg-opacity)); }

.bg-\[\#FF5588\] { --tw-bg-opacity: 1; background-color: rgb(255 85 136/var=
(--tw-bg-opacity)); }

.bg-\[\#FF6E3C\] { --tw-bg-opacity: 1; background-color: rgb(255 110 60/var=
(--tw-bg-opacity)); }

.bg-\[\#e2c541\] { --tw-bg-opacity: 1; background-color: rgb(226 197 65/var=
(--tw-bg-opacity)); }

.bg-\[\#f4f4f4\] { --tw-bg-opacity: 1; background-color: rgb(244 244 244/va=
r(--tw-bg-opacity)); }

.bg-\[\#f6e9cc\] { --tw-bg-opacity: 1; background-color: rgb(246 233 204/va=
r(--tw-bg-opacity)); }

.bg-\[\#fcf6e0\] { --tw-bg-opacity: 1; background-color: rgb(252 246 224/va=
r(--tw-bg-opacity)); }

.bg-\[Highlight\] { background-color: highlight; }

.bg-\[rgba\(255\,255\,255\,0\.9\)\] { background-color: rgba(255, 255, 255,=
 0.9); }

.bg-black { --tw-bg-opacity: 1; background-color: rgb(0 0 0/var(--tw-bg-opa=
city)); }

.bg-black\/10 { background-color: rgba(0, 0, 0, 0.1); }

.bg-black\/40 { background-color: rgba(0, 0, 0, 0.4); }

.bg-black\/5 { background-color: rgba(0, 0, 0, 0.05); }

.bg-black\/50 { background-color: rgba(0, 0, 0, 0.5); }

.bg-black\/90 { background-color: rgba(0, 0, 0, 0.9); }

.bg-black\/95 { background-color: rgba(0, 0, 0, 0.95); }

.bg-black\/\[0\.025\] { background-color: rgba(0, 0, 0, 0.024); }

.bg-blue-100 { --tw-bg-opacity: 1; background-color: rgb(219 234 254/var(--=
tw-bg-opacity)); }

.bg-blue-1000 { --tw-bg-opacity: 1; background-color: rgb(2 133 255/var(--t=
w-bg-opacity)); }

.bg-blue-200 { --tw-bg-opacity: 1; background-color: rgb(191 219 254/var(--=
tw-bg-opacity)); }

.bg-blue-250 { --tw-bg-opacity: 1; background-color: rgb(205 229 247/var(--=
tw-bg-opacity)); }

.bg-blue-300 { --tw-bg-opacity: 1; background-color: rgb(121 137 255/var(--=
tw-bg-opacity)); }

.bg-blue-400 { --tw-bg-opacity: 1; background-color: rgb(58 136 255/var(--t=
w-bg-opacity)); }

.bg-blue-400\/15 { background-color: rgba(58, 136, 255, 0.15); }

.bg-blue-500 { --tw-bg-opacity: 1; background-color: rgb(69 89 164/var(--tw=
-bg-opacity)); }

.bg-blue-500\/30 { background-color: rgba(69, 89, 164, 0.3); }

.bg-blue-600 { --tw-bg-opacity: 1; background-color: rgb(37 99 235/var(--tw=
-bg-opacity)); }

.bg-blue-selection { --tw-bg-opacity: 1; background-color: rgb(0 122 255/va=
r(--tw-bg-opacity)); }

.bg-blue-selection\/\[\.08\] { background-color: rgba(0, 122, 255, 0.08); }

.bg-blue-selection\/\[0\.1\] { background-color: rgba(0, 122, 255, 0.1); }

.bg-brand-blue-800 { --tw-bg-opacity: 1; background-color: rgb(0 102 222/va=
r(--tw-bg-opacity)); }

.bg-brand-blue-800\/20 { background-color: rgba(0, 102, 222, 0.2); }

.bg-brand-green { --tw-bg-opacity: 1; background-color: rgb(25 195 125/var(=
--tw-bg-opacity)); }

.bg-brand-purple { --tw-bg-opacity: 1; background-color: rgb(171 104 255/va=
r(--tw-bg-opacity)); }

.bg-brand-purple-600 { --tw-bg-opacity: 1; background-color: rgb(113 95 222=
/var(--tw-bg-opacity)); }

.bg-brand-purple-800 { --tw-bg-opacity: 1; background-color: rgb(84 0 222/v=
ar(--tw-bg-opacity)); }

.bg-current { background-color: currentcolor; }

.bg-gray-100 { --tw-bg-opacity: 1; background-color: rgb(236 236 236/var(--=
tw-bg-opacity)); }

.bg-gray-100\/50 { background-color: rgba(237, 237, 237, 0.5); }

.bg-gray-200 { --tw-bg-opacity: 1; background-color: rgb(227 227 227/var(--=
tw-bg-opacity)); }

.bg-gray-300 { --tw-bg-opacity: 1; background-color: rgb(205 205 205/var(--=
tw-bg-opacity)); }

.bg-gray-300\/60 { background-color: rgba(204, 204, 204, 0.6); }

.bg-gray-400 { --tw-bg-opacity: 1; background-color: rgb(180 180 180/var(--=
tw-bg-opacity)); }

.bg-gray-50 { --tw-bg-opacity: 1; background-color: rgb(249 249 249/var(--t=
w-bg-opacity)); }

.bg-gray-50\/50 { background-color: rgba(250, 250, 250, 0.5); }

.bg-gray-50\/75 { background-color: rgba(250, 250, 250, 0.75); }

.bg-gray-500 { --tw-bg-opacity: 1; background-color: rgb(155 155 155/var(--=
tw-bg-opacity)); }

.bg-gray-600 { --tw-bg-opacity: 1; background-color: rgb(103 103 103/var(--=
tw-bg-opacity)); }

.bg-gray-700 { --tw-bg-opacity: 1; background-color: rgb(66 66 66/var(--tw-=
bg-opacity)); }

.bg-gray-700\/50 { background-color: rgba(66, 66, 66, 0.5); }

.bg-gray-800 { --tw-bg-opacity: 1; background-color: rgb(33 33 33/var(--tw-=
bg-opacity)); }

.bg-gray-900 { --tw-bg-opacity: 1; background-color: rgb(23 23 23/var(--tw-=
bg-opacity)); }

.bg-gray-950 { --tw-bg-opacity: 1; background-color: rgb(13 13 13/var(--tw-=
bg-opacity)); }

.bg-green-100 { --tw-bg-opacity: 1; background-color: rgb(210 244 211/var(-=
-tw-bg-opacity)); }

.bg-green-200 { --tw-bg-opacity: 1; background-color: rgb(185 238 188/var(-=
-tw-bg-opacity)); }

.bg-green-50 { --tw-bg-opacity: 1; background-color: rgb(235 250 235/var(--=
tw-bg-opacity)); }

.bg-green-500 { --tw-bg-opacity: 1; background-color: rgb(25 195 125/var(--=
tw-bg-opacity)); }

.bg-green-500\/30 { background-color: rgba(25, 195, 125, 0.3); }

.bg-green-600 { --tw-bg-opacity: 1; background-color: rgb(16 163 127/var(--=
tw-bg-opacity)); }

.bg-green-800 { --tw-bg-opacity: 1; background-color: rgb(27 93 74/var(--tw=
-bg-opacity)); }

.bg-orange-100 { --tw-bg-opacity: 1; background-color: rgb(254 241 227/var(=
--tw-bg-opacity)); }

.bg-orange-300 { --tw-bg-opacity: 1; background-color: rgb(255 160 69/var(-=
-tw-bg-opacity)); }

.bg-orange-400 { --tw-bg-opacity: 1; background-color: rgb(255 96 0/var(--t=
w-bg-opacity)); }

.bg-orange-500 { --tw-bg-opacity: 1; background-color: rgb(224 108 43/var(-=
-tw-bg-opacity)); }

.bg-red-100 { --tw-bg-opacity: 1; background-color: rgb(254 226 226/var(--t=
w-bg-opacity)); }

.bg-red-200 { --tw-bg-opacity: 1; background-color: rgb(254 202 202/var(--t=
w-bg-opacity)); }

.bg-red-500 { --tw-bg-opacity: 1; background-color: rgb(239 68 68/var(--tw-=
bg-opacity)); }

.bg-red-500\/10 { background-color: rgba(239, 68, 68, 0.1); }

.bg-red-500\/30 { background-color: rgba(239, 68, 68, 0.3); }

.bg-red-500\/50 { background-color: rgba(239, 68, 68, 0.5); }

.bg-red-600 { --tw-bg-opacity: 1; background-color: rgb(220 38 38/var(--tw-=
bg-opacity)); }

.bg-red-800 { --tw-bg-opacity: 1; background-color: rgb(153 27 27/var(--tw-=
bg-opacity)); }

.bg-token-border-light { background-color: var(--border-light); }

.bg-token-border-medium { background-color: var(--border-medium); }

.bg-token-composer-surface { background-color: var(--composer-surface); }

.bg-token-main-surface-primary { background-color: var(--main-surface-prima=
ry); }

.bg-token-main-surface-primary-inverse { background-color: var(--main-surfa=
ce-primary-inverse); }

.bg-token-main-surface-secondary { background-color: var(--main-surface-sec=
ondary); }

.bg-token-main-surface-tertiary { background-color: var(--main-surface-tert=
iary); }

.bg-token-message-surface { background-color: var(--message-surface); }

.bg-token-sidebar-surface-primary { background-color: var(--sidebar-surface=
-primary); }

.bg-token-sidebar-surface-secondary { background-color: var(--sidebar-surfa=
ce-secondary); }

.bg-token-sidebar-surface-tertiary { background-color: var(--sidebar-surfac=
e-tertiary); }

.bg-token-surface-error { --tw-bg-opacity: 1; background-color: rgb(var(--s=
urface-error)/var(--tw-bg-opacity)); }

.bg-token-text-primary { background-color: var(--text-primary); }

.bg-token-text-quaternary { background-color: var(--text-quaternary); }

.bg-token-text-secondary { background-color: var(--text-secondary); }

.bg-token-text-tertiary { background-color: var(--text-tertiary); }

.bg-transparent { background-color: transparent; }

.bg-white { --tw-bg-opacity: 1; background-color: rgb(255 255 255/var(--tw-=
bg-opacity)); }

.bg-white\/10 { background-color: rgba(255, 255, 255, 0.1); }

.bg-white\/25 { background-color: rgba(255, 255, 255, 0.25); }

.bg-white\/50 { background-color: rgba(255, 255, 255, 0.5); }

.bg-white\/95 { background-color: rgba(255, 255, 255, 0.95); }

.bg-yellow-100 { --tw-bg-opacity: 1; background-color: rgb(254 249 195/var(=
--tw-bg-opacity)); }

.bg-yellow-400 { --tw-bg-opacity: 1; background-color: rgb(255 198 87/var(-=
-tw-bg-opacity)); }

.bg-yellow-500 { --tw-bg-opacity: 1; background-color: rgb(234 179 8/var(--=
tw-bg-opacity)); }

.bg-opacity-0 { --tw-bg-opacity: 0; }

.bg-opacity-10 { --tw-bg-opacity: .1; }

.bg-opacity-15 { --tw-bg-opacity: .15; }

.bg-opacity-20 { --tw-bg-opacity: .2; }

.bg-opacity-30 { --tw-bg-opacity: .3; }

.bg-opacity-40 { --tw-bg-opacity: .4; }

.bg-opacity-5 { --tw-bg-opacity: .05; }

.bg-opacity-50 { --tw-bg-opacity: .5; }

.bg-opacity-60 { --tw-bg-opacity: .6; }

.bg-opacity-70 { --tw-bg-opacity: .7; }

.bg-gradient-to-b { background-image: linear-gradient(to bottom,var(--tw-gr=
adient-stops)); }

[dir=3D"ltr"] .bg-gradient-to-l { background-image: linear-gradient(to left=
,var(--tw-gradient-stops)); }

[dir=3D"ltr"] .bg-gradient-to-r, [dir=3D"rtl"] .bg-gradient-to-l { backgrou=
nd-image: linear-gradient(to right,var(--tw-gradient-stops)); }

[dir=3D"rtl"] .bg-gradient-to-r { background-image: linear-gradient(to left=
,var(--tw-gradient-stops)); }

.bg-gradient-to-t { background-image: linear-gradient(to top,var(--tw-gradi=
ent-stops)); }

.bg-none { background-image: none; }

[dir=3D"ltr"] .bg-vert-light-gradient { background-image: linear-gradient(r=
gba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }

[dir=3D"rtl"] .bg-vert-light-gradient { background-image: linear-gradient(-=
180deg, rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }

.from-\[var\(--main-surface-background\)\] { --tw-gradient-from: var(--main=
-surface-background) var(--tw-gradient-from-position); --tw-gradient-to: hs=
la(0,0%,100%,0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--=
tw-gradient-from),var(--tw-gradient-to); }

.from-brand-blue-800\/15 { --tw-gradient-from: rgba(0,102,222,.15) var(--tw=
-gradient-from-position); --tw-gradient-to: rgba(0,102,222,0) var(--tw-grad=
ient-to-position); --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gr=
adient-to); }

.from-gray-50 { --tw-gradient-from: #f9f9f9 var(--tw-gradient-from-position=
); --tw-gradient-to: hsla(0,0%,98%,0) var(--tw-gradient-to-position); --tw-=
gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to); }

.from-token-main-surface-primary { --tw-gradient-from: var(--main-surface-p=
rimary) var(--tw-gradient-from-position); --tw-gradient-to: hsla(0,0%,100%,=
0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient-f=
rom),var(--tw-gradient-to); }

.from-token-main-surface-secondary { --tw-gradient-from: var(--main-surface=
-secondary) var(--tw-gradient-from-position); --tw-gradient-to: hsla(0,0%,1=
00%,0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradie=
nt-from),var(--tw-gradient-to); }

.from-token-sidebar-surface-primary { --tw-gradient-from: var(--sidebar-sur=
face-primary) var(--tw-gradient-from-position); --tw-gradient-to: hsla(0,0%=
,100%,0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-grad=
ient-from),var(--tw-gradient-to); }

.from-token-sidebar-surface-secondary { --tw-gradient-from: var(--sidebar-s=
urface-secondary) var(--tw-gradient-from-position); --tw-gradient-to: hsla(=
0,0%,100%,0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-=
gradient-from),var(--tw-gradient-to); }

.from-token-text-tertiary { --tw-gradient-from: var(--text-tertiary) var(--=
tw-gradient-from-position); --tw-gradient-to: hsla(0,0%,100%,0) var(--tw-gr=
adient-to-position); --tw-gradient-stops: var(--tw-gradient-from),var(--tw-=
gradient-to); }

.from-transparent { --tw-gradient-from: transparent var(--tw-gradient-from-=
position); --tw-gradient-to: transparent var(--tw-gradient-to-position); --=
tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to); }

.from-white { --tw-gradient-from: #fff var(--tw-gradient-from-position); --=
tw-gradient-to: hsla(0,0%,100%,0) var(--tw-gradient-to-position); --tw-grad=
ient-stops: var(--tw-gradient-from),var(--tw-gradient-to); }

.from-white\/0 { --tw-gradient-from: hsla(0,0%,100%,0) var(--tw-gradient-fr=
om-position); --tw-gradient-to: hsla(0,0%,100%,0) var(--tw-gradient-to-posi=
tion); --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to); =
}

.from-0\% { --tw-gradient-from-position: 0%; }

.from-10\% { --tw-gradient-from-position: 10%; }

.from-50\% { --tw-gradient-from-position: 50%; }

.from-60\% { --tw-gradient-from-position: 60%; }

.via-\[rgba\(255\,255\,255\,0\.8\)\] { --tw-gradient-to: hsla(0,0%,100%,0) =
var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient-from=
),hsla(0,0%,100%,.8) var(--tw-gradient-via-position),var(--tw-gradient-to);=
 }

.via-black\/20 { --tw-gradient-to: transparent var(--tw-gradient-to-positio=
n); --tw-gradient-stops: var(--tw-gradient-from),rgba(0,0,0,.2) var(--tw-gr=
adient-via-position),var(--tw-gradient-to); }

.via-30\% { --tw-gradient-via-position: 30%; }

.to-gray-50 { --tw-gradient-to: #f9f9f9 var(--tw-gradient-to-position); }

.to-transparent { --tw-gradient-to: transparent var(--tw-gradient-to-positi=
on); }

.to-white\/20 { --tw-gradient-to: hsla(0,0%,100%,.2) var(--tw-gradient-to-p=
osition); }

.to-100\% { --tw-gradient-to-position: 100%; }

.bg-contain { background-size: contain; }

.bg-cover { background-size: cover; }

.bg-clip-padding { background-clip: padding-box; }

.bg-center { background-position: 50% center; }

.bg-no-repeat { background-repeat: no-repeat; }

.fill-token-main-surface-primary { fill: var(--main-surface-primary); }

.fill-yellow-500 { fill: rgb(234, 179, 8); }

.stroke-brand-purple\/25 { stroke: rgba(171, 104, 255, 0.25); }

.stroke-gray-400 { stroke: rgb(180, 180, 180); }

.stroke-token-main-surface-tertiary { stroke: var(--main-surface-tertiary);=
 }

.stroke-0 { stroke-width: 0; }

.stroke-2, .stroke-\[2\] { stroke-width: 2; }

.stroke-\[3\] { stroke-width: 3; }

.stroke-\[4\] { stroke-width: 4; }

.object-contain { object-fit: contain; }

.object-cover { object-fit: cover; }

.object-scale-down { object-fit: scale-down; }

.object-center { object-position: center center; }

.\!p-1 { padding: 0.25rem !important; }

.p-0 { padding: 0px; }

.p-0\.5 { padding: 0.125rem; }

.p-1 { padding: 0.25rem; }

.p-1\.5 { padding: 0.375rem; }

.p-10 { padding: 2.5rem; }

.p-14 { padding: 3.5rem; }

.p-2 { padding: 0.5rem; }

.p-2\.5 { padding: 0.625rem; }

.p-3 { padding: 0.75rem; }

.p-4 { padding: 1rem; }

.p-5 { padding: 1.25rem; }

.p-6 { padding: 1.5rem; }

.p-7 { padding: 1.75rem; }

.p-8 { padding: 2rem; }

.p-\[2px\] { padding: 2px; }

.p-snc-1 { padding: var(--snc-1); }

.\!px-0 { padding-left: 0px !important; padding-right: 0px !important; }

.\!py-0 { padding-bottom: 0px !important; padding-top: 0px !important; }

.\!py-2 { padding-bottom: 0.5rem !important; padding-top: 0.5rem !important=
; }

.px-0 { padding-left: 0px; padding-right: 0px; }

.px-0\.5 { padding-left: 0.125rem; padding-right: 0.125rem; }

.px-1 { padding-left: 0.25rem; padding-right: 0.25rem; }

.px-1\.5 { padding-left: 0.375rem; padding-right: 0.375rem; }

.px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }

.px-12 { padding-left: 3rem; padding-right: 3rem; }

.px-16 { padding-left: 4rem; padding-right: 4rem; }

.px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }

.px-2\.5 { padding-left: 0.625rem; padding-right: 0.625rem; }

.px-20 { padding-left: 5rem; padding-right: 5rem; }

.px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }

.px-3\.5 { padding-left: 0.875rem; padding-right: 0.875rem; }

.px-4 { padding-left: 1rem; padding-right: 1rem; }

.px-5 { padding-left: 1.25rem; padding-right: 1.25rem; }

.px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }

.px-7 { padding-left: 1.75rem; padding-right: 1.75rem; }

.px-8 { padding-left: 2rem; padding-right: 2rem; }

.px-\[16px\] { padding-left: 16px; padding-right: 16px; }

.px-\[1em\] { padding-left: 1em; padding-right: 1em; }

.px-\[20px\] { padding-left: 20px; padding-right: 20px; }

.px-\[22px\] { padding-left: 22px; padding-right: 22px; }

.px-\[4px\] { padding-left: 4px; padding-right: 4px; }

.px-sidebar-inline { padding-left: var(--sidebar-inline-padding); padding-r=
ight: var(--sidebar-inline-padding); }

.px-snc-1 { padding-left: var(--snc-1); padding-right: var(--snc-1); }

.px-snc-2 { padding-left: var(--snc-2); padding-right: var(--snc-2); }

.px-snc-results-padding { padding-left: var(--snc-results-padding); padding=
-right: var(--snc-results-padding); }

.py-0 { padding-bottom: 0px; padding-top: 0px; }

.py-0\.5 { padding-bottom: 0.125rem; padding-top: 0.125rem; }

.py-1 { padding-bottom: 0.25rem; padding-top: 0.25rem; }

.py-1\.5 { padding-bottom: 0.375rem; padding-top: 0.375rem; }

.py-10 { padding-bottom: 2.5rem; padding-top: 2.5rem; }

.py-12 { padding-bottom: 3rem; padding-top: 3rem; }

.py-16 { padding-bottom: 4rem; padding-top: 4rem; }

.py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }

.py-2\.5 { padding-bottom: 0.625rem; padding-top: 0.625rem; }

.py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }

.py-3\.5 { padding-bottom: 0.875rem; padding-top: 0.875rem; }

.py-32 { padding-bottom: 8rem; padding-top: 8rem; }

.py-4 { padding-bottom: 1rem; padding-top: 1rem; }

.py-5 { padding-bottom: 1.25rem; padding-top: 1.25rem; }

.py-6 { padding-bottom: 1.5rem; padding-top: 1.5rem; }

.py-8 { padding-bottom: 2rem; padding-top: 2rem; }

.py-\[0\.108em\] { padding-bottom: 0.108em; padding-top: 0.108em; }

.py-\[1\.25em\] { padding-bottom: 1.25em; padding-top: 1.25em; }

.py-\[12px\] { padding-bottom: 12px; padding-top: 12px; }

.py-\[16px\] { padding-bottom: 16px; padding-top: 16px; }

.py-\[18px\] { padding-bottom: 18px; padding-top: 18px; }

.py-\[1px\] { padding-bottom: 1px; padding-top: 1px; }

.py-\[2px\] { padding-bottom: 2px; padding-top: 2px; }

.py-\[7px\] { padding-bottom: 7px; padding-top: 7px; }

.py-snc-1 { padding-bottom: var(--snc-1); padding-top: var(--snc-1); }

[dir=3D"ltr"] .\!pl-0 { padding-left: 0px !important; }

[dir=3D"rtl"] .\!pl-0 { padding-right: 0px !important; }

[dir=3D"ltr"] .\!pl-4 { padding-left: 1rem !important; }

[dir=3D"rtl"] .\!pl-4 { padding-right: 1rem !important; }

[dir=3D"ltr"] .\!pr-3 { padding-right: 0.75rem !important; }

[dir=3D"rtl"] .\!pr-3 { padding-left: 0.75rem !important; }

.\!pt-0 { padding-top: 0px !important; }

.\!pt-3 { padding-top: 0.75rem !important; }

.pb-0 { padding-bottom: 0px; }

.pb-0\.5 { padding-bottom: 0.125rem; }

.pb-1 { padding-bottom: 0.25rem; }

.pb-1\.5 { padding-bottom: 0.375rem; }

.pb-10 { padding-bottom: 2.5rem; }

.pb-12 { padding-bottom: 3rem; }

.pb-16 { padding-bottom: 4rem; }

.pb-2 { padding-bottom: 0.5rem; }

.pb-20 { padding-bottom: 5rem; }

.pb-24 { padding-bottom: 6rem; }

.pb-3 { padding-bottom: 0.75rem; }

.pb-3\.5 { padding-bottom: 0.875rem; }

.pb-4 { padding-bottom: 1rem; }

.pb-5 { padding-bottom: 1.25rem; }

.pb-6 { padding-bottom: 1.5rem; }

.pb-7 { padding-bottom: 1.75rem; }

.pb-8 { padding-bottom: 2rem; }

.pb-\[10px\] { padding-bottom: 10px; }

.pb-\[120px\] { padding-bottom: 120px; }

.pb-\[22px\] { padding-bottom: 22px; }

.pb-snc-1 { padding-bottom: var(--snc-1); }

.pb-snc-2 { padding-bottom: var(--snc-2); }

[dir=3D"ltr"] .pl-0 { padding-left: 0px; }

[dir=3D"rtl"] .pl-0 { padding-right: 0px; }

[dir=3D"ltr"] .pl-0\.5 { padding-left: 0.125rem; }

[dir=3D"rtl"] .pl-0\.5 { padding-right: 0.125rem; }

[dir=3D"ltr"] .pl-1 { padding-left: 0.25rem; }

[dir=3D"rtl"] .pl-1 { padding-right: 0.25rem; }

[dir=3D"ltr"] .pl-1\.5 { padding-left: 0.375rem; }

[dir=3D"rtl"] .pl-1\.5 { padding-right: 0.375rem; }

[dir=3D"ltr"] .pl-10 { padding-left: 2.5rem; }

[dir=3D"rtl"] .pl-10 { padding-right: 2.5rem; }

[dir=3D"ltr"] .pl-12 { padding-left: 3rem; }

[dir=3D"rtl"] .pl-12 { padding-right: 3rem; }

[dir=3D"ltr"] .pl-2 { padding-left: 0.5rem; }

[dir=3D"rtl"] .pl-2 { padding-right: 0.5rem; }

[dir=3D"ltr"] .pl-3 { padding-left: 0.75rem; }

[dir=3D"rtl"] .pl-3 { padding-right: 0.75rem; }

[dir=3D"ltr"] .pl-4 { padding-left: 1rem; }

[dir=3D"rtl"] .pl-4 { padding-right: 1rem; }

[dir=3D"ltr"] .pl-5 { padding-left: 1.25rem; }

[dir=3D"rtl"] .pl-5 { padding-right: 1.25rem; }

[dir=3D"ltr"] .pl-6 { padding-left: 1.5rem; }

[dir=3D"rtl"] .pl-6 { padding-right: 1.5rem; }

[dir=3D"ltr"] .pl-7 { padding-left: 1.75rem; }

[dir=3D"rtl"] .pl-7 { padding-right: 1.75rem; }

[dir=3D"ltr"] .pl-8 { padding-left: 2rem; }

[dir=3D"rtl"] .pl-8 { padding-right: 2rem; }

[dir=3D"ltr"] .pl-9 { padding-left: 2.25rem; }

[dir=3D"rtl"] .pl-9 { padding-right: 2.25rem; }

[dir=3D"ltr"] .pl-\[20px\] { padding-left: 20px; }

[dir=3D"rtl"] .pl-\[20px\] { padding-right: 20px; }

[dir=3D"ltr"] .pl-\[3\.25rem\] { padding-left: 3.25rem; }

[dir=3D"rtl"] .pl-\[3\.25rem\] { padding-right: 3.25rem; }

[dir=3D"ltr"] .pr-0 { padding-right: 0px; }

[dir=3D"rtl"] .pr-0 { padding-left: 0px; }

[dir=3D"ltr"] .pr-1 { padding-right: 0.25rem; }

[dir=3D"rtl"] .pr-1 { padding-left: 0.25rem; }

[dir=3D"ltr"] .pr-1\.5 { padding-right: 0.375rem; }

[dir=3D"rtl"] .pr-1\.5 { padding-left: 0.375rem; }

[dir=3D"ltr"] .pr-12 { padding-right: 3rem; }

[dir=3D"rtl"] .pr-12 { padding-left: 3rem; }

[dir=3D"ltr"] .pr-14 { padding-right: 3.5rem; }

[dir=3D"rtl"] .pr-14 { padding-left: 3.5rem; }

[dir=3D"ltr"] .pr-2 { padding-right: 0.5rem; }

[dir=3D"rtl"] .pr-2 { padding-left: 0.5rem; }

[dir=3D"ltr"] .pr-2\.5 { padding-right: 0.625rem; }

[dir=3D"rtl"] .pr-2\.5 { padding-left: 0.625rem; }

[dir=3D"ltr"] .pr-3 { padding-right: 0.75rem; }

[dir=3D"rtl"] .pr-3 { padding-left: 0.75rem; }

[dir=3D"ltr"] .pr-3\.5 { padding-right: 0.875rem; }

[dir=3D"rtl"] .pr-3\.5 { padding-left: 0.875rem; }

[dir=3D"ltr"] .pr-4 { padding-right: 1rem; }

[dir=3D"rtl"] .pr-4 { padding-left: 1rem; }

[dir=3D"ltr"] .pr-5 { padding-right: 1.25rem; }

[dir=3D"rtl"] .pr-5 { padding-left: 1.25rem; }

[dir=3D"ltr"] .pr-6 { padding-right: 1.5rem; }

[dir=3D"rtl"] .pr-6 { padding-left: 1.5rem; }

[dir=3D"ltr"] .pr-8 { padding-right: 2rem; }

[dir=3D"rtl"] .pr-8 { padding-left: 2rem; }

[dir=3D"ltr"] .pr-9 { padding-right: 2.25rem; }

[dir=3D"rtl"] .pr-9 { padding-left: 2.25rem; }

[dir=3D"ltr"] .pr-\[15px\] { padding-right: 15px; }

[dir=3D"rtl"] .pr-\[15px\] { padding-left: 15px; }

.ps-4 { padding-inline-start: 1rem; }

.pt-0 { padding-top: 0px; }

.pt-0\.5 { padding-top: 0.125rem; }

.pt-1 { padding-top: 0.25rem; }

.pt-1\.5 { padding-top: 0.375rem; }

.pt-12 { padding-top: 3rem; }

.pt-16 { padding-top: 4rem; }

.pt-2 { padding-top: 0.5rem; }

.pt-20 { padding-top: 5rem; }

.pt-3 { padding-top: 0.75rem; }

.pt-4 { padding-top: 1rem; }

.pt-5 { padding-top: 1.25rem; }

.pt-6 { padding-top: 1.5rem; }

.pt-8 { padding-top: 2rem; }

.pt-\[1\.125rem\] { padding-top: 1.125rem; }

.pt-\[13px\] { padding-top: 13px; }

.pt-\[18px\] { padding-top: 18px; }

.pt-\[2px\] { padding-top: 2px; }

.pt-\[3px\] { padding-top: 3px; }

.pt-\[4\.5px\] { padding-top: 4.5px; }

.pt-\[4px\] { padding-top: 4px; }

.pt-\[67\%\] { padding-top: 67%; }

.pt-px { padding-top: 1px; }

[dir=3D"ltr"] .text-left { text-align: left; }

[dir=3D"rtl"] .text-left { text-align: right; }

.text-center { text-align: center; }

[dir=3D"ltr"] .text-right { text-align: right; }

[dir=3D"rtl"] .text-right { text-align: left; }

.text-start { text-align: start; }

.text-end { text-align: end; }

.indent-\[0\.1em\] { text-indent: 0.1em; }

.align-baseline { vertical-align: baseline; }

.align-top { vertical-align: top; }

.align-middle { vertical-align: middle; }

.font-circle { font-family: Circle, system-ui, sans-serif; }

.font-mono { font-family: ui-monospace, SFMono-Regular, "SF Mono", Menlo, C=
onsolas, "Liberation Mono", monospace; }

.font-sans { font-family: ui-sans-serif, -apple-system, system-ui, "Segoe U=
I", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "S=
egoe UI Symbol"; }

.\!text-base { font-size: 1rem !important; line-height: 1.5rem !important; =
}

.text-2xl { font-size: 1.5rem; line-height: 2rem; }

.text-3xl { font-size: 1.875rem; line-height: 2.25rem; }

.text-4xl { font-size: 2.25rem; line-height: 2.5rem; }

.text-5xl { font-size: 3rem; line-height: 1; }

.text-\[0\.5em\] { font-size: 0.5em; }

.text-\[0\.5rem\] { font-size: 0.5rem; }

.text-\[0\.65rem\] { font-size: 0.65rem; }

.text-\[0\.75rem\] { font-size: 0.75rem; }

.text-\[0\.95rem\] { font-size: 0.95rem; }

.text-\[1\.7rem\] { font-size: 1.7rem; }

.text-\[10px\] { font-size: 10px; }

.text-\[11px\] { font-size: 11px; }

.text-\[12px\] { font-size: 12px; }

.text-\[13px\] { font-size: 13px; }

.text-\[15px\] { font-size: 15px; }

.text-\[17px\] { font-size: 17px; }

.text-\[18px\] { font-size: 18px; }

.text-\[20px\] { font-size: 20px; }

.text-\[32px\] { font-size: 32px; }

.text-\[8px\] { font-size: 8px; }

.text-\[9px\] { font-size: 9px; }

.text-base { font-size: 1rem; line-height: 1.5rem; }

.text-body { font-size: 15px; line-height: 22px; }

.text-lg { font-size: 1.125rem; line-height: 1.75rem; }

.text-panel-title { font-size: 17px; line-height: 26px; }

.text-sm { font-size: 0.875rem; line-height: 1.25rem; }

.text-xl { font-size: 1.25rem; line-height: 1.75rem; }

.text-xs { font-size: 0.75rem; line-height: 1rem; }

.\!font-medium { font-weight: 500 !important; }

.\!font-normal { font-weight: 400 !important; }

.\!font-semibold { font-weight: 600 !important; }

.font-\[550\] { font-weight: 550; }

.font-black { font-weight: 900; }

.font-bold { font-weight: 700; }

.font-extralight { font-weight: 200; }

.font-light { font-weight: 300; }

.font-medium { font-weight: 500; }

.font-normal { font-weight: 400; }

.font-semibold { font-weight: 600; }

.uppercase { text-transform: uppercase; }

.lowercase { text-transform: lowercase; }

.capitalize { text-transform: capitalize; }

.normal-case { text-transform: none; }

.italic { font-style: italic; }

.ordinal { --tw-ordinal: ordinal; }

.ordinal, .tabular-nums { font-variant-numeric: var(--tw-ordinal) var(--tw-=
slashed-zero) var(--tw-numeric-figure) var(--tw-numeric-spacing) var(--tw-n=
umeric-fraction); }

.tabular-nums { --tw-numeric-spacing: tabular-nums; }

.\!leading-none { line-height: 1 !important; }

.leading-3 { line-height: 0.75rem; }

.leading-4 { line-height: 1rem; }

.leading-5 { line-height: 1.25rem; }

.leading-6 { line-height: 1.5rem; }

.leading-9 { line-height: 2.25rem; }

.leading-\[0\] { line-height: 0; }

.leading-\[1\.25em\] { line-height: 1.25em; }

.leading-\[1\.2\] { line-height: 1.2; }

.leading-\[15px\] { line-height: 15px; }

.leading-\[18px\] { line-height: 18px; }

.leading-\[30px\] { line-height: 30px; }

.leading-none { line-height: 1; }

.leading-normal { line-height: 1.5; }

.leading-relaxed { line-height: 1.625; }

.leading-snug { line-height: 1.375; }

.leading-tight { line-height: 1.25; }

.tracking-\[-0\.197499px\] { letter-spacing: -0.197499px; }

.tracking-\[0\.0015rem\] { letter-spacing: 0.0015rem; }

.tracking-condensed { letter-spacing: -0.154px; }

.tracking-tight { letter-spacing: -0.025em; }

.tracking-wide { letter-spacing: 0.025em; }

.tracking-widest { letter-spacing: 0.1em; }

.\!text-\[\#2964aa\] { --tw-text-opacity: 1 !important; color: rgb(41 100 1=
70/var(--tw-text-opacity)) !important; }

.\!text-black { --tw-text-opacity: 1 !important; color: rgb(0 0 0/var(--tw-=
text-opacity)) !important; }

.\!text-token-main-surface-primary { color: var(--main-surface-primary) !im=
portant; }

.\!text-token-text-primary { color: var(--text-primary) !important; }

.\!text-token-text-secondary { color: var(--text-secondary) !important; }

.\!text-white { --tw-text-opacity: 1 !important; color: rgb(255 255 255/var=
(--tw-text-opacity)) !important; }

.text-\[\#\#676767\] { }

.text-\[\#30a633\] { --tw-text-opacity: 1; color: rgb(48 166 51/var(--tw-te=
xt-opacity)); }

.text-\[\#875BE1\] { --tw-text-opacity: 1; color: rgb(135 91 225/var(--tw-t=
ext-opacity)); }

.text-\[\#9F9F9F\] { --tw-text-opacity: 1; color: rgb(159 159 159/var(--tw-=
text-opacity)); }

.text-\[\#FE7600\] { --tw-text-opacity: 1; color: rgb(254 118 0/var(--tw-te=
xt-opacity)); }

.text-\[\#FF5656\] { --tw-text-opacity: 1; color: rgb(255 86 86/var(--tw-te=
xt-opacity)); }

.text-\[\#f14d42\] { --tw-text-opacity: 1; color: rgb(241 77 66/var(--tw-te=
xt-opacity)); }

.text-\[\#f48c15\] { --tw-text-opacity: 1; color: rgb(244 140 21/var(--tw-t=
ext-opacity)); }

.text-\[var\(--Primary-Gray-600\,_\#565869\)\] { color: var(--Primary-Gray-=
600,#565869); }

.text-black { --tw-text-opacity: 1; color: rgb(0 0 0/var(--tw-text-opacity)=
); }

.text-black\/40 { color: rgba(0, 0, 0, 0.4); }

.text-blue-1000 { --tw-text-opacity: 1; color: rgb(2 133 255/var(--tw-text-=
opacity)); }

.text-blue-400 { --tw-text-opacity: 1; color: rgb(58 136 255/var(--tw-text-=
opacity)); }

.text-blue-500 { --tw-text-opacity: 1; color: rgb(69 89 164/var(--tw-text-o=
pacity)); }

.text-blue-600 { --tw-text-opacity: 1; color: rgb(37 99 235/var(--tw-text-o=
pacity)); }

.text-blue-selection { --tw-text-opacity: 1; color: rgb(0 122 255/var(--tw-=
text-opacity)); }

.text-brand-blue-800 { --tw-text-opacity: 1; color: rgb(0 102 222/var(--tw-=
text-opacity)); }

.text-brand-green-800 { --tw-text-opacity: 1; color: rgb(5 167 70/var(--tw-=
text-opacity)); }

.text-brand-purple { --tw-text-opacity: 1; color: rgb(171 104 255/var(--tw-=
text-opacity)); }

.text-current { color: currentcolor; }

.text-gray-100 { --tw-text-opacity: 1; color: rgb(236 236 236/var(--tw-text=
-opacity)); }

.text-gray-200 { --tw-text-opacity: 1; color: rgb(227 227 227/var(--tw-text=
-opacity)); }

.text-gray-300 { --tw-text-opacity: 1; color: rgb(205 205 205/var(--tw-text=
-opacity)); }

.text-gray-400 { --tw-text-opacity: 1; color: rgb(180 180 180/var(--tw-text=
-opacity)); }

.text-gray-500 { --tw-text-opacity: 1; color: rgb(155 155 155/var(--tw-text=
-opacity)); }

.text-gray-600 { --tw-text-opacity: 1; color: rgb(103 103 103/var(--tw-text=
-opacity)); }

.text-gray-700 { --tw-text-opacity: 1; color: rgb(66 66 66/var(--tw-text-op=
acity)); }

.text-gray-800 { --tw-text-opacity: 1; color: rgb(33 33 33/var(--tw-text-op=
acity)); }

.text-gray-900 { --tw-text-opacity: 1; color: rgb(23 23 23/var(--tw-text-op=
acity)); }

.text-gray-950 { --tw-text-opacity: 1; color: rgb(13 13 13/var(--tw-text-op=
acity)); }

.text-green-500 { --tw-text-opacity: 1; color: rgb(25 195 125/var(--tw-text=
-opacity)); }

.text-green-600 { --tw-text-opacity: 1; color: rgb(16 163 127/var(--tw-text=
-opacity)); }

.text-green-700 { --tw-text-opacity: 1; color: rgb(26 127 100/var(--tw-text=
-opacity)); }

.text-green-800 { --tw-text-opacity: 1; color: rgb(27 93 74/var(--tw-text-o=
pacity)); }

.text-orange-300 { --tw-text-opacity: 1; color: rgb(255 160 69/var(--tw-tex=
t-opacity)); }

.text-orange-400 { --tw-text-opacity: 1; color: rgb(255 96 0/var(--tw-text-=
opacity)); }

.text-orange-500 { --tw-text-opacity: 1; color: rgb(224 108 43/var(--tw-tex=
t-opacity)); }

.text-orange-600 { --tw-text-opacity: 1; color: rgb(244 108 33/var(--tw-tex=
t-opacity)); }

.text-red-200 { --tw-text-opacity: 1; color: rgb(254 202 202/var(--tw-text-=
opacity)); }

.text-red-500 { --tw-text-opacity: 1; color: rgb(239 68 68/var(--tw-text-op=
acity)); }

.text-red-600 { --tw-text-opacity: 1; color: rgb(220 38 38/var(--tw-text-op=
acity)); }

.text-red-700 { --tw-text-opacity: 1; color: rgb(185 28 28/var(--tw-text-op=
acity)); }

.text-red-800 { --tw-text-opacity: 1; color: rgb(153 27 27/var(--tw-text-op=
acity)); }

.text-token-link { color: var(--link); }

.text-token-main-surface-primary { color: var(--main-surface-primary); }

.text-token-main-surface-primary-inverse { color: var(--main-surface-primar=
y-inverse); }

.text-token-main-surface-tertiary { color: var(--main-surface-tertiary); }

.text-token-sidebar-icon { color: var(--sidebar-icon); }

.text-token-sidebar-title-primary { color: var(--sidebar-title-primary); }

.text-token-text-error { color: var(--text-error); }

.text-token-text-primary { color: var(--text-primary); }

.text-token-text-quaternary { color: var(--text-quaternary); }

.text-token-text-secondary { color: var(--text-secondary); }

.text-token-text-tertiary { color: var(--text-tertiary); }

.text-transparent { color: transparent; }

.text-white { --tw-text-opacity: 1; color: rgb(255 255 255/var(--tw-text-op=
acity)); }

.text-white\/25 { color: rgba(255, 255, 255, 0.25); }

.text-yellow-500 { --tw-text-opacity: 1; color: rgb(234 179 8/var(--tw-text=
-opacity)); }

.text-yellow-600 { --tw-text-opacity: 1; color: rgb(202 138 4/var(--tw-text=
-opacity)); }

.text-yellow-700 { --tw-text-opacity: 1; color: rgb(161 98 7/var(--tw-text-=
opacity)); }

.text-yellow-800 { --tw-text-opacity: 1; color: rgb(133 77 14/var(--tw-text=
-opacity)); }

.underline { text-decoration-line: underline; }

.line-through { text-decoration-line: line-through; }

.\!no-underline { text-decoration-line: none !important; }

.decoration-token-link { text-decoration-color: var(--link); }

.decoration-token-text-primary { text-decoration-color: var(--text-primary)=
; }

.underline-offset-2 { text-underline-offset: 2px; }

.placeholder-gray-500::placeholder { --tw-placeholder-opacity: 1; color: rg=
b(155 155 155/var(--tw-placeholder-opacity)); }

.placeholder-token-text-tertiary::placeholder { color: var(--text-tertiary)=
; }

.\!opacity-100 { opacity: 1 !important; }

.opacity-0 { opacity: 0; }

.opacity-10 { opacity: 0.1; }

.opacity-100 { opacity: 1; }

.opacity-20 { opacity: 0.2; }

.opacity-25 { opacity: 0.25; }

.opacity-30 { opacity: 0.3; }

.opacity-40 { opacity: 0.4; }

.opacity-5 { opacity: 0.05; }

.opacity-50 { opacity: 0.5; }

.opacity-60 { opacity: 0.6; }

.opacity-65 { opacity: 0.65; }

.opacity-70 { opacity: 0.7; }

.opacity-75 { opacity: 0.75; }

.opacity-80 { opacity: 0.8; }

.opacity-85 { opacity: 0.85; }

.opacity-\[0\.01\] { opacity: 0.01; }

.\!shadow-none { --tw-shadow: 0 0 #0000 !important; --tw-shadow-colored: 0 =
0 #0000 !important; box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(=
--tw-ring-shadow,0 0 #0000),var(--tw-shadow) !important; }

.shadow { --tw-shadow: 0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px -1px rgba(0,0,0=
,.1); --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1p=
x var(--tw-shadow-color); }

.shadow, .shadow-2xl { box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),v=
ar(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-2xl { --tw-shadow: 0 25px 50px -12px rgba(0,0,0,.25); --tw-shadow-c=
olored: 0 25px 50px -12px var(--tw-shadow-color); }

.shadow-\[0_-4px_32px_rgba\(0\,0\,0\,0\.08\)\] { --tw-shadow: 0 -4px 32px r=
gba(0,0,0,.08); --tw-shadow-colored: 0 -4px 32px var(--tw-shadow-color); bo=
x-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #=
0000),var(--tw-shadow); }

.shadow-\[0_0_200px_0_rgba\(0\,0\,0\,0\.14\)\] { --tw-shadow: 0 0 200px 0 r=
gba(0,0,0,.14); --tw-shadow-colored: 0 0 200px 0 var(--tw-shadow-color); bo=
x-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #=
0000),var(--tw-shadow); }

.shadow-\[0_0_64px_0_rgba\(0\,0\,0\,0\.07\)\] { --tw-shadow: 0 0 64px 0 rgb=
a(0,0,0,.07); --tw-shadow-colored: 0 0 64px 0 var(--tw-shadow-color); box-s=
hadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #000=
0),var(--tw-shadow); }

.shadow-\[0_14px_62px_0_rgba\(0\,0\,0\,0\.25\)\] { --tw-shadow: 0 14px 62px=
 0 rgba(0,0,0,.25); --tw-shadow-colored: 0 14px 62px 0 var(--tw-shadow-colo=
r); }

.shadow-\[0_14px_62px_0_rgba\(0\,0\,0\,0\.25\)\], .shadow-\[0_1px_12px_0px_=
\#0000000B\] { box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-=
ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-\[0_1px_12px_0px_\#0000000B\] { --tw-shadow: 0 1px 12px 0px #000000=
0b; --tw-shadow-colored: 0 1px 12px 0px var(--tw-shadow-color); }

.shadow-\[0_1px_1px_rgba\(0\,0\,0\,0\.03\)\,_0_4\.93747px_9\.05202px_rgba\(=
0\,0\,0\,0\.11\)\] { --tw-shadow: 0 1px 1px rgba(0,0,0,.03),0 4.93747px 9.0=
5202px rgba(0,0,0,.11); --tw-shadow-colored: 0 1px 1px var(--tw-shadow-colo=
r),0 4.93747px 9.05202px var(--tw-shadow-color); box-shadow: var(--tw-ring-=
offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); =
}

.shadow-\[0_2px_16px_0_rgba\(0\,0\,0\,0\.04\)\] { --tw-shadow: 0 2px 16px 0=
 rgba(0,0,0,.04); --tw-shadow-colored: 0 2px 16px 0 var(--tw-shadow-color);=
 box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 =
0 #0000),var(--tw-shadow); }

.shadow-\[0_2px_24px_rgba\(0\,0\,0\,0\.05\)\] { --tw-shadow: 0 2px 24px rgb=
a(0,0,0,.05); --tw-shadow-colored: 0 2px 24px var(--tw-shadow-color); box-s=
hadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #000=
0),var(--tw-shadow); }

.shadow-\[0_2px_3px_0_rgba\(0\,0\,0\,0\.25\)\] { --tw-shadow: 0 2px 3px 0 r=
gba(0,0,0,.25); --tw-shadow-colored: 0 2px 3px 0 var(--tw-shadow-color); bo=
x-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #=
0000),var(--tw-shadow); }

.shadow-\[0px_0px_32px_rgba\(0\,0\,0\,0\.08\)\] { --tw-shadow: 0px 0px 32px=
 rgba(0,0,0,.08); --tw-shadow-colored: 0px 0px 32px var(--tw-shadow-color);=
 box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 =
0 #0000),var(--tw-shadow); }

.shadow-\[0px_10px_10px_-6px_rgba\(0\,0\,0\,0\.04\)\] { --tw-shadow: 0px 10=
px 10px -6px rgba(0,0,0,.04); --tw-shadow-colored: 0px 10px 10px -6px var(-=
-tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(-=
-tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-\[0px_1px_0px_rgba\(0\,0\,0\,0\.05\)\] { --tw-shadow: 0px 1px 0px r=
gba(0,0,0,.05); --tw-shadow-colored: 0px 1px 0px var(--tw-shadow-color); bo=
x-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #=
0000),var(--tw-shadow); }

.shadow-\[0px_4px_14px_rgba\(0\,0\,0\,0\.06\)\] { --tw-shadow: 0px 4px 14px=
 rgba(0,0,0,.06); --tw-shadow-colored: 0px 4px 14px var(--tw-shadow-color);=
 box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 =
0 #0000),var(--tw-shadow); }

.shadow-\[inset_0_0_0_1px_rgba\(0\,0\,0\,0\.1\)\] { --tw-shadow: inset 0 0 =
0 1px rgba(0,0,0,.1); --tw-shadow-colored: inset 0 0 0 1px var(--tw-shadow-=
color); }

.shadow-\[inset_0_0_0_1px_rgba\(0\,0\,0\,0\.1\)\], .shadow-inner { box-shad=
ow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),=
var(--tw-shadow); }

.shadow-inner { --tw-shadow: inset 0 2px 4px 0 rgba(0,0,0,.05); --tw-shadow=
-colored: inset 0 2px 4px 0 var(--tw-shadow-color); }

.shadow-lg { --tw-shadow: 0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rg=
ba(0,0,0,.1); --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),=
0 4px 6px -4px var(--tw-shadow-color); }

.shadow-lg, .shadow-md { box-shadow: var(--tw-ring-offset-shadow,0 0 #0000)=
,var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-md { --tw-shadow: 0 4px 6px -1px rgba(0,0,0,.1),0 2px 4px -2px rgba=
(0,0,0,.1); --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color),0 2p=
x 4px -2px var(--tw-shadow-color); }

.shadow-none { --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; }

.shadow-none, .shadow-sm { box-shadow: var(--tw-ring-offset-shadow,0 0 #000=
0),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-sm { --tw-shadow: 0 1px 2px 0 rgba(0,0,0,.05); --tw-shadow-colored:=
 0 1px 2px 0 var(--tw-shadow-color); }

.shadow-xl { --tw-shadow: 0 20px 25px -5px rgba(0,0,0,.1),0 8px 10px -6px r=
gba(0,0,0,.1); --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color)=
,0 8px 10px -6px var(--tw-shadow-color); }

.shadow-xl, .shadow-xs { box-shadow: var(--tw-ring-offset-shadow,0 0 #0000)=
,var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-xs { --tw-shadow: 0 0 15px rgba(0,0,0,.1); --tw-shadow-colored: 0 0=
 15px var(--tw-shadow-color); }

.shadow-xxs { --tw-shadow: 0 0 2px 0 rgba(0,0,0,.05),0 4px 6px 0 rgba(0,0,0=
,.02); --tw-shadow-colored: 0 0 2px 0 var(--tw-shadow-color),0 4px 6px 0 va=
r(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),va=
r(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.shadow-token-border-xlight { --tw-shadow-color: var(--border-xlight); --tw=
-shadow: var(--tw-shadow-colored); }

.outline-none { outline: transparent solid 2px; outline-offset: 2px; }

.outline { outline-style: solid; }

.outline-0 { outline-width: 0px; }

.ring-0 { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring=
-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: var(--tw-ring=
-inset) 0 0 0 calc(var(--tw-ring-offset-width)) var(--tw-ring-color); }

.ring-0, .ring-1 { box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-s=
hadow),var(--tw-shadow,0 0 #0000); }

.ring-1 { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring=
-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: var(--tw-ring=
-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);=
 }

.ring-2 { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring=
-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: var(--tw-ring=
-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);=
 box-shadow: var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-sh=
adow,0 0 #0000); }

.ring-inset { --tw-ring-inset: inset; }

.ring-black { --tw-ring-opacity: 1; --tw-ring-color: rgb(0 0 0/var(--tw-rin=
g-opacity)); }

.ring-black\/10 { --tw-ring-color: rgba(0,0,0,.1); }

.ring-transparent { --tw-ring-color: transparent; }

.ring-white { --tw-ring-opacity: 1; --tw-ring-color: rgb(255 255 255/var(--=
tw-ring-opacity)); }

.ring-opacity-5 { --tw-ring-opacity: .05; }

.ring-offset-4 { --tw-ring-offset-width: 4px; }

.ring-offset-black { --tw-ring-offset-color: #000; }

.blur { --tw-blur: blur(8px); }

.blur, .blur-xl { filter: var(--tw-blur) var(--tw-brightness) var(--tw-cont=
rast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-sa=
turate) var(--tw-sepia) var(--tw-drop-shadow); }

.blur-xl { --tw-blur: blur(24px); }

.drop-shadow { --tw-drop-shadow: drop-shadow(0 1px 2px rgba(0,0,0,.1)) drop=
-shadow(0 1px 1px rgba(0,0,0,.06)); }

.drop-shadow, .drop-shadow-md { filter: var(--tw-blur) var(--tw-brightness)=
 var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-inver=
t) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow); }

.drop-shadow-md { --tw-drop-shadow: drop-shadow(0 4px 3px rgba(0,0,0,.07)) =
drop-shadow(0 2px 2px rgba(0,0,0,.06)); }

.drop-shadow-sm { --tw-drop-shadow: drop-shadow(0 1px 1px rgba(0,0,0,.05));=
 }

.drop-shadow-sm, .grayscale { filter: var(--tw-blur) var(--tw-brightness) v=
ar(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)=
 var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow); }

.grayscale { --tw-grayscale: grayscale(100%); }

.grayscale-\[0\.6\] { --tw-grayscale: grayscale(.6); }

.grayscale-\[0\.6\], .invert { filter: var(--tw-blur) var(--tw-brightness) =
var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert=
) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow); }

.invert { --tw-invert: invert(100%); }

.sepia { --tw-sepia: sepia(100%); }

.filter, .sepia { filter: var(--tw-blur) var(--tw-brightness) var(--tw-cont=
rast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-sa=
turate) var(--tw-sepia) var(--tw-drop-shadow); }

.backdrop-blur-2xl { --tw-backdrop-blur: blur(40px); }

.backdrop-blur-2xl, .backdrop-blur-3xl { backdrop-filter: var(--tw-backdrop=
-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-b=
ackdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) =
var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-se=
pia); }

.backdrop-blur-3xl { --tw-backdrop-blur: blur(64px); }

.backdrop-blur-lg { --tw-backdrop-blur: blur(16px); }

.backdrop-blur-lg, .backdrop-blur-md { backdrop-filter: var(--tw-backdrop-b=
lur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-bac=
kdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) va=
r(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepi=
a); }

.backdrop-blur-md { --tw-backdrop-blur: blur(12px); }

.backdrop-blur-sm { --tw-backdrop-blur: blur(4px); }

.backdrop-blur-sm, .backdrop-blur-xl { backdrop-filter: var(--tw-backdrop-b=
lur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-bac=
kdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) va=
r(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepi=
a); }

.backdrop-blur-xl { --tw-backdrop-blur: blur(24px); }

.transition { transition-duration: 0.15s; transition-property: color, backg=
round-color, border-color, text-decoration-color, fill, stroke, opacity, bo=
x-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter; tran=
sition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-\[background-color\,color\] { transition-duration: 0.15s; trans=
ition-property: background-color, color; transition-timing-function: cubic-=
bezier(0.4, 0, 0.2, 1); }

.transition-\[filter\] { transition-duration: 0.15s; transition-property: f=
ilter; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-\[flex-basis\] { transition-duration: 0.15s; transition-propert=
y: flex-basis; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-\[opacity\,filter\] { transition-duration: 0.15s; transition-pr=
operty: opacity, filter; transition-timing-function: cubic-bezier(0.4, 0, 0=
.2, 1); }

.transition-\[stroke-dashoffset\] { transition-duration: 0.15s; transition-=
property: stroke-dashoffset; transition-timing-function: cubic-bezier(0.4, =
0, 0.2, 1); }

.transition-\[width\] { transition-duration: 0.15s; transition-property: wi=
dth; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-all { transition-duration: 0.15s; transition-property: all; tra=
nsition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-colors { transition-duration: 0.15s; transition-property: color=
, background-color, border-color, text-decoration-color, fill, stroke; tran=
sition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-opacity { transition-duration: 0.15s; transition-property: opac=
ity; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-shadow { transition-duration: 0.15s; transition-property: box-s=
hadow; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-transform { transition-duration: 0.15s; transition-property: tr=
ansform; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.transition-width { transition-duration: 0.15s; transition-property: width;=
 transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.delay-100 { transition-delay: 0.1s; }

.delay-1000 { transition-delay: 1s; }

.delay-300 { transition-delay: 0.3s; }

.delay-500 { transition-delay: 0.5s; }

.duration-0 { transition-duration: 0s; }

.duration-100 { transition-duration: 0.1s; }

.duration-1000 { transition-duration: 1s; }

.duration-150 { transition-duration: 0.15s; }

.duration-200 { transition-duration: 0.2s; }

.duration-300 { transition-duration: 0.3s; }

.duration-500 { transition-duration: 0.5s; }

.duration-700 { transition-duration: 0.7s; }

.duration-\[0\.125s\] { transition-duration: 0.125s; }

.ease-\[cubic-bezier\(\.215\,\.61\,\.355\,1\)\] { transition-timing-functio=
n: cubic-bezier(0.215, 0.61, 0.355, 1); }

.ease-\[var\(--spring-bounce\)\] { transition-timing-function: var(--spring=
-bounce); }

.ease-in { transition-timing-function: cubic-bezier(0.4, 0, 1, 1); }

.ease-in-out { transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

.ease-out { transition-timing-function: cubic-bezier(0, 0, 0.2, 1); }

.will-change-\[opacity\,transform\] { will-change: opacity, transform; }

.will-change-transform { will-change: transform; }

.contain-content { contain: content; }

.contain-inline-size { --tw-contain-size: inline-size; contain: var(--tw-co=
ntain-size) var(--tw-contain-layout) var(--tw-contain-paint) var(--tw-conta=
in-style); }

.\@container { container-type: inline-size; }

.snc .text-xs { font-size: 0.825rem; line-height: 1.4; }

.snc .text-sm { font-size: 0.9rem; line-height: 1.4; }

.snc .text-base { font-size: 1rem; }

.snc .\!text-base { font-size: 1rem !important; }

.snc .text-lg { font-size: 1.125rem; }

.snc .text-xl { font-size: 1.25rem; }

.snc .text-2xl { font-size: 1.5rem; }

.snc .text-3xl { font-size: 1.875rem; }

@media (min-width: 640px) {
  .snc { --snc-results-padding: 1.5rem; }
}

.\[font-size\:17px\] { font-size: 17px; }

.\[grid-area\:_title\] { grid-area: title; }

.\[grid-template-areas\:_\'title_action\'_\'description_action\'\] { grid-t=
emplate-areas: "title action" "description action"; }

.\[line-height\:26px\] { line-height: 26px; }

.\[oaicite\:0\] { }

.\[oaicite\:1\] { }

.\[oaicite\:2\] { }

.\[oaicite\:3\] { }

.\[oaicite\:4\] { }

.\[oaicite\:5\] { }

.\[oaicite\:6\] { }

.\[oaicite\:7\] { }

.\[overflow-wrap\:anywhere\] { overflow-wrap: anywhere; }

.\[scrollbar-gutter\:stable\] { scrollbar-gutter: stable; }

.\[text-wrap\:pretty\] { text-wrap: pretty; }

.first-letter\:uppercase::first-letter { text-transform: uppercase; }

.marker\:text-token-text-tertiary ::marker { color: var(--text-tertiary); }

.marker\:text-token-text-tertiary::marker { color: var(--text-tertiary); }

.placeholder\:text-gray-300::placeholder { --tw-text-opacity: 1; color: rgb=
(205 205 205/var(--tw-text-opacity)); }

.placeholder\:text-gray-500::placeholder { --tw-text-opacity: 1; color: rgb=
(155 155 155/var(--tw-text-opacity)); }

.placeholder\:text-gray-600::placeholder { --tw-text-opacity: 1; color: rgb=
(103 103 103/var(--tw-text-opacity)); }

.placeholder\:text-token-text-secondary::placeholder { color: var(--text-se=
condary); }

.placeholder\:text-token-text-tertiary::placeholder { color: var(--text-ter=
tiary); }

.before\:bg-white\/50::before { background-color: rgba(255, 255, 255, 0.5);=
 content: var(--tw-content); }

.before\:content-\[\'\*\'\]::before { --tw-content: "*"; content: var(--tw-=
content); }

.after\:absolute::after { content: var(--tw-content); position: absolute; }

.after\:-inset-4::after { content: var(--tw-content); inset: -1rem; }

.after\:-inset-y-4::after { bottom: -1rem; content: var(--tw-content); top:=
 -1rem; }

.after\:inset-x-\[-4px\]::after { content: var(--tw-content); left: -4px; r=
ight: -4px; }

.after\:inset-y-0::after { bottom: 0px; top: 0px; }

.after\:-left-1::after, .after\:inset-y-0::after { content: var(--tw-conten=
t); }

[dir=3D"ltr"] .after\:-left-1::after { left: -0.25rem; }

[dir=3D"rtl"] .after\:-left-1::after { right: -0.25rem; }

.after\:-right-4::after { content: var(--tw-content); }

[dir=3D"ltr"] .after\:-right-4::after { right: -1rem; }

[dir=3D"rtl"] .after\:-right-4::after { left: -1rem; }

.after\:bottom-0::after { bottom: 0px; }

.after\:bottom-0::after, .after\:left-0::after { content: var(--tw-content)=
; }

[dir=3D"ltr"] .after\:left-0::after { left: 0px; }

[dir=3D"rtl"] .after\:left-0::after { right: 0px; }

.after\:top-0::after { content: var(--tw-content); top: 0px; }

.after\:z-0::after { content: var(--tw-content); z-index: 0; }

.after\:block::after { content: var(--tw-content); display: block; }

.after\:h-2::after { content: var(--tw-content); height: 0.5rem; }

.after\:w-1::after { content: var(--tw-content); width: 0.25rem; }

.after\:w-2::after { content: var(--tw-content); width: 0.5rem; }

.after\:rounded-\[50\%\]::after { border-radius: 50%; content: var(--tw-con=
tent); }

.after\:rounded-md::after { border-radius: 0.375rem; content: var(--tw-cont=
ent); }

.after\:bg-\[Highlight\]::after { background-color: highlight; content: var=
(--tw-content); }

.after\:bg-green-500::after { --tw-bg-opacity: 1; background-color: rgb(25 =
195 125/var(--tw-bg-opacity)); content: var(--tw-content); }

.after\:bg-red-500::after { --tw-bg-opacity: 1; background-color: rgb(239 6=
8 68/var(--tw-bg-opacity)); content: var(--tw-content); }

.after\:bg-token-text-primary::after { background-color: var(--text-primary=
); content: var(--tw-content); }

.after\:content-\[\'\'\]::after { --tw-content: ""; content: var(--tw-conte=
nt); }

[dir=3D"ltr"] .first\:ml-0:first-child { margin-left: 0px; }

[dir=3D"rtl"] .first\:ml-0:first-child { margin-right: 0px; }

[dir=3D"ltr"] .first\:ml-4:first-child { margin-left: 1rem; }

[dir=3D"rtl"] .first\:ml-4:first-child { margin-right: 1rem; }

[dir=3D"ltr"] .first\:mr-0:first-child { margin-right: 0px; }

[dir=3D"rtl"] .first\:mr-0:first-child { margin-left: 0px; }

.first\:mt-0:first-child { margin-top: 0px; }

.first\:mt-1:first-child { margin-top: 0.25rem; }

.first\:rounded-t-lg:first-child { border-top-left-radius: 0.5rem; border-t=
op-right-radius: 0.5rem; }

.first\:border-0:first-child { border-width: 0px; }

[dir=3D"ltr"] .first\:\!pl-0:first-child { padding-left: 0px !important; }

[dir=3D"rtl"] .first\:\!pl-0:first-child { padding-right: 0px !important; }

.first\:pt-\[3px\]:first-child { padding-top: 3px; }

.first\:shadow-\[0_-1px_0_0_var\(--border-light\)\]:first-child { --tw-shad=
ow: 0 -1px 0 0 var(--border-light); --tw-shadow-colored: 0 -1px 0 0 var(--t=
w-shadow-color); box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--t=
w-ring-shadow,0 0 #0000),var(--tw-shadow); }

.last\:mb-0:last-child { margin-bottom: 0px; }

.last\:mb-2:last-child { margin-bottom: 0.5rem; }

.last\:mb-5:last-child { margin-bottom: 1.25rem; }

[dir=3D"ltr"] .last\:mr-1:last-child { margin-right: 0.25rem; }

[dir=3D"rtl"] .last\:mr-1:last-child { margin-left: 0.25rem; }

[dir=3D"ltr"] .last\:mr-1\.5:last-child { margin-right: 0.375rem; }

[dir=3D"rtl"] .last\:mr-1\.5:last-child { margin-left: 0.375rem; }

[dir=3D"ltr"] .last\:mr-4:last-child { margin-right: 1rem; }

[dir=3D"rtl"] .last\:mr-4:last-child { margin-left: 1rem; }

.last\:min-h-\[calc\(100vh-8rem\)\]:last-child { min-height: calc(-8rem + 1=
00vh); }

.last\:rounded-b-lg:last-child { border-bottom-left-radius: 0.5rem; border-=
bottom-right-radius: 0.5rem; }

.last\:border-b:last-child { border-bottom-width: 1px; }

.last\:border-b-0:last-child { border-bottom-width: 0px; }

[dir=3D"ltr"] .last\:border-r-0:last-child { border-right-width: 0px; }

[dir=3D"rtl"] .last\:border-r-0:last-child { border-left-width: 0px; }

[dir=3D"ltr"] .last\:\!pr-0:last-child { padding-right: 0px !important; }

[dir=3D"rtl"] .last\:\!pr-0:last-child { padding-left: 0px !important; }

[dir=3D"ltr"] .last\:pr-0:last-child { padding-right: 0px; }

[dir=3D"rtl"] .last\:pr-0:last-child { padding-left: 0px; }

.last-of-type\:border-b-0:last-of-type { border-bottom-width: 0px; }

.checked\:border-blue-600:checked { --tw-border-opacity: 1; border-color: r=
gb(37 99 235/var(--tw-border-opacity)); }

.checked\:\!bg-black:checked { --tw-bg-opacity: 1 !important; background-co=
lor: rgb(0 0 0/var(--tw-bg-opacity)) !important; }

.checked\:bg-blue-600:checked { --tw-bg-opacity: 1; background-color: rgb(3=
7 99 235/var(--tw-bg-opacity)); }

.empty\:hidden:empty { display: none; }

.focus-within\:z-10:focus-within { z-index: 10; }

.focus-within\:border-green-500:focus-within { --tw-border-opacity: 1; bord=
er-color: rgb(25 195 125/var(--tw-border-opacity)); }

.focus-within\:border-green-600:focus-within { --tw-border-opacity: 1; bord=
er-color: rgb(16 163 127/var(--tw-border-opacity)); }

.focus-within\:border-token-border-xheavy:focus-within { border-color: var(=
--border-xheavy); }

.focus-within\:bg-token-main-surface-tertiary:focus-within { background-col=
or: var(--main-surface-tertiary); }

.focus-within\:shadow-none:focus-within { --tw-shadow: 0 0 #0000; --tw-shad=
ow-colored: 0 0 #0000; box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),v=
ar(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.focus-within\:outline-none:focus-within { outline: transparent solid 2px; =
outline-offset: 2px; }

.focus-within\:ring-0:focus-within { --tw-ring-offset-shadow: var(--tw-ring=
-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw=
-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(var(--tw-ring-offset-width)) =
var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow),var(--tw-rin=
g-shadow),var(--tw-shadow,0 0 #0000); }

.focus-within\:ring-1:focus-within { --tw-ring-offset-shadow: var(--tw-ring=
-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw=
-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-wi=
dth)) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow),var(--=
tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

.focus-within\:ring-green-600:focus-within { --tw-ring-opacity: 1; --tw-rin=
g-color: rgb(16 163 127/var(--tw-ring-opacity)); }

.focus-within\:ring-token-text-secondary:focus-within { --tw-ring-color: va=
r(--text-secondary); }

.focus-within\:ring-transparent:focus-within { --tw-ring-color: transparent=
; }

@media (hover: hover) and (pointer: fine) {
  .hover\:z-50:hover { z-index: 50; }
  .hover\:scale-110:hover { --tw-scale-x: 1.1; --tw-scale-y: 1.1; }
  .hover\:scale-110:hover, .hover\:scale-\[103\%\]:hover { transform: trans=
late(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) =
skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) sc=
aleY(var(--tw-scale-y)); }
  .hover\:scale-\[103\%\]:hover { --tw-scale-x: 103%; --tw-scale-y: 103%; }
  .hover\:cursor-default:hover { cursor: default; }
  .hover\:cursor-pointer:hover { cursor: pointer; }
  .hover\:rounded-xl:hover { border-radius: 0.75rem; }
  .hover\:border:hover { border-width: 1px; }
  .hover\:border-gray-100:hover { --tw-border-opacity: 1; border-color: rgb=
(236 236 236/var(--tw-border-opacity)); }
  .hover\:border-red-500\/50:hover { border-color: rgba(239, 68, 68, 0.5); =
}
  .hover\:border-token-border-heavy:hover { border-color: var(--border-heav=
y); }
  .hover\:border-token-border-medium:hover { border-color: var(--border-med=
ium); }
  .hover\:bg-\[\#0077FF\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(0 119 255/var(--tw-bg-opacity)); }
  .hover\:bg-\[\#BDDCF4\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(189 220 244/var(--tw-bg-opacity)); }
  .hover\:bg-\[\#E4EAF7\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(228 234 247/var(--tw-bg-opacity)); }
  .hover\:bg-\[\#f5f5f5\]:hover { --tw-bg-opacity: 1; background-color: rgb=
(245 245 245/var(--tw-bg-opacity)); }
  .hover\:bg-\[var\(--snc-hover\)\]:hover { background-color: var(--snc-hov=
er); }
  .hover\:bg-black:hover { --tw-bg-opacity: 1; background-color: rgb(0 0 0/=
var(--tw-bg-opacity)); }
  .hover\:bg-black\/10:hover { background-color: rgba(0, 0, 0, 0.1); }
  .hover\:bg-black\/75:hover { background-color: rgba(0, 0, 0, 0.75); }
  .hover\:bg-blue-600:hover { --tw-bg-opacity: 1; background-color: rgb(37 =
99 235/var(--tw-bg-opacity)); }
  .hover\:bg-blue-700:hover { --tw-bg-opacity: 1; background-color: rgb(29 =
78 216/var(--tw-bg-opacity)); }
  .hover\:bg-blue-800:hover { --tw-bg-opacity: 1; background-color: rgb(30 =
64 175/var(--tw-bg-opacity)); }
  .hover\:bg-brand-purple-600:hover { --tw-bg-opacity: 1; background-color:=
 rgb(113 95 222/var(--tw-bg-opacity)); }
  .hover\:bg-gray-100:hover { --tw-bg-opacity: 1; background-color: rgb(236=
 236 236/var(--tw-bg-opacity)); }
  .hover\:bg-gray-100\/75:hover { background-color: rgba(237, 237, 237, 0.7=
5); }
  .hover\:bg-gray-200:hover { --tw-bg-opacity: 1; background-color: rgb(227=
 227 227/var(--tw-bg-opacity)); }
  .hover\:bg-gray-50:hover { --tw-bg-opacity: 1; background-color: rgb(249 =
249 249/var(--tw-bg-opacity)); }
  .hover\:bg-gray-500\/10:hover { background-color: rgba(156, 156, 156, 0.1=
); }
  .hover\:bg-gray-800:hover { --tw-bg-opacity: 1; background-color: rgb(33 =
33 33/var(--tw-bg-opacity)); }
  .hover\:bg-orange-400\/10:hover { background-color: rgba(255, 96, 0, 0.1)=
; }
  .hover\:bg-red-500:hover { --tw-bg-opacity: 1; background-color: rgb(239 =
68 68/var(--tw-bg-opacity)); }
  .hover\:bg-red-500\/10:hover { background-color: rgba(239, 68, 68, 0.1); =
}
  .hover\:bg-red-500\/15:hover { background-color: rgba(239, 68, 68, 0.15);=
 }
  .hover\:bg-token-hint-text:hover { background-color: var(--hint-text); }
  .hover\:bg-token-main-surface-secondary:hover { background-color: var(--m=
ain-surface-secondary); }
  .hover\:bg-token-main-surface-tertiary:hover { background-color: var(--ma=
in-surface-tertiary); }
  .hover\:bg-token-sidebar-surface-secondary:hover { background-color: var(=
--sidebar-surface-secondary); }
  .hover\:bg-token-sidebar-surface-tertiary:hover { background-color: var(-=
-sidebar-surface-tertiary); }
  .hover\:bg-token-surface-error\/10:hover { background-color: rgb(var(--su=
rface-error)/.1); }
  .hover\:bg-token-text-primary:hover { background-color: var(--text-primar=
y); }
  .hover\:bg-transparent:hover { background-color: transparent; }
  .hover\:bg-white:hover { --tw-bg-opacity: 1; background-color: rgb(255 25=
5 255/var(--tw-bg-opacity)); }
  .hover\:bg-white\/40:hover { background-color: rgba(255, 255, 255, 0.4); =
}
  .hover\:bg-opacity-30:hover { --tw-bg-opacity: .3; }
  .hover\:\!text-token-main-surface-secondary:hover { color: var(--main-sur=
face-secondary) !important; }
  .hover\:text-red-500:hover { --tw-text-opacity: 1; color: rgb(239 68 68/v=
ar(--tw-text-opacity)); }
  .hover\:text-red-700:hover { --tw-text-opacity: 1; color: rgb(185 28 28/v=
ar(--tw-text-opacity)); }
  .hover\:text-token-link-hover:hover { color: var(--link-hover); }
  .hover\:text-token-main-surface-tertiary:hover { color: var(--main-surfac=
e-tertiary); }
  .hover\:text-token-text-primary:hover { color: var(--text-primary); }
  .hover\:text-token-text-quaternary:hover { color: var(--text-quaternary);=
 }
  .hover\:text-token-text-secondary:hover { color: var(--text-secondary); }
  .hover\:text-token-text-tertiary:hover { color: var(--text-tertiary); }
  .hover\:text-white:hover { --tw-text-opacity: 1; color: rgb(255 255 255/v=
ar(--tw-text-opacity)); }
  .hover\:text-white\/40:hover { color: rgba(255, 255, 255, 0.4); }
  .hover\:underline:hover { text-decoration-line: underline; }
  .hover\:no-underline:hover { text-decoration-line: none; }
  .hover\:opacity-100:hover { opacity: 1; }
  .hover\:opacity-65:hover { opacity: 0.65; }
  .hover\:opacity-70:hover { opacity: 0.7; }
  .hover\:opacity-75:hover { opacity: 0.75; }
  .hover\:opacity-80:hover { opacity: 0.8; }
  .hover\:opacity-85:hover { opacity: 0.85; }
  .hover\:opacity-90:hover { opacity: 0.9; }
  .hover\:delay-0:hover { transition-delay: 0s; }
}

.focus\:border-none:focus { border-style: none; }

.focus\:border-gray-200:focus { --tw-border-opacity: 1; border-color: rgb(2=
27 227 227/var(--tw-border-opacity)); }

.focus\:border-green-500:focus { --tw-border-opacity: 1; border-color: rgb(=
25 195 125/var(--tw-border-opacity)); }

.focus\:border-orange-400:focus { --tw-border-opacity: 1; border-color: rgb=
(255 96 0/var(--tw-border-opacity)); }

.focus\:border-red-500:focus { --tw-border-opacity: 1; border-color: rgb(23=
9 68 68/var(--tw-border-opacity)); }

.focus\:border-token-text-primary:focus { border-color: var(--text-primary)=
; }

.focus\:border-transparent:focus { border-color: transparent; }

.focus\:shadow-none:focus { --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 =
0 #0000; box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-s=
hadow,0 0 #0000),var(--tw-shadow); }

.focus\:outline-none:focus { outline: transparent solid 2px; outline-offset=
: 2px; }

.focus\:outline-0:focus { outline-width: 0px; }

.focus\:ring-0:focus { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 =
var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: =
var(--tw-ring-inset) 0 0 0 calc(var(--tw-ring-offset-width)) var(--tw-ring-=
color); }

.focus\:ring-0:focus, .focus\:ring-2:focus { box-shadow: var(--tw-ring-offs=
et-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

.focus\:ring-2:focus { --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 =
var(--tw-ring-offset-width) var(--tw-ring-offset-color); --tw-ring-shadow: =
var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw=
-ring-color); }

.focus\:ring-inset:focus { --tw-ring-inset: inset; }

.focus\:ring-blue-400:focus { --tw-ring-opacity: 1; --tw-ring-color: rgb(58=
 136 255/var(--tw-ring-opacity)); }

.focus\:ring-gray-200:focus { --tw-ring-opacity: 1; --tw-ring-color: rgb(22=
7 227 227/var(--tw-ring-opacity)); }

.focus\:ring-green-500:focus { --tw-ring-opacity: 1; --tw-ring-color: rgb(2=
5 195 125/var(--tw-ring-opacity)); }

.focus\:ring-token-text-primary:focus { --tw-ring-color: var(--text-primary=
); }

.focus\:ring-white:focus { --tw-ring-opacity: 1; --tw-ring-color: rgb(255 2=
55 255/var(--tw-ring-opacity)); }

.focus-visible\:border-none:focus-visible { border-style: none; }

.focus-visible\:border-token-border-light:focus-visible { border-color: var=
(--border-light); }

.focus-visible\:bg-\[\#f5f5f5\]:focus-visible { --tw-bg-opacity: 1; backgro=
und-color: rgb(245 245 245/var(--tw-bg-opacity)); }

.focus-visible\:bg-blue-400\/15:focus-visible { background-color: rgba(58, =
136, 255, 0.15); }

.focus-visible\:bg-token-main-surface-secondary:focus-visible { background-=
color: var(--main-surface-secondary); }

.focus-visible\:bg-token-sidebar-surface-secondary:focus-visible { backgrou=
nd-color: var(--sidebar-surface-secondary); }

.focus-visible\:outline-none:focus-visible { outline: transparent solid 2px=
; outline-offset: 2px; }

.focus-visible\:outline-0:focus-visible { outline-width: 0px; }

.focus-visible\:outline-2:focus-visible { outline-width: 2px; }

.focus-visible\:outline-offset-\[-4px\]:focus-visible { outline-offset: -4p=
x; }

.focus-visible\:outline-black:focus-visible { outline-color: rgb(0, 0, 0); =
}

.focus-visible\:ring-0:focus-visible { --tw-ring-offset-shadow: var(--tw-ri=
ng-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --=
tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(var(--tw-ring-offset-width)=
) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow),var(--tw-r=
ing-shadow),var(--tw-shadow,0 0 #0000); }

.focus-visible\:ring-2:focus-visible { --tw-ring-offset-shadow: var(--tw-ri=
ng-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --=
tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-=
width)) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow),var(=
--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

.focus-visible\:ring-token-text-quaternary:focus-visible { --tw-ring-color:=
 var(--text-quaternary); }

.focus-visible\:ring-token-text-secondary:focus-visible { --tw-ring-color: =
var(--text-secondary); }

.focus-visible\:ring-offset-1:focus-visible { --tw-ring-offset-width: 1px; =
}

.focus-visible\:ring-offset-2:focus-visible { --tw-ring-offset-width: 2px; =
}

.focus-visible\:ring-offset-transparent:focus-visible { --tw-ring-offset-co=
lor: transparent; }

.active\:scale-\[0\.9\]:active { --tw-scale-x: .9; --tw-scale-y: .9; transf=
orm: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw=
-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-sc=
ale-x)) scaleY(var(--tw-scale-y)); }

.active\:bg-black\/20:active { background-color: rgba(0, 0, 0, 0.2); }

.active\:bg-gray-100:active { --tw-bg-opacity: 1; background-color: rgb(236=
 236 236/var(--tw-bg-opacity)); }

.active\:bg-gray-700:active { --tw-bg-opacity: 1; background-color: rgb(66 =
66 66/var(--tw-bg-opacity)); }

.active\:bg-red-400:active { --tw-bg-opacity: 1; background-color: rgb(248 =
113 113/var(--tw-bg-opacity)); }

.active\:bg-red-500\/20:active { background-color: rgba(239, 68, 68, 0.2); =
}

.active\:bg-token-main-surface-tertiary:active { background-color: var(--ma=
in-surface-tertiary); }

.active\:text-white:active { --tw-text-opacity: 1; color: rgb(255 255 255/v=
ar(--tw-text-opacity)); }

.active\:opacity-50:active { opacity: 0.5; }

.active\:opacity-90:active { opacity: 0.9; }

.active\:drop-shadow-none:active { --tw-drop-shadow: drop-shadow(0 0 #0000)=
; filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-g=
rayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw=
-sepia) var(--tw-drop-shadow); }

@media (hover: hover) and (pointer: fine) {
  .enabled\:hover\:bg-blue-400\/20:hover:enabled { background-color: rgba(5=
8, 136, 255, 0.2); }
  .enabled\:hover\:bg-token-main-surface-secondary:hover:enabled { backgrou=
nd-color: var(--main-surface-secondary); }
  .enabled\:hover\:bg-token-sidebar-surface-secondary:hover:enabled { backg=
round-color: var(--sidebar-surface-secondary); }
  .enabled\:hover\:underline:hover:enabled { text-decoration-line: underlin=
e; }
}

.disabled\:cursor-not-allowed:disabled { cursor: not-allowed; }

.disabled\:bg-\[\#D7D7D7\]:disabled { --tw-bg-opacity: 1; background-color:=
 rgb(215 215 215/var(--tw-bg-opacity)); }

.disabled\:bg-black:disabled { --tw-bg-opacity: 1; background-color: rgb(0 =
0 0/var(--tw-bg-opacity)); }

.disabled\:bg-green-600:disabled { --tw-bg-opacity: 1; background-color: rg=
b(16 163 127/var(--tw-bg-opacity)); }

.disabled\:bg-token-main-surface-tertiary:disabled { background-color: var(=
--main-surface-tertiary); }

.disabled\:bg-token-text-quaternary:disabled { background-color: var(--text=
-quaternary); }

.disabled\:bg-opacity-15:disabled { --tw-bg-opacity: .15; }

.disabled\:bg-opacity-\[0\.27\]:disabled { --tw-bg-opacity: .27; }

.disabled\:text-\[\#f4f4f4\]:disabled { --tw-text-opacity: 1; color: rgb(24=
4 244 244/var(--tw-text-opacity)); }

.disabled\:text-blue-400:disabled { --tw-text-opacity: 1; color: rgb(58 136=
 255/var(--tw-text-opacity)); }

.disabled\:text-token-border-medium:disabled { color: var(--border-medium);=
 }

.disabled\:text-token-text-quaternary:disabled { color: var(--text-quaterna=
ry); }

.disabled\:text-token-text-secondary:disabled { color: var(--text-secondary=
); }

.disabled\:text-token-text-tertiary:disabled { color: var(--text-tertiary);=
 }

.disabled\:opacity-30:disabled { opacity: 0.3; }

.disabled\:opacity-40:disabled { opacity: 0.4; }

.disabled\:opacity-50:disabled { opacity: 0.5; }

@media (hover: hover) and (pointer: fine) {
  .disabled\:hover\:bg-transparent:hover:disabled { background-color: trans=
parent; }
  .disabled\:hover\:opacity-100:hover:disabled { opacity: 1; }
}

.group:focus-within .group-focus-within\:flex { display: flex; }

@media (hover: hover) and (pointer: fine) {
  .group:hover .group-hover\:visible, .group\/dalle-image:hover .group-hove=
r\/dalle-image\:visible { visibility: visible; }
  .group:hover .group-hover\:invisible { visibility: hidden; }
  [dir=3D"ltr"] .group:hover .group-hover\:mr-5 { margin-right: 1.25rem; }
  [dir=3D"rtl"] .group:hover .group-hover\:mr-5 { margin-left: 1.25rem; }
  .group:hover .group-hover\:block, .group\/file-tile:hover .group-hover\/f=
ile-tile\:block { display: block; }
  .group:hover .group-hover\:flex { display: flex; }
  .group:hover .group-hover\:hidden { display: none; }
  .group:hover .group-hover\:scale-100 { --tw-scale-x: 1; --tw-scale-y: 1; =
}
  .group:hover .group-hover\:scale-100, .group:hover .group-hover\:scale-10=
5 { transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotat=
e(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(v=
ar(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
  .group:hover .group-hover\:scale-105 { --tw-scale-x: 1.05; --tw-scale-y: =
1.05; }
  .group\/footnote:hover .group-hover\/footnote\:border-token-main-surface-=
secondary, .group\/snorlax-control-tile:hover .group-hover\/snorlax-control=
-tile\:border-token-main-surface-secondary { border-color: var(--main-surfa=
ce-secondary); }
  .group:hover .group-hover\:border-token-border-heavy { border-color: var(=
--border-heavy); }
  .group:hover .group-hover\:border-t-\[\#0077FF\] { --tw-border-opacity: 1=
; border-top-color: rgb(0 119 255/var(--tw-border-opacity)); }
  .group\/dalle-image:hover .group-hover\/dalle-image\:bg-black\/70 { backg=
round-color: rgba(0, 0, 0, 0.7); }
  .group\/dalle-image:hover .group-hover\/dalle-image\:bg-transparent { bac=
kground-color: transparent; }
  .group:hover .group-hover\:bg-token-main-surface-secondary { background-c=
olor: var(--main-surface-secondary); }
  .group:hover .group-hover\:bg-token-text-secondary { background-color: va=
r(--text-secondary); }
  .group:hover .group-hover\:text-red-500 { --tw-text-opacity: 1; color: rg=
b(239 68 68/var(--tw-text-opacity)); }
  .group:hover .group-hover\:text-token-link { color: var(--link); }
  .group:hover .group-hover\:text-token-main-surface-tertiary { color: var(=
--main-surface-tertiary); }
  .group:hover .group-hover\:text-token-text-primary { color: var(--text-pr=
imary); }
  .group:hover .group-hover\:text-token-text-secondary { color: var(--text-=
secondary); }
  .group:hover .group-hover\:text-white { --tw-text-opacity: 1; color: rgb(=
255 255 255/var(--tw-text-opacity)); }
  .group\/nav-list:hover .group-hover\/nav-list\:underline { text-decoratio=
n-line: underline; }
  .group\/tldr:hover .group-hover\/tldr\:opacity-70 { opacity: 0.7; }
  .group:hover .group-hover\:opacity-100 { opacity: 1; }
  .group:hover .group-hover\:opacity-90 { opacity: 0.9; }
  .group:hover .group-hover\:shadow-lg { --tw-shadow: 0 10px 15px -3px rgba=
(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1); --tw-shadow-colored: 0 10px 15px =
-3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color); box-shad=
ow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),=
var(--tw-shadow); }
  .group:hover .group-hover\:grayscale-0 { --tw-grayscale: grayscale(0); fi=
lter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grays=
cale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sep=
ia) var(--tw-drop-shadow); }
}

.group.is-comment .group-\[\.is-comment\]\:bg-opacity-40 { --tw-bg-opacity:=
 .4; }

.has-\[strong\]\:mb-0:has(strong) { margin-bottom: 0px; }

.has-\[strong\]\:mb-1:has(strong) { margin-bottom: 0.25rem; }

.group:has(:focus) .group-has-\[\:focus\]\:border-token-border-xheavy { bor=
der-color: var(--border-xheavy); }

.data-\[state\=3Dactive\]\:block[data-state=3D"active"] { display: block; }

.group[data-disabled] .group-data-\[disabled\]\:opacity-50 { opacity: 0.5; =
}

@container (min-width: 0px) {
  .\@\[0px\]\:hidden { display: none; }
}

@container screen-composer (min-width: 20rem) {
  .\@xs\/screen-composer\:inline-flex { display: inline-flex; }
}

@container screen-composer (min-width: 32rem) {
  .\@lg\/screen-composer\:flex { display: flex; }
  .\@lg\/screen-composer\:inline-flex { display: inline-flex; }
  .\@lg\/screen-composer\:hidden { display: none; }
  .\@lg\/screen-composer\:gap-2 { gap: 0.5rem; }
  [dir=3D"ltr"] .\@lg\/screen-composer\:pl-3 { padding-left: 0.75rem; }
  [dir=3D"rtl"] .\@lg\/screen-composer\:pl-3 { padding-right: 0.75rem; }
}

@container thread (min-width: 32rem) {
  .\@lg\/thread\:inline-flex { display: inline-flex; }
  .\@lg\/thread\:hidden { display: none; }
}

@container (min-width: 42rem) {
  .\@2xl\:flex-row { flex-direction: row; }
  .\@2xl\:justify-between { justify-content: space-between; }
  .\@2xl\:text-start { text-align: start; }
}

@container (min-width: 150px) {
  .\@\[150px\]\:block { display: block; }
}

@container composer (min-width: 300px) {
  .\@\[300px\]\/composer\:flex { display: flex; }
}

@container composer (min-width: 310px) {
  .\@\[310px\]\/composer\:flex { display: flex; }
}

@container composer (min-width: 400px) {
  .\@\[400px\]\/composer\:flex { display: flex; }
}

@container (min-width: 700px) {
  .\@\[700px\]\:block { display: block; }
}

@container composer (min-width: 800px) {
  .\@\[800px\]\/composer\:flex { display: flex; }
}

.radix-disabled\:pointer-events-none[data-disabled] { pointer-events: none;=
 }

.radix-disabled\:pointer-events-auto[data-disabled] { pointer-events: auto;=
 }

.radix-disabled\:cursor-auto[data-disabled] { cursor: auto; }

.radix-disabled\:cursor-not-allowed[data-disabled] { cursor: not-allowed; }

.radix-disabled\:bg-transparent[data-disabled] { background-color: transpar=
ent; }

.radix-disabled\:text-token-text-tertiary[data-disabled] { color: var(--tex=
t-tertiary); }

.radix-disabled\:opacity-50[data-disabled] { opacity: 0.5; }

@media (hover: hover) and (pointer: fine) {
  .radix-disabled\:hover\:bg-transparent:hover { background-color: transpar=
ent; }
}

.radix-state-active\:bg-token-main-surface-tertiary[data-state=3D"active"] =
{ background-color: var(--main-surface-tertiary); }

.radix-state-active\:bg-white[data-state=3D"active"] { --tw-bg-opacity: 1; =
background-color: rgb(255 255 255/var(--tw-bg-opacity)); }

.radix-state-active\:text-token-text-primary[data-state=3D"active"] { color=
: var(--text-primary); }

.radix-state-active\:text-token-text-secondary[data-state=3D"active"] { col=
or: var(--text-secondary); }

.radix-state-checked\:border[data-state=3D"checked"] { border-width: 1px; }

.radix-state-checked\:border-green-500[data-state=3D"checked"] { --tw-borde=
r-opacity: 1; border-color: rgb(25 195 125/var(--tw-border-opacity)); }

.radix-state-checked\:border-token-text-tertiary[data-state=3D"checked"] { =
border-color: var(--text-tertiary); }

.radix-state-checked\:bg-black[data-state=3D"checked"] { --tw-bg-opacity: 1=
; background-color: rgb(0 0 0/var(--tw-bg-opacity)); }

.radix-state-checked\:bg-green-500[data-state=3D"checked"] { --tw-bg-opacit=
y: 1; background-color: rgb(25 195 125/var(--tw-bg-opacity)); }

.radix-state-checked\:bg-green-600[data-state=3D"checked"] { --tw-bg-opacit=
y: 1; background-color: rgb(16 163 127/var(--tw-bg-opacity)); }

.radix-state-checked\:bg-token-main-surface-primary[data-state=3D"checked"]=
 { background-color: var(--main-surface-primary); }

.radix-state-checked\:bg-token-text-primary[data-state=3D"checked"] { backg=
round-color: var(--text-primary); }

.radix-state-checked\:font-semibold[data-state=3D"checked"] { font-weight: =
600; }

.radix-state-checked\:text-token-main-surface-primary[data-state=3D"checked=
"] { color: var(--main-surface-primary); }

.radix-state-checked\:text-token-text-primary[data-state=3D"checked"] { col=
or: var(--text-primary); }

.radix-state-checked\:shadow-\[0_0_2px_rgba\(0\,0\,0\,\.03\)\][data-state=
=3D"checked"] { --tw-shadow: 0 0 2px rgba(0,0,0,.03); --tw-shadow-colored: =
0 0 2px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow,0 0=
 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.focus-visible\:radix-state-checked\:ring-black[data-state=3D"checked"]:foc=
us-visible { --tw-ring-opacity: 1; --tw-ring-color: rgb(0 0 0/var(--tw-ring=
-opacity)); }

@keyframes sidebarHide {=20
  0% { opacity: 1; transform: translate(0px); }
  100% { opacity: 0; transform: translate(-100%); }
}

.radix-state-closed\:animate-sidebarHide[data-state=3D"closed"] { animation=
: 0.3s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running sidebarHide; =
}

@keyframes alertShow {=20
  0% { opacity: 0; transform: translate(-50%, -48%) scale(0.96); }
  100% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
}

.radix-state-open\:animate-alertShow[data-state=3D"open"] { animation: 0.15=
s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running alertShow; }

@keyframes contentShow {=20
  0% { opacity: 0; transform: scale(0.96); }
  100% { opacity: 1; transform: scale(1); }
}

.radix-state-open\:animate-contentShow[data-state=3D"open"] { animation: 0.=
15s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running contentShow; }

@keyframes show {=20
  0% { opacity: 0; }
  100% { opacity: 1; }
}

.radix-state-open\:animate-show[data-state=3D"open"] { animation: 0.1s cubi=
c-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running show; }

@keyframes sidebarShow {=20
  0% { opacity: 0; transform: translate(-100%); }
  100% { opacity: 1; transform: translate(0px); }
}

.radix-state-open\:animate-sidebarShow[data-state=3D"open"] { animation: 0.=
3s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running sidebarShow; }

.radix-state-open\:bg-\[\#f5f5f5\][data-state=3D"open"] { --tw-bg-opacity: =
1; background-color: rgb(245 245 245/var(--tw-bg-opacity)); }

.radix-state-open\:bg-token-main-surface-secondary[data-state=3D"open"] { b=
ackground-color: var(--main-surface-secondary); }

.radix-state-open\:text-token-text-primary[data-state=3D"open"] { color: va=
r(--text-primary); }

.radix-state-open\:text-token-text-secondary[data-state=3D"open"] { color: =
var(--text-secondary); }

.radix-state-open\:text-token-text-tertiary[data-state=3D"open"] { color: v=
ar(--text-tertiary); }

.group[data-state=3D"open"] .group-radix-state-open\:bg-token-main-surface-=
tertiary { background-color: var(--main-surface-tertiary); }

@keyframes slideUpAndFade {=20
  0% { opacity: 0; transform: translateY(1px); }
  100% { opacity: 1; transform: translateY(0px); }
}

.radix-side-bottom\:animate-slideUpAndFade[data-side=3D"bottom"] { animatio=
n: 0.2s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running slideUpAndFa=
de; }

@keyframes slideRightAndFade {=20
  0% { opacity: 0; transform: translate(-1px); }
  100% { opacity: 1; transform: translate(0px); }
}

.radix-side-left\:animate-slideRightAndFade[data-side=3D"left"] { animation=
: 0.2s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running slideRightAnd=
Fade; }

@keyframes slideLeftAndFade {=20
  0% { opacity: 0; transform: translate(1px); }
  100% { opacity: 1; transform: translate(0px); }
}

.radix-side-right\:animate-slideLeftAndFade[data-side=3D"right"] { animatio=
n: 0.2s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running slideLeftAnd=
Fade; }

@keyframes slideDownAndFade {=20
  0% { opacity: 0; transform: translateY(-1px); }
  100% { opacity: 1; transform: translateY(0px); }
}

.radix-side-top\:animate-slideDownAndFade[data-side=3D"top"] { animation: 0=
.2s cubic-bezier(0.16, 1, 0.3, 1) 0s 1 normal none running slideDownAndFade=
; }

.group-ui-open\:bg-token-sidebar-surface-secondary.group[data-headlessui-st=
ate~=3D"open"] { background-color: var(--sidebar-surface-secondary); }

.group:where([data-headlessui-state~=3D"open"]) .group-ui-open\:bg-token-si=
debar-surface-secondary { background-color: var(--sidebar-surface-secondary=
); }

@media (prefers-reduced-transparency: reduce) {
  .no-transparency\:backdrop-blur-none { --tw-backdrop-blur: blur(0); backd=
rop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-=
backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotat=
e) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-s=
aturate) var(--tw-backdrop-sepia); }
}

@media (hover: hover) and (pointer: fine) {
  .can-hover\:pointer-events-none { pointer-events: none; }
  .can-hover\:opacity-0 { opacity: 0; }
  .can-hover\:hover\:scale-110:hover { --tw-scale-x: 1.1; --tw-scale-y: 1.1=
; transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(=
var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var=
(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
  .can-hover\:active\:scale-100:active { --tw-scale-x: 1; --tw-scale-y: 1; =
transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(va=
r(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(-=
-tw-scale-x)) scaleY(var(--tw-scale-y)); }
  .group\/sidebar:hover .can-hover\:group-hover\/sidebar\:pointer-events-au=
to { pointer-events: auto; }
  .group:hover .can-hover\:group-hover\:flex { display: flex; }
  .group:hover .can-hover\:group-hover\:w-10 { width: 2.5rem; }
  .group:hover .can-hover\:group-hover\:scale-110 { --tw-scale-x: 1.1; --tw=
-scale-y: 1.1; transform: translate(var(--tw-translate-x),var(--tw-translat=
e-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y=
)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
  .group:hover .can-hover\:group-hover\:from-token-sidebar-surface-secondar=
y { --tw-gradient-from: var(--sidebar-surface-secondary) var(--tw-gradient-=
from-position); --tw-gradient-to: hsla(0,0%,100%,0) var(--tw-gradient-to-po=
sition); --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradient-to)=
; }
  .group:hover .can-hover\:group-hover\:from-60\% { --tw-gradient-from-posi=
tion: 60%; }
  .group\/sidebar:hover .can-hover\:group-hover\/sidebar\:opacity-100 { opa=
city: 1; }
}

.screen-arch .screen-arch\:sticky { position: sticky; }

.screen-arch .screen-arch\:top-12 { top: 3rem; }

.screen-arch .screen-arch\:top-\[var\(--sticky-title-offset\)\] { top: var(=
--sticky-title-offset); }

.screen-arch .screen-arch\:mb-5 { margin-bottom: 1.25rem; }

.screen-arch .screen-arch\:mt-1 { margin-top: 0.25rem; }

.screen-arch .screen-arch\:flex { display: flex; }

.screen-arch .screen-arch\:w-full { width: 100%; }

.screen-arch .screen-arch\:min-w-\[50cqw\] { min-width: 50cqw; }

.screen-arch .screen-arch\:items-center { align-items: center; }

.screen-arch .screen-arch\:gap-0 { gap: 0px; }

.screen-arch .screen-arch\:gap-0\.5 { gap: 0.125rem; }

.screen-arch .screen-arch\:py-\[7px\] { padding-bottom: 7px; padding-top: 7=
px; }

[dir=3D"ltr"] .screen-arch .screen-arch\:pl-1 { padding-left: 0.25rem; }

[dir=3D"rtl"] .screen-arch .screen-arch\:pl-1 { padding-right: 0.25rem; }

.screen-arch .screen-arch\:pt-1 { padding-top: 0.25rem; }

.screen-arch .screen-arch\:text-token-text-secondary { color: var(--text-se=
condary); }

@media (hover: hover) and (pointer: fine) {
  .screen-arch .screen-arch\:hover\:bg-token-main-surface-secondary:hover {=
 background-color: var(--main-surface-secondary); }
}

@media (prefers-reduced-motion: no-preference) {
  .motion-safe\:active\:scale-\[98\%\]:active { --tw-scale-x: 98%; --tw-sca=
le-y: 98%; transform: translate(var(--tw-translate-x),var(--tw-translate-y)=
) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) s=
caleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }
  .motion-safe\:active\:transition-transform:active { transition-duration: =
0.15s; transition-property: transform; transition-timing-function: cubic-be=
zier(0.4, 0, 0.2, 1); }
}

.dark\:divide-gray-900:is(.dark *) > :not([hidden]) ~ :not([hidden]) { --tw=
-divide-opacity: 1; border-color: rgb(23 23 23/var(--tw-divide-opacity)); }

.dark\:divide-token-border-heavy:is(.dark *) > :not([hidden]) ~ :not([hidde=
n]) { border-color: var(--border-heavy); }

.dark\:border:is(.dark *) { border-width: 1px; }

.dark\:border-b:is(.dark *) { border-bottom-width: 1px; }

.dark\:border-\[rgba\(255\,255\,255\,0\.1\)\]:is(.dark *) { border-color: r=
gba(255, 255, 255, 0.1); }

.dark\:border-black\/20:is(.dark *) { border-color: rgba(0, 0, 0, 0.2); }

.dark\:border-gray-300:is(.dark *) { --tw-border-opacity: 1; border-color: =
rgb(205 205 205/var(--tw-border-opacity)); }

.dark\:border-gray-500:is(.dark *) { --tw-border-opacity: 1; border-color: =
rgb(155 155 155/var(--tw-border-opacity)); }

.dark\:border-gray-600:is(.dark *) { --tw-border-opacity: 1; border-color: =
rgb(103 103 103/var(--tw-border-opacity)); }

.dark\:border-gray-700:is(.dark *) { --tw-border-opacity: 1; border-color: =
rgb(66 66 66/var(--tw-border-opacity)); }

.dark\:border-gray-800:is(.dark *) { --tw-border-opacity: 1; border-color: =
rgb(33 33 33/var(--tw-border-opacity)); }

.dark\:border-token-border-heavy:is(.dark *) { border-color: var(--border-h=
eavy); }

.dark\:border-token-border-medium:is(.dark *) { border-color: var(--border-=
medium); }

.dark\:border-token-border-xheavy:is(.dark *) { border-color: var(--border-=
xheavy); }

.dark\:border-token-border-xlight:is(.dark *) { border-color: var(--border-=
xlight); }

.dark\:border-token-main-surface-secondary:is(.dark *) { border-color: var(=
--main-surface-secondary); }

.dark\:border-token-text-secondary:is(.dark *) { border-color: var(--text-s=
econdary); }

.dark\:border-transparent:is(.dark *) { border-color: transparent; }

.dark\:border-white:is(.dark *) { --tw-border-opacity: 1; border-color: rgb=
(255 255 255/var(--tw-border-opacity)); }

.dark\:border-white\/10:is(.dark *) { border-color: rgba(255, 255, 255, 0.1=
); }

.dark\:border-white\/20:is(.dark *) { border-color: rgba(255, 255, 255, 0.2=
); }

.dark\:border-x-token-border-xheavy:is(.dark *) { border-left-color: var(--=
border-xheavy); border-right-color: var(--border-xheavy); }

.dark\:border-b-white:is(.dark *) { --tw-border-opacity: 1; border-bottom-c=
olor: rgb(255 255 255/var(--tw-border-opacity)); }

.dark\:bg-\[\#2A4A6D\]:is(.dark *) { --tw-bg-opacity: 1; background-color: =
rgb(42 74 109/var(--tw-bg-opacity)); }

.dark\:bg-\[\#2C313C\]:is(.dark *) { --tw-bg-opacity: 1; background-color: =
rgb(44 49 60/var(--tw-bg-opacity)); }

.dark\:bg-\[\#39445B\]:is(.dark *) { --tw-bg-opacity: 1; background-color: =
rgb(57 68 91/var(--tw-bg-opacity)); }

.dark\:bg-\[\#826116\]:is(.dark *) { --tw-bg-opacity: 1; background-color: =
rgb(130 97 22/var(--tw-bg-opacity)); }

.dark\:bg-\[\#EA8444\]:is(.dark *) { --tw-bg-opacity: 1; background-color: =
rgb(234 132 68/var(--tw-bg-opacity)); }

.dark\:bg-\[rgb\(33\,33\,33\,0\.9\)\]:is(.dark *) { background-color: rgba(=
33, 33, 33, 0.9); }

.dark\:bg-\[rgba\(255\,255\,255\,0\.04\)\]:is(.dark *) { background-color: =
rgba(255, 255, 255, 0.04); }

.dark\:bg-black:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(0 0=
 0/var(--tw-bg-opacity)); }

.dark\:bg-black\/50:is(.dark *) { background-color: rgba(0, 0, 0, 0.5); }

.dark\:bg-black\/80:is(.dark *) { background-color: rgba(0, 0, 0, 0.8); }

.dark\:bg-black\/85:is(.dark *) { background-color: rgba(0, 0, 0, 0.85); }

.dark\:bg-blue-1000:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb=
(2 133 255/var(--tw-bg-opacity)); }

.dark\:bg-gray-100:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
236 236 236/var(--tw-bg-opacity)); }

.dark\:bg-gray-50:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(2=
49 249 249/var(--tw-bg-opacity)); }

.dark\:bg-gray-500:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
155 155 155/var(--tw-bg-opacity)); }

.dark\:bg-gray-600:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
103 103 103/var(--tw-bg-opacity)); }

.dark\:bg-gray-700:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
66 66 66/var(--tw-bg-opacity)); }

.dark\:bg-gray-700\/50:is(.dark *) { background-color: rgba(66, 66, 66, 0.5=
); }

.dark\:bg-gray-700\/75:is(.dark *) { background-color: rgba(66, 66, 66, 0.7=
5); }

.dark\:bg-gray-750:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
47 47 47/var(--tw-bg-opacity)); }

.dark\:bg-gray-800:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
33 33 33/var(--tw-bg-opacity)); }

.dark\:bg-gray-900:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
23 23 23/var(--tw-bg-opacity)); }

.dark\:bg-gray-950:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(=
13 13 13/var(--tw-bg-opacity)); }

.dark\:bg-green-600:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb=
(16 163 127/var(--tw-bg-opacity)); }

.dark\:bg-green-600\/30:is(.dark *) { background-color: rgba(16, 163, 127, =
0.3); }

.dark\:bg-green-800:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb=
(27 93 74/var(--tw-bg-opacity)); }

.dark\:bg-orange-500:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(224 108 43/var(--tw-bg-opacity)); }

.dark\:bg-orange-800:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(163 64 10/var(--tw-bg-opacity)); }

.dark\:bg-red-500\/10:is(.dark *) { background-color: rgba(239, 68, 68, 0.1=
); }

.dark\:bg-red-600:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(2=
20 38 38/var(--tw-bg-opacity)); }

.dark\:bg-red-600\/30:is(.dark *) { background-color: rgba(220, 38, 38, 0.3=
); }

.dark\:bg-red-800:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(1=
53 27 27/var(--tw-bg-opacity)); }

.dark\:bg-token-main-surface-primary:is(.dark *) { background-color: var(--=
main-surface-primary); }

.dark\:bg-token-main-surface-secondary:is(.dark *) { background-color: var(=
--main-surface-secondary); }

.dark\:bg-token-main-surface-tertiary:is(.dark *) { background-color: var(-=
-main-surface-tertiary); }

.dark\:bg-token-text-tertiary:is(.dark *) { background-color: var(--text-te=
rtiary); }

.dark\:bg-transparent:is(.dark *) { background-color: transparent; }

.dark\:bg-white:is(.dark *) { --tw-bg-opacity: 1; background-color: rgb(255=
 255 255/var(--tw-bg-opacity)); }

.dark\:bg-white\/10:is(.dark *) { background-color: rgba(255, 255, 255, 0.1=
); }

.dark\:bg-yellow-400:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(255 198 87/var(--tw-bg-opacity)); }

.dark\:bg-yellow-500:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(234 179 8/var(--tw-bg-opacity)); }

.dark\:bg-yellow-600:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(202 138 4/var(--tw-bg-opacity)); }

.dark\:bg-yellow-900:is(.dark *) { --tw-bg-opacity: 1; background-color: rg=
b(146 114 1/var(--tw-bg-opacity)); }

.dark\:bg-opacity-10:is(.dark *) { --tw-bg-opacity: .1; }

.dark\:bg-opacity-20:is(.dark *) { --tw-bg-opacity: .2; }

.dark\:bg-opacity-30:is(.dark *) { --tw-bg-opacity: .3; }

.dark\:bg-opacity-50:is(.dark *) { --tw-bg-opacity: .5; }

.dark\:bg-opacity-60:is(.dark *) { --tw-bg-opacity: .6; }

.dark\:bg-opacity-70:is(.dark *) { --tw-bg-opacity: .7; }

.dark\:bg-gradient-to-t:is(.dark *) { background-image: linear-gradient(to =
top,var(--tw-gradient-stops)); }

.dark\:from-brand-blue-800\/15:is(.dark *) { --tw-gradient-from: rgba(0,102=
,222,.15) var(--tw-gradient-from-position); --tw-gradient-to: rgba(0,102,22=
2,0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient=
-from),var(--tw-gradient-to); }

.dark\:from-gray-800:is(.dark *) { --tw-gradient-from: #212121 var(--tw-gra=
dient-from-position); --tw-gradient-to: rgba(33,33,33,0) var(--tw-gradient-=
to-position); --tw-gradient-stops: var(--tw-gradient-from),var(--tw-gradien=
t-to); }

.dark\:from-token-main-surface-primary:is(.dark *) { --tw-gradient-from: va=
r(--main-surface-primary) var(--tw-gradient-from-position); --tw-gradient-t=
o: hsla(0,0%,100%,0) var(--tw-gradient-to-position); --tw-gradient-stops: v=
ar(--tw-gradient-from),var(--tw-gradient-to); }

.dark\:via-token-main-surface-primary:is(.dark *) { --tw-gradient-to: hsla(=
0,0%,100%,0) var(--tw-gradient-to-position); --tw-gradient-stops: var(--tw-=
gradient-from),var(--main-surface-primary) var(--tw-gradient-via-position),=
var(--tw-gradient-to); }

.dark\:via-white\/5:is(.dark *) { --tw-gradient-to: hsla(0,0%,100%,0) var(-=
-tw-gradient-to-position); --tw-gradient-stops: var(--tw-gradient-from),hsl=
a(0,0%,100%,.05) var(--tw-gradient-via-position),var(--tw-gradient-to); }

.dark\:to-token-main-surface-primary:is(.dark *) { --tw-gradient-to: var(--=
main-surface-primary) var(--tw-gradient-to-position); }

.dark\:to-transparent:is(.dark *) { --tw-gradient-to: transparent var(--tw-=
gradient-to-position); }

.dark\:to-white\/15:is(.dark *) { --tw-gradient-to: hsla(0,0%,100%,.15) var=
(--tw-gradient-to-position); }

.dark\:stroke-brand-purple\/50:is(.dark *) { stroke: rgba(171, 104, 255, 0.=
5); }

.dark\:text-\[\#48AAFF\]:is(.dark *) { --tw-text-opacity: 1; color: rgb(72 =
170 255/var(--tw-text-opacity)); }

.dark\:text-\[\#B9B9B9\]:is(.dark *) { --tw-text-opacity: 1; color: rgb(185=
 185 185/var(--tw-text-opacity)); }

.dark\:text-\[\#D292FF\]:is(.dark *) { --tw-text-opacity: 1; color: rgb(210=
 146 255/var(--tw-text-opacity)); }

.dark\:text-\[var\(--text-secondary\)\]:is(.dark *) { color: var(--text-sec=
ondary); }

.dark\:text-black:is(.dark *) { --tw-text-opacity: 1; color: rgb(0 0 0/var(=
--tw-text-opacity)); }

.dark\:text-blue-400:is(.dark *) { --tw-text-opacity: 1; color: rgb(58 136 =
255/var(--tw-text-opacity)); }

.dark\:text-gray-400:is(.dark *) { --tw-text-opacity: 1; color: rgb(180 180=
 180/var(--tw-text-opacity)); }

.dark\:text-gray-500:is(.dark *) { --tw-text-opacity: 1; color: rgb(155 155=
 155/var(--tw-text-opacity)); }

.dark\:text-gray-700:is(.dark *) { --tw-text-opacity: 1; color: rgb(66 66 6=
6/var(--tw-text-opacity)); }

.dark\:text-gray-800:is(.dark *) { --tw-text-opacity: 1; color: rgb(33 33 3=
3/var(--tw-text-opacity)); }

.dark\:text-green-200:is(.dark *) { --tw-text-opacity: 1; color: rgb(185 23=
8 188/var(--tw-text-opacity)); }

.dark\:text-green-400:is(.dark *) { --tw-text-opacity: 1; color: rgb(104 22=
2 122/var(--tw-text-opacity)); }

.dark\:text-orange-100:is(.dark *) { --tw-text-opacity: 1; color: rgb(254 2=
41 227/var(--tw-text-opacity)); }

.dark\:text-red-200:is(.dark *) { --tw-text-opacity: 1; color: rgb(254 202 =
202/var(--tw-text-opacity)); }

.dark\:text-token-main-surface-tertiary:is(.dark *) { color: var(--main-sur=
face-tertiary); }

.dark\:text-token-text-primary:is(.dark *) { color: var(--text-primary); }

.dark\:text-token-text-secondary:is(.dark *) { color: var(--text-secondary)=
; }

.dark\:text-token-text-tertiary:is(.dark *) { color: var(--text-tertiary); =
}

.dark\:text-white:is(.dark *) { --tw-text-opacity: 1; color: rgb(255 255 25=
5/var(--tw-text-opacity)); }

.dark\:text-yellow-100:is(.dark *) { --tw-text-opacity: 1; color: rgb(254 2=
49 195/var(--tw-text-opacity)); }

.dark\:text-yellow-400:is(.dark *) { --tw-text-opacity: 1; color: rgb(255 1=
98 87/var(--tw-text-opacity)); }

.dark\:opacity-60:is(.dark *) { opacity: 0.6; }

.dark\:shadow-\[0_-4px_32px_rgba\(0\,0\,0\,0\.12\)\]:is(.dark *) { --tw-sha=
dow: 0 -4px 32px rgba(0,0,0,.12); --tw-shadow-colored: 0 -4px 32px var(--tw=
-shadow-color); box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw=
-ring-shadow,0 0 #0000),var(--tw-shadow); }

.dark\:shadow-\[inset_0_0_0_1px_rgba\(255\,255\,255\,0\.1\)\]:is(.dark *) {=
 --tw-shadow: inset 0 0 0 1px hsla(0,0%,100%,.1); --tw-shadow-colored: inse=
t 0 0 0 1px var(--tw-shadow-color); box-shadow: var(--tw-ring-offset-shadow=
,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow); }

.dark\:shadow-xl:is(.dark *) { --tw-shadow: 0 20px 25px -5px rgba(0,0,0,.1)=
,0 8px 10px -6px rgba(0,0,0,.1); --tw-shadow-colored: 0 20px 25px -5px var(=
--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color); box-shadow: var(=
--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw=
-shadow); }

.dark\:backdrop-blur-lg:is(.dark *) { --tw-backdrop-blur: blur(16px); backd=
rop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-=
backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotat=
e) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-s=
aturate) var(--tw-backdrop-sepia); }

.placeholder\:dark\:text-white:is(.dark *)::placeholder { --tw-text-opacity=
: 1; color: rgb(255 255 255/var(--tw-text-opacity)); }

.dark\:before\:bg-gray-750\/50:is(.dark *)::before { background-color: rgba=
(47, 47, 47, 0.5); content: var(--tw-content); }

.dark\:after\:bg-\[Highlight\]:is(.dark *)::after { background-color: highl=
ight; content: var(--tw-content); }

.dark\:focus-within\:border-token-border-xheavy:focus-within:is(.dark *) { =
border-color: var(--border-xheavy); }

.dark\:focus-within\:ring-0:focus-within:is(.dark *) { --tw-ring-offset-sha=
dow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-o=
ffset-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(var(--tw-ri=
ng-offset-width)) var(--tw-ring-color); box-shadow: var(--tw-ring-offset-sh=
adow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); }

@media (hover: hover) and (pointer: fine) {
  .dark\:hover\:border-gray-800:hover:is(.dark *) { --tw-border-opacity: 1;=
 border-color: rgb(33 33 33/var(--tw-border-opacity)); }
  .dark\:hover\:bg-\[\#1A416A\]:hover:is(.dark *) { --tw-bg-opacity: 1; bac=
kground-color: rgb(26 65 106/var(--tw-bg-opacity)); }
  .dark\:hover\:bg-\[\#313949\]:hover:is(.dark *) { --tw-bg-opacity: 1; bac=
kground-color: rgb(49 57 73/var(--tw-bg-opacity)); }
  .dark\:hover\:bg-gray-500\/10:hover:is(.dark *) { background-color: rgba(=
156, 156, 156, 0.1); }
  .dark\:hover\:bg-gray-600:hover:is(.dark *) { --tw-bg-opacity: 1; backgro=
und-color: rgb(103 103 103/var(--tw-bg-opacity)); }
  .dark\:hover\:bg-gray-700:hover:is(.dark *) { --tw-bg-opacity: 1; backgro=
und-color: rgb(66 66 66/var(--tw-bg-opacity)); }
  .dark\:hover\:bg-red-500\/15:hover:is(.dark *) { background-color: rgba(2=
39, 68, 68, 0.15); }
  .dark\:hover\:bg-token-main-surface-secondary:hover:is(.dark *) { backgro=
und-color: var(--main-surface-secondary); }
  .dark\:hover\:bg-token-main-surface-tertiary:hover:is(.dark *) { backgrou=
nd-color: var(--main-surface-tertiary); }
  .dark\:hover\:bg-token-text-primary:hover:is(.dark *) { background-color:=
 var(--text-primary); }
  .dark\:hover\:bg-token-text-tertiary:hover:is(.dark *) { background-color=
: var(--text-tertiary); }
  .dark\:hover\:bg-white\/10:hover:is(.dark *) { background-color: rgba(255=
, 255, 255, 0.1); }
  .dark\:hover\:bg-white\/20:hover:is(.dark *) { background-color: rgba(255=
, 255, 255, 0.2); }
  .dark\:hover\:bg-white\/5:hover:is(.dark *) { background-color: rgba(255,=
 255, 255, 0.05); }
  .hover\:dark\:bg-token-main-surface-tertiary:is(.dark *):hover { backgrou=
nd-color: var(--main-surface-tertiary); }
  .hover\:dark\:bg-white:is(.dark *):hover { --tw-bg-opacity: 1; background=
-color: rgb(255 255 255/var(--tw-bg-opacity)); }
  .hover\:dark\:bg-white\/10:is(.dark *):hover { background-color: rgba(255=
, 255, 255, 0.1); }
  .dark\:hover\:bg-opacity-30:hover:is(.dark *) { --tw-bg-opacity: .3; }
  .hover\:dark\:text-token-main-surface-tertiary:is(.dark *):hover { color:=
 var(--main-surface-tertiary); }
}

.dark\:focus\:border-white:focus:is(.dark *) { --tw-border-opacity: 1; bord=
er-color: rgb(255 255 255/var(--tw-border-opacity)); }

.dark\:focus\:ring-white:focus:is(.dark *) { --tw-ring-opacity: 1; --tw-rin=
g-color: rgb(255 255 255/var(--tw-ring-opacity)); }

.dark\:focus-visible\:bg-token-main-surface-secondary:focus-visible:is(.dar=
k *) { background-color: var(--main-surface-secondary); }

.dark\:focus-visible\:outline-white:focus-visible:is(.dark *) { outline-col=
or: rgb(255, 255, 255); }

.focus-visible\:dark\:ring-token-main-surface-primary:is(.dark *):focus-vis=
ible { --tw-ring-color: var(--main-surface-primary); }

.dark\:active\:bg-gray-700:active:is(.dark *) { --tw-bg-opacity: 1; backgro=
und-color: rgb(66 66 66/var(--tw-bg-opacity)); }

.dark\:active\:bg-red-500\/20:active:is(.dark *) { background-color: rgba(2=
39, 68, 68, 0.2); }

.dark\:active\:bg-white\/10:active:is(.dark *) { background-color: rgba(255=
, 255, 255, 0.1); }

.disabled\:dark\:bg-green-600:is(.dark *):disabled { --tw-bg-opacity: 1; ba=
ckground-color: rgb(16 163 127/var(--tw-bg-opacity)); }

.disabled\:dark\:bg-token-text-quaternary:is(.dark *):disabled { background=
-color: var(--text-quaternary); }

.disabled\:dark\:bg-token-text-tertiary:is(.dark *):disabled { background-c=
olor: var(--text-tertiary); }

.disabled\:dark\:bg-opacity-15:is(.dark *):disabled { --tw-bg-opacity: .15;=
 }

.dark\:disabled\:text-token-main-surface-secondary:disabled:is(.dark *) { c=
olor: var(--main-surface-secondary); }

.dark\:radix-disabled\:bg-transparent[data-disabled]:is(.dark *) { backgrou=
nd-color: transparent; }

.dark\:radix-state-active\:bg-token-main-surface-tertiary[data-state=3D"act=
ive"]:is(.dark *) { background-color: var(--main-surface-tertiary); }

.dark\:radix-state-checked\:border-green-600[data-state=3D"checked"]:is(.da=
rk *) { --tw-border-opacity: 1; border-color: rgb(16 163 127/var(--tw-borde=
r-opacity)); }

.dark\:radix-state-checked\:bg-green-600[data-state=3D"checked"]:is(.dark *=
) { --tw-bg-opacity: 1; background-color: rgb(16 163 127/var(--tw-bg-opacit=
y)); }

.focus-visible\:dark\:radix-state-checked\:ring-green-600[data-state=3D"che=
cked"]:is(.dark *):focus-visible { --tw-ring-opacity: 1; --tw-ring-color: r=
gb(16 163 127/var(--tw-ring-opacity)); }

.dark\:radix-state-open\:bg-token-main-surface-secondary[data-state=3D"open=
"]:is(.dark *) { background-color: var(--main-surface-secondary); }

.dark\:radix-state-open\:text-gray-400[data-state=3D"open"]:is(.dark *) { -=
-tw-text-opacity: 1; color: rgb(180 180 180/var(--tw-text-opacity)); }

@media not all and (min-width: 1024px) {
  .max-lg\:bottom-full { bottom: 100%; }
  .max-lg\:hidden { display: none; }
  .group:focus-within .group-focus-within\:max-lg\:flex-col-reverse { flex-=
direction: column-reverse; }
}

@media not all and (min-width: 768px) {
  .max-md\:hidden { display: none; }
  .max-md\:\!w-0 { width: 0px !important; }
}

@media not all and (min-width: 640px) {
  .max-sm\:mb-3 { margin-bottom: 0.75rem; }
  .max-sm\:mb-4 { margin-bottom: 1rem; }
  .max-sm\:hidden { display: none; }
}

@media (min-width: 480px) {
  .xs\:\!max-w-sm { max-width: 24rem !important; }
  .xs\:columns-2 { column-count: 2; }
}

@media (min-width: 640px) {
  .sm\:absolute { position: absolute; }
  .sm\:inset-x-4 { left: 1rem; right: 1rem; }
  .sm\:bottom-snc-1 { bottom: var(--snc-1); }
  [dir=3D"ltr"] .sm\:left-1\/2 { left: 50%; }
  [dir=3D"rtl"] .sm\:left-1\/2 { right: 50%; }
  [dir=3D"ltr"] .sm\:left-6 { left: 1.5rem; }
  [dir=3D"ltr"] .sm\:right-6, [dir=3D"rtl"] .sm\:left-6 { right: 1.5rem; }
  [dir=3D"rtl"] .sm\:right-6 { left: 1.5rem; }
  .sm\:top-6 { top: 1.5rem; }
  .sm\:col-span-2 { grid-column: span 2 / span 2; }
  .sm\:-mx-6 { margin-left: -1.5rem; margin-right: -1.5rem; }
  .sm\:mx-16 { margin-left: 4rem; margin-right: 4rem; }
  .sm\:-mt-12 { margin-top: -3rem; }
  .sm\:mb-0 { margin-bottom: 0px; }
  .sm\:mb-2 { margin-bottom: 0.5rem; }
  .sm\:mb-2\.5 { margin-bottom: 0.625rem; }
  .sm\:mb-3 { margin-bottom: 0.75rem; }
  .sm\:mb-4 { margin-bottom: 1rem; }
  .sm\:mb-6 { margin-bottom: 1.5rem; }
  [dir=3D"ltr"] .sm\:ml-7 { margin-left: 1.75rem; }
  [dir=3D"rtl"] .sm\:ml-7 { margin-right: 1.75rem; }
  .sm\:mt-0 { margin-top: 0px; }
  .sm\:mt-4 { margin-top: 1rem; }
  .sm\:mt-5 { margin-top: 1.25rem; }
  .sm\:mt-auto { margin-top: auto; }
  .sm\:line-clamp-3 { -webkit-box-orient: vertical; -webkit-line-clamp: 3; =
display: -webkit-box; overflow: hidden; }
  .sm\:block { display: block; }
  .sm\:inline-block { display: inline-block; }
  .sm\:flex { display: flex; }
  .sm\:grid { display: grid; }
  .sm\:hidden { display: none; }
  .sm\:h-10 { height: 2.5rem; }
  .sm\:h-32 { height: 8rem; }
  .sm\:h-\[172px\] { height: 172px; }
  .sm\:h-full { height: 100%; }
  .sm\:h-snc-input-height { height: var(--snc-input-height); }
  .sm\:w-10 { width: 2.5rem; }
  .sm\:w-32 { width: 8rem; }
  .sm\:w-\[384px\] { width: 384px; }
  .sm\:w-\[calc\(\(100\%-1rem\)\/4\)\] { width: calc(25% - 0.25rem); }
  .sm\:w-\[calc\(100cqw-62px\)\] { width: calc(100cqw - 62px); }
  .sm\:max-w-100 { max-width: 25rem; }
  .sm\:max-w-2xl { max-width: 42rem; }
  .sm\:max-w-\[400px\] { max-width: 400px; }
  .sm\:max-w-\[552px\] { max-width: 552px; }
  .sm\:max-w-\[700px\] { max-width: 700px; }
  .sm\:max-w-\[calc\(100vw-10rem\)\] { max-width: calc(-10rem + 100vw); }
  .sm\:max-w-xs { max-width: 20rem; }
  .sm\:grow { flex-grow: 1; }
  .sm\:-translate-x-1\/2 { --tw-translate-x: -50%; transform: translate(var=
(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var=
(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var=
(--tw-scale-y)); }
  .sm\:grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }
  .sm\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .sm\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0px, 1fr)); }
  .sm\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0px, 1fr)); }
  .sm\:flex-row { flex-direction: row; }
  .sm\:flex-row-reverse { flex-direction: row-reverse; }
  .sm\:items-center { align-items: center; }
  .sm\:justify-start { justify-content: flex-start; }
  .sm\:justify-center { justify-content: center; }
  .sm\:gap-1 { gap: 0.25rem; }
  .sm\:gap-2 { gap: 0.5rem; }
  .sm\:gap-2\.5 { gap: 0.625rem; }
  .sm\:gap-3 { gap: 0.75rem; }
  .sm\:gap-4 { gap: 1rem; }
  .sm\:gap-6 { gap: 1.5rem; }
  .sm\:gap-x-16 { column-gap: 4rem; }
  .sm\:gap-x-2 { column-gap: 0.5rem; }
  .sm\:gap-x-2\.5 { column-gap: 0.625rem; }
  .sm\:gap-y-0 { row-gap: 0px; }
  .sm\:gap-y-2 { row-gap: 0.5rem; }
  .sm\:gap-y-4 { row-gap: 1rem; }
  .sm\:gap-y-5 { row-gap: 1.25rem; }
  .sm\:overflow-hidden { overflow: hidden; }
  .sm\:rounded-full { border-radius: 9999px; }
  .sm\:rounded-lg { border-radius: 0.5rem; }
  .sm\:rounded-md { border-radius: 0.375rem; }
  .sm\:rounded-t-\[30px\] { border-top-left-radius: 30px; border-top-right-=
radius: 30px; }
  [dir=3D"ltr"] .sm\:rounded-bl-xl { border-bottom-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-br-xl, [dir=3D"rtl"] .sm\:rounded-bl-xl { bord=
er-bottom-right-radius: 0.75rem; }
  [dir=3D"rtl"] .sm\:rounded-br-xl { border-bottom-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-tl-xl { border-top-left-radius: 0.75rem; }
  [dir=3D"ltr"] .sm\:rounded-tr-xl, [dir=3D"rtl"] .sm\:rounded-tl-xl { bord=
er-top-right-radius: 0.75rem; }
  [dir=3D"rtl"] .sm\:rounded-tr-xl { border-top-left-radius: 0.75rem; }
  .sm\:border-none { border-style: none; }
  .sm\:bg-token-main-surface-tertiary { background-color: var(--main-surfac=
e-tertiary); }
  .sm\:p-0 { padding: 0px; }
  .sm\:p-10 { padding: 2.5rem; }
  .sm\:p-2 { padding: 0.5rem; }
  .sm\:p-3 { padding: 0.75rem; }
  .sm\:p-6 { padding: 1.5rem; }
  .sm\:px-0 { padding-left: 0px; padding-right: 0px; }
  .sm\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .sm\:px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
  .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
  .sm\:px-8 { padding-left: 2rem; padding-right: 2rem; }
  .sm\:px-snc-results-padding { padding-left: var(--snc-results-padding); p=
adding-right: var(--snc-results-padding); }
  .sm\:py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }
  .sm\:py-2\.5 { padding-bottom: 0.625rem; padding-top: 0.625rem; }
  .sm\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .sm\:py-6 { padding-bottom: 1.5rem; padding-top: 1.5rem; }
  .sm\:pb-0 { padding-bottom: 0px; }
  .sm\:pb-10 { padding-bottom: 2.5rem; }
  .sm\:pb-6 { padding-bottom: 1.5rem; }
  .sm\:pb-8 { padding-bottom: 2rem; }
  [dir=3D"ltr"] .sm\:pl-3 { padding-left: 0.75rem; }
  [dir=3D"rtl"] .sm\:pl-3 { padding-right: 0.75rem; }
  [dir=3D"ltr"] .sm\:pl-5 { padding-left: 1.25rem; }
  [dir=3D"rtl"] .sm\:pl-5 { padding-right: 1.25rem; }
  [dir=3D"ltr"] .sm\:pl-\[3\.25rem\] { padding-left: 3.25rem; }
  [dir=3D"rtl"] .sm\:pl-\[3\.25rem\] { padding-right: 3.25rem; }
  [dir=3D"ltr"] .sm\:pr-2 { padding-right: 0.5rem; }
  [dir=3D"rtl"] .sm\:pr-2 { padding-left: 0.5rem; }
  [dir=3D"ltr"] .sm\:pr-5 { padding-right: 1.25rem; }
  [dir=3D"rtl"] .sm\:pr-5 { padding-left: 1.25rem; }
  .sm\:pt-12 { padding-top: 3rem; }
  .sm\:pt-4 { padding-top: 1rem; }
  .sm\:pt-8 { padding-top: 2rem; }
  .sm\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
  .sm\:text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
  .sm\:text-6xl { font-size: 3.75rem; line-height: 1; }
  .sm\:text-base { font-size: 1rem; line-height: 1.5rem; }
  .sm\:text-sm { font-size: 0.875rem; line-height: 1.25rem; }
  .sm\:text-token-main-surface-tertiary { color: var(--main-surface-tertiar=
y); }
  .sm\:duration-300 { transition-duration: 0.3s; }
  .sm\:duration-500 { transition-duration: 0.5s; }
  .snc .sm\:text-sm { font-size: 0.9rem; line-height: 1.4; }
  .snc .sm\:text-base { font-size: 1rem; }
  .snc .sm\:text-2xl { font-size: 1.5rem; }
  @supports (min-height:100dvh) {
  .sm\:supports-\[min-height\:100dvh\]\:min-h-\[100dvh\] { min-height: 100d=
vh; }
}
}

@media (min-width: 768px) {
  .md\:sr-only { clip: rect(0px, 0px, 0px, 0px); border-width: 0px; height:=
 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; whi=
te-space: nowrap; width: 1px; }
  .md\:invisible { visibility: hidden; }
  .md\:static { position: static; }
  .md\:absolute { position: absolute; }
  .md\:bottom-4 { bottom: 1rem; }
  [dir=3D"ltr"] .md\:left-\[-250px\] { left: -250px; }
  [dir=3D"rtl"] .md\:left-\[-250px\] { right: -250px; }
  [dir=3D"ltr"] .md\:right-12 { right: 3rem; }
  [dir=3D"rtl"] .md\:right-12 { left: 3rem; }
  [dir=3D"ltr"] .md\:right-6 { right: 1.5rem; }
  [dir=3D"rtl"] .md\:right-6 { left: 1.5rem; }
  .md\:top-6 { top: 1.5rem; }
  .md\:top-\[22px\] { top: 22px; }
  .md\:top-\[5\.75rem\] { top: 5.75rem; }
  .md\:top-header-height { top: 3.5rem; }
  .md\:col-span-1 { grid-column: span 1 / span 1; }
  .md\:col-span-2 { grid-column: span 2 / span 2; }
  .md\:m-0 { margin: 0px; }
  .md\:m-auto { margin: auto; }
  .md\:mx-4 { margin-left: 1rem; margin-right: 1rem; }
  .md\:my-4 { margin-bottom: 1rem; margin-top: 1rem; }
  .md\:mb-0 { margin-bottom: 0px; }
  .md\:mb-10 { margin-bottom: 2.5rem; }
  .md\:mb-2 { margin-bottom: 0.5rem; }
  .md\:mb-3 { margin-bottom: 0.75rem; }
  .md\:mb-4 { margin-bottom: 1rem; }
  .md\:mb-8 { margin-bottom: 2rem; }
  [dir=3D"ltr"] .md\:ml-0 { margin-left: 0px; }
  [dir=3D"rtl"] .md\:ml-0 { margin-right: 0px; }
  [dir=3D"ltr"] .md\:ml-8 { margin-left: 2rem; }
  [dir=3D"rtl"] .md\:ml-8 { margin-right: 2rem; }
  [dir=3D"ltr"] .md\:ml-\[-8px\] { margin-left: -8px; }
  [dir=3D"rtl"] .md\:ml-\[-8px\] { margin-right: -8px; }
  .md\:mt-0 { margin-top: 0px; }
  .md\:mt-2 { margin-top: 0.5rem; }
  .md\:mt-3 { margin-top: 0.75rem; }
  .md\:mt-5 { margin-top: 1.25rem; }
  .md\:mt-7 { margin-top: 1.75rem; }
  .md\:mt-8 { margin-top: 2rem; }
  .md\:mt-px { margin-top: 1px; }
  .md\:line-clamp-3 { -webkit-box-orient: vertical; -webkit-line-clamp: 3; =
display: -webkit-box; overflow: hidden; }
  .md\:block { display: block; }
  .md\:flex { display: flex; }
  .md\:inline-flex { display: inline-flex; }
  .md\:grid { display: grid; }
  .md\:hidden { display: none; }
  .md\:aspect-\[140\/67\] { aspect-ratio: 140 / 67; }
  .md\:h-14 { height: 3.5rem; }
  .md\:h-24 { height: 6rem; }
  .md\:h-32 { height: 8rem; }
  .md\:h-\[30rem\] { height: 30rem; }
  .md\:h-header-height { height: 3.5rem; }
  .md\:max-h-\[80vh\] { max-height: 80vh; }
  .md\:max-h-\[calc\(100vh-300px\)\] { max-height: calc(-300px + 100vh); }
  .md\:min-h-\[20rem\] { min-height: 20rem; }
  .md\:min-h-\[30rem\] { min-height: 30rem; }
  .md\:min-h-\[380px\] { min-height: 380px; }
  .md\:w-1\/2 { width: 50%; }
  .md\:w-1\/3 { width: 33.3333%; }
  .md\:w-24 { width: 6rem; }
  .md\:w-3\/5 { width: 60%; }
  .md\:w-\[100px\] { width: 100px; }
  .md\:w-\[250px\] { width: 250px; }
  .md\:w-\[500px\] { width: 500px; }
  .md\:w-\[720px\] { width: 720px; }
  .md\:w-\[85\%\] { width: 85%; }
  .md\:w-\[calc\(100\%-\.5rem\)\] { width: calc(100% - 0.5rem); }
  .md\:w-\[calc\(100\%-16rem\)\] { width: calc(100% - 16rem); }
  .md\:w-auto { width: auto; }
  .md\:w-full { width: 100%; }
  .md\:min-w-\[180px\] { min-width: 180px; }
  .md\:min-w-\[680px\] { min-width: 680px; }
  .md\:max-w-3xl { max-width: 48rem; }
  .md\:max-w-4xl { max-width: 56rem; }
  .md\:max-w-5xl { max-width: 64rem; }
  .md\:max-w-96 { max-width: 24rem; }
  .md\:max-w-\[672px\] { max-width: 672px; }
  .md\:max-w-\[680px\] { max-width: 680px; }
  .md\:max-w-\[80\%\] { max-width: 80%; }
  .md\:max-w-lg { max-width: 32rem; }
  .md\:max-w-none { max-width: none; }
  .md\:flex-1 { flex: 1 1 0%; }
  .md\:shrink { flex-shrink: 1; }
  .md\:grow-0 { flex-grow: 0; }
  .md\:basis-0 { flex-basis: 0px; }
  .md\:basis-\[25vw\] { flex-basis: 25vw; }
  .md\:basis-\[75vw\] { flex-basis: 75vw; }
  .md\:translate-y-\[30px\] { --tw-translate-y: 30px; transform: translate(=
var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(=
var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(=
var(--tw-scale-y)); }
  .md\:columns-3 { column-count: 3; }
  .md\:grid-cols-1 { grid-template-columns: repeat(1, minmax(0px, 1fr)); }
  .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .md\:grid-rows-1 { grid-template-rows: repeat(1, minmax(0px, 1fr)); }
  .md\:grid-rows-\[minmax\(20px\,_1fr\)_auto_20px\] { grid-template-rows: m=
inmax(20px, 1fr) auto 20px; }
  .md\:grid-rows-\[minmax\(20px\,_1fr\)_auto_minmax\(20px\,_1fr\)\] { grid-=
template-rows: minmax(20px, 1fr) auto minmax(20px, 1fr); }
  .md\:flex-row { flex-direction: row; }
  .md\:flex-row-reverse { flex-direction: row-reverse; }
  .md\:items-start { align-items: flex-start; }
  .md\:items-center { align-items: center; }
  .md\:justify-center { justify-content: center; }
  .md\:justify-between { justify-content: space-between; }
  .md\:gap-0 { gap: 0px; }
  .md\:gap-2 { gap: 0.5rem; }
  .md\:gap-3 { gap: 0.75rem; }
  .md\:gap-5 { gap: 1.25rem; }
  .md\:gap-8 { gap: 2rem; }
  .md\:gap-x-2 { column-gap: 0.5rem; }
  .md\:gap-y-1 { row-gap: 0.25rem; }
  .md\:gap-y-1\.5 { row-gap: 0.375rem; }
  .md\:self-end { align-self: flex-end; }
  .md\:overflow-hidden { overflow: hidden; }
  .md\:overflow-visible { overflow: visible; }
  .md\:whitespace-normal { white-space: normal; }
  .md\:rounded-lg { border-radius: 0.5rem; }
  .md\:rounded-none { border-radius: 0px; }
  .md\:border-b-2 { border-bottom-width: 2px; }
  [dir=3D"ltr"] .md\:border-l { border-left-width: 1px; }
  [dir=3D"ltr"] .md\:border-r, [dir=3D"rtl"] .md\:border-l { border-right-w=
idth: 1px; }
  [dir=3D"rtl"] .md\:border-r { border-left-width: 1px; }
  [dir=3D"ltr"] .md\:border-r-0 { border-right-width: 0px; }
  [dir=3D"rtl"] .md\:border-r-0 { border-left-width: 0px; }
  .md\:border-t-0 { border-top-width: 0px; }
  .md\:border-gray-100 { --tw-border-opacity: 1; border-color: rgb(236 236 =
236/var(--tw-border-opacity)); }
  .md\:border-transparent { border-color: transparent; }
  .md\:\!bg-transparent { background-color: transparent !important; }
  .md\:bg-transparent { background-color: transparent; }
  [dir=3D"ltr"] .md\:bg-vert-light-gradient { background-image: linear-grad=
ient(rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }
  [dir=3D"rtl"] .md\:bg-vert-light-gradient { background-image: linear-grad=
ient(-180deg, rgba(255, 255, 255, 0) 13.94%, rgb(255, 255, 255) 54.73%); }
  .md\:p-20 { padding: 5rem; }
  .md\:p-4 { padding: 1rem; }
  .md\:p-6 { padding: 1.5rem; }
  .md\:px-0 { padding-left: 0px; padding-right: 0px; }
  .md\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .md\:px-12 { padding-left: 3rem; padding-right: 3rem; }
  .md\:px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
  .md\:px-20 { padding-left: 5rem; padding-right: 5rem; }
  .md\:px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
  .md\:px-4 { padding-left: 1rem; padding-right: 1rem; }
  .md\:px-5 { padding-left: 1.25rem; padding-right: 1.25rem; }
  .md\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
  .md\:px-\[60px\] { padding-left: 60px; padding-right: 60px; }
  .md\:py-0 { padding-bottom: 0px; padding-top: 0px; }
  .md\:py-1 { padding-bottom: 0.25rem; padding-top: 0.25rem; }
  .md\:py-1\.5 { padding-bottom: 0.375rem; padding-top: 0.375rem; }
  .md\:py-16 { padding-bottom: 4rem; padding-top: 4rem; }
  .md\:py-2 { padding-bottom: 0.5rem; padding-top: 0.5rem; }
  .md\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .md\:py-4 { padding-bottom: 1rem; padding-top: 1rem; }
  .md\:py-\[22px\] { padding-bottom: 22px; padding-top: 22px; }
  .md\:\!pt-0 { padding-top: 0px !important; }
  .md\:pb-0 { padding-bottom: 0px; }
  .md\:pb-10 { padding-bottom: 2.5rem; }
  .md\:pb-5 { padding-bottom: 1.25rem; }
  .md\:pb-6 { padding-bottom: 1.5rem; }
  .md\:pb-9 { padding-bottom: 2.25rem; }
  [dir=3D"ltr"] .md\:pl-2 { padding-left: 0.5rem; }
  [dir=3D"rtl"] .md\:pl-2 { padding-right: 0.5rem; }
  [dir=3D"ltr"] .md\:pl-4 { padding-left: 1rem; }
  [dir=3D"rtl"] .md\:pl-4 { padding-right: 1rem; }
  [dir=3D"ltr"] .md\:pl-6 { padding-left: 1.5rem; }
  [dir=3D"rtl"] .md\:pl-6 { padding-right: 1.5rem; }
  [dir=3D"ltr"] .md\:pr-3 { padding-right: 0.75rem; }
  [dir=3D"rtl"] .md\:pr-3 { padding-left: 0.75rem; }
  [dir=3D"ltr"] .md\:pr-8 { padding-right: 2rem; }
  [dir=3D"rtl"] .md\:pr-8 { padding-left: 2rem; }
  .md\:ps-0 { padding-inline-start: 0px; }
  .md\:pt-0 { padding-top: 0px; }
  .md\:pt-4 { padding-top: 1rem; }
  .md\:pt-5 { padding-top: 1.25rem; }
  .md\:pt-\[3px\] { padding-top: 3px; }
  .md\:pt-\[4\.5rem\] { padding-top: 4.5rem; }
  [dir=3D"ltr"] .md\:text-left { text-align: left; }
  [dir=3D"rtl"] .md\:text-left { text-align: right; }
  .md\:text-justify { text-align: justify; }
  .md\:text-2xl { font-size: 1.5rem; line-height: 2rem; }
  .md\:text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
  .md\:text-5xl { font-size: 3rem; line-height: 1; }
  .md\:text-7xl { font-size: 4.5rem; line-height: 1; }
  .md\:text-\[32px\] { font-size: 32px; }
  .md\:text-\[40px\] { font-size: 40px; }
  .md\:text-base { font-size: 1rem; line-height: 1.5rem; }
  .md\:text-lg { font-size: 1.125rem; line-height: 1.75rem; }
  .md\:text-xs { font-size: 0.75rem; line-height: 1rem; }
  .md\:leading-8 { line-height: 2rem; }
  .md\:leading-tight { line-height: 1.25; }
  .md\:text-token-text-primary { color: var(--text-primary); }
  .md\:text-token-text-tertiary { color: var(--text-tertiary); }
  .md\:opacity-0 { opacity: 0; }
  .snc .md\:text-xs { font-size: 0.825rem; line-height: 1.4; }
  .snc .md\:text-base { font-size: 1rem; }
  .snc .md\:text-lg { font-size: 1.125rem; }
  .snc .md\:text-2xl { font-size: 1.5rem; }
  .snc .md\:text-3xl { font-size: 1.875rem; }
  [dir=3D"ltr"] .md\:first\:ml-0:first-child { margin-left: 0px; }
  [dir=3D"rtl"] .md\:first\:ml-0:first-child { margin-right: 0px; }
  [dir=3D"ltr"] .md\:first\:rounded-bl-xl:first-child { border-bottom-left-=
radius: 0.75rem; }
  [dir=3D"rtl"] .md\:first\:rounded-bl-xl:first-child { border-bottom-right=
-radius: 0.75rem; }
  [dir=3D"ltr"] .md\:first\:rounded-tl-xl:first-child { border-top-left-rad=
ius: 0.75rem; }
  [dir=3D"rtl"] .md\:first\:rounded-tl-xl:first-child { border-top-right-ra=
dius: 0.75rem; }
  .md\:last\:mb-6:last-child { margin-bottom: 1.5rem; }
  [dir=3D"ltr"] .md\:last\:mr-0:last-child { margin-right: 0px; }
  [dir=3D"rtl"] .md\:last\:mr-0:last-child { margin-left: 0px; }
  [dir=3D"ltr"] .md\:last\:rounded-br-xl:last-child { border-bottom-right-r=
adius: 0.75rem; }
  [dir=3D"rtl"] .md\:last\:rounded-br-xl:last-child { border-bottom-left-ra=
dius: 0.75rem; }
  [dir=3D"ltr"] .md\:last\:rounded-tr-xl:last-child { border-top-right-radi=
us: 0.75rem; }
  [dir=3D"rtl"] .md\:last\:rounded-tr-xl:last-child { border-top-left-radiu=
s: 0.75rem; }
  [dir=3D"ltr"] .md\:last\:border-r:last-child { border-right-width: 1px; }
  [dir=3D"rtl"] .md\:last\:border-r:last-child { border-left-width: 1px; }
  @media (hover: hover) and (pointer: fine) {
  .md\:hover\:bg-gray-50:hover { --tw-bg-opacity: 1; background-color: rgb(=
249 249 249/var(--tw-bg-opacity)); }
}
  .md\:radix-state-active\:bg-token-main-surface-secondary[data-state=3D"ac=
tive"] { background-color: var(--main-surface-secondary); }
  .md\:radix-state-active\:bg-token-main-surface-tertiary[data-state=3D"act=
ive"] { background-color: var(--main-surface-tertiary); }
  .md\:radix-state-active\:text-token-text-primary[data-state=3D"active"] {=
 color: var(--text-primary); }
  .md\:dark\:border-gray-700:is(.dark *) { --tw-border-opacity: 1; border-c=
olor: rgb(66 66 66/var(--tw-border-opacity)); }
  .md\:dark\:border-transparent:is(.dark *) { border-color: transparent; }
  .dark\:md\:bg-transparent:is(.dark *) { background-color: transparent; }
  @media (hover: hover) and (pointer: fine) {
  .dark\:md\:hover\:bg-gray-700:hover:is(.dark *) { --tw-bg-opacity: 1; bac=
kground-color: rgb(66 66 66/var(--tw-bg-opacity)); }
}
}

@media (min-width: 1024px) {
  .lg\:absolute { position: absolute; }
  .lg\:relative { position: relative; }
  .lg\:bottom-0 { bottom: 0px; }
  .lg\:bottom-3 { bottom: 0.75rem; }
  .lg\:bottom-8 { bottom: 2rem; }
  .lg\:end-3 { inset-inline-end: 0.75rem; }
  [dir=3D"ltr"] .lg\:left-0 { left: 0px; }
  [dir=3D"rtl"] .lg\:left-0 { right: 0px; }
  [dir=3D"ltr"] .lg\:left-\[-300px\] { left: -300px; }
  [dir=3D"rtl"] .lg\:left-\[-300px\] { right: -300px; }
  .lg\:top-full { top: 100%; }
  .lg\:-mx-8 { margin-left: -2rem; margin-right: -2rem; }
  .lg\:mx-auto { margin-left: auto; margin-right: auto; }
  [dir=3D"ltr"] .lg\:ml-8 { margin-left: 2rem; }
  [dir=3D"rtl"] .lg\:ml-8 { margin-right: 2rem; }
  .lg\:mt-12 { margin-top: 3rem; }
  .lg\:mt-9 { margin-top: 2.25rem; }
  .lg\:block { display: block; }
  .lg\:flex { display: flex; }
  .lg\:hidden { display: none; }
  .lg\:h-36 { height: 9rem; }
  .lg\:w-3\/5 { width: 60%; }
  .lg\:w-\[300px\] { width: 300px; }
  .lg\:w-\[80\%\] { width: 80%; }
  .lg\:w-auto { width: auto; }
  .lg\:w-full { width: 100%; }
  .lg\:max-w-2xl { max-width: 42rem; }
  .lg\:max-w-52 { max-width: 13rem; }
  .lg\:max-w-\[40rem\] { max-width: 40rem; }
  .lg\:max-w-\[796px\] { max-width: 796px; }
  .lg\:max-w-\[800px\] { max-width: 800px; }
  .lg\:max-w-\[896px\] { max-width: 896px; }
  .lg\:max-w-md { max-width: 28rem; }
  .lg\:max-w-none { max-width: none; }
  .lg\:max-w-sm { max-width: 24rem; }
  .lg\:translate-y-0 { --tw-translate-y: 0px; transform: translate(var(--tw=
-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw=
-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw=
-scale-y)); }
  .lg\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0px, 1fr)); }
  .lg\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0px, 1fr)); }
  .lg\:grid-cols-\[60\%_40\%\] { grid-template-columns: 60% 40%; }
  .lg\:flex-row { flex-direction: row; }
  .lg\:justify-center { justify-content: center; }
  .lg\:justify-between { justify-content: space-between; }
  .lg\:gap-6 { gap: 1.5rem; }
  .lg\:gap-x-3 { column-gap: 0.75rem; }
  .lg\:gap-y-2 { row-gap: 0.5rem; }
  .lg\:gap-y-2\.5 { row-gap: 0.625rem; }
  .lg\:rounded-lg { border-radius: 0.5rem; }
  .lg\:rounded-none { border-radius: 0px; }
  .lg\:border { border-width: 1px; }
  .lg\:border-0 { border-width: 0px; }
  .lg\:border-b-0 { border-bottom-width: 0px; }
  [dir=3D"ltr"] .lg\:border-l { border-left-width: 1px; }
  [dir=3D"ltr"] .lg\:border-r, [dir=3D"rtl"] .lg\:border-l { border-right-w=
idth: 1px; }
  [dir=3D"rtl"] .lg\:border-r { border-left-width: 1px; }
  .lg\:p-0 { padding: 0px; }
  .lg\:p-6 { padding: 1.5rem; }
  .lg\:px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
  .lg\:px-14 { padding-left: 3.5rem; padding-right: 3.5rem; }
  .lg\:px-16 { padding-left: 4rem; padding-right: 4rem; }
  .lg\:px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
  .lg\:px-4 { padding-left: 1rem; padding-right: 1rem; }
  .lg\:px-8 { padding-left: 2rem; padding-right: 2rem; }
  .lg\:py-10 { padding-bottom: 2.5rem; padding-top: 2.5rem; }
  .lg\:py-3 { padding-bottom: 0.75rem; padding-top: 0.75rem; }
  .lg\:py-6 { padding-bottom: 1.5rem; padding-top: 1.5rem; }
  .lg\:py-\[18px\] { padding-bottom: 18px; padding-top: 18px; }
  [dir=3D"ltr"] .lg\:pl-4 { padding-left: 1rem; }
  [dir=3D"rtl"] .lg\:pl-4 { padding-right: 1rem; }
  [dir=3D"ltr"] .lg\:pr-0 { padding-right: 0px; }
  [dir=3D"rtl"] .lg\:pr-0 { padding-left: 0px; }
  [dir=3D"ltr"] .lg\:pr-10 { padding-right: 2.5rem; }
  [dir=3D"rtl"] .lg\:pr-10 { padding-left: 2.5rem; }
  [dir=3D"ltr"] .lg\:pr-4 { padding-right: 1rem; }
  [dir=3D"rtl"] .lg\:pr-4 { padding-left: 1rem; }
  .lg\:pt-32 { padding-top: 8rem; }
  .lg\:pt-8 { padding-top: 2rem; }
  [dir=3D"ltr"] .lg\:text-left { text-align: left; }
  [dir=3D"rtl"] .lg\:text-left { text-align: right; }
  .lg\:text-\[22px\] { font-size: 22px; }
}

@media (min-width: 1200px) {
  .min-\[1200px\]\:hidden { display: none; }
}

@media (min-width: 1280px) {
  [dir=3D"ltr"] .xl\:left-\[-350px\] { left: -350px; }
  [dir=3D"rtl"] .xl\:left-\[-350px\] { right: -350px; }
  .xl\:min-h-44 { min-height: 11rem; }
  .xl\:w-\[350px\] { width: 350px; }
  .xl\:max-w-3xl { max-width: 48rem; }
  .xl\:max-w-4xl { max-width: 56rem; }
  .xl\:max-w-64 { max-width: 16rem; }
  .xl\:max-w-6xl { max-width: 72rem; }
  .xl\:max-w-\[48rem\] { max-width: 48rem; }
  .xl\:max-w-xl { max-width: 36rem; }
  .xl\:max-w-xs { max-width: 20rem; }
  .xl\:gap-2 { gap: 0.5rem; }
  .xl\:gap-x-2 { column-gap: 0.5rem; }
  .xl\:gap-x-2\.5 { column-gap: 0.625rem; }
  .xl\:gap-y-2 { row-gap: 0.5rem; }
  .xl\:gap-y-2\.5 { row-gap: 0.625rem; }
  .xl\:px-24 { padding-left: 6rem; padding-right: 6rem; }
  .xl\:px-5 { padding-left: 1.25rem; padding-right: 1.25rem; }
  .xl\:pt-10 { padding-top: 2.5rem; }
  .xl\:text-\[14px\] { font-size: 14px; }
}

@media (min-width: 1536px) {
  [dir=3D"ltr"] .\32 xl\:left-\[-400px\] { left: -400px; }
  [dir=3D"rtl"] .\32 xl\:left-\[-400px\] { right: -400px; }
  .\32 xl\:w-\[400px\] { width: 400px; }
  .\32 xl\:max-w-\[800px\] { max-width: 800px; }
  .\32 xl\:pt-12 { padding-top: 3rem; }
  .\32 xl\:text-xl { line-height: 1.75rem; }
  .\32 xl\:text-xl, .snc .\32 xl\:text-xl { font-size: 1.25rem; }
}

.ltr\:right-0:where([dir=3D"ltr"], [dir=3D"ltr"] *) { right: 0px; }

.ltr\:mr-auto:where([dir=3D"ltr"], [dir=3D"ltr"] *) { margin-right: auto; }

.ltr\:-translate-x-1\/2:where([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-transl=
ate-x: -50%; transform: translate(var(--tw-translate-x),var(--tw-translate-=
y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y))=
 scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.ltr\:translate-x-0:where([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-translate-=
x: 0px; transform: translate(var(--tw-translate-x),var(--tw-translate-y)) r=
otate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scal=
eX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.ltr\:translate-x-0\.5:where([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-transla=
te-x: .125rem; transform: translate(var(--tw-translate-x),var(--tw-translat=
e-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y=
)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.ltr\:-rotate-90:where([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-rotate: -90de=
g; transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate=
(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(va=
r(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.ltr\:bg-gradient-to-l:where([dir=3D"ltr"], [dir=3D"ltr"] *) { background-i=
mage: linear-gradient(to left,var(--tw-gradient-stops)); }

.ltr\:radix-state-checked\:translate-x-\[13px\][data-state=3D"checked"]:whe=
re([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-translate-x: 13px; transform: tra=
nslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)=
) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) =
scaleY(var(--tw-scale-y)); }

.ltr\:radix-state-checked\:translate-x-\[14px\][data-state=3D"checked"]:whe=
re([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-translate-x: 14px; transform: tra=
nslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)=
) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) =
scaleY(var(--tw-scale-y)); }

.ltr\:radix-state-checked\:translate-x-\[24px\][data-state=3D"checked"]:whe=
re([dir=3D"ltr"], [dir=3D"ltr"] *) { --tw-translate-x: 24px; transform: tra=
nslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)=
) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) =
scaleY(var(--tw-scale-y)); }

.rtl\:left-0:where([dir=3D"rtl"], [dir=3D"rtl"] *) { left: 0px; }

.rtl\:ml-auto:where([dir=3D"rtl"], [dir=3D"rtl"] *) { margin-left: auto; }

.rtl\:-translate-x-0:where([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-translate=
-x: -0px; transform: translate(var(--tw-translate-x),var(--tw-translate-y))=
 rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) sc=
aleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rtl\:-translate-x-0\.5:where([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-transl=
ate-x: -.125rem; transform: translate(var(--tw-translate-x),var(--tw-transl=
ate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew=
-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rtl\:translate-x-1\/2:where([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-transla=
te-x: 50%; transform: translate(var(--tw-translate-x),var(--tw-translate-y)=
) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) s=
caleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rtl\:rotate-90:where([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-rotate: 90deg;=
 transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(v=
ar(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(=
--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rtl\:-scale-x-100:where([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-scale-x: -1=
; transform: translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(=
var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var=
(--tw-scale-x)) scaleY(var(--tw-scale-y)); }

.rtl\:items-start:where([dir=3D"rtl"], [dir=3D"rtl"] *) { align-items: flex=
-start; }

.rtl\:bg-gradient-to-r:where([dir=3D"rtl"], [dir=3D"rtl"] *) { background-i=
mage: linear-gradient(to right,var(--tw-gradient-stops)); }

.rtl\:radix-state-checked\:translate-x-\[-13px\][data-state=3D"checked"]:wh=
ere([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-translate-x: -13px; transform: t=
ranslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotat=
e)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)=
) scaleY(var(--tw-scale-y)); }

.rtl\:radix-state-checked\:translate-x-\[-14px\][data-state=3D"checked"]:wh=
ere([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-translate-x: -14px; transform: t=
ranslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotat=
e)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)=
) scaleY(var(--tw-scale-y)); }

.rtl\:radix-state-checked\:translate-x-\[-24px\][data-state=3D"checked"]:wh=
ere([dir=3D"rtl"], [dir=3D"rtl"] *) { --tw-translate-x: -24px; transform: t=
ranslate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotat=
e)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)=
) scaleY(var(--tw-scale-y)); }

.\[\&\&\]\:text-black.\[\&\&\]\:text-black { --tw-text-opacity: 1; color: r=
gb(0 0 0/var(--tw-text-opacity)); }

.\[\&\&\]\:underline.\[\&\&\]\:underline { text-decoration-line: underline;=
 }

@media (hover: hover) and (pointer: fine) {
  .\[\&\&\]\:hover\:text-black:hover.\[\&\&\]\:hover\:text-black:hover { --=
tw-text-opacity: 1; color: rgb(0 0 0/var(--tw-text-opacity)); }
}

.\[\&\&\]\:dark\:text-white:is(.dark *).\[\&\&\]\:dark\:text-white:is(.dark=
 *) { --tw-text-opacity: 1; color: rgb(255 255 255/var(--tw-text-opacity));=
 }

@media (hover: hover) and (pointer: fine) {
  .\[\&\&\]\:hover\:dark\:text-white:is(.dark *):hover.\[\&\&\]\:hover\:dar=
k\:text-white:is(.dark *):hover { --tw-text-opacity: 1; color: rgb(255 255 =
255/var(--tw-text-opacity)); }
}

.\[\&\:\:-webkit-search-cancel-button\]\:hidden::-webkit-search-cancel-butt=
on { display: none; }

.\[\&\:not\(\:first-child\)\]\:has-\[strong\]\:mt-3:has(strong):not(:first-=
child) { margin-top: 0.75rem; }

.\[\&\:not\(\:has\(strong\)\)\]\:mb-3:not(:has(strong)) { margin-bottom: 0.=
75rem; }

.\[\&\:not\(\:has\(strong\)\)\]\:mb-\[18px\]:not(:has(strong)) { margin-bot=
tom: 18px; }

.\[\&\>div\:nth-child\(2\)\]\:overflow-y-hidden > div:nth-child(2) { overfl=
ow-y: hidden; }

.\[\&_path\]\:stroke-current path { stroke: currentcolor; }

.\[\&_svg\]\:h-full svg { height: 100%; }

.\[\&_svg\]\:w-full svg { width: 100%; }

.\[\&_tr\:last-child\]\:border-b-0 tr:last-child { border-bottom-width: 0px=
; }

.group\/conversation-turn:hover .\[\.group\\\/conversation-turn\:hover_\&\]=
\:block { display: block; }

.text-message + .\[\.text-message\+\&\]\:mt-5 { margin-top: 1.25rem; }

tr:last-child .\[tr\:last-child_\&\]\:border-b-0 { border-bottom-width: 0px=
; }

tr[data-disabled=3D"true"] .\[tr\[data-disabled\=3Dtrue\]_\&\]\:opacity-50 =
{ opacity: 0.5; }

code, pre { font-family: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Co=
nsolas, "Liberation Mono", monospace !important; }

code[class=3D"language-plaintext"] { white-space: pre-line; }

code.hljs, code[class*=3D"language-"], pre[class*=3D"language-"] { overflow=
-wrap: normal; background: none; hyphens: none; line-height: 1.5; tab-size:=
 4; white-space: pre; word-break: normal; word-spacing: normal; }

[dir=3D"ltr"] code.hljs, [dir=3D"ltr"] code[class*=3D"language-"], [dir=3D"=
ltr"] pre[class*=3D"language-"] { text-align: left; }

[dir=3D"rtl"] code.hljs, [dir=3D"rtl"] code[class*=3D"language-"], [dir=3D"=
rtl"] pre[class*=3D"language-"] { text-align: right; }

pre[class*=3D"language-"] { border-radius: 0.3em; overflow: auto; }

:not(pre) > code.hljs, :not(pre) > code[class*=3D"language-"] { border-radi=
us: 0.3em; padding: 0.1em; white-space: normal; }

.dark code.hljs, .dark code[class*=3D"language-"], .dark pre[class*=3D"lang=
uage-"] { color: rgb(255, 255, 255); }

.dark .hljs-comment { color: rgba(255, 255, 255, 0.5); }

.dark .hljs-meta { color: rgba(255, 255, 255, 0.6); }

.dark .hljs-built_in, .dark .hljs-class .hljs-title { color: rgb(233, 149, =
12); }

.dark .hljs-doctag, .dark .hljs-formula, .dark .hljs-keyword, .dark .hljs-l=
iteral { color: rgb(46, 149, 211); }

.dark .hljs-addition, .dark .hljs-attribute, .dark .hljs-meta-string, .dark=
 .hljs-regexp, .dark .hljs-string { color: rgb(0, 166, 125); }

.dark .hljs-attr, .dark .hljs-number, .dark .hljs-selector-attr, .dark .hlj=
s-selector-class, .dark .hljs-selector-pseudo, .dark .hljs-template-variabl=
e, .dark .hljs-type, .dark .hljs-variable { color: rgb(223, 48, 121); }

.dark .hljs-bullet, .dark .hljs-link, .dark .hljs-selector-id, .dark .hljs-=
symbol, .dark .hljs-title { color: rgb(242, 44, 61); }

.light code.hljs, .light code[class*=3D"language-"], .light pre[class*=3D"l=
anguage-"] { color: rgb(56, 58, 66); }

.light .hljs-comment, .light .hljs-quote { color: rgb(160, 161, 167); font-=
style: italic; }

.light .hljs-doctag, .light .hljs-formula, .light .hljs-keyword { color: rg=
b(166, 38, 164); }

.light .hljs-deletion, .light .hljs-name, .light .hljs-section, .light .hlj=
s-selector-tag, .light .hljs-subst { color: rgb(228, 86, 73); }

.light .hljs-literal { color: rgb(1, 132, 187); }

.light .hljs-addition, .light .hljs-attribute, .light .hljs-meta-string, .l=
ight .hljs-regexp, .light .hljs-string { color: rgb(80, 161, 79); }

.light .hljs-built_in, .light .hljs-class .hljs-title { color: rgb(193, 132=
, 1); }

.light .hljs-attr, .light .hljs-number, .light .hljs-selector-attr, .light =
.hljs-selector-class, .light .hljs-selector-pseudo, .light .hljs-template-v=
ariable, .light .hljs-type, .light .hljs-variable { color: rgb(152, 104, 1)=
; }

.light .hljs-bullet, .light .hljs-link, .light .hljs-meta, .light .hljs-sel=
ector-id, .light .hljs-symbol, .light .hljs-title { color: rgb(64, 120, 242=
); }

.light .hljs-emphasis { font-style: italic; }

.light .hljs-strong { font-weight: 700; }

.light .hljs-link { text-decoration: underline; }

.token.cdata, .token.comment, .token.doctype, .token.prolog { color: rgb(16=
9, 174, 193); }

.token.punctuation { color: rgb(254, 254, 254); }

.token.constant, .token.deleted, .token.property, .token.symbol, .token.tag=
 { color: rgb(255, 160, 122); }

.token.boolean, .token.number { color: rgb(0, 224, 224); }

.token.attr-name, .token.builtin, .token.char, .token.inserted, .token.sele=
ctor, .token.string { color: rgb(171, 227, 56); }

.language-css .token.string, .style .token.string, .token.entity, .token.op=
erator, .token.url, .token.variable { color: rgb(0, 224, 224); }

.token.atrule, .token.attr-value, .token.function { color: gold; }

.token.keyword { color: rgb(0, 224, 224); }

.token.important, .token.regex { color: gold; }

.token.bold, .token.important { font-weight: 700; }

.token.italic { font-style: italic; }

.token.entity { cursor: help; }

@media screen and (-ms-high-contrast:active) {
  code[class*=3D"language-"], pre[class*=3D"language-"] { background: windo=
w; color: windowtext; }
  :not(pre) > code[class*=3D"language-"], pre[class*=3D"language-"] { backg=
round: window; }
  .token.important { background: highlight; color: window; font-weight: 400=
; }
  .token.atrule, .token.attr-value, .token.function, .token.keyword, .token=
.operator, .token.selector { font-weight: 700; }
  .token.attr-value, .token.comment, .token.doctype, .token.function, .toke=
n.keyword, .token.operator, .token.property, .token.string { color: highlig=
ht; }
  .token.attr-value, .token.url { font-weight: 400; }
}

.PopoverContent { z-index: 1000; }

.react-select-container input:focus { --tw-ring-offset-shadow: var(--tw-rin=
g-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color); --t=
w-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(var(--tw-ring-offset-width))=
 var(--tw-ring-color); box-shadow: var(--tw-ring-offset-shadow),var(--tw-ri=
ng-shadow),var(--tw-shadow,0 0 #0000); }

.react-select-container .react-select__control { --tw-border-opacity: 1; al=
ign-items: flex-start; border-color: rgb(236 236 236/var(--tw-border-opacit=
y)); border-radius: 0.5rem; font-size: 0.875rem; height: 192px; line-height=
: 1.25rem; min-height: 192px; overflow: auto; padding: 0.5rem; }

.snc .react-select-container .react-select__control { font-size: 0.9rem; li=
ne-height: 1.4; }

@media (hover: hover) and (pointer: fine) {
  .react-select-container .react-select__control:hover { --tw-border-opacit=
y: 1; border-color: rgb(227 227 227/var(--tw-border-opacity)); }
}

.react-select-container .react-select__control:is(.dark *) { --tw-bg-opacit=
y: 1; background-color: rgb(23 23 23/var(--tw-bg-opacity)); border-color: r=
gba(255, 255, 255, 0.1); }

@media (hover: hover) and (pointer: fine) {
  .react-select-container .react-select__control:is(.dark *):hover { border=
-color: rgba(255, 255, 255, 0.2); }
}

.react-select-container.react-select--invalid .react-select__control { --tw=
-border-opacity: 1; border-color: rgb(239 68 68/var(--tw-border-opacity)); =
}

.react-select-container.react-select--invalid .react-select__control:is(.da=
rk *) { --tw-border-opacity: 1; border-color: rgb(239 68 68/var(--tw-border=
-opacity)); }

.react-select-container .react-select__placeholder { padding-left: 0.5rem; =
padding-right: 0.5rem; }

.react-select-container .react-select__input-container { color: var(--text-=
secondary); padding-left: 0.5rem; padding-right: 0.5rem; }

.react-select-container .react-select__input { height: 2rem; }

.react-select-container .react-select__control--is-focused { --tw-ring-offs=
et-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-=
ring-offset-color); --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(var(-=
-tw-ring-offset-width)) var(--tw-ring-color); box-shadow: var(--tw-ring-off=
set-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000); --tw-border-o=
pacity: 1 !important; border-color: rgb(227 227 227/var(--tw-border-opacity=
)) !important; }

.react-select-container .react-select__control--is-focused:is(.dark *) { bo=
rder-color: rgba(255, 255, 255, 0.2) !important; }

.react-select-container .react-select__value-container { padding: 0px; }

.react-select-container .react-select__indicators:empty { display: none; }

.react-select-container .react-select__multi-value { background-color: tran=
sparent; margin: 0px; }

.react-select-container .react-select__multi-value__label { padding: 0px; }

#intercom-container { display: none; }
------Daniela Mahecha ----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: https://cdn.oaistatic.com/assets/conversation-small-ile61fj8.css

@charset "utf-8";

@keyframes _add-top-shadow_9ia9b_1 {=20
  0% { border-bottom: 1px solid transparent; }
  1%, 100% { border-bottom: 1px solid var(--border-sharp); }
}

._leadingBar_9ia9b_1 { animation: auto linear 0s 1 normal both running _add=
-top-shadow_9ia9b_1; }

._leadingBarScrollAnimation_9ia9b_17 { animation-timeline: scroll(); }

._primary_9ia9b_21 { background-color: var(--bar-background-color,var(--mai=
n-surface-primary)); }

._prosemirror-parent_15ceg_1 .ProseMirror[contenteditable] { outline: trans=
parent solid 0px; outline-offset: 2px; }

._prosemirror-parent_15ceg_1 .ProseMirror { overflow-wrap: break-word; font=
-variant-ligatures: none; margin-bottom: 0.5rem; margin-top: 0.5rem; paddin=
g-left: 0px; padding-right: 0px; white-space: break-spaces; }

._prosemirror-parent_15ceg_1.ProseMirror br { line-height: normal; }

._prosemirror-parent_15ceg_1.default-browser .placeholder::after { --tw-con=
tent: attr(data-placeholder); color: var(--text-secondary); content: var(--=
tw-content); cursor: text; pointer-events: none; position: relative; }

._prosemirror-parent_15ceg_1.default-browser .placeholder .ProseMirror-trai=
lingBreak { display: none !important; }

._prosemirror-parent_15ceg_1.firefox .placeholder::before { --tw-content: a=
ttr(data-placeholder); color: var(--text-secondary); content: var(--tw-cont=
ent); cursor: text; pointer-events: none; position: absolute; }

._prosemirror-parent_15ceg_1 p { white-space: pre-wrap; }

._prosemirror-parent_15ceg_1 .ProseMirror-separator { display: none !import=
ant; }

.active-view-transition.close-thread-sidebar, .active-view-transition.open-=
thread-sidebar { --vt_model_picker: model-picker; --vt_share_chat_wide_butt=
on: share-chat-wide-button; --vt_share_chat_compact_button: share-chat-comp=
act-button; --vt_thread_tools: thread-tools; --thread-extended-info-transit=
ion-name: thread-extended-info; --vt-disable-screen-column-transition: none=
; --vt_toggle_sidebar_opened: toggle-sidebar-icon-opened; --vt_toggle_sideb=
ar_closed: toggle-sidebar-icon-closed; --vt-thread-header-open-canvas: open=
-canvas-button; --vt-composer-speech-button: composer-speech-button; --vt_n=
ew_chat_thread: new-chat-thread; --vt-profile-avatar-thread: profile-avatar=
-active; }

@media (prefers-reduced-motion: reduce) {
  .active-view-transition.close-thread-sidebar::view-transition, .active-vi=
ew-transition.open-thread-sidebar::view-transition { display: none; }
}

.active-view-transition.close-thread-sidebar::view-transition-group(*), .ac=
tive-view-transition.close-thread-sidebar::view-transition-new(*), .active-=
view-transition.close-thread-sidebar::view-transition-old(*), .active-view-=
transition.open-thread-sidebar::view-transition-group(*), .active-view-tran=
sition.open-thread-sidebar::view-transition-new(*), .active-view-transition=
.open-thread-sidebar::view-transition-old(*) { animation-duration: var(--vt=
-duration,.3s); animation-timing-function: var(--vt-timing-function,var(--s=
pring-common)); }

.active-view-transition.close-thread-sidebar::view-transition-old(composer-=
speech-button), .active-view-transition.close-thread-sidebar::view-transiti=
on-old(model-picker), .active-view-transition.close-thread-sidebar::view-tr=
ansition-old(open-canvas-button), .active-view-transition.close-thread-side=
bar::view-transition-old(share-chat-compact-button), .active-view-transitio=
n.close-thread-sidebar::view-transition-old(share-chat-wide-button), .activ=
e-view-transition.close-thread-sidebar::view-transition-old(thread-tools), =
.active-view-transition.close-thread-sidebar::view-transition-old(toggle-si=
debar-icon), .active-view-transition.open-thread-sidebar::view-transition-o=
ld(composer-speech-button), .active-view-transition.open-thread-sidebar::vi=
ew-transition-old(model-picker), .active-view-transition.open-thread-sideba=
r::view-transition-old(open-canvas-button), .active-view-transition.open-th=
read-sidebar::view-transition-old(share-chat-compact-button), .active-view-=
transition.open-thread-sidebar::view-transition-old(share-chat-wide-button)=
, .active-view-transition.open-thread-sidebar::view-transition-old(thread-t=
ools), .active-view-transition.open-thread-sidebar::view-transition-old(tog=
gle-sidebar-icon) { display: none; }

.active-view-transition.close-thread-sidebar::view-transition-new(composer-=
speech-button), .active-view-transition.close-thread-sidebar::view-transiti=
on-new(model-picker), .active-view-transition.close-thread-sidebar::view-tr=
ansition-new(open-canvas-button), .active-view-transition.close-thread-side=
bar::view-transition-new(share-chat-compact-button), .active-view-transitio=
n.close-thread-sidebar::view-transition-new(share-chat-wide-button), .activ=
e-view-transition.close-thread-sidebar::view-transition-new(thread-tools), =
.active-view-transition.close-thread-sidebar::view-transition-old(toggle-si=
debar-icon), .active-view-transition.open-thread-sidebar::view-transition-n=
ew(composer-speech-button), .active-view-transition.open-thread-sidebar::vi=
ew-transition-new(model-picker), .active-view-transition.open-thread-sideba=
r::view-transition-new(open-canvas-button), .active-view-transition.open-th=
read-sidebar::view-transition-new(share-chat-compact-button), .active-view-=
transition.open-thread-sidebar::view-transition-new(share-chat-wide-button)=
, .active-view-transition.open-thread-sidebar::view-transition-new(thread-t=
ools), .active-view-transition.open-thread-sidebar::view-transition-old(tog=
gle-sidebar-icon) { animation: auto ease 0s 1 normal none running none; hei=
ght: 100%; }

.active-view-transition.close-thread-sidebar::view-transition-group(profile=
-avatar-active), .active-view-transition.open-thread-sidebar::view-transiti=
on-group(profile-avatar-active) { animation: auto ease 0s 1 normal none run=
ning none; z-index: 2; }

.active-view-transition.close-thread-sidebar::view-transition-new(profile-a=
vatar-active), .active-view-transition.open-thread-sidebar::view-transition=
-new(profile-avatar-active) { animation: auto ease 0s 1 normal none running=
 none; }

.active-view-transition.close-thread-sidebar::view-transition-new(thread-ex=
tended-info), .active-view-transition.close-thread-sidebar::view-transition=
-old(thread-extended-info), .active-view-transition.open-thread-sidebar::vi=
ew-transition-new(thread-extended-info), .active-view-transition.open-threa=
d-sidebar::view-transition-old(thread-extended-info) { height: 100%; object=
-fit: none; overflow: clip; }

.active-view-transition.close-thread-sidebar::view-transition-new(thread), =
.active-view-transition.close-thread-sidebar::view-transition-old(thread), =
.active-view-transition.open-thread-sidebar::view-transition-new(thread), .=
active-view-transition.open-thread-sidebar::view-transition-old(thread) { h=
eight: 100%; object-fit: none; overflow: clip; }

.active-view-transition.open-thread-sidebar::view-transition-old(thread-ext=
ended-info) { display: none; }

.active-view-transition.close-thread-sidebar::view-transition-new(thread-ex=
tended-info) { display: none; }

.active-view-transition.pin-sidebar, .active-view-transition.unpin-sidebar =
{ --vt_model_picker: model-picker; --vt_share_chat_wide_button: share-chat-=
wide-button; --vt_share_chat_compact_button: share-chat-compact-button; --v=
t_thread_tools: thread-tools; --vt-thread-header-open-canvas: open-canvas-b=
utton; --vt-composer-speech-button: composer-speech-button; }

@media (prefers-reduced-motion: reduce) {
  .active-view-transition.pin-sidebar::view-transition, .active-view-transi=
tion.unpin-sidebar::view-transition { display: none; }
}

.active-view-transition.pin-sidebar::view-transition-group(*), .active-view=
-transition.pin-sidebar::view-transition-new(*), .active-view-transition.pi=
n-sidebar::view-transition-old(*), .active-view-transition.unpin-sidebar::v=
iew-transition-group(*), .active-view-transition.unpin-sidebar::view-transi=
tion-new(*), .active-view-transition.unpin-sidebar::view-transition-old(*) =
{ animation-duration: var(--vt-duration,.3s); animation-timing-function: va=
r(--vt-timing-function,var(--spring-common)); }

.active-view-transition.pin-sidebar::view-transition-old(composer-speech-bu=
tton), .active-view-transition.pin-sidebar::view-transition-old(model-picke=
r), .active-view-transition.pin-sidebar::view-transition-old(open-canvas-bu=
tton), .active-view-transition.pin-sidebar::view-transition-old(share-chat-=
compact-button), .active-view-transition.pin-sidebar::view-transition-old(s=
hare-chat-wide-button), .active-view-transition.pin-sidebar::view-transitio=
n-old(thread-tools), .active-view-transition.pin-sidebar::view-transition-o=
ld(toggle-sidebar-icon), .active-view-transition.unpin-sidebar::view-transi=
tion-old(composer-speech-button), .active-view-transition.unpin-sidebar::vi=
ew-transition-old(model-picker), .active-view-transition.unpin-sidebar::vie=
w-transition-old(open-canvas-button), .active-view-transition.unpin-sidebar=
::view-transition-old(share-chat-compact-button), .active-view-transition.u=
npin-sidebar::view-transition-old(share-chat-wide-button), .active-view-tra=
nsition.unpin-sidebar::view-transition-old(thread-tools), .active-view-tran=
sition.unpin-sidebar::view-transition-old(toggle-sidebar-icon) { display: n=
one; }

.active-view-transition.pin-sidebar::view-transition-new(composer-speech-bu=
tton), .active-view-transition.pin-sidebar::view-transition-new(model-picke=
r), .active-view-transition.pin-sidebar::view-transition-new(open-canvas-bu=
tton), .active-view-transition.pin-sidebar::view-transition-new(share-chat-=
compact-button), .active-view-transition.pin-sidebar::view-transition-new(s=
hare-chat-wide-button), .active-view-transition.pin-sidebar::view-transitio=
n-new(thread-tools), .active-view-transition.pin-sidebar::view-transition-o=
ld(toggle-sidebar-icon), .active-view-transition.unpin-sidebar::view-transi=
tion-new(composer-speech-button), .active-view-transition.unpin-sidebar::vi=
ew-transition-new(model-picker), .active-view-transition.unpin-sidebar::vie=
w-transition-new(open-canvas-button), .active-view-transition.unpin-sidebar=
::view-transition-new(share-chat-compact-button), .active-view-transition.u=
npin-sidebar::view-transition-new(share-chat-wide-button), .active-view-tra=
nsition.unpin-sidebar::view-transition-new(thread-tools), .active-view-tran=
sition.unpin-sidebar::view-transition-old(toggle-sidebar-icon) { animation:=
 auto ease 0s 1 normal none running none; height: 100%; }

.active-view-transition.pin-sidebar::view-transition-old(sidebar), .active-=
view-transition.unpin-sidebar::view-transition-old(sidebar) { display: none=
; }

.active-view-transition.pin-sidebar::view-transition-new(sidebar), .active-=
view-transition.unpin-sidebar::view-transition-new(sidebar) { animation: au=
to ease 0s 1 normal none running none; }

.active-view-transition.pin-sidebar::view-transition-old(thread), .active-v=
iew-transition.unpin-sidebar::view-transition-old(thread) { display: none; =
}

.active-view-transition.pin-sidebar::view-transition-new(thread), .active-v=
iew-transition.pin-sidebar::view-transition-old(thread), .active-view-trans=
ition.unpin-sidebar::view-transition-new(thread), .active-view-transition.u=
npin-sidebar::view-transition-old(thread) { animation: auto ease 0s 1 norma=
l none running none; height: 100%; object-fit: none; overflow: clip; }

.active-view-transition.pin-sidebar::view-transition-old(sidebar-floating),=
 .active-view-transition.unpin-sidebar::view-transition-old(sidebar-floatin=
g) { display: none; }

.active-view-transition.pin-sidebar::view-transition-new(sidebar-floating),=
 .active-view-transition.unpin-sidebar::view-transition-new(sidebar-floatin=
g) { animation: auto ease 0s 1 normal none running none; }

.active-view-transition.pin-sidebar { --vt_toggle_sidebar_pinned: toggle-si=
debar-icon; }

.active-view-transition.unpin-sidebar { --vt_toggle_sidebar_floating: sideb=
ar-floating-button; }

.active-view-transition.close-sidebar, .active-view-transition.open-sidebar=
 { --vt_share_chat_wide_button: share-chat-wide-button; --vt_share_chat_com=
pact_button: share-chat-compact-button; --vt_thread_tools: thread-tools; --=
vt-disable-sidebar-transition: none; --vt-disable-screen-column-transition:=
 none; --vt-thread-header-open-canvas: open-canvas-button; --vt-composer-sp=
eech-button: composer-speech-button; }

@media (prefers-reduced-motion: reduce) {
  .active-view-transition.close-sidebar::view-transition, .active-view-tran=
sition.open-sidebar::view-transition { display: none; }
}

.active-view-transition.close-sidebar::view-transition-old(composer-speech-=
button), .active-view-transition.close-sidebar::view-transition-old(model-p=
icker), .active-view-transition.close-sidebar::view-transition-old(open-can=
vas-button), .active-view-transition.close-sidebar::view-transition-old(sha=
re-chat-compact-button), .active-view-transition.close-sidebar::view-transi=
tion-old(share-chat-wide-button), .active-view-transition.close-sidebar::vi=
ew-transition-old(thread-tools), .active-view-transition.open-sidebar::view=
-transition-old(composer-speech-button), .active-view-transition.open-sideb=
ar::view-transition-old(model-picker), .active-view-transition.open-sidebar=
::view-transition-old(open-canvas-button), .active-view-transition.open-sid=
ebar::view-transition-old(share-chat-compact-button), .active-view-transiti=
on.open-sidebar::view-transition-old(share-chat-wide-button), .active-view-=
transition.open-sidebar::view-transition-old(thread-tools) { display: none;=
 }

.active-view-transition.close-sidebar::view-transition-new(composer-speech-=
button), .active-view-transition.close-sidebar::view-transition-new(model-p=
icker), .active-view-transition.close-sidebar::view-transition-new(open-can=
vas-button), .active-view-transition.close-sidebar::view-transition-new(sha=
re-chat-compact-button), .active-view-transition.close-sidebar::view-transi=
tion-new(share-chat-wide-button), .active-view-transition.close-sidebar::vi=
ew-transition-new(thread-tools), .active-view-transition.open-sidebar::view=
-transition-new(composer-speech-button), .active-view-transition.open-sideb=
ar::view-transition-new(model-picker), .active-view-transition.open-sidebar=
::view-transition-new(open-canvas-button), .active-view-transition.open-sid=
ebar::view-transition-new(share-chat-compact-button), .active-view-transiti=
on.open-sidebar::view-transition-new(share-chat-wide-button), .active-view-=
transition.open-sidebar::view-transition-new(thread-tools) { animation: aut=
o ease 0s 1 normal none running none; height: 100%; }

.active-view-transition.close-sidebar::view-transition-group(*), .active-vi=
ew-transition.close-sidebar::view-transition-new(*), .active-view-transitio=
n.close-sidebar::view-transition-old(*), .active-view-transition.open-sideb=
ar::view-transition-group(*), .active-view-transition.open-sidebar::view-tr=
ansition-new(*), .active-view-transition.open-sidebar::view-transition-old(=
*) { animation-duration: var(--vt-duration,.3s); animation-timing-function:=
 var(--vt-timing-function,var(--spring-common)); }

.active-view-transition.close-sidebar::view-transition-group(profile-avatar=
-hidden), .active-view-transition.open-sidebar::view-transition-group(profi=
le-avatar-hidden) { display: none; }

.active-view-transition.close-sidebar::view-transition-group(profile-avatar=
-active), .active-view-transition.open-sidebar::view-transition-group(profi=
le-avatar-active) { animation: auto ease 0s 1 normal none running none; z-i=
ndex: 2; }

.active-view-transition.close-sidebar::view-transition-new(profile-avatar-a=
ctive), .active-view-transition.open-sidebar::view-transition-new(profile-a=
vatar-active) { animation: auto ease 0s 1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-group(profile-avatar-thread), .active-view-trans=
ition.open-sidebar[active-view-transition-type=3D"from-floating"]::view-tra=
nsition-group(profile-avatar-thread) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-old(thread), .active-view-transition.open-sideba=
r[active-view-transition-type=3D"from-floating"]::view-transition-old(threa=
d) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-new(thread), .active-view-transition.open-sideba=
r[active-view-transition-type=3D"from-floating"]::view-transition-new(threa=
d) { animation: auto ease 0s 1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-group(profile-avatar-sidebar), .active-view-tran=
sition.open-sidebar[active-view-transition-type=3D"from-floating"]::view-tr=
ansition-group(profile-avatar-sidebar) { animation: auto ease 0s 1 normal n=
one running none; z-index: 2; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-new(profile-avatar-sidebar), .active-view-transi=
tion.open-sidebar[active-view-transition-type=3D"from-floating"]::view-tran=
sition-new(profile-avatar-sidebar) { animation: auto ease 0s 1 normal none =
running none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"] { --vt-profile-avatar-sidebar: profile-avatar-active; --vt-profile=
-avatar-thread: profile-avatar-hidden; --vt_toggle_sidebar_closed: toggle-s=
idebar-icon; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"].update-callback-done { --vt_new_chat_thread: none; --vt_toggle_sid=
ebar_closed: none; --vt_toggle_sidebar_opened: toggle-sidebar-icon; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"]::view-transition-old(toggle-sidebar-icon) { display: none; }

@media (min-width: 768px) {
  .active-view-transition.open-sidebar[active-view-transition-type=3D"from-=
floating"]::view-transition-new(thread) { animation: auto ease 0s 1 normal =
none running none; }
  .active-view-transition.open-sidebar[active-view-transition-type=3D"from-=
floating"]::view-transition-old(root) { display: none; }
  .active-view-transition.open-sidebar[active-view-transition-type=3D"from-=
floating"]::view-transition-old(thread) { display: none; }
  .active-view-transition.open-sidebar[active-view-transition-type=3D"from-=
floating"]::view-transition-new(root), .active-view-transition.open-sidebar=
[active-view-transition-type=3D"from-floating"]::view-transition-new(thread=
) { animation: auto ease 0s 1 normal none running none; }
}

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"]::view-transition-old(thread) { animation: auto ease 0s 1 normal no=
ne running none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"]::view-transition-new(toggle-sidebar-icon) { animation: auto ease 0=
s 1 normal none running none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"]::view-transition-group(toggle-sidebar-icon) { animation: auto ease=
 0s 1 normal none running none; z-index: 3; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"]::view-transition-group(sidebar) { animation: auto ease 0s 1 normal=
 none running none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-fl=
oating"]::view-transition-new(sidebar) { animation: 0.3s ease 0s 1 normal n=
one running float-sidebar-in; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"] { --vt-profile-avatar-sidebar: profile-avatar-hidden; --vt-profil=
e-avatar-thread: profile-avatar-active; --vt_new_chat_sidebar: new-chat-ico=
n; --vt_toggle_sidebar_opened: toggle-sidebar-icon; --vt_search_sidebar: se=
arch-sidebar; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"].update-callback-done { --vt_new_chat_sidebar: none; --vt_toggle_s=
idebar_opened: none; --vt_new_chat_thread: new-chat-icon; --vt_toggle_sideb=
ar_closed: toggle-sidebar-icon; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-new(new-chat-icon), .active-view-transition.clos=
e-sidebar[active-view-transition-type=3D"from-floating"]::view-transition-n=
ew(root), .active-view-transition.close-sidebar[active-view-transition-type=
=3D"from-floating"]::view-transition-new(thread) { animation: auto ease 0s =
1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-old(thread) { animation: auto ease 0s 1 normal n=
one running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-new(new-chat-icon), .active-view-transition.clos=
e-sidebar[active-view-transition-type=3D"from-floating"]::view-transition-o=
ld(new-chat-icon) { animation: auto ease 0s 1 normal none running none; hei=
ght: 100%; object-fit: none; overflow: clip; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-old(new-chat-icon) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-old(toggle-sidebar-icon) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-new(toggle-sidebar-icon) { animation: auto ease =
0s 1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-group(toggle-sidebar-icon) { animation: auto eas=
e 0s 1 normal none running none; z-index: 3; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-group(sidebar) { animation: auto ease 0s 1 norma=
l none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-new(sidebar) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-f=
loating"]::view-transition-old(sidebar) { animation: 0.3s ease 0s 1 normal =
forwards running float-sidebar-out; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"] { --vt-profile-avatar-sidebar: profile-avatar-hidden; --vt-profile-=
avatar-thread: profile-avatar-active; --vt_model_picker: model-picker; --vt=
_new_chat_sidebar: new-chat-icon; --vt_toggle_sidebar_opened: toggle-sideba=
r-icon; --vt_search_sidebar: search-sidebar; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"].update-callback-done { --vt_new_chat_sidebar: none; --vt_toggle_sid=
ebar_opened: none; --vt_new_chat_thread: new-chat-icon; --vt_toggle_sidebar=
_closed: toggle-sidebar-icon; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-new(sidebar), .active-view-transition.close-sideba=
r[active-view-transition-type=3D"from-pinned"]::view-transition-old(sidebar=
) { height: 100%; object-fit: none; overflow: clip; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-group(toggle-sidebar-icon-closed) { display: none;=
 }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-old(toggle-sidebar-icon-opened) { animation: auto =
ease 0s 1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-group(search-sidebar), .active-view-transition.clo=
se-sidebar[active-view-transition-type=3D"from-pinned"]::view-transition-ol=
d(search-sidebar) { animation-duration: 0.1s; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-group(toggle-sidebar-icon-closed), .active-view-tr=
ansition.close-sidebar[active-view-transition-type=3D"from-pinned"]::view-t=
ransition-group(toggle-sidebar-icon-opened) { z-index: 2; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-new(sidebar) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-new(toggle-sidebar-icon) { animation: auto ease 0s=
 1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-group(sidebar) { animation: auto ease 0s 1 normal =
none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-old(sidebar) { animation: float-sidebar-out var(--=
vt-duration,.3s) var(--vt-timing-function,var(--spring-common)) both; heigh=
t: 100%; object-fit: none; overflow: clip; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-group(profile-avatar-thread) { display: none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-group(profile-avatar-sidebar) { animation: auto ea=
se 0s 1 normal none running none; z-index: 2; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-new(profile-avatar-sidebar) { animation: auto ease=
 0s 1 normal none running none; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-new(thread), .active-view-transition.close-sidebar=
[active-view-transition-type=3D"from-pinned"]::view-transition-old(thread) =
{ animation-duration: 0.1s; }

.active-view-transition.close-sidebar[active-view-transition-type=3D"from-p=
inned"]::view-transition-new(thread), .active-view-transition.close-sidebar=
[active-view-transition-type=3D"from-pinned"]::view-transition-old(thread) =
{ height: 100%; object-fit: none; overflow: clip; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"] { --vt-profile-avatar-sidebar: profile-avatar-active; --vt-profile-a=
vatar-thread: profile-avatar-hidden; --vt_model_picker: model-picker; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-old(sidebar) { display: none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-group(sidebar) { animation: auto ease 0s 1 normal n=
one running none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-new(sidebar) { animation: float-sidebar-in var(--vt=
-duration,.3s) var(--vt-timing-function,var(--spring-common)) both; height:=
 100%; object-fit: none; overflow: clip; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-group(toggle-sidebar-icon-closed) { display: none; =
}

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-new(toggle-sidebar-icon-opened) { animation: auto e=
ase 0s 1 normal none running none; }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-group(thread) { --vt-timing-function: var(--spring-=
common); }

.active-view-transition.open-sidebar[active-view-transition-type=3D"from-pi=
nned"]::view-transition-new(thread), .active-view-transition.open-sidebar[a=
ctive-view-transition-type=3D"from-pinned"]::view-transition-old(thread) { =
height: 100%; object-fit: none; overflow: clip; }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: image/png
Content-Transfer-Encoding: base64
Content-Location: https://lh3.googleusercontent.com/a/AGNmyxYSfTZd0pe91C3CnutKj2W-Sdgf_X6Cwzq13dKX=s96-c

iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAIAAABt+uBvAAAAA3NCSVQICAjb4U/gAAAAX3pUWHRS
YXcgcHJvZmlsZSB0eXBlIEFQUDEAAAiZ40pPzUstykxWKCjKT8vMSeVSAANjEy4TSxNLo0QDAwML
AwgwNDAwNgSSRkC2OVQo0QAFmBqYWZoZmxmaAzGIzwUASLYUyTrUQzIAABufSURBVHic7Vx3fBTV
9j/nzsz29E0hPYQ0WgJEikAIIh1pAqKiogiI+CwgIgr6VN5Tnyigz650EAkQkCYYaaGETiCEBJJA
IJUkm7Ipuzsz9/7+SAgx2TRIAr/P8/uZP3Zn7tw5851z7z1tBiccDIW/UT/I/RbgQcffBDWCxglC
gm0gxwMrQCMEIcHClDLC3zcRkWBRWvl95KgxgjhI2pxTlFaB3P0RkVEWuyj1fl0dGh9iDNqF26Xt
yaMWCm0uJBIsuWky3ZQZZW197dtokCAEANC6Kjo85nJ5YzYnECTQljQhAUNSabd57kxm1fK0Meon
CMFcKJVmmakI5hLRvbf9jYMFZTkWsVRuS0FNhZLGRSGWyUhANtG2nw35+g4gorlYNBslIqCNu0rl
pGAMynLNGmeFQse1usYjEA5NhaK9v1rQ8pKJqvVC8uZc5DB4khuTGGOM0dYWAqABghhldn6aqt+M
UZE6Bmqr/rQ2PQiyiaYfLcxLKA2d5llhENN+z7PzUeeeKQl72ev89zdsfdQO/ho7X3UbcIQPrKsh
ixQROQUyBtTCAAAJEAWhIqUyIxy2zdpfrwbdd3AKAgCVOkIUCADAgMkMCXIcQlstaw8uQX+hgNV/
qJXxP+SLIYd3sf7+rxBEeDz52TVgNYwpBGwCX/8rBAGAvrPu0rosTiAAAAhimVxeIDbKUYsR1Iru
EgISrNzuug9GwTFIywkk91wJ4ZETyJH3UsxFYqNa1DIEIYdZx4uIUHWxllmAEZBDTiBMYqWZJkNS
WcmNCrjbJ8EYs/FQadspClPLxTL52r58n0GOSlseGjPqWmYVQwLXY/I1Lgp7fw0SyLtQqu+kuxcP
k/BIJXYrviTt97ybO401Dw1eHejQXkPlpnaOBConHkFLSrPMnZ/zOPzulQ6jXBQ6jtdwQBAbNMq5
jlPd7vo2akiBnIqkbLvl0cfekFR2dXuOd6Tj3Zm5yCEiZhwp3PdMcvruwpIrlloN0rYV+E8UeIW6
Sb0RMGaYK/ItpkLRXCTlXSrVB+s8+znY+2uyTxULKs5cJFmMssqer890aAGCkENE4BVE7aJI2ZnH
GFM7KPSdbYA102BB4BTEcKVs59jEjD+L62tlpwx0tRmn7HoeqKrxLhFMBolaGGNAZebQXqN2EoiC
AGVaV6VYKjMKQEDloKhP1HsdYkxmWSeKCI9IMO+isdMUd4WWO/JRio23Su0o2PlpmjjQCI9imXzu
2xupGwsbbvnojFkjp87619YveozoSsVG5iNGwc5XVTNQwigDBgxAZc+rHIQ7O+vBvRKEHDp00CIC
Y+AUpBV0PDAW/oovlRmvJk3yaxE4geScKT70j7SmXLHfmIk2euUE90OnsgY4uYY2OpAZBauazBg0
OkNDi6xiGr2gdhI0eoHXcowyxkDlwGv0gqDlagqGCEgACSDeeaLIIRXZqaXXmsjOyBc+9AzwsJih
x8gI3D2XQva9y98wWtebRw4psYjMaBZzKkpFsxkYgMCDzlZQK72UaFuUVrF3SnLTO1x1waxQKxgD
RDAbLV9sVIaM6ULFVjR3W9FZRQ6OXT4ffLJfv4TJXqk+tnpbtUpNkJgs5sJcw8Ue55cHLYXlzejw
39GJKp1ClgAAGAOdk8Ih/s3C0CX2XmGtF7RuLQ1CHg7ExG/fecrDx4MRypCxGuMNAXngE/MuDzvw
SBM7fHV5dL8xY8Xbiz4hkJ2cfMiLZEZv9+m/CLmgVnLxSdW80NKbxJU+FfuGZ3sPCzGLIEpMkplc
vUlMMjFTsGvQ2gEbmyLlvO9j+o+9ww4AIIEbiQn69n7d585NXGfiBBkJtsaN8PGZJS1LuQaIHeGK
zanjc3pJTlIDLS2yJaLdgPdDP/ogflEDzT7//ZpXsK/FXHt/RUUZEXiOg06zktP3BlUE+FfQlg/B
8lu29mipvhBRxXP5ZaZjV7O/T4SgMcEUGpHYLJumBj9/5tbpndnb6x59Ys5/R734sqBEsbY5DQAg
CKoKUabAuYQHHvnjm90/RCmd9LSlA+ZI35zRMh0hypQuiTv79tEzAOCjCDo4fr8oW7uzv4JDTmJy
UJRfzZ0jX/jniOdfdvZ2lizWjRXCQUrc8Ut929u7uzIGIoC2W48vh4UBJ7RsUoGXW6g7nuDYzbt2
pmdV/h1vGc0DJ9bfniAhjEhlcnJy8sHUA/ti9g2ZMMR/wIynn5zpG9TRxlEliiDWGVbVYBQ8Ajvu
u3DSwXMwk0ApwJ8LFy349acPvBx5lboF9YjwXEtsPJdWWFzNDqV0SvzkNRvXCLJQK8xJkPCMxzJM
PJC49uyao5MOdI4NDPu18+BBg/8749svssYUHTqdlJZQbgLCA+HqJ4iBzsnO5nQyVLZhwLl4zfnh
5/fKiKW8lOe5lrkvjvArzl+6d5p5JDHX0wAcAAoBYMjowdGbtgWZghY99f6zuS/YudkyYEjRYhQT
Yi8kdrvkNbtd5E+Rj7UbZiw3njget3nz5icnPSnJYqhXt9Bbobe+zI479OWleVqXiJ6BwV0EHqgM
dV0KmUFPvy6Xr+U4eLoBwsW0ZOdB3T9ZsSriuanDf1/vEdBNaom0Gf9CaKd77wU4lm8Me/zR4WNj
hgNA70v9V2rWhZ8J/WLLktXrVzu+5WrJsiQNuew/3SdiTcQ4l1GGEkPs0dgNb/3afl3AOljbb1Bf
AGAAlMqSIDm4Oo+aNP6xFJYZmx6Xtfzyi/qQyIGe3u5MBirfuSaVIbjfgD2rvnD6YE6ZBT4vK6h0
YQ6vXvXRPOfJplyFRnPvxhGKc6ffaxcAIi37+vAjkwMfi8mImRr79JVJ17VUc3zzifiPTgT6Bgla
YeCAgS6OLvmF+QePHExemeIb7R82KNTWwTbOECdb5HybvFd2v7Tsza/GpI6ThDuWAUFCgDCznJhw
fm/YVYepwzp37SzXmLYJB2lxcSe7t4vbufv6rGdUWl3lfgrwVf/w13r3kO55MmoBV4MgXi7I6OIU
IjM5WBv8ndeKs5vOpDxxtcvukDd6z3FwcMjNyz0We3zlxhWPbhw+bNjwHtrebBJjwIy0dMm5/2wZ
sm1TkXVzkTJKgYICOvbo3oWGX1t0ZWXA4r7vzrG10VSrkl/v3u/6462c7Gp2AIAA2M58XYz7HVWa
6p0cQQSkjDVrCrfi5vGE8KQZ7h8ixOfmeardD0Uf2t5hq8+KdsOMj7y7cX63bt327NvzSeSSb1x+
1Dqot/+y3X6dNv7384QjMpMFIiw9v2RJ3y9kKjUaWJOZbEHRK9D/A3lqdu/PigqNvAIowMkjpzKj
vxZFi7Nr7bCfo5ubxWKpXiA4ggfSM1deuJxWVEKaku6pZqP2f0J+ik8UKX0xtGNTu0HZcGvC75E7
Bp7pZ44rDfQP3LVt9/XlGZ1SO4f36tPHWSCTSfJzyUtmL3nzzTcvPnRxZdDKqWOnXiq55KTSe+u8
qdT4VIqABAnKyEQc23XChGlzI58c3Edvmj9ioGu72VZPKcjKUiqV1cTLlA3w9gAAgOZpUG2CJEpf
DO1Y+aMp5yOC0WyOP1fSy8lTUAgvTntx/a/rbz1T9NSoKeDPJCrJIFNKA3sFev/hs2DHwnnb5yyk
85fN+3LL59HrJm0QZZGD+hfz226tscB4ev+Z7OGZTqPtgroGHgtY7Ozs0rBgRetW8KGBUg0qrBuQ
NbQJrbWxMgc1kZpKEMSr6Un+f27bNvEfHcIC9sxeMuv9l3gL/92y7zt8H+zn076iory0rKysqLQs
oyyYdnJycFq9ZrV7uJvvU57Xc6756n0bGF4EiVgqbjz7S8iPHcZED3e0dWyiVPuOHB3voKCADQ9e
RFyfUBWNkhkLc9WHuehrWc7NmKQRgCMEAOQaSoqI0dtOpwxIURsqEjsl8mnKadOnjRk1xrO9e9ln
RTlO6Rqt1tXOwUbnpdXqbGxsnoMnK0+cPHnyB4MWt6cv1Hc5gsSQUbj7ke3v7FggEKHpchaUlFyb
OmDI+BcbfdKMsWe7BNf8W9evaCpBCFBiETdeSgbACSEdHNVKxoBDPJVw4fHLl8OCA+D1PZUtZXi5
xFhSUVFhNBrLjeWFhsL0q+lShSQWSqU55VKmPGfDq5/Dl1rQThz7hIwyx6wMMQQsKy6Pe/Lw+6+8
10QJK1FSVvb50IH/Hvt8NTscIgDU51E1SmJTCWIAtkrFrB5dKy9WOVYZgIeH9/Of/Gu88wBTpkm6
TPE82oCNHdjrvLUAGOXzy6J17/bv3/+7z3/wWOAzbGyfrTe2HBh+xM/WT2YyrcwwALDKdHmNfCxP
+EUX3hk/Zczbby9Qa1TeXt4dOnTw9/d3d3dvQMiU5ORpwcGHXnkKCEcYo4wRxHO5+YgQ6nKXjn4z
hhhjrJbdRRDTC2/23Twyok8/GSW0RYgEuF3chADz6VsxPn9of1D+4+3Z6c+mf/XqMtsbdn6Bfpaa
Xj6CIluRmpFanlwOCgAAgQg7Y3f+lh392zPRdcV49dVXIyMjAwMDPTw8bG1tCSGyLOdkZPy6actc
9/bjr9wcuHPXK0tfihw40snZDZB302mam6Cribu3pDlEi7HwOWVA7sQJJWYTpRKTZQAGlDJGgVFg
AEDtLRaDoTRhS/SJD97s2av3p5/+Z1LcUzXNZQAQUPho00fvPP4OJRQBi7OKU+ZdnvjYREmSjEbj
9evXV69e/dVXXzUgjPbnXyZMfkKjQkYBOCgpZ0dOnBi8deukQ5/1fmi0rYMeOJ4yuAslukuCeEIK
stPHtHso+OMPFY22JgAI3yL+54UlTjnOkdqBMlQZwgiIiDzya6+ueTpgikQlBSi+S//m4xOLa/Wx
b9++oUOH1trpOebp0Jdf8ozoRxTwF3sTATmgHBgKzfvPnh21/8+xx3aEd/DxcnAEBEqbYQrdDUE8
R5LPxw4et2D4zCkoNq6+RICTcXH/mVXmHxgio1zNDo+8yViWeeuGjdbOWe8GPDJgqcfT7Hdoeob2
rNvPG6+/vmz5cgAIW/CRR0SES7cwtattlQdbjwzIAeHBSOHkqYvJi1+FnQeXDoShfoND9N7AOKkJ
uRC+WV4FIACju6K+n/bzifEDe9L6A1p3ziBQbDSN7rvLf9IsC7sz9SiIIubArmPv6QM79iopyc+N
2TFyh2t4936HR+xfHPqh1a5Cu3QdcTrRr0cIY1A5iOUGBSAKuJVruLn212feKp/ePdzdbxV5gjdJ
YvL1tBWnfhvd6VB/n16NxYQBvx/cr/G7BAAAgRDZkHXM4pT9204/Lz1tPJoKgEA5yHxy7tfi66Jw
J1ShIMLu36ONO8f6enlSCQCB8HAjPevniLkHc5e6ulivp/Bf/sOw12Y0TErVZQnICIfXrF0wrTRi
1AjQcBQoZRSqBzURkgzXf7n5TIS3i0wbqotHNm9mU+4TCJeXmzmrQ4Td/DkqDpgMlY+x4fFFlBDz
7yVbY4arnHXVVjxBknEldee7uofCH5JuB2URwWSWNZe2PTHpcatdbd+x7dDoYxcSZwaF+MuWhq6L
BMrNYsEzcz4umGHj7ihS64FfDrkCU8kly+Sp3fqDTOstf1nYp3tlBKC+jTFGOLI78Vg3TQh5pG/a
0ZNp8fGZGRkms0Vl56DUcAjWxeWUsOnHHzavCrf3dqa3g3sIgBa2JHj/oMkTpBo6KCjgyLqfsTS9
b7+Iul2l3UxN6Hn1ucnPuc469I3bSe+wbgKP1uOFCBJC6bBXvlDMExzUMpOtNQKCBAHtBF1GQReN
Zq+90k6u5/YbmaQJIoC04OBmV/bFwy6heuqgUCiBQUlZsSEvLznh/M45UvkLowM6BTLxTlQUCTAB
dn/z4/ovAzxDO0jszqKuRMXPx1f6/j5fpeCrVxKOh2MHT7450Mkiw5YtW956662aMuQV3vra8YcX
Jk0zMzOPfIXBuP70+l3RQ3sN6M/Rv8zQSIDycGre+xsvTSE2ClbnuSEgB5xYKqUmp6SmpZq7me3O
Of4Jn/4yv69UT1ChIUORIFZIZfP/MM0MPGOjUFfavmaQAECl1nk423h17DDkGiR2PvPh21Gus6e7
eroAA0TISM+W//nVtiuP24e61GRHIEJs1B+qmKfVKr464kUI5OYU99ekevn2BAC1Wr1v374hQ4ZU
Hr2Vn/ul/7cvTphuZmYAkJikcNDMGPLyyNfT1rgsOrzg0e69+mk0HDJgCIVF5Rnvf/pz/DjOVUnr
KBiHXEVhxa4/dupX2veN6DvIJ0LBKSyyhf2KR1ct7RsWLlFaWSxa0ymrV4MQAFF+eZdxTuclBBt6
g4VDDkz09G+xR8dml4bqtBdLI7Z69BjXnwqsppQ84a+eubj7A7uH+z5cPbgQwSLC1Y0fL/5gwZ1L
Ix4+uL9nz56JiQkDwx+5MO6qKEi1bpgg4Sl3KyPrdNzRc9MhqT345kD/5cLA0SNQxdVlR4GKE5tO
GH7Knfb8tLqu7+JFC98xZoKgyDCWbb2S1t1V39+zXSVH9RLEc+Tn8wfDNTt0CitPwypNREaQATig
HKsc/FWBLkCOkdTExA0vlw8ZNbo624UIMoND33z049KFNYvADh34M7YiJCfzpq+/j95Vv3/xJ69l
jXBq51p3ukVEDjiUAGUAAlQAmcl1R5YCFFFRUYMuRXTr2K3WIcYYpfTYuXMh/13s4OxSWXHMgMm3
TSTrQwwBLFJ5Rs7sQSEasarOrXIurlePZCbL5HYIlwGHHBExz5Bz80ZahjG/oA8zzuk05NEa7BCQ
JPjz23/+vOSdWu8S5mTl+IQPCghxpxSAwciPF36/+7eHZ5+LfHyozNGaT4sxJoEEHFRnx+pCwRSr
Nq+amvm0j7tP9c6SkpIjR45ERUWtWrUKAMDLzzJxEDCgdeKN1gkiiAn5N/u4vYQUuQquotxkMlfw
vKDT6ogSmcCqHXGrEIA/uGvv0Zdk/ZSHPL2GOjraufAA9E6mlOOh0FCevOmrFZ8vJNxfZDh0YP8Z
6t9dAPn23CWL8OiI0bknDR8u//Gp+G6BIZ0lrFJPpAwqJ2kCjMda6oOAROS+/uO/c/Nfc3Vyrdxp
NBqXLVv23nt/iaL82sVH4DiroY96NAjxqiHbtUS1vmStyzS9m6+rTqszm825Obk5B/Mcv9f3frSP
zkEro2xltIOw7Ma3/ofeHOxsT6Uqk7faqkQChIOTsWdCpfiln86veeLNmzeXLf28jLTr9vRrtcLq
kgh6R8dh/55/NDEp+rv1oxJDJCKnmzJzwxVlAcSstROKjb5bSkaEjSQKvpIjHvni7OI1rqs+yv+n
VqWt7GfHjh2jR4+uJfDCnl0ndQ6WZOsGgfU5iOfIv1at9v1q1dOTnqh7tMhYtDdm75W5aZG2j3i1
92QCq7ZTOeQS4s8k/fCQj5eHXMNjry5QTLtyM/NQ9Lxpw33aB1QfNRgMGzZs8PX1zcjIeOmll6I2
bthf6D5gaCQwqPVQCQdI4Mb1Gwql2lHvrFAAY4AAgFBhkvf+65MPiifzKgVacP+2/bhaeuHZqohl
YWHhtGnToqNrx09+eLTv9O5dZLneuvR6CAKYl5r7WbSVkpSaOH7m2OGNR9RLbMJCw9zbeRAFEXhu
RV50p40vS7dHU2VgreBW6YUzca7FqZNGhHcJu1NwYzAY1m/Y0N7Pb+TIkTExMQ4Ojj16dAeAvNzs
z77eoOs5PqiLX62EKlQVz9dORhMOJIDUMcvCEgLPvnpy5rsz3F2qomt79+4dNmxYLeG91cp9T44J
0jvWpzsNEcSJ5jU9Bj337LMAIIpiaWmpJEmCINjZ2WGdpJJJNF1KupSUnGRMKTVfEf/IOOs9bBiV
KGOSwIR2GtlNwzoGu4eGhWt0NtVnZWVl7d6929vbu9rkCegQcDHhokp1pzz8csL5FZuP8SH9OnXr
KghVzk1VKLNSeqzSTQZQZCg/d/yYP02eOG64n1f7yga5ubmzZ8/esmVLLZljJo4Y5OfFqJUgdJMI
4pm8zMaza+TAJyZNys/Lq3loyNCh48ePC+8RHhQUpNPp6p7bMCRJOnny5Hfffbd27dp169aNGzdO
o9EAwNWrVwMDA61aWxk3rv+5P/ZEtkLj5e/l529jaycoCSEgiWCqKM/PzbuWfNlLzunf1e3hfv1V
6qrppqKiYuXKlbNn/yVr9nSg7yvhob093KDpeS2rBBHEtLz8gNVbGz65V69ezz//fGhoqK+vr5tb
Q6803Lp1KyUlZc+ePYsX146Evf76625ubm+//TbUl7q6DUNB3vVrqbm5BcUlpaJo0ai1eicbT08v
Hz8/XlBWNysuLo6Kipo+/c59tdepP47sM8Dbw1WnBcaaldeq31AkJMtYNjcmdmNKetO7mzFjhouL
i62tLQCUlJTk5eVtiooqNBiaePrMmTPfeOMNb29vtbpJ76rUhNlsPnvu3Mo1a3789tvKPW+Hdxnk
69nFRe9qqwPK6iblWWOPBBqOKBJEQsjNYuPK+MT34841V+J7A5n+xmthnTv7eHk5653t7e1sbWyU
StVf3nZGLK+oyMjISExK2rRj555fNgDAP9q79gwKDnZy9LbVCRyRKZPrr1YgiHqNumGOGg+58oQc
TM/gSZt+oYZRSkULtZiZaKaimYlmJpmYZCktzy8rNTMAtRrtdO1QUBO1DafWcWotERSVGkFZFSmN
6AYDjmCkj2fD8enG0z4SpQN8PO7mheHmopFEccujps9VH5qUF5PpvWSWmgSCmJhnCHC0V3Jcc0t4
WhUPylvPjDEvW5uPj505fCMzvcTYrBKeVkULlOBVdQRAEO+lqBgRCJKs0jIXjbr16EHEZhVSt4AG
8YTwHCkVpdibWdw9PHnGQKbUTatpPXYYg4IK0z1VmDUXHOKXp+N1gkJm7Pmuwfdelt6qH98ROPLl
qfiF/R5S1RPcqIsWGGLVqcdmWaj3BQggUhp1OaWdTjvIz7PRJQxapMr1PvLCEWzKTVaDAQiEPNMl
uCkLfCUelFXsLsAR/PN6Js+RZk18DECitOm0/j8miDEIcrJfcvzs6Zy81tPi/8cEUcY8dNpXHgp1
VCu5ZpVgNAfW+21eycf9A2VMQPSzs209y8AKERKlv1291pYcVdb2390VGdxN3VjTYUUmBceFuuq3
JKW2DUccwZ/iE78+m7A37UbrjZS7hpVlnjLmY2e7/cq1tpFApmxql2Ce5xJvFZSLoopr/a9YNgfW
7SCZylM6B8ptaOBIkhzs5NAGH7FsLqwTxBjYKRRtLOuDE+KoiXrH/N0J28aBxzZAS06KPCHrEpJF
yhiA+GD4ZRzBu3j9rWb7liRIpvTxYP/NSSlrLiZZZPm+qxJPSOyNrK/PXtyYeLUpHFHGeI4rNotb
ku+s4C359RcGoCBkSucgAJDp/fuIOAAAIECx2SJw3OzwrozSxl9aIWRj4tUis9leqZwY0qG6fYtF
FB9ANDfIaTVu8wB/7Paewep/C8oqrGrZA2e5Pmj4m6BG8DdBjeBvghrB3wQ1gv8DmanWHbjwfrcA
AAAASUVORK5CYII=

------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/css
Content-Transfer-Encoding: quoted-printable
Content-Location: chrome-extension://gpaiobkfhnonedkhhfjpmhdalgeoebfa/fonts/fabric-icons.css

@charset "utf-8";

@font-face { font-family: FabricMDL2Icons; src: url("fabric-icons.woff") fo=
rmat("woff"); }
------MultipartBoundary--ACdpd4TCevoOd36rDo3RLaoV5fo0BjZBwrLR3fTUqx----
Content-Type: text/html
Content-ID: <frame-047A912AC28364CBFA959209CC91EC3B@mhtml.blink>
Content-Transfer-Encoding: quoted-printable

<html><head><meta http-equiv=3D"Content-Type" content=3D"text/html; charset=
=3DUTF-8"></head><body></body></html>
------Daniela Mahecha------
