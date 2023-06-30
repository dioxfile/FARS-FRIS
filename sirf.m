%## Read the FIS structure from a file.
pkg load fuzzy-logic-toolkit
fis = readfis ('sirf.fis');
%## Plot the input and output membership functions.
%plotmf (fis, 'input', 1);
%plotmf (fis, 'input', 2);
%plotmf (fis, 'input', 3);
%plotmf (fis, 'output', 1);
% Gere e plote a superfície 2D para a segunda variável de entrada
%gensurf(fis, [1 2]);
%## Plot the Tip and Check + Tip as functions of Food-Quality
%gensurf(fis,);
data=load('inputs.mat');
aux = [ ];
for i=1:2
  if data.inputs(i,1) < 40 && data.inputs(i,2) < 40 && data.inputs(i,3) < 40
    fis.defuzzMethod = 'mom';
    out = evalfis([data.inputs(i,1), data.inputs(i,2), data.inputs(i,3)],fis,101);
    aux = [aux; out];
    disp(['MoM=' num2str(out)]);
  else
    fis.defuzzMethod = 'centroid';
    out = evalfis([data.inputs(i,1), data.inputs(i,2), data.inputs(i,3)],fis,101);
    aux = [aux; out];
    disp(['CC=' num2str(out)]);
  end
 % disp(out);
end
