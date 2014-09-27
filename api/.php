Options +FollowSymLinks
RewriteEngine On

RewriteRule ^/?$ index.php [L]
RewriteRule ^([^/\.]+)/?$ index.php?resource=$1 [QSA,L]
RewriteRule ^([^/\.]+)/([^/\.]+)/?$ index.php?resource=$1&resourceId=$2 [QSA,L]
RewriteRule ^([^/\.]+)/([^/\.]+)/?$ index.php?resource=$1&resourceId=$2&modifier=$3 [QSA,L]
