FROM nixos/nix:latest

# setup phase
WORKDIR /app

# Copiar configuración de Nix
COPY .nixpacks/nixpkgs-5148520bfab61f99fd25fb9ff7bfbb50dad3c9db.nix .nixpacks/nixpkgs-5148520bfab61f99fd25fb9ff7bfbb50dad3c9db.nix
RUN nix-env -if .nixpacks/nixpkgs-5148520bfab61f99fd25fb9ff7bfbb50dad3c9db.nix && nix-collect-garbage -d

# Instalar Composer manualmente si es necesario
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY .nixpacks/assets /assets/
RUN chmod +x /assets/setup.sh && /assets/setup.sh

# install phase
COPY . /app/.
RUN composer install --no-dev --optimize-autoloader
RUN npm install

# build phase
RUN npm run build

# start phase
CMD ["/assets/start.sh"]