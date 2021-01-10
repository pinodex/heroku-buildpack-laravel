location / {
	index  index.php index.html index.htm;
	index  index.php;

    try_files $uri $uri/ /index.php$is_args$query_string;
}

# for people with app root as doc root, restrict access to a few things
location ~ ^/(composer\.(json|lock|phar)$|Procfile$|<?=getenv('COMPOSER_VENDOR_DIR')?>/|<?=getenv('COMPOSER_BIN_DIR')?>/) {
	deny all;
}
