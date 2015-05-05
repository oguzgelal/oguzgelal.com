# nginx config file for oguzgelal.com

# server {
#     listen 80;
#     server_name www.oguzgelal.com;
#     return 301 http://oguzgelal.com$request_uri;
# }

server {
    listen 80;
    server_name new.oguzgelal.com;
    root /var/www/new.oguzgelal.com;

    location / {
        index index.php index.html index.htm;
        try_files $uri /index.php?$query_string;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
