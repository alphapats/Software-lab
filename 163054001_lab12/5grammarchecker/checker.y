%{
#include <iostream>
#include <fstream>
#include <vector>
#include <string>
#include <map>

using namespace std;   // some declarations we need for c++ action code

int yylex (void); 
	// just the declaration, yyparse calls it, the imple. comes from flex generated code

void yyerror (char const *err) { cout << "ERROR:" << err << endl;};  
	// needs to be defined

//extern char* yytext; // use it if you need
//extern size_t yyleng; // useit if you need

char result[20], negresult[20]; // using it for storing  the result, in the end, we have final result in it
%}

%define api.value.type {char*}    // means our $$ return value from every expression is double
%token subject
%token verb
%token adjective
%token object


%%

rule1: subject verb adjective object'.' { printf("OK"); } 
rule2: subject verb object'.'  { printf("OK"); } 
rule3: subject verb '.' { printf("OK"); } 

	;

%%
#include <cstdio>
extern FILE *yyin;
void yyerror (char *const err) {cout <<"Error:" << err << endl;};


int main (int argc, char *argv[]) { // first arg: calc program
int i;
for(i = 1; i < argc; i++) {
FILE *f = fopen(argv[i], "r");
if(!f) {
perror(argv[i]);
return (1);
}
yyrestart(f);
yyparse();
fclose(f);
}
 cout << result << endl;

}




