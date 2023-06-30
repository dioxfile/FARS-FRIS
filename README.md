# FSRA and FRIS
## This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License or (at your option) any later version.                               
   * This program is distributed in the hope that it will be useful,  but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A IPICULAR PURPOSE.  See the GNU General Public License for more details.                          
   * You should have received a copy of the GNU General Public License along with this program; If not, see <http://www.gnu.org/licenses/>.
### Framework for Security Risk Analysis (FSRA) and Fuzzy Risk Inference System (FRIS) based on Standard ISO/IEC 27002:2022
  * Test results with FRIS (e.g., Files *.mat).                                       
  * MatLab and GNU Octave Codes (Fuzzy Logic Package) (e.g., Files *.m and *.fis).           

## Tutorial: How to Use the Fuzzy Risk Inference System (FRIS) Introduction
### This tutorial guides how to use FRIS, a risk assessment tool developed to identify the degree of security risk in which the organization is based on ISO/IEC 27002:2022.

## Requirements
To use FRIS, it is necessary to know the Fuzzy Risk Assessment Framework (FSRA), an integral part of FRIS. In addition, you must have MatLab or GNU Octave software installed on your computer.

### How to Install MatLab and Fuzzy Logic Toolbox on Linux: To install MATLAB on Linux, you must download the installer from MathWorks' official website (https://www.mathworks.com/).
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
  * The value 100% will be divided by the number of sub-items of each control. Thus, if 25 subitems are fulfilled by the organization (e.g., out of a total of 51), for example, the Security Practices (SP) control subitems, then the FRIS entry for this subitem will be = 49.02%. This procedure must be done for the other controls, Software (S) and People (P). In this context, if an organization meets 56% SP, 43% S and 61% P, then the Security Risk (SR) the organization is at, using the Centroid defuzzification method, will be 50%;
  * Items for each control are in the Controls.docx file. Thus, for the organization to know what it is complying with and what level of security risk it is in, the Security Analyst must download the file and check how many items of each control the company has complied with, as explained above.

### How to use FRIS
  * FRIS accepts a matrix [N X 3], where N represents the number of rows and three the number of columns, or simply a vector with elements [x1,x2,x3]. ### How To assess risk using FRIS, follow these steps:
  * Loading a Database: Use the command load('inputs.mat'); in Octave or Matlab to load the database. This database is used to test FRIS.

### Assess the Risks: Use the function evalfis(fris,[],100); to assess risks based on the loaded database. Change Defuzzification Method: You can change the defuzzification method using one of the following commands:
     * fis.defuzzificationMethod = 'mom';
     * fis.defuzzificationMethod = 'centroid';

### Save Results: After evaluating the risks, you can save the obtained results using one of the following commands:
     * Octave: save -V7 outputs.mat results;
     * MatLab: save('outputs.mat', 'results');

## How to can I use FRIS on GNU Octave and MATLAB?
    * First - run GNU Octave or MATLAB;
    * Second - On line 15 of sirf.m change the code from for i=1:5000 to for i=1:1 (since we are only going to run one input (e.g., SP=56%, S=46%, and P=61 %)
    * Third - At the prompt enter the following code: inputs=[56, 46, 61];. Press <ENTER>
    * Fourth - At the prompt, enter the following command: save -V7 inputs.mat inputs
    * Fifth - run FRIS, At the prompt, with the following command: run sirf.m

### After that, the following result will appear:
* CC=50

It means that with these entries the security risk is 50%.
