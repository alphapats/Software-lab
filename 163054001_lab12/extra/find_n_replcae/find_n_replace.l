%{
// Text to be placed in the output file

#include <iostream>
#include <fstream>
using namespace std;
int count=0;
char* findword;
char* replace;
%}
FINDWORD [[:alpha:]]*
%%
{FINDWORD} {if(strcmp(yytext,findword)==0) {cout<<replace; count++;}
	    else cout<<yytext;}                  
%%
#include <stdio.h>
int main (int argc, char *argv[]) {
yyin = fopen (argv[1],"r");
findword=argv[2];
replace=argv[3];
yylex();
cout<<"replaced "<<count<< " words\n";}



