#!/usr/bin/octave -qf
%## Read the FIS structure from a file.
pkg load fuzzy-logic-toolkit
fis = readfis ('sirf.fis');
data=load('sr.txt');
aux = [ ];
for i=1:1
  if data(i,1) < 40 && data(i,2) < 40 && data(i,3) < 40
    fis.defuzzMethod = 'mom';
    out = evalfis([data(i,1), data(i,2), data(i,3)],fis,101);
    aux = [aux; out];
    disp(['Security Risc = ' num2str(out),' %']);
  else
    fis.defuzzMethod = 'centroid';
    out = evalfis([data(i,1), data(i,2), data(i,3)],fis,101);
    aux = [aux; out];
    disp(['Security Risc = ' num2str(out),' %']);
  end
end
