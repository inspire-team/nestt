#! /bin/sh

cd /www/sites/ozlotteries.lan; composer install;

sed -i "/DB_COLLATE/a defined(\'WP_CONTENT_DIR\') or define( \'WP_CONTENT_DIR', dirname(__FILE__) . '/../wp-content' );" /www/sites/ozlotteries.lan/wp/wp-config.php
sed -i "/WP_CONTENT_DIR/a \$content_url = (!empty(\$_SERVER\['HTTPS'\]) \&\& \$_SERVER\['HTTPS'] !== 'off') ? 'https://' : 'http://';" /www/sites/ozlotteries.lan/wp/wp-config.php
sed -i "/\$content/a defined('WP_CONTENT_URL') or define( 'WP_CONTENT_URL', \$content_url .  \$_SERVER\['HTTP_HOST'].'/wp-content' );" /www/sites/ozlotteries.lan/wp/wp-config.php
