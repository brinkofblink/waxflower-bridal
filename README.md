# waxflower

## Dev setup

- Install dependencies:

```
bin/prep
```

- Append to your hosts file:

```
127.0.0.1 so-waxflower.dev
127.0.0.1 assets.so-waxflower.dev
```

- Append to your Apache vhosts config (make sure you change the paths):

```
<VirtualHost *:80>
  ServerName so-waxflower.dev
  DocumentRoot "<PATH>/waxflower/back/public"
</VirtualHost>
<VirtualHost *:80>
  ServerName assets.so-waxflower.dev
  DocumentRoot "<PATH>/waxflower/front/dist"
  Header set Access-Control-Allow-Origin "*"
</VirtualHost>
```
