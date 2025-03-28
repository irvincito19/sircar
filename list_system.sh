#!/bin/bash
clear
echo "-----------------LISTADO DE COMPONENTES--------------------"
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

