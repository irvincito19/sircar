#!/bin/bash
clear
echo "-----------------LIMPIEZA--------------------"
echo ""
echo "_________________________________CONTENEDORES_________________________________"
docker ps -a
echo "_________________________________REDES_________________________________"
docker network ls
echo "_________________________________VOLÚMENES_________________________________"
docker volume ls
echo "_________________________________IMÁGENES_________________________________"
docker images
echo ""
docker stop sircar-db-1
docker stop sircar-app-1
docker stop sircar-phpmyadmin-1
docker rm sircar-db-1
docker rm sircar-app-1
docker rm sircar-phpmyadmin-1
docker volume rm mysql_data
docker network rm sircar_default
docker rmi sircar-app
echo ""
echo "-----------------DESPUÉS--------------------"
echo "_________________________________CONTENEDORES_________________________________"
docker ps -a
echo "_________________________________REDES_________________________________"
docker network ls
echo "_________________________________VOLÚMENES_________________________________"
docker volume ls
echo "_________________________________IMÁGENES_________________________________"
docker images
echo ""
