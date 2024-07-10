#!/bin/bash
rm $PWD/sr.txt
mv ~/Downloads/sr.txt .
cat sr.txt | awk -F"," '{printf "Security Practices: %.3f%\n", $1}'> result.txt
cat sr.txt | awk -F"," '{printf "Software:           %.3f%\n", $2}'>> result.txt
cat sr.txt | awk -F"," '{printf "People:             %.3f%\n", $3}'>> result.txt
./octave.m > sra.txt
