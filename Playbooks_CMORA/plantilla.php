<VirtualHost *:80>
  ServerName 192.168.100.156
  DocumentRoot /home/alexfaick/Descargas/diariostic-master/ 
  <Directory /home/alexfaick/Descargas/diariostic-master/>
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
