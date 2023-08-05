## MyNFT

MyNFT is a decentralized Marketplace that specializes in the purchase of digital assets. Its purpose is to make it much easier and simpler to trade NFTs.

## Dev Setup & Commands

Download:

- **[Node.js](https://nodejs.org/en/download)**

- **[Composer](https://getcomposer.org)**
- **[Laravel](https://laravel.com/docs/9.x/installation)**
- **[MySQL](https://www.mysql.com/downloads)**
- Or you can use: **[XAMP](https://www.apachefriends.org)**

Run this followed commands:

```bash
# Install Composer dependencies (Create the vendor folder)
composer install

# Install Node dependencies (Create the node_modules folder)
npm install

# Create the Storage link
php artisan storage:link

# Run the local server at [localhost:8080](http://127.0.0.1:8000)
php artisan serve

# Run the Vite hot reload (refresh to develop)
npm run dev

# Run the migrations (create the database tables)
php artisan migrate

# Run the migrations & create the seeders data (create the database tables with faker data)
php artisan migrate:refresh --seed
```
