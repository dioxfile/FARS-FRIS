# Framework for Security Risk Analysis (FSRA) and Fuzzy Risk Inference System (FRIS) based on Standard ISO/IEC 27002:2022
### 1 - This program is free software; 
### 2 - You can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; 
### 3 - Either version 3 of the License or (at your option) any later version.                               
   * This program is distributed in the hope that it will be useful,  but WITHOUT ANY WARRANTY, without even the implied warranty of MERCHANTABILITY or FITNESS FOR A IPICULAR PURPOSE.  See the GNU General Public License for more details.                          
   * You should have received a copy of the GNU General Public License along with this program; If not, see <http://www.gnu.org/licenses/>.
### FSRA and FRIS based on Standard ISO/IEC 27002:2022
  * 5000 inputs to the FRIS (e.g., File inputs.mat).                                       
  * MatLab and GNU Octave Codes (Fuzzy Logic Package) (e.g., Files *.m and *.fis).  

## Tutorial: How to Use the Fuzzy Risk Inference System (FRIS) Introduction
### This tutorial guides how to use FRIS, a risk assessment tool designed to identify the degree of security risk an organization is at, based on ISO/IEC 27002:2022.

## Requirements
To use FRIS, it is necessary to know the Fuzzy Risk Assessment Framework (FSRA) (file Controls.docx), an integral part of FRIS. In addition, you must have MatLab or GNU Octave software installed on your computer.

### How to Install MatLab and Fuzzy Logic Toolbox on Linux: 
#### To install MATLAB on Linux, you must download the installer from MathWorks' official website (https://www.mathworks.com/).
     * cd /location/of/your/downloaded/file
     * sudo chmod +x install
     * sudo ./install

### How to Install Octave and fuzzy-logic-toolkit on Linux:
  * sudo apt-get install Octave & octave-fuzzy-logic-toolkit

### How to install GNU Octave on Windows: 
  * Download the installer from the official GNU Octave website (https://www.gnu.org/software/octave/download.html). After downloading, run the file and follow the installation wizard instructions;

### How To install the fuzzy-logic-toolkit in Octave, open Octave and type:
     * pkg install -forge fuzzy-logic-toolkit

### How to Install MatLab and Fuzzy Logic Toolbox on Windows: 
  *  To install MATLAB on Windows, you need to download the installer from MathWorks' official website (https://www.mathworks.com/products/get-matlab.html?s_tid=gn_getml ). After downloading, run the file and follow the installation wizard instructions. During installation, select and install the "Fuzzy Logic Toolbox."

#### Understanding FRIS and FSRA
FRIS follows three FSRA controls, which contain 93 sub-items of controls suggested by ISO/IEC 27002:2022—for example, Security Practices (SP), Software (S), and People (P).

### Assessment Strategy of the Security Risk Level in which the Organization is.
#### Procedures for using the FRIS:
  * The value 100% will be divided by the number of sub-items of each control. Thus, if 25 subitems are fulfilled by the organization (e.g., out of a total of 51), for example, the Security Practices (SP) control subitems, then the FRIS entry for this subitem will be = 49.02%. This procedure must be done for the other controls, Software (S) and People (P). In this context, if an organization meets 56% SP, 43% S, and 61% P, then the Security Risk (SR) the organization is at, using the Centroid defuzzification method, will be 50%;
  * Items for each control are in the Controls.docx file. Thus, for the organization to know what it is complying with and what level of security risk it is in, the Security Analyst must download the file (e.g., Controls.docx) and check how many items of each control the company has complied with, as explained above.

### How to use FRIS
  * FRIS accepts a matrix [N X 3], where N represents the number of rows and three the number of columns, or simply a vector with elements [x1,x2,x3].
### To assess risk using FRIS, follow these steps:
  * Loading a Database: Use the command load('inputs.mat'); in Octave or Matlab to load the database. This database is used to test FRIS.

## How to can I use FRIS on GNU Octave and MATLAB with one input?
    * First - run GNU Octave or MATLAB;
    * Second - On line 15 of sirf.m change the code from 'for i=1:5000' to 'for i=1:1' (since we are only going to run one input (e.g., SP=56%, S=46%, and P=61 %)
    * Third - At the prompt, enter the following code: inputs=[56, 46, 61;];. Press <ENTER>
    * Fourth - At the prompt, enter the following command: save -V7 inputs.mat inputs
    * Fifth - run FRIS, At the prompt, with the following command: run sirf.m

### After that, the following result will appear:
* CC=50
* It means that the security risk is 50% with these entries.

## How to can I use FRIS on GNU Octave and MATLAB with 5000 inputs?
    * First - run GNU Octave or MATLAB;
    * Second - On line 15 of sirf.m change the code from 'for i=1:1' to 'for i=1:5000' 
    * Third - At the prompt, enter the following code: 'load inputs.mat' and Press <ENTER>
    * Fourth - At the prompt, enter the following command: save -V7 inputs.mat inputs
    * Fifth - run FRIS, At the prompt, with the following command: run sirf.m
    * Sixth - To see the entries run the file print.m (e.g., run print.m) after performing steps First, Second, and Third
    
### After that, the following result will appear:
* 5000 outputs will appear with the following characters "C=" and "MoM", which mean Centroid, and Average Maximum (Or Mean Maxima)

# Simplified use of the FSRA framework.
* Step 1 - Download the entire contents of the INSTALL folder; 
* Step 2 - Create a folder with the command "mkdir FOLDER" and copy the INSTALL contents inside it; 
* Step 3 - Enter the new FOLDER, EX: "cd FOLDER", and give execution permission to the run.sh and INSTALL.sh files, EX: "chmod +x run.sh INSTALL.sh"; 
* Step 4 - Run the INSTALL.sh file, EX: "./INSTALL.sh"; 
* Step 5 - After executing INSTALL.sh, execute the following command, EX: "php8.1 -S localhost:8001". It will start a PHP web server inside the current folder; 
* Step 6 - Now open a web browser of your choice, and in the address bar type the following address, localhost:8001, after that, a web page will appear as shown in Figure 1:
## Figure 1:
* ![alt text](https://github.com/dioxfile/FSRA-FRIS/blob/master/FSRA1.png)
* Step 7 - Select all controls, which your organization complies with; 
* Step 8 - Now go to the bottom of the page and click on the "Load Controls Checked" button; * After that click on the link " Generate Security Risk Assessment"; 
* Step 9 - Now show the result by clicking on the "Show Security Risk Assessment" link. After this, a page will be loaded as shown in Figure 2. This figure shows the level of security risk in which the organization finds itself depending on the number of FSRA controls it has complied with.
## Figure 2:
*  ![alt text](https://github.com/dioxfile/FSRA-FRIS/blob/master/FSRA2.png)

## OBS:
  * The sirf.m code is designed to use the centroid method if the input values are between 60% and 100%. However, if the input values are less than 40%, the defuzzification method will be MoM (Average Maximum). Furthermore, any methods can be used for values between 40% and 59.999% because both presented similar test performances. However, in this situation, you must choose the defuzzification method, the "sirf.fis" file must be changed in line 12: DefuzzMethod='centroid' or DefuzzMethod='mom'
  * Here, input means the values of the security controls: Practices (SP), Software (S), and People (P).

