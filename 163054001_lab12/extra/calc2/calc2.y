%{
#include <iostream>
#include <cmath>
using namespace std;   // some declarations we need for c++ action code

int yylex (void); // just the declaration, yyparse calls it, the imple. comes from flex generated code

void yyerror (char const *err) { cout << "ERROR:" << err << endl;};  // needs to be defined

//extern char* yytext; // use it if you need
//extern size_t yyleng; // useit if you need

double x; // using it for storing  the result, in the end, we have final result in it
%}

%define api.value.type {double}    // means our $$ return value from every expression is double
%token NUMTOKEN 
%left '+' '-'
%left '*' '/' '%'
%right '^'

%%

exp 	: exp '+' exp { x = $$ = $1 + $3;}
    	| exp '-' exp { x = $$ = $1 - $3;}
    	| exp '*' exp { x = $$ = $1 * $3;}
	| exp '/' exp { x = $$ = $1 / $3;}
	| exp '%' exp { x = $$ = fmod($1, $3);}
	| exp '^' exp { x = $$ = pow ($1, $3);}
	| NUMTOKEN {x = $$=$1;}
	;

%%
#include <cstdio>
extern FILE *yyin;
void yyerror (char *const err) {cout <<"Error:" << err << endl;};


int main (int argc, char *argv[]) { // first arg: calc program

 yyin = fopen (argv[1],"r");
 yyparse();

 cout << x << endl;

}


