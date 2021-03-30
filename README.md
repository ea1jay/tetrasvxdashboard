# SVXLINK TETRA Dashboard
EN Version below

### Español:
Dashboard para los nodos de la red HamTETRA basados en SVXlink. Este Dashboard ha sido desarrollado por EA2CQ Iñigo basándose en el trabajo de [KC1AWV](https://github.com/kc1awv/SvxLink-Dashboard).

#### Preparativos:
1. Instalar PHP 7.3 y Apache2

`sudo apt -y install php php-common apache2`

2. Modificar usuario de Apache2

Modificar las lineas:
```
export APACHE_RUN_USER=www-data
export APACHE_RUN_GROUP=www-data
```

por
```
export APACHE_RUN_USER=svxlink
export APACHE_RUN_GROUP=svxlink
```

Una vez hecho el cambio, ejectutar: `sudo service apache2 restart`

3. Eliminar la opción "PrivateTmp" de Apache2
```
sudo cp /lib/systemd/system/apache2.service /etc/systemd/system/
sudo nano /etc/systemd/system/apache2.service
```
Modificar: `PrivateTmp=true`
por

`PrivateTmp=false`

Una vez hecho el cambio, reiniciar: `sudo reboot`

4. Habilitar en la configuración del SVXLink el uso de comandos remotos por puerto serie virtual

`sudo nano /etc/opt/svxlink/svxlink.conf`

A continuación de estas líneas
```
[TetraLogic]
TYPE=Tetra
RX=Rx1
TX=Tx1
```
añadir:
```
#La siguiente linea activa comandos DTMF por consola
DTMF_CTRL_PTY=/tmp/svxlink_dtmf
```

Una vez hecho el cambio, reiniciar el servicio: `sudo service svxlink restart`

5. Añadir el usuario svxlink al grupo sudoers

`sudo usermod -aG sudo svxlink`

6. Editar los comandos que no van a precisar meter contraseña cuando sean ejecutados con sudo

`sudo visudo`

Añadir al final:
```
svxlink ALL=NOPASSWD: /usr/sbin/service
svxlink ALL=NOPASSWD: /bin/cp
svxlink ALL=NOPASSWD: /bin/chown
svxlink ALL=NOPASSWD: /bin/chmod
svxlink ALL=NOPASSWD: /bin/systemctl
```

#### Instalando el Dashboard

1. Descargar los archivos en `/var/www/html`

```
cd /var/www/html
sudo rm index.html
sudo git clone https://github.com/ea1jay/tetrasvxdashboard.git .
```

2. Modificar `config.php` a nuestro gusto [OPCIONAL]

```
cd /var/www/html/config
sudo nano config.php
```

### English:
Dashboard for TETRA SVXlink based nodes. This Dashboard has been developed by EA2CQ Iñigo based on [KC1AWV's SVXlink Dashboard](https://github.com/kc1awv/SvxLink-Dashboard).
