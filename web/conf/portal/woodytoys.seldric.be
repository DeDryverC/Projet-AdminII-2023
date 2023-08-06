server {
	listen 80;
	listen [::]80;
	
	root /var/www/woodytoys.seldric.be;
	index index.html index.html index.nginx-debian.html;
	
	server_name woodytoys.seldric.be www.woodytoys.seldric.be;

	location / {
		try_files $uri $uri/ =404;
	}
}