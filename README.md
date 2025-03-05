#Tab 1: php artisan serve

#Tab 2:
sudo ip addr add 10.200.101.18/24 dev eth0
mitmdump --listen-host 10.200.101.18 --listen-port 8080

#Tab 3:
mitmdump -s fake_response.py --listen-host 127.0.0.1 --listen-port 8081



echo | openssl s_client -showcerts -servername cms-api.pacific-league.jp -connect cms-api.pacific-league.jp:443 2>/dev/null | openssl x509 -outform PEM > pacific-league.crt

sudo cp pacific-league.crt /usr/local/share/ca-certificates/

sudo update-ca-certificates

curl -I https://cms-api.pacific-league.jp