%{
#include "calc1.tab.h"  //has definition for token NUMTOKEN used in this lex file. the def comes from bison 
%}
NUM [0-9][0-9]*  
OPERATOR   [-%+*/^]
%%
{NUM}	{ yylval = atof(yytext); return NUMTOKEN;}  // yylval is the value accessible in bison code
{OPERATOR} { return yytext[0];}   	// operators
.    {}	
\n {}
%%

