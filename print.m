data=load('inputs.mat');
for i=1:5000
    disp(['' num2str(data.inputs(i,1)),'|', num2str(data.inputs(i,2)), '|',num2str(data.inputs(i,3))])
end