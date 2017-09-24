%{
#include "checker.tab.h"  //has definition for token NUMTOKEN used in this lex file. the def comes from bison 
%}
word [a-zA-Z][a-zA-Z]* 
subject [A-Z][a-zA-Z]*  
%%
{word}	{ yylval = atof(yytext); return WORDTOKEN;}  // yylval is the value accessible in bison code
{subject}	{ yylval = atof(yytext); return WORDTOKEN;}  
[\n]    {}	
.    {}	
%%



