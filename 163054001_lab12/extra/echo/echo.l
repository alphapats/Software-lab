%{
// Text to be placed in the output file

using namespace std;

%}
TERMINATE STOP\n
%%
{TERMINATE}   {exit(0);}                     
%%
#include <cstdio>
int main (int argc, char*argv[]) {
 yylex ();
}
