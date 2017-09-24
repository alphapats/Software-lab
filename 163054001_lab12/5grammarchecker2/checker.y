%{
#include <iostream>
#include <fstream>
#include <vector>
#include <string>
#include <map>
#include <stdlib.h>
#include <stdio.h>

#define YYSTYPE char *
using namespace std;   // some declarations we need for c++ action code

int yylex (void); 
	// just the declaration, yyparse calls it, the imple. comes from flex generated code

void yyerror (char const *err) { cout << "ERROR:" << err << endl;};  
	// needs to be defined

//extern char* yytext; // use it if you need
//extern size_t yyleng; // useit if you need
char state[20];
//char* result; // using it for storing  the result, in the end, we have final result in it
int flag=0;
%}

%token WORDTOKEN STOP


%%
check	: WORDTOKEN STOP {flag=1;}
		| WORDTOKEN WORDTOKEN STOP {flag=1;}
		| {flag=2;}
		;


%%
#include <cstdio>
extern FILE *yyin;
void yyerror (char *const err) {cout <<"Error:" << err << endl;};


int main (int argc, char *argv[]) { // first arg: calc program

 yyin = fopen (argv[1],"r");
 yyparse();
 if(flag==1)
 {
 cout << "Result:GRAMMER OK"<< endl;
 }
 else
 {
 cout << "Result:GRAMMER NOT OK"<< endl;
 }
 

}




