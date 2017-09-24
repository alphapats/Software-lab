%{
#include <iostream>
#include <fstream>
#include <vector>
#include <map>
using namespace std;
vector<string>v;

%}

ID [a-zA-Z0-9]+.
line \n


%%
{ID} {v.push_back(yytext);}
{line} {v.push_back(yytext);}
.  {v.push_back(yytext);}

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
 for(int i=0;i<v.size();i++)
 {
 	
 if (v[i] != "\n" )
 { j=i+1;
 	if (v[j] != "\n")
 {
cout<<v[j]<<" "<<v[i]<<" ";
i++;
}
else
{
	cout<<v[i]<<endl;
	i++;
}
}
else
{
	cout<<endl;

}

}
}

