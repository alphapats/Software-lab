%{
#include <iostream>
#include <fstream>
#include <vector>
#include <string>
#include <map>
#include <cstdio>
using namespace std;
vector<string>v;
char str[20], str2[20];
%}

ID [a-zA-Z][a-zA-Z]*

%%

{ID} {if((strcasecmp(yytext, str)) == 0)
		{
		cout<<str2;
		}
		else
		{
		cout<<yytext;}}

%%

int main (int argc, char*argv[]) {
if(argc < 4) {
cout<< "need 3 arguements: filename find_word replace_word\n";
return 1;
}
if(!(fopen (argv[1],"r"))) { cout<<"ERROR!!!File opening error"<<endl; return 0; }

yyin = fopen (argv[1],"r");
strcpy(str,argv[2]);
strcpy(str2,argv[3]);
yylex ();
 
}