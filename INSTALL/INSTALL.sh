#!/bin/bash

#####	NAME:				INSTALL
#####	VERSION:			1.0
#####	DESCRIPTION:		Install softwares, dependencies, and running 
#####                       necessary files for FSRA to work  			
#####	DATE OF CREATION:	04/10/2023
#####	WRITTEN BY:			Diógenes Antonio Marques José
#####	E-MAIL:				dioxfile@gunemat.br			
#####	DISTRO:				Any Linux Based in Debian
#####	LICENSE:			GPLv3 			
#####	REPOSITORY:			https://github.com/dioxfile/FSRA-FRIS

#root permission lockout
_checks=`id -u`
_currentuser=`whoami`

if [ $_checks != 0 ]; then
	echo "Your user is ${_currentuser}. Need be root…"
	exit 1
else

    softwareInstall(){
        sudo apt install -y octave
        sudo apt install -y octave-fuzzy-logic-toolkit
        sudo apt install -y php8.1
    }
    
    softwareInstall
    echo -ne '\n'
    echo -e "\n\033[01;32mNow run the first command inside the folder where the application was downloaded:\n# 1- php8.1 -S 127.0.0.1:8001\n# 2- firefox (or google-chrome) http://127.0.0.1:8001\033[01;37m"
    exit 0
fi

