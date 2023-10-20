#!/bin/bash
rm $PWD/sr.txt
mv ~/Downloads/sr.txt .
cat sr.txt | awk -F"," '{print "Security Practices: "$1 " %"}'> result.txt
cat sr.txt | awk -F"," '{print "Software:           "$2 " %"}'>> result.txt
cat sr.txt | awk -F"," '{print "People:             "$3 " %"}'>> result.txt
./octave.m > sra.txt
 
