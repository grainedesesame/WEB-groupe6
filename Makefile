PROJECT = pere-castor
SERVER_PORT = 8080
SERVER_DIR = /var/www/$(PROJECT)
APACHE_CONF_DIR = /etc/apache2
APACHE_SITE = 010-$(PROJECT)
APACHE_SITE_CONF = $(APACHE_CONF_DIR)/sites-available/$(APACHE_SITE).conf
APACHE_PORT_CONF = $(APACHE_CONF_DIR)/ports.conf
APACHE_PORT_CONF_DELTA = Listen $(SERVER_PORT)

CWD = $(dir $(realpath $(firstword $(MAKEFILE_LIST))))
SHELL = /bin/bash

.DEFAULT = install
.PHONY = install

install:
	ln -sfT '$(CWD)' '$(SERVER_DIR)'
	@echo -e "\
	<VirtualHost *:$(SERVER_PORT)> \n\
		DocumentRoot $(SERVER_DIR) \n\
		<Directory \"$(SERVER_DIR)\"> \n\
			Options Indexes FollowSymLinks \n\
			AllowOverride all \n\
			Require all granted \n\
		</Directory> \n\
	</VirtualHost> \
	" > $(APACHE_SITE_CONF)
	@echo 'Site configuration installed at $(APACHE_SITE_CONF).'
	@if ! grep -Fxq '$(APACHE_PORT_CONF_DELTA)' '$(APACHE_PORT_CONF)'; then \
		echo -e '$(APACHE_PORT_CONF_DELTA)' >> "$(APACHE_PORT_CONF)"; \
		echo 'Port $(SERVER_PORT) opened in $(APACHE_PORT_CONF).'; \
	fi
	@a2ensite $(APACHE_SITE) | head -n 1
	systemctl reload apache2
