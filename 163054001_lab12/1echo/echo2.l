%{
#include <iostream>
#include <fstream>
#include <vector>
#include <map>
using namespace std;
vector<string>v;

%}

ID [A-Z][a-zA-Z0-9]*

%%
{ID} {cout<<(yytext)<<endl;}
.  {}

%%
#include <cstdio>
int main (int argc, char*argv[]) {

if(argc < 2) {
cout<<"need filename\n";
return 1;
}
if(!fopen (argv[1],"r")) { cout<<"ERROR!!!File opening error"<<endl; return 0; }
char var1;
char var2;
int j=0;
	yyin = fopen (argv[1],"r");
 yylex ();
 
}

